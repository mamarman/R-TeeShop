<div    class   ="slimscroll-menu"
        id      ="left-side-menu-container">
    <br/>
    <!-- LOGO -->
<a  href                    ="admin/dashboard"
        class               ="logo text-center">
        <span       class   ="logo-lg">
            <img    src     ="{{asset('/assets/images/r-tee-logo.png')}}"
                    alt     =""
                    height  ="150">
        </span>
    </a>
    <!-- MENU -->
    <ul     class           ="metismenu side-nav side-nav-light">
        <li class           ="side-nav-item">
            <a  href        ="admin/dashboard"
                class       ="side-nav-link">
                <i  class   ="mdi mdi-home mdi-24px"></i>
                <span>
                    หน้าหลัก
                </span>
            </a>
        </li>
        <li     class       ="side-nav-item">
            <a  href        ="javascript: void(0);"
                class       ="side-nav-link">
                <i  class   ="mdi mdi-clipboard-text mdi-24px"></i>
                <span>
                    ระบบจัดการรายการ
                </span>
                <span class ="menu-arrow"></span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="{{ route('new') }}">
                        <i class="mdi mdi-calendar-text mdi-18px"></i>
                        ทำรายการใหม่
                    </a>
                </li>
                <li>
                        <a href="{{ route('history') }}">
                            <i class="mdi mdi-calendar-clock mdi-18px"></i>
                            ทำรายการย้อนหลัง
                        </a>
                    </li>
                <li>
                    <a href="{{ route('wait-payment') }}">
                        <i class="mdi mdi-calendar-today mdi-18px"></i>
                        รายการรอเรียกเก็บ
                    </a>
                </li>
            </ul>
        </li>
        <li class="side-nav-item">
            <a href="admin/product" class="side-nav-link">
                <i class="mdi mdi-barcode-scan mdi-24px"></i>
                <span> ระบบจัดการสินค้า </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="admin/customer" class="side-nav-link">
                <i class="mdi mdi-account-card-details mdi-24px"></i>
                <span> ระบบจัดการลูกค้า </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="admin/user" class="side-nav-link">
                <i class="mdi mdi-account-multiple mdi-24px"></i>
                <span> ระบบจัดการบุคลากร </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="#" class="side-nav-link">
                <i class="mdi mdi-cart-plus mdi-24px"></i>
                <span> ระบบจัดการรายรับ </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="#" class="side-nav-link">
                <i class="mdi mdi-cart-minus mdi-24px"></i>
                <span> ระบบจัดการรายจ่าย </span>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
