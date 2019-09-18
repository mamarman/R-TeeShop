@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/customer') }}">ระบบจัดการลูกค้า</a></li>
                    <li class="breadcrumb-item active">เพิ่มลูกค้า</li>
                </ol>
            </div>
            <h4 class="page-title">เพิ่มลูกค้า</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">รหัสลูกค้า</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="123456">
                        </div>
                        <label for="inputEmail3" class="col-2 col-form-label">ชื่อร้านค้า</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="ป้า ก.">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">วันเกิด</label>
                        <div class="col-3">
                                <input type="date" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-2 col-form-label">หมายเลขบัตรประชาชน</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">คำนำหน้าชื่อ</label>
                        <div class="col-2">
                                <select id="inputState" class="form-control">
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">ชื่อ</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">นามสกุล</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">ที่อยู่เลขที่</label>
                        <div class="col-2">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">หมู่</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">หมู่บ้าน</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">ซอย</label>
                        <div class="col-2">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">ถนน</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">อื่นๆ</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">จังหวัด</label>
                        <div class="col-2">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">อำเภอ</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">ตำบล</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">รหัสไปรษณีย์</label>
                        <div class="col-2">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">เบอร์โทร</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">มือถือ</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">Line</label>
                        <div class="col-2">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">Facebook</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                        <label for="inputEmail3" class="col-1 col-form-label">E-mail</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">เพิ่มเติม</label>
                        <div class="col-10">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-12">
                        <label for="inputEmail3" class="col-2 col-form-label">ไฟล์รูปภาพ</label>
                        <div class="col-3">
                            <input type="text" id="simpleinput" class="form-control" value="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="form-group row mb-3">
        <div class="col-2">
            <a href="{{ url('/customer') }}" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
        </div>
        <div class="col-2">
            <a href="#" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
        </div>
        <div class="col-6"></div>
        <div class="col-2">
            <a href="#" class="btn btn-success btn-rounded" style="width:100%;"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มลูกค้า</a>
        </div>
    </div>
</div>
@stop
