@extends('ourlayouts.main')
@section('main')
    @foreach ($projects as $project)
        {{ $project->name }}
        <br>
        {{ $project->description }}
        <br>
        {{ $project->user->name }}
        <br>
        {{ $project->customer->name }}
       
        <br />
        {{ $project->customer->email }}
       
        <br />
            {{ $project->starting_date }}
            <br />
            {{ $project->ending_date }}
            <br />
        
        @endforeach
    @endsection
