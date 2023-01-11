<!DOCTYPE html>
<html>
  <head>
    @livewireStyles
  </head>
  <body>
  <h1>Before and After: </h1>

  <div>
  @foreach($names->take(2) as $name)
  <img src="{{asset('images')}}/{{$name->image_path}}" id="imageName" class="object-cover w-24 h-24 float-left mr-5">
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

    @livewireScripts
  </body>
</html>

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