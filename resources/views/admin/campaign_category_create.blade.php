@extends('layouts.admin')
@section('contents')
<main class="ml-64 p-8">
    <h1 class="text-2xl font-bold mb-4 ml-4">Campaigns Category</h1>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Create Campaign Category
                    </div>
                </div>
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <form action="{{ route('admin.storeCampaignCategory') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" required>
                            </div>
                            <div class="mb-4">
                                <label for="is_enable" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <select id="is_enable" name="is_enabled" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" required>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
                                <a href="{{ route('admin.campaignCategories') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


{{--@vite('resources/js/panha.js')--}}
@endsection
