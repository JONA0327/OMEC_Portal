<?php



namespace App;



use Illuminate\Database\Eloquent\Model;





class Stock extends Model

{

    

    protected $table = 'stocks';

    protected $fillable= ['id_warehouse','id_product','quantity','id'];
    //protected $fillable= ['id_warehouse','id_product','quantity'];

    protected $guarded = [];

    

    public static function getUserNameById($id){

        return Stock::where('id_product', $id)->sum('quantity');

          

    }

    

    public static function removeStocks($test_id){

        $records=Stock::where('id_product',$test_id)

        ->get();



        foreach($records as $record){

            Stock::where('id',$record->id)

            ->delete();

        }

        return true;

    }



    public static function removeStocksWarehouse($test_id){

        $records=Stock::where('id_warehouse',$test_id)

        ->get();



        foreach($records as $record){

            Stock::where('id',$record->id)

            ->delete();

        }

        return true;

    }



    public function product()

    {

        return $this->belongsTo(Product::class, 'id_product');

    }

    public function warehouse()

    {

        return $this->belongsTo(Warehouse::class, 'id_warehouse');

    }



    

    

}

