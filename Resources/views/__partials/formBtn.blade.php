<div class="form-group">
    <div class="col-sm-offset-4 col-sm-4">
        <button type="submit" class="btn btn-default btn-sm waves-effect waves-light">
                <span>
                    {{ trans('system::global.'.(($form == 'create') ? 'saveBtn' : 'updateBtn')) }}
                </span>
        </button>

        <a href="{{ route('referenceLists.'.$back.'.index') }}" class="btn btn-link">
            <span>
                {{ trans('system::global.backBtn') }}
            </span>
        </a>
    </div>
</div>