@props(['attrs'])

<div class="{{ $attrs['col'] }} ">
    <input
        @foreach ($attrs as $key => $value)
            @if ($key != 'label' && $key != 'col')
               @php
                    echo $key. '=' .'"'.$value.'"'
               @endphp
            @endif @endforeach>
</div>
