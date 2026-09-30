@extends('layouts.admin')

@section('content')



<div class="card">

    <div class="card-header">

        {{ trans('global.show') }} Product

    </div>



    <div class="card-body">

        <div class="form-group">

            <div class="form-group">

                <a class="btn btn-default" href="{{ route('admin.products.index') }}">

                    {{ trans('global.back_to_list') }}

                </a>

            </div>

            <table class="table table-bordered table-striped">

                <tbody>

                    <tr>

                        <th>

                            {{ trans('cruds.permission.fields.id') }}

                        </th>

                        <td>

                            {{ $user->id }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            ID ERP

                        </th>

                        <td>

                            {{ $user->idERP }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Name

                        </th>

                        <td>

                            {{ @$user->name }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Name2

                        </th>

                        <td>

                            {{ @$user->name2 }}

                        </td>

                    </tr>

                       <tr>

                        <th>

                            Description Short

                        </th>

                        <td>

                            {{ @$user->description_short }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Description Supplier

                        </th>

                        <td>

                            {{ @$user->description_supplier }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Brand

                        </th>

                        <td>

                            {{ @$user->brand }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Kind Of Product

                        </th>

                        <td>

                            {{ @$user->kind_of_product }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                           Classification Code

                        </th>

                        <td>

                            {{ @$user->clasification_code }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Status

                        </th>

                       

                        <td>

                        @if($user->active==1)

                        Active

                        @else

                        In-active

                        @endif

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Base Currency

                        </th>

                        <td>

                            {{ @$user->base_currency }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            Rotation

                        </th>

                        <td>

                            {{ @$user->rotation }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Characteristic1

                        </th>

                        <td>

                            {{ @$user->characteristic1 }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Characteristic2

                        </th>

                        <td>

                            {{ @$user->characteristic2 }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Characteristic3

                        </th>

                        <td>

                            {{ @$user->characteristic3 }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Characteristic4

                        </th>

                        <td>

                            {{ @$user->characteristic4 }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Characteristic5

                        </th>

                        <td>

                            {{ @$user->characteristic5 }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                            List Price

                        </th>

                        <td>

                            {{ @number_format((float)$user->list_price, 2, '.', ',') }}
                            

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Price1

                        </th>

                        <td>

                            {{ @number_format((float)$user->price1, 2, '.', ',') }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        price2

                        </th>

                        <td>

                             {{ @number_format((float)$user->price2, 2, '.', ',') }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Price3

                        </th>

                        <td>

                            {{ @number_format((float)$user->price3, 2, '.', ',') }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Price4

                        </th>

                        <td>

                            {{ @number_format((float)$user->price4, 2, '.', ',') }}

                        </td>

                    </tr>

                    <tr>

                        <th>

                        Price5

                        </th>

                        <td>

                            {{ @number_format((float)$user->price5, 2, '.', ',') }}

                        </td>

                    </tr>



                </tbody>

            </table>

            <div class="form-group">

                <a class="btn btn-default" href="{{ route('admin.products.index') }}">

                    {{ trans('global.back_to_list') }}

                </a>

            </div>

        </div>

    </div>

</div>







@endsection