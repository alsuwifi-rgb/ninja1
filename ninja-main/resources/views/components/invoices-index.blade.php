<div class="table-responsive">

    <div class="table-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3">
                {{ trans('cruds.mechanic.title') }}
            </div>
            <div class="col-lg-9">
            <x-index-filter route="admin.maintenances.index"></x-index-filter>

            </div>
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

                <th>{{ __('global.total') }}</th>
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

                <td>{{ $request->total_price }}$</td>

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
                    <a href="{{ route('admin.work_orders.show',['id'=>$request->id]) }}">

                        <button  class="btn btn-success">
                            <i class="bx bx-show"></i>
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $maintenance-requests->withQueryString()->links() }} --}}

</div>
