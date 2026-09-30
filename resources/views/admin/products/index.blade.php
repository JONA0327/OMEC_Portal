@extends('layouts.admin')

@section('content')

@can('user_create')
    
    <div style="margin-bottom: 10px;" class="row">

        <div class="col-lg-12">

        @if(auth::user()->level=='0')

            <a class="btn btn-success" href="{{ route("admin.products.create") }}">

                {{ trans('global.add') }} Product

            </a>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">

                    Import Data

            </button>

        @endif    

        </div>

        

    </div>

@endcan

<div class="card">

    <div class="card-header">

        Listado general de Productos

    </div>
    <div class="row">
         <div class="col-12 col-md-4 col-lg-3">
                <label>Filtrar por Marca</label>
                <select class="form-control" id="brands">
                    <option value="">--</option>
                    @if(!$brands->isEmpty()) 
                    @foreach($brands as $kind)
                        @if($kind != "MDG") 
                        <option value="{{$kind}}">{{$kind}}</option>
                        @endif
                    @endforeach
                    @endif 
                    <option value="TODOS">TODOS</option>
                </select>          
        </div>
        <div class="col-12 col-md-4 col-lg-3">
                <label>Filtrar por Clasificación</label>
                <select class="form-control" id="kinds">
                    <option value="">--</option>
                    @if(!$kinds->isEmpty()) 
                    @foreach($kinds as $kind) 
                    <option value="{{$kind}}">{{$kind}}</option>
                    @endforeach
                    @endif 
                    <option value="TODOS">TODOS</option>
                </select>          
        </div>

    </div>
    <div class="card-body">

        <div class="table-responsive">

            <table class=" table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">

                <thead>

                    <tr>

                        @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7')
                        <th width="10">



                        </th>

                        <th>

                            {{ trans('cruds.user.fields.id') }}

                        </th>


                        <th>

                        ID ERP

                        </th> 

                        @endif

                        <th>

                         Modelo

                        </th>

                        <th>

                         Descripción

                        </th>

                        @if(auth::user()->level=='0')
                        <!--
                        <th>

                            price 1

                        </th>
                        -->

                        @endif

                        @if(auth::user()->level=='2'||auth::user()->level=='3'||auth::user()->level=='4'||auth::user()->level=='5'||auth::user()->level=='6'||auth::user()->level=='9') 

                        <th>

                            Su Precio

                        </th> 

                        @endif

                        @if(auth::user()->level=='0' || auth::user()->level=='7')

                        <th>

                            CANAL TMC

                        </th>

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7' || auth::user()->level=='8'|| auth::user()->level=='9') 

                        <th>

                            CANAL

                        </th> 

                        @endif


                        @if(auth::user()->level=='0'||auth::user()->level=='1'|| auth::user()->level=='7' || auth::user()->level=='8' || auth::user()->level=='9')

                        <th>

                            OEM

                        </th> 

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7'|| auth::user()->level=='9')

                        <th>

                            USUARIO FINAL

                        </th>

                        @endif     

                        <th>PRECIO DE LISTA</th>

                        <th>Cantidad Total</th>

                        @if(auth::user()->level=='0')

                        <th>

                            &nbsp;

                        </th>

                        @endif

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $key => $user)
                    @if($user->brand != "MDG" )
                        <tr data-entry-id="{{ $user->id }}">
                            @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7')
                            <td>



                            </td>

                            <td>

                                {{ $user->id ?? '' }}

                            </td>

                            <td>

                                {{ $user->idERP ?? '' }}

                            </td>
                            @endif

                            <td>

                                {{ $user->name ?? '' }}

                            </td>

                            <td>

                                {{ $user->description_short ?? ''}}

                            </td>

                            @if(auth::user()->level=='2'||auth::user()->level=='3'||auth::user()->level=='4'||auth::user()->level=='5'||auth::user()->level=='6'||auth::user()->level=='9') 
                            <td>
                                @if(auth::user()->level=='2')
                                    {{  number_format((float)$user->price2, 2, '.', ',') ?? ''}} 
                                @endif
                                @if(auth::user()->level=='3')
                                    {{ number_format((float)$user->price3, 2, '.', ',') ?? ''}}
                                @endif
                                @if(auth::user()->level=='4')
                                    {{ number_format((float)$user->price4, 2, '.', ',') ?? ''}}
                                @endif
                                @if(auth::user()->level=='5')
                                    {{ number_format((float)$user->price5, 2, '.', ',') ?? ''}}
                                @endif
                                @if(auth::user()->level=='6')
                                        @if( $user->name == "UT-12SE-A" || $user->name == "UT-12SE-A1")
                                            {{number_format((float)($user->price3), 2, '.', ',') ?? '' }}
                                        @endif
                                        @if( $user->name == "UT-14SS2-A" )
                                            {{number_format((float)($user->price3), 2, '.', ',') ?? '' }}
                                        @endif
                                        @if( $user->name != "UT-12SE-A" && $user->name != "UT-12SE-A1" && $user->name != "UT-14SS2-A" && $user->name != "UT-AS332-C" && $user->brand == "DELTA" )
                                            {{number_format((float)($user->list_price * 0.6593), 2, '.', ',') ?? '' }}
                                        @endif
                                        @if( $user->brand != "DELTA" )
                                            {{number_format((float)($user->price3), 2, '.', ',') ?? '' }}
                                        @endif
                                @endif

                                @if(auth::user()->level=='9')
                                        @if( $user->name == "UT-12SE-A" || $user->name == "UT-12SE-A1" || $user->name == "UT-14SS2-A" || $user->name == "UT-AS332-C")
                                            {{number_format((float)($user->price3), 2, '.', ',') ?? '' }}
                                        @endif
                                        @if( $user->name != "UT-12SE-A" && $user->name != "UT-12SE-A1" && $user->name != "UT-14SS2-A" && $user->name != "UT-AS332-C" && $user->brand == "DELTA" )
                                            {{number_format((float)($user->list_price * 0.645), 2, '.', ',') ?? '' }}
                                        @endif
                                        @if( $user->brand != "DELTA" )
                                            {{number_format((float)($user->price3), 2, '.', ',') ?? '' }}
                                        @endif
                                @endif

                                
                                @if( $user->base_currency == "MXN" )
                                   &nbsp;MXN
                                @endif
                            </td>
                            @endif

                            @if(auth::user()->level=='0')
                            <!--
                            <td>

                                {{ number_format((float)$user->price1, 2, '.', ',') ?? ''}}

                            </td>
                            -->

                            @endif

                            @if(auth::user()->level=='0' || auth::user()->level=='7')

                            <td>

                                {{ number_format((float)$user->price2, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7'|| auth::user()->level=='8'|| auth::user()->level=='9')

                            <td>

                                {{ number_format((float)$user->price3, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7'|| auth::user()->level=='8'|| auth::user()->level=='9')

                            <td>

                                {{ number_format((float)$user->price4, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7'|| auth::user()->level=='9')

                            <td>

                                {{ number_format((float)$user->price5, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            

                            <td>

                            {{ number_format((float)$user->list_price, 2, '.', ',') ?? ''}}
                            @if( $user->base_currency == "MXN" )
                                   &nbsp;MXN
                            @endif
                            @if( $user->base_currency == "USD" )
                                   &nbsp;USD
                            @endif
                            </td>

                           

                            <td>

                            {{ App\Stock::getUserNameByID($user->id) }}

                            </td>

                            @if(auth::user()->level=='0')

                            <td>

                                @can('user_show')

                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', $user->id) }}">

                                        {{ trans('global.view') }}

                                    </a>

                                @endcan



                                @can('user_edit')

                                    <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $user->id) }}">

                                        {{ trans('global.edit') }}

                                    </a>

                                @endcan



                                @can('user_delete')

                                    <form action="{{ route('admin.products.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">

                                    </form>

                                @endcan



                            </td>

                            @endif

                        </tr>
                    @endif
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>





 <!-- Import Data Modal -->

 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLongTitle">Importar Datos</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <form action="{{ route('admin.products.import') }}" method="POST" enctype="multipart/form-data">

            @csrf

              <div class="form-group">

                  <label for="uploaded_file">File<span class="text-danger">*</span> <small>(xlsx, csv file only)</small></label>

                  <input type="file" required name="file" class="form-control" id="">

              </div>

          

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Import</button>

        </form>

        </div>

      </div>

    </div>

  </div>



@endsection

@section('scripts')
<script>
$(document).ready(function () {
        $('#brands').on('change', function (e) {

            var brand=$('#brands').val();
            var bandera = brand.localeCompare("TODOS");
            if (bandera == 0){
                window.location.href = 'products' ;   
            }
            else{
            window.location.href = 'products?brand=' + brand
            }
        });
        $('#kinds').on('change', function (e) {

            var kinds=$('#kinds').val();
            //alert(kinds);
            var bandera = kinds.localeCompare("TODOS");
            if (bandera == 0){
                //alert(bandera);
                window.location.href = 'products' ;   
            }
            else{
                window.location.href = 'products?kinds=' + kinds
            }
            });
});

</script>
@parent



@endsection