@props(['attrs'])

<div class="{{ $attrs['col'] }}">
    <select
        @foreach ($attrs as $key => $value)
            @if ($key !== 'label' && $key !== 'col' && $key !== 'options' && $key != 'selected')
               @php  
                    echo $key. '=' .'"'.$value.'"'
               @endphp
            @endif @endforeach>
        @foreach ($attrs['options'] as $option)
            @php
                $selcted = $option['id'] == $attrs['selected'] ? 'selected' : '';
            @endphp
            <option  value="{{ $option['id'] }}" {{ $selcted }}>{{ $option['name'] }}
            </option>
        @endforeach
    </select>
</div>
