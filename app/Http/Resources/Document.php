<?php
//app/Http/Resources/Product.php
 
 namespace App\Http\Resources;
 use Illuminate\Http\Resources\Json\JsonResource;
 class Document extends JsonResource
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
             'type' => $this->type,
             'description' => $this->description,
             'url' => $this->url,
             
             
         ];
     }
 }