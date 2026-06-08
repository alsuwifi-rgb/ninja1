

@extends('layouts.print_layout')

@section('content')
<h2 style="text-align: center;">{{ __('User Report') }}</h2>
<table class=" table table-bordered table-striped table-hover datatable datatable-driver">
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
            {{ trans('cruds.employee.fields.birthday') }}
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
        <tr data-entry-id="{{ $user->id }}">

            <td>
                {{$user->code() ?? '' }}
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
                {{ $user->birthday ?? '' }}
            </td>


        </tr>
        @endforeach
    </tbody>
</table>
@endsection
