
<?php $__env->startSection('title','Job List'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Job List</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="<?php echo e(route('admin.jobs.create')); ?>" class="btn btn-primary">
            <i data-feather="plus"></i>
            Add New
        </a>
    </div>
</div>
<div class="content-body">
    <div class="row" id="basic-table">
        <div class="col-12">
             <?php if (isset($component)) { $__componentOriginald02996e44dda3903cba78e7e1216344c6c162fa8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AlertComponent::class, []); ?>
<?php $component->withName('alert-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald02996e44dda3903cba78e7e1216344c6c162fa8)): ?>
<?php $component = $__componentOriginald02996e44dda3903cba78e7e1216344c6c162fa8; ?>
<?php unset($__componentOriginald02996e44dda3903cba78e7e1216344c6c162fa8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>Sl</th>
                                <th>File</th>
                                <th>Department</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($results->count()): ?>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    
                                    <td>
                                        <?php if(isset($data->file)): ?>
                                        <a target="_blank" class="btn btn-sm badge-info" href="<?php echo e(asset($data->file)); ?>">File</a>
                                        <?php else: ?>
                                        <?php echo e("N/A"); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($data->department->name ?? "N/A"); ?></td>
                                    <td><?php echo e(strLimit($data->title,50)); ?></td>
                                    <td><?php echo e($data->status == 'active' ? 'Active' : 'In Active'); ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo e(route('admin.jobs.show',$data->slug)); ?>">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>Details</span>
                                                </a>
                                                <a class="dropdown-item" href="<?php echo e(route('admin.jobs.edit',$data->id)); ?>">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item delete-data" data-id="<?php echo e('delete-jobs-'.$data->id); ?>" href="javascript:void(0);">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                                <form id="delete-event-jobs-<?php echo e($data->id); ?>"
                                                    action="<?php echo e(route('admin.jobs.destroy',$data->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                 <?php if (isset($component)) { $__componentOriginal003196f3f3c9d2f71b150591700c3d501bfddcae = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AlertDanger::class, []); ?>
<?php $component->withName('alert-danger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal003196f3f3c9d2f71b150591700c3d501bfddcae)): ?>
<?php $component = $__componentOriginal003196f3f3c9d2f71b150591700c3d501bfddcae; ?>
<?php unset($__componentOriginal003196f3f3c9d2f71b150591700c3d501bfddcae); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-right">
                <?php echo e($results->links()); ?>

            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/career/job_list.blade.php ENDPATH**/ ?>