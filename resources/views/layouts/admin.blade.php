@php
    $action = Route::currentRouteAction();
//    dump($action);
    $controllerAction = class_basename($action);
//    dump($action);
//    dd('hi');
    list($controller, $method) = explode('@', $controllerAction);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include Font Awesome CDN -->
    <link rel="icon" type="image/x-icon" href="{{asset('/img/logo/sharesquare-logo.png')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/admin.css'])

</head>

<body class="bg-gray-100">
<!-- Sidebar -->
<aside class="bg-white text-gray-800 h-screen w-64 fixed overflow-y-auto shadow-lg">
    <!-- Logo -->
    <div class="flex items-center justify-center p-4">
        <span class="text-xl font-semibold">Admin</span>
    </div>
    <!-- Navigation -->
    <nav>
        <ul class="space-y-1">
            <li class="px-4 py-2">
                <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                    <span><i class="fas fa-home"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="px-4 py-2">
                <a href="{{route('admin.campaigns')}}" class="{{$controller == 'AdminController' && $method =='campaigns'  ? 'text-mainColor':'text-primaryTextColor'}} flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                    <span><i class="fas fa-bullhorn"></i></span>
                    <span >Campaigns</span>
                </a>
            </li>
            <li class="px-4 py-2">
                <a href="{{route('admin.campaignCategories')}}" class="{{$controller == 'AdminController' && $method == 'campaignCategories'? 'text-mainColor':'text-primaryTextColor'}} flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                    <span><i class="fab fa-servicestack"></i></span>
                    <span >Campaigns Categories</span>
                </a>
            </li>
            <li class="px-4 py-2">
                <a href="{{route('admin.item_categories.index')}}" class="{{$controller == 'AdminController' && $method == 'campaignItemCategories' ? 'text-mainColor':'text-primaryTextColor'}} flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                    <span><i class="fas fa-puzzle-piece"></i></span>
                    <span >Item Categories</span>
                </a>
            </li>
<!--            <li class="px-4 py-2">
                <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-gray-900">
                    <span><i class="fas fa-users"></i></span>
                    <span>Users</span>
                </a>
            </li>-->
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>
</aside>

<!-- Main Content -->
@yield('contents')

<!-- Include Font Awesome CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>
