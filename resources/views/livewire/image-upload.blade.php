<h1>Before: </h1>

<div>
<img src="" id="imageName" class="object-cover w-24 h-24 float-left mr-5">
</div>

<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input type="file" wire:model="image" id="my-file">
    <br>
    <button wire:click="upload">Upload</button>
</div>

<div>
<img src="" id="imageName2" class="object-cover w-24 h-24 float-left mr-5">
</div>

<h1>After: </h1>

<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input type="file" wire:model="image2" id="my-file2">
    <br>
    <button wire:click="upload2">Upload</button>
</div>

<script>
document.getElementById("my-file").onchange = function() {
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    	// e.target.result is a base64-encoded url that contains the image data
      document.getElementById('imageName').setAttribute('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  }
}
</script>

<script>
document.getElementById("my-file2").onchange = function() {
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    	// e.target.result is a base64-encoded url that contains the image data
      document.getElementById('imageName2').setAttribute('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  }
}
</script>