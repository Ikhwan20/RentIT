<x-booking-layout>

<br/>
            @foreach($orders as $order)
            @foreach($utility as $util)
            <div class="flex flex-row rounded-lg overflow-hidden shadow-md mx-10">
                <img src="{{ url($util->photo) }}" alt="Product Image" class="w-48 h-48">
                <div class="px-6 py-4 w-50">
                    <div class="font-bold text-xl mb-2 px-3">{{ $util->name }}</div>

                    <div class="px-1 py-4 flex flex-row">
                        <span class="inline-block rounded-full px-3 py-1 text-l font-semibold text-gray-700 mr-2">
                            Start : {{$order->start}}
                        </span>
                        <span class="inline-block  rounded-full px-13 py-1 text-l font-semibold text-gray-700 mr-2">
                            End : {{$order->end}}
                        </span>
                    </div>
                    <button class="bg-blue-500 text-white rounded-full ml-3 px-4 py-1">Update</button>

                </div>

            </div>

            @endforeach
            @endforeach

</x-booking-layout>