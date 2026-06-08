<style>
    .custom-tab a {
        border-radius: 8px;
        padding: 0.5rem 1rem;
        display: inline-block;
        transition: all 0.2s ease-in-out;
    }
    .custom-tab a.active-tab {
        background-color: #000;
        color: white;
        font-weight: bold;
    }
    .custom-tab a.inactive-tab {
        background-color: #d4f5cd;
        color: black;
        font-weight: normal;
    }
</style>

<ul class="nav nav-tabs mb-4 custom-tab">
    @foreach ($tabs as $tab)
        {{-- أصبح كل المنطق المعقد الآن داخل الدالة المساعدة isTabActive --}}
        @if (empty($tab['permission']) || auth()->user()->can($tab['permission']))
        @php $isActive = isTabActive($tab); @endphp

        <li class="nav-item">
            <a href="{{ route($tab['route_name'], $tab['route_params'] ?? []) }}"
               class="nav-link {{ $isActive ? 'active-tab' : 'inactive-tab' }}">
                {{ $tab['label'] }}
            </a>
        </li>
        @endif
    @endforeach
</ul>
