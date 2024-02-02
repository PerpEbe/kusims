<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

   <div class="pt-3">
        <div class="float-left">
            <h2 class="text">Reporting</h2>        
    </div>
    <div class="float-right">
            <a class="btn btn-primary" href="{{route('reporting.create')}}">Report</a>
    </div>
   </div>
   <br>
   <hr class="mt-5">
   
   @if(count($reports)>0)
        <div class="table table-responsive mt-5">
            <table style="width: 75%">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Semester</th>
                        <th>Date Reported</th>
                    </tr>
                </thead>
                @foreach ($reports as $report)
                    
                    <tbody>
                        <tr>
                            <td>{{$report->year}}</td>
                            <td>{{$report->semester}}</td>
                            <td>{{$report->created_at->format('d/m/20y')}}</td>
                        </tr>
                    </tbody>
                        
                @endforeach
            </table>
        </div>
    @else
        <p class="alert alert-danger">You have not Reported for this Semister</p>
   @endif
   
   
</x-app-layout>