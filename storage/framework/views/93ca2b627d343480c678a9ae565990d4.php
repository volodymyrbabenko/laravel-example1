<?php if (isset($component)) { $__componentOriginal66d7cfd03cd343304d81fe1e21646540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66d7cfd03cd343304d81fe1e21646540 = $attributes; } ?>
<?php $component = App\View\Components\MainLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MainLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('title', null, []); ?> Личный блог Михаила Русакова <?php $__env->endSlot(); ?>
	 <?php $__env->slot('description', null, []); ?> Личный блог Михаила Русакова и его выпуски рассылки. <?php $__env->endSlot(); ?>
	 <?php $__env->slot('keywords', null, []); ?> михаил русаков, блог михаил русаков, рассылка михаил русаков <?php $__env->endSlot(); ?>
	 <?php $__env->slot('left', null, []); ?> 
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo $__env->make('post_intro', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($posts->links('pagination')); ?>

	 <?php $__env->endSlot(); ?>

	 <?php $__env->slot('right', null, []); ?> 
		<div id="author">
            <h4>Автор блога</h4>
            <img src="images/author.png" alt="Михаил Русаков" />
            <p>Михаил Русаков</p>
            <a target="_blank" href="https://vk.com/myrusakov">СТРАНИЦА АВТОРА</a>
        </div>
	 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $attributes = $__attributesOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $component = $__componentOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__componentOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/index.blade.php ENDPATH**/ ?>