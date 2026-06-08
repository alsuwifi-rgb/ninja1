<div class="col">
    <div class="row justify-content-end">

        <div class="col-auto">
            <div class="btn-group position-static">
                <button type="button" class="btn btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ request('company_name') ?? 'All' }}
                </button>
                <ul class="dropdown-menu" style="">
                    <li><a class="dropdown-item" href="{{ route($route) }}">All</a>
                    </li>
                    @foreach ($companies as $company)
                        <li><a class="dropdown-item"
                                href="{{ route($route, array_merge(request()->query(), ['company_name' => $company->company_name, 'company' => $company->id])) }}">{{ $company->company_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-auto">
            <form action="" method="get">
                <div class="position-relative">
                    <x-query-include-except except="user" />
                    <input class="form-control px-5" name="user" value="{{ request('user') }}" type="search"
                        placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </form>
        </div>
        <div class="col-auto">
            <div class="btn-group position-static">


            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-filter dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span>{{ __('global.export') }}</span>
                    <i class=" bx bx-download "></i>
                </button>
                <ul class="dropdown-menu" style="">

                    <li><a class="dropdown-item"
                            href="{{ route($route, array_merge(request()->query(), ['excel' => 1])) }}">
                            <span>{{ __('global.datatables.excel') }}</span>
                            <i class="bx bx-file-blank regula"></i>
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route($route, array_merge(request()->query(), ['pdf' => 1])) }}">
                            <span>{{ __('global.datatables.pdf') }}</span>
                            <i class="bx bxs-file-pdf regula"></i>
                        </a>
                    </li>
                    <li><a class="dropdown-item"
                            href="{{ route($route, array_merge(request()->query(), ['print' => 1])) }}">
                            <span>{{ __('global.datatables.print') }}</span>
                            <i class="bx bx-printer regula"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{ $slot }}
    </div>

</div>
