@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="second_name">{{ trans('cruds.user.fields.second_name') }}</label>
                <input class="form-control {{ $errors->has('second_name') ? 'is-invalid' : '' }}" type="text" name="second_name" id="second_name" value="{{ old('second_name', $user->second_name) }}">
                @if($errors->has('second_name'))
                    <span class="text-danger">{{ $errors->first('second_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.second_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name">{{ trans('cruds.user.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_name">{{ trans('cruds.user.fields.ar_name') }}</label>
                <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{ old('ar_name', $user->ar_name) }}">
                @if($errors->has('ar_name'))
                    <span class="text-danger">{{ $errors->first('ar_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.ar_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_second_name">{{ trans('cruds.user.fields.ar_second_name') }}</label>
                <input class="form-control {{ $errors->has('ar_second_name') ? 'is-invalid' : '' }}" type="text" name="ar_second_name" id="ar_second_name" value="{{ old('ar_second_name', $user->ar_second_name) }}">
                @if($errors->has('ar_second_name'))
                    <span class="text-danger">{{ $errors->first('ar_second_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.ar_second_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ar_last_name">{{ trans('cruds.user.fields.ar_last_name') }}</label>
                <input class="form-control {{ $errors->has('ar_last_name') ? 'is-invalid' : '' }}" type="text" name="ar_last_name" id="ar_last_name" value="{{ old('ar_last_name', $user->ar_last_name) }}">
                @if($errors->has('ar_last_name'))
                    <span class="text-danger">{{ $errors->first('ar_last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.ar_last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <span class="text-danger">{{ $errors->first('roles') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.user.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $user->code) }}">
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="old_code">{{ trans('cruds.user.fields.old_code') }}</label>
                <input class="form-control {{ $errors->has('old_code') ? 'is-invalid' : '' }}" type="text" name="old_code" id="old_code" value="{{ old('old_code', $user->old_code) }}">
                @if($errors->has('old_code'))
                    <span class="text-danger">{{ $errors->first('old_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.old_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file_number">{{ trans('cruds.user.fields.file_number') }}</label>
                <input class="form-control {{ $errors->has('file_number') ? 'is-invalid' : '' }}" type="text" name="file_number" id="file_number" value="{{ old('file_number', $user->file_number) }}">
                @if($errors->has('file_number'))
                    <span class="text-danger">{{ $errors->first('file_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.file_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender">
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', $user->gender) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_number">{{ trans('cruds.user.fields.passport_number') }}</label>
                <input class="form-control {{ $errors->has('passport_number') ? 'is-invalid' : '' }}" type="text" name="passport_number" id="passport_number" value="{{ old('passport_number', $user->passport_number) }}">
                @if($errors->has('passport_number'))
                    <span class="text-danger">{{ $errors->first('passport_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.passport_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_issue_date">{{ trans('cruds.user.fields.passport_issue_date') }}</label>
                <input class="form-control date {{ $errors->has('passport_issue_date') ? 'is-invalid' : '' }}" type="text" name="passport_issue_date" id="passport_issue_date" value="{{ old('passport_issue_date', $user->passport_issue_date) }}">
                @if($errors->has('passport_issue_date'))
                    <span class="text-danger">{{ $errors->first('passport_issue_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.passport_issue_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_expiry_date">{{ trans('cruds.user.fields.passport_expiry_date') }}</label>
                <input class="form-control date {{ $errors->has('passport_expiry_date') ? 'is-invalid' : '' }}" type="text" name="passport_expiry_date" id="passport_expiry_date" value="{{ old('passport_expiry_date', $user->passport_expiry_date) }}">
                @if($errors->has('passport_expiry_date'))
                    <span class="text-danger">{{ $errors->first('passport_expiry_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.passport_expiry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_images">{{ trans('cruds.user.fields.passport_images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('passport_images') ? 'is-invalid' : '' }}" id="passport_images-dropzone">
                </div>
                @if($errors->has('passport_images'))
                    <span class="text-danger">{{ $errors->first('passport_images') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.passport_images_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_title">{{ trans('cruds.user.fields.job_title') }}</label>
                <input class="form-control {{ $errors->has('job_title') ? 'is-invalid' : '' }}" type="text" name="job_title" id="job_title" value="{{ old('job_title', $user->job_title) }}">
                @if($errors->has('job_title'))
                    <span class="text-danger">{{ $errors->first('job_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.job_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="department_id">{{ trans('cruds.user.fields.department') }}</label>
                <select class="form-control select2 {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department_id" id="department_id">
                    @foreach($departments as $id => $entry)
                        <option value="{{ $id }}" {{ (old('department_id') ? old('department_id') : $user->department->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.user.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mobile">{{ trans('cruds.user.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', $user->mobile) }}" required>
                @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.user.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $user->address) }}">
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_type">{{ trans('cruds.user.fields.license_type') }}</label>
                <input class="form-control {{ $errors->has('license_type') ? 'is-invalid' : '' }}" type="text" name="license_type" id="license_type" value="{{ old('license_type', $user->license_type) }}">
                @if($errors->has('license_type'))
                    <span class="text-danger">{{ $errors->first('license_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.license_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_number">{{ trans('cruds.user.fields.license_number') }}</label>
                <input class="form-control {{ $errors->has('license_number') ? 'is-invalid' : '' }}" type="text" name="license_number" id="license_number" value="{{ old('license_number', $user->license_number) }}">
                @if($errors->has('license_number'))
                    <span class="text-danger">{{ $errors->first('license_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.license_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_expiry_date">{{ trans('cruds.user.fields.license_expiry_date') }}</label>
                <input class="form-control {{ $errors->has('license_expiry_date') ? 'is-invalid' : '' }}" type="date" name="license_expiry_date" id="license_expiry_date" value="{{ old('license_expiry_date', $user->license_expiry_date) }}">
                @if($errors->has('license_expiry_date'))
                    <span class="text-danger">{{ $errors->first('license_expiry_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.license_expiry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_images">{{ trans('cruds.user.fields.license_images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('license_images') ? 'is-invalid' : '' }}" id="license_images-dropzone">
                </div>
                @if($errors->has('license_images'))
                    <span class="text-danger">{{ $errors->first('license_images') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.license_images_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_id">{{ trans('cruds.user.fields.company') }}</label>
                <select class="form-control select2 {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company_id" id="company_id">
                    @foreach($companies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('company_id') ? old('company_id') : $user->company->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="direct_manager_id">{{ trans('cruds.user.fields.direct_manager') }}</label>
                <select class="form-control select2 {{ $errors->has('direct_manager') ? 'is-invalid' : '' }}" name="direct_manager_id" id="direct_manager_id">
                    @foreach($direct_managers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('direct_manager_id') ? old('direct_manager_id') : $user->direct_manager->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('direct_manager'))
                    <span class="text-danger">{{ $errors->first('direct_manager') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.direct_manager_helper') }}</span>
            </div>

            <div class="form-group col-12">
                <label for="shift_id">{{ trans('cruds.user.fields.shift') }}</label>
                <select class="form-control select2 {{ $errors->has('shift_id') ? 'is-invalid' : '' }}" name="shift_id" id="shift_id">
                    @foreach($shifts as $id => $shift)
                        <option value="{{ $id }}" {{ old('shift_id',$user->shift_id) == $id ? 'selected' : '' }}>{{ $shift }}</option>

                    @endforeach
                </select>
                @if($errors->has('direct_manager'))
                    <span class="text-danger">{{ $errors->first('direct_manager') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.direct_manager_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary">{{ trans('cruds.user.fields.salary') }}</label>
                <input class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}" type="number" name="salary" id="salary" value="{{ old('salary', $user->salary) }}" step="1">
                @if($errors->has('salary'))
                    <span class="text-danger">{{ $errors->first('salary') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.salary_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vacation_balance">{{ trans('cruds.user.fields.vacation_balance') }}</label>
                <input class="form-control {{ $errors->has('vacation_balance') ? 'is-invalid' : '' }}" type="number" name="vacation_balance" id="vacation_balance" value="{{ old('vacation_balance', $user->vacation_balance) }}" step="1">
                @if($errors->has('vacation_balance'))
                    <span class="text-danger">{{ $errors->first('vacation_balance') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="birth_date">{{ trans('cruds.user.fields.birth_date') }}</label>
                <input class="form-control date {{ $errors->has('birth_date') ? 'is-invalid' : '' }}" type="text" name="birth_date" id="birth_date" value="{{ old('birth_date', $user->birth_date) }}">
                @if($errors->has('birth_date'))
                    <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.birth_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="degree">{{ trans('cruds.user.fields.degree') }}</label>
                <input class="form-control {{ $errors->has('degree') ? 'is-invalid' : '' }}" type="text" name="degree" id="degree" value="{{ old('degree', $user->degree) }}">
                @if($errors->has('degree'))
                    <span class="text-danger">{{ $errors->first('degree') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.degree_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="graduation_date">{{ trans('cruds.user.fields.graduation_date') }}</label>
                <input class="form-control date {{ $errors->has('graduation_date') ? 'is-invalid' : '' }}" type="text" name="graduation_date" id="graduation_date" value="{{ old('graduation_date', $user->graduation_date) }}">
                @if($errors->has('graduation_date'))
                    <span class="text-danger">{{ $errors->first('graduation_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.graduation_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="certificate_photos">{{ trans('cruds.user.fields.certificate_photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('certificate_photos') ? 'is-invalid' : '' }}" id="certificate_photos-dropzone">
                </div>
                @if($errors->has('certificate_photos'))
                    <span class="text-danger">{{ $errors->first('certificate_photos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.certificate_photos_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.showing') }}</label>
                <select class="form-control {{ $errors->has('showing') ? 'is-invalid' : '' }}" name="showing" id="showing">
                    <option value disabled {{ old('showing', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::SHOWING_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('showing', $user->showing) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('showing'))
                    <span class="text-danger">{{ $errors->first('showing') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.showing_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="team_id">{{ trans('cruds.user.fields.team') }}</label>
                <select class="form-control select2 {{ $errors->has('team') ? 'is-invalid' : '' }}" name="team_id" id="team_id">
                    @foreach($teams as $id => $entry)
                        <option value="{{ $id }}" {{ (old('team_id') ? old('team_id') : $user->team->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('team'))
                    <span class="text-danger">{{ $errors->first('team') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.team_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedPassportImagesMap = {}
Dropzone.options.passportImagesDropzone = {
    url: '{{ route('admin.users.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="passport_images[]" value="' + response.name + '">')
      uploadedPassportImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPassportImagesMap[file.name]
      }
      $('form').find('input[name="passport_images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($user) && $user->passport_images)
      var files = {!! json_encode($user->passport_images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="passport_images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
<script>
    var uploadedLicenseImagesMap = {}
Dropzone.options.licenseImagesDropzone = {
    url: '{{ route('admin.users.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="license_images[]" value="' + response.name + '">')
      uploadedLicenseImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedLicenseImagesMap[file.name]
      }
      $('form').find('input[name="license_images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($user) && $user->license_images)
      var files = {!! json_encode($user->license_images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="license_images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
<script>
    var uploadedCertificatePhotosMap = {}
Dropzone.options.certificatePhotosDropzone = {
    url: '{{ route('admin.users.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="certificate_photos[]" value="' + response.name + '">')
      uploadedCertificatePhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCertificatePhotosMap[file.name]
      }
      $('form').find('input[name="certificate_photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($user) && $user->certificate_photos)
      var files = {!! json_encode($user->certificate_photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="certificate_photos[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
@endsection
