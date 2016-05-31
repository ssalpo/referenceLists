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
                <li class="{{ setActive('referenceLists.settings.getSettings') }} tab">
                    <a href="{{ route('referenceLists.settings.getSettings') }}">
                        <span class="visible-xs">{{ trans('referenceLists::global.settingsPage') }}</span>
                        <span class="hidden-xs">{{ trans('referenceLists::global.settingsPage') }}</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                @yield('referenceListsContent')
            </div>

        </div> <!-- end col -->
    </div>

@endsection
