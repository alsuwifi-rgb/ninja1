@extends('layouts.print_layout')

@section('content')
<h2 style="text-align: center;">{{ __('Vehicle Report') }}</h2>
<table class="table table-bordered table-striped table-hover datatable datatable-vehicle">
    <thead class="table-dark">
    <tr>
        <th>{{ trans('cruds.vehicle.fields.id_code') }}</th>
        <th>{{ trans('cruds.vehicle.fields.type') }}</th>
        <th>{{ trans('cruds.vehicle.fields.number') }}</th>
        <th>{{ trans('cruds.vehicle.fields.made_of') }}</th>
        <th>{{ trans('cruds.vehicle.fields.purchase_date') }}</th>
        <th>{{ trans('cruds.vehicle.fields.ending_date') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $key => $vehicle)
        <tr data-entry-id="{{ $vehicle->id }}">
            <td>{{ $vehicle->vehicle_code ?? '' }}</td>
            <td>{{ $vehicle->kind_of_vehicle ?? '' }}</td>
            <td>{{ $vehicle->number_vehicles ?? '' }}</td>
            <td>{{ $vehicle->made_of ?? '' }}</td>
            <td>{{ $vehicle->purchase_date ?? '' }}</td>
            <td>{{ $vehicle->ending_date ?? '' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
