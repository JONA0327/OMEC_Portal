<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\Imports\AbbreviationsImport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfParser\StreamReader;
use Spatie\PdfToText\Pdf;
use Validator;
use Illuminate\Support\Facades\Auth;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
 
    public function index(Request $request)
    {    //dd(trim($request->kinds));
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $query=Product::query();
        if($request->brand){
            $query->where('brand',trim($request->brand));
        }
        if($request->kinds){
            $query->where('kind_of_product',trim($request->kinds));
        }
        $users = $query->get();
        $brands=Product::distinct('brand')->pluck('brand');
        $kinds=Product::distinct('kind_of_product')->pluck('kind_of_product');
        
        return view('admin.products.index', compact('users','brands','kinds'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        //  $this->validate($request, [
            
        //     'type' => 'required',
        //     'description' => 'required',
        //     'url' => 'required',

        // ]);
        
        $user = Product::create($request->all());
   
        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         
        //$roles = Role::all()->pluck('title', 'id');

        $user=Product::where('id',$id)->first();

        return view('admin.products.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        //$data = request()->all();
        $data = request()->except(['_method','_token']);
        $user=Product::where('id',$id)->update($data);
        // $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.products.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user=Product::where('id',$id)->first();

        return view('admin.products.show', compact('user'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user=Product::removeProduct($id);
        

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function Import(Request $request)
    {
        //dd('sadsa');
        try {
            Excel::import(new AbbreviationsImport, request()->file('file'));
           
            return redirect()->back()->with('success', 'File has imported!');
        } catch (\Exception $e) {
           // dd($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
}
