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
<div class="card">
    <div class="card-header">
        {{ trans('global.view') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        {{-- Tabs --}}
        <ul class="nav nav-tabs nav-dark" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#main_details" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-user-circle me-1'></i></div>
                        <div class="tab-title">{{ __('global.main_details') }}</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#credentials" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-key me-1'></i></div>
                        <div class="tab-title">{{ __('global.credentials') }}</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#attachments" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-file me-1'></i></div>
                        <div class="tab-title">{{ __('global.attachments') }}</div>
                    </div>
                </a>
            </li>
        </ul>

        {{-- Tab Content --}}
        <div class="tab-content py-3">
            {{-- Main Details Tab --}}
            <div class="tab-pane fade show active" id="main_details" role="tabpanel">
                <div class="row">
                    {{-- Personal Info --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-dark text-white">{{ __('global.personal_data') }}</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>

                                        <tr><th>{{ trans('cruds.user.fields.gender') }}</th><td>{{ $user->gender ? __('global.' . $user->gender) : '' }}</td></tr>
                                        <tr><th>{{ __('global.religion') }}</th><td>{{ $user->religion ? __('global.' . $user->religion) : '' }}</td></tr>
                                        <tr><th>{{ __('global.marital_status') }}</th><td>{{ $user->marital_status ? __('global.' . $user->marital_status) : '' }}</td></tr>
                                        <tr><th>{{ __('global.birthday') }}</th><td>{{ $user->birthday }}</td></tr>
                                        <tr><th>{{ __('global.nationality') }}</th><td>{{ $user->nationality }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- Job Info --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-dark text-white">{{ __('global.job_info') }}</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr><th>{{ __('global.job_title') }}</th><td>{{ $user->job_title }}</td></tr>
                                        <tr><th>{{ __('global.department') }}</th><td>{{ $user->department }}</td></tr>
                                        <tr><th>{{ __('global.job_start_date') }}</th><td>{{ $user->job_start_date }}</td></tr>
                                        <tr><th>{{ __('global.job_end_date') }}</th><td>{{ $user->job_end_date }}</td></tr>
                                        <tr><th>{{ __('global.employee_status') }}</th><td><span class="badge bg-{{ $user->employee_status ? 'success' : 'danger' }}">{{ $user->employee_status ? __('global.active') : __('global.inactive') }}</span></td></tr>
                                        <tr><th>{{ __('cruds.user.fields.direct_manager') }}</th><td>{{ $user->directManager->name ?? 'N/A' }}</td></tr>
                                        <tr><th>{{ __('global.company') }}</th><td>{{ $user->company->company_name ?? 'N/A' }}</td></tr>
                                         <tr><th>{{ __('global.company_expiry_contract') }}</th><td>{{ $user->company_expiry_contract }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     {{-- Contact and Address --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-dark text-white">{{ __('global.contact_data') }}</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr><th>{{ __('global.mobile_1') }}</th><td>{{ $user->phone }}</td></tr>
                                        <tr><th>{{ __('global.mobile_2') }}</th><td>{{ $user->phone2 }}</td></tr>
                                        <tr><th>{{ __('global.country') }}</th><td>{{ $user->country }}</td></tr>
                                        <tr><th>{{ __('global.governorate') }}</th><td>{{ $user->governorate }}</td></tr>
                                        <tr><th>{{ __('global.city') }}</th><td>{{ $user->city }}</td></tr>
                                        <tr><th>{{ __('global.address') }}</th><td>{{ $user->address }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     {{-- Payroll --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-dark text-white">{{ __('global.payroll_setup') }}</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr><th>{{ __('global.basic_salary') }}</th><td>{{ $user->basic_salary }}</td></tr>
                                        <tr><th>{{ __('global.accommodation_allowance') }}</th><td>{{ $user->accommodation_allowance }}</td></tr>
                                        <tr><th>{{ __('global.meal_allowance') }}</th><td>{{ $user->meal_allowance }}</td></tr>
                                        <tr><th>{{ __('cruds.shift.title_singular') }}</th><td>{{ $user->shift->name ?? 'N/A' }}</td></tr>
                                        <tr><th>{{ __('cruds.user.fields.vacation_balance') }}</th><td>{{ $user->vacation_balance }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Credentials Tab --}}
            <div class="tab-pane fade" id="credentials" role="tabpanel">
                 <div class="card bg-light mb-4">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0 text-white">{{ trans('global.login_credentials') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label><strong>{{ trans('cruds.user.fields.email') }}</strong></label>
                            <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('cruds.user.fields.password') }}</strong></label>
                            <div class="input-group">
                                <input type="text" id="userPassword" class="form-control" value="{{ $user->password_text }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Attachments Tab --}}
            <div class="tab-pane fade" id="attachments" role="tabpanel">
                <div class="row">
                     <div class="col-md-3 text-center">
                        <label><strong>{{__('global.employee_image')}}</strong></label><br>
                        <img src="{{ $user->profile_image ?? asset('images/user.png') }}" alt="Employee Image" class="img-thumbnail" width="150">
                    </div>
                    @php
                        $mediaItems = [
                            'driving_licenses' => __('global.driving_license_file_front'),
                            'driving_licenses_back' => __('global.driving_license_file_back'),
                            'personal_ids' => __('global.personal_license_file_front'),
                            'personal_ids_back' => __('global.personal_license_file_back'),
                            'graduation_certificates' => __('global.graduation_certificate_front'),
                            'graduation_certificates_back' => __('global.graduation_certificate_back'),
                            'company_contracts' => __('global.company_contract'),
                        ];
                    @endphp

                    @foreach($mediaItems as $collection => $label)
                        @if($user->hasMedia($collection))
                            <div class="col-md-4">
                                <div class="card my-2">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $label }}</h5>
                                        <a href="{{ $user->getFirstMediaUrl($collection) }}" target="_blank" class="btn btn-dark">
                                            <i class="bx bx-show"></i> {{ __('global.view_file') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a class="btn btn-secondary" href="{{ route('admin.users.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
