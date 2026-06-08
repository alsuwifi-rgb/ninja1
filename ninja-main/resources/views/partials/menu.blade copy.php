<!--start sidebar-->
<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('images/logo.png') }}" class="logo-img un-toggled"><br />
            <img src="{{ asset('images/icon.png') }}" class="logo-img show-when-toggled"><br />

        </div>

        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>

    </div>
    <div class="sidebar-nav" data-simplebar="true">

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
                    <x-menu.single-link :route="route('admin.hr-index')" icon="groups" :label="trans('global.hr-home')" />
                    @can('tracking_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">directions_car</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.tracking.title_singular') }}</div>
                            </a>
                            <ul>

                                @can('tracking_access')
                                    <li><a href="{{ route('admin.tracking.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>
                                            {{ trans('cruds.tracking.title_singular') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('hr_access')
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="material-icons-outlined">manage_accounts</i>
                            </div>
                            <div class="menu-title">{{ trans('cruds.hr.title') }}</div>
                        </a>
                        <ul>

                            @can('user_access')
                                <li><a href="{{ route('admin.users.index') }}"><i
                                            class="material-icons-outlined">arrow_right</i>{{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('target_access')
                                <li><a href="{{ route('admin.targets.index') }}"><i
                                            class="material-icons-outlined">arrow_right</i>{{ trans('cruds.target.title') }}
                                    </a>
                                </li>
                            @endcan

                            <li><a href="{{ route('admin.shifts.index') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('cruds.shift.title') }}
                                </a>
                            </li>
                            <li><a href="{{ route('admin.attendances.index') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('cruds.attendance.title') }}
                                </a>
                            </li>
                            <li><a href="{{ route('admin.attendance.schedule.index') }}"><i
                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.attendanceSchedule.title') }}
                                </a>
                            </li>
                            <li><a href="{{ route('admin.request-types.index') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('cruds.request_type.title') }}
                                </a>
                            </li>
                            <li><a href="{{ route('admin.requests.create') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('cruds.request.title') }}
                                </a>
                            </li>
                            @can('task_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                             <div class="parent-icon"><i class="material-icons-outlined">arrow_right</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.taskManagement.title') }}</div>
                            </a>
                            <ul>
                                @can('task_status_access')
                                    <li><a href="{{ route('admin.task-statuses.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.taskStatus.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('task_tag_access')
                                    <li><a href="{{ route('admin.task-tags.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.taskTag.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('task_access')
                                    <li><a href="{{ route('admin.tasks.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.task.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('tasks_calendar_access')
                                    <li><a href="{{ route('admin.tasks-calendars.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.tasksCalendar.title') }}
                                        </a>
                                    </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan

                        </ul>
                    </li>
                @endcan
                <x-menu.multi-link :label="trans('cruds.driver.title_singular')" icon="directions_bike">
                    <x-menu.single-link :label="trans('global.all')" :route="route('admin.drivers.index')" icon="arrow_right" />
                    @can('order_access')
                        <x-menu.single-link :label="trans('cruds.order.title_singular')" :route="route('admin.orders.index')" icon="arrow_right" />
                    @endcan
                    <x-menu.single-link :label="trans('cruds.daily_income.title')" :route="route('admin.daily_income.index')" icon="arrow_right" />
                </x-menu.multi-link>
                @can('vehicle_access')
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">directions_car</i>
                        </div>
                        <div class="menu-title">{{ trans('cruds.vehicle.title_singular') }}</div>
                    </a>
                    <ul>
                        @can('vehicle_access')
                            <li><a href="{{ route('admin.vehicles.index') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('cruds.vehicle.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('vehicle_access')
                            <li><a href="{{ route('admin.vehicles.create') }}"><i
                                        class="material-icons-outlined">arrow_right</i>{{ trans('global.add') }}
                                    {{ trans('cruds.vehicle.title_singular') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('maintenance_access')
            <x-menu.multi-link :label="trans('cruds.maintenance.title')" icon="construction">
                <x-menu.single-link :label="trans('cruds.maintenance.title')" :route="route('admin.maintenances.index',['tab'=>'mechanic'])" icon="arrow_right" />
            </x-menu.multi-link>
        @endcan



                    {{-- Financial --}}
                    @can('user_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">account_balance</i>
                                </div>
                                <div class="menu-title">{{ __('translation.financial_transactions') }}</div>
                            </a>
                            <ul>

                                @can('restaurant_access')
                                    <li><a href="javascript:;" class="has-arrow">
                                            <div class="parent-icon"><i class="material-icons-outlined"></i>
                                            </div>
                                            <div class="menu-title">{{ __('translation.cash') }}</div>
                                        </a>
                                        <ul>
                                            @can('restaurant_access')
                                                <li><a href="{{ route('admin.cash.pocket.index') }}"><i
                                                            class="material-icons-outlined">arrow_right</i>{{ __('translation.pockets') }}
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('restaurant_access')
                                                <li><a href="{{ route('admin.cash.mouvement.index') }}"><i
                                                            class="material-icons-outlined">arrow_right</i>{{ __('translation.mouvements') }}
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan
                                @can('restaurant_access')
                                    <li><a href="{{ route('admin.finance.validation') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ __('translation.Status') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    {{-- Transactions --}}
                    @can('user_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">calculate</i>
                                </div>
                                <div class="menu-title">{{ __('translation.transactions') }}</div>
                            </a>
                            <ul>
                                @can('audit_log_access')
                                    <li><a href="{{ route('admin.transaction.agent.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ __('translation.agents') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('restaurant_access')
                                    <li><a href="{{ route('admin.transaction.depend.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ __('translation.settlement') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('bank_account_access')
                    <x-menu.single-link :route="route('admin.bank-accounts.index')" icon="account_balance" :label="__('cruds.bankAccount.title_singular')" />
                    @endcan
              @can('treasury_access')
              <x-menu.single-link :route="route('admin.treasuries.index')" icon="monetization_on" :label="__('cruds.treasury.title_singular')" />
                @endcan

                    {{-- Resources --}}
                    @can('user_management_access')
                        <x-menu.single-link :route="route('admin.settings.ressource.index')" icon="settings" :label="__('translation.resources')" />
                    @endcan









                    <x-menu.multi-link :label="trans('cruds.subscriptions.title_singular')" icon="person">
                        @can('client_access')
                            <x-menu.single-link :label="trans('cruds.clients.title_singular')" :route="route('admin.clients.index')" icon="arrow_right" />
                        @endcan
                        @can('contact_company_access')
                            <x-menu.single-link :label="trans('cruds.contactCompany.title_singular')" :route="route('admin.contact-companies.index')" icon="arrow_right" />
                        @endcan
                        @can('restaurant_access')
                        <x-menu.single-link :label="trans('cruds.restaurant.title')" :route="route('admin.restaurants.index')" icon="arrow_right" />
                        @endcan
                        @can('department_access')
                        <x-menu.single-link :label="trans('cruds.department.title')" :route="route('admin.departments.index')" icon="arrow_right" />
                        @endcan
                    </x-menu.multi-link>
                    <x-menu.multi-link :label="trans('cruds.appExpense.title')" icon="payments">
                        @can('app_expense_access')
                         <x-menu.single-link :label="trans('cruds.appExpense.operational_title')" :route="route('admin.app-expenses.index', ['type' => 'operational'])" icon="arrow_right" />
                         <x-menu.single-link :label="trans('cruds.appExpense.administrative_title')" :route="route('admin.app-expenses.index', ['type' => 'administrative'])" icon="arrow_right" />
                         <x-menu.single-link :label="trans('cruds.appExpense.lending_title')" :route="route('admin.app-expenses.index', ['type' => 'lending'])" icon="arrow_right" />
                        @endcan



                        {{-- الرابط الخاص بمصادر النفقات الذي أنشأناه --}}
                        @can('app_expense_source_access')
                            <x-menu.single-link :label="trans('cruds.appExpenseSource.title')" :route="route('admin.app-expense-sources.index')" icon="arrow_right" />
                        @endcan

                        {{-- هنا سنضيف روابط النفقات التشغيلية والإدارية لاحقاً --}}

                    </x-menu.multi-link>
                    <x-menu.multi-link :label="trans('cruds.revenue.title')" icon="attach_money">

                        {{-- الرابط الخاص بمصادر الإيرادات الذي أنشأناه --}}
                        @can('revenue_source_access')
                        <x-menu.single-link :label="trans('cruds.revenue.contract_title')" :route="route('admin.app-revenues.index', ['type' => 'contract'])" icon="arrow_right" />
                            <x-menu.single-link :label="trans('cruds.revenue.repayment_title')" :route="route('admin.app-revenues.index', ['type' => 'repayment'])" icon="arrow_right" />
                            <x-menu.single-link :label="trans('cruds.revenue.advance_title')" :route="route('admin.app-revenues.index', ['type' => 'advance'])" icon="arrow_right" />
                        @endcan

                        {{-- هنا سنضيف روابط إيرادات العقود والسلف لاحقاً --}}
                        @can('revenue_source_access')
                        <x-menu.single-link :label="trans('cruds.revenueSource.title')" :route="route('admin.revenue-sources.index')" icon="arrow_right" />
                    @endcan

                    </x-menu.multi-link>



                    @can('user_alert_access')
                        <li>
                            <a href="{{ route('admin.user-alerts.index') }}">
                                <div class="parent-icon"><i class="material-icons-outlined">warning</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.userAlert.title') }}</div>
                            </a>
                        </li>
                    @endcan

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



                    @can('expense_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">attach_money</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.expenseManagement.title') }}</div>
                            </a>
                            <ul>
                                @can('expense_category_access')
                                    <li><a href="{{ route('admin.expense-categories.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.expenseCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('income_category_access')
                                    <li><a href="{{ route('admin.income-categories.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.incomeCategory.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('expense_access')
                                    <li><a href="{{ route('admin.expenses.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.expense.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('income_access')
                                    <li><a href="{{ route('admin.incomes.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.income.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('expense_report_access')
                                    <li><a href="{{ route('admin.expense-reports.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.expenseReport.title') }}
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
                </div>

                <div class="tab-pane fade" id="successprofile" role="tabpanel">
                    <h6 class="text-center">Reports</h6>
                </div>

                <div class="tab-pane fade" id="successcontact" role="tabpanel">
                    @can('user_management_access')
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon"><i class="material-icons-outlined">group</i>
                                </div>
                                <div class="menu-title">{{ trans('cruds.userManagement.title') }}</div>
                            </a>
                            <ul>
                                @can('permission_access')
                                    <li><a href="{{ route('admin.permissions.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.permission.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('role_access')
                                    <li><a href="{{ route('admin.roles.index') }}"><i
                                                class="material-icons-outlined">arrow_right</i>{{ trans('cruds.role.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('audit_log_access')
                                <x-menu.single-link :route="route('admin.audit-logs.index')" icon="arrow_right" :label="__('cruds.auditLog.title')" />
                               @endcan

                            </ul>
                        </li>
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
