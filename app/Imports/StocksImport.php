<?php



namespace App\Imports;



use App\Stock;

use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;




class StocksImport implements ToModel, WithHeadingRow 

{

    /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */
    

   


    public function model(array $row)

    {
        
        $checkIfProductExists = Stock::where('id_product', $row['id_product'])->where('id_warehouse', $row['id_warehouse'])->exists();
            if ($checkIfProductExists == true) {
                $check = Stock::where('id_product', $row['id_product'])->where('id_warehouse', $row['id_warehouse'])->value('quantity');
                $exist_quantity = $row['quantity'];
                //$increment_quantity = $exist_quantity + $check;
              $insert = Stock::where('id_product', $row['id_product'])->where('id_warehouse', $row['id_warehouse'])->update(['quantity' => $exist_quantity]);

            } else {
                return new Stock([
                    'id_product'     => $row['id_product'],
                    'id_warehouse'    => $row['id_warehouse'],
                    'quantity' => $row['quantity'],
                ]);
            }

        // return  Stock::updateOrCreate([

        //         'id_product'    => $row['id_product'],

        //         'id_warehouse'    => $row['id_warehouse'],

        //         'quantity'    => $row['quantity']

                

        // ]);

    }

    

}

