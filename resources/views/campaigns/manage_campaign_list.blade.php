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
@include('flash_message')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="mt-8 text-2xl">
                    Item Categories
                </div>
            </div>
            <div class="bg-white">
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="mb-6">
                        <a href="" class="px-4 py-2 bg-blue-500 text-white rounded-md">Add New Category</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Campaign cateogory
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Item category
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($campaigns as $campaign)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $campaign->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $campaign->campaign_category_id}} : {{ $campaign->campaignCategory  == null ? 'null': $campaign->campaignCategory->name}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $campaign->item_category_id}} : {{ $campaign->itemCategory  == null ? 'null': $campaign->itemCategory->name}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="" class="text-blue-500">Edit</a>
                                    <form class="inline-block" action="{{ route('campaigns.destroy',[$campaign->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@vite('resources/js/panha.js')
</body>
</html>
