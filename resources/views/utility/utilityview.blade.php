<x-app-layout>

<div class="pt-6 px-10 text-xl font-bold">
    Utility Lists
</div>

<div class="pt-6 px-10 ">
    <a href="{{ url('/utilities/create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2 rounded-full" title="Add Utility">
        Add New
    </a>
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
                        <th scope="col" class="py-3 px-6">Update</th>
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
                            <img src="{{ asset($util->photo) }}" width= '150' height='150' class="img img-responsive" />
                        </td>
                        <td><a href="{{ url('/edit'.$util->id) }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Edit</a></td>
                        <td><form method="POST" action="{{ route('utility.delete', $util->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

</x-app-layout>