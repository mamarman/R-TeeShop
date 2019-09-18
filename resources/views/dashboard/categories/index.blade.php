@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="admin/dashboard">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <div class="col-lg-12">
            <div class="text-lg-right">
                <a href="admin/product" class="btn btn-success btn-rounded" >
                    <i class="mdi mdi-plus-circle mr-2"></i> เพิ่มสินค้า</a>
                <a href="admin/categories/create" class="btn btn-info btn-rounded" >
                    <i class="mdi mdi-plus-circle mr-2"></i> เพิ่มหมวดหมู่สินค้า</a>
            </div>
        </div>    
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>        
        @endif
        <div class="table-responsive">
                <table class="table table-centered w-100 dt-responsive nowrap" id="categories-datatable">
                    <thead class="thead-light">
                        <tr>
                            <td>No.</td>
                            <td>รหัสหมวดหมู่สินค้า</td>
                            <td>ชื่อหมวดหมู่สิ้นค้า</td>
                            <td style="width: 100px;">Action</td>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($categories as $categorys)
                            <tr> 
                                <td>{{ ++$i }}</td>
                                <td>{{ $categorys->id }}</td>
                                <td>{{ $categorys->typename }}</td>
                                <td>
                                    <a href="admin/categories/{{ $categorys->id }}/edit" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <form action="admin/categories/{{ $categorys->id }}" method="POST">
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
    </div>
    <div class="text-right">
        {{ $categories->appends(request()->input())->links() }}
    </div>
@endsection