<?php



namespace App\Http\Controllers\API;

        use Illuminate\Http\Request;

        use App\Http\Controllers\Api\BaseController as BaseController;

        use App\Product;

        use App\Document;

        use Validator;

        use App\Http\Resources\Product as ProductResource;

        use App\Http\Resources\Document as DocumentResource;



        class DocumentController extends BaseController

        {

            /**

            * Display a listing of the resource.

            *

            * @return \Illuminate\Http\Response

            */

            public function index()

            {

                $products = Document::all();

 

                return $this->sendResponse(DocumentResource::collection($products), 'Documents retrieved successfully.');

            }

 

            

            /**

            * Display the specified resource.

            *

            * @param  int  $id

            * @return \Illuminate\Http\Response

            */

 

            

            public function documentType($id)

            {

                $product = Document::where('type','=',$id)->get();

                if (is_null($product)) {

                    return $this->sendError('Document not found.');

                }

 

                return $this->sendResponse(DocumentResource::collection($product), 'Document retrieved successfully.');

            }



            

           

    }

    