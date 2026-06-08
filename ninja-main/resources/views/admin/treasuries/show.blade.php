@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.treasury.title_singular') }}
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr><th>{{ trans('cruds.treasury.fields.user') }}</th><td>{{ $treasury->user->name ?? '' }}</td></tr>
                <tr><th>{{ trans('cruds.treasury.fields.department') }}</th><td>{{ $treasury->department }}</td></tr>
                <tr><th>{{ trans('cruds.treasury.fields.opening_balance') }}</th><td>{{ number_format($treasury->opening_balance, 2) }}</td></tr>
                <tr><th>{{ trans('cruds.treasury.fields.total_deposits') }}</th><td>{{ number_format($treasury->total_deposits, 2) }}</td></tr>
                <tr><th>{{ trans('cruds.treasury.fields.total_withdrawals') }}</th><td>{{ number_format($treasury->total_withdrawals, 2) }}</td></tr>
                <tr><th>{{ trans('cruds.treasury.fields.closing_balance') }}</th><td class="font-weight-bold">{{ number_format($treasury->closing_balance, 2) }}</td></tr>
            </tbody>
        </table>
        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
</div>
@endsection