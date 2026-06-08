@props([
    'required'=>false,
    'name'=>'',
    'value'=>'',
    'label'=>'',
])
    <label class="{{$required?'required':''}}" for="{{$name}}">{{ $label??"" }}</label>
    <input {{$attributes->merge([
    'class'=>'form-control my-2'
])}} type="{{$type??"text"}}" name="{{$name}}" id="{{$name}}"
           value="{{$value}}">
    @if($errors->has($name))
        <span class="text-danger">{{ $errors->first($name) }}</span>
    @endif
