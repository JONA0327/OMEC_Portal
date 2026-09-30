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

        return new Stock([

                'id_product'    => $row['id_product'],

                'id_warehouse'    => $row['id_warehouse'],

                'quantity'    => $row['quantity']

                

        ]);

    }

}

