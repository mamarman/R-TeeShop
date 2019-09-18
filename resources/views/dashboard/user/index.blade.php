@extends('layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="admin/dashboard">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">ระบบจัดพนักงาน</li>
                </ol>
            </div>
            <h4 class="page-title">ระบบจัดการพนักงาน</h4>
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
                            <a href="admin/user/create" class="btn btn-success btn-rounded"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มลูกค้า</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                     <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="user-datatable">
                        <thead>
                        <tr>
                            <th>username</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>เบอร์โทร</th>
                            <th>email</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->username }}
                            </td>
                            <td>
                                {{ $user->firstname}} {{ $user->lastname}}</a>
                            </td>
                            <td>
                                {{ $user->personal_id }}
                            </td>
                            <td>
                                {{ $user->mobile_phone }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                
                                <a href="admin/user/{{ $user->id }}" class="action-icon"><i class="far fa-eye"></i></a>
                                <a href="admin/user/{{ $user->id }}/edit" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

                                <form action="admin/user/{{ $user->id }}" method="POST" class="delete">
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
                    {{ $users->appends(request()->input())->links() }}

                    <script>
                            $(".delete").on("submit", function(){
                                return confirm("Are you sure?");
                            });
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
