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
		<div id="other">
            <h1>Выпуски рассылки</h1>
            <p class="center">
                <img src="images/subscribe.png" alt="Выпуски рассылки">
            </p>
            <p>В этом разделе я решил выложить все выпуски своей рассылки. Раньше их видели только мои подписчики, но письма очень часто теряются, не доходят, случайно удаляются. В результате, человек просто не получил очень важный для него выпуск.</p>
            <p>Чтобы исправить эту проблему, я просто буду выкладывать в этом разделе все новые выпуски своей рассылки. Разумеется, узнавать о выходе новых выпусков будут только мои подписчики. Поэтому если Вы не хотите постоянно проверять появились ли новые выпуски или нет, просто подпишитесь на мою рассылку.</p>
            <p>Чтобы стать моим подписчиком, достаточно выбрать любой из мини-курсов, которые Вас заинтересует. Если Вы заинтересовали оба, то можете подписаться на оба, это не запрещается.</p>
            <p>Что такое мини-курс? Мини-курс - это бесплатная серия секретных видеоуроков, которые недоступны остальным пользователям. Эти видеоуроки направлены на то, чтобы Вы получили максимум знаний по выбранной теме курса.</p>
            <p>Итак, чтобы стать моим подписчиком и получить секретные видеоуроки, заполните форму рядом с одним из представленных курсов.</p>		
            <div id="minicourses">
				<?php $__currentLoopData = $free_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="course">
                        <h4><?php echo e($course->title); ?></h4>
                        <img src="images/courses/<?php echo e($course->alias); ?>.png" alt="<?php echo e($course->title); ?>.">
                        <form name="subscribe_<?php echo e($course->alias); ?>" method="post" action="https://srs.myrusakov.ru/subscribe?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->alias); ?>" onsubmit="return SR_submit(this)">
                            <div>
                                <input type="text" name="name" placeholder="Ваше имя">
                            </div>
                            <div>
                                <input type="text" name="email" placeholder="Ваш email">
                            </div>
                            <div>
                                <input type="hidden" name="delivery_id" value="<?php echo e($course->delivery_id); ?>">
                                <input type="submit" name="subscribe_<?php echo e($course->alias); ?>" value="ПОЛУЧИТЬ ВИДЕОКУРС">
                            </div>
                        </form>
                    </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="arrows">
                    <div>
                        <div class="left">
                            <img src="images/arrow_left.png" alt="">
                        </div>
                        <div>Бесплатные курсы</div>
                        <div class="right">
                            <img src="images/arrow_right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 id="post_other">Выпуски рассылки</h4>
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo $__env->make('post_intro', ['number' => $count - $loop->index - ($posts->currentPage() - 1) * env('USER_COUNT_ON_PAGE')], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($posts->links('pagination')); ?>

           
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
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/releases.blade.php ENDPATH**/ ?>