@extends('user.master')
@section('title','Control Database')
@section('content')
    <h1>Add Data</h1>
    <div class="container"> <!-- database ตอน 7 -->
        <div class="row">
            <div class="col-md-12">
                <h3 align="center">add data</h3>

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                </div>
                @endif

                <form method="post" action="{{url('user')}}">  <!-- ส่งค่าไป route -->
                    {{csrf_field()}}    <!--cross-site request forgery-->
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="บันทึก"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@endsection