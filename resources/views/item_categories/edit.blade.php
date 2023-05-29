<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/panha.css')
    {{--    @vite('resources/js/jquery-3.6.1.min.js')--}}
    <title>Item Category</title>
</head>
<body class="container border mx-auto">
<!-- resources/views/item_categories/index.blade.php -->
<!-- resources/views/item_categories/edit.blade.php -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Item Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Edit Item Category
                    </div>
                </div>
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <form action="{{ route('item_categories.update', $itemCategory) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" value="{{ $itemCategory->name }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="is_enabled" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <select id="is_enabled" name="is_enabled" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" required>
                                    <option value="1" {{ $itemCategory->is_enabled ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ !$itemCategory->is_enabled ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                                <a href="{{ route('item_categories.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@vite('resources/js/panha.js')
</body>
</html>
