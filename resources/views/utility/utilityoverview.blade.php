@extends('layouts.admin')

@section('content')
<div class="mt-5 mx-20">
    <div class="flex items-center justify-center bg-white">
        <img src="{{ asset($utility->photo) }}" width= '300' height='300'/>
    </div>
    <table class="w-full text-l font-bold text-center bg-white border-black dark:bg-gray-800 dark:border-gray-700">
        <tr><td>Name : {{ $utility->name }}</td></tr>
        <tr><td>Brand : {{ $utility->Brand }}</td></tr>
        <tr><td>Price : RM{{ $utility->prices }}</td></tr>
        
    </table>
</div><br>

    <div class="flex gap-4 items-center justify-center mx-20">
        <a href="{{ url('/confirm') }}" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">Confirm</a>
        <a href="{{ url('/edit'.$utility->id) }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Edit</a>
        <form method="POST" action="{{ route('utility.delete', $utility->id) }}">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" data-toggle="tooltip" title='Delete'>Delete</button>
        </form>
    </div>

</div>

@stop