@extends('layouts.admin')

@section('content')

@can('user_create')

    <div style="margin-bottom: 10px;" class="row">

        <div class="col-lg-6">

        @if(auth::user()->level=='0')

            <a class="btn btn-success" href="{{ route("admin.stocks.create") }}">

                {{ trans('global.add') }} Stocks

            </a>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">

                    Import Data

            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong1">

                    Delete Stocks 
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">

                    Update Date Stocks 
            </button>

        @endif    

        </div>

    </div>

@endcan

<div class="card">

    <div class="card-header">

        Stocks {{ trans('global.list') }}

    </div>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-3">
                <label>Filter By Brand</label>
                <select class="form-control" id="brands">
                    @if(!$brands->isEmpty()) 
                    @foreach($brands as $kind) 
                    <option value="{{$kind}}">{{$kind}}</option>
                    @endforeach
                    @endif 
                </select>          
        </div>
        <div class="col-12 col-md-4 col-lg-3">
                <label>Filter By kind_of_product</label>
                <select class="form-control" id="kinds">
                    @if(!$kinds->isEmpty()) 
                    @foreach($kinds as $kind) 
                    <option value="{{$kind}}">{{$kind}}</option>
                    @endforeach
                    @endif 
                </select>          
        </div>
    </div>


    <div class="card-body">

        <div class="table-responsive">

            <table class=" table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">

                <thead>

                    <tr>
                        <!--
                        <th width="10">



                        </th>

                        <th>

                            {{ trans('cruds.user.fields.id') }}

                        </th>-->

                        <th>

                            Modelo

                        </th>

                        <th>

                            Descripción

                        </th>

                        <th>

                            Cantidad

                        </th>

                        <th>

                            Almacén

                        </th>

                        @if(auth::user()->level=='0')

                        <th>

                            price 1

                        </th>

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='2')

                        <th>
                            @if(auth::user()->level=='2')
                                Su Costo
                            @endif
                            @if(auth::user()->level=='0')
                                REVENTA ESPECIAL
                            @endif
                        </th>

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='3') 

                        <th>
                            @if(auth::user()->level=='3')
                                Su Costo
                            @endif
                            @if(auth::user()->level=='0'||auth::user()->level=='1')
                                REVENTA
                            @endif
                        </th> 

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='4')

                        <th>
                            @if(auth::user()->level=='4')
                                Su Costo
                            @endif
                            @if(auth::user()->level=='0'||auth::user()->level=='1')
                                OEM
                            @endif
                        </th> 

                        @endif

                        @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='5')

                        <th>
                            @if(auth::user()->level=='5')
                                Su Costo
                            @endif
                            @if(auth::user()->level=='0'||auth::user()->level=='1')
                                USUARIO FINAL
                            @endif
                        </th>

                        @endif    

                        @if(auth::user()->level=='6')

                        <th>

                            Su Costo

                        </th>

                        @endif     

                        <th>

                            Precio de Lista

                        </th>

                        <th>

                            Fecha de Actualización

                        </th>
                      

                        @if(auth::user()->level=='0')

                        <th>

                            Action

                        </th>

                        @endif

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $key => $user)

                        <tr data-entry-id="{{ $user->id }}">

                            <!--<td>



                            </td>

                            <td>

                                {{ $user->id ?? '' }}

                            </td>-->

                            <td>

                                {{ $user->product->name ?? '' }}

                            </td>

                            <td>

                                {{ $user->product->description_short ?? '' }}

                            </td>

                            <td>

                                {{ $user->quantity ?? '' }}

                            </td>

                            <td>

                                {{ $user->warehouse->name ?? '' }}                                

                            </td>

                            @if(auth::user()->level=='0')
                            <td style="text-align:center;">

                                {{ number_format((float)$user->product->price1, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='2')

                            <td style="text-align:center;">

                                {{ number_format((float)$user->product->price2, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='3')

                            <td style="text-align:center;">

                                {{ number_format((float)$user->product->price3, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='4')

                            <td style="text-align:center;">

                                {{ number_format((float)$user->product->price4, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='5')

                            <td style="text-align:center;">

                                {{ number_format((float)$user->product->price5, 2, '.', ',') ?? ''}}

                            </td>

                            @endif

                            @if(auth::user()->level=='6')

                            <td style="text-align:center;">

                             {{ number_format((float)($user->product->list_price * 0.6305), 2, '.', ',') ?? ''  }} 

                            </td>

                            @endif

                            <td style="text-align:center;">

                                {{  number_format((float)$user->product->list_price, 2, '.', ',') ?? '' }}

                            </td>
                            <td>

                                {{ date('d-M-y, g:i a', strtotime($user->updated_at)) }}

                            </td>                           

                            @if(auth::user()->level=='0')

                            <td>

                                @can('user_show')

                                    <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.documents.show', $user->id) }}">

                                        {{ trans('global.view') }}

                                    </a> -->

                                @endcan



                                @can('user_edit')

                                    <a class="btn btn-xs btn-info" href="{{ route('admin.stocks.edit', $user->id) }}">

                                        {{ trans('global.edit') }}

                                    </a>

                                @endcan



                                @can('user_delete')

                                    <form action="{{ route('admin.stocks.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">

                                    </form>

                                @endcan



                            </td>

                            @endif

                        </tr>

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

          <h5 class="modal-title" id="exampleModalLongTitle">Import Data</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <form action="{{ route('admin.stocks.import') }}" method="POST" enctype="multipart/form-data">

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





<!-- Delete Stocks Data Modal -->

<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLongTitle">Delete WareHouse Stocks</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <form action="{{ route('admin.stocks.multidelete') }}" method="POST" enctype="multipart/form-data">

            @csrf

              <div class="form-group">

                  <label for="uploaded_file">Warehouses<span class="text-danger">*</span> </label>

                  <select name="warehouse_id" class="form-control">
                      <option>Select option</option>
                      @if(!$warehouses->isEmpty())
                      @foreach($warehouses as $ware)
                      <option value="{{$ware->id}}">{{$ware->name}}</option>
                      @endforeach
                      @endif
                  </select>

              </div>

          

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-danger">Deleted</button>

        </form>

        </div>

      </div>

    </div>

  </div>



<!-- Update Stocks Data Modal -->

<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLongTitle">Update Date WareHouse Stocks</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <form action="{{ route('admin.stocks.setdate') }}" method="POST" enctype="multipart/form-data">

            @csrf

              <div class="form-group">

                  <label for="uploaded_file">Warehouses<span class="text-danger">*</span> </label>

                  <select name="warehouse_id" class="form-control">
                      <option>Select option</option>
                      @if(!$warehouses->isEmpty())
                      @foreach($warehouses as $ware)
                      <option value="{{$ware->id}}">{{$ware->name}}</option>
                      @endforeach
                      @endif
                  </select>

              </div>

          

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Updated</button>

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
        
        window.location.href = 'stocks?brand=' + brand
        });
        $('#kinds').on('change', function (e) {

            var kinds=$('#kinds').val();
            //alert(kinds);
            window.location.href = 'stocks?kinds=' + kinds
            });
});
</script>
@parent

<!-- <script>

    $(function () {

  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

@can('user_delete')

  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'

  let deleteButton = {

    text: deleteButtonTrans,

    url: "{{ route('admin.users.massDestroy') }}",

    className: 'btn-danger',

    action: function (e, dt, node, config) {

      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {

          return $(entry).data('entry-id')

      });



      if (ids.length === 0) {

        alert('{{ trans('global.datatables.zero_selected') }}')



        return

      }



      if (confirm('{{ trans('global.areYouSure') }}')) {

        $.ajax({

          headers: {'x-csrf-token': _token},

          method: 'POST',

          url: config.url,

          data: { ids: ids, _method: 'DELETE' }})

          .done(function () { location.reload() })

      }

    }

  }

  dtButtons.push(deleteButton)

@endcan



  $.extend(true, $.fn.dataTable.defaults, {

    order: [[ 1, 'desc' ]],

    pageLength: 100,

  });

  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){

        $($.fn.dataTable.tables(true)).DataTable()

            .columns.adjust();

    });

})



</script> -->

@endsection