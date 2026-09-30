<?php



//namespace App\Http\Controllers\API;
namespace App\Http\Controllers\Api;

        use Illuminate\Http\Request;

        use App\Http\Controllers\Api\BaseController as BaseController;

        use App\Product;

        use App\Stock;

        use Validator;

        use App\Http\Resources\Product as ProductResource;

        use App\Http\Resources\Stock as StockResource;



        class StockController extends BaseController

        {

            /**

            * Display a listing of the resource.

            *

            * @return \Illuminate\Http\Response

            */

            public function index()

            {

                $products = Stock::all();

 

                return $this->sendResponse(StockResource::collection($products), 'Stocks retrieved successfully.');

            }

 

            

            /**

            * Display the specified resource.

            *

            * @param  int  $id

            * @return \Illuminate\Http\Response

            */

 

            public function warehouse($id)

            {

                $product = Stock::where('id_warehouse','=',$id)->get();

                if (is_null($product)) {

                    return $this->sendError('Stocks not found.');

                }

 

                return $this->sendResponse(StockResource::collection($product), 'Stocks retrieved successfully.');

            }


            public function showstockbyid($id)

            {

                $product = Stock::where('id_product','=',$id)->get();

                if (is_null($product)) {

                    return $this->sendError('Stocks not found.');

                }

 

                return $this->sendResponse(StockResource::collection($product), 'Stocks retrieved successfully.');

            }


            

           

        }

    