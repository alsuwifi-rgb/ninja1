@extends('layouts.admin')
@section('content')
<style>

</style>



<div class="card">
    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">{{ $userAlert->alert_text }}</h4>
    </div>

    <div class="card-body">
        <div class="mb-4">
            <h5 class="card-title text-muted">{{ trans('cruds.userAlert.fields.description') }}</h5>
            <p class="card-text fs-5">{!! nl2br(e($userAlert->description)) !!}</p>
        </div>

        <hr>

        <div class="d-flex justify-content-between align-items-center text-muted">
            <span>{{ trans('cruds.userAlert.fields.created_at') }}: {{ $userAlert->created_at->format('d/m/Y H:i') }}</span>
            <a class="btn btn-secondary" href="{{ url()->previous() }}">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection
