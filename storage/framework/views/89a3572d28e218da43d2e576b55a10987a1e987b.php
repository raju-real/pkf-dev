
<?php $__env->startSection('title',$data->title ?? "News"); ?>
<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">News Details</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="<?php echo e(route('admin.news.index')); ?>" class="btn btn-primary">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
    </div>
</div>
<div class="content-body">
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                                <th>Image</th>
                                <td>:</td>
                                <td>
                                    <img src="<?php echo e(asset($data->image)); ?>" alt="" class="img-responsive"
                                            height="200" width="200">
                                </td>
                           </tr>
                           <tr>
                                <th>Category</th>
                                <td>:</td>
                                <td><?php echo e($data->category->name ?? "N/A"); ?></td>
                           </tr>
                           <tr>
                                <th>Title</th>
                                <td>:</td>
                                <td><?php echo e($data->title ?? "N/A"); ?></td>
                           </tr>
                           <tr>
                                <th>Description</th>
                                <td>:</td>
                                <td><?php echo $data->description ?? "N/A"; ?></td>
                           </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/news/news_details.blade.php ENDPATH**/ ?>