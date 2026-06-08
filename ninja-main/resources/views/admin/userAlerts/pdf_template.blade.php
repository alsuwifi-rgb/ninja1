@extends('layouts.print_layout')

@section('content')
<h2 style="text-align: center;">{{ __('User Alerts Report') }}</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>{{ trans('cruds.userAlert.fields.id') }}</th>
            <th>{{ trans('cruds.userAlert.fields.alert_text') }}</th>
            <th>{{ trans('cruds.userAlert.fields.alert_link') }}</th>
            <th>{{ trans('cruds.userAlert.fields.user') }}</th>
            <th>{{ trans('cruds.userAlert.fields.created_at') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userAlerts as $alert)
            <tr data-entry-id="{{ $alert->id }}">
                <td>{{ $alert->id }}</td>
                <td>{{ $alert->alert_text ?? '' }}</td>
                <td>{{ $alert->alert_link ?? '' }}</td>
                <td>
                    @foreach($alert->users as $key => $item)
                        <span>{{ $item->name }}@if(!$loop->last), @endif</span>
                    @endforeach
                </td>
                <td>{{ $alert->created_at->format('Y-m-d H:i:s') ?? '' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
