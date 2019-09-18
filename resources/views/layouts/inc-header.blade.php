<ul class       =   "list-unstyled topbar-right-menu float-right mb-0">
    <li class   =   "dropdown notification-list">
        <a  class           ="nav-link dropdown-toggle nav-user arrow-none mr-0" 
            data-toggle     ="dropdown" 
            href            ="#" 
            role            ="button" 
            aria-haspopup   ="false"
            aria-expanded   ="false">
            <span class     ="account-user-avatar">
                <img src    ="{{asset('/assets/images/users/avatar-1.jpg')}}" 
                     alt    ="user-image" 
                     class  ="rounded-circle">
            </span>
            <span>
                <span class ="account-user-name">
                    Dominic Keller
                </span>
                <span class ="account-position">
                    Founder
                </span>
            </span>
        </a>
        <div class          ="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
            <!-- item-->
            <a  href        ="javascript:void(0);" 
                class       ="dropdown-item notify-item">
                <i class    ="mdi mdi-account-circle mr-1"></i>
                <span>
                    My Account
                </span>
            </a>

            <!-- item-->
            <a  href        ="admin/logout" 
                class       ="dropdown-item notify-item">
                <i class    ="mdi mdi-logout mr-1"></i>
                <span>
                    Logout
                </span>
            </a>

        </div>
    </li>

</ul>
<button class               ="button-menu-mobile open-left disable-btn">
    <i  class               ="mdi mdi-menu"></i>
</button>