@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/user">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="">ระบบจัดพนักงาน</a></li>
                    <li class="breadcrumb-item active">แก้ไขข้อมูลพนักงาน</li>
                </ol>
            </div>
            <h4 class="page-title">แก้ไขข้อมูลพนักงาน</h4>
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
                <form action="admin/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">Username</label>
                            <div class="col-3">
                                <input type="test" name="username" disabled value="{{ $user->username }}" class="form-control" >
                            </div>
                            <label for="" class="col-2 col-form-label">Password</label>
                            <div class="col-3">
                                <input type="password" name="password" disabled value="{{ $user->password }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">E-mail</label>
                            <div class="col-5">
                                <input type="email" name="email" disabled value="{{ $user->email }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                                <label for="" class="col-2 col-form-label">คำนำหน้าชื่อ</label>
                                <div class="col-2">
                                    <select name="title_id" class="form-control">
                                        <option>นาย</option>
                                        <option>นาง</option>
                                        <option>นางสาว</option>
                                    </select>
                                </div>
                                <label for="" class="col-1 col-form-label">ชื่อ</label>
                                <div class="col-3">
                                    <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" >
                                </div>
                                <label for="" class="col-1 col-form-label">นามสกุล</label>
                                <div class="col-3">
                                    <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" >
                                </div>
                            </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">วันเกิด</label>
                            <div class="col-3">
                                <input type="date" name="birthdate" value="{{ $user->birthdate }}" class="form-control" >
                            </div>
                            <label for="" class="col-2 col-form-label">หมายเลขพนักงาน</label>
                            <div class="col-3">
                                <input type="text" name="personal_id" value="{{ $user->personal_id }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">ที่อยู่เลขที่</label>
                            <div class="col-2">
                                <input type="text" name="address_no" value="{{ $user->address_no }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">หมู่</label>
                            <div class="col-3">
                                <input type="text" name="moo" value="{{ $user->moo }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">หมู่บ้าน</label>
                            <div class="col-3">
                                <input type="text" name="village" value="{{ $user->village }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">ซอย</label>
                            <div class="col-2">
                                <input type="text" name="soi" value="{{ $user->soi }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">ถนน</label>
                            <div class="col-3">
                                <input type="text" name="road" value="{{ $user->road }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-1 col-form-label">ตำบล</label>
                            <div class="col-3">
                                 <input type="text" name="tumbon" value="{{ $user->tumbon }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">อำเภอ</label>
                            <div class="col-3">
                                <input type="text" name="amphur" value="{{ $user->amphur }}" class="form-control" >
                            </div>
                            <label for="" class="col-2 col-form-label">จังหวัด</label>
                            <div class="col-2">
                                <input type="text" name="province" value="{{ $user->province }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">รหัสไปรษณีย์</label>
                            <div class="col-2">
                                <input type="text" name="postcode" value="{{ $user->postcode }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">มือถือ</label>
                            <div class="col-3">
                                <input type="text" name="telephone" value="{{ $user->telephone }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">รหัสประจำช่อง</label>
                            <div class="col-2">
                                <input type="text" name="channel_id" value="{{ $user->channel_id }}" class="form-control" >
                            </div>
                            <label for="" class="col-1 col-form-label">Url ประจำช่อง</label>
                            <div class="col-3">
                                <input type="text" name="channel_url" value="{{ $user->channel_url }}" class="form-control" >
                            </div>
                           
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">เพิ่มเติม</label>
                            <div class="col-10">
                                <input type="text" name="other_contact" value="{{ $user->other_contact }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                            <label for="" class="col-2 col-form-label">updated_user</label>
                            <div class="col-10">
                                <input type="text" name="updated_user" value="{{ $user->updated_user }}"class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row mb-12">
                                <label for="" class="col-2 col-form-label">remember_token</label>
                                <div class="col-10">
                                    <input type="text" name="remember_token" value="{{ $user->remember_token }}"class="form-control" >
                                </div>
                            </div>
                        <hr>
                        <div class="col-lg-12">
                                <div class="form-group row mb-3">
                                    <div class="col-2">
                                        <a href="admin/user" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
                                    </div>
                                    <div class="col-2">
                                        <a href="admin/user/{{ $user->id }}/edit" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
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
