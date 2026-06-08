@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white rounded">
                <h4>{{ trans('global.create') }} {{ trans('cruds.vehicle.title_singular') }}</h4>
            </div>
            <div class="card-body">
                <form id="vehicle-form" action="{{ route('admin.vehicles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

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
                                        <input class="form-check-input" type="radio" name="kind_of_vehicle" id="bike" value="Bike">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="border rounded py-3 px-4 bg-light text-center w-75">
                                        {{trans('cruds.vehicle.type_vehicle_car')}}
                                    </div>
                                    <div class="form-check ms-2">
                                        <input class="form-check-input" type="radio" name="kind_of_vehicle" id="car" value="Car" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.number') }}" name="number_vehicles"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.base_number') }}" name="base_number"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.kilometres') }}" name="kilometres"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.license_purpose') }}" name="license_purpose"/>
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
                            <input type="date" name="ending_date" class="form-control">
                            <div class="mt-2">
                                @error('ending_date')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.name') }}" name="name"/>
                        </div>
                        <div class="col-md-4">

                            <label for="yearPicker" class="form-label">{{ trans('cruds.vehicle.fields.year_of_made') }}</label>
                            <input name="year_of_made" type="text" class="form-control" id="yearPicker" placeholder="">
                            <div class="mt-2">
                                @error('year_of_made')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{ trans('cruds.vehicle.fields.purchase_date') }}</label>
                            <input type="date" name="purchase_date" class="form-control">
                            <div class="mt-2">
                                @error('purchase_date')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.reference_number') }}" name="reference_number"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.shape') }}" name="shape"/>
                        </div>
                        <div class="col-md-4">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.price') }}" name="price" type="number" step="0.01"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <x-form.input label="{{ trans('cruds.vehicle.fields.document_number') }}" name="document_number"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">{{ trans('cruds.vehicle.fields.color') }}</label>
                            <select name="color" class="form-control">
                                <option value="">-- Select Color --</option>
                                <option value="White">White</option>
                                <option value="Black">Black</option>
                                <option value="Gray">Gray</option>
                                <option value="Silver">Silver</option>
                                <option value="Red">Red</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Orange">Orange</option>
                                <option value="Brown">Brown</option>
                                <option value="Gold">Gold</option>
                                <option value="Navy Blue">Navy Blue</option>
                                <option value="Sky Blue">Sky Blue</option>
                                <option value="Purple">Purple</option>
                                <option value="Pink">Pink</option>
                                <option value="Burgundy">Burgundy</option>

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

                        <!-- مكان رفع الملفات - فارغ في البداية -->
                        <div id="files-container">
                            <!-- سيتم إضافة حقول الملفات هنا بواسطة JavaScript -->
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

            // Form submission
            const submitBtn = document.getElementById('submit-btn');
            submitBtn.addEventListener('click', function () {
                document.getElementById('vehicle-form').submit();
            });

            // إعداد نظام رفع الملفات
            const filesContainer = document.getElementById('files-container');
            const addFileBtn = document.getElementById('add-file-btn');

            // عداد الملفات وحد أقصى للملفات
            let fileCount = 0; // نبدأ من صفر لأنه لا يوجد ملفات في البداية
            const MAX_FILES = 4;

            // إضافة حقل ملف جديد عند النقر على زر "إضافة"
            addFileBtn.addEventListener('click', function() {
                // التحقق من عدد الملفات
                if (fileCount >= MAX_FILES) {

                    return;
                }

                // إنشاء عنصر جديد لرفع الملف
                const newFileArea = document.createElement('div');
                newFileArea.className = 'file-upload-area border border-2 border-secondary rounded p-3 text-center mb-2 bg-light';
                newFileArea.style.borderStyle = 'dashed !important';

                newFileArea.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">{{ trans('cruds.vehicle.upload_file') }}</span>
                        <span class="material-icons-outlined text-secondary">image</span>
                    </div>
                    <input type="file" name="file_vehicles[]" class="d-none file-input">
                `;

                // إضافة العنصر الجديد إلى الحاوية
                filesContainer.appendChild(newFileArea);

                // زيادة عداد الملفات
                fileCount++;

                // ربط الأحداث بالعنصر الجديد
                const newInput = newFileArea.querySelector('.file-input');
                const newTextSpan = newFileArea.querySelector('span.text-muted');

                newFileArea.addEventListener('click', function() {
                    newInput.click();
                });

                newInput.addEventListener('change', function() {
                    const files = Array.from(this.files);
                    if (files.length === 0) {
                        newTextSpan.textContent = '{{ trans('cruds.vehicle.upload_file') }}';
                    } else {
                        const names = files.map(file => file.name).join(', ');
                        newTextSpan.textContent = names;
                    }
                });


            });
        });
    </script>
@endsection




