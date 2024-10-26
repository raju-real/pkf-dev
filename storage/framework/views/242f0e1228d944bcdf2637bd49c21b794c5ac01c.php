

<?php $__env->startSection('content'); ?>
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">News & Events</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="text-decoration-none">News & Events</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->


    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="subnav">
                        <?php $__currentLoopData = newsCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="<?php echo e($loop->first ? 'active' : ''); ?>">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <a
                                        href="<?php echo e(route('all-news', ['category' => $category->slug])); ?>"><?php echo e($category->name); ?></a>
                                </div>
                                
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <br>
                    <h4>News Search</h4>
                    <form action="<?php echo e(route('all-news')); ?>" method="get" class="searchForm">
                        <input type="search" name="SearchTerm" value="<?php echo e(request('SearchTerm')); ?>" class="form-control"
                            placeholder="Search">
                    </form>
                </div>
                <div class="col-md-8">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>News & Events</h2>
                        </div>
                        <div class="row gy-4">
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($loop->index <= 3): ?>
                                    <div class="col-xl-6 col-md-12">
                                        <article>
                                            <div class="d-flex align-items-center">
                                                <div class="post-meta">
                                                    <p class="post-date">
                                                        <small></small>
                                                        <span class="mr-2"><?php echo e($news->category->name ?? ''); ?></span>
                                                        <time datetime="<?php echo e(date('Y-m-d', strtotime($news->created_at))); ?>"><?php echo e(date('Y-m-d', strtotime($news->created_at))); ?></time>
                                                    </p>
                                                </div>
                                            </div>
                                            <h2 class="title">
                                                <a href="<?php echo e(route('news-details', $news->slug)); ?>"><?php echo e($news->title ?? ''); ?></a>
                                            </h2>
                                            <div class="post-img">
                                                <img src="<?php echo e(asset($news->image)); ?>" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </article>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->


                    <!-- Insight Newsletter -->
                    <div id="insights-newsletter" class="insights-newsletter">
                        <ul>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->index >= 4): ?>
                            <li>
                                <h4><?php echo e($news->category->name ?? ''); ?> <span class="date-area">- <?php echo e(date('Y-m-d', strtotime($news->created_at))); ?></span></h4>
                                <h2><?php echo e($news->title ?? ''); ?></h2>
                                <a href="<?php echo e(route('news-details', $news->slug)); ?>" class="btn default-btn">Read More <i
                                        class="fa-solid fa-angles-right"></i></a>
                            </li>
                            <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <!-- Insight Newsletter End -->
                    <?php echo e($results->links()); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/website/pages/news_list.blade.php ENDPATH**/ ?>