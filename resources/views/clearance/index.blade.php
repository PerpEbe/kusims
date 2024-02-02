<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            {{ __('Fill up the Survey') }}
        </h2>
    </x-slot>
    <div class="container mt-3">
        @if(count($clearances)>0)
        <p class="alert alert-danger">
            You have already cleared. Please download the form
        </p>

        //here we need a button for downloading the form
        @else
        <form action="{{route('clearance.store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="q1">1. How do you rate our services at ku?</label><br>           
                {{-- <input type="textarea" class="form-control" rows="4" cols="34" name="1"> --}}
                <textarea name="q1" rows="3" cols="60">
                </textarea>
            </div>
            <div class="form-group py-2">
                <input type="submit" value="Save" class="text-dark btn btn-primary">
            </div>
        </form>
        @endif
    </div>
</x-app-layout>