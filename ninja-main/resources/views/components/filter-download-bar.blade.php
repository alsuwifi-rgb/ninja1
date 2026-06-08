<div class="d-flex gap-2">
    <div class="dropdown">
        <button class="btn btn-light rounded-pill px-3 py-1" style="min-width: 130px; font-size: 0.9rem;" type="button" data-bs-toggle="dropdown">
            <span class="d-flex justify-content-between align-items-center">
                {{ trans('cruds.filter_bar.this_month') }}
                <i class="material-icons-outlined" style="font-size: 1.1rem;">expand_more</i>
            </span>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">{{ trans('cruds.filter_bar.this_day') }}</a></li>
            <li><a class="dropdown-item" href="#">{{ trans('cruds.filter_bar.this_month') }}</a></li>
            <li><a class="dropdown-item" href="#">{{ trans('cruds.filter_bar.this_year') }}</a></li>
        </ul>
    </div>
    <button class="btn btn-light rounded-circle p-1" style="width: 32px; height: 32px;">
        <i class="material-symbols-outlined" style="">Download</i>
    </button>
    <button class="btn btn-light rounded-circle p-1" style="width: 32px; height: 32px;">
        <i class="material-symbols-outlined" style="font-size: 1.3rem;">filter_list</i>
    </button>
</div>