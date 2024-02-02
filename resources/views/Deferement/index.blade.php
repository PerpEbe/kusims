<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            {{ __('Deferement') }}
        </h2>
    </x-slot>
    <div class="pt-3">
        <div class="float-left">
            <h2 class="text">Deferement</h2>        
    </div>
    <div class="float-right">
            <a class="btn btn-primary" href="{{route('deferement.create')}}">Defer</a>
    </div>
    <br>
    <hr class="mt-4">
        <div class="container mt-3">
            @if(count($deferements)<1)
            <p class="alert alert-danger">
                You have no Deferements
            </p>
            @else
            <div class="table table-responsive mt-5">
                <table style="width: 75%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Notes</th>
                            <th>Reasons</th>
                            <th>HOD Approval</th>
                            <th>Registrar Approval</th>
                        </tr>
                    </thead>
                    @foreach ($deferements as $deferement)
                        
                        <tbody>
                            <tr>
                                <td>{{$deferement->id}}</td>
                                <td>{{$deferement->notes}}</td>
                                <td>{{$deferement->reasons}}</td>
                                <td>{{$deferement->hod_approval}}</td>
                                <td>{{$deferement->registrar_approval}}</td>
                            </tr>
                        </tbody>
                            
                    @endforeach
                </table>
            </div>
       @endif
    </div>
</x-app-layout>