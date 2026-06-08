<!--start sidebar-->
<style>
/* --- كود لتحديث شكل شريط التمرير --- */

/* إعداد الحاوية الرئيسية للقائمة لتكون قابلة للتمرير */
.sidebar-nav {
    overflow-y: auto !important;
    overflow-x: hidden !important;
    height: calc(100vh - 130px); /* يمكنك تعديل هذا الرقم ليناسب تصميمك */
}

/* إخفاء شريط التمرير القديم بالكامل في متصفحات WebKit (Chrome, Safari, Edge) */
.sidebar-nav::-webkit-scrollbar {
    width: 8px; /* نعطي عرضًا بسيطًا للمقبض ليظهر لاحقًا */
}

/* إخفاء الخلفية الرمادية (المسار) */
.sidebar-nav::-webkit-scrollbar-track {
    background: transparent;
}

/* تصميم المقبض (الجزء الذي يتحرك) وجعله يظهر فقط عند الحاجة */
.sidebar-nav::-webkit-scrollbar-thumb {
    background-color: #2c3e50; /* لون داكن وأنيق للمقبض */
    border-radius: 10px;
}

/* إخفاء الأسهم المزعجة في الأعلى والأسفل */
.sidebar-nav::-webkit-scrollbar-button {
    display: none;
}


/* دعم محسن لمتصفح Firefox (بدون أسهم أيضًا) */
.sidebar-nav {
  scrollbar-width: thin;
  scrollbar-color:#6FF25A transparent; /* لون المقبض ثم لون المسار شفاف */
}
</style>
<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('images/logo.png') }}" class="logo-img un-toggled logo-no-tablet"><br />
            <img src="{{ asset('images/icon.png') }}" class="logo-img show-when-toggled logo-tablet"><br />

        </div>

        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>

    </div>
    <div class="sidebar-nav" >

        <!--navigation-->
        <ul class="metismenu" id="sidenav">


            <ul class="nav nav-tabs nav-success d-flex justify-content-between align-items-center" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#successcontact" role="tab" aria-selected="false"
                        tabindex="-1">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bi bi-gear me-1 fs-6"></i>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#successprofile" role="tab" aria-selected="false"
                        tabindex="-1">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bi bi-filter-square me-1 fs-6"></i>
                            </div>
                        </div>
                    </a>
                </li>


                <li class="nav-item mm-active" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#successhome" role="tab"
                        aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bi bi-house-door me-1  fs-6"></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content py-3">
                <div class="tab-pane fade show active" id="successhome" role="tabpanel">
                    <x-menu.single-link :route="route('admin.home')" icon="home" :label="trans('global.dashboard')" />
                    @can('hr_access')
                    <x-menu.single-link :route="route('admin.hr-index')" icon="groups" :label="trans('global.hr-home')" />
                    @endcan
                    @can('tracking_access')
                    <x-menu.single-link
                        :route="route('admin.tracking.index')"
                        icon="directions_car"
                        :label="trans('cruds.tracking.title_singular')"
                        :active="request()->routeIs('admin.tracking.*')" />
                @endcan
                @canany(['user_access', 'target_access', 'shift_access', 'attendance_schedule_access', 'attendance_access', 'Requests_access', 'Request_Type_access','task_management_access', 'task_status_access', 'task_tag_access', 'task_access', 'tasks_calendar_access'])


                       <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="material-icons-outlined">manage_accounts</i>
                            </div>
                            <div class="menu-title">{{ trans('cruds.hr.title') }}</div>
                        </a>
                        <ul>
                            <x-menu.single-link
                            :label="trans('cruds.employeeManagement.title')"
                            icon="manage_accounts"
                            :route="route('admin.users.index')"
                            :active="request()->routeIs([
                                'admin.users.*',
                                'admin.targets.*',
                                'admin.shifts.*',
                                'admin.attendances.*',
                                'admin.attendance.schedule.*',
                                'admin.request-types.*',
                                'admin.requests.*'
                            ])" />


                            @canany(['task_management_access', 'task_status_access', 'task_tag_access', 'task_access', 'tasks_calendar_access'])
                             <x-menu.single-link
                                 :label="trans('cruds.taskManagement.title')"
                                 icon="task_alt"
                                 :route="route('admin.tasks.index')"
                                 :active="request()->routeIs('admin.task-statuses.*', 'admin.task-tags.*', 'admin.tasks.*', 'admin.tasks-calendars.*')" />
                         @endcanany


                        </ul>
                    </li>
                    @endcanany
                @canany(['driver_access', 'order_access'])
                 <x-menu.single-link
                  :label="trans('cruds.driver.title_singular')"
                   icon="directions_bike"
        :route="route('admin.drivers.index')"
        :active="request()->routeIs('admin.drivers.*', 'admin.orders.*', 'admin.daily_income.*')" />
@endcanany
                @can('vehicle_access')
    <x-menu.single-link
        :route="route('admin.vehicles.index')"
        icon="directions_car"
        :label="trans('cruds.vehicle.title_singular')"
        :active="request()->routeIs('admin.vehicles.*')" />
@endcan

@can('maintenance_access')
<x-menu.single-link
    :label="trans('cruds.maintenance.title')"
    icon="construction"
    :route="route('admin.maintenances.index', ['tab' => 'mechanic'])"
    :active="request()->routeIs('admin.maintenances.*')" />
@endcan



                    {{-- Financial --}}
                    @canany(['bank_account_access', 'treasury_access', 'app_expense_access', 'app_expense_source_access', 'revenue_source_access'])
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="material-icons-outlined">account_balance</i>
                            </div>
                            <div class="menu-title">{{ __('translation.financial_transactions') }}</div>
                        </a>
                        <ul>
                            @can('bank_account_access')
                                <x-menu.single-link :route="route('admin.bank-accounts.index')" icon="account_balance_wallet" :label="__('cruds.bankAccount.title_singular')" />
                            @endcan
                            @can('treasury_access')
                                <x-menu.single-link :route="route('admin.treasuries.index')" icon="savings" :label="__('cruds.treasury.title_singular')" />
                            @endcan
                            @canany(['app_expense_access', 'app_expense_source_access'])
                                <x-menu.single-link
                                    :label="trans('cruds.appExpense.title')"
                                    icon="receipt_long"
                                    :route="route('admin.app-expenses.index', ['type' => 'operational'])"
                                    :active="request()->routeIs('admin.app-expenses.*', 'admin.app-expense-sources.*')" />
                            @endcanany
                            @can('revenue_source_access')
                                <x-menu.single-link
                                    :label="trans('cruds.revenue.title')"
                                    icon="trending_up"
                                    :route="route('admin.app-revenues.index', ['type' => 'contract'])"
                                    :active="request()->routeIs('admin.app-revenues.*', 'admin.revenue-sources.*')" />
                            @endcan
                        </ul>
                    </li>
                @endcanany

                    {{-- Transactions --}}












                    @canany(['client_access', 'contact_company_access', 'restaurant_access'])
                    <x-menu.single-link
                        :label="trans('cruds.subscriptions.title_singular')"
                        :route="route('admin.clients.index')"
                        icon="person"
                        :active="request()->routeIs('admin.clients.*', 'admin.contact-companies.*', 'admin.restaurants.*')" />


                    @endcanany
                 <!--
                    @can('department_access')
                    <x-menu.single-link :label="trans('cruds.department.title')" :route="route('admin.departments.index')" icon="arrow_right" />
                    @endcan-->


                    @canany(['security_and_control_user_edit', 'security_and_control_role_create'])
                    <x-menu.single-link
                        :label="trans('cruds.security_and_control.title_singular')"
                        :route="route('admin.user-setup.setup')"
                        icon="admin_panel_settings"
                        :active="request()->routeIs('admin.user-setup.*', 'admin.role-setup.*')" />
                @endcanany



                    @can('user_alert_access')
                        <li>
                            <a href="{{ route('admin.user-alerts.index') }}">
                                <div class="parent-icon"><i class="material-icons-outlined">warning</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.userAlert.title') }}</div>
                            </a>
                        </li>
                    @endcan







<!--
      @can('asset_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">web_asset</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.assetManagement.title') }}</div>
                            </a>
                            <ul>
                                @can('asset_category_access')
                                    <li><a href="{{ route('admin.asset-categories.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.assetCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('asset_location_access')
                                    <li><a href="{{ route('admin.asset-locations.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.assetLocation.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('asset_status_access')
                                    <li><a href="{{ route('admin.asset-statuses.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.assetStatus.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('assets_history_access')
                                    <li><a href="{{ route('admin.assets-histories.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.assetsHistory.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('maintenance_access')
                                    <li><a href="{{ route('admin.maintenances.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.maintenance.title') }}
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan


    @can('time_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">schedule</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.timeManagement.title') }}</div>
                            </a>
                            <ul>
                                @can('time_work_type_access')
                                    <li><a href="{{ route('admin.time-work-types.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.timeWorkType.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('time_project_access')
                                    <li><a href="{{ route('admin.time-projects.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.timeProject.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('time_entry_access')
                                    <li><a href="{{ route('admin.time-entries.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.timeEntry.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('time_report_access')
                                    <li><a href="{{ route('admin.time-reports.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.timeReport.title') }}
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan
                 -->

                </div>

                <div class="tab-pane fade" id="successprofile" role="tabpanel">
                    <h6 class="text-center">Reports</h6>
                </div>

                <div class="tab-pane fade" id="successcontact" role="tabpanel">
                    @can('user_management_access')
    <x-menu.single-link
        :label="trans('cruds.userManagement.title')"
        icon="group"
        :route="route('admin.permissions.index')"
        :active="request()->routeIs('admin.permissions.*', 'admin.roles.*', 'admin.audit-logs.*')" />
@endcan

                </div>
            </div>


        </ul>
        <!--end navigation-->
    </div>
    <div class="sidebar-bottom gap-4">
        {{--            <div class="dark-mode"> --}}
        {{--                <a href="javascript:;" class="footer-icon dark-mode-icon"> --}}
        {{--                    <i class="material-icons-outlined">dark_mode</i> --}}
        {{--                </a> --}}
        {{--            </div> --}}
        {{--            <div class="dropdown dropup-center dropup dropdown-laungauge"> --}}
        {{--                <a class="dropdown-toggle dropdown-toggle-nocaret footer-icon" href="{{ url("avascript:;") }}" data-bs-toggle="dropdown"> --}}

        {{--                    <i class="material-icons-outlined">translate</i> --}}
        {{--                </a> --}}
        {{--                <ul class="dropdown-menu dropdown-menu-end"> --}}
        {{--                    @foreach (config('panel.available_languages') as $langLocale => $langName) --}}
        {{--                        <li><a class="dropdown-item d-flex align-items-center py-2" href="{{ url()->current() }}?change_language={{ $langLocale }}"> --}}
        {{--                                <span class="ms-2">{{ strtoupper($langLocale) }} ({{ $langName }})</span> --}}
        {{--                            </a> --}}
        {{--                        </li> --}}
        {{--                    @endforeach --}}


        {{--                </ul> --}}
        {{--            </div> --}}
        {{--        <div class="dropdown dropup-center dropup dropdown-help"> --}}
        {{--            <a class="footer-icon  dropdown-toggle dropdown-toggle-nocaret option" href="javascript:;" --}}
        {{--               data-bs-toggle="dropdown" aria-expanded="false"> --}}
        {{--          <span class="material-icons-outlined"> --}}
        {{--            info --}}
        {{--          </span> --}}
        {{--            </a> --}}
        {{--            <div class="dropdown-menu dropdown-option dropdown-menu-end shadow"> --}}
        {{--                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i --}}
        {{--                            class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div> --}}
        {{--                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i --}}
        {{--                            class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div> --}}
        {{--                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i --}}
        {{--                            class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div> --}}
        {{--                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i --}}
        {{--                            class="material-icons-outlined fs-6">grade</i>What's new ?</a></div> --}}
        {{--                <div> --}}
        {{--                    <hr class="dropdown-divider"> --}}
        {{--                </div> --}}
        {{--                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i --}}
        {{--                            class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div> --}}
        {{--            </div> --}}
        {{--        </div> --}}

    </div>
</aside>
<!--end sidebar-->
