@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>เพิ่มข้อมูลประเภทสินค้า</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="admin/categories"> Back</a>
            </div>
        </div>
    </div>
       
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> กรุณากรอกข้อมูลที่ให้ครบ<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       
    <form action="admin/categories" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>TypeName:</strong>
                    <input type="text" name="typename" class="form-control" placeholder="ชื่อประเภท">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-rounded"><i class="mdi mdi-plus-circle mr-2"></i>เพิ่มประเภทสินค้า</button>
            </div>
        </div>
    </form>
@endsection