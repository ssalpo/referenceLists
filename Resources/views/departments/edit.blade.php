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

        @include('referenceLists::__partials.formBtn', ['form' => 'edit', 'back' => 'departments'])
    </form>

@endsection
