<x-app-layout>

<div class="grid place-items-center">
        <form class="" action="{{ route('utility.update', $utility[0]->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <p class="font-bold text-xl mt-2">Edit utility</p>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name : ')" />

                <x-input id="name" class="block mt-1 w-500" type="text" name="name" value="{{ $utility[0]->name }}" required/>
            </div>

            <!-- Brand -->
            <div class="mt-4">
                <x-label for="brand" :value="__('Brand : ')" />

                <x-input id="brand" class="block mt-1 w-500" type="text" name="brand" value="{{ $utility[0]->brand }}" required/>
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

            <!-- Price -->
            <div class="mt-4">
                <x-label for="prices" :value="__('Price per hour: ')" />

                <x-input id="prices" class="block mt-1 w-500" type="text" name="prices" value="{{ $utility[0]->prices }}" required />
            </div>

            <!-- Quantity -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description: ')" />

                <x-input id="description" class="block mt-1 w-500" type="text" name="description" value="{{ $utility[0]->description }}" required />
            </div>

            <!-- Upload Image -->
            <div class="mt-4">
                <x-label for="img" :value="__('Upload utility image')" /><br>
                <x-input type="file" id="photo" name="photo" class="block mt-1 w-500"/>
            </div>

            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold my-3 px-3 py-2 rounded-lg">
                Submit
            </button>
        </form>
</div>
</x-app-layout>