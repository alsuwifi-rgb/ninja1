@props(['route'])

<div class="col-auto">
    <div class="btn-group">
        <button type="button" class="btn btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bx bx-calendar-alt me-1"></i>
            <span>
                {{-- عرض الشهر المختار أو نص افتراضي --}}
                {{ request('month') ? \Carbon\Carbon::parse(request('month'))->format('F Y') : trans('global.select_month') }}
            </span>
        </button>
        <ul class="dropdown-menu">
            {{-- توليد قائمة بآخر 12 شهراً --}}
            @for ($i = 0; $i < 12; $i++)
                @php
                    $date = \Carbon\Carbon::now()->subMonths($i);
                    $monthValue = $date->format('Y-m');
                    $monthLabel = $date->format('F Y');
                @endphp
                <li>
                    <a class="dropdown-item" href="{{ route($route, array_merge(request()->query(), ['month' => $monthValue])) }}">
                        {{ $monthLabel }}
                    </a>
                </li>
            @endfor
            <li><hr class="dropdown-divider"></li>
            {{-- رابط لإلغاء فلتر الشهر --}}
            <li><a class="dropdown-item" href="{{ route($route, array_merge(request()->except('month'))) }}">{{ trans('global.all_time') }}</a></li>
        </ul>
    </div>
</div>