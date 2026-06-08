@props([
    'id' => 'file',
    'name' => 'file',
    'label' => 'upload your files',
    'required' => false,
])

<div class="custom-file-upload-box">
    <input type="file"
           id="{{ $id }}"
           class="file-input hidden"
           name="{{ $name }}"
           {{ $required ? 'required' : '' }}
    />

    <label for="{{ $id }}" class="rectangle-40 cursor-pointer">
        <span class="upload-your-files">{{ $label }}</span>
        <img src="{{ asset('dashboard/assets/images/past_image.png') }}" class="gallery-add" alt="Upload Icon" />
    </label>

    {{-- File name display --}}
    <div id="{{ $id }}-filename" class="mt-2 text-sm text-gray-600"></div>
</div>

@once
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const fileInput = document.getElementById('{{ $id }}');
                const fileNameDisplay = document.getElementById('{{ $id }}-filename');

                if (fileInput) {
                    fileInput.addEventListener('change', function () {
                        const fileName = this.files.length > 0 ? this.files[0].name : '';
                        fileNameDisplay.textContent = fileName;
                    });
                }
            });
        </script>
    @endpush
@endonce
