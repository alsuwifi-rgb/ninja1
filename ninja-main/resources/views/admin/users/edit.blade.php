@extends('layouts.admin')
@section('content')
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
<form method="post" action="{{ route('admin.users.update',$user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <button class="btn btn-success mb-2" type="submit">
        <span>{{ __('global.update') }}</span>
        <i class="bx bx-plus"></i>
    </button>
    @include('admin.users._form')


</form>


@endsection
