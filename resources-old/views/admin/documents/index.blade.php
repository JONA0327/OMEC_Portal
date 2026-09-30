@extends('layouts.admin')

@section('content')

@can('user_create')

    <div style="margin-bottom: 10px;" class="row">

        <div class="col-lg-12">

        @if(auth::user()->level=='0')

            <a class="btn btn-success" href="{{ route("admin.documents.create") }}">

                {{ trans('global.add') }} Document

            </a>

        @endif    

        </div>

    </div>

@endcan

<div class="card">

    <div class="card-header">

        Document {{ trans('global.list') }}

    </div>



    <div class="card-body">

        <div class="table-responsive">

            <table class=" table table-bordered table-striped table-hover datatable datatable-User"  id="table-1">

                <thead>

                    <tr>

                        <th>

                            Tipo de Documento

                        </th>

                        <th>

                            Descripción

                        </th>

                        <th>

                            Fecha del Documento

                        </th>

                        <th>

                            Enlace

                        </th>

                        @if(auth::user()->level=='0')

                        <th>

                            Opciones

                        </th>

                        @endif

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $key => $user)

                        <tr data-entry-id="{{ $user->id }}">

                            <td>

                                {{ $user->type ?? '' }}

                            </td>

                            <td>

                                {{ $user->description ?? '' }}

                            </td>

                            <td>

                                {{ date('M-d-Y', strtotime($user->created_at)) }}

                            </td>

                            @if($user->url==null)

                            <td></td>

                            @else

                            

                            <td><a href="{{ $user->url}}" class="btn btn-primary" target="_blank" ><i class="ti-download"></i> Visualizar</a></td>

                            @endif

                            

                            @if(auth::user()->level=='0')

                            <td>

                                @can('user_show')

                                    <!-- <a class="btn btn-xs btn-primary" href="{{ route('admin.documents.show', $user->id) }}">

                                        {{ trans('global.view') }}

                                    </a> -->

                                @endcan



                                @can('user_edit')

                                    <a class="btn btn-xs btn-info" href="{{ route('admin.documents.edit', $user->id) }}">

                                        {{ trans('global.edit') }}

                                    </a>

                                @endcan



                                @can('user_delete')

                                    <form action="{{ route('admin.documents.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">

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







@endsection

@section('scripts')

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