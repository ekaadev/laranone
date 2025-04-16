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
        <div class="border-2 max-w-3xl w-full">
            <table class="table-auto w-full text-sm text-left rtl:text-right">
                <thead class="uppercase text-sm bg-gray-500 text-white">
                    <tr>
                        <th class="px-6 py-3">Product Name</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Quantity</th>
                        <th class="px-6 py-3">Price</th>
                    </tr>
                </thead>
                <tbody class="text-base">
                @foreach($products as $product)
                    <tr>
                        <td class="px-6 py-3">{{$product->name}}</td>
                        <td class="px-6 py-3">{{$product->description}}</td>
                        <td class="px-6 py-3">{{$product->quantity}}</td>
                        <td class="px-6 py-3">Rp {{number_format($product->price, 2, ",", ".")}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
