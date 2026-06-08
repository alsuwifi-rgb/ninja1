@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userAlert.title_singular') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th style="width: 20%;">
                            {{ trans('cruds.userAlert.fields.id') }}
                        </th>
                        <td>
                            {{ $userAlert->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userAlert.fields.alert_text') }}
                        </th>
                        <td>
                            {{ $userAlert->alert_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userAlert.fields.description') }}
                        </th>
                        <td>
                            {{-- Using nl2br to respect line breaks and e() to prevent XSS --}}
                            {!! nl2br(e($userAlert->description)) !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userAlert.fields.user') }}
                        </th>
                        <td>
                            {{-- Displaying the static list of original recipients --}}
                            @if(!empty($userAlert->recipient_names))
                                @foreach($userAlert->recipient_names as $name)
                                    <span class="badge bg-secondary text-white">{{ $name }}</span>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                     <tr>
                        <th>
                            {{ trans('cruds.userAlert.fields.created_at') }}
                        </th>
                        <td>
                            {{ $userAlert->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-secondary" href="{{ route('admin.user-alerts.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
