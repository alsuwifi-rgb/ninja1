<div class="table-responsive">

    <div class="table-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3">
                {{ trans('cruds.mechanic.title') }}
            </div>
            <x-index-filter route="admin.maintenances.index">
                <x-form.modal class="col-lg-2" :id="$type.'create-modal'" btn_color="success"  :title="__('global.create')">
                    <x-slot name="btn_slot">
                        <i class="bx bx-plus"></i>
                        {{ __('global.create') }}
                    </x-slot>
                    <form action="{{ route('admin.maintenance-requests.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="request_type" value="{{ $type }}">

                        <div class="row p-2">
                            <h5>{{ __('cruds.mechanic.choose_your_vehicle') }}</h5>
                            <div class="col-lg-6">
                                <x-form.colored-checkbox type="radio" color="success" name="type" id="car" value="car"
                                    :label="trans('global.car')" />

                            </div>
                            <div class="col-lg-6">
                                <x-form.colored-checkbox type="radio" color="success" name="type" id="bike" value="bike"
                                    :label="trans('global.bicycle')" />

                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-lg-6">
                                <x-form.input name="plate_number" type="text"
                                    :label="__('cruds.maintenance_requests.fields.plate_number')" />
                            </div>
                            <div class="col-lg-6">
                                <x-form.input name="amount" type="number"
                                    :label="__('cruds.maintenance_requests.fields.amount')" />
                            </div>
                        </div>
                        @if ($type==='maintenance')
                        <div class="row ">
                            <div class="col-lg-12">
                                <x-form.input name="services" type="text"
                                    :label="__('cruds.maintenance_requests.fields.services')" />
                            </div>
                        </div>

                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <x-form.select name="mechanic_id"
                                    :label="__('cruds.maintenance_requests.fields.mechanic')">
                                    @foreach ($mechanics as $mechanic )
                                    <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                            <div class="col-lg-6">
                                <x-form.select name="driver_id" :label="__('cruds.maintenance_requests.fields.driver')">
                                    @foreach ($drivers as $driver )
                                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <x-form.input name="receipt_address" type="text"
                                    :label="__('cruds.maintenance_requests.fields.receipt_address')" />
                            </div>
                            @if ($type === 'transfer')
                            <div class="col-lg-12">
                                <x-form.input name="delivery_address" type="text"
                                    :label="__('cruds.maintenance_requests.fields.delivery_address')" />
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">{{ __('global.save') }}</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('global.close')
                                }}</button>
                        </div>
                    </form>


                </x-form.modal>
            </x-index-filter>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover" id="maintenance-request-table">
        <thead>
            <tr>
                <th>{{ __('global.code') }}</th>
                <th>{{ __('cruds.maintenance_requests.fields.driver') }}</th>
                <th>{{ __('cruds.maintenance_requests.fields.mechanic') }}</th>
                <th>{{ __('cruds.maintenance_requests.fields.type') }}</th>
                <th>{{ __('cruds.maintenance_requests.fields.plate_number') }}</th>
                @if ($type === 'maintenance')
                <th>{{ __('cruds.maintenance_requests.fields.services') }}</th>

                @endif
                @if ($type === 'transfer')
                <th>{{ __('cruds.maintenance_requests.fields.transfer_location') }}</th>

                @endif
                {{-- <th>{{ __('cruds.maintenance_requests.fields.amount') }}</th> --}}
                <th>{{ __('cruds.maintenance_requests.fields.status') }}</th>
                <th>{{ __('global.date') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
            <tr>
                <td>{{ $request->code() }}</td>
                <td>{{ $request->driver->name ?? '-' }}</td>
                <td>{{ $request->mechanic->name ?? '-' }}</td>
                <td>{{ $request->type }}</td>
                <td>{{ $request->plate_number }}</td>
                @if ($type === 'maintenance')
                <td>{{ $request->services }}</td>
                @endif
                @if ($type === 'transfer')
                <td>{{ $request->transfer_location }}</td>
                @endif

                {{-- <td>{{ $request->amount }}</td> --}}
                <td>
                    <x-request-status-badge :status="$request->status" />
                </td>
                <td>{{ formatData($request->created_at) }}</td>
                <td>
                    @if ($request->status->value === 'pending')
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-{{ $request->status->color() }} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ $request->status->value }}</button>
                        <ul class="dropdown-menu" style="">
                            <li><a class="dropdown-item" href="{{ route('admin.maintenance-requests.change-status',['id'=>$request->id,'status'=>'approved']) }}">approve</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin.maintenance-requests.change-status',['id'=>$request->id,'status'=>'rejected']) }}">reject</a>
                            </li>

                        </ul>
                    </div>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $maintenance-requests->withQueryString()->links() }} --}}

</div>
