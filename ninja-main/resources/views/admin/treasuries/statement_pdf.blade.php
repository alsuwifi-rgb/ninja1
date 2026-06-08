<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: 'DejaVu Sans', sans-serif; background-color: #fff; }
        .invoice-container { padding: 20px; }
        .invoice-header { text-align: center; border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px; }
        .account-info { margin-bottom: 20px; border: 1px solid #ddd; padding: 10px; }
        .account-info p { margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        thead { background-color: #333; color: #fff; }
        .description { text-align: left; }
        .amount-debit { color: #dc3545; }
        .amount-credit { color: #28a745; }
        .summary-table { width: 50%; margin-left: auto; margin-top: 20px; }
        .summary-table td:first-child { font-weight: bold; background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>{{ $title }}</h1>
            <p>{{ trans('cruds.bankInvoice.statement_period') }}: {{ $startDate }} - {{ $endDate }}</p>
        </div>

        <div class="account-info">
            @if($isBank)
                <p><strong>{{ trans('cruds.bankAccount.title_singular') }}:</strong> {{ $account->user->name }} ({{ $account->account_number }})</p>
            @else
                <p><strong>{{ trans('cruds.treasury.title_singular') }}:</strong> {{ $account->user->name }} ({{ $account->department }})</p>
            @endif
        </div>

        <table>
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
                    <td colspan="4" class="description"><strong>{{ trans('cruds.bankInvoice.opening_balance') }}</strong></td>
                    <td><strong>{{ number_format($openingBalanceForPeriod, 2) }}</strong></td>
                </tr>
                @php $currentBalance = $openingBalanceForPeriod; @endphp
                @foreach ($transactions as $transaction)
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
                @endforeach
            </tbody>
        </table>

        <table class="summary-table">
            <tbody>
                <tr><td>{{ trans('cruds.bankInvoice.opening_balance') }}</td><td>{{ number_format($openingBalanceForPeriod, 2) }}</td></tr>
                <tr><td>{{ trans('cruds.bankInvoice.total_credit') }}</td><td class="amount-credit">{{ number_format($transactions->where('type', 'credit')->sum('amount'), 2) }}</td></tr>
                <tr><td>{{ trans('cruds.bankInvoice.total_debit') }}</td><td class="amount-debit">{{ number_format($transactions->where('type', 'debit')->sum('amount'), 2) }}</td></tr>
                <tr><td><strong>{{ trans('cruds.bankInvoice.closing_balance') }}</strong></td><td><strong>{{ number_format($currentBalance, 2) }}</strong></td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>
