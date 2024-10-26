
<?php $__env->startSection('title',"Add/Edit Job Department"); ?>
<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0"><?php echo e("Add/Edit Job Department"); ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e($route); ?>" class="form" method="POST" id="prevent-form" >
                            <?php echo csrf_field(); ?>
                            <?php if(isset($data)): ?>
                                <?php echo method_field('PUT'); ?>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Category Name <?php echo starSign(); ?></label>
                                        <input type="text" name="name"
                                            value="<?php echo e(old('name') ?? $data->name ?? ''); ?>"
                                            class="form-control <?php echo hasError('name'); ?>" placeholder="Category Name" />
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo displayError($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="" cols="30" rows="2" class="form-control <?php echo hasError('short_text'); ?>" placeholder="Description"><?php echo e(old('description') ?? $data->description ?? ''); ?></textarea>
                                        
                                        <?php $__errorArgs = ['short_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo displayError($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                               
                                <div class="col-12 text-right">
                                    <a href="<?php echo e(route('admin.job-departments.index')); ?>" class="btn btn-info">Back</a>
                                     <?php if (isset($component)) { $__componentOriginalfac48e8961aedf05e29b18286b5a431e09bcb9fe = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubmitButtonComponent::class, []); ?>
<?php $component->withName('submit-button-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalfac48e8961aedf05e29b18286b5a431e09bcb9fe)): ?>
<?php $component = $__componentOriginalfac48e8961aedf05e29b18286b5a431e09bcb9fe; ?>
<?php unset($__componentOriginalfac48e8961aedf05e29b18286b5a431e09bcb9fe); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/career/department_add_edit.blade.php ENDPATH**/ ?>