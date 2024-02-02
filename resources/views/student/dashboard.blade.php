<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-5 py-2">
        @if($errors->any())
        @foreach ($errors as $error)
            <ul>
                <div class="alert alert-danger">
                    <li>{{$error}}</li>
                </div>
            </ul>
        @endforeach
        @endif
        @if (Session::get('error'))
            <ul>
                <div class="alert alert-danger">    
                    <li>{{Session::get('error')}}</li>
                </div>
            </ul>
        @endif
        @if (Session::get('success'))
            <ul>
                <div class="alert alert-success">
                    <li>{{Session::get('success')}}</li>
                </div>
            </ul>       
        @endif      
    </div> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">
                    {{ __("You're logged in as ".Auth::user()->name) }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
