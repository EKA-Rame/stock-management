<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <a href="index.html" class="text-success">
                    <span><img src="<?= base_url();?>assets/images/logo-dark.png" alt="" height="18"></span>
                </a>
            </div>

            <form action="#" class="pl-3 pr-3">

                <div class="form-group">
                    <label for="productName">ชื่อสินค้า</label>
                    <input class="form-control" type="text" id="productName" required="">
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
                    <label for="productGroup">หน่วย</label>
                    <select class="form-control" id="productGroup">
                        <option>ชิ้น</option>
                        <option>กิโลกรัม</option>
                    </select>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-rounded btn-primary" type="submit">เพิ่มรายการสินค้า</button>
                </div>

            </form>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->