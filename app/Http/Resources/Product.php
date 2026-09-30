<?php
//app/Http/Resources/Product.php
 
 namespace App\Http\Resources;
 use Illuminate\Http\Resources\Json\JsonResource;
 class Product extends JsonResource
 {
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public function toArray($request)
     {
         return [
             'id' => $this->id,
             'idERP' => $this->idERP,
             'name' => $this->name,
             'name2' => $this->name2,
             'description_short' => $this->description_short,
             'description_supplier' => $this->description_supplier,
             'brand' => $this->brand,
             'kind_of_product' => $this->kind_of_product,
             'clasification_code' => $this->clasification_code,
             'active' => $this->active,
             'base_currency' => $this->base_currency,
             'rotation' => $this->rotation,
             'characteristic1' => $this->characteristic1,
             'characteristic2' => $this->characteristic2,
             'characteristic3' => $this->characteristic3,
             'characteristic4' => $this->characteristic4,
             'characteristic5' => $this->characteristic5,
             'list_price' => $this->list_price,
             'price1' => $this->price1,
             'price2' => $this->price2,
             'price3' => $this->price3,
             'price4' => $this->price4,
             'price5' => $this->price5,
             
         ];
     }
 }
