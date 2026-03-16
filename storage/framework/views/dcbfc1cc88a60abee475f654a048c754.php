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
	 <?php $__env->slot('title', null, []); ?> Сайты моих учеников <?php $__env->endSlot(); ?>
	 <?php $__env->slot('description', null, []); ?> Список сайтов моих учеников. <?php $__env->endSlot(); ?>
	 <?php $__env->slot('keywords', null, []); ?> список сайтов, список сайтов ученики, список сайтов ученики михаил русаков <?php $__env->endSlot(); ?>
	 <?php $__env->slot('left', null, []); ?> 
		<div id="other">
            <h1>Сайты моих учеников</h1>
            <p class="center">
                <img src="images/sites.png" alt="Сайты моих учеников">
            </p>
            <p>Ниже идёт список сайтов, которые были созданы моими учениками. Добавить ещё сайт можно <a href="<?php echo e(route('site.add')); ?>">здесь</a>. Обратите внимание, что обязательным условием является наличие какой-нибудь фразы на главной страницы сайта, свидетельствующей о том, что сайт принадлежит Вам и Вы его создали благодаря моим урокам! Например, это может быть "Спасибо Михаилу Русакову!". Как альтернативу можно просто поставить ссылку на мой сайт <b>myrusakov.ru</b>, либо на любой другой из моих сайтов.</p>
            <ul id="sites" class="ul_mark">
				<?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><a target="_blank" rel="external" href="<?php echo e($site->address); ?>"><?php echo e($site->address); ?></a> - <span><?php echo e($site->description); ?></span></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
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
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/sites.blade.php ENDPATH**/ ?>