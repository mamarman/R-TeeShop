@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/dashboard">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">ระบบจัดการลูกค้า</li>
                </ol>
            </div>
            <h4 class="page-title">ระบบจัดการลูกค้า</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@include('admin.elements.message')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <div class="text-lg-right">
                            <a href="admin/customer/create" class="btn btn-success btn-rounded"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มลูกค้า</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                     <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="customer-datatable">
                        <thead>
                        <tr>
                            <th>ชื่อร้าน</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>เบอร์โทร</th>
                            <th>email</th>
                            <th>Line</th>
                            <th>Facebook</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($customers as $customer)
                        <tr>
                            <td>
                                {{ $customer->shopname }}
                            </td>
                            <td class="table-user">
                                @if ($customer->file)
                                    <img src="{{ image_upload('customers/'. $customer->file) }}" alt="" class="mr-2 rounded-circle">
                                @endif
                                <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $customer->first_name}} {{ $customer->last_name}}</a>
                            </td>
                            <td>
                                {{ $customer->mobile_phone }}
                            </td>
                            <td>
                                {{ $customer->email }}
                            </td>
                            <td>
                                {{ $customer->line_id }}
                            </td>
                            <td>
                                {{ $customer->facebook }}
                            </td>
                            <td>
                                
                                <a href="admin/customer/{{ $customer->id }}" class="action-icon"><i class="far fa-eye"></i></a>
                                <a href="admin/customer/{{ $customer->id }}/edit" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                <form action="admin/customer/{{ $customer->id }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-dekete"><i class="mdi mdi-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $customers->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
