

@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">

            <nav class="navbar navbar-light bg-light">
                <form action="{{route('search')}}" method="POST" class="form-inline">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" name="searchable" placeholder="Search" aria-label="Search">
                    <div class="m-auto mt-2 w-100">
                        <button class="w-100 btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>

                </form>
            </nav>

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
