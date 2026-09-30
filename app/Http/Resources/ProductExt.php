<?php
//app/Http/Resources/Product.php
 
 namespace App\Http\Resources;
 use Illuminate\Http\Resources\Json\JsonResource;
 
 class ProductExt extends JsonResource
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
            'name' => $this->name,
            'description_supplier' => $this->description_supplier,
            'brand' => $this->brand,
            'kind_of_product' => $this->kind_of_product,
            'base_currency' => $this->base_currency,
            'list_price' => $this->list_price,
            
        ];
     }
 }