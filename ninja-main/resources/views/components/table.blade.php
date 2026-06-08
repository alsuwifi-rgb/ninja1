@props(['id', 'thead'])
<table id="{{ $id }}"
    class=" table table-bordered table-striped table-hover datatable datatable-{{ $id }}">
    <thead class="table-dark">
        <tr>
            @foreach ($thead as $th)
                <th class="{{ $th == 'checkbox' ? 'no-sort' : '' }}">
                    @if ($th == 'checkbox')
                        <input type="checkbox" id="check-all-{{ $id }}" class="form-check-input">
                    @else
                        {{ $th }}
                    @endif
                </th>
            @endforeach
        </tr>
    </thead>
</table>
