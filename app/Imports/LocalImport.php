<?php



namespace App\Imports;

use App\Product;

use App\Stock;

use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;




class LocalImport implements ToModel, WithHeadingRow 

{

    /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */
    

   


    public function model(array $row)

    {
        $idproduct = Product::where('idERP',$row['iderp'])->value('id');
        //$idproduct = Product::where('idERP',$row['idERP'])->value('id');
        $checkIfProductExists = Stock::where('id_product', $idproduct)->where('id_warehouse', $row['id_warehouse'])->exists();
        if ($checkIfProductExists == true) {
            //$check = Stock::where('id_product', $idproduct)->where('id_warehouse', $row['id_warehouse'])->value('quantity');
            $exist_quantity = $row['quantity'];
            //$increment_quantity = $exist_quantity + $check;
          $insert = Stock::where('id_product', $idproduct)->where('id_warehouse', $row['id_warehouse'])->update(['quantity' => $exist_quantity]);

        } else {
            if($idproduct != '' && $row['id_warehouse'] !='' && $row['quantity'] !='' ){
            return new Stock([
                'id_product'     => $idproduct,
                'id_warehouse'    => $row['id_warehouse'],
                'quantity' => $row['quantity'],
            ]);
            }
        }
        /*$checkIfProductExists = Stock::where('id_product', $row['iderp'])->where('id_warehouse', $row['id_warehouse'])->exists();
            if ($checkIfProductExists == true) {
                $check = Stock::where('id_product', $row['iderp'])->where('id_warehouse', $row['id_warehouse'])->value('quantity');
                $exist_quantity = $row['quantity'];
                //$increment_quantity = $exist_quantity + $check;
              $insert = Stock::where('id_product', $row['iderp'])->where('id_warehouse', $row['id_warehouse'])->update(['quantity' => $exist_quantity]);

            } else {
                if($row['iderp'] != '' && $row['id_warehouse'] !='' && $row['quantity'] !='' ){
                return new Stock([
                    'id_product'     => $row['iderp'],
                    'id_warehouse'    => $row['id_warehouse'],
                    'quantity' => $row['quantity'],
                ]);
                }
            }

            */

        // return  Stock::updateOrCreate([

        //         'id_product'    => $row['id_product'],

        //         'id_warehouse'    => $row['id_warehouse'],

        //         'quantity'    => $row['quantity']

                

        // ]);

    }

    

}

