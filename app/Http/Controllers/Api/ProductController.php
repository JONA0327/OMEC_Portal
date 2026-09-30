<?php



namespace App\Http\Controllers\API;

        use Illuminate\Http\Request;

        use App\Http\Controllers\Api\BaseController as BaseController;

        use App\Product;

        use Validator;

        use App\Http\Resources\ProductExt as ProductResource;

        use App\Http\Resources\Product as ProductResourceAdmin;

 

        class ProductController extends BaseController

        {

            /**

            * Display a listing of the resource.

            *

            * @return \Illuminate\Http\Response

            */

            public function index()

            {

                $products = Product::all();

                 //return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
                return $this->sendResponse(ProductResourceAdmin::collection($products), 'Products retrieved successfully.');

            }

            public function index2()

            {

                $products = Product::all('id','name','description_supplier','brand','kind_of_product','base_currency','list_price');
                //$products = Product::select('id','name','description_short','brand','base_currency','list_price')->where('brand','=','DELTA')->get('id','name','description_short','brand','base_currency','list_price');

                return $this->sendResponse(ProductResource::collection($products), 'Productos devueltos exitosamente.');


            }

            /**

            * Store a newly created resource in storage.

            *

            * @param  \Illuminate\Http\Request  $request

            * @return \Illuminate\Http\Response

            */

            public function store(Request $request)

            {

                $input = $request->all();

 

                $validator = Validator::make($input, [

                    'name' => 'required',

                    'detail' => 'required'

                ]);

 

                if($validator->fails()){

                    return $this->sendError('Validation Error.', $validator->errors());       

                }

 

                $product = Product::create($input);

 

                return $this->sendResponse(new ProductResource($product), 'Product created successfully.');

            } 

 

            /**

            * Display the specified resource.

            *

            * @param  int  $id

            * @return \Illuminate\Http\Response

            */

 

            public function show($id)

            {

                $product = Product::find($id);

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');

            }


            public function show_tmc($id)

            {

                $product = Product::find($id);

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(new ProductResourceAdmin($product), 'Product retrieved successfully.');

            }            

            public function showbyname($name)

            {

                $product = Product::where('name','=',$name)->first();

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');

            }

            public function showbyname_tmc($name)

            {

                $product = Product::where('name','=',$name)->first();

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(new ProductResourceAdmin($product), 'Product retrieved successfully.');

            }

            



            public function showbrands($id)

            {

                $product = Product::where('brand','=',$id)->get();

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(ProductResource::collection($product), 'Product retrieved successfully.');
                

            }



            public function showbrands_tmc($id)

            {

                $product = Product::where('brand','=',$id)->get();

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(ProductResourceAdmin::collection($product), 'Product retrieved successfully.');
                

            }
            

            public function showprice($id)

            {
                //$product = Product::where('id','=',$id)->get('list_price'); //ORIGINAL
                $product = Product::find($id, ['id','list_price']);
                //$products = Product::all('id','name','list_price');
                //$product = Product::where('id','=',$id)->first('list_price');
                //$product = Product::find($id);
                

                if (is_null($product)) {

                    return $this->sendError('Product not found.');

                }

 

                return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
  

            }

            /**

            * Update the specified resource in storage.

            *

            * @param  \Illuminate\Http\Request  $request

            * @param  int  $id

            * @return \Illuminate\Http\Response

            */

 

            public function update(Request $request, Product $product)

            {

                $input = $request->all();

 

                $validator = Validator::make($input, [

                    'name' => 'required',

                    'detail' => 'required'

                ]);

 

                if($validator->fails()){

                    return $this->sendError('Validation Error.', $validator->errors());       

                }

 

                $product->name = $input['name'];

                $product->detail = $input['detail'];

                $product->save();

 

                return $this->sendResponse(new ProductResource($product), 'Product updated successfully.');

            }

 

            /**

            * Remove the specified resource from storage.

            *

            * @param  int  $id

            * @return \Illuminate\Http\Response

            */

            public function destroy(Product $product)

            {

                $product->delete();

                return $this->sendResponse([], 'Product deleted successfully.');

            }

        }

    