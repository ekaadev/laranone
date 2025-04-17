<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Product</title>
    @vite('resources/css/app.css')
</head>
<body class="@container">
    <div class="flex justify-center m-4">
        <div class="max-w-4xl w-full">
            <table class="table-auto w-full text-sm text-left rtl:text-right border-2">
                <thead class="uppercase text-sm bg-gray-500 text-white">
                    <tr>
                        <th class="px-6 py-3">Product Name</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Quantity</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-base">
                @foreach($products as $product)
                    <tr>
                        <td class="px-6 py-3">{{$product->name}}</td>
                        <td class="px-6 py-3">{{$product->description}}</td>
                        <td class="px-6 py-3 text-center">{{$product->quantity}}</td>
                        <td class="px-6 py-3">Rp {{number_format($product->price, 2, ",", ".")}}</td>
                        <td class="px-6 py-3 flex gap-4">
                            <a class="text-blue-500 hover:text-blue-700" href="{{route('products.edit', $product->id)}}">Edit</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="my-4 flex justify-end">
                <a href="{{route('products.create')}}" class="rounded-sm text-base text-white bg-blue-500 hover:bg-blue-700 px-6 py-1.5">Add</a>
            </div>
        </div>
    </div>
</body>
</html>
