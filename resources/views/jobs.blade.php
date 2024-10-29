<x-layout>
    <x-slot:heading>
        JObs Page
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
        <a href="/job/{{$job['id']}}">
            <li>{{$job['title']}} <strong>Salary</strong> {{$job['salary']}}</li>
        </a>
        @endforeach
    </div>
</x-layout>