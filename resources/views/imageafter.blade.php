<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
  </head>
  <body class="bg-gray-200 h-screen flex items-center justify-center">
    <form class="bg-white p-6 rounded-lg shadow-md" action="{{ url('uploadafter') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h1 class="text-lg font-medium mb-4">Upload Image After</h1>
      <input type="hidden" name="order_id" value="{{ $order->id }}">
      <div class="mb-4">
        <input type="file" id="photo" name="photo" class="py-2 px-3 border rounded-lg">
      </div>
      <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">Upload</button>
    </form>
  </body>
</html>