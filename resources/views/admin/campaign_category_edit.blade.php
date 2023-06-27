@extends('layouts.admin')
@section('contents')
    <main class="ml-64 p-8">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('flash_message')
                <h1 class="text-2xl font-bold mb-4 ml-4">Campaigns Category</h1>
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <form action="{{ route('admin.updateCampaignCategory',$campaignCategory->id) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                <input type="text" id="name" name="name" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" value="{{ $campaignCategory->name }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="is_enabled" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                                <select id="is_enabled" name="is_enabled" class="border py-2 px-3 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-transparent" required>
                                    <option value="1" {{ $campaignCategory->is_enabled ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ !$campaignCategory->is_enabled ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
                                <a href="{{ route('admin.campaignCategories') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
