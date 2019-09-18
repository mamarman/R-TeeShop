<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <a href="index.html" class="text-success">
                    <span><img src="{{asset('/assets/images/logo-dark.png')}}" alt="" height="18"></span>
                </a>
            </div>

            <form action="#" class="pl-3 pr-3">

                <div class="form-group">
                    <label for="productName">ชื่อสินค้า</label>
                    <input class="form-control" type="text" id="productName" required="">
                </div>

                <div class="form-group">
                    <label for="productName">รายละเอียดสินค้า</label>
                    <textarea class="form-control" id="productDetail" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="productGroup">หมวดหมู่สินค้า</label>
                    <select class="form-control" id="productGroup">
                        <option>เส้น</option>
                        <option>เต้าหู้</option>
                        <option>ผลิตภัณฑ์แปรรูป</option>
                        <option>เนื้อสัตว์</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productGroup">หน่วยสินค้า</label>
                            <select class="form-control" id="productGroup">
                                <option>ชิ้น</option>
                                <option>กิโลกรัม</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="productGroup">จำนวนแจ้งเตือน</label>
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productGroup">ราคาซื้อ</label>
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
                        </div>
                        <div class="col-md-6">
                            <label for="productGroup">ราคาขาย</label>
                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04">
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
