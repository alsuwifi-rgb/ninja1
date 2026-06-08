@extends('layouts.admin')
@section('content')

<div class="card shadow-lg">
    <div class="card-header bg-dark text-white rounded">
        <h4>{{ trans('global.create') }} {{ trans('cruds.userAlert.title_singular') }}</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.user-alerts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="required" for="alert_text">{{ trans('cruds.userAlert.fields.alert_text') }}</label>
                <input class="form-control {{ $errors->has('alert_text') ? 'is-invalid' : '' }}" type="text" name="alert_text" id="alert_text" value="{{ old('alert_text', '') }}" required>
                @if($errors->has('alert_text'))
                    <div class="invalid-feedback">{{ $errors->first('alert_text') }}</div>
                @endif
            </div>

            {{-- New Description Field --}}
            <div class="mb-3">
                <label for="description">{{ trans('cruds.userAlert.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="users">{{ trans('cruds.userAlert.fields.user') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('users') ? 'is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ in_array($id, old('users', [])) ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <div class="invalid-feedback">{{ $errors->first('users') }}</div>
                @endif
            </div>
            <div class="mt-4 text-end">
                <button class="btn btn-success" type="submit">{{ trans('global.save') }}</button>
                <a href="{{ route('admin.user-alerts.index') }}" class="btn btn-secondary">{{ trans('global.cancel') }}</a>
            </div>
        </form>
    </div>
</div>

@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function() {
        $('.select-all').on('click', function() {
            $(this).closest('.mb-3').find('select').find('option').prop('selected', true);
            $(this).closest('.mb-3').find('select').trigger('change');
        });
        $('.deselect-all').on('click', function() {
            $(this).closest('.mb-3').find('select').find('option').prop('selected', false);
            $(this).closest('.mb-3').find('select').trigger('change');
        });
    });
</script>
@endsection