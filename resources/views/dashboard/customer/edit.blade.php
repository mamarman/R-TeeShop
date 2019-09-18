@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/customer">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="">ระบบจัดการลูกค้า</a></li>
                    <li class="breadcrumb-item active">เพิ่มลูกค้า</li>
                </ol>
            </div>
            <h4 class="page-title">แก้ไขข้อมูลลูกค้า</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@include('admin.elements.errors')
@include('admin.elements.message')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="admin/customer/{{ $customer->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group row mb-12">
                        <div class="col-4">
                            <div class="row">    
                                <label for="" class="col-6 col-form-label">รหัสลูกค้า</label>
                                <div class="col-6">
                                    <input type="text" id="simpleinput" disabled class="form-control" value="{{ $customer->id }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <label for="" class="col-2 col-form-label">ชื่อร้านค้า</label>
                                <div class="col-8">
                                    <input type="text" name="shopname" value="{{ $customer->shopname }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">วันเกิด</label>
                        <div class="col-2">
                            <input type="date" name="birth_date" value="{{ $customer->birth_date }}" class="form-control" >
                        </div>
                        <label for="" class="col-2 col-form-label">หมายเลขบัตรประชาชน</label>
                        <div class="col-3">
                            <input type="text" name="nationality_id" value="{{ $customer->nationality_id }}" class="form-control" >
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
                            <input type="text" name="first_name" value="{{ $customer->first_name }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">นามสกุล</label>
                        <div class="col-3">
                            <input type="text" name="last_name" value="{{ $customer->last_name }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">ที่อยู่เลขที่</label>
                        <div class="col-2">
                            <input type="text" name="address" value="{{ $customer->address }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">หมู่</label>
                        <div class="col-3">
                            <input type="text" name="moo" value="{{ $customer->moo }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">หมู่บ้าน</label>
                        <div class="col-3">
                            <input type="text" name="village" value="{{ $customer->village }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">ซอย</label>
                        <div class="col-2">
                            <input type="text" name="soi" value="{{ $customer->soi }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">ถนน</label>
                        <div class="col-3">
                            <input type="text" name="road" value="{{ $customer->road }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">จังหวัด</label>
                        <div class="col-2">
                            <input type="text" name="province" value="{{ $customer->province }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">อำเภอ</label>
                        <div class="col-3">
                            <input type="text" name="district" value="{{ $customer->district }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">ตำบล</label>
                        <div class="col-3">
                            <input type="text" name="sub_district" value="{{ $customer->sub_district }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">รหัสไปรษณีย์</label>
                        <div class="col-2">
                            <input type="text" name="zipcode" value="{{ $customer->zipcode }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">มือถือ</label>
                        <div class="col-3">
                            <input type="text" name="mobile_phone" value="{{ $customer->mobile_phone }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">Line</label>
                        <div class="col-2">
                            <input type="text" name="line_id" value="{{ $customer->line_id }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">Facebook</label>
                        <div class="col-3">
                            <input type="text" name="facebook" value="{{ $customer->facebook }}" class="form-control" >
                        </div>
                        <label for="" class="col-1 col-form-label">E-mail</label>
                        <div class="col-3">
                            <input type="email" name="email" value="{{ $customer->email }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">เพิ่มเติม</label>
                        <div class="col-10">
                            <input type="text" name="note" value="{{ $customer->note }}" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="" class="col-2 col-form-label">รูปภาพโปรไฟล์</label>
                        <div class="col-10">
                            <input type="file" name="file" class="" >
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <div class="col-2"></div>
                        <div class="col-4">
                            @if ($customer->file)
                                <img width="150" src="{{ image_upload('customers-'. $customer->file) }}" alt="" class="mr-2 rounded-circle">
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="form-group row mb-3">
                            <div class="col-2">
                                <a href="admin/customer" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
                            </div>
                            <div class="col-2">
                                <a href="admin/customer/{{ $customer->id }}/edit" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-success btn-rounded" style="width:100%;"><i class="mdi mdi-plus-circle mr-2"></i> บันทึกการแก้ไขข้อมูล </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
