@extends('referenceLists::default')

@section('referenceListsContent')

    @include('system::_partials.alerts')
    <form method="post" class="form-horizontal group-border-dashed" action="{{ route('referenceLists.departments.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-4 control-label">{{ trans('referenceLists::departments.form.name.label') }} </label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control" required
                       placeholder="{{ trans('referenceLists::departments.form.name.placeholder') }}"/>
            </div>
        </div>

        @include('referenceLists::__partials.formBtn', ['form' => 'create', 'back' => 'departments'])
    </form>

@endsection
