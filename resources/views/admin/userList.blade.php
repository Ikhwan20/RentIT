<x-admin-layout>
<div class="pt-6 px-10 text-xl font-bold">
    User Lists
</div>
<br/>
            <table class="w-full ml-3 text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-l text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">#</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">E-mail</th>
                        <th scope="col" class="py-3 px-6">Phone</th>
                        <th scope="col" class="py-3 px-6">Email Verified at</th>
                        <th scope="col" class="py-3 px-6">Created At</th>
                        <th scope="col" class="py-3 px-6">Phone</th>
                        <th scope="col" class="py-3 px-6">Delete</th>
                </thead>
                <tbody class="text-l ml-3 text-center">
                @foreach($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><form method="POST" action="{{ route('user.delete', $user->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
</x-admin-layout>