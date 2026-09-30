<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Document;

use App\User;

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

class DocumentController extends Controller
{
 
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $users = Document::all();

        return view('admin.documents.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$roles = Role::all()->pluck('title', 'id');

        return view('admin.documents.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            
            'type' => 'required',
            'description' => 'required',
            'url' => 'required',

        ]);
        
        $order = new Document;
        $order->created_by= Auth::user()->id;
        $order->type=$request->type;
        $order->description=$request->description;
        $order->url=$request->url;
        $order->save();
       

        return redirect()->route('admin.documents.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         
        //$roles = Role::all()->pluck('title', 'id');

        $user=Document::where('id',$id)->first();

        return view('admin.documents.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $data = request()->except(['_method','_token']);
        $user=Document::where('id',$id)->update($data);
        // $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.documents.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user=Document::where('id',$id)->first();
        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
