@section('styles')
    @parent
    <style>
        .table>:not(caption)>*>* {
            background-color: transparent;
        }
    </style>
@endsection
<div class="container-fluid admin-statistics-fix">
    <div class="parent">
        <div class="div1 home-gradient with-border">
            <div class="admin-card ">
                <img class="card-background" src="{{asset('images/icon.png')}}" alt="ninja-logo"/>
                <div class="card-header">
                    <p>{{ auth()->user()?->roles()?->value('title') }}</p>
                    {{-- تم استخدام :name كمتغير سيتم تمريره لدالة الترجمة --}}
                    <p class="card-header-name">{{ trans('cruds.home.greeting', ['name' => auth()->user()?->name]) }}</p>
                    <p>{{ auth()->user()?->address }}</p>
                </div>
                <div class="admin-card-body">
                    <div class=" chart-element">
                        <div class="chart-container2">
                            <div id="chart1"></div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="mt-3 ml-2">
                                <p class="mb-0 fs-6 ">8</p>
                                <p class="mb-0">{{ trans('cruds.home.total_customers') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="chart-element">
                        <div class="chart-container2">
                            <div id="chart3"></div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="mt-3 ml-2">
                                <p class="mb-0 fs-6">520</p>
                                <p class="mb-0">{{ trans('cruds.home.total_new_contracts') }}</p>
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
                        <p class="mb-0 fw-bold">627.20</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.currency') }}</p>
                    </div>
                    <div id="chart-circle-1"></div>
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
                        <p class="mb-0 fw-bold">40</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.driver') }}</p>
                    </div>
                    <div id="chart-circle-2"></div>
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
                        <p class="mb-0 fw-bold">30</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.company') }}</p>
                    </div>
                    <div id="chart-circle-3"></div>
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
                        <p class="mb-0 fw-bold">10000</p>
                        <p class="mt-3 fw-bold">{{ trans('cruds.home.order') }}</p>
                    </div>
                    <div id="chart-circle-4"></div>
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
            <div id="chart-index2-5" class="mt-1"></div>
        </div>
        <div class="div7  home-gradient with-border p-2">
            <div class="table-responsive">
                <table class="table table-borderless mb-0 ">
                    {{-- بداية الصفوف الديناميكية --}}
                    {{-- سيتم التعامل مع البيانات الديناميكية (مثل اسم السائق والنسبة المئوية) في مكان آخر --}}
                    <tr>
                        <td>
                            <img src="{{ asset('/dashboard/assets/images/avatars/11.png') }}" width="23"
                                 alt="{{ trans('cruds.home.driver_avatar_alt') }}" class="rounded-circle">
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 ">Hossam Ragab</h5>
                                <span class="text-nowrap ms-2">95%</span>
                            </div>
                            <div class="progress flex-grow-1" style="height: 3px; max-width: 90px;">
                                <div class="progress-bar bg-success" style="width: 95%;" role="progressbar"
                                     aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            {{-- تم تعديل هذا السطر ليتوافق مع الترجمة بشكل صحيح --}}
                            <span class="text-success">123 {{ trans('cruds.home.orders') }}</span>
                            <span> / {{ trans('cruds.home.company') }} X</span>
                        </td>
                        <td>
                            <span class="material-icons-outlined">expand_less</span>
                            <span>28.5%</span>
                        </td>
                    </tr>
                   {{-- نهاية الصفوف الديناميكية (تكرر حسب الحاجة) --}}
                </table>
            </div>
        </div>
        <div class="div8 home-gradient with-border">
            <div class="mt-3 d-flex align-items-center justify-content-between">
                <h5 class="mb-0 ">{{ trans('cruds.home.orders_title') }}</h5>
                <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                       data-bs-toggle="dropdown">
                        <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{ trans('cruds.home.dropdown_option1') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ trans('cruds.home.dropdown_option2') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ trans('cruds.home.dropdown_option3') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-between mt-3">
                <div style="transform: rotate(231deg);" id="circle-chart-one"></div>
                <div class="d-flex  justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-success">check_circle</i>
                        <p class="m-2">76%</p>
                        <span class="m-2">{{ trans('cruds.home.status_completed') }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-warning">trending_up</i>
                        <p class="m-2">76%</p>
                        <span class="m-2 text-wrap">{{ trans('cruds.home.status_in_progress') }}</span>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="material-icons-outlined text-danger">trending_down</i>
                        <p class="m-2">76%</p>
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
                <div style="transform: rotate(231deg);" id="circle-chart-two"></div>
                <div class="mt-3 d-flex align-items-center justify-content-between w-100">
                    <h3 class="mb-4 w-100 text-center">$37,123</h3>
                </div>
                <div class="w-100 d-flex mb-3 justify-content-between align-items-center ">
                    <div class="d-flex align-items-center mb-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                             fill="#75FB4C">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"/>
                        </svg>
                        <span class="mx-3">ASMR</span>

                    </div>
                    <h6>$123</h6>

                </div>
                <div class="w-100 d-flex mb-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                             fill="#FF3B30">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"/>
                        </svg>
                        <span class="mx-3">GHRM</span>
                    </div>
                    <h6>$123</h6>
                </div>
                <div class="w-100 d-flex mb-3 justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                             fill="#FFB926">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z"/>
                        </svg>
                        <span class="mx-3">GEA</span>
                    </div>
                    <h6>$123</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function createRadialBarChart(elementId, seriesValue, gradientColor, label) {
            var options = {
                series: [seriesValue],
                chart: {
                    type: 'radialBar',
                    toolbar: {show: false},
                    height: "100%", // Make it responsive
                    width: "100%"   // Allow width to adjust
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -115,
                        endAngle: 115,
                        hollow: {
                            margin: 0,
                            size: '60%',
                            background: 'transparent'
                        },
                        track: {
                            background: 'rgba(0, 0, 0, 0.1)',
                            strokeWidth: '80%'
                        },
                        dataLabels: {
                            show: true,
                            value: {
                                offsetY: 10,
                                color: '#111',
                                fontSize: '24px',
                                show: false
                            }
                        }
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        type: 'horizontal',
                        shadeIntensity: 0.5,
                        gradientToColors: [gradientColor],
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100]
                    }
                },
                colors: [gradientColor],
                stroke: {lineCap: 'round'},
                labels: [label],
                responsive: [
                    {

                        breakpoint: 1700,
                        options: {
                            chart: {height: 130},
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {fontSize: '10px'}
                                    }
                                }
                            }
                        }
                    },
                    {

                        breakpoint: 1200,
                        options: {
                            chart: {height: 150}, // Smaller height for tablets
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {fontSize: '10px'}
                                    }
                                }
                            }
                        }
                    },
                    {

                        breakpoint: 1024,
                        options: {
                            chart: {height: 150}, // Smaller height for tablets
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {fontSize: '14px'}
                                    }
                                }
                            }
                        }
                    },
                    {

                        breakpoint: 768,
                        options: {
                            chart: {height: 120}, // Smaller height for tablets
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {fontSize: '18px'}
                                    }
                                }
                            }
                        }
                    },
                    {
                        breakpoint: 480,
                        options: {
                            chart: {height: 100}, // Even smaller for phones
                            plotOptions: {
                                radialBar: {
                                    dataLabels: {
                                        value: {fontSize: '14px'}
                                    }
                                }
                            }
                        }
                    }
                ]
            };

            var chart = new ApexCharts(document.querySelector(elementId), options);
            chart.render();
        }

        // Create charts
        createRadialBarChart("#chart-circle-1", 65, "#47ff33", "65%");
        createRadialBarChart("#chart-circle-2", 20, "#ff0808", "20%");
        createRadialBarChart("#chart-circle-3", 50, "#1f35bd", "50%");
        createRadialBarChart("#chart-circle-4", 90, "#47ff33", "90%");


        function createCircleChart(id, series = [], labels = []) {
            var options = {
                series: series, // Dynamic series values
                chart: {
                    height: 200,
                    width: 300,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: 0,
                        endAngle: 270,
                        track: {
                            background: 'rgba(0, 0, 0, 0.1)',
                            strokeWidth: '30%'
                        },
                        hollow: {
                            margin: 5,
                            size: '60%',
                            background: 'transparent',
                            image: undefined,
                        },
                        dataLabels: {
                            name: {
                                show: false,
                            },
                            value: {
                                show: false,
                            }
                        },
                        barLabels: {
                            enabled: true,
                            useSeriesColors: true,
                            offsetX: -8,
                            fontSize: '16px',
                            formatter: function (seriesName, opts) {
                                return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex];
                            },
                        },
                    }
                },
                colors: ['#6FF25A', '#FFB926', '#FF3B30'],
                labels: labels,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: false,
                        }
                    }
                }]
            };

            var circleChart = new ApexCharts(document.querySelector(`#${id}`), options);
            circleChart.render();
        }


        // Call the function for both charts
        createCircleChart('circle-chart-one', [70, 70, 70], ['completed', 'in-progress', 'Delayed']);
        createCircleChart('circle-chart-two', [20, 70, 80], ['completed', 'in-progress', 'Delayed']);
    </script>
@endsection
