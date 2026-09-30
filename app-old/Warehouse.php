<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Warehouse extends Model
{
    
    protected $table = 'warehouses';
    protected $fillable= ['idERP','name','id'];
    protected $guarded = [];
    
    public static function removeWarehouse($id){
        DB::table('warehouses')
        ->where('id',$id)
        ->delete();

        Stock::removeStocksWarehouse($id);
        
    }
    

    
    
}
