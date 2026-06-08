@extends('layouts.admin')
@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white rounded">
            <h4>{{ trans('global.edit') }} {{ trans('cruds.treasury.title_singular') }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.treasuries.update", [$treasury->id]) }}">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                   <div class="col-md-6 form-group">
                        <label class="required" for="user_id">{{ trans('cruds.treasury.fields.user') }}</label>
                        <select class="form-control select2 @error('user_id') is-invalid @enderror" name="user_id" id="user_id" required>
                             @foreach($users as $id => $entry)
                                <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $treasury->user_id) == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @error('user_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="required" for="department">{{ trans('cruds.treasury.fields.department') }}</label>
                        <input class="form-control @error('department') is-invalid @enderror" type="text" name="department" id="department" value="{{ old('department', $treasury->department) }}" required>
                        @error('department')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 form-group">
                        <label class="required" for="opening_balance">{{ trans('cruds.treasury.fields.opening_balance') }}</label>
                        <input class="form-control @error('opening_balance') is-invalid @enderror" type="number" name="opening_balance" id="opening_balance" value="{{ old('opening_balance', $treasury->opening_balance) }}" step="0.01" required>
                        @error('opening_balance')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="required" for="total_deposits">{{ trans('cruds.treasury.fields.total_deposits') }}</label>
                        <input class="form-control @error('total_deposits') is-invalid @enderror" type="number" name="total_deposits" id="total_deposits" value="{{ old('total_deposits', $treasury->total_deposits) }}" step="0.01" required>
                        @error('total_deposits')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="required" for="total_withdrawals">{{ trans('cruds.treasury.fields.total_withdrawals') }}</label>
                        <input class="form-control @error('total_withdrawals') is-invalid @enderror" type="number" name="total_withdrawals" id="total_withdrawals" value="{{ old('total_withdrawals', $treasury->total_withdrawals) }}" step="0.01" required>
                        @error('total_withdrawals')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button class="btn btn-primary" type="submit">{{ trans('global.update') }}</button>
                    <a href="{{ route('admin.treasuries.index') }}" class="btn btn-secondary">{{ trans('global.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection