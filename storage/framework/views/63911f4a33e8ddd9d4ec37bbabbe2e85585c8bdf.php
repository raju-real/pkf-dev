<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        
        <ul class="nav navbar-nav align-items-center ml-auto">
           

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?php echo e(Auth::check() ? strLimit(Auth::user()->name) : ''); ?></span><span class="user-status">
                        Admin</span></div><span class="avatar"><img
                            class="round" src="<?php echo e(Auth::check() ? asset(Auth::user()->image) : ''); ?>" alt="avatar"
                            height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item"
                        href="<?php echo e(route("admin.profile")); ?>"><i class="mr-50" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><i class="mr-50"
                            data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/layouts/topbar.blade.php ENDPATH**/ ?>