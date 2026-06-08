{{-- Form --}}
{{-- Name Fields --}}
{{-- display all validation errors in alert --}}

{{-- Form Start --}}

{{-- This hidden container will hold the IDs of media files marked for deletion --}}
<div id="removed-media-ids-container" style="display: none;"></div>

<style>
    /* أنماط مخصصة لتحسين التصميم */
    .media-item-card {
        position: relative;
        overflow: hidden;
        border-radius: 0.75rem; /* زوايا أكثر دائرية */
        border: none;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .media-item-card:hover {
        transform: translateY(-5px) scale(1.02); /* تأثير رفع وتكبير طفيف */
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.2), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }
    .media-preview-container {
        position: relative;
        width: 100%;
        padding-top: 100%; /* للحفاظ على نسبة عرض إلى ارتفاع 1:1 (مربع) */
        background-color: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
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
    .file-upload-area {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    .file-upload-area:hover {
        background-color: #f8f9fa !important;
    }
    .remove-media-btn {
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 50%;
    }
</style>


{{-- Tabs --}}
<div class="card">
    <div class="card-body">
        {{-- Tab Navigation --}}
        <ul class="nav nav-tabs nav-dark" role="tablist">
            <li class="nav-item employee-nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#personal" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-user-circle me-1 fs-6"></i></div>
                        <div class="tab-title">{{ __('global.personal_data') }}</div>
                    </div>
                </a>
            </li>
            <li class="nav-item employee-nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#vehicle_type" role="tab">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-car me-1 fs-6"></i></div>
                        <div class="tab-title">{{ __('global.vehicle_type') }}</div>
                    </div>
                </a>
            </li>
            <li class="nav-item employee-nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#payroll" role="tab">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-money me-1 fs-6"></i></div>
                        <div class="tab-title">{{ __('global.payroll_setup') }}</div>
                    </div>
                </a>
            </li>
            <li class="nav-item employee-nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#direct_manager" role="tab">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-user-check me-1 fs-6"></i></div>
                        <div class="tab-title">{{ __('cruds.user.fields.direct_manager') }}</div>
                    </div>
                </a>
            </li>
        </ul>

        {{-- Tab Content --}}
        <div class="tab-content py-3">
            {{-- Personal Data Tab --}}
            <div class="tab-pane fade active show" id="personal" role="tabpanel">
                {{-- Name Card --}}
                <div class="card">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.name_fields') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-1">
                                <x-form.select :label="trans('global.title_')" name="title">
                                    <option value="Mr" {{ old('title', $user->title ?? "") == 'Mr' ? 'selected' : '' }}>{{ __('global.mr') }}</option>
                                    <option value="Mrs" {{ old('title', $user->title ?? "") == 'Mrs' ? 'selected' : '' }}>{{ __('global.mrs') }}</option>
                                </x-form.select>
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.first_name_ar')" name="name_ar" :value="old('name_ar', $user->name_ar ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.second_name_ar')" name="second_name_ar" :value="old('second_name_ar', $user->second_name_ar ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.third_name_ar')" name="third_name_ar" :value="old('third_name_ar', $user->third_name_ar ?? '')" />
                            </div>
                            <div class="col-lg-2">
                                <x-form.input :label="__('global.fourth_name_ar')" name="fourth_name_ar" :value="old('fourth_name_ar', $user->fourth_name_ar ?? '')" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.first_name')" name="name" :value="old('name', $user->name ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.second_name')" name="second_name" :value="old('second_name', $user->second_name ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.third_name')" name="third_name" :value="old('third_name', $user->third_name ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.fourth_name')" name="fourth_name" :value="old('fourth_name', $user->fourth_name ?? '')" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Login Password Card --}}
                @isset($user)
                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.login_password') }}</h6>
                    </div>
                    <div class="card-body row">
                        <div class="col-lg-4">
                            <x-form.input :label="__('global.login_password')" type="password" autocomplete="new-password" name="password" />
                        </div>
                        <div class="col-lg-4">
                            <x-form.input :label="__('global.login_password_confirmation')" autocomplete="new-password" type="password" name="password_confirmation" />
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <p class="mt-4 mb-0 password-blur" id="passwordText">{{ $user->password_text }}</p>
                            <button type="button" class="btn btn-dark p-0 ms-2 mt-3" onclick="togglePasswordVisibility()">
                                <i class="bx bx-show"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endisset

                {{-- Personal Info & Image --}}
                <div class="row justify-content-end">
                    <div class="card mt-3 col-lg-10">
                        <div class="card-header bg-dark">
                            <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.personal_data') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <x-form.select :label="trans('cruds.user.fields.gender')" name="gender">
                                        <option value="male" {{ old('gender', $user->gender ?? "") == 'male' ? 'selected' : '' }}>{{ __('global.male') }}</option>
                                        <option value="female" {{ old('gender', $user->gender ?? "") == 'female' ? 'selected' : '' }}>{{ __('global.female') }}</option>
                                    </x-form.select>
                                </div>
                                <div class="col-lg-2">
                                    <x-form.select :label="trans('global.religion')" name="religion">
                                        <option value="muslim" {{ old('religion', $user->religion ?? "") == 'muslim' ? 'selected' : '' }}>{{ __('global.muslim') }}</option>
                                        <option value="christian" {{ old('religion', $user->religion ?? "") == 'christian' ? 'selected' : '' }}>{{ __('global.christian') }}</option>
                                        <option value="other" {{ old('religion', $user->religion ?? "") == 'other' ? 'selected' : '' }}>{{ __('global.other') }}</option>
                                    </x-form.select>
                                </div>
                                <div class="col-lg-2">
                                    <label class="mb-2" for="nationality">{{ trans('cruds.contactCompany.fields.goverment') }}</label>
                                    <select name="nationality" id="nationality" class="form-control">
                                        @foreach ($countries as $code => $name)
                                        <option value="{{ $code }}" {{isset($user) && $user->nationality ==$code ? 'selected' : ''}}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <x-form.select :label="trans('global.marital_status')" name="marital_status">
                                        <option value="single" {{ old('marital_status', $user->marital_status ?? "") == 'single' ? 'selected' : '' }}>{{ __('global.single') }}</option>
                                        <option value="married" {{ old('marital_status', $user->marital_status ?? "") == 'married' ? 'selected' : '' }}>{{ __('global.married') }}</option>
                                        <option value="widowed" {{ old('marital_status', $user->marital_status ?? "") == 'widowed' ? 'selected' : '' }}>{{ __('global.widowed') }}</option>
                                        <option value="divorced" {{ old('marital_status', $user->marital_status ?? "") == 'divorced' ? 'selected' : '' }}>{{ __('global.divorced') }}</option>
                                    </x-form.select>
                                </div>
                                <div class="col-lg-3">
                                    <x-form.input type="date" :label="__('global.birthday')" name="birthday" :value="old('birthday', $user->birthday ?? '')" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <x-form.employee-image :url="$user->profile_image??asset('images/user.png')" />
                    </div>
                </div>

                {{-- Other Cards --}}
                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.passport') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.passport_name')" name="passport_name" :value="old('passport_name', $user->passport_name ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.passport_no')" name="passport_no" :value="old('passport_no', $user->passport_no ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input type="date" :label="__('global.passport_issue_date')" name="passport_issue_date" :value="old('passport_issue_date', $user->passport_issue_date ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input type="date" :label="__('global.passport_expiry_date')" name="passport_expiry_date" :value="old('passport_expiry_date', $user->passport_expiry_date ?? '')" />
                            </div>
                        </div>
                        {{-- NEW: Passport Files Upload Section --}}
                        <hr>
                        <h6 class="mb-2 fw-bold">{{ __('global.existing_files') }}</h6>
                        <div class="row mb-3">
                            @if(isset($user) && $user->hasMedia('passports'))
                                @foreach($user->getMedia('passports') as $media)
                                    <div class="col-6 col-md-4 col-lg-3 mb-4 media-wrapper">
                                        <div class="media-item-card position-relative">
                                            <button type="button" class="btn-close remove-media-btn position-absolute top-0 end-0 m-1" aria-label="Close" data-media-id="{{ $media->id }}"></button>
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="text-decoration-none">
                                                <div class="media-preview-container">
                                                    @if(Str::contains($media->mime_type, 'image'))
                                                        <img src="{{ $media->getUrl() }}" alt="{{ $media->name }}">
                                                    @else
                                                        <span class="material-icons-outlined">description</span>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0 fw-bold">{{ __('global.upload_file') }}</label>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="add-passport-file-btn">
                                <i class="bx bx-plus"></i> {{ __('global.add') }}
                            </button>
                        </div>
                        <div class="row" id="passport-files-container"></div>
                        {{-- END: Passport Files Upload Section --}}
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.identification') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.id_type')" name="id_type" :value="old('id_type', $user->id_type ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.id_number')" name="id_number" :value="old('id_number', $user->id_number ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input type="date" :label="__('global.id_issue_date')" name="id_issue_date" :value="old('id_issue_date', $user->id_issue_date ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input type="date" :label="__('global.id_expiry_date')" name="id_expiry_date" :value="old('id_expiry_date', $user->id_expiry_date ?? '')" />
                            </div>
                        </div>
                        {{-- NEW: Identification Files Upload Section --}}
                        <hr>
                        <h6 class="mb-2 fw-bold">{{ __('global.existing_files') }}</h6>
                        <div class="row mb-3">
                            @if(isset($user) && $user->hasMedia('identifications'))
                                @foreach($user->getMedia('identifications') as $media)
                                    <div class="col-6 col-md-4 col-lg-3 mb-4 media-wrapper">
                                        <div class="media-item-card position-relative">
                                            <button type="button" class="btn-close remove-media-btn position-absolute top-0 end-0 m-1" aria-label="Close" data-media-id="{{ $media->id }}"></button>
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="text-decoration-none">
                                                <div class="media-preview-container">
                                                    @if(Str::contains($media->mime_type, 'image'))
                                                        <img src="{{ $media->getUrl() }}" alt="{{ $media->name }}">
                                                    @else
                                                        <span class="material-icons-outlined">description</span>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0 fw-bold">{{ __('global.upload_file') }}</label>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="add-identification-file-btn">
                                <i class="bx bx-plus"></i> {{ __('global.add') }}
                            </button>
                        </div>
                        <div class="row" id="identification-files-container"></div>
                        {{-- END: Identification Files Upload Section --}}
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.employee_department') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.job_title')" name="job_title" :value="old('job_title', $user->job_title ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.department')" name="department" :value="old('department', $user->department ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <label for="role_id" class="form-label">{{ trans('cruds.user.fields.roles') }}</label>
                                <select name="role_id" id="role_id" class="form-select" required>
                                    @foreach($roles as $role)
                                        {{-- التعديل هنا: تم تحديد الخاصية 'id' للبحث فيها --}}
                                        <option value="{{ $role->id }}" {{ (isset($user) && $user->roles->contains('id', $role->id)) ? 'selected' : '' }}>
                                            {{ $role->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <x-form.input type="date" :label="__('global.job_start_date')" name="job_start_date" :value="old('job_start_date', $user->job_start_date ?? '')" />
                            </div>
                            <div class="col-lg-2">
                                <x-form.input type="date" :label="__('global.job_end_date')" name="job_end_date" :value="old('job_end_date', $user->job_end_date ?? '')" />
                            </div>
                            <div class="col-lg-1 d-flex align-items-center">
                                <div class="form-check form-switch mt-3">
                                    <input class="form-check-input" type="checkbox" id="employee_status" value="true" name="employee_status" {{ old('employee_status', $user->employee_status ?? true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="employee_status">{{ __('global.employee_status') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.contact_data') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.mobile_1')" name="phone" :value="old('phone', $user->phone ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.mobile_2')" name="phone2" :value="old('phone2', $user->phone2 ?? '')" />
                            </div>
                            @isset($user)
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.email')" name="email" :value="old('email', $user->email ?? '')" />
                            </div>
                            @endisset
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.country')" name="country" :value="old('country', $user->country ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.governorate')" name="governorate" :value="old('governorate', $user->governorate ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.city')" name="city" :value="old('city', $user->city ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.village')" name="village" :value="old('village', $user->village ?? '')" />
                            </div>
                            <div class="col-lg-3">
                                <x-form.input :label="__('global.street')" name="street" :value="old('street', $user->street ?? '')" />
                            </div>
                            <div class="col-lg-12">
                                <x-form.input :label="__('global.address')" name="address" :value="old('address', $user->address ?? '')" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Driving License Card --}}
                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.driving_license') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <x-form.input :label="__('global.license_number')" type="text" name="driving_license_number" :value="old('driving_license_number', $user->driving_license_number ?? '')" />
                            </div>
                            <div class="col-md-6">
                                <x-form.input :label="__('global.license_expiry_date')" type="date" name="driving_license_expiry_date" :value="old('driving_license_expiry_date', $user->driving_license_expiry_date ?? '')" />
                            </div>
                        </div>
                        <hr>
                        <h6 class="mb-2 fw-bold">{{ __('global.existing_files') }}</h6>
                        <div class="row mb-3">
                            @if(isset($user) && $user->hasMedia('driving_licenses'))
                                @foreach($user->getMedia('driving_licenses') as $media)
                                    <div class="col-6 col-md-4 col-lg-3 mb-4 media-wrapper">
                                        <div class="media-item-card position-relative">
                                            <button type="button" class="btn-close remove-media-btn position-absolute top-0 end-0 m-1" aria-label="Close" data-media-id="{{ $media->id }}"></button>
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="text-decoration-none">
                                                <div class="media-preview-container">
                                                    @if(Str::contains($media->mime_type, 'image'))
                                                        <img src="{{ $media->getUrl() }}" alt="{{ $media->name }}">
                                                    @else
                                                        <span class="material-icons-outlined">description</span>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0 fw-bold">{{ __('global.upload_file') }}</label>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="add-driving-license-file-btn">
                                <i class="bx bx-plus"></i> {{ __('global.add') }}
                            </button>
                        </div>
                        <div class="row" id="driving-license-files-container"></div>
                    </div>
                </div>

                {{-- Graduation Certificate Card --}}
                <div class="card mt-3">
                    <div class="card-header bg-dark">
                        <h6 class="mb-0 text-uppercase text-white fs-6">{{ __('global.graduation_certificate') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3"><x-form.input :label="__('global.university')" name="university" :value="old('university', $user->university ?? '')" /></div>
                            <div class="col-md-3"><x-form.input type="date" :label="__('global.graduation_year')" name="graduation_year" :value="old('graduation_year', $user->graduation_year ?? '')" /></div>
                            <div class="col-md-3"><x-form.input :label="__('global.degree')" name="degree" :value="old('degree', $user->degree ?? '')" /></div>
                            <div class="col-md-3"><x-form.input :label="__('global.major')" name="major" :value="old('major', $user->major ?? '')" /></div>
                        </div>
                        <hr>
                        <h6 class="mb-2 fw-bold">{{ __('global.existing_files') }}</h6>
                        <div class="row mb-3">
                            @if(isset($user) && $user->hasMedia('graduation_certificates'))
                                @foreach($user->getMedia('graduation_certificates') as $media)
                                     <div class="col-6 col-md-4 col-lg-3 mb-4 media-wrapper">
                                        <div class="media-item-card position-relative">
                                            <button type="button" class="btn-close remove-media-btn position-absolute top-0 end-0 m-1" aria-label="Close" data-media-id="{{ $media->id }}"></button>
                                            <a href="{{ $media->getUrl() }}" target="_blank" class="text-decoration-none">
                                                <div class="media-preview-container">
                                                    @if(Str::contains($media->mime_type, 'image'))
                                                        <img src="{{ $media->getUrl() }}" alt="{{ $media->name }}">
                                                    @else
                                                        <span class="material-icons-outlined">description</span>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0 fw-bold">{{ __('global.upload_file') }}</label>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="add-graduation-certificate-file-btn">
                                <i class="bx bx-plus"></i> {{ __('global.add') }}
                            </button>
                        </div>
                        <div class="row" id="graduation-certificate-files-container"></div>
                    </div>
                </div>
            </div>

            {{-- Vehicle Type Tab --}}
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
                                    <x-form.select label="" name="vehicle_type" id="vehicle_type_select" class="mt-2">
                                        <option value="Car" {{ old('vehicle_type', $user->vehicle_type ?? '') == 'Car' ? 'selected' : '' }}>{{ __('global.car') }}</option>
                                        <option value="Bike" {{ old('vehicle_type', $user->vehicle_type ?? '') == 'Bike' ? 'selected' : '' }}>{{ __('global.bicycle') }}</option>
                                    </x-form.select>
                                </td>
                                <td>
                                    <x-form.select label="" name="license_number" id="license_number_select" class="mt-2">
                                        {{-- Options will be populated by JavaScript --}}
                                    </x-form.select>
                                </td>
                                <td>
                                    <div id="vehicle-media-container" class="mt-4 row">
                                        {{-- Media items will be populated by JavaScript --}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Payroll Tab --}}
            <div class="tab-pane fade" id="payroll" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <x-form.input type="number" :label="__('global.basic_salary')" placeholder="100" step="0.01" name="basic_salary" :value="old('basic_salary', $user->basic_salary ?? '')" />
                    </div>
                    <div class="col-md-4">
                        <x-form.input type="number" :label="__('global.accommodation_allowance')" placeholder="100" step="0.01" name="accommodation_allowance" :value="old('accommodation_allowance', $user->accommodation_allowance ?? '')" />
                    </div>
                    <div class="col-md-4">
                        <x-form.input type="number" :label="__('global.meal_allowance')" placeholder="100" step="0.01" name="meal_allowance" :value="old('meal_allowance', $user->meal_allowance ?? '')" />
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col-md-4">
                        <x-form.select :label="__('global.contract_type')" name="contract_type" id="contract_type_select">
                            <option value="hourly_price" {{ old('contract_type', $user->contract_type ?? '') == 'hourly_price' ? 'selected' : '' }}>{{ __('global.hourly_price') }}</option>
                            <option value="order_count" {{ old('contract_type', $user->contract_type ?? '') == 'order_count' ? 'selected' : '' }}>{{ __('global.order_count') }}</option>
                        </x-form.select>
                    </div>
                </div>

                {{-- Conditional Fields --}}
                <div class="row mt-3">
                    {{-- Fields for hourly_price --}}
                    <div class="col-md-4 hourly-fields">
                        <x-form.input type="number" :label="__('global.core_working_hours')" placeholder="8" step="0.01" name="core_working_hours" :value="old('core_working_hours', $user->core_working_hours ?? '')" />
                    </div>
                    <div class="col-md-4 hourly-fields">
                        <x-form.input type="number" :label="__('global.overtime')" placeholder="100" step="0.01" name="overtime" :value="old('overtime', $user->overtime ?? '')" />
                    </div>

                    {{-- Fields for order_count --}}
                    <div class="col-md-4 order-fields">
                        <x-form.input type="number" :label="__('global.core_orders_target')" placeholder="100" step="0.01" name="core_orders_target" :value="old('core_orders_target', $user->core_orders_target ?? '')" />
                    </div>
                    <div class="col-md-4 order-fields">
                        <x-form.input type="number" :label="__('global.order_price')" placeholder="100" step="0.01" name="order_price" :value="old('order_price', $user->order_price ?? '')" />
                    </div>
                    <div class="col-md-4 order-fields">
                        <x-form.input type="number" :label="__('global.order_price_after')" placeholder="100" step="0.01" name="order_price_after" :value="old('order_price_after', $user->order_price_after ?? '')" />
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                     <div class="col-md-4">
                        <x-form.input type="number" :label="__('cruds.user.fields.vacation_balance')" placeholder="20" step="0.01" name="vacation_balance" :value="old('vacation_balance', $user->vacation_balance ?? '')" />
                    </div>
                </div>
            </div>

            {{-- Direct Manager Tab --}}
            <div class="tab-pane fade" id="direct_manager" role="tabpanel">
                <div class="row">
                    <div class="col-lg-4">
                        <x-form.select name="direct_manager_id" :label="__('cruds.user.fields.direct_manager') "></x-form.select>
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

    $(document).ready(function() {
        function fetchAllUsers() {
            // استخدام اسم المسار (route name) لتوليد الرابط، وهي الطريقة الأفضل
            const url = "{{ route('admin.users.all') }}";

            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json',
                beforeSend: function() {
                    // استخدام دالة الترجمة
                    $('#direct_manager_id').html('<option>{{ __("cruds.user.loading_users") }}</option>');
                },
                success: function(response) {
                    let userOptions = '<option value="">' + "{{ __('global.pleaseSelect') }}" + '</option>';
                    if (response && response.users && response.users.length > 0) {
                        response.users.forEach(user => {
                            if(user.name) {
                                userOptions += `<option value="${user.id}">${user.name}</option>`;
                            }
                        });
                    } else {
                        // استخدام دالة الترجمة
                        userOptions = '<option disabled>{{ __("cruds.user.no_users_found") }}</option>';
                    }
                    $('#direct_manager_id').html(userOptions);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error fetching users: ", textStatus, errorThrown);
                    // استخدام دالة الترجمة
                    $('#direct_manager_id').html('<option>{{ __("cruds.user.error_fetching_users") }}</option>');
                }
            });
        }

        // استدعاء الدالة لجلب جميع المستخدمين عند تحميل الصفحة مباشرة
        fetchAllUsers();
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /**
     * Initializes a multi-file uploader for a given section.
     * It now handles existing file removal and correctly counts all files.
     */
    function initializeMultiUploader(containerId, buttonId, inputName, maxFiles, uploadText) {
        const filesContainer = document.getElementById(containerId);
        const addFileBtn = document.getElementById(buttonId);
        if (!filesContainer || !addFileBtn) return;

        const uploaderCardBody = filesContainer.closest('.card-body');
        if (!uploaderCardBody) return;

        const getFileCount = () => {
            return uploaderCardBody.querySelectorAll('.media-wrapper').length;
        };

        uploaderCardBody.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.remove-media-btn');
            if (!removeBtn) return;

            const mediaWrapper = removeBtn.closest('.media-wrapper');
            const mediaId = removeBtn.dataset.mediaId;

            if (mediaId) {
                const removedMediaContainer = document.getElementById('removed-media-ids-container');
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'media_to_delete[]';
                hiddenInput.value = mediaId;
                if (removedMediaContainer) {
                    removedMediaContainer.appendChild(hiddenInput);
                }
            }

            if (mediaWrapper) {
                mediaWrapper.remove();
            }
        });

        addFileBtn.addEventListener('click', function() {
            if (getFileCount() >= maxFiles) {
                alert(`{{ __('global.max_files_limit_alert') }}`.replace(':max', maxFiles));
                return;
            }

            const newFileWrapper = document.createElement('div');
            newFileWrapper.className = 'col-6 col-md-4 col-lg-3 mb-4 media-wrapper';
            newFileWrapper.innerHTML = `
                <div class="media-item-card file-upload-area position-relative">
                     <button type="button" class="btn-close remove-media-btn position-absolute top-0 end-0 m-1" aria-label="Close"></button>
                     <div class="media-preview-container">
                         <span class="material-icons-outlined">add_photo_alternate</span>
                         <small class="d-block text-center text-muted p-1" style="font-size: 12px;">${uploadText}</small>
                     </div>
                     <input type="file" name="${inputName}" class="d-none file-input">
                </div>
            `;

            filesContainer.appendChild(newFileWrapper);

            const card = newFileWrapper.querySelector('.media-item-card');
            const previewContainer = newFileWrapper.querySelector('.media-preview-container');
            const newInput = newFileWrapper.querySelector('.file-input');

            card.addEventListener('click', function(e) {
                if (!e.target.classList.contains('remove-media-btn')) {
                    newInput.click();
                }
            });

            newInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewContainer.innerHTML = `<img src="${e.target.result}" alt="${file.name}">`;
                        }
                        reader.readAsDataURL(file);
                    } else {
                        previewContainer.innerHTML = `
                            <span class="material-icons-outlined">description</span>
                            <small class="d-block text-center text-muted p-1" style="font-size: 10px; word-break: break-all;">${file.name}</small>
                        `;
                    }
                }
            });
        });
    }


    // --- Contract Type Fields Toggle ---
    const contractTypeSelect = document.getElementById('contract_type_select');
    const hourlyFields = document.querySelectorAll('.hourly-fields');
    const orderFields = document.querySelectorAll('.order-fields');

    function toggleContractFields() {
        const selectedValue = contractTypeSelect.value;
        hourlyFields.forEach(el => el.style.display = 'none');
        orderFields.forEach(el => el.style.display = 'none');

        if (selectedValue === 'hourly_price') {
            hourlyFields.forEach(el => el.style.display = '');
        } else if (selectedValue === 'order_count') {
            orderFields.forEach(el => el.style.display = '');
        }
    }
    if (contractTypeSelect) {
        contractTypeSelect.addEventListener('change', toggleContractFields);
        toggleContractFields(); // Initial call
    }

    // --- Initialize All Multi-File Uploaders ---
    initializeMultiUploader('driving-license-files-container', 'add-driving-license-file-btn', 'driving_license_files[]', 4, "{{ __('global.upload_file') }}");
    initializeMultiUploader('graduation-certificate-files-container', 'add-graduation-certificate-file-btn', 'graduation_certificate_files[]', 4, "{{ __('global.upload_file') }}");
    // NEW: Initialize new uploaders
    initializeMultiUploader('passport-files-container', 'add-passport-file-btn', 'passport_files[]', 4, "{{ __('global.upload_file') }}");
    initializeMultiUploader('identification-files-container', 'add-identification-file-btn', 'identification_files[]', 4, "{{ __('global.upload_file') }}");


    // --- Vehicle & License Logic ---
    const vehiclesByType = @json($vehiclesByType ?? []);
    const vehicleTypeSelect = document.getElementById('vehicle_type_select');
    const licenseNumberSelect = document.getElementById('license_number_select');
    const mediaContainer = document.getElementById('vehicle-media-container');
    const oldLicenseNumber = "{{ old('license_number', optional($user ?? null)->license_number ?? '') }}";
    const oldVehicleType = "{{ old('vehicle_type', optional($user ?? null)->vehicle_type ?? '') }}" || (vehicleTypeSelect ? vehicleTypeSelect.value : '');

    function fetchAndDisplayMedia(vehicleNumber) {
        if (!mediaContainer) return;
        mediaContainer.innerHTML = `<div class="col-12 text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">{{ __('global.loading_files') }}</span></div></div>`;
        if (!vehicleNumber) {
            mediaContainer.innerHTML = '';
            return;
        }

        fetch(`{{ url('/admin/vehicles/get-media-by-number') }}/${vehicleNumber}`)
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(mediaItems => {
                mediaContainer.innerHTML = '';
                if (mediaItems.length === 0) {
                    mediaContainer.innerHTML = `<div class="col-12"><p class="text-muted">{{ __('global.no_files_found') }}</p></div>`;
                    return;
                }

                mediaItems.forEach(media => {
                    const colDiv = document.createElement('div');
                    colDiv.className = 'col-6 col-md-4 col-lg-3 mb-4';
                    const isImage = /\.(jpe?g|png|gif|bmp|svg|webp)$/i.test(media.url);
                    let filePreview = isImage ?
                        `<div class="media-preview-container"><img src="${media.url}" alt="${media.name}"></div>` :
                        `<div class="media-preview-container"><span class="material-icons-outlined">description</span></div>`;

                    colDiv.innerHTML = `
                        <a href="${media.url}" target="_blank" class="text-decoration-none">
                            <div class="media-item-card">
                                ${filePreview}
                            </div>
                        </a>`;
                    mediaContainer.appendChild(colDiv);
                });
            })
            .catch(error => {
                console.error("{{ __('global.error_fetching_media') }}:", error);
                mediaContainer.innerHTML = `<div class="col-12"><p class="text-danger">{{ __('global.failed_to_load_files') }}</p></div>`;
            });
    }

    function updateLicenseNumbers(selectedType) {
        if (!licenseNumberSelect) return;
        licenseNumberSelect.innerHTML = `<option value="">{{ __("global.pleaseSelect") }}</option>`;
        if(mediaContainer) mediaContainer.innerHTML = '';

        if (selectedType && vehiclesByType[selectedType]) {
            vehiclesByType[selectedType].forEach(function(vehicle) {
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

    if (vehicleTypeSelect) {
        if (oldVehicleType) {
            vehicleTypeSelect.value = oldVehicleType;
        }
        updateLicenseNumbers(vehicleTypeSelect.value);

        vehicleTypeSelect.addEventListener('change', function() {
            updateLicenseNumbers(this.value);
        });
        licenseNumberSelect.addEventListener('change', function() {
            fetchAndDisplayMedia(this.value);
        });
    }
});
</script>

@endsection