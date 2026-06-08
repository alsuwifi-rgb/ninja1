@extends('layouts.print_layout')
@section('content')
<h2 style="text-align: center;">{{ trans('cruds.treasury.title') }}</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>{{ trans('cruds.treasury.fields.user') }}</th>
            <th>{{ trans('cruds.treasury.fields.department') }}</th>
            <th>{{ trans('cruds.treasury.fields.opening_balance') }}</th>
            <th>{{ trans('cruds.treasury.fields.total_deposits') }}</th>
            <th>{{ trans('cruds.treasury.fields.total_withdrawals') }}</th>
            <th>{{ trans('cruds.treasury.fields.closing_balance') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($treasuries as $treasury)
            <tr>
                <td>{{ $treasury->user->name ?? '' }}</td>
                <td>{{ $treasury->department ?? '' }}</td>
                <td>{{ number_format($treasury->opening_balance, 2) }}</td>
                <td>{{ number_format($treasury->total_deposits, 2) }}</td>
                <td>{{ number_format($treasury->total_withdrawals, 2) }}</td>
                <td>{{ number_format($treasury->closing_balance, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr class="font-weight-bold">
            <td colspan="2">{{ trans('global.total') }}</td>
            <td>{{ number_format($treasuries->sum('opening_balance'), 2) }}</td>
            <td>{{ number_format($treasuries->sum('total_deposits'), 2) }}</td>
            <td>{{ number_format($treasuries->sum('total_withdrawals'), 2) }}</td>
            <td>{{ number_format($treasuries->sum('closing_balance'), 2) }}</td>
        </tr>
    </tfoot>
</table>
@endsection