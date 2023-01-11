-<x-booking-layout>

<div class="pt-6 px-4 text-xl font-bold">
    Active
</div>

<br/>
            <table class="w-full ml-3 text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-l text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">#</th>
                        <th scope="col" class="py-3 px-6">Utility</th>
                        <th scope="col" class="py-3 px-6">Start Time</th>
                        <th scope="col" class="py-3 px-6">End Time</th>
                </thead>
                <tbody class="text-l ml-3 text-center">
                @foreach($orders as $order)
                @foreach($utility as $util)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $util->name }}</td>
                        <td>{{ $order->start }}</td>
                        <td>{{ $order->end }}</td>
                    </tr>
                @endforeach
                @endforeach
                </tbody>
            </table>

</x-booking-layout>