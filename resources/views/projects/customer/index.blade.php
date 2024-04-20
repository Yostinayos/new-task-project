@extends('ourlayouts.main')
@section('main')
    @foreach ($customers as $customer)
       
        {{ $customer->name }}
        <br />
        {{ $customer->email }}
        <br />
        

        
        @foreach ($customer->projects as $project)
            
            {{ $project->name }}
            <br />
            {{ $project->description }}
            <br />
            {{ $project->starting_date }}
            <br />
            {{ $project->ending_date }}
            <br />
            {{ $project->user->name }}
        <br />
            
        @endforeach
    
    @endforeach
    
@endsection
