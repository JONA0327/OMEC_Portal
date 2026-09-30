<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Warehouse;

use App\Product;

use App\User;

use App\Stock;

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

use App\Imports\StocksImport;

use Maatwebsite\Excel\Facades\Excel;

use DB;

class StockController extends Controller

{

 

    public function index(Request $request)

    {

        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        
        
        $query = Stock::with(['product','warehouse']);
        
        
        if($request->brand){
            $brand=$request->brand;
            $query->whereHas('product', function($q) use ($brand)
                {
                    $q->where('brand',$brand);

                });
        }

        if($request->kinds){
            $kind=$request->kinds;
            $query->whereHas('product', function($q) use ($kind)
                {
                    $q->where('kind_of_product',$kind);

                });
        }
        
        $users=$query->get();
        //dd($users);
        $warehouses=Warehouse::all();
        
        $brands=Product::distinct('brand')->pluck('brand');

        $kinds=Product::distinct('kind_of_product')->pluck('kind_of_product');

        return view('admin.stocks.index', compact('users','warehouses','brands','kinds'));

    }



    public function create()

    {

        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        $products = Product::all();

        $warehouses = Warehouse::all();



        return view('admin.stocks.create',compact('products','warehouses'));

    }



    public function store(Request $request)

    {

         $this->validate($request, [ 

            'id_product' => 'required',

            'id_warehouse' => 'required',   

            'quantity' => 'required'

        ]);

        

        $order = new Stock;

        $order->id_product=$request->id_product;

        $order->id_warehouse=$request->id_warehouse;

        $order->quantity=$request->quantity;

        $order->save();

       

        return redirect()->route('admin.stocks.index');

    }



    public function edit($id)

    {

        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       

        $user=Stock::where('id',$id)->first();

        $products = Product::all();

        $warehouses = Warehouse::all();



        return view('admin.stocks.edit', compact('user','products','warehouses'));

    }



    public function update(Request $request,$id)

    {   

        $data = request()->except(['_method','_token']);

        $user=Stock::where('id',$id)->update($data);

        // $user->roles()->sync($request->input('roles', []));



        return redirect()->route('admin.stocks.index');

    }



    public function show(User $user)

    {

        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        $user->load('roles');



        return view('admin.stocks.show', compact('user'));

    }



    public function destroy($id)

    {

        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user=Stock::where('id',$id)->first();

        $user->delete();



        return back();

    }



    public function massDestroy(MassDestroyUserRequest $request)

    {

        Stock::whereIn('id', request('ids'))->delete();



        return response(null, Response::HTTP_NO_CONTENT);

    }

    public function Import(Request $request)

    {

        //dd($request);

        try {

            Excel::import(new StocksImport, request()->file('file'));

           

            return redirect()->back()->with('success', 'File has imported!');

        } catch (\Exception $e) {

            dd($e->getMessage());

            return back()->with('error', $e->getMessage());

        }

    }
    
    public function multidelete(Request $request)

    {

        //dd($request->warehouse_id);

        try {

            
            $stocks=Stock::where('id_warehouse', $request->warehouse_id)->get();
            //dd($stocks);
            $stocks->map->delete();
                       

            return redirect()->back()->with('success', 'Deleted Successfully!');

        } catch (\Exception $e) {

            dd($e->getMessage());

            return back()->with('error', $e->getMessage());

        }


    }
    public function setdate(Request $request)
    {
        $stocks=Stock::where('id_warehouse', $request->warehouse_id)->get();
        
        foreach($stocks as $stock){
            $stock->update(['created_at'=>Carbon::now(),]);
        }

        return redirect()->back()->with('success', 'Data is updated!');
    }

    public function sessions(){
        $sessions=DB::table('sessions')->get();
        //dd($sessions);
        return view('sessions',compact('sessions'));

    }
}

