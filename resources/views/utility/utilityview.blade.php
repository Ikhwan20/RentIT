<x-app-layout>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($utility as $util)
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
            <img src="{{ url($util->photo) }}" alt="" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">
                
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $util->name }}</h3>
                <span class="mt-2 text-gray-500">RM {{ $util->prices }}</span>
                <!-- <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $util->id }}" name="id">
                    <input type="hidden" value="{{ $util->name }}" name="name">
                    <input type="hidden" value="{{ $util->prices }}" name="prices">
                    <input type="hidden" value="{{ $util->photo }}"  name="photo">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                </form> -->
            </div>
            
        </div>
        @endforeach
    </div>
</x-app-layout>