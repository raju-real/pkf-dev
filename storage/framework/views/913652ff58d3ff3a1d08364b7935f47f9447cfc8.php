<div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a target="_blank" class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <h2 class="brand-text"><?php echo e(strLimit(siteSetting()['company_name'], 10) ?? 'PKF BD'); ?></h2>
            </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                    class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                    class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                    data-ticon="disc"></i></a></li>
    </ul>
</div>
<div class="shadow-bottom"></div>
<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item">
            <a class="d-flex align-items-center single-menu" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="fa fa-dashboard" aria-hidden="true"></i>
                <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="d-flex align-items-center single-menu" href="<?php echo e(route('admin.sliders.index')); ?>">
                <i class="fa fa-sliders" aria-hidden="true"></i>
                <span class="menu-title text-truncate" data-i18n="Dashboard">Sliders</span>
            </a>
        </li>
        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i class="fa fa-newspaper" aria-hidden="true"></i>
                <span class="menu-title text-truncate">News</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.news.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">News List</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.news-categories.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <span class="menu-title text-truncate">Insights</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.publications.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Publications</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu"
                        href="<?php echo e(route('admin.publication-categories.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i data-feather="aperture"></i>
                <span class="menu-title text-truncate">About</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.departments.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Department</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu"
                        href="<?php echo e(route('admin.people-directories.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">People Directory</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i class="fa fa-wrench" aria-hidden="true"></i>
                <span class="menu-title text-truncate">Services</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu"
                        href="<?php echo e(route('admin.service-categories.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Category</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu"
                        href="<?php echo e(route('admin.service-subcategories.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Sub Category</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.services.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Service List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i data-feather="briefcase"></i>
                <span class="menu-title text-truncate">Career</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.job-departments.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Department</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center child-menu"
                        href="<?php echo e(route('admin.jobs.index')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Jobs</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item parent-menu">
            <a class="d-flex align-items-center" href="#">
                <i class="fa fa-cog"></i>
                <span class="menu-title text-truncate">Settings</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center child-menu" href="<?php echo e(route('admin.website-settings')); ?>">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Website Settings</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>