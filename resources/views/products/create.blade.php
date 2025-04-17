<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
    @vite('resources/css/app.css')
</head>
<body class="@container">
    <div class="flex justify-center m-4">
        <div class="border-2 max-w-3xl w-full">
            <form method="post" class="p-4" action="{{ route('products.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" class="border-2 w-full p-2" required>
                </div>
                <div class="mb-4">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" class="border-2 w-full p-2" required>
                </div>
                <div class="mb-4">
                    <label for="quantity">Quantity</label>
                    <input type="text" id="quantity" name="quantity" class="border-2 w-full p-2" required>
                </div>
                <div class="mb-4">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" class="border-2 w-full p-2" required>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 rounded-sm text-white px-4 py-2">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
