<x-app-layout>

<div class="grid place-items-center">
        <form class="" action="{{ url('utility') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="font-bold text-xl mt-2">Add utility</p>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name : ')" />

                <x-input id="name" class="block mt-1 w-500" type="text" name="name" required/>
            </div>

            <!-- Brand -->
            <div class="mt-4">
                <x-label for="brand" :value="__('Brand : ')" />

                <x-input id="brand" class="block mt-1 w-500" type="text" name="brand" required/>
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-label for="prices" :value="__('Price per hour: ')" />

                <x-input id="prices" class="block mt-1 w-500" type="text" name="prices" required />
            </div>

            <!-- Category -->
            <div class="mt-4">
                <x-label for="category" :value="__('Category : ')" />

                <select id="category" class="block mt-1 w-500" name="category" >
                    <option value="Kitchen & Laundry">Kitchen & Laundry</option>
                    <option value="Mobile Phones">Mobile Phones</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Computers">Computers</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Home & Garden">Home & Garden</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description : ')" />

                <x-input id="description" class="block mt-1 w-500" type="text" name="description" required/>
            </div>

            <!-- Upload Image -->
            <div class="mt-4">
                <x-label for="img" :value="__('Upload utility image')" /><br>
                <x-input type="file" id="photo" name="photo" class="block mt-1 w-500"/>
            </div>

            <!-- Google Map -->
            <div class="mt-4">

                <div id="map"></div>
                <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}">
                <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}">

                <script>
                    var map;
                    var marker;
                    var lat = document.getElementById('latitude').value || 0;
                    var lng = document.getElementById('longitude').value || 0;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: lat, lng: lng},
                            zoom: 15
                        });

                        marker = new google.maps.Marker({
                            position: {lat: lat, lng: lng},
                            map: map,
                            draggable: true
                        });

                        google.maps.event.addListener(marker, 'dragend', function (event) {
                            document.getElementById('latitude').value = this.getPosition().lat();
                            document.getElementById('longitude').value = this.getPosition().lng();
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>
                </div>

            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold my-3 px-3 py-2 rounded-lg">
                Submit
            </button>
        </form>
</div>
</x-app-layout>