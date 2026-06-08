{{-- Dark mode styles for notification container --}}
<style>
    .dark-theme .dropdown-notify {
        background-color: #242526;
        border: 1px solid #444;
        color: #e4e6eb;
    }
    .dark-theme .dropdown-notify .border-bottom,
    .dark-theme .dropdown-notify .border-top {
        border-color: #444 !important;
    }
    .dark-theme .dropdown-notify .notiy-title {
        color: #e4e6eb;
    }
    .dark-theme .dropdown-notify .option {
        color: #b0b3b8;
    }
    .dark-theme .dropdown-notify .dropdown-option {
        background-color: #3a3b3c;
        border: 1px solid #555;
    }
    .dark-theme .dropdown-notify .dropdown-option .dropdown-item {
        color: #e4e6eb;
    }
    .dark-theme .dropdown-notify .dropdown-option .dropdown-item:hover {
        background-color: #4e4f50;
    }
    .dark-theme .dropdown-notify .d-flex a {
        color: #8ab4f8;
    }
</style>

<script>
$(document).ready(function() {
    function fetchNotifications() {
        $.ajax({
            url: '{{ route("admin.user-alerts.getNotifications") }}',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#notification-list').html(data.html);
                if (data.unreadCount > 0) {
                    $('#unread-count').text(data.unreadCount).show();
                } else {
                    $('#unread-count').hide();
                }
            },
            error: function(xhr, status, error) {
                // console.error("Could not fetch notifications:", error);
            }
        });
    }

    // Fetch notifications on page load
    fetchNotifications();

    // Poll for new notifications every 30 seconds
    setInterval(fetchNotifications, 30000);

    // Mark as read when clicking the notification body
    $(document).on('click', '.notification-item', function(e) {
        if ($(e.target).closest('.delete-notification').length === 0) {
            e.preventDefault();
            var alertId = $(this).data('alert-id');
            var url = $(this).attr('href');

            $.ajax({
                url: '{{ route("admin.user-alerts.read") }}',
                type: 'POST',
                data: { _token: '{{ csrf_token() }}', alert_id: alertId },
                success: function() { window.location.href = url; }
            });
        }
    });

    // Delete notification logic
    $(document).on('click', '.delete-notification', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var alertId = $(this).closest('.notification-item').data('alert-id');
        var notificationElement = $(this).closest('.notification-item');

        if (confirm("{{ trans('global.delete_notification_confirm') }}")) {
            $.ajax({
                url: '{{ route("admin.user-alerts.destroyForUser") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    alert_id: alertId
                },
                success: function(data) {
                    if (data.success) {
                        notificationElement.fadeOut(300, function() { $(this).remove(); });
                    }
                },
                error: function() {
                    alert("{{ trans('global.could_not_delete_notification') }}");
                }
            });
        }
    });

    // Mark all as read
    $('#mark-all-as-read').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("admin.user-alerts.readAll") }}',
            type: 'POST',
            data: { _token: '{{ csrf_token() }}' },
            success: function() { fetchNotifications(); }
        });
    });
});
</script>