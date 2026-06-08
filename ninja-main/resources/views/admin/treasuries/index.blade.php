@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3">
                <h5>{{ trans('cruds.treasury.title') }}</h5>
            </div>
            <x-index-filter route="admin.treasuries.index" />
        </div>
    </div>
    <div class="card-body">
         <div class="mb-3 text-right">
            @can('treasury_create')
            <a class="btn btn-success" href="{{ route('admin.treasuries.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.treasury.title_singular') }}
            </a>
            @endcan
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>{{ trans('cruds.treasury.fields.id') }}</th>
                        <th>{{ trans('cruds.treasury.fields.user') }}</th>
                        <th>{{ trans('cruds.treasury.fields.department') }}</th>
                        <th>{{ trans('cruds.treasury.fields.opening_balance') }}</th>
                        <th>{{ trans('cruds.treasury.fields.total_deposits') }}</th>
                        <th>{{ trans('cruds.treasury.fields.total_withdrawals') }}</th>
                        <th>{{ trans('cruds.treasury.fields.closing_balance') }}</th>
                        <th>{{ trans('global.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($treasuries as $treasury)
                        <tr>
                            <td>{{ $treasury->user_id?? '' }}</td>
                            <td>{{ $treasury->user->name ?? '' }}</td>
                            <td>{{ $treasury->department ?? '' }}</td>
                            <td>{{ number_format($treasury->opening_balance, 2) }}</td>
                            <td class="text-success">{{ number_format($treasury->total_deposits, 2) }}</td>
                            <td class="text-danger">{{ number_format($treasury->total_withdrawals, 2) }}</td>
                            <td class="font-weight-bold">{{ number_format($treasury->closing_balance, 2) }}</td>
                            <td>

                                @can('treasury_show')
                                <a class="btn btn-xs btn-warning" href="{{ route('admin.treasuries.invoice', $treasury->id) }}">
                                    <span class="material-symbols-outlined">receipt_long</span>
                                </a>
                            @endcan

                                @can('treasury_edit')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.treasuries.edit', $treasury->id) }}">{{ trans('global.edit') }}</a>
                                @endcan
                                @can('treasury_delete')
                                <form action="{{ route('admin.treasuries.destroy', $treasury->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-xs btn-danger">{{ trans('global.delete') }}</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-dark font-weight-bold">
                    <tr>
                        <td colspan="3">{{ trans('global.total') }}</td>
                        <td>{{ number_format($treasuries->sum('opening_balance'), 2) }}</td>
                        <td class="text-success">{{ number_format($treasuries->sum('total_deposits'), 2) }}</td>
                        <td class="text-danger">{{ number_format($treasuries->sum('total_withdrawals'), 2) }}</td>
                        <td>{{ number_format($treasuries->sum('closing_balance'), 2) }}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection