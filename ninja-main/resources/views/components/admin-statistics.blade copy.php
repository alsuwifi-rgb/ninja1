@props([
    'totalCustomers',
    'totalOrders',
    'totalCash',
    'totalDrivers',
    'totalCompanies',
    'totalCashPercentage',
    'driversPercentage',
    'companiesPercentage',
    'ordersPercentage',
    'topDrivers',
    'completedOrders',
    'inProgressOrders',
    'delayedOrders',
    'cashPerCompany'
])

{{-- START: Dummy containers to prevent theme script errors --}}
<div style="display: none !important; visibility: hidden; width: 0; height: 0;">
    <div id="chart1"></div>
    <div id="chart3"></div>
    <div id="chart-circle-1"></div>
    <div id="chart-circle-2"></div>
    <div id="chart-circle-3"></div>
    <div id="chart-circle-4"></div>
    <div id="chart-index2-5"></div>
    <div id="circle-chart-one"></div>
    <div id="circle-chart-two"></div>
</div>
{{-- END: Dummy containers --}}


<div class="container-fluid admin-statistics-fix">
    <div class="parent">
        <div class="div1 home-gradient with-border">
            <div class="admin-card ">
                <img class="card-background" src="{{asset('images/icon.png')}}" alt="ninja-logo"/>
                <div class="card-header">
                    <p>{{ auth()->user()?->roles()?->value('title') }}</p>
                    <p class="card-header-name">{{ trans('cruds.home.greeting', ['name' => auth()->user()?->name]) }}</p>
                    <p>{{ auth()->user()?->address ?? trans('cruds.home.location') }}</p>
                </div>
                <div class="admin-card-body">
                    <div class=" chart-element">
                        <div class="chart-container2">
                            <div id="comp-chart1"></div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="mt-3 ml-2">
                                <p class="mb-0 fs-6 ">{{ $totalCustomers }}</p>
                                <p class="mb-0">{{ trans('cruds.home.total_customers') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div2">
            <div class=" statistic-card with-border home-gradient">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">payments</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_cash') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ number_format($totalCash, 2) }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.currency') }}</p>
                    </div>
                    <div id="comp-chart-circle-1"></div>
                </div>
            </div>
        </div>
        <div class="div3">
            <div class=" statistic-card with-border home-gradient">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">person_4</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_drivers') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ $totalDrivers }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.driver') }}</p>
                    </div>
                    <div id="comp-chart-circle-2"></div>
                </div>
            </div>
        </div>
        <div class="div4">
            <div class=" statistic-card with-border home-gradient">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">apartment</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_companies') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ $totalCompanies }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.company') }}</p>
                    </div>
                    <div id="comp-chart-circle-3"></div>
                </div>
            </div>
        </div>
        <div class="div5">
            <div class=" statistic-card with-border home-gradient">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">inventory_2</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_orders') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ $totalOrders }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.order') }}</p>
                    </div>
                    <div id="comp-chart-circle-4"></div>
                </div>
            </div>
        </div>
        <div class="div6 home-gradient with-border p-3">
            <h6 class="mb-1">{{ trans('cruds.home.order_statistics') }}</h6>
            <div class="d-flex align-items-center   mt-0">
                <h5 class="mb-0 fs-6">36.7%</h5>
                <div class="d-flex align-items-center ">
                    <span class="material-icons-outlined text-success">trending_up</span>
                    <p class="mb-0 text-success">34.5%</p>
                </div>
            </div>
            <div id="comp-chart-index2-5" class="mt-1"></div>
        </div>
        <div class="div7  home-gradient with-border p-2">
            <div class="table-responsive">
                <table class="table table-borderless mb-0 ">
                    @forelse($topDrivers as $driver)
                        <tr>
                            <td>
                                <img src="{{ $driver->avatar_url ?? asset('/dashboard/assets/images/avatars/11.png') }}" width="23"
                                     alt="{{ trans('cruds.home.driver_avatar_alt') }}" class="rounded-circle">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 ">{{ $driver->name }}</h5>
                                </div>
                            </td>
                            <td>
                                <span class="text-success">{{ $driver->orders_count }} {{ trans('cruds.home.orders') }}</span>
                                <span> / {{ $driver->company->company_name ?? 'N/A' }}</span>
                            </td>
                            <td>
                                {{-- You can add a performance trend icon here --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No drivers found.</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="div8 home-gradient with-border">
            <div class="mt-3 d-flex align-items-center justify-content-between">
                <h5 class="mb-0 ">{{ trans('cruds.home.orders_title') }}</h5>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-between mt-3">
                <div style="transform: rotate(231deg);" id="comp-circle-chart-one"></div>
                <div class="d-flex  justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-success">check_circle</i>
                        <p class="m-2">{{ $completedOrders }}</p>
                        <span class="m-2">{{ trans('cruds.home.status_completed') }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-warning">trending_up</i>
                        <p class="m-2">{{ $inProgressOrders }}</p>
                        <span class="m-2 text-wrap">{{ trans('cruds.home.status_in_progress') }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-danger">trending_down</i>
                        <p class="m-2">{{ $delayedOrders }}</p>
                        <span class="m-2">{{ trans('cruds.home.status_delayed') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="div9 home-gradient with-border p-3">
            <div class="mt-3 d-flex align-items-center justify-content-between w-100">
                <h5 class="mb-0 w-100 text-center">{{ trans('cruds.home.cash_per_company_title') }}</h5>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-between mt-3 ">
                <div style="transform: rotate(231deg);" id="comp-circle-chart-two"></div>
                <div class="mt-3 d-flex align-items-center justify-content-between w-100">
                    <h3 class="mb-4 w-100 text-center">${{ number_format($cashPerCompany->sum('orders_sum_amount'), 2) }}</h3>
                </div>
                @foreach($cashPerCompany as $company)
                <div class="w-100 d-flex mb-3 justify-content-between align-items-center ">
                    <div class="d-flex align-items-center mb-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#75FB4C">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"/>
                        </svg>
                        <span class="mx-3">{{ $company->company_name }}</span>
                    </div>
                    <h6>${{ number_format($company->orders_sum_amount, 2) }}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function() {
        function onDomReady(fn) {
            if (document.readyState === 'complete' || document.readyState === 'interactive') {
                setTimeout(fn, 1);
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }

        function initComponentCharts() {
            console.log("Component Script: Initializing charts...");

            // --- CHART: Order Statistics (Bar Chart) ---
            const orderStatsEl = document.querySelector("#comp-chart-index2-5");
            if (orderStatsEl) {
                try {
                    var orderStatsOptions = {
                        series: [{ name: 'Orders', data: [{{ $completedOrders }}, {{ $inProgressOrders }}, {{ $delayedOrders }}] }],
                        chart: { type: 'bar', height: 120, toolbar: { show: false } },
                        plotOptions: { bar: { horizontal: false, columnWidth: '45%', endingShape: 'rounded' } },
                        dataLabels: { enabled: false },
                        stroke: { show: true, width: 2, colors: ['transparent'] },
                        xaxis: { categories: ['Completed', 'In Progress', 'Delayed'], labels: { show: false } },
                        yaxis: { labels: { show: false } },
                        grid: { show: false },
                        fill: { opacity: 1 },
                        tooltip: { y: { formatter: (val) => val + " orders" } },
                        colors: ['#47ff33', '#ffc107', '#ff0808']
                    };
                    new ApexCharts(orderStatsEl, orderStatsOptions).render();
                } catch(e) { console.error("Component Script Error (Order Statistics):", e); }
            }

            // --- CHART: Total Cash ---
            const chartCircle1El = document.querySelector("#comp-chart-circle-1");
            if(chartCircle1El) {
                try {
                    var options1 = {
                        series: [{{ $totalCashPercentage }}],
                        chart: { type: 'radialBar', height: 120, sparkline: { enabled: true } },
                        plotOptions: { radialBar: { hollow: { size: '60%' }, track: { background: 'rgba(0,0,0,0.1)' }, dataLabels: { name: { show: false }, value: { show: true, offsetY: 8, fontSize: '18px', fontWeight: '600' } } } },
                        stroke: { lineCap: 'round' },
                        labels: ['Progress'],
                        colors: ['#47ff33']
                    };
                    new ApexCharts(chartCircle1El, options1).render();
                } catch(e) { console.error("Component Script Error (Total Cash):", e); }
            }

            // --- CHART: Total Drivers ---
            const chartCircle2El = document.querySelector("#comp-chart-circle-2");
            if(chartCircle2El) {
                try {
                     var options2 = {
                        series: [{{ $driversPercentage }}],
                        chart: { type: 'radialBar', height: 120, sparkline: { enabled: true } },
                        plotOptions: { radialBar: { hollow: { size: '60%' }, track: { background: 'rgba(0,0,0,0.1)' }, dataLabels: { name: { show: false }, value: { show: true, offsetY: 8, fontSize: '18px', fontWeight: '600' } } } },
                        stroke: { lineCap: 'round' },
                        labels: ['Progress'],
                        colors: ['#ff0808']
                    };
                    new ApexCharts(chartCircle2El, options2).render();
                } catch(e) { console.error("Component Script Error (Total Drivers):", e); }
            }

            // --- CHART: Total Companies ---
            const chartCircle3El = document.querySelector("#comp-chart-circle-3");
            if(chartCircle3El) {
                try {
                    var options3 = {
                        series: [{{ $companiesPercentage }}],
                        chart: { type: 'radialBar', height: 120, sparkline: { enabled: true } },
                        plotOptions: { radialBar: { hollow: { size: '60%' }, track: { background: 'rgba(0,0,0,0.1)' }, dataLabels: { name: { show: false }, value: { show: true, offsetY: 8, fontSize: '18px', fontWeight: '600' } } } },
                        stroke: { lineCap: 'round' },
                        labels: ['Progress'],
                        colors: ['#1f35bd']
                    };
                    new ApexCharts(chartCircle3El, options3).render();
                } catch(e) { console.error("Component Script Error (Total Companies):", e); }
            }

            // --- CHART: Total Orders ---
            const chartCircle4El = document.querySelector("#comp-chart-circle-4");
            if(chartCircle4El) {
                try {
                    var options4 = {
                        series: [{{ $ordersPercentage }}],
                        chart: { type: 'radialBar', height: 120, sparkline: { enabled: true } },
                        plotOptions: { radialBar: { hollow: { size: '60%' }, track: { background: 'rgba(0,0,0,0.1)' }, dataLabels: { name: { show: false }, value: { show: true, offsetY: 8, fontSize: '18px', fontWeight: '600' } } } },
                        stroke: { lineCap: 'round' },
                        labels: ['Progress'],
                        colors: ['#47ff33']
                    };
                    new ApexCharts(chartCircle4El, options4).render();
                } catch(e) { console.error("Component Script Error (Total Orders):", e); }
            }

            // --- CHART: Order Status (Donut) ---
            const circleChartOneEl = document.querySelector("#comp-circle-chart-one");
            if(circleChartOneEl) {
                try {
                    var optionsCircle1 = {
                        series: [{{ $completedOrders }}, {{ $inProgressOrders }}, {{ $delayedOrders }}],
                        chart: { type: 'donut', height: 250 },
                        labels: ['Completed', 'In Progress', 'Delayed'],
                        colors: ['#6FF25A', '#FFB926', '#FF3B30'],
                        legend: { show: false },
                        dataLabels: { enabled: false },
                        responsive: [{ breakpoint: 480, options: { chart: { width: 200 } } }]
                    };
                    new ApexCharts(circleChartOneEl, optionsCircle1).render();
                } catch(e) { console.error("Component Script Error (Order Status):", e); }
            }

            // --- CHART: Cash Per Company (Donut) ---
            const circleChartTwoEl = document.querySelector("#comp-circle-chart-two");
            if(circleChartTwoEl) {
                try {
                    var optionsCircle2 = {
                        series: @json($cashPerCompany->pluck('orders_sum_amount')),
                        chart: { type: 'donut', height: 250 },
                        labels: @json($cashPerCompany->pluck('company_name')),
                        legend: { show: false },
                        dataLabels: { enabled: false },
                        responsive: [{ breakpoint: 480, options: { chart: { width: 200 } } }]
                    };
                    new ApexCharts(circleChartTwoEl, optionsCircle2).render();
                } catch(e) { console.error("Component Script Error (Cash Per Company):", e); }
            }
        }

        onDomReady(initComponentCharts);
    })();
</script>
@endpush
