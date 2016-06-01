@extends('referenceLists::default')

@section('referenceListsContent')
    @include('system::_partials.alerts')

    <form method="post" class="form-horizontal group-border-dashed" action="{{ route('referenceLists.departments.update', $department->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-4 control-label">{{ trans('referenceLists::departments.form.name.label') }} </label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control" required
                       placeholder="{{ trans('referenceLists::departments.form.name.placeholder') }}" value="{{ $department->name }}"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" class="btn btn-default btn-sm waves-effect waves-light">
                    <span class="savingProgress"><i class="fa fa-spin fa-refresh"></i></span>
                    <span class="settingsSaved"><i class="fa fa-check  "></i></span>
                <span>
                    {{ trans('system::global.updateBtn') }}
                </span>
                </button>

                <a href="{{ route('referenceLists.departments.index') }}" class="btn btn-link">
                    <span class="savingProgress"><i class="fa fa-spin fa-refresh"></i></span>
                    <span class="settingsSaved"><i class="fa fa-check  "></i></span>
                    <span>
                        {{ trans('system::global.backBtn') }}
                    </span>
                </a>
            </div>
        </div>
    </form>

@endsection
