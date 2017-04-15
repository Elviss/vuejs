@extends('layouts.main')

@section('content')
    <h1>@{{ title }}</h1>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop