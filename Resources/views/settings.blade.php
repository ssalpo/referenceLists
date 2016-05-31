@extends('referenceLists::default')

@section('referenceListsContent')

<form class="form-horizontal group-border-dashed">
    <div class="form-group">
        <label class="col-sm-4 control-label">Имя </label>
        <div class="col-sm-4">
            <input type="text" name="name" class="form-control" required
                    placeholder="Min 6 chars."/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-primary">
                <span class="savingProgress"><i class="fa fa-spin fa-refresh"></i></span>
                <span class="settingsSaved"><i class="fa fa-check  "></i></span>
                <span>
                    {{ trans('referenceLists::global.btnSave') }}
                </span>
            </button>
        </div>
    </div>
</form>

@endsection
