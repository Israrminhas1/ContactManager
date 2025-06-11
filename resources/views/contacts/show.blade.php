@extends('layouts.app')

@section('title', $contact->name . ' - Contact Manager')

@section('content')
<div class="bg-white shadow rounded-lg">
    <div class="px-6 py-4 border-b border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <h1 class="text-2xl font-bold text-gray-900">{{ $contact->name }}</h1>
            <div class="mt-4 md:mt-0 flex space-x-2">
                <a href="{{ route('contacts.edit', $contact) }}" 
                   class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Edit Contact
                </a>
                <form action="{{ route('contacts.destroy', $contact) }}" 
                      method="POST" 
                      class="inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this contact?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Delete Contact
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="px-6 py-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-medium text-gray-900 mb-4">Contact Information</h3>
                
                <div class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Name</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->name }}</p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Email</label>
                        @if($contact->email)
                            <p class="mt-1 text-sm text-gray-900">
                                <a href="mailto:{{ $contact->email }}" 
                                   class="text-indigo-600 hover:text-indigo-500">
                                    {{ $contact->email }}
                                </a>
                            </p>
                        @else
                            <p class="mt-1 text-sm text-gray-400">No email provided</p>
                        @endif
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Phone</label>
                        @if($contact->phone)
                            <p class="mt-1 text-sm text-gray-900">
                                <a href="tel:{{ $contact->phone }}" 
                                   class="text-indigo-600 hover:text-indigo-500">
                                    {{ $contact->phone }}
                                </a>
                            </p>
                        @else
                            <p class="mt-1 text-sm text-gray-400">No phone provided</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Tags and Metadata -->
            <div>
                <h3 class="text-lg font-medium text-gray-900 mb-4">Tags & Details</h3>
                
                <div class="space-y-4">
                    <!-- Tags -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-2">Tags</label>
                        @if($contact->tags)
                            <div class="flex flex-wrap gap-1">
                                @foreach(explode(',', $contact->tags) as $tag)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        {{ trim($tag) }}
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-gray-400">No tags assigned</p>
                        @endif
                    </div>

                    <!-- Created Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Created</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->created_at->format('M j, Y \a\t g:i A') }}</p>
                    </div>

                    <!-- Updated Date -->
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Last Updated</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->updated_at->format('M j, Y \a\t g:i A') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <a href="{{ route('contacts.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:outline-none focus:border-gray-500 focus:ring ring-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    ← Back to Contacts
                </a>
                
                <div class="flex space-x-2">
                    @if($contact->email)
                        <a href="mailto:{{ $contact->email }}" 
                           class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Send Email
                        </a>
                    @endif
                    
                    @if($contact->phone)
                        <a href="tel:{{ $contact->phone }}" 
                           class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Call
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 