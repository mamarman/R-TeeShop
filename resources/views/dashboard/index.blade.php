@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <div class="input-group-append">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="mdi mdi-calendar-range font-13"></i>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ml-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ml-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">จำนวนลูกค้า</h5>
                        <h3 class="mt-3 mb-3">254</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">เปรียบเทียบจากเดือนที่แล้ว</span>
                        </p>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-cart-plus widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">รายการสั่งซื้อ</h5>
                        <h3 class="mt-3 mb-3">543</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                            <span class="text-nowrap">เปรียบเทียบจากเดือนที่แล้ว</span>
                        </p>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-currency-usd widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">กำไร</h5>
                        <h3 class="mt-3 mb-3">26,254 บาท</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                            <span class="text-nowrap">เปรียบเทียบจากเดือนที่แล้ว</span>
                        </p>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-pulse widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Growth">อัตราการเติบโต</h5>
                        <h3 class="mt-3 mb-3">+ 30.56%</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                            <span class="text-nowrap">เปรียบเทียบจากเดือนที่แล้ว</span>
                        </p>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-sm btn-link float-right mb-3">Export
                    <i class="mdi mdi-download ml-1"></i>
                </a>
                <h4 class="header-title mt-2">สินค้าขายดีประจำเดือน</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <tbody>
                        <tr>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">ลูกชิ้นหมู</h5>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$120.00</h5>
                                <span class="text-muted font-13">ราคาขาย</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">100</h5>
                                <span class="text-muted font-13">จำนวน</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$12,000.00</h5>
                                <span class="text-muted font-13">รวมเป็นเงิน</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">เต้าหู้ไข่</h5>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$10.50</h5>
                                <span class="text-muted font-13">ราคาขาย</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">1,000</h5>
                                <span class="text-muted font-13">จำนวน</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$10,500.00</h5>
                                <span class="text-muted font-13">รวมเป็นเงิน</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">วุ้นเส้น</h5>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$20.00</h5>
                                <span class="text-muted font-13">ราคาขาย</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">500</h5>
                                <span class="text-muted font-13">จำนวน</span>
                            </td>
                            <td>
                                <h5 class="font-14 mb-1 font-weight-normal">$10,000.00</h5>
                                <span class="text-muted font-13">รวมเป็นเงิน</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">เปรียบเทียบรายได้เฉลี่ยปีที่แล้วกับปีนี้</h4>

                <div style="height: 263px;" class="chartjs-chart">
                    <canvas id="high-performing-product"></canvas>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->

    </div> <!-- end col -->
</div>
<!-- end row -->
@stop
