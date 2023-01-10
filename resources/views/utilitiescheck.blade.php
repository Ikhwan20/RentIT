<!DOCTYPE html>
<html>
  <head>
    @livewireStyles
  </head>
  <body>
  <h1>Before: </h1>

  <div>
  @foreach($names as $name)
  <img src="public/images/{{$name}}" id="imageName" class="object-cover w-24 h-24 float-left mr-5">
  @endforeach
  </div>

  <div>
      <form action="/check" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" id="my-file" name="image">
      <br>
      <input type="submit" name="upload">Upload</input>
      </form>
  </div>

<div id="after">

  <div>
      <form action="/check1" method="post" enctype="multipart/form-data">
      @csrf
      {{-- The best athlete wants his opponent at his best. --}}
      <input type="file" id="my-file2" name="image2">
      <br>
      <input type="submit" name="upload2">Upload</input>
      </form>
  </div>

  <h1>After: </h1>

  <div>
  @foreach($names2 as $name2)
  <img src="public/images/{{$name2}}" id="imageName2" class="object-cover w-24 h-24 float-left mr-5">
  @endforeach
  </div>
</div>

    @livewireScripts
  </body>
</html>

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