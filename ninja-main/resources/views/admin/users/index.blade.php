@extends('layouts.admin')

@section('content')
<style>

</style>
<x-tab-links :tabs="[
        [
        'label'       => trans('cruds.user.title'),
        'route_name'  => 'admin.users.index',
        'group_route' => ['admin.users.'],
        'permission'  => 'user_access',
    ],
    [
        'label'       => trans('cruds.target.title'),
        'route_name'  => 'admin.targets.index',
        'group_route' => ['admin.targets.'],
        'permission'  => 'target_access',
    ],
    [
        'label'       => trans('cruds.shift.title'),
        'route_name'  => 'admin.shifts.index',
        'group_route' => ['admin.shifts.'],
        'permission'  => 'shift_access',
    ],
    [
        'label'       => trans('cruds.attendance.title'),
        'route_name'  => 'admin.attendances.index',
        'group_route' => ['admin.attendances.'],
        'permission'  => 'attendance_access',
    ],
    [
        'label'       => trans('cruds.attendanceSchedule.title'),
        'route_name'  => 'admin.attendance.schedule.index',
        'group_route' => ['admin.attendance.schedule.'],
        'permission'  => 'attendance_schedule_access',
    ],
    [
        'label'       => trans('cruds.request_type.title'),
        'route_name'  => 'admin.request-types.index',
        'group_route' => ['admin.request-types.'],
        'permission'  => 'Request_Type_access',
    ],
    [
        'label'       => trans('cruds.request.title'),
        'route_name'  => 'admin.requests.create',
        'group_route' => ['admin.requests.'],
        'permission'  => 'Requests_access',
    ],
]" />
<div class="card">
    <div class="card-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3">
                {{ trans('cruds.user.title_singular') }}
            </div>
            <x-index-filter route="admin.users.index">
                <div class="col-auto">
                    <a href="{{ route('admin.users.create') }}">
                        <button class="btn btn-filter">
                            <span>{{ __('cruds.user.create') }}</span>
                            <i class=" bx bx-plus "></i>
                        </button>
                    </a>
                </div>
            </x-index-filter>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-user">
                <thead class="table-dark">
                    <tr>
                        <th>
                            {{ trans('cruds.employee.fields.id_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.employee.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.employee.fields.job_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.employee.fields.department') }}
                        </th>
                        <th>
                            {{ trans('cruds.employee.fields.work_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.driver.fields.contract_expires') }}
                        </th>
                        <th>
                            {{ trans('global.vehicle_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.employee.fields.image') }}
                        </th>
                        <th>
                            {{ trans('global.actions') }}

                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr data-entry-id="{{ $user->code() }}">

                        <td>
                            <a href="{{ route('admin.users.show', $user->id) }}">
                                {{ $user->code() ?? '' }}
                            </a>
                        </td>
                        <td>
                            {{ $user->full_name ?? '' }}
                        </td>
                        <td>
                            {{ $user->job_title ?? '' }}
                        </td>
                        <td>
                            {{ $user->department ?? '' }}
                        </td>

                        <td>
                            <x-status-badge :active="$user->employee_status" />
                        </td>
                        <td>
                            {{ $user->company_expiry_contract ?? '' }}
                        </td>
                        <td>
                            {{ $user->vehicle_type ?? '' }}
                        </td>
                        <td>
                            <a href="{{ $user->profile_image }}" target="_blank">
                                <img src="{{ $user->profile_image  }}"
                                    style="width: 50px; height: 50px;">
                            </a>
                        </td>
                        <td class="">
                            <x-table.button-edit :route="route('admin.users.edit',$user->id)" />
                                 {{-- زر تصدير المستخدم الحالي --}}
    <a href="{{ route('admin.users.export.single', $user->id) }}" class="btn btn-xs btn-success">
        <i class='bx bx-download'></i> {{-- يمكنك استخدام أي أيقونة مناسبة --}}
    </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->appends($_GET)->links()}}
        </div>
    </div>
</div>

@endsection
