<li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->segment(1) === null ? 'active-2' : ''); ?>">Home</a></li>
<li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->segment(1) === 'about' ? 'active-2' : ''); ?>">About Us</a></li>
<li><a href="<?php echo e(route('all-publications')); ?>"
        class="<?php echo e(request()->segment(1) === 'all-publications' || request()->segment(1) == 'publication-details' ? 'active-2' : ''); ?>">Publications</a></li>
<li><a href="<?php echo e(route('all-news')); ?>" class="<?php echo e(request()->segment(1) === 'all-news' || request()->segment(1) === 'news-details' ? 'active-2' : ''); ?>">News &amp;
        Events</a></li>
<li><a href="<?php echo e(route('peoples')); ?>"
        class="<?php echo e(request()->segment(1) === 'peoples' || request()->segment(1) === 'people' ? 'active-2' : ''); ?>">People</a>
</li>
<li><a href="<?php echo e(route('our-services')); ?>"
        class="<?php echo e(request()->segment(1) === 'our-services' || request()->segment(1) == 'service-details' ? 'active-2' : ''); ?>">Services</a></li>
<li><a href="<?php echo e(route('careers')); ?>"
        class="<?php echo e(request()->segment(1) === 'careers' || request()->segment(1) == 'careers-details' ? 'active-2' : ''); ?>">Careers</a></li>
<li><a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->segment(1) === 'contact' ? 'active-2' : ''); ?>">Contact
        Us</a></li>
<?php /**PATH W:\laragon\www\pkf-dev\resources\views/website/layouts/menus.blade.php ENDPATH**/ ?>