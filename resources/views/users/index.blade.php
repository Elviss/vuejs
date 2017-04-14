@extends('layouts.main')

@section('content')
    <table class="table table-bordered table-striped table-hover">
        <thread>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thread>

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