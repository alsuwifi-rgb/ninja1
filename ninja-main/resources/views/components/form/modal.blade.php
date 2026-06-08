@props([
'id'=>'custom_modal',
'title'=>'',
'btn_color'=>'filter'
]
)
<div {{ $attributes->merge(['class'=>'']) }}>
    <button type="button" class="btn btn-{{ $btn_color }} add-client-btn d-flex align-items-center gap-1  " data-bs-toggle="modal"
        data-bs-target="#{{ $id }}">
        {{ $btn_slot }}
    </button>
</div>
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
