<div class="employee-image-container" id="imageContainer">
    <div class="rectangle-40"></div>
    <img id="previewImage" class="group-133545" src="{{ $url??asset('dashboard/assets/images/past_image.png') }}" />
    <div class="employee-image">Employee Image</div>
    <input type="file" name="employee_image" id="imageUpload" accept="image/*" style="display: none;" />
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const uploadInput = document.getElementById('imageUpload');
      const imageContainer = document.getElementById('imageContainer');

      imageContainer.addEventListener('click', () => {
        uploadInput.click();
      });

      uploadInput.addEventListener('change', (event) => {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function () {
          const img = document.getElementById('previewImage');
          img.src = reader.result;
        };

        if (input.files && input.files[0]) {
          reader.readAsDataURL(input.files[0]);
        }
      });
    });
  </script>
