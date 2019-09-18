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
                    <li class="breadcrumb-item active">ใบเสร็จรับเงิน</li>
                </ol>
            </div>
            <h4 class="page-title">ใบเสร็จรับเงิน</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Invoice Logo-->
                <div class="clearfix">
                    <div class="float-left mb-3">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                    </div>
                    <div class="float-right">
                        <h4 class="m-0 d-print-none">ใบเสร็จรับเงิน</h4>
                    </div>
                </div>

                <!-- Invoice Detail-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="float-left mt-3">
                            <p><b>ร้าน ป้า ก.</b></p>
                            <p class="text-muted font-13">ที่อยู่ : ตลาดฟ้าไทยมหาวิทยาลัยแม่ฟ้าหลวง 333 หมู่ 1 ต.ท่าสุด อ.เมือง จ.เชียงราย 57100 <br/>โทร. 081-1234567</p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-sm-4 offset-sm-2">
                        <div class="mt-3 float-sm-right">
                            <p class="font-13"><strong>วันที่ทำรายการ: </strong> &nbsp;&nbsp;&nbsp; 17 มกราคม 2562</p>
                            <p class="font-13"><strong>การชำระเงิน: </strong> <span class="badge badge-success float-right">เงินสด</span></p>
                            <p class="font-13"><strong>หมายเลขใบเสร็จ: </strong> <span class="float-right">#123456</span></p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-4">
                    <div class="col-sm-4">
                        <h6>ที่อยู่ออกใบเสร็จ</h6>
                        <address>
                            ตลาดฟ้าไทยมหาวิทยาลัยแม่ฟ้าหลวง<br>
                            333 หมู่ 1 ต.ท่าสุด<br>
                            อ.เมือง จ.เชียงราย 57100<br>
                            <abbr title="Phone">โทร :</abbr> (123) 456-7890
                        </address>
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <h6>ที่อยู่การจัดส่งสินค้า</h6>
                        <address>
                            ตลาดฟ้าไทยมหาวิทยาลัยแม่ฟ้าหลวง<br>
                            333 หมู่ 1 ต.ท่าสุด<br>
                            อ.เมือง จ.เชียงราย 57100<br>
                            <abbr title="Phone">โทร :</abbr> (123) 456-7890
                        </address>
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="text-sm-right">
                            <img src="assets/images/barcode.png" alt="barcode-image" class="img-fluid mr-2" />
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                <tr><th>#</th>
                                    <th>สินค้า</th>
                                    <th>จำนวน</th>
                                    <th>ราคาต่อหน่วย</th>
                                    <th class="text-right">รวมทั้งสิ้น</th>
                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>วุ้นเส้นกิเลนคู่</b> <br/>
                                        วุ้นเส้นกิเลนคู่ขนาด 200 กรัม
                                    </td>
                                    <td>2</td>
                                    <td>$10.00</td>
                                    <td class="text-right">$20.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <b>เต้าหู้ไข่</b> <br/>
                                        เต้าหู้ไข่ตรานางพยาบาลขนาด 60 กรัม
                                    </td>
                                    <td>3</td>
                                    <td>$10.00</td>
                                    <td class="text-right">$30.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix pt-3">
                            <h6 class="text-muted">หมายเหตุ :</h6>
                            <small>
                                สินค้ารับเปลี่ยนภายในระยะเวลา 3 วัน และสินค้าต้องอยู่ในสภาพเดิม<br/>
                                หากต้องการแจ้งคืนสินค้า โทร. 02-1234567
                            </small>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-right mt-3 mt-sm-0">
                            <p><b>ยอดรวม:</b> <span class="float-right">$50.00</span></p>
                            <p><b>VAT (7%):</b> <span class="float-right">$3.50</span></p>
                            <h3>รวมทั้งหมด $53.50 บาท</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="d-print-none mt-4">
                    <div class="text-right">
                        <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> พิมพ์ใบเสร็จ</a>
                        <a href="javascript: void(0);" class="btn btn-info">แก้ไขสถานะการชำระเงิน</a>
                    </div>
                </div>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>


@stop
