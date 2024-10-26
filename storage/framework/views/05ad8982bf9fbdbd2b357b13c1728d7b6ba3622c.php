
<?php $__env->startSection('title',$data->title ?? "Job"); ?>
<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Job Details</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="<?php echo e(route('admin.jobs.index')); ?>" class="btn btn-primary">
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
                            <?php if(isset($data->file)): ?>
                           <tr>
                                <th>Department</th>
                                <td>:</td>
                                <td><a target="_blank" class="btn btn-sm badge-info" href="<?php echo e(asset($data->file)); ?>">File</a></td>
                           </tr>
                           <?php endif; ?>
                           <tr>
                                <th>Department</th>
                                <td>:</td>
                                <td><?php echo e($data->department->name ?? "N/A"); ?></td>
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/career/job_details.blade.php ENDPATH**/ ?>