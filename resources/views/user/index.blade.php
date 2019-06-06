@extends('user.master')
@section('title','Welcome Homepage')
@section('content')
    <h1>HomePage</h1>
    <a href="{{route('user.create')}}" class="btn btn-success">ADD Data</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped" align="center">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        @foreach($users as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['fname']}}</td>
                            <td>{{$row['lname']}}</td>
                            <td><a href="#" class="btn btn-primary">EDIT</a></td>
                            <td><a href="#" class="btn btn-danger">DELETE</a></td>
                        </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop