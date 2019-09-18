@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/dashboard">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">สินค้าและผลิตภัณฑ์</li>
                </ol>
            </div>
            <h4 class="page-title">สินค้าและผลิตภัณฑ์</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-2">
                        <select id="inputState" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->typename }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-right">
                            <a href="admin/product/create" class="btn btn-success btn-rounded"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มสินค้าใหม่</a>
                            <a href="admin/categories" class="btn btn-info btn-rounded"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มประเภทสินค้า</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                   </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                        <thead class="thead-light">
                        <tr>
                            <th class="all" style="width: 20px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                </div>
                            </th>
                            <th class="all">สินค้า</th>
                            <th>หมวดหมู่สินค้า</th>
                            <th>ราคาซื้อ</th>
                            <th>ราคาขาย</th>
                            <th>จำนวน</th>
                            <th>สถานะ</th>
                            <th style="width: 85px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($products as $product)
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                </div>
                            </td>
                            <td>
                                @if ($product->picture)
                                    <img src=" {{ image_upload('products/'. $product->picture) }} " alt="contact-img" title="contact-img" class="rounded mr-3" height="48" >
                                @endif
                                <p class="m-0 d-inline-block align-middle font-16">
                                <a href="" class="text-body"> {{ $product->name }}</a>
                                </p>
                            </td>
                            <td>
                                {{ $product->categories->typename }}
                            </td>
                            <td>
                                {{ $product->amount }}
                            </td>
                            <td>
                                {{ $product->standard_sell_price }}
                            </td>

                            <td>
                                {{ $product->unit }}
                            </td>
                            <td>
                                <span class="badge badge-success">พร้อมส่ง</span>
                            </td>

                            <td class="table-action">
                                <a href="" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-edit-modal">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                </a>
                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#product-remove-modal">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- modal content -->
                <div id="product-edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    
                </div>
                <div id="product-remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                  
                </div>
                <!-- /.modal -->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@stop
