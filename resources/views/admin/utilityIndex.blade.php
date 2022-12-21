<x-admin-layout>

<div class="pt-6 px-4 text-xl font-bold">
    Utility Lists
</div>

<br/>
            <table class="w-full ml-3 text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-l text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">#</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">Brand</th>
                        <th scope="col" class="py-3 px-6">Price</th>
                        <th scope="col" class="py-3 px-6">Photo</th>
                        <th scope="col" class="py-3 px-6">Delete</th>
                </thead>
                <tbody class="text-l ml-3 text-center">
                @foreach($utility as $util)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $util->name }}</td>
                        <td>{{ $util->brand }}</td>
                        <td>{{ $util->prices }}</td>
                        <td>
                            <img src="{{ asset($util->photo) }}" width= '150' height='150' class="img" />
                        </td>
                        <td><form method="POST" action="{{ route('utility.delete', $util->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

</x-admin-layout>