<x-booking-layout>
<br/>
@foreach($orders as $order)
<div class="flex flex-row rounded-lg overflow-hidden shadow-md mx-10">
    <img src="{{ url($order->utility->photo) }}" alt="Product Image" class="w-48 h-48">
    <div class="px-6 py-4 w-50">
        <div class="font-bold text-xl mb-2 px-3">{{ $order->utility->name }}</div>
        <div class="px-1 py-4 flex flex-row">
            <span class="inline-block rounded-full px-3 py-1 text-l font-semibold text-gray-700 mr-2">
                Start : {{$order->start}}
            </span>
            <span class="inline-block  rounded-full px-13 py-1 text-l font-semibold text-gray-700 mr-2">
                End : {{$order->end}}
            </span>
        </div>
        @if($order->active == false && $order->ended == false)
        <a href="/chatify" class="text-blue-500 hover:text-blue-800">
        <button class="bg-blue-500 text-white rounded-full ml-3 px-4 py-1">Chat Owner</button>
        </a>
        @endif
        @if($order->active == true && $order->ended == false)
        <a href="{{ url('/before/'.$order->id) }}" class="text-blue-500 hover:text-blue-800">
        <button class="bg-blue-500 text-white rounded-full ml-3 px-4 py-1">Upload Image Before</button>
        </a>
        @endif
        @if($order->active == false && $order->ended == true)
        <a href="{{ url('/after/'.$order->id) }}" class="text-blue-500 hover:text-blue-800">
        <button class="bg-blue-500 text-white rounded-full ml-3 px-4 py-1">Upload Image After</button>
        </a>
        <a href="/check" class="text-blue-500 hover:text-blue-800">
        <button class="bg-blue-500 text-white rounded-full ml-3 px-4 py-1">Rate</button>
        </a>
        @endif
    </div>
</div>
@endforeach
</x-booking-layout>