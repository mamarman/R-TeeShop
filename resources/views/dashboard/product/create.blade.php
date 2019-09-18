@extends('layouts.template')
@section('content')
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
                <h4 class="page-title">เพิ่มลูกค้า</h4>
            <div class="text-center mt-2 mb-4">
                <a href="index.html" class="text-success">
                    <span><img src="{{asset('/assets/images/logo-dark.png')}}" alt="" height="18"></span>
                </a>
            </div>

            @include('admin.elements.errors')
            @include('admin.elements.message')
            
            <form action="admin/product" method="POST" enctype="multipart/form-data" class="pl-3 pr-3">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="productName"><span style="color:red;" >* </span>ชื่อสินค้า</label>
                <input class="form-control" type="text"  name="name" value=" {{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="productName"><span style="color:red;" >* </span>รายละเอียดสินค้า</label>
                    <textarea class="form-control" name ="desc" rows="5" value={{old('desc')}}></textarea>
                </div>

                <div class="form-group">
                    <label for="productGroup"><span style="color:red;" >* </span>หมวดหมู่สินค้า</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->typename }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productGroup"><span style="color:red;" >* </span>หน่วยสินค้า</label>
                            <select class="form-control" name="unit">
                                <option>ชิ้น</option>
                                <option>กิโลกรัม</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="productGroup"><span style="color:red;" >* </span>จำนวนแจ้งเตือน</label>
                        <input type="number" name="unit" min="1" value="1" class="form-control" placeholder="Qty" value="{{old('unit')}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productGroup"><span style="color:red;" >* </span>ราคาซื้อ</label>
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty" name="amount" value="{{old('amount')}}">
                        </div>
                        <div class="col-md-6">
                            <label for="productGroup"><span style="color:red;" >* </span>ราคาขาย</label>
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty" name="standard_sell_price" value="{{old('standard_sell_price')}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="picture">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-rounded btn-success" type="submit">เพิ่มรายการสินค้า</button>
                </div>

            </form>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
@stop
