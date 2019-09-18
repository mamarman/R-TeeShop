@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">ระบบจัดการรายการจัดส่ง</a></li>
                    <li class="breadcrumb-item active">รายการรอเรียกเก็บ</li>
                </ol>
            </div>
            <h4 class="page-title">รายการรอเรียกเก็บ</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
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
                            <th>ชื่อร้าน-ลูกค้า</th>
                            <th>เริ่มวันที่ค้างชำระ</th>
                            <th>สิ้นสุดวันค้างชำระ</th>
                            <th>ยอดที่ค้างทั้งหมด</th>
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
                            <td>
                                ร้าน ก
                            </td>
                            <td>
                                August 05 2018
                            </td>

                            <td>
                                August 05 2018
                            </td>
                            <td>
                                $100
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                </div>
                            </td>
                            <td>
                                ร้าน ข
                            </td>
                            <td>August 04 2018</td>

                            <td>
                                August 04 2018
                            </td>
                            <td>
                                $1,458.50
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                </div>
                            </td>
                            <td>
                                ร้าน ค
                            </td>
                            <td>August 03 2018</td>

                            <td>
                                August 03 2018
                            </td>
                            <td>
                                $215
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                </div>
                            </td>
                            <td>
                                ร้าน ง
                            </td>
                            <td>May 22 2018</td>

                            <td>
                                May 22 2018
                            </td>
                            <td>
                                $2,514.50
                            </td>

                            <td>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
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