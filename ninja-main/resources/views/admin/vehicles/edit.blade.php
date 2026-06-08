@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white rounded">
                <h4>{{ trans('global.edit') }} {{ trans('cruds.vehicle.title_singular') }}</h4>
            </div>
            <div class="card-body">
                <form id="vehicle-form" action="{{ route('admin.vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- CSS للملفات المستبدلة -->
                    <style>
                        .file-selected {
                            background-color: #e8f4ff !important;
                            border-color: #0d6efd !important;
                            font-weight: bold;
                        }
                        .form-display {
                            transition: all 0.3s ease;
                        }
                        .form-display:hover {
                            background-color: #f8f9fa;
                        }
                        .file-upload-wrapper {
                            position: relative;
                            margin-bottom: 1rem;
                            cursor: pointer;
                        }
                        .file-upload-area{
                            cursor: pointer;
                        }

                    </style>

                    <!-- Kind of Vehicles -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">{{ trans('cruds.vehicle.fields.type') }}</label>
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="border rounded py-3 px-4 bg-light text-center w-75">
                                        {{trans('cruds.vehicle.type_vehicle_bike')}}
                                    </div>
                                    <div class="form-check ms-2">
                                        <input class="form-check-input" type="radio" name="kind_of_vehicle" id="bike" value="Bike" {{ $vehicle->kind_of_vehicle == 'Bike' ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="border rounded py-3 px-4 bg-light text-center w-75">
                                        {{trans('cruds.vehicle.type_vehicle_car')}}
                                    </div>
                                    <div class="form-check ms-2">
                                        <input class="form-check-input" type="radio" name="kind_of_vehicle" id="car" value="Car" {{ $vehicle->kind_of_vehicle == 'Car' ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.number') }}" name="number_vehicles" value="{{ $vehicle->number_vehicles }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.base_number') }}" name="base_number" value="{{ $vehicle->base_number }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.kilometres') }}" name="kilometres" value="{{ $vehicle->kilometres }}"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.license_purpose') }}" name="license_purpose" value="{{ $vehicle->license_purpose }}"/>
                        </div>
                        <div class="col-md-4">
                            <label for="made_of">{{ trans('cruds.vehicle.fields.made_of') }}</label>
                            <select name="made_of" id="made_of" class="form-control">
                                @foreach ($countries as $code => $name)
                                    <option value="{{ $code }}"
                                        @if(old('made_of', isset($vehicle) ? $vehicle->made_of : '') == $code) selected @endif>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">{{ trans('cruds.vehicle.fields.ending_date') }}</label>
                            <input type="date" name="ending_date" class="form-control" value="{{ $vehicle->ending_date }}">
                            <div class="mt-2">
                                @error('ending_date')
                                <span class="text-danger"> {{ $message }}</span>
                             @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.name') }}" name="name" value="{{ $vehicle->name }}"/>
                        </div>
                        <div class="col-md-4">
                            <label for="yearPicker" class="form-label">{{ trans('cruds.vehicle.fields.year_of_made') }}</label>
                            <input name="year_of_made" type="text" class="form-control" id="yearPicker"  value="{{$vehicle->year_of_made}}">
                            <div class="mt-2">
                                @error('year_of_made')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{ trans('cruds.vehicle.fields.purchase_date') }}</label>
                            <input type="date" name="purchase_date" class="form-control" value="{{ $vehicle->purchase_date }}">
                            <div class="mt-2">
                                @error('purchase_date')
                                <span class="text-danger"> {{ $message }}</span>
                             @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.reference_number') }}" name="reference_number" value="{{ $vehicle->reference_number }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.shape') }}" name="shape" value="{{ $vehicle->shape }}"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.price') }}" name="price" type="number" step="0.01" value="{{ $vehicle->price }}"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.document_number') }}" name="document_number" value="{{ $vehicle->document_number }}"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">{{ trans('cruds.vehicle.fields.color') }}</label>
                            <select name="color" class="form-control">
                                <option value="">-- Select Color --</option>
                                <option value="White" {{ $vehicle->color == 'White' || $vehicle->color == 'أبيض' ? 'selected' : '' }}>White</option>
                                <option value="Black" {{ $vehicle->color == 'Black' || $vehicle->color == 'أسود' ? 'selected' : '' }}>Black</option>
                                <option value="Gray" {{ $vehicle->color == 'Gray' || $vehicle->color == 'رمادي' ? 'selected' : '' }}>Gray</option>
                                <option value="Silver" {{ $vehicle->color == 'Silver' || $vehicle->color == 'فضي' ? 'selected' : '' }}>Silver</option>
                                <option value="Red" {{ $vehicle->color == 'Red' || $vehicle->color == 'أحمر' ? 'selected' : '' }}>Red</option>
                                <option value="Blue" {{ $vehicle->color == 'Blue' || $vehicle->color == 'أزرق' ? 'selected' : '' }}>Blue</option>
                                <option value="Green" {{ $vehicle->color == 'Green' || $vehicle->color == 'أخضر' ? 'selected' : '' }}>Green</option>
                                <option value="Yellow" {{ $vehicle->color == 'Yellow' || $vehicle->color == 'أصفر' ? 'selected' : '' }}>Yellow</option>
                                <option value="Orange" {{ $vehicle->color == 'Orange' || $vehicle->color == 'برتقالي' ? 'selected' : '' }}>Orange</option>
                                <option value="Brown" {{ $vehicle->color == 'Brown' || $vehicle->color == 'بني' ? 'selected' : '' }}>Brown</option>
                                <option value="Gold" {{ $vehicle->color == 'Gold' || $vehicle->color == 'ذهبي' ? 'selected' : '' }}>Gold</option>
                                <option value="Navy Blue" {{ $vehicle->color == 'Navy Blue' || $vehicle->color == 'أزرق داكن' ? 'selected' : '' }}>Navy Blue</option>
                                <option value="Sky Blue" {{ $vehicle->color == 'Sky Blue' || $vehicle->color == 'أزرق سماوي' ? 'selected' : '' }}>Sky Blue</option>
                                <option value="Purple" {{ $vehicle->color == 'Purple' || $vehicle->color == 'بنفسجي' ? 'selected' : '' }}>Purple</option>
                                <option value="Pink" {{ $vehicle->color == 'Pink' || $vehicle->color == 'وردي' ? 'selected' : '' }}>Pink</option>
                                <option value="Burgundy" {{ $vehicle->color == 'Burgundy' || $vehicle->color == 'عنابي' ? 'selected' : '' }}>Burgundy</option>

                            </select>
                            <div class="mt-2">
                                @error('color')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Important files -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0 fw-bold">{{ trans('cruds.vehicle.fields.important_files') }}</label>
                            <button type="button" class="btn btn-outline-secondary rounded-pill" id="add-file-btn">
                                <div class="d-flex align-items-center"><span class="material-icons-outlined" style="font-size: 20px">add</span> {{ trans('cruds.vehicle.add_implemnts') }}</div>
                            </button>
                        </div>

                        <!-- ملفات موجودة -->
                        @if($vehicleMedia && $vehicleMedia->count())
                        <div class="mb-3">
                            <div class="existing-files-container">
                                @foreach($vehicleMedia as $media)
                                <label class="file-upload-wrapper w-100 mb-2 d-flex align-items-center">
                                    <input type="file" name="replace_files[{{ $media->id }}]" class="form-control me-2 d-none" data-media-id="{{ $media->id }}">
                                    <div class="form-display form-control me-2" style="cursor: pointer;">{{ $media->name }}</div>
                                    <span class="file-upload-text flex-grow-1 d-none">{{ $media->name }}</span>
                                    <span class="material-symbols-outlined file-upload-icon">
                                        @if(in_array($media->mime_type, ['image/jpeg', 'image/png', 'image/gif', 'image/jpg']))
                                            image
                                        @elseif(in_array($media->mime_type, ['application/pdf']))
                                            picture_as_pdf
                                        @else
                                            description
                                        @endif
                                    </span>
                                </label>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- مكان رفع الملفات الجديدة -->
                        <div id="new-files-container">
                            <!-- سيتم إضافة حقول الملفات الجديدة هنا بواسطة JavaScript -->
                        </div>

                        <div>
                            @error('file_vehicles')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>
                <div class="mt-4 text-end">
                    <button id="submit-btn" class="btn btn-success">{{ trans('global.save') }}</button>
                    <a href="{{ route('admin.vehicles.index') }}" class="btn btn-secondary">{{ trans('global.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
          $(document).ready(function() {
            $('#yearPicker').datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            // عناصر الصفحة
            const vehicleForm = document.getElementById('vehicle-form');
            const submitBtn = document.getElementById('submit-btn');
            const addFileBtn = document.getElementById('add-file-btn');
            const newFilesContainer = document.getElementById('new-files-container');
            const existingFilesContainer = document.querySelector('.existing-files-container');

            // حساب عدد الملفات الموجودة
            const existingFilesCount = existingFilesContainer ? existingFilesContainer.querySelectorAll('.file-upload-wrapper').length : 0;

            // تهيئة عداد الملفات
            let newFileCount = 0; // عدد الملفات الجديدة التي تمت إضافتها
            const MAX_FILES = 4; // الحد الأقصى الإجمالي للملفات



            // إرسال النموذج عند النقر على زر الحفظ
            submitBtn.addEventListener('click', function() {
                vehicleForm.submit();
            });

            // إعداد معالجات الأحداث للملفات الموجودة
            setupExistingFileWrappers();

            // إضافة ملف جديد عند النقر على زر الإضافة
            addFileBtn.addEventListener('click', addNewFileInput);

            // ---------- الوظائف المساعدة ----------

            // إعداد معالجات الأحداث للملفات الموجودة (للاستبدال)
            function setupExistingFileWrappers() {
                const fileWrappers = document.querySelectorAll('.file-upload-wrapper');
                fileWrappers.forEach(wrapper => {
                    // الحصول على العناصر
                    const fileInput = wrapper.querySelector('input[type="file"]');
                    if (!fileInput) return;

                    const displayDiv = wrapper.querySelector('.form-display');
                    if (!displayDiv) return;

                    // إعادة إنشاء العنصر لتجنب تداخل معالجات الأحداث
                    const newDisplayDiv = displayDiv.cloneNode(true);
                    displayDiv.parentNode.replaceChild(newDisplayDiv, displayDiv);

                    // معالج حدث النقر
                    newDisplayDiv.addEventListener('click', function(event) {
                        event.preventDefault();
                        event.stopPropagation();

                        setTimeout(() => {
                            fileInput.click();
                        }, 50);

                        return false;
                    });

                    // منع انتشار الحدث
                    fileInput.addEventListener('click', function(event) {
                        event.stopPropagation();
                    });

                    // تحديث النص عند تغيير الملف
                    fileInput.addEventListener('change', function(event) {
                        event.stopPropagation();

                        if (this.files && this.files.length > 0) {
                            newDisplayDiv.textContent = this.files[0].name;
                            newDisplayDiv.classList.add('file-selected');
                        } else {
                            const originalText = wrapper.querySelector('.file-upload-text').textContent;
                            newDisplayDiv.textContent = originalText;
                            newDisplayDiv.classList.remove('file-selected');
                        }
                    });
                });
            }

            // إضافة حقل ملف جديد
            function addNewFileInput() {
                // التحقق من إجمالي عدد الملفات (الموجودة + الجديدة)
                const totalFiles = existingFilesCount + newFileCount;

                if (totalFiles >= MAX_FILES) {

                    return;
                }

                // إنشاء عنصر جديد لرفع الملف
                const newFileArea = document.createElement('div');
                newFileArea.className = 'file-upload-area border border-2 border-secondary rounded p-3 text-center mb-2 bg-light';
                newFileArea.style.borderStyle = 'dashed !important';

                newFileArea.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">{{ trans('cruds.vehicle.upload_file') }}</span>
                        <span class="material-icons-outlined text-secondary">upload</span>
                    </div>
                    <input type="file" name="file_vehicles[]" class="d-none file-input">
                `;

                // إضافة العنصر الجديد إلى الحاوية
                newFilesContainer.appendChild(newFileArea);

                // ربط الأحداث بالعنصر الجديد
                const newFileInput = newFileArea.querySelector('.file-input');
                const newFileNameText = newFileArea.querySelector('span.text-muted');

                newFileArea.addEventListener('click', function() {
                    newFileInput.click();
                });

                newFileInput.addEventListener('change', function() {
                    const files = Array.from(this.files);
                    if (files.length === 0) {
                        newFileNameText.textContent = '{{ trans('cruds.vehicle.upload_file') }}';
                    } else {
                        const names = files.map(file => file.name).join(', ');
                        newFileNameText.textContent = names;
                    }
                });

                // زيادة عداد الملفات
                newFileCount++;


            }
        });
    </script>
@endsection

