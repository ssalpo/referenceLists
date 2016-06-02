@extends('referenceLists::default')

@section('referenceListsContent')

    @include('system::_partials.alerts')
    <form method="post" class="form-horizontal group-border-dashed" action="{{ route('referenceLists.specializations.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-4 control-label">{{ trans('referenceLists::specializations.form.name.label') }} </label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control" required
                       placeholder="{{ trans('referenceLists::specializations.form.name.placeholder') }}"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">{{ trans('referenceLists::specializations.form.department.label') }} </label>
            <div class="col-sm-4">
                <select name="department_id" class="form-control">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        @include('referenceLists::__partials.formBtn', ['form' => 'create', 'back' => 'specializations'])
    </form>

@endsection
