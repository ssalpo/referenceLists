@extends('system::layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs navtab-bg nav-justified module-menu-tabs">
                <li class="{{ setActive('referenceLists.main.index') }} tab">
                    <a href="{{ route('referenceLists.main.index') }}">
                        <span class="visible-xs">{{ trans('referenceLists::global.indexPage') }}</span>
                        <span class="hidden-xs">{{ trans('referenceLists::global.indexPage') }}</span>
                    </a>
                </li>

                <li class="@if(Request::segment(4) == 'departments') active @endif tab">
                    <a href="{{ route('referenceLists.departments.index') }}">
                        <span class="visible-xs">{{ trans('referenceLists::departments.name') }}</span>
                        <span class="hidden-xs">{{ trans('referenceLists::departments.name') }}</span>
                    </a>
                </li>

                <li class="@if(Request::segment(4) == 'specializations') active @endif tab">
                    <a href="{{ route('referenceLists.specializations.index') }}">
                        <span class="visible-xs">{{ trans('referenceLists::specializations.name') }}</span>
                        <span class="hidden-xs">{{ trans('referenceLists::specializations.name') }}</span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                @yield('referenceListsContent')
            </div>

        </div> <!-- end col -->
    </div>

@endsection

@section('footer_scripts')
    <script type="text/javascript" src="{{ lp_module_assets('js/referenceLists.js', 'referenceLists') }}"></script>
@endsection
