<x-admin-layout>
    @foreach($orders as $order)
<div class="mt-3 px-6 py-4 w-50 bg-white">
    <div class="font-bold text-xl mb-2 px-3">{{ $order->utility->name }}</div>
    <div class="px-1 py-4 flex flex-row">
        <span class="inline-block rounded-full px-3 py-1 text-l font-semibold text-gray-700 mr-2">
            Start : {{$order->start}}
        </span>
        <span class="inline-block  rounded-full px-13 py-1 text-l font-semibold text-gray-700 mr-2">
            End : {{$order->end}}
        </span>
    </div>
    <div class="px-1 py-4 flex flex-row">
    @if ($order->image)
  @if ($order->image->image_before)
    <img src="{{ url($order->image->image_before) }}" alt="Image Before" class="w-48 h-48 mr-2">
  @else
    <span class="inline-block  rounded-full px-13 py-1 text-l font-semibold text-gray-700 mr-2">NULL</span>
  @endif
  @if ($order->image->image_after)
    <img src="{{ url($order->image->image_after) }}" alt="Image After" class="w-48 h-48">
  @else
    <span class="inline-block  rounded-full px-13 py-1 text-l font-semibold text-gray-700 mr-2">NULL</span>
  @endif
  @endif
</div>
</div>
<br>
@endforeach
</x-admin-layout>