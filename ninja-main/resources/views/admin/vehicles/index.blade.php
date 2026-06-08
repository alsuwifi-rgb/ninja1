@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="col-lg-6 text-right">

               <div class="p-2">
                <a class="btn btn-success" href="{{ route('admin.vehicles.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.vehicle.title_singular') }}
                </a>
               </div>

        </div>
        <div class="card-header p-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3">
                    {{ trans('cruds.vehicle.title_singular') }}
                </div>
                <x-index-filter route="admin.vehicles.index" />
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-vehicle">
                    <thead class="table-dark">
                        <tr>

                            <th>
                                {{ __('cruds.vehicle.fields.id_code') }}
                            </th>
                            <th>
                                {{ __('cruds.vehicle.fields.type') }}
                            </th>
                            <th>
                                {{ __('cruds.vehicle.fields.number') }}
                            </th>
                            <th>
                                {{ __('cruds.vehicle.fields.made_of') }}
                            </th>
                            <th>
                                {{ __('cruds.vehicle.fields.purchase_date') }}
                            </th>
                            <th>
                                {{ __('cruds.vehicle.fields.ending_date') }}
                            </th>
                            <th>
                                {{ trans('global.actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $key => $vehicle)
                            <tr data-entry-id="{{ $vehicle->id }}">
                                <td>
                                    <a href="/admin/vehicles/{{ $vehicle->id }}"
                                        class="id-link">{{ $vehicle->vehicle_code ?? '' }}</a>
                                </td>
                                <td>
                                    {{ $vehicle->kind_of_vehicle ?? '' }}
                                </td>
                                <td>
                                    {{ $vehicle->number_vehicles ?? '' }}
                                </td>
                                <td>
                                    {{ $vehicle->made_of_name ?? '' }}
                                </td>
                                <td>
                                    {{ $vehicle->purchase_date ?? '' }}
                                </td>
                                <td>
                                    {{ $vehicle->ending_date ?? '' }}
                                </td>
                                <td>

  

                                        <a class="btn btn-xs btn-success" href="{{ route('admin.vehicles.export.single', $vehicle->id) }}">
                                            <i class='material-symbols-outlined'>download</i>
                                        </a>



                                    @can('vehicle_access')
                                        <a class="btn btn-xs btn-primary "
                                            href="{{ route('admin.vehicles.edit', $vehicle->id) }}">
                                            <i class='material-symbols-outlined'>edit</i>
                                        </a>
                                    @endcan

                                    @can('vehicle_delete')
                                        <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-danger">
                                                <i class='material-symbols-outlined'>delete</i>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $vehicles->appends($_GET)->links() }}
            </div>
        </div>
    </div>
@endsection
