@props([
    'totalClients',
    'totalOrders',
    'totalCash',
    'totalCompanies',
    'totalVehicles',
    'totalDrivers',
    'topDrivers',
    'cashPerCompany',
    'totalCashPercentage',
    'ordersPercentage',
    'vehiclesPercentage',
    'clientsPercentage',
    'companiesPercentage',
    'driversPercentage',
    'orderChartMonths',
    'completedOrdersData',
    'cancelledOrdersData',
    // الـ props الجديدة
    'totalMechanics',
    'totalMaintenanceRequests',
    'TransferRequests',
    'WorkOrderInvoice'
])
<style>
  .admin-card .card-header {
        display: flex;
        align-items: center;
        gap: 15px; /* مسافة بين الشعار والنص */
        position: relative;
        z-index: 2;
    }
    .div9 .material-symbols-outlined {
    vertical-align: middle;
    font-size: 22px !important; /* قم بتعديل الحجم. !important يفرض تطبيق النمط */
    color: #FFFFFF; /* لون الأيقونة */
}

    .company-logo-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.7);
        object-fit: cover; /* لضمان أن الصورة تملأ الدائرة بشكل صحيح */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff; /* لون خلفية احتياطي */
    }

    .company-logo-circle:hover {
        transform: scale(1.15);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        cursor: pointer;
    }

    .admin-card .card-header-user-info p {
        margin: 0;
        line-height: 1.4;
        font-size: 0.7rem;

    }

    /* للتأكد من أن الخلفية لا تطغى على المحتوى */
    .admin-card .card-background {

        width: 100%;
        height: 100%;
        object-fit: cover;


    }
</style>
@php
    // نحصل على المستخدم المسجل دخوله
    $user = auth()->user();
    $logoUrl = null;

    // نتحقق مما إذا كان المستخدم مرتبطًا بشركة
    if ($user && $user->company) {
        // نحاول الحصول على رابط الشعار من مجموعة الوسائط 'company_logo'
        $logoUrl = $user->company->getFirstMediaUrl('company_logo');
    }
@endphp
<div class="container-fluid admin-statistics-fix">
    <div class="parent">
        <div class="div1 home-gradient with-border">
            <div class="admin-card ">
                <img class="card-background" src="{{asset('images/icon.png')}}" alt="ninja-logo"/>
                <div class="card-header">
            {{-- الشعار الدائري --}}
            <img class="company-logo-circle" src="{{ $logoUrl }}" alt="Company Logo"/>

            {{-- معلومات المستخدم --}}
            <div class="card-header-user-info">
                <p class="mb-3">{{ $user?->roles()?->value('title') }}</p>
                <p class="card-header-name mb-3">{{ trans('cruds.home.greeting', ['name' => $user?->name]) }}</p>
                <p>{{ $user?->address ?? trans('cruds.home.location') }}</p>
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
                    <div id="comp-total-cash-chart"></div>
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
                    <div id="comp-total-drivers-chart"></div>
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
                    <div id="comp-total-companies-chart"></div>
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
                    <div id="comp-total-orders-chart"></div>
                </div>
            </div>
        </div>

        <div class="div6 home-gradient with-border p-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h6 class="mb-0">{{ trans('cruds.home.order_statistics') }}</h6>
                {{-- START: زر التصدير --}}
                <a href="{{ route('admin.orders.exportMonthly') }}" class="btn btn-light btn-sm rounded-pill px-2 py-1 d-flex align-items-center gap-1">
                    <i class="material-icons-outlined" style="font-size: 1rem;">file_download</i>
                    <span>{{ trans('cruds.home.export_excel') }}</span>
                </a>
                {{-- END: زر التصدير --}}
            </div>
            <div class="d-flex align-items-center   mt-0">
                <h5 class="mb-0 fs-6">36.7%</h5>
                <div class="d-flex align-items-center ">
                    <span class="material-icons-outlined text-success">trending_up</span>
                    <p class="mb-0 text-success">34.5%</p>
                </div>
            </div>
            <div id="comp-order-statistics-chart" class="mt-1"></div>
        </div>

        <div class="div7 home-gradient with-border p-2">
            <div class="table-responsive">
                <table class="table table-borderless mb-0 ">
                    @forelse($topDrivers as $driver)
                        <tr>
                            <td><img src="{{ $driver->avatar_url ?? asset('/dashboard/assets/images/avatars/11.png') }}" width="23" alt="{{ trans('cruds.home.driver_avatar_alt') }}" class="rounded-circle"></td>
                            <td><h5 class="mb-0 ">{{ $driver->name }}</h5></td>
                            <td><span class="text-success">{{ $driver->orders_count }} {{ trans('cruds.home.orders') }}</span><span> / {{ $driver->company->company_name ?? 'N/A' }}</span></td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center">No drivers found.</td></tr>
                    @endforelse
                </table>
            </div>
        </div>

        <div class="div8" style="display: flex; flex-direction: column; gap: 1rem; background: transparent; border: none; padding: 0;">
            <div class=" statistic-card with-border home-gradient" style="flex: 1;">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">directions_car</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_vehicles') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ $totalVehicles }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.vehicle') }}</p>
                    </div>
                    <div id="comp-total-vehicles-chart"></div>
                </div>
            </div>
            <div class=" statistic-card with-border home-gradient" style="flex: 1;">
                <div class=" statistic-card-header">
                    <i class="material-icons-outlined">groups</i>
                    <p class="mb-0 ">{{ trans('cruds.home.total_clients') }}</p>
                </div>
                <div class="statistic-card-body">
                    <div>
                        <p class="mb-0 fw-bold">{{ $totalClients }}</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.client') }}</p>
                    </div>
                    <div id="comp-total-clients-chart"></div>
                </div>
            </div>
        </div>

        <div class="div9 home-gradient with-border p-3">
            <div class="mt-3 d-flex align-items-center justify-content-between w-100">
                <h5 class="mb-3 w-100 text-center">{{ trans('cruds.home.maintenance_stats_title') }}</h5>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-between mt-2">

                {{-- 1. إجمالي الميكانيكيين --}}
                <div class="w-100 d-flex mb-4 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined">engineering</span>
                        <span class="mx-3">{{ trans('cruds.home.total_mechanics') }}</span>
                    </div>
                    <h5 class="mb-0">{{ $totalMechanics }}</h5>
                </div>

                {{-- 2. طلبات الصيانة --}}
                <div class="w-100 d-flex mb-4 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined">construction</span>
                        <span class="mx-3">{{ trans('cruds.home.maintenance_requests') }}</span>
                    </div>
                    <h5 class="mb-0">{{ $totalMaintenanceRequests }}</h5>
                </div>

                {{-- 3. طلبات النقل --}}
                <div class="w-100 d-flex mb-4 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined">local_shipping</span>
                        <span class="mx-3">{{ trans('cruds.home.transfer_requests') }}</span>
                    </div>
                    <h5 class="mb-0">{{ $TransferRequests }}</h5>
                </div>

                {{-- 4. فواتير أوامر العمل --}}
                <div class="w-100 d-flex mb-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined">receipt_long</span>
                        <span class="mx-3">{{ trans('cruds.home.work_order_invoices') }}</span>
                    </div>
                    <h5 class="mb-0">{{ $WorkOrderInvoice }}</h5>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    (function() {
        /**
         * دالة لتحديد اللون المناسب بناءً على النسبة المئوية.
         * @param {number} percentage - القيمة المئوية (0-100).
         * @returns {string} - كود اللون الهيكس.
         */
        function getColorForPercentage(percentage) {
            if (percentage >= 80) { // من 80% إلى 100%
                return '#47ff33'; // أخضر
            } else if (percentage >= 65) { // من 65% إلى 79.9%
                return '#0d6efd'; // أزرق
            } else if (percentage >= 50) { // من 50% إلى 64.9%
                return '#ffc107'; // أصفر
            } else { // أقل من 50%
                return '#dc3545'; // أحمر
            }
        }

        /**
         * دالة للتأكد من أن الكود يعمل بعد تحميل DOM بالكامل.
         * @param {function} fn - الدالة التي سيتم تنفيذها.
         */
        function onDomReady(fn) {
            if (document.readyState === 'complete' || document.readyState === 'interactive') {
                setTimeout(fn, 1);
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }

        /**
         * دالة لإنشاء مخطط دائري مع لون ديناميكي.
         * @param {string} elementId - مُعرّف العنصر.
         * @param {number} seriesData - بيانات النسبة المئوية.
         */
        function createRadialChart(elementId, seriesData) {
            const chartEl = document.querySelector(elementId);
            if (!chartEl) {
                return;
            }
            try {
                // الحصول على اللون ديناميكيًا بناءً على النسبة
                const dynamicColor = getColorForPercentage(seriesData);

                const options = {
                    series: [seriesData],
                    chart: {
                        type: 'radialBar',
                        height: 70,
                        width: 70, // *** تم تحديد العرض هنا ***
                        sparkline: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                size: '60%' // الحجم لم يتغير
                            },
                            track: {
                                background: 'rgba(0,0,0,0.1)'
                            },
                            dataLabels: {
                                name: {
                                    show: false
                                },
                                value: {
                                    show: true,
                                    offsetY: 5,
                                    fontSize: '14px',
                                    fontWeight: '400',
                                    formatter: (val) => val + '%'
                                }
                            }
                        }
                    },
                    stroke: {
                        lineCap: 'round'
                    },
                    colors: [dynamicColor] // استخدام اللون الديناميكي هنا
                };
                new ApexCharts(chartEl, options).render();
            } catch (e) {
                console.error(`Error creating chart ${elementId}:`, e);
            }
        }

        /**
         * دالة بدء تشغيل جميع المخططات في الصفحة.
         */
        function initComponentCharts() {
            // تم تحديث استدعاءات الدوال لاستخدام اللون الديناميكي
            createRadialChart("#comp-total-cash-chart", {{ $totalCashPercentage }});
            createRadialChart("#comp-total-orders-chart", {{ $ordersPercentage }});
            createRadialChart("#comp-total-drivers-chart", {{ $driversPercentage }});
            createRadialChart("#comp-total-companies-chart", {{ $companiesPercentage }});
            createRadialChart("#comp-total-vehicles-chart", {{ $vehiclesPercentage }});
            createRadialChart("#comp-total-clients-chart", {{ $clientsPercentage }});

            // --- الكود الخاص بمخطط إحصائيات الطلبات لم يتغير حسب الطلب ---
            const orderStatsEl = document.querySelector("#comp-order-statistics-chart");
            if (orderStatsEl) {
                try {
                    var orderStatsOptions = {
                        series: [{
                            name: "Completed",
                            data: @json($completedOrdersData)
                        }, {
                            name: "Cancelled",
                            data: @json($cancelledOrdersData)
                        }],
                        chart: {
                            foreColor: "#9ba7b2",
                            height: 150,
                            type: 'line',
                            toolbar: {
                                show: false
                            },
                            sparkline: {
                                enabled: false
                            },
                            zoom: {
                                enabled: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 3,
                            curve: 'smooth'
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                gradientToColors: ['#11e018', '#f80000'],
                                shadeIntensity: 1,
                                type: 'vertical',
                                stops: [0, 100, 100, 100]
                            },
                        },
                        colors: ["#11e018", '#f80000'],
                        grid: {
                            show: false,
                            borderColor: 'rgba(0, 0, 0, 0.15)',
                            strokeDashArray: 4,
                        },
                        tooltip: {
                            theme: "dark",
                            y: {
                                title: {
                                    formatter: function(seriesName) {
                                        return seriesName + ":"
                                    }
                                }
                            }
                        },
                        xaxis: {
                            categories: @json($orderChartMonths)
                        }
                    };
                    new ApexCharts(orderStatsEl, orderStatsOptions).render();
                } catch (e) {
                    console.error("Component Script Error (Order Statistics Chart):", e);
                }
            }
        }

        // تشغيل الكود بعد تحميل الصفحة
        onDomReady(initComponentCharts);

    })();
</script>