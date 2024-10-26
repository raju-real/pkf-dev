

<?php $__env->startSection('content'); ?>
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Careers</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="text-decoration-none">Careers</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Jobs</h2>
                        </div>
                        <div class="row gy-4 table-responsive">
                            <?php if(count($jobs)): ?>
                                <table id="myTable" class="display nowrap dataTable dtr-inline collapsed  pb-10">
                                    <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Location</th>
                                            <th>Attachments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($job->department->name ?? ''); ?></td>
                                                <td><?php echo e($job->title ?? ''); ?></td>
                                                <td><?php echo e($job->location ?? ''); ?></td>
                                                <td>
                                                    <?php if(isset($job->file)): ?>
                                                    <a target="_blank" class="btn btn-sm btn-info" href="<?php echo e(asset($job->file)); ?>">File</a>
                                                    <?php else: ?>
                                                    <?php echo e("N/A"); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-right">
                                                    <a href="<?php echo e(route('career-details', $job->slug)); ?>"
                                                        class="btn default-btn">Read More <i
                                                            class="fa-solid fa-angles-right"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p class="alert alert-danger">No results found!</p>
                            <?php endif; ?>
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->

                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/website/pages/careers.blade.php ENDPATH**/ ?>