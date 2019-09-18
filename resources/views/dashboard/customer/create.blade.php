@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/deshboard">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">ระบบจัดการลูกค้า</a></li>
                    <li class="breadcrumb-item active">เพิ่มลูกค้า</li>
                </ol>
            </div>
            <h4 class="page-title">เพิ่มลูกค้า</h4>
        </div>
    </div>
</div>

@include('admin.elements.errors')
@include('admin.elements.message')

@csrf
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="admin/customer" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">ชื่อร้านค้า</label>
                        <div class="col-8">
                            <input type="text" name="shopname" value="{{ old('shopname') }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">วันเกิด</label>
                        <div class="col-3">
                            <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control" >
                        </div>
                        <label for="" class="col-2 col-form-label">หมายเลขบัตรประชาชน</label>
                        <div class="col-3">
                            <input type="text" name="nationality_id" value="{{ old('nationality_id') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">คำนำหน้าชื่อ</label>
                        <div class="col-2">
                            <select name="title_name" class="form-control">
                                <option>นาย</option>
                                <option>นาง</option>
                                <option>นางสาว</option>
                            </select>
                        </div>
                        <label for="" class="col-1 col-form-label">ชื่อ</label>
                        <div class="col-3">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">นามสกุล</label>
                        <div class="col-3">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">ที่อยู่เลขที่</label>
                        <div class="col-2">
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">หมู่</label>
                        <div class="col-3">
                            <input type="text" name="moo" value="{{ old('moo') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">หมู่บ้าน</label>
                        <div class="col-3">
                            <input type="text" name="village" value="{{ old('village') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">ซอย</label>
                        <div class="col-2">
                            <input type="text" name="soi" value="{{ old('soi') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">ถนน</label>
                        <div class="col-3">
                            <input type="text" name="road" value="{{ old('road') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">จังหวัด</label>
                        <div class="col-2">
                            <input type="text" name="province" value="{{ old('province') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">อำเภอ</label>
                        <div class="col-3">
                            <input type="text" name="district" value="{{ old('district') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">ตำบล</label>
                        <div class="col-3">
                            <input type="text" name="sub_district" value="{{ old('sub_district') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">รหัสไปรษณีย์</label>
                        <div class="col-2">
                            <input type="text" name="zipcode" value="{{ old('zipcode') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">มือถือ</label>
                        <div class="col-3">
                            <input type="text" name="mobile_phone" value="{{ old('mobile_phone') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">Line</label>
                        <div class="col-2">
                            <input type="text" name="line_id" value="{{ old('line_id') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">Facebook</label>
                        <div class="col-3">
                            <input type="text" name="facebook" value="{{ old('facebook') }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">E-mail</label>
                        <div class="col-3">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">เพิ่มเติม</label>
                        <div class="col-10">
                            <input type="text" name="note" value="{{ old('note') }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">รูปภาพโปรไฟล์</label>
                        <div class="col-10">
                            <input type="file" name="file" class="" >
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="form-group row mb-3">
                            <div class="col-2">
                                <a href="admin/customer" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
                            </div>
                            <div class="col-2">
                                <a href="admin/customer/create" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-success btn-rounded" style="width:100%;"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มลูกค้า</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
