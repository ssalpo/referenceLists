@extends('referenceLists::default')

@section('referenceListsContent')
    <div class="m-b-10 overflowHidden action-container">
        <a href="{{ route('referenceLists.departments.create') }}" class="btn btn-default btn-sm waves-effect waves-light pull-left ">
            <i class="fa fa-plus"></i>
            {{ trans('system::global.addBtn') }}
        </a>
    </div>
    <div class="table-responsive">
        @include('system::_partials.alerts')

        <table class="table table-hover mails m-0 table table-actions-bar ">
            <thead>
            <tr>
                <th>{{ trans('referenceLists::departments.table.name') }}</th>
                <th style="width: 130px"  class="text-center">{{ trans('referenceLists::departments.table.actions') }}</th>
            </tr>
            </thead>

            <tbody>
                @foreach($departments as $department)
                    <tr>
                        <td> {{ $department->name }} </td>

                        <td >
                            <div class="text-center">
                                <a href="{{ route('referenceLists.departments.edit', $department->id) }}" class="table-action-btn"><i class="md  md-edit" ></i></a>

                                <form style="display: inline-block" class="form-inline deleteForm" action="{{ route('referenceLists.departments.destroy', $department->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <span class="table-action-btn listDeleteBtn" ><i class="md md-close"></i></span>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
