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
	 <?php $__env->slot('title', null, []); ?> Добавить сайт <?php $__env->endSlot(); ?>
	 <?php $__env->slot('description', null, []); ?> Добавить сайт на блог Михаила Русакова. <?php $__env->endSlot(); ?>
	 <?php $__env->slot('keywords', null, []); ?> добавить сайт, добавить сайт блог, добавить сайт блог михаил русаков <?php $__env->endSlot(); ?>
	 <?php $__env->slot('left', null, []); ?> 
		<div id="other" style="height: 1257.36px;">
            <h1>Заполните форму</h1>

			<?php if($errors->any()): ?>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<p class="message"><?php echo e($message); ?></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php elseif($success_add): ?>
				<p class="message">Сайт успешно добавлен и отправлен на проверку</p>
			<?php endif; ?>

            <p>Обратите внимание, что на добавляемой страницей должно быть упоминание обо мне. Например, "Спасибо Михаилу Русакову!", либо должна быть ссылка на любой из моих сайтов (например, на <b>myrusakov.ru</b>).</p>
            <form name="add_site" method="post" action="<?php echo e(url()->current()); ?>">
				<?php echo csrf_field(); ?>
				<div>
                    <input type="text" name="address" placeholder="Адрес сайта" value="<?php echo e(old('address')); ?>">
                </div>
                <div>
                    <textarea name="description" placeholder="Описание"><?php echo e(old('description')); ?></textarea>
                </div>
				<?php echo NoCaptcha::display(); ?>

				<?php if($errors->has('g-recaptcha-response')): ?>
					<span class="text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
				<?php endif; ?>
                <div>
                    <input type="submit" name="add_site" value="Добавить сайт">
                </div>
            </form>
			<?php echo NoCaptcha::renderJs(); ?>

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
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/site-add.blade.php ENDPATH**/ ?>