@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">

            <form role="form" method="POST" action="{{ route('admin.cuisines.update', $Cuisine->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="m-t-0 header-title">
                            <b>@lang('inventory.cuisine.edit_title')</b>
                        </h4>
                        <hr>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">@lang('inventory.cuisine.name')</label>

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $Cuisine->name) }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-xs-12 mb-2">
                            <a href="{{ route('admin.cuisines.index') }}" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                    </div>                 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

