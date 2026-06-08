@extends('layouts.admin')
@inject('str', 'Illuminate\Support\Str')

@section('content')

<div class="card">
    <div class="card-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2">
                {{ trans('cruds.userAlert.title_singular') }} {{ trans('global.list') }}
            </div>
            <div class="col-lg-7">
                <div class="d-flex justify-content-end">
                    {{-- Filter Component --}}
                    <x-index-filter route="admin.user-alerts.index" />
                </div>
            </div>
            <div class="col-lg-3 text-end">
                @can('user_alert_create')
                    <a class="btn btn-success ms-2" href="{{ route('admin.user-alerts.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.userAlert.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>{{ trans('cruds.userAlert.fields.id') }}</th>
                        <th>{{ trans('cruds.userAlert.fields.alert_text') }}</th>
                        {{-- Changed alert_link to description --}}
                        <th>{{ trans('cruds.userAlert.fields.description') }}</th>
                        <th>{{ trans('cruds.userAlert.fields.user') }}</th>
                        <th>{{ trans('cruds.userAlert.fields.created_at') }}</th>
                        <th>{{ trans('global.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userAlerts as $alert)
                        <tr data-entry-id="{{ $alert->id }}">
                            <td>{{ $alert->id }}</td>
                            <td>{{ $alert->alert_text ?? '' }}</td>
                            {{-- Displaying a snippet of the description --}}
                            <td>
                                {{ $str->limit($alert->description, 70) }}
                            </td>
                            {{-- START: UPDATED CODE TO DISPLAY SAVED NAMES --}}
                            <td>
                                @if(!empty($alert->recipient_names))
                                    @foreach($alert->recipient_names as $name)
                                        <span class="badge bg-secondary text-white">{{ $name }}</span>
                                    @endforeach
                                @endif
                            </td>
                            {{-- END: UPDATED CODE --}}
                            <td>{{ $alert->created_at->format('Y-m-d') ?? '' }}</td>
                            <td>
                                @can('user_alert_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.user-alerts.show', $alert->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('user_alert_delete')
                                    <form action="{{ route('admin.user-alerts.destroy', $alert->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-xs btn-danger">
                                            {{ trans('global.delete') }}
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">{{ trans('global.no_entries_in_table') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($userAlerts->hasPages())
            <div class="mt-3">
                {{ $userAlerts->appends(request()->input())->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
