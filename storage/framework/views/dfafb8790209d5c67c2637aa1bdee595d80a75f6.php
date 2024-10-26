
<?php $__env->startSection('title',"Add/Edit News"); ?>
<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0"><?php echo e("Add/Edit News"); ?></h2>
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
                        <form action="<?php echo e($route); ?>" class="form" method="POST" id="prevent-form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($data)): ?>
                                <?php echo method_field('PUT'); ?>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label>Category <?php echo starSign(); ?></label>
                                        <select name="category" class="form-control select2">
                                            <option value="">Select Category</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"
                                                    <?php echo e((old('category') ?? (isset($data) ? $data->category_id : '')) == $category->id ? 'selected' : ''); ?>>
                                                    <?php echo e($category->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['category'];
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
                                        <label>Title <?php echo starSign(); ?></label>
                                        <input type="text" name="title"
                                            value="<?php echo e(old('title') ?? $data->title ?? ''); ?>"
                                            class="form-control <?php echo hasError('title'); ?>" placeholder="Title" />
                                        <?php $__errorArgs = ['title'];
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
                                        <label for="customFile">Image (Max: 5MB) <?php echo starSign(); ?></label>
                                        <div class="custom-file">
                                            <input name="image" type="file"
                                                class="custom-file-input <?php echo hasError('image'); ?>" id="customFile" />
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                            <?php $__errorArgs = ['image'];
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
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Description <?php echo starSign(); ?></label>
                                        <textarea name="description" id="description" class="form-control" cols="30" rows="10"><?php echo e(old('description') ?? $data->description ?? ''); ?></textarea>
                                        <?php $__errorArgs = ['description'];
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
                                    <a href="<?php echo e(url()->previous() ?? route('admin.dashboard')); ?>" class="btn btn-info">Back</a>
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
<script>
    CKEDITOR.replace( 'description', {
        removePlugins: ['info','image'],
   });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\laragon\www\pkf-dev\resources\views/admin/news/news_add_edit.blade.php ENDPATH**/ ?>