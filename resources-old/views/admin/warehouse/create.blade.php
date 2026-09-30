@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Warehouse
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.warehouses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">ID ERP</label>
                <input class="form-control {{ $errors->has('idERP') ? 'is-invalid' : '' }}" type="number" name="idERP" id="idERP" value="{{ old('idERP', '') }}" required>
                @if($errors->has('idERP'))
                    <div class="invalid-feedback">
                        {{ $errors->first('idERP') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="last_name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <!-- <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span> -->
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