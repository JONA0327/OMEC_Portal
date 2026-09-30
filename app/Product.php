<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    
    protected $table = 'products';
    protected $fillable= ['idERP','name','name2','description_short','description_supplier','brand','kind_of_product','clasification_code','active','base_currency','rotation','characteristic1','characteristic2','characteristic3','characteristic4','characteristic5','list_price','price1','price2','price3','price4','price5','id'];
    protected $guarded = [];
    
    public static function removeProduct($id){
        DB::table('products')
        ->where('id',$id)
        ->delete();

        Stock::removeStocks($id);
        
    }   

    
}
