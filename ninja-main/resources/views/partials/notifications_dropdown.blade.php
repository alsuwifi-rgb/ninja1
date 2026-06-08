@inject('str', 'Illuminate\Support\Str')

@forelse($notifications as $notification)
    {{-- The href now points to the new shownoti route --}}
    <a class="dropdown-item border-bottom py-2 notification-item {{ $notification->pivot->read_at ? 'is-read' : '' }}" href="{{ route('admin.user-alerts.shownoti', $notification->id) }}" data-alert-id="{{ $notification->id }}">
        <div class="d-flex align-items-center gap-3">
            <div class="flex-grow-1">
                <h5 class="notify-title">{{ $notification->alert_text }}</h5>
                <p class="mb-0 notify-desc">{{ $str->limit($notification->description, 50) }}</p>
                <p class="mb-0 notify-time">{{ $notification->created_at->diffForHumans() }}</p>
            </div>
            <div class="notify-close delete-notification">
                <i class="material-icons-outlined fs-6">close</i>
            </div>
        </div>
    </a>
@empty
    <div class="px-3 py-2 text-center">
        <p class="mb-0">{{ trans('global.no_notifications') }}</p>
    </div>
@endforelse

<style>
    .notification-item.is-read {
        background-color: #f8f9fa;
        opacity: 0.7;
    }
    .notification-item.is-read .notify-title {
        font-weight: normal;
    }
    .notify-close {
        cursor: pointer;
        padding: 5px;
    }
    .notify-close:hover {
        color: red;
    }
</style>