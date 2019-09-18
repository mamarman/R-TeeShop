@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/products') }}">สินค้าและผลิตภัณฑ์</a></li>
                    <li class="breadcrumb-item active">รายละเอียดสินค้าและผลิตภัณฑ์</li>
                </ol>
            </div>
            <h4 class="page-title">รายละเอียดสินค้าและผลิตภัณฑ์</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Product image -->
                        <a href="javascript: void(0);" class="text-center d-block mb-4">
                            <img src="{{asset('/assets/images/products/woonsen-kilen200g.jpg')}}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                        </a>
                    </div> <!-- end col -->
                    <div class="col-lg-7">
                        <form class="pl-lg-4">
                            <!-- Product title -->
                            <h3 class="mt-0">วุ้นเส้น ยี่ห้อกิเลนคู่ 
                                <a href="javascript: void(0);" class="text-muted">
                                    <i class="mdi mdi-square-edit-outline ml-2"></i>
                                </a>
                            </h3>
                            <p class="mb-1">ความนิยม</p>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>

                            <!-- Product description -->
                            <div class="mt-4">
                                <h6 class="font-14">ราคาขาย :</h6>
                                <h3>$ 10.00 บาท</h3>
                            </div>

                            <!-- Product description -->
                            <div class="mt-4">
                                <h6 class="font-14">รายละเอียดสินค้า :</h6>
                                <p>วุ้นเส้น ยี่ห้อกิเลนคู่ เหนียวนุ่ม (ห่อสีน้ำเงิน) น้ำหนัก 60 กรัม</p>
                            </div>

                            <!-- Product stock -->
                            <div class="mt-3">
                                <h4><span class="badge badge-success-lighten">มีสินค้า</span></h4>
                            </div>

                            <!-- Product information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="font-14">จำนวนสินค้า:</h6>
                                        <p class="text-sm lh-150">1784</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">ราคาต้นทุน :</h6>
                                        <p class="text-sm lh-150">$ 5 บาท</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">ราคาขาย :</h6>
                                        <p class="text-sm lh-150">$ 10 บาท</p>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div> <!-- end col -->
                </div> <!-- end row-->

                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-centered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>รายชื่อร้านค้า</th>
                                <th>ราคาขาย</th>
                                <th>จำนวนขายทั้งหมด</th>
                                <th>รวมเป็นเงิน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ร้าน ป้า ก.</td>
                                <td>$ 10.00 บาท</td>
                                <td>
                                    478
                                </td>
                                <td>$ 4,780.00 บาท</td>
                            </tr>
                            <tr>
                                <td>ร้าน ป้า ข.</td>
                                <td>$ 09.50 บาท</td>
                                <td>
                                   100
                                </td>
                                <td>$ 950.00 บาท</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>


@stop
