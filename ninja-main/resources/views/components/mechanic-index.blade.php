@section('styles')
<style>
  .modal-content {
    position: relative;
    z-index: 1050;
  }

  .pac-container {
    z-index: 2000 !important; /* Ensure it shows above modal */
  }
</style>

@endsection
<div class="table-responsive">
    <div class="table-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3">
                {{ trans('cruds.mechanic.title') }}
            </div>

            <x-index-filter route="admin.maintenances.index">
                <input type="hidden" name="tab" value="mechanic" />
                <x-form.modal class="col-lg-2" btn_color="success" :title="__('global.create')">
                    <x-slot name="btn_slot">
                        <i class="bx bx-plus"></i> {{ __('global.create') }}
                    </x-slot>

                    <form action="{{ route('admin.mechanics.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tab" value="mechanic">
                        <div class="row p-2">
                            <h5>{{ __('cruds.mechanic.choose_your_vehicle') }}</h5>
                            <div class="col-lg-6">
                                <x-form.colored-checkbox type="radio" color="success" name="vehicle_type" id="car"
                                    value="car" :label="trans('global.car')" />
                            </div>
                            <div class="col-lg-6">
                                <x-form.colored-checkbox type="radio" color="success" name="vehicle_type" id="bike"
                                    value="bike" :label="trans('global.bicycle')" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <x-form.input name="name" type="text" :label="__('cruds.mechanic.fields.name')" />
                            </div>
                            <div class="col-lg-6">
                                <x-form.select name="government_id" :label="__('cruds.mechanic.fields.government')">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <x-form.input name="garage" type="text" :label="__('cruds.mechanic.fields.garage')" />
                            </div>
                            <div class="col-lg-6">
                                <x-form.input name="contract_ending_date" type="date"
                                    :label="__('cruds.mechanic.fields.contract_ending_date')" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <x-form.input name="phone" type="text" :label="__('cruds.mechanic.fields.phone')" />
                            </div>
                            <div class="col-lg-6">
                                <x-form.input name="address" class="google-address-input" type="text"
                                    :label="__('cruds.mechanic.fields.address')" />
                                <input type="hidden" name="address_lat">
                                <input type="hidden" name="address_lng">
                            </div>
                        </div>

                        <div class="row">
                            <label class="file-upload-wrapper w-100 mb-2 d-flex align-items-center">
                                <input type="file" id="fileUpload1" name="file" class="form-control me-2">
                                <span class="file-upload-text flex-grow-1">Upload File 1</span>
                                <span class="material-symbols-outlined file-upload-icon">image</span>
                            </label>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">{{ __('global.save') }}</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('global.close') }}</button>
                        </div>
                    </form>
                </x-form.modal>
            </x-index-filter>
        </div>
    </div>

    <table class="table table-striped table-bordered table-hover" id="mechanic-table">
        <thead>
            <tr>
                <th>{{ __('cruds.mechanic.fields.id') }}</th>
                <th>{{ trans('global.barcode') }}</th>
                <th>{{ __('cruds.mechanic.fields.name') }}</th>
                <th>{{ __('cruds.mechanic.fields.location') }}</th>
                <th>{{ __('cruds.mechanic.fields.garage') }}</th>
                <th>{{ __('cruds.mechanic.fields.type') }}</th>
                <th>{{ __('cruds.mechanic.fields.phone') }}</th>
                <th>{{ __('cruds.mechanic.fields.created_at') }}</th>
                <th>{{ __('cruds.mechanic.fields.status') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mechanics as $mechanic)
                <tr>
                    <td>{{ $mechanic->code() }}</td>
                    <td>
                        <!-- **عرض الـ QR Code** -->
                        @if($mechanic->barcode)
                            {!! $mechanic->barcode !!}
                        @else
                            {{ trans('global.not_available') }}
                        @endif
                    </td>
                    <td>{{ $mechanic->name }}</td>
                       <td>
                            <a href="https://www.google.com/maps?q={{ $mechanic->address_lat }},{{ $mechanic->address_lng }}" target="_blank">
                                📍 {{ $mechanic->address }}
                            </a>
                        </td>
                    <td>{{ $mechanic->garage }}</td>
                    <td>{{ $mechanic->type }}</td>
                    <td>{{ $mechanic->phone }}</td>
                    <td>{{ formatData($mechanic->created_at) }}</td>
                    <td>
                        <x-status-badge :active="$mechanic->active" />

                    </td>
                    <td>
                        @if ($mechanic->barcode)
                        <a href="{{ route('admin.mechanics.print_barcode', $mechanic->id) }}" class="btn btn-xs btn-secondary" title="Download QR Code">
                            <span class="material-symbols-outlined">qr_code_2</span>
                        </a>
                        @endif

                        <x-form.modal btn_color="success" :id="'edit-'.$mechanic->id" class="col-lg-2" :title="__('global.edit')">
                            <x-slot name="btn_slot"><i class="bx bx-pen"></i></x-slot>

                            <form action="{{ route('admin.mechanics.update',$mechanic->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="tab" value="mechanic">

                                <div class="row p-2">
                                    <h5>{{ __('cruds.mechanic.choose_your_vehicle') }}</h5>
                                    <div class="col-lg-6">
                                        <x-form.colored-checkbox :checked="$mechanic->type==='car'" type="radio" color="success" name="vehicle_type" id="car" value="car" :label="trans('global.car')" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.colored-checkbox :checked="$mechanic->type==='bike'" type="radio" color="success" name="vehicle_type" id="bike" value="bike" :label="trans('global.bicycle')" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form.input name="name" :value="$mechanic->name" type="text" :label="__('cruds.mechanic.fields.name')" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.select name="government_id" :label="__('cruds.mechanic.fields.government')">
                                            @foreach ($countries as $country)
                                                <option @selected($mechanic->government_id === $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </x-form.select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form.input name="garage" :value="$mechanic->garage" type="text" :label="__('cruds.mechanic.fields.garage')" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.input :value="$mechanic->contract_ending_date" name="contract_ending_date" type="date" :label="__('cruds.mechanic.fields.contract_ending_date')" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form.input :value="$mechanic->phone" name="phone" type="text" :label="__('cruds.mechanic.fields.phone')" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.input :value="$mechanic->address" name="address" class="google-address-input" type="text" :label="__('cruds.mechanic.fields.address')" />
                                        <input type="hidden" name="address_lat" value="{{ $mechanic->address_lat }}">
                                        <input type="hidden" name="address_lng" value="{{ $mechanic->address_lng }}">
                                    </div>
                                </div>

                                @if ($mechanic->hasMedia('mechanic'))
                                    <div class="row my-2">
                                        <img src="{{ $mechanic->getFirstMediaUrl('mechanic') }}" alt="" width="150">
                                    </div>
                                @endif

                                <div class="row">
                                    <label class="file-upload-wrapper w-100 mb-2 d-flex align-items-center">
                                        <input type="file" id="fileUpload1" name="file" class="form-control me-2">
                                        <span class="file-upload-text flex-grow-1">Upload File 1</span>
                                        <span class="material-symbols-outlined file-upload-icon">image</span>
                                    </label>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">{{ __('global.update') }}</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('global.close') }}</button>
                                </div>
                            </form>
                        </x-form.modal>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mechanics->withQueryString()->links() }}
</div>
@section('scripts')
<script>
    function initGoogleAutocompleteOnInput(input) {
        const autocomplete = new google.maps.places.Autocomplete(input, {
            componentRestrictions: { country: "KW" }
        });

        autocomplete.addListener("place_changed", () => {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                alert("Invalid address selected.");
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            const form = input.closest('form');
            const latInput = form.querySelector('input[name="address_lat"]');
            const lngInput = form.querySelector('input[name="address_lng"]');

            if (latInput && lngInput) {
                latInput.value = lat;
                lngInput.value = lng;
            }
        });
    }

    function initAllGoogleAddressInputs() {
        document.querySelectorAll('.google-address-input').forEach(input => {
            if (!input.classList.contains('google-initialized')) {
                initGoogleAutocompleteOnInput(input);
                input.classList.add('google-initialized');
            }
        });
    }

    window.addEventListener('load', initAllGoogleAddressInputs);
    document.addEventListener('shown.bs.modal', initAllGoogleAddressInputs);
</script>
@endsection
