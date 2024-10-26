<?php if(Session::has('message')): ?>
     <?php if (isset($component)) { $__componentOriginala1d01d966397d061af340daed074d9a55611b151 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AlertMessageComponent::class, ['type' => ''.e(Session::get('type')).'','message' => ''.e(Session::get('message')).'']); ?>
<?php $component->withName('alert-message-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php if (isset($__componentOriginala1d01d966397d061af340daed074d9a55611b151)): ?>
<?php $component = $__componentOriginala1d01d966397d061af340daed074d9a55611b151; ?>
<?php unset($__componentOriginala1d01d966397d061af340daed074d9a55611b151); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php endif; ?>
<?php /**PATH W:\laragon\www\pkf-dev\resources\views/components/alert-component.blade.php ENDPATH**/ ?>