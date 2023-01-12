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

                <button onclick="updateposition()">Update Position</button>
                <div id="map"></div>

                <x-label for="Map" :value="__('Set Pickup Location')" /><br>
                <style> */
                    #map {
                      height: 100%;
                    }
                    </style>
                <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCduXsC4O34hqxg2g7Tbs5LuQfV_INwsYQ&callback=initMap&v=weekly"
                defer
                ></script>
                <script>
                    let map;
                            function initMap() {
                            // The location of Uluru
                                const uluru = { lat: -25.344, lng: 131.031 };
                                // The map, centered at Uluru
                                const map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 15,
                                    center: uluru,
                                });
                                // The marker, positioned at Uluru
                                const marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map,
                                });
                                }
                </script>

                funtion updateposition()
                {
                    const latlng = { lat: -25.344, lng: 131.031 };
                    alert('position update function's);
                }
            </div>

            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold my-3 px-3 py-2 rounded-lg">
                Submit
            </button>
        </form>
</div>
</x-app-layout>