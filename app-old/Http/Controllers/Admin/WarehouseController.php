<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Warehouse;

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

class WarehouseController extends Controller
{
 
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $users = Warehouse::all();

        return view('admin.warehouse.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$roles = Role::all()->pluck('title', 'id');

        return view('admin.warehouse.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [ 
            'idERP' => 'required',
            'name' => 'required',   

        ]);
        
        $order = new Warehouse;
        $order->idERP=$request->idERP;
        $order->name=$request->name;
        $order->save();
       
        return redirect()->route('admin.warehouses.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         
        //$roles = Role::all()->pluck('title', 'id');

        $user=Warehouse::where('id',$id)->first();

        return view('admin.warehouse.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {   
        $data = request()->except(['_method','_token']);
        $user=Warehouse::where('id',$id)->update($data);
        // $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.warehouses.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.warehouse.show', compact('user'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user=Warehouse::removeWarehouse($id);
        

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Warehouse::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
