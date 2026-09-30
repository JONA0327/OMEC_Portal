<?php
//app/Http/Resources/Product.php
 
 namespace App\Http\Resources;
 use Illuminate\Http\Resources\Json\JsonResource;
 class Stock extends JsonResource
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
             'id_warehouse' => $this->id_warehouse,
             'id_product' => $this->id_product,
             'quantity' => $this->quantity,
            
         ];
     }
 }