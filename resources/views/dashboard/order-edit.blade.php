@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/order/new') }}">ระบบจัดการรายการจัดส่ง-ทำรายการใหม่</a></li>
                    <li class="breadcrumb-item active">ทำรายการใหม่</li>
                </ol>
            </div>
            <h4 class="page-title">ระบบจัดการรายการจัดส่ง-ทำรายการใหม่</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4>ร้านค้า</h4>
                <form>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">ชื่อร้านค้า</label>
                        <div class="col-9">
                            <select id="inputState" class="form-control">
                                <option>กรุณาเลือกร้านค้า</option>
                                <option>ร้าน ก.</option>
                                <option>ร้าน ข.</option>
                                <option>ร้าน ค.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">ชื่อเจ้าของร้าน</label>
                        <div class="col-9">
                            <input type="text" id="simpleinput" class="form-control" value="ป้า ก.">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">รายละเอียด</label>
                        <label for="inputEmail3" class="col-9 col-form-label">ที่อยู่ : ตลาดฟ้าไทยมหาวิทยาลัยแม่ฟ้าหลวง 333 หมู่ 1 ต.ท่าสุด อ.เมือง จ.เชียงราย 57100 โทร. 081-1234567</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4>สินค้า</h4>
                <form>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-2 col-form-label">ชื่อสินค้า</label>
                        <div class="col-10">
                            <select id="inputState" class="form-control">
                                <option>กรุณาเลือกสินค้า</option>
                                <option>วุ้นเส้นกิเลนคู่</option>
                                <option>เต้าหู้ไข่ตรานางพยาบาล</option>
                                <option>อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-2 col-form-label">จำนวน</label>
                        <div class="col-4">
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
                        </div>
                        <label for="inputEmail3" class="col-3 col-form-label">สต๊อคที่เหลือ : </label>
                        <label for="inputEmail3" class="col-3 col-form-label">200 ชิ้น</label>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a href="#" class="btn btn-success btn-rounded" style="width:100%;"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มสินค้า</a>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-centered w-100 dt-responsive nowrap" id="order-details-datatable">
        <thead class="thead-light">
            <tr>
                <th width="5%" style="text-align:center;">ลำดับ</th>
                <th width="35%" style="text-align:center;">สินค้า</th>
                <th width="20%" style="text-align:center;">หมวดหมู่สินค้า</th>
                <th width="10%" style="text-align:center;">ราคา</th>
                <th width="10%" style="text-align:center;">จำนวน</th>
                <th width="10%" style="text-align:center;">สถานะ</th>
                <th width="10%" style="text-align:center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center;">
                    1.
                </td>
                <td>
                    <img src="{{asset('/assets/images/products/woonsen-kilen200g.jpg')}}" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                    <p class="m-0 d-inline-block align-middle font-16">
                        <a href="{{ url('/product-detail') }}" class="text-body">วุ้นเส้นกิเลนคู่ 200 กรัม</a>
                        <br/>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                    </p>
                </td>
                <td style="text-align:center;">
                    เส้น
                </td>
                <td style="text-align:center;">
                    $20
                </td>
                <td style="text-align:center;">
                    100
                </td>
                <td style="text-align:center;">
                    <span class="badge badge-success">พร้อมส่ง</span>
                </td>

                <td class="table-action">
                    <a href="{{ url('/product-detail') }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-edit-modal">
                        <i class="mdi mdi-square-edit-outline"></i>
                    </a>
                    <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-remove-modal">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    2.
                </td>
                <td>
                    <img src="{{asset('/assets/images/products/nurse-toful.jpg')}}" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                    <p class="m-0 d-inline-block align-middle font-16">
                        <a href="{{ url('/product-detail') }}" class="text-body">เต้าหู้ไข่ตรานางพยาบาล</a>
                        <br/>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                        <span class="text-warning mdi mdi-star"></span>
                    </p>
                </td>
                <td style="text-align:center;">
                    เต้าหู้
                </td>
                <td style="text-align:center;">
                    $10
                </td>
                <td style="text-align:center;">
                    5
                </td>
                <td style="text-align:center;">
                    <span class="badge badge-danger">ใกล้หมด</span>
                </td>

                <td class="table-action">
                    <a href="{{ url('/product-detail') }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-edit-modal">
                        <i class="mdi mdi-square-edit-outline"></i>
                    </a>
                    <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-remove-modal">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-lg-12">
    <div class="form-group row mb-3">
        <div class="col-2">
            <a href="{{ url('/order/new') }}" class="btn btn-primary btn-rounded" style="width:100%;"><i class="mdi mdi-arrow-left-circle mr-2"></i> ย้อนกลับ</a>
        </div>
        <div class="col-2">
            <a href="#" class="btn btn-warning btn-rounded" style="width:100%;"><i class="mdi mdi-refresh mr-2"></i> เริ่มใหม่</a>
        </div>
        <div class="col-3"></div>
        <div class="col-2">
            <a href="#" class="btn btn-secondary btn-rounded" style="width:100%;"><i class="mdi mdi-content-save mr-2"></i> บันทึกรายการ</a>
        </div>
        <div class="col-3">
            <a href="#" class="btn btn-success btn-rounded" style="width:100%;"><i class="mdi mdi-printer mr-2"></i> บันทึกรายการและออกใบเสร็จ</a>
        </div>
    </div>
</div>
@stop
