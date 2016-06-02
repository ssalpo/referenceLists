@extends('referenceLists::default')

@section('referenceListsContent')
    <div class="m-b-10 overflowHidden action-container">
        <a href="{{ route('referenceLists.specializations.create') }}" class="btn btn-default btn-sm waves-effect waves-light pull-left ">
            <i class="fa fa-plus"></i>
            {{ trans('system::global.addBtn') }}
        </a>
    </div>
    <div class="table-responsive">
        @include('system::_partials.alerts')

        <table class="table table-hover mails m-0 table table-actions-bar ">
            <thead>
            <tr>
                <th>{{ trans('referenceLists::specializations.table.name') }}</th>
                <th>{{ trans('referenceLists::specializations.form.department.label') }}</th>
                <th style="width: 130px"  class="text-center">{{ trans('referenceLists::specializations.table.actions') }}</th>
            </tr>
            </thead>

            <tbody>
                @foreach($specializations as $specialization)
                    <tr>
                        <td> {{ $specialization->name }} </td>
                        <td> {{ $specialization->department->name }} </td>

                        <td >
                            <div class="text-center">
                                <a href="{{ route('referenceLists.specializations.edit', $specialization->id) }}" class="table-action-btn"><i class="md  md-edit" ></i></a>

                                <form style="display: inline-block" class="form-inline deleteForm" action="{{ route('referenceLists.specializations.destroy', $specialization->id) }}" method="post">
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
