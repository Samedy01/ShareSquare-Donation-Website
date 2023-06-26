@extends('layouts.admin')
@section('contents')
    <main class="ml-64 p-8">
        @include('flash_message')
        <h1 class="text-2xl font-bold mb-4 ml-4">Campaigns Category</h1>
        <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="mb-6">
                            <a href="{{ route('admin.createCampaignCategory') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Add New Category</a>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($campaignCategories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $category->is_enabled ? 'Enabled' : 'Disabled' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('admin.editCampainCategory',['campaign_category_id'=>$category->id]) }}" class="text-blue-500">Edit</a>
                                        <form class="inline-block" action="{{ route('admin.deleteCampaignCategory', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
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
    </main

@vite('resources/js/panha.js')
@endsection
