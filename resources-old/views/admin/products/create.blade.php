@extends('layouts.admin')

@section('content')



<div class="card">

    <div class="card-header">

        {{ trans('global.create') }} Product

    </div>



    <div class="card-body">

        <form method="POST" action="{{ route("admin.products.store") }}" enctype="multipart/form-data">

            @csrf

           <div class="row"> 

                    <div class="form-group col-6">

                        <label class="required" for="first_name">ID ERP</label>

                        <input class="form-control {{ $errors->has('idERP') ? 'is-invalid' : '' }}" type="number" name="idERP" id="type" value="{{ old('idERP', '') }}" >

                        @if($errors->has('idERP'))

                            <div class="invalid-feedback">

                                {{ $errors->first('idERP') }}

                            </div>

                        @endif

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Modelo</label>

                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>

                        @if($errors->has('name'))

                            <div class="invalid-feedback">

                                {{ $errors->first('name') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Modelo sin guiones</label>

                        <input class="form-control {{ $errors->has('name2') ? 'is-invalid' : '' }}" type="text" name="name2" id="name2" value="{{ old('name2', '') }}">

                        @if($errors->has('name2'))

                            <div class="invalid-feedback">

                                {{ $errors->first('name2') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Description Short</label>

                        <input class="form-control {{ $errors->has('description_short') ? 'is-invalid' : '' }}" type="text" name="description_short" id="description_short" value="{{ old('description_short', '') }}">

                        @if($errors->has('description_short'))

                            <div class="invalid-feedback">

                                {{ $errors->first('description_short') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Description Supplier</label>

                        <input class="form-control {{ $errors->has('description_supplier') ? 'is-invalid' : '' }}" type="text" name="description_supplier" id="description_supplier" value="{{ old('description_supplier', '') }}">

                        @if($errors->has('description_supplier'))

                            <div class="invalid-feedback">

                                {{ $errors->first('description_supplier') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Brand</label>

                        <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" id="brand" value="{{ old('brand', '') }}">

                        @if($errors->has('brand'))

                            <div class="invalid-feedback">

                                {{ $errors->first('brand') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Kind Of Product</label>

                        <input class="form-control {{ $errors->has('kind_of_product') ? 'is-invalid' : '' }}" type="text" name="kind_of_product" id="kind_of_product" value="{{ old('kind_of_product', '') }}">

                        @if($errors->has('kind_of_product'))

                            <div class="invalid-feedback">

                                {{ $errors->first('kind_of_product') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Classification Code</label>

                        <input class="form-control {{ $errors->has('clasification_code') ? 'is-invalid' : '' }}" type="number" name="clasification_code" id="clasification_code" value="{{ old('clasification_code', '') }}">

                        @if($errors->has('clasification_code'))

                            <div class="invalid-feedback">

                                {{ $errors->first('clasification_code') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Status</label>

                        <select class="form-control" name="active">

                            <option value="1">Active</option>

                            <option value="0">In-active</option>



                        </select>    

                        

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Base Currency</label>

                        <select class="form-control" name="base_currency">

                            <option value="USD">USD</option>

                            <option value="MXN">MXN</option>



                        </select>

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Rotation</label>

                        <input class="form-control {{ $errors->has('rotation') ? 'is-invalid' : '' }}" type="text" name="rotation" id="rotation" value="{{ old('rotation', '') }}">

                        @if($errors->has('rotation'))

                            <div class="invalid-feedback">

                                {{ $errors->first('rotation') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Characteristic1</label>

                        <input class="form-control {{ $errors->has('characteristic1') ? 'is-invalid' : '' }}" type="text" name="characteristic1" id="characteristic1" value="{{ old('characteristic1', '') }}">

                        @if($errors->has('characteristic1'))

                            <div class="invalid-feedback">

                                {{ $errors->first('characteristic1') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Characteristic2</label>

                        <input class="form-control {{ $errors->has('characteristic2') ? 'is-invalid' : '' }}" type="text" name="characteristic2" id="characteristic2" value="{{ old('characteristic2', '') }}">

                        @if($errors->has('characteristic2'))

                            <div class="invalid-feedback">

                                {{ $errors->first('characteristic2') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Characteristic3</label>

                        <input class="form-control {{ $errors->has('characteristic3') ? 'is-invalid' : '' }}" type="text" name="characteristic3" id="characteristic3" value="{{ old('characteristic3', '') }}">

                        @if($errors->has('characteristic3'))

                            <div class="invalid-feedback">

                                {{ $errors->first('characteristic3') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Characteristic4</label>

                        <input class="form-control {{ $errors->has('characteristic4') ? 'is-invalid' : '' }}" type="text" name="characteristic4" id="characteristic4" value="{{ old('characteristic4', '') }}">

                        @if($errors->has('characteristic4'))

                            <div class="invalid-feedback">

                                {{ $errors->first('characteristic4') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Characteristic5</label>

                        <input class="form-control {{ $errors->has('characteristic5') ? 'is-invalid' : '' }}" type="text" name="characteristic5" id="characteristic5" value="{{ old('characteristic5', '') }}">

                        @if($errors->has('characteristic5'))

                            <div class="invalid-feedback">

                                {{ $errors->first('characteristic5') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">List Price</label>

                        <input class="form-control {{ $errors->has('list_price') ? 'is-invalid' : '' }}" type="number" name="list_price" id="list_price" step="0.01" value="{{ old('list_price', '') }}">

                        @if($errors->has('list_price'))

                            <div class="invalid-feedback">

                                {{ $errors->first('list_price') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Price1</label>

                        <input class="form-control {{ $errors->has('price1') ? 'is-invalid' : '' }}" step="0.01" type="number" name="price1" id="price1" value="{{ old('price1', '') }}">

                        @if($errors->has('price1'))

                            <div class="invalid-feedback">

                                {{ $errors->first('price1') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Price2</label>

                        <input class="form-control {{ $errors->has('price2') ? 'is-invalid' : '' }}" step="0.01" type="number" name="price2" id="price2" value="{{ old('price2', '') }}">

                        @if($errors->has('price2'))

                            <div class="invalid-feedback">

                                {{ $errors->first('price2') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Price3</label>

                        <input class="form-control {{ $errors->has('price3') ? 'is-invalid' : '' }}" step="0.01" type="number" name="price3" id="price3" value="{{ old('price3', '') }}">

                        @if($errors->has('price3'))

                            <div class="invalid-feedback">

                                {{ $errors->first('price3') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Price4</label>

                        <input class="form-control {{ $errors->has('price4') ? 'is-invalid' : '' }}" step="0.01" type="number" name="price4" id="price4" value="{{ old('price4', '') }}">

                        @if($errors->has('price4'))

                            <div class="invalid-feedback">

                                {{ $errors->first('price4') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

                    <div class="form-group col-6">

                        <label class="required" for="last_name">Price5</label>

                        <input class="form-control {{ $errors->has('price5') ? 'is-invalid' : '' }}" step="0.01" type="number" name="price5" id="price5" value="{{ old('price5', '') }}">

                        @if($errors->has('price5'))

                            <div class="invalid-feedback">

                                {{ $errors->first('price5') }}

                            </div>

                        @endif

                        <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->

                    </div>

            </div>

            

            <div class="form-group">

                <button class="btn btn-danger" type="submit">

                    {{ trans('global.save') }}

                </button>

            </div>

        </form>

    </div>

</div>







@endsection