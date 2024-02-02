<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            {{ __('Add Deferement') }}
        </h2>
    </x-slot>

   </div>
   <div class="container w-50">
    
        <form action="{{route('deferement.store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group py-2">
                <select class="form-control" name="year" id="">
                    <option value="">--Year--</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                </select>
            </div>

            <div class="form-group py-2">
                <select class="form-control" name="semister" id="">
                    <option value="">--Semister--</option>
                    <option value="1">SEM 1</option>
                    <option value="2">SEM 2</option>
                </select>
            </div>  

            <div class="form-group py-2">
                <input type="textarea" name="notes" placeholder="Notes" class="form-control">
            </div>
            <div class="form-group py-2">
                <input type="textarea" name="reasons" placeholder="reasons" class="form-control">
            </div>
            <div class="form-group py-2">
                <input type="textarea" name="hod_approval" placeholder="HOD Approval" class="form-control">
            </div>
            <div class="form-group py-2">
                <input type="textarea" name="registrar_approval" placeholder="Registrar Approval" class="form-control">
            </div>
            <div class="form-group py-2">
                <input type="submit" name="submit" value="Defer" class="btn-btn-primary">    
            </div>          
        </form>
   </div>
</x-app-layout>