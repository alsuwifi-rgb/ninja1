@props(['route'])

<div class="modal fade" id="dateFilterModal" tabindex="-1" aria-labelledby="dateFilterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route($route) }}" method="GET">
                {{-- تمرير الفلاتر الحالية للحفاظ عليها --}}
                @foreach(request()->except(['period', 'from_date', 'to_date']) as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach

                <div class="modal-header">
                    <h5 class="modal-title" id="dateFilterModalLabel">{{ trans('global.by_date') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Predefined Ranges --}}
                    <div class="row">
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'this_week'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.this_week') }}</a></div>
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'last_week'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.last_week') }}</a></div>
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'this_month'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.this_month') }}</a></div>
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'last_month'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.last_month') }}</a></div>
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'this_year'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.this_year') }}</a></div>
                        <div class="col-6 mb-2"><a href="{{ route($route, array_merge(request()->query(), ['period' => 'last_year'])) }}" class="btn btn-outline-primary w-100">{{ trans('global.last_year') }}</a></div>
                    </div>

                    <hr>

                    {{-- Custom Date Range --}}
                    <h6>{{ trans('global.date_range') }}</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="from_date">{{ trans('global.from') }}</label>
                            <input type="date" name="from_date" class="form-control" value="{{ request('from_date') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="to_date">{{ trans('global.to') }}</label>
                            <input type="date" name="to_date" class="form-control" value="{{ request('to_date') }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route($route, request()->except(['period', 'from_date', 'to_date'])) }}" class="btn btn-secondary">{{ trans('global.reset') }}</a>
                    <button type="submit" class="btn btn-primary">{{ trans('global.filter') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>