@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Warehouse
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.warehouses.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">ID ERP</label>
                <input class="form-control {{ $errors->has('idERP') ? 'is-invalid' : '' }}" type="number" name="idERP" id="idERP" value="{{ old('idERP', $user->idERP) }}" required>
                @if($errors->has('idERP'))
                    <div class="invalid-feedback">
                        {{ $errors->first('idERP') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label class="required" for="last_name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
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