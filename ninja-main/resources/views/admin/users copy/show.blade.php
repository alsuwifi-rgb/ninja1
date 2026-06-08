@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.user.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.second_name') }}
                        </th>
                        <td>
                            {{ $user->second_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.last_name') }}
                        </th>
                        <td>
                            {{ $user->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.ar_name') }}
                        </th>
                        <td>
                            {{ $user->ar_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.ar_second_name') }}
                        </th>
                        <td>
                            {{ $user->ar_second_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.ar_last_name') }}
                        </th>
                        <td>
                            {{ $user->ar_last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <td>
                            {{ $user->email_verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <td>
                            @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.code') }}
                        </th>
                        <td>
                            {{ $user->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.old_code') }}
                        </th>
                        <td>
                            {{ $user->old_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.file_number') }}
                        </th>
                        <td>
                            {{ $user->file_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\User::GENDER_SELECT[$user->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.passport_number') }}
                        </th>
                        <td>
                            {{ $user->passport_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.passport_issue_date') }}
                        </th>
                        <td>
                            {{ $user->passport_issue_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.passport_expiry_date') }}
                        </th>
                        <td>
                            {{ $user->passport_expiry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.passport_images') }}
                        </th>
                        <td>
                            @foreach($user->passport_images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.job_title') }}
                        </th>
                        <td>
                            {{ $user->job_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.department') }}
                        </th>
                        <td>
                            {{ $user->department->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.phone') }}
                        </th>
                        <td>
                            {{ $user->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.mobile') }}
                        </th>
                        <td>
                            {{ $user->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.address') }}
                        </th>
                        <td>
                            {{ $user->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.license_type') }}
                        </th>
                        <td>
                            {{ $user->license_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.license_number') }}
                        </th>
                        <td>
                            {{ $user->license_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.license_expiry_date') }}
                        </th>
                        <td>
                            {{ $user->license_expiry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.license_images') }}
                        </th>
                        <td>
                            @foreach($user->license_images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.company') }}
                        </th>
                        <td>
                            {{ $user->company->company_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.direct_manager') }}
                        </th>
                        <td>
                            {{ $user->direct_manager->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.shift') }}
                        </th>
                        <td>
                            {{ $user->shift->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.salary') }}
                        </th>
                        <td>
                            {{ $user->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.birth_date') }}
                        </th>
                        <td>
                            {{ $user->birth_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.degree') }}
                        </th>
                        <td>
                            {{ $user->degree }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.graduation_date') }}
                        </th>
                        <td>
                            {{ $user->graduation_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.certificate_photos') }}
                        </th>
                        <td>
                            @foreach($user->certificate_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.showing') }}
                        </th>
                        <td>
                            {{ App\Models\User::SHOWING_SELECT[$user->showing] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#owner_contact_companies" role="tab" data-toggle="tab">
                {{ trans('cruds.contactCompany.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#direct_manager_users" role="tab" data-toggle="tab">
                {{ trans('cruds.user.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#employee_targets" role="tab" data-toggle="tab">
                {{ trans('cruds.target.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#user_restaurants" role="tab" data-toggle="tab">
                {{ trans('cruds.restaurant.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#rider_orders" role="tab" data-toggle="tab">
                {{ trans('cruds.order.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#owner_maintenances" role="tab" data-toggle="tab">
                {{ trans('cruds.maintenance.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#user_user_alerts" role="tab" data-toggle="tab">
                {{ trans('cruds.userAlert.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="owner_contact_companies">
            @includeIf('admin.users.relationships.ownerContactCompanies', ['contactCompanies' => $user->ownerContactCompanies])
        </div>
        <div class="tab-pane" role="tabpanel" id="direct_manager_users">
            @includeIf('admin.users.relationships.directManagerUsers', ['users' => $user->directManagerUsers])
        </div>
        <div class="tab-pane" role="tabpanel" id="employee_targets">
            @includeIf('admin.users.relationships.employeeTargets', ['targets' => $user->employeeTargets])
        </div>
        <div class="tab-pane" role="tabpanel" id="user_restaurants">
            @includeIf('admin.users.relationships.userRestaurants', ['restaurants' => $user->userRestaurants])
        </div>
        <div class="tab-pane" role="tabpanel" id="rider_orders">
            @includeIf('admin.users.relationships.riderOrders', ['orders' => $user->riderOrders])
        </div>
        <div class="tab-pane" role="tabpanel" id="owner_maintenances">
            @includeIf('admin.users.relationships.ownerMaintenances', ['maintenances' => $user->ownerMaintenances])
        </div>
        <div class="tab-pane" role="tabpanel" id="user_user_alerts">
            @includeIf('admin.users.relationships.userUserAlerts', ['userAlerts' => $user->userUserAlerts])
        </div>
    </div>
</div>

@endsection
