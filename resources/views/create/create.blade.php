@extends('create.master')
@section('title','Control Database')
@section('content')
    <h1>Add Data</h1>
    <div class="container"> <!-- database ตอน 3 -->
        <div class="row">
            <div class="col-md-12">
                <h3 align="center">add data</h3>
                <form method="post" action="{{url('user')}}'">
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