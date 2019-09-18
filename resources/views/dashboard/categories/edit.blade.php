@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/dashboard">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="admin/categories">ระบบจัดการลูกค้า</a></li>
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
                <form action="admin/categories/{{ $categories->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row mb-12">
                        <label for="" class="col-6 col-form-label">รหัสประเภทสินค้า</label>
                            <div class="col-6">
                                <input type="text" name="id"  disabled class="form-control" value="{{ $categories->id }}">
                            </div>
                    <hr />
                        <label for="" class="col-6 col-form-label">ชื่อประเภทสินค้า</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="typename" value="{{ $categories->typename }}">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="form-group row mb-3">
                            <div class="col-2">
                                <a href="admin/categories" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
                            </div>
                            <div class="col-2">
                                <a href="admin/categories/{{ $categories->id }}/edit" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
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
@endsection