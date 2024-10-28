<x-layout>
    <x-slot:heading>
        JObs Page
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
        <li>{{$job['title']}} <strong>Salary</strong>  {{$job['salary']}}</li>
        @endforeach
    </div>
</x-layout>