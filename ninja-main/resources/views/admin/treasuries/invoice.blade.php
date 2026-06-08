@extends('layouts.admin')

@section('styles')
<style>
    /* ... نفس الأنماط السابقة بدون تغيير ... */
    body { background-color: #f8f9fa; }
    .invoice-container { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; max-width: 1000px; margin: 40px auto; padding: 30px; border: 1px solid #ddd; box-shadow: 0 0 15px rgba(0,0,0,0.07); background-color: #fff; border-radius: 8px; }
    .invoice-header { display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #6f42c1; padding-bottom: 20px; margin-bottom: 20px; }
    .invoice-header .logo { font-size: 2.5rem; color: #6f42c1; border: 2px solid #6f42c1; border-radius: 50%; width: 80px; height: 80px; display: inline-flex; align-items: center; justify-content: center; }
    .invoice-header h1, .invoice-header h2, .invoice-header h3 { margin: 0; }
    .account-info { border: 1px solid #eee; border-radius: 8px; padding: 20px; margin-bottom: 30px; background-color: #fdfdfd; }
    .account-info .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f0f0f0; }
    .account-info .info-row:last-child { border-bottom: none; }
    .filter-form { padding: 20px; background-color: #e9ecef; border-radius: 6px; margin-bottom: 30px; }
    .transactions-table { width: 100%; border-collapse: collapse; }
    .transactions-table th, .transactions-table td { border: 1px solid #ddd; padding: 12px; text-align: center; }
    .transactions-table thead { background-color: #6f42c1; color: white; }
    .transactions-table tbody tr:nth-child(even) { background-color: #f2f2f2; }
    .transactions-table .description { text-align: left; }
    .transactions-table .amount-debit { color: #dc3545; font-weight: bold; }
    .transactions-table .amount-credit { color: #28a745; font-weight: bold; }
    .summary-table { width: 50%; margin-left: auto; margin-top: 30px; }
    .summary-table td { padding: 12px; border: 1px solid #ddd; }
    .print-button-container { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
    @media print {
        body { background-color: #fff; }
        .invoice-container { box-shadow: none; border: none; margin: 0; max-width: 100%; }
        .print-button-container, .filter-form { display: none; }
    }
</style>
@endsection

@section('content')
<div class="invoice-container">
    <div class="print-button-container">
        <div class="invoice-header">
            <div class="statement-title text-right"><h2>{{ trans('cruds.bankInvoice.statement_title') }}</h2></div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-download"></i> {{ trans('global.export') }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['export_excel' => 1]) }}">Excel</a></li>
                <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['export_pdf' => 1]) }}">PDF</a></li>
            </ul>
        </div>
    </div>

    <form method="GET" action="{{ route('admin.treasuries.invoice', $treasury->id) }}" class="filter-form">
        <h5 class="mb-3">{{ trans('cruds.bankInvoice.filter_by_date') }}</h5>
        <div class="row align-items-end">
            <div class="col-md-5"><label for="start_date">{{ trans('cruds.bankInvoice.start_date') }}</label><input type="date" id="start_date" name="start_date" class="form-control" value="{{ $startDate ?? '' }}"></div>
            <div class="col-md-5"><label for="end_date">{{ trans('cruds.bankInvoice.end_date') }}</label><input type="date" id="end_date" name="end_date" class="form-control" value="{{ $endDate ?? '' }}"></div>
            <div class="col-md-2"><button type="submit" class="btn btn-success w-100">{{ trans('cruds.bankInvoice.apply_filter') }}</button></div>
        </div>
    </form>



    <div class="row mb-4">
        <div class="col-md-12">
            <div class="account-info">
                <div class="info-row"><strong>{{ trans('cruds.treasury.fields.user') }}:</strong> <span>{{ $treasury->user->name ?? '' }}</span></div>
                <div class="info-row"><strong>{{ trans('cruds.treasury.fields.department') }}:</strong> <span>{{ $treasury->department ?? '' }}</span></div>
                <div class="info-row"><strong>{{ trans('cruds.bankInvoice.statement_date') }}:</strong> <span>{{ now()->format('d-m-Y H:i') }}</span></div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="transactions-table">
            <thead>
                <tr>
                    <th>{{ trans('cruds.bankInvoice.fields.date') }}</th>
                    <th>{{ trans('cruds.bankInvoice.fields.description') }}</th>
                    <th>{{ trans('cruds.bankInvoice.fields.debit') }}</th>
                    <th>{{ trans('cruds.bankInvoice.fields.credit') }}</th>
                    <th>{{ trans('cruds.bankInvoice.fields.balance') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="description"><strong>{{ trans('cruds.bankInvoice.opening_balance') }} ({{ $startDate ?? '' }})</strong></td>
                    <td><strong>{{ number_format($openingBalanceForPeriod ?? 0, 2) }}</strong></td>
                </tr>
                @php $currentBalance = $openingBalanceForPeriod ?? 0; @endphp
                @forelse ($transactions ?? [] as $transaction)
                    @php
                        $currentBalance += ($transaction->type === 'credit' ? $transaction->amount : -$transaction->amount);
                    @endphp
                    <tr>
                        <td>{{ $transaction->date->format('d-m-Y') }}</td>
                        <td class="description">{{ $transaction->description }}</td>
                        @if ($transaction->type === 'debit')
                            <td class="amount-debit">{{ number_format($transaction->amount, 2) }}</td>
                            <td></td>
                        @else
                            <td></td>
                            <td class="amount-credit">{{ number_format($transaction->amount, 2) }}</td>
                        @endif
                        <td>{{ number_format($currentBalance, 2) }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">{{ trans('global.no_entries_in_table') }}</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="summary-table">
        <table class="table table-bordered">
            <tbody>
                <tr><td>{{ trans('cruds.bankInvoice.opening_balance') }}</td><td>{{ number_format($openingBalanceForPeriod ?? 0, 2) }}</td></tr>
                <tr><td>{{ trans('cruds.bankInvoice.total_credit') }}</td><td class="amount-credit">{{ number_format(($transactions ?? collect())->where('type', 'credit')->sum('amount'), 2) }}</td></tr>
                <tr><td>{{ trans('cruds.bankInvoice.total_debit') }}</td><td class="amount-debit">{{ number_format(($transactions ?? collect())->where('type', 'debit')->sum('amount'), 2) }}</td></tr>
                <tr><td><strong>{{ trans('cruds.bankInvoice.closing_balance') }}</strong></td><td><strong>{{ number_format($currentBalance, 2) }}</strong></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
