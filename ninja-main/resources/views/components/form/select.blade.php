@props([
    'label'=>'',
    'name',
    'required'=>false
])
<label class="{{$required?'required':''}} mb-2" for="{{$name}}">{{ $label}}</label>
<select
    {{$attributes->merge(['class'=>'form-control select2 '])}} style="width: 100% !important;" class=" {{ $errors->has($name) ? 'is-invalid' : '' }}"
    name="{{$name}}" id="{{$name}}">
    <option  value="">{{ __('global.pleaseSelect').' '.$label}}</option>
    {{$slot}}
</select>
@if($errors->has($name))
    <span class="text-danger">{{ $errors->first($name) }}</span>
@endif
