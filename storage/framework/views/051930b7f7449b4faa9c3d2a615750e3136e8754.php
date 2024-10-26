

<?php $__env->startSection('content'); ?>
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12">
                            <h1 class="heading-title">Job Details</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="text-decoration-none">Job Details</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->


        <!-- Navtab -->
        <section id="service-details" class="service-details">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8">
                        <article>
                            <h1><?php echo e($data->department->name ?? ''); ?></h1>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <p><?php echo e($data->title ?? ''); ?></p>
                                    <h5><?php echo e(date('Y-m-d',strtotime($data->created_at))); ?></h5>
                                    <p><?php echo $data->description ?? ''; ?></p>
                                </div>
                            </div>
                            <?php if($data->file): ?>
                                <div class="text-center">
                                    <a target="_blank" href="<?php echo e(asset($data->file)); ?>" class="btn default-btn mt-5">
                                        Download Attachment
                                    </a>
                                </div>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navtab End -->
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('js'); ?>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/website/pages/career_details.blade.php ENDPATH**/ ?>