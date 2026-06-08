{{-- Form --}}
{{-- Name Fields --}}
{{-- display all validation errors in alert --}}

{{-- Form Start --}}

<style>
               .media-item-card {
                position: relative;
                overflow: hidden;
                border-radius: 0.75rem; /* زوايا أكثر دائرية */
                border: none;
                box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .media-item-card:hover {
                transform: translateY(-5px) scale(1.05); /* تأثير رفع وتكبير */
                box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.2), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            }
            .media-preview-container {
                position: relative;
                width: 100%;
                padding-top: 100%; /* للحفاظ على نسبة عرض إلى ارتفاع 1:1 (مربع) */
                background-color: #e9ecef;
            }
            .media-preview-container img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover; /* يضمن ملء الصورة للمربع دون تشويه */
            }
            .media-preview-container .material-icons-outlined {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 48px;
                color: #6c757d;
            }
</style>


{{-- tabs --}}
<div class="card">
    <div class="card-body">
        <div class="col">
            <hr>
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-dark" role="tablist">
                        <li class="nav-item employee-nav-item " role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal" role="tab"
                                aria-selected="true" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-plus-circle me-1 fs-6"></i>

                                    </div>
                                    <div class="tab-title">{{ __('global.personal_data') }}</div>
                                </div>
                            </a>
                        </li>


                        <li class="nav-item employee-nav-item " role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#vehicle_type" role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-plus-circle me-1 fs-6"></i>

                                    </div>
                                    <div class="tab-title">{{ __('global.vehicle_type') }}</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item employee-nav-item " role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#payroll" role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-plus-circle me-1 fs-6"></i>

                                    </div>
                                    <div class="tab-title">{{ __('global.payroll_setup') }}</div>
                                </div>
                            </a>
                        </li>

                        {{-- <li class="nav-item employee-nav-item " role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#company" role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-plus-circle me-1 fs-6"></i>

                                    </div>
                                    <div class="tab-title">{{ __('global.company') }}</div>
                                </div>
                            </a>
                        </li> --}}
                        <li class="nav-item employee-nav-item " role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#direct_manager" role="tab">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-plus-circle me-1 fs-6"></i>

                                    </div>
                                    <div class="tab-title">{{ __('cruds.user.fields.direct_manager') }}</div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade active show" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.name_fields') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <x-form.select :label="trans('global.title_')" name="title">
                                                <option value="Mr" {{ old('title', $user->title ?? "") == 'Mr' ?
                                                    'selected' : '' }}>{{
                                                    __('global.mr') }}</option>
                                                <option value="Mrs" {{ old('title', $user->title ?? "") == 'Mrs' ?
                                                    'selected' : '' }}>{{
                                                    __('global.mrs') }}</option>
                                            </x-form.select>
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.first_name_ar')" name="name_ar"
                                                :value="old('name_ar', $user->name_ar ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.second_name_ar')" name="second_name_ar"
                                                :value="old('second_name_ar', $user->second_name_ar ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.third_name_ar')" name="third_name_ar"
                                                :value="old('third_name_ar', $user->third_name_ar ?? '')" />
                                        </div>
                                        <div class="col-lg-2">
                                            <x-form.input :label="__('global.fourth_name_ar')" name="fourth_name_ar"
                                                :value="old('fourth_name_ar', $user->fourth_name_ar ?? '')" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.first_name')" name="name"
                                                :value="old('name', $user->name ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.second_name')" name="second_name"
                                                :value="old('second_name', $user->second_name ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.third_name')" name="third_name"
                                                :value="old('third_name', $user->third_name ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.fourth_name')" name="fourth_name"
                                                :value="old('fourth_name', $user->fourth_name ?? '')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @isset($user)

                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.login_password') }}
                                    </h6>
                                </div>
                                <div class="card-body row">
                                    <div class="col-lg-4">
                                        <x-form.input :label="__('global.login_password')" type="password"
                                            autocomplete="new-password" name="password" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-form.input :label="__('global.login_password_confirmation')"
                                            autocomplete="new-password" type="password" name="password_confirmation" />
                                    </div>
                                    <div class="col-lg-4 d-flex align-items-center">
                                        <p class="mt-4 mb-0 password-blur" id="passwordText">
                                            {{ $user->password_text }}
                                        </p>
                                        <button type="button" class="btn btn-dark p-0 ms-2 mt-3"
                                            onclick="togglePasswordVisibility()">
                                            <i class="bx bx-show"></i>
                                        </button>
                                    </div>

                                    {{-- <div class="col-lg-4">
                                        <x-form.select :label="__('cruds.role.title')" name="role">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ old('user_role', isset($user)? $user->
                                                roles()->first()?->id:'' ) == $role->id ? 'selected' :
                                                '' }}>{{ $role->title }}</option>
                                            @endforeach
                                        </x-form.select>
                                    </div> --}}

                                </div>
                            </div>
                            @endisset

                            <div class="row justify-content-end">

                                {{-- Personal Data --}}
                                <div class="card mt-3 col-lg-10">
                                    <div class="card-header bg-dark">
                                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.personal_data') }}
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <x-form.select :label="trans('cruds.user.fields.gender')" name="gender">
                                                    <option value="male" {{ old('gender', $user->gender ?? "") == 'male'
                                                        ? 'selected' : '' }}>{{
                                                        __('global.male') }}</option>
                                                    <option value="female" {{ old('gender', $user->gender ?? "") ==
                                                        'female' ? 'selected' : '' }}>{{
                                                        __('global.female') }}</option>
                                                </x-form.select>
                                            </div>
                                            <div class="col-lg-2">
                                                {{--
                                                <x-form.input :label="__('global.religion')" name="religion"
                                                    :value="old('religion', $user->religion ?? '')" /> --}}
                                                <x-form.select :label="trans('global.religion')" name="religion">
                                                    <option value="muslim" {{ old('religion', $user->religion ?? "") ==
                                                        'muslim'
                                                        ? 'selected' : '' }}>{{
                                                        __('global.muslim') }}</option>
                                                    <option value="christian" {{ old('religion', $user->religion ?? "")
                                                        ==
                                                        'christian' ? 'selected' : '' }}>{{
                                                        __('global.christian') }}</option>
                                                    <option value="other" {{ old('religion', $user->religion ?? "") ==
                                                        'other' ? 'selected' : '' }}>{{
                                                        __('global.other') }}</option>
                                                </x-form.select>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="mb-2" for="goverment">{{
                                                    trans('cruds.contactCompany.fields.goverment') }}</label>
                                                <select name="goverment" id="goverment" class="form-control">
                                                    @foreach ($countries as $code => $name)
                                                    <option value="{{ $code }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                {{--
                                                <x-form.input :label="__('global.marital_status')" name="marital_status"
                                                    :value="old('marital_status', $user->marital_status ?? '')" /> --}}

                                                <x-form.select :label="trans('global.marital_status')"
                                                    name="marital_status">
                                                    <option value="single" {{ old('marital_status', $user->
                                                        marital_status ?? "") ==
                                                        'single'
                                                        ? 'selected' : '' }}>{{
                                                        __('global.single') }}</option>
                                                    <option value="married" {{ old('marital_status', $user->
                                                        marital_status ?? "")
                                                        ==
                                                        'married' ? 'selected' : '' }}>{{
                                                        __('global.married') }}</option>
                                                    <option value="widowed" {{ old('marital_status', $user->
                                                        marital_status ?? "")
                                                        ==
                                                        'widowed' ? 'selected' : '' }}>{{
                                                        __('global.widowed') }}</option>

                                                    <option value="divorced" {{ old('marital_status', $user->
                                                        marital_status ?? "")
                                                        ==
                                                        'divorced' ? 'selected' : '' }}>{{
                                                        __('global.divorced') }}</option>


                                                </x-form.select>
                                            </div>
                                            <div class="col-lg-3">
                                                <x-form.input type="date" :label="__('global.birthday')" name="birthday"
                                                    :value="old('birthday', $user->birthday ?? '')" />
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    {{--
                                    <x-form.input type="file" class="custom-file-upload"
                                        :label="__('global.employee_image')" name="employee_image" /> --}}
                                    <x-form.employee-image :url="$user->profile_image??asset('images/user.png')" />
                                </div>
                            </div>

                            {{-- Passport --}}
                            <div class="card mt-3">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.passport') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.passport_name')" name="passport_name"
                                                :value="old('passport_name', $user->passport_name ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.passport_no')" name="passport_no"
                                                :value="old('passport_no', $user->passport_no ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input type="date" :label="__('global.passport_issue_date')"
                                                name="passport_issue_date"
                                                :value="old('passport_issue_date', $user->passport_issue_date ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input type="date" :label="__('global.passport_expiry_date')"
                                                name="passport_expiry_date"
                                                :value="old('passport_expiry_date', $user->passport_expiry_date ?? '')" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Identification --}}
                            <div class="card mt-3">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.identification') }}
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.id_type')" name="id_type"
                                                :value="old('id_type', $user->id_type ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.id_number')" name="id_number"
                                                :value="old('id_number', $user->id_number ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input type="date" :label="__('global.id_issue_date')"
                                                name="id_issue_date"
                                                :value="old('id_issue_date', $user->id_issue_date ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input type="date" :label="__('global.id_expiry_date')"
                                                name="id_expiry_date"
                                                :value="old('id_expiry_date', $user->id_expiry_date ?? '')" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Employee Department --}}
                            <div class="card mt-3">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.employee_department')
                                        }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.job_title')" name="job_title"
                                                :value="old('job_title', $user->job_title ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.department')" name="department"
                                                :value="old('department', $user->department ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input type="date" :label="__('global.job_start_date')"
                                                name="job_start_date"
                                                :value="old('job_start_date', $user->job_start_date ?? '')" />
                                        </div>
                                        <div class="col-lg-2">
                                            <x-form.input type="date" :label="__('global.job_end_date')"
                                                name="job_end_date"
                                                :value="old('job_end_date', $user->job_end_date ?? '')" />
                                        </div>
                                        <div class="col-lg-1 d-flex  align-items-center">
                                            <div class="form-check form-switch mt-3">
                                                <input class="form-check-input" type="checkbox" id="employee_status"
                                                    value="true" name="employee_status" {{ old('employee_status',
                                                    $user->employee_status ?? true) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="employee_status">{{
                                                    __('global.employee_status') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Contact Data --}}
                            <div class="card mt-3">
                                <div class="card-header bg-dark">
                                    <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.contact_data') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.mobile_1')" name="phone"
                                                :value="old('phone', $user->phone ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.mobile_2')" name="phone2"
                                                :value="old('phone2', $user->phone2 ?? '')" />
                                        </div>
                                        @isset($user)
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.email')" name="email"
                                                :value="old('email', $user->email ?? '')" />
                                        </div>
                                        @endisset
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.country')" name="country"
                                                :value="old('country', $user->country ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.governorate')" name="governorate"
                                                :value="old('governorate', $user->governorate ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.city')" name="city"
                                                :value="old('city', $user->city ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.village')" name="village"
                                                :value="old('village', $user->village ?? '')" />
                                        </div>
                                        <div class="col-lg-3">
                                            <x-form.input :label="__('global.street')" name="street"
                                                :value="old('street', $user->street ?? '')" />
                                        </div>
                                        <div class="col-lg-12">
                                            <x-form.input :label="__('global.address')" name="address"
                                                :value="old('address', $user->address ?? '')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dynamic-table table-responsive" data-table-id="table1">

                                <table border="1" class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>{{ __('global.license_type') }}</th>
                                            <th>{{ __('global.license_number') }}</th>
                                            <th>{{ __('global.license_expiry_date') }}</th>
                                            <th>{{ __('global.upload_file') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">

                                        <tr>
                                            <td>
                                                {{__('global.driving_license')}}
                                            </td>
                                            <td>
                                                <x-form.input type="text" name="driving_license_number"
                                                    value="{{ old('driving_license_number', $user->driving_license_number ?? '') }}" />
                                            </td>

                                            <td>
                                                <x-form.input type="date" name="driving_license_expiry_date"
                                                    value="{{ old('driving_license_expiry_date', $user->driving_license_expiry_date ?? '') }}" />
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items center">
                                                    <div class="">
                                                        <x-form.input type="file" class="mt-4"
                                                            label="{{ __('global.driving_license_file_front') }}"
                                                            name="driving_license_file" />
                                                    </div>
                                                    <div class="d-flex mt-4">
                                                        @if (isset($user) && $user->hasMedia('driving_licenses'))
                                                        <a href="{{ $user->getFirstMediaUrl('driving_licenses') }}"
                                                            target="_blank" class="">
                                                            <button type="button" class="btn btn-dark btn-sm m-2 "><i
                                                                    class="bx bx-show"></i></button>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>

                                                      <div class="d-flex justify-content-between align-items center">
                                                    <div class="">
                                                        <x-form.input type="file" class="mt-4"
                                                            label="{{ __('global.driving_license_file_back') }}"
                                                            name="driving_license_file_back" />
                                                    </div>
                                                    <div class="d-flex mt-4">
                                                        @if (isset($user) && $user->hasMedia('driving_licenses_back'))
                                                        <a href="{{ $user->getFirstMediaUrl('driving_licenses_back') }}"
                                                            target="_blank" class="">
                                                            <button type="button" class="btn btn-dark btn-sm m-2 "><i
                                                                    class="bx bx-show"></i></button>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>


                                    </tbody>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>{{ __('global.university') }}</th>
                                                        <th>{{ __('global.graduation_year') }}</th>
                                                        <th>{{ __('global.degree') }}</th>
                                                        <th>{{ __('global.major') }}</th>
                                                        <th>{{ __('global.certificate_upload') }}</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <x-form.input label="" name="university"
                                                                :value="old('university', $user->university ?? '')" />
                                                        </td>
                                                        <td>
                                                            <x-form.input type="date" label="" name="graduation_year"
                                                                :value="old('graduation_year', $user->graduation_year ?? '')" />
                                                        </td>
                                                        <td>
                                                            <x-form.input label="" name="degree"
                                                                :value="old('degree', $user->degree ?? '')" />
                                                        </td>
                                                        <td>
                                                            <x-form.input label="" name="major"
                                                                :value="old('major', $user->major ?? '')" />
                                                        </td>
                                                        <td>

                                                            <div class="d-flex justify-content-between align-items center">
                                                               <div class="">
                                                                 <x-form.input type="file" class="mt-4"
                                                                 label="{{ __('global.graduation_certificate_front') }}"
                                                                    name="graduation_certificate"  />
                                                               </div>
                                                                <div class="d-flex mt-4">
                                                                    @if (isset($user) && $user->hasMedia('graduation_certificates'))
                                                                    <a href="{{ $user->getFirstMediaUrl('graduation_certificates') }}"
                                                                        target="_blank" class="">
                                                                        <button type="button" class="btn btn-dark btn-sm m-2 "><i
                                                                                class="bx bx-show"></i></button>
                                                                    </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                              <div class="d-flex justify-content-between align-items center">
                                                               <div class="">
                                                                 <x-form.input type="file" class="mt-4"
                                                                 label="{{ __('global.graduation_certificate_back') }}"
                                                                    name="graduation_certificate_back"  />
                                                               </div>
                                                                <div class="d-flex mt-4">
                                                                    @if (isset($user) && $user->hasMedia('graduation_certificates_back'))
                                                                    <a href="{{ $user->getFirstMediaUrl('graduation_certificates_back') }}"
                                                                        target="_blank" class="">
                                                                        <button type="button" class="btn btn-dark btn-sm m-2 "><i
                                                                                class="bx bx-show"></i></button>
                                                                    </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>


                        </div>
                        <div class="tab-pane fade " id="license" role="tabpanel">

                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="vehicle_type" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>{{ __('global.vehicle_type') }}</th>
                                            <th>{{ __('global.license_number') }}</th>
                                            <th>{{ __('global.upload_file') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                {{-- (id) إضافة معرف --}}
                                                <x-form.select label="" name="vehicle_type" id="vehicle_type_select" class="mt-2">

                                                    <option value="Car" {{ old('vehicle_type', $user->vehicle_type ?? '') == 'Car' ? 'selected' : '' }}>
                                                        {{ __('global.car') }}
                                                    </option>
                                                    {{-- bike للتأكد من أن القيمة تطابق ما في قاعدة البيانات --}}
                                                    <option value="Bike" {{ old('vehicle_type', $user->vehicle_type ?? '') == 'Bike' ? 'selected' : '' }}>
                                                        {{ __('global.bicycle') }}
                                                    </option>
                                                </x-form.select>
                                            </td>
                                            <td>
                                                {{-- تحويل حقل الإدخال إلى قائمة منسدلة --}}
                                                <x-form.select label="" name="license_number" id="license_number_select" class="mt-2">

                                                    {{-- سيتم ملء الخيارات هنا بواسطة الجافاسكربت --}}
                                                </x-form.select>
                                            </td>
                                            <td>
                                                <div id="vehicle-media-container" class="mt-4 row">

                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payroll" role="tabpanel">
                            <table class="form-table">
                                {{-- الصف الأول: الحقول المشتركة --}}
                                <tr>
                                    <th>{{ __('global.basic_salary') }}</th>
                                    <td>
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="basic_salary"
                                            :value="old('basic_salary', $user->basic_salary ?? '')" />
                                    </td>
                                    <th>{{ __('global.accommodation_allowance') }}</th>
                                    <td>
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="accommodation_allowance"
                                            :value="old('accommodation_allowance', $user->accommodation_allowance ?? '')" />
                                    </td>
                                    <th>{{ __('global.meal_allowance') }}</th>
                                    <td>
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="meal_allowance"
                                            :value="old('meal_allowance', $user->meal_allowance ?? '')" />
                                    </td>
                                </tr>

                                {{-- الصف الثاني: نوع العقد وحقول الساعة --}}
                                <tr>
                                    <th>{{ __('global.contract_type') }}</th>
                                    <td>
                                        {{-- تمت إضافة id هنا لتسهيل الوصول إليه عبر JavaScript --}}
                                        <x-form.select label="" name="contract_type" id="contract_type_select" class="mt-2">
                                            <option value="hourly_price" {{ old('contract_type', $user->contract_type ?? '') == 'hourly_price' ? 'selected' : '' }}>
                                                {{ __('global.hourly_price') }}
                                            </option>
                                            <option value="order_count" {{ old('contract_type', $user->contract_type ?? '') == 'order_count' ? 'selected' : '' }}>
                                                {{ __('global.order_count') }}
                                            </option>
                                        </x-form.select>
                                    </td>

                                    {{-- الحقول الخاصة بـ hourly_price --}}
                                    <th class="hourly-fields">{{ __('global.core_working_hours') }}</th>
                                    <td class="hourly-fields">
                                        <x-form.input type="number" placeholder="8" step="0.01" label=""
                                            name="core_working_hours"
                                            :value="old('core_working_hours', $user->core_working_hours ?? '')" />
                                    </td>
                                    <th class="hourly-fields">{{ __('global.overtime') }}</th>
                                    <td class="hourly-fields">
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="overtime" :value="old('overtime', $user->overtime ?? '')" />
                                    </td>

                                    {{-- الحقول الخاصة بـ order_count --}}
                                    <th class="order-fields" style="display: none;">{{ __('global.core_orders_target') }}</th>
                                    <td class="order-fields" style="display: none;">
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="core_orders_target"
                                            :value="old('core_orders_target', $user->core_orders_target ?? '')" />
                                    </td>
                                    <th class="order-fields" style="display: none;"></th>
                                    <td class="order-fields" style="display: none;"></td>

                                </tr>

                                {{-- الصف الثالث: حقول الطلبات --}}
                                <tr class="order-fields" style="display: none;">
                                    <th>{{ __('global.order_price') }}</th>
                                    <td>
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="order_price" :value="old('order_price', $user->order_price ?? '')" />
                                    </td>
                                    <th>{{ __('global.order_price_after') }}</th>
                                    <td>
                                        <x-form.input type="number" placeholder="100" step="0.01" label=""
                                            name="order_price_after"
                                            :value="old('order_price_after', $user->order_price_after ?? '')" />
                                    </td>
                                    {{-- خلايا فارغة للحفاظ على التنسيق --}}
                                    <th></th>
                                    <td></td>
                                </tr>

                                {{-- الصف الرابع: الحقول المشتركة --}}
                                <tr>
                                    <th>
                                        {{ __('cruds.user.fields.vacation_balance') }}
                                    </th>
                                    <td>
                                        <x-form.input type="number" placeholder="20" step="0.01" label=""
                                            name="vacation_balance"
                                            :value="old('vacation_balance', $user->vacation_balance ?? '')" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="company" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4">
                                    <x-form.select name="company_id" label="{{ __('global.company') }}">
                                        @foreach ($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id', $user->company_id ??
                                            "") == $company->id ? 'selected' : '' }}>{{ $company->company_name }}
                                        </option>
                                        @endforeach

                                    </x-form.select>
                                </div>
                                <div class="col-lg-4">
                                    <x-form.input type="date" label="{{ __('global.company_expiry_contract') }}"
                                        name="company_expiry_contract"
                                        :value="old('company_expiry_contract', $user->company_expiry_contract ?? '')" />
                                </div>
                                <div class="col-lg-4">
                                    {{--
                                    <x-form.input type="file" label="{{ __('global.company_contract_upload') }}"
                                        name="company_contract" /> --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <x-form.input type=" file" name="company_contract" class="mt-4" />
                                        <div class="d-flex mt-4"">

                                                @if (isset($user) && $user->hasMedia('company_contract'))
                                                <a href=" {{ $user->getFirstMediaUrl('company_contract') }}"
                                            target="_blank" class="">
                                            <button type="button" class="btn btn-dark btn-sm m-2 "><i
                                                    class="bx bx-show"></i></button>
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="direct_manager" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4">
                                    <x-form.select name="direct_manager_id"
                                        :label="__('cruds.user.fields.direct_manager') "></x-form.select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
    function togglePasswordVisibility() {
    const passwordElement = document.getElementById('passwordText');
    passwordElement.classList.toggle('password-visible');
}
    $(document).ready(function () {
    function fetchUsersByCompany(companyId) {
  $.ajax({
            url: `/admin/companies/${companyId}/users`, // Adjust this route as needed
            method: 'GET',
            dataType: 'json',
            beforeSend: function () {
                $('#direct_manager_id').html('<option>Loading users...</option>');
            },
            success: function (response) {
                if (response && response.users && response.users.length > 0) {
                    let userOptions = '';
                    response.users.forEach(user => {
                        userOptions += `<option value="${user.id}">${user.name}</option>`;
                    });
                    $('#direct_manager_id').html(userOptions);
                } else {
                    $('#direct_manager_id').html('<option disabled>No users found for this company.</option>');
                }
            },
            error: function () {
                $('#direct_manager_id').html('<option>Error fetching users. Please try again.</option>');
            }
        });
    }      if (!companyId) return;



    $('#company_id').on('change', function () {
        const companyId = $(this).val();
        fetchUsersByCompany(companyId);
    });

    const initialCompanyId = $('#company_id').val();
    if (initialCompanyId) {
        fetchUsersByCompany(initialCompanyId);
    }
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
               // الحصول على العناصر من الصفحة
               const contractTypeSelect = document.getElementById('contract_type_select');
        const hourlyFields = document.querySelectorAll('.hourly-fields');
        const orderFields = document.querySelectorAll('.order-fields');

        // دالة لتبديل عرض الحقول بناءً على القيمة المحددة
        function toggleContractFields() {
            const selectedValue = contractTypeSelect.value;

            // أولاً، قم بإخفاء جميع الحقول المتعلقة بنوع العقد
            hourlyFields.forEach(el => el.style.display = 'none');
            orderFields.forEach(el => el.style.display = 'none');

            // ثانياً، قم بإظهار الحقول المناسبة بناءً على الاختيار
            if (selectedValue === 'hourly_price') {
                // إظهار حقول الساعة
                hourlyFields.forEach(el => el.style.display = ''); // يعيد العرض إلى الافتراضي (th/td)
            } else if (selectedValue === 'order_count') {
                // إظهار حقول الطلبات
                orderFields.forEach(el => {
                    // بالنسبة للصفوف الكاملة (tr)، نستخدم 'table-row'
                    if (el.tagName === 'TR') {
                        el.style.display = 'table-row';
                    } else {
                        el.style.display = ''; // يعيد العرض إلى الافتراضي (th/td)
                    }
                });
            }
            // إذا كانت القيمة فارغة (الخيار الافتراضي)، لن يتم عرض أي شيء لأن كل شيء تم إخفاؤه في البداية
        }

        // ربط الدالة بحدث التغيير في قائمة الاختيار
        contractTypeSelect.addEventListener('change', toggleContractFields);

        // استدعاء الدالة عند تحميل الصفحة لضبط الحالة الأولية الصحيحة
        toggleContractFields();



        // 1. جلب البيانات من الـ Controller
        const vehiclesByType = @json($vehiclesByType ?? []);

        // 2. تحديد العناصر في الصفحة
        const vehicleTypeSelect = document.getElementById('vehicle_type_select');
        const licenseNumberSelect = document.getElementById('license_number_select');
        const mediaContainer = document.getElementById('vehicle-media-container');

        // 3. جلب القيم القديمة في حال وجود خطأ أو في صفحة التعديل
        const oldLicenseNumber = "{{ old('license_number', optional($user ?? null)->license_number ?? '') }}";
        const oldVehicleType = "{{ old('vehicle_type', optional($user ?? null)->vehicle_type ?? '') }}" || vehicleTypeSelect.value;

        // 4. دالة لجلب وعرض ملفات المركبة
        function fetchAndDisplayMedia(vehicleNumber) {
            // مسح الحاوية وعرض مؤشر التحميل
            mediaContainer.innerHTML = `
                <div class="col-12 text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">{{ __('global.loading_files') }}</span>
                    </div>
                </div>`;

            // إذا لم يتم اختيار مركبة، قم بإفراغ الحاوية
            if (!vehicleNumber) {
                mediaContainer.innerHTML = '';
                return;
            }

            // 5. إرسال طلب AJAX لجلب الملفات
            fetch(`{{ url('/admin/vehicles/get-media-by-number') }}/${vehicleNumber}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(mediaItems => {
                    mediaContainer.innerHTML = '';

                    if (mediaItems.length === 0) {
                        mediaContainer.innerHTML = `<div class="col-12"><p class="text-muted">{{ __('global.no_files_found') }}</p></div>`;
                        return;
                    }

                    // 6. عرض الملفات التي تم جلبها بالتصميم الجديد
                    mediaItems.forEach(media => {
                        const colDiv = document.createElement('div');
                        colDiv.className = 'col-6 col-md-4 col-lg-3 mb-4'; // زيادة الهامش السفلي

                        const isImage = /\.(jpe?g|png|gif|bmp|svg|webp)$/i.test(media.url);
                        let filePreview = '';

                        if (isImage) {
                            filePreview = `
                                <div class="media-preview-container">
                                    <img src="${media.url}" alt="${media.name}">
                                </div>`;
                        } else {
                            filePreview = `
                                <div class="media-preview-container">
                                    <span class="material-icons-outlined">description</span>
                                </div>`;
                        }

                        colDiv.innerHTML = `
                            <a href="${media.url}" target="_blank" class="text-decoration-none">
                                <div class="media-item-card">
                                    ${filePreview}
                                </div>
                            </a>
                        `;
                        mediaContainer.appendChild(colDiv);
                    });
                })
                .catch(error => {
                    console.error("{{ __('global.error_fetching_media') }}:", error);
                    mediaContainer.innerHTML = `<div class="col-12"><p class="text-danger">{{ __('global.failed_to_load_files') }}</p></div>`;
                });
        }

        // 7. دالة لتحديث قائمة أرقام الرخص
        function updateLicenseNumbers(selectedType) {
            licenseNumberSelect.innerHTML = `<option value="">{{ __("global.pleaseSelect") }}</option>`;
            mediaContainer.innerHTML = '';

            if (selectedType && vehiclesByType[selectedType]) {
                const vehicles = vehiclesByType[selectedType];
                vehicles.forEach(function(vehicle) {
                    const option = document.createElement('option');
                    option.value = vehicle.number_vehicles;
                    option.textContent = vehicle.number_vehicles;
                    if (vehicle.number_vehicles === oldLicenseNumber) {
                        option.selected = true;
                    }
                    licenseNumberSelect.appendChild(option);
                });
            }

            if (licenseNumberSelect.value) {
                fetchAndDisplayMedia(licenseNumberSelect.value);
            }
        }

        // 8. تشغيل التحديث عند تحميل الصفحة
        if (oldVehicleType) {
            vehicleTypeSelect.value = oldVehicleType;
            updateLicenseNumbers(oldVehicleType);
        }

        // 9. مراقبة التغييرات
        vehicleTypeSelect.addEventListener('change', function() {
            updateLicenseNumbers(this.value);
        });

        licenseNumberSelect.addEventListener('change', function() {
            fetchAndDisplayMedia(this.value);
        });
    });
</script>

@endsection
