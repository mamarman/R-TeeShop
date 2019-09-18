@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">ระบบจัดการรายการจัดส่ง-ทำรายการย้อนหลัง</li>
                </ol>
            </div>
            <h4 class="page-title">ระบบจัดการรายการจัดส่ง-ทำรายการย้อนหลัง</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <div class="text-lg-right">
                            <a href="{{ url('/order-edit') }}" class="btn btn-success btn-rounded"><i class="mdi mdi-basket mr-1"></i> เพิ่มรายการย้อนหลัง</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 20px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                </div>
                            </th>
                            <th>เลขที่รายการ</th>
                            <th>วันที่ทำรายการ</th>
                            <th>สถานะการชำระเงิน</th>
                            <th>ยอดทั้งหมด</th>
                            <th>ชื่อลูกค้า</th>
                            <th>สถานะรายการ</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9708</a> </td>
                            <td>
                                August 05 2018 <small class="text-muted">10:29 PM</small>
                            </td>
                            <td>
                                <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> ชำระเงินแล้ว</span></h5>
                            </td>
                            <td>
                                $100
                            </td>
                            <td>
                                ร้าน ก
                            </td>
                            <td>
                                <h5><span class="badge badge-success-lighten">รายการสำเร็จ</span></h5>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="{{ url('/order-edit') }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9707</a> </td>
                            <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                            <td>
                                <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> รอการชำระเงิน</span></h5>
                            </td>
                            <td>
                                $1,458.50
                            </td>
                            <td>
                                ร้าน ข
                            </td>
                            <td>
                                <h5><span class="badge badge-warning-lighten">กำลังดำเนินการ</span></h5>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="{{ url('/order-edit') }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9705</a> </td>
                            <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                            <td>
                                <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> ชำระเงินแล้ว</span></h5>
                            </td>
                            <td>
                                $215
                            </td>
                            <td>
                                ร้าน ค
                            </td>
                            <td>
                                <h5><span class="badge badge-success-lighten">รายการสำเร็จ</span></h5>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="{{ url('/order-edit') }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                </div>
                            </td>
                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9704</a> </td>
                            <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                            <td>
                                <h5><span class="badge badge-danger-lighten"><i class="mdi mdi-cancel"></i> ไม่มีการชำระเงิน</span></h5>
                            </td>
                            <td>
                                $2,514.50
                            </td>
                            <td>
                                ร้าน ง
                            </td>
                            <td>
                                <h5><span class="badge badge-danger-lighten">ยกเลิกรายการ</span></h5>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="{{ url('/order-edit') }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
