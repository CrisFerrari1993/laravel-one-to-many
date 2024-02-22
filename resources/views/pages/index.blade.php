@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            <li><h2><b>User Name: </b>{{$user->name}}</h2></li>
            <ul>
                <h4>Projects:</h4>
                @foreach ($user->projects as $project)
                        <li>
                            title: <h5>{{$project->title}}</h5><br>
                            framework: {{$project->framework}} <br>
                            description: {{$project->description}}
                        </li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection
