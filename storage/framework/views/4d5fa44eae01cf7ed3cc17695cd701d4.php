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
	 <?php $__env->slot('title', null, []); ?> <?php echo e($post->title); ?> <?php $__env->endSlot(); ?>
	 <?php $__env->slot('description', null, []); ?> <?php echo e($post->meta_desc); ?> <?php $__env->endSlot(); ?>
	 <?php $__env->slot('keywords', null, []); ?> <?php echo e($post->meta_key); ?> <?php $__env->endSlot(); ?>
	 <?php $__env->slot('left', null, []); ?> 
		<div class="post" id="post_full">
            <h1><?php echo e($post->title); ?></h1>
            <div class="img">
                <img src="https://blog.myrusakov.ru/images/posts/<?php echo e($post->alias); ?>.png" alt="<?php echo e($post->title); ?>">
            </div>
            <div class="info">
                <div class="hits">
                    <img src="images/hits.png" alt="">Просмотров: <?php echo e($post->hits); ?></div>
                <div class="clear"></div>
            </div>
            <div class="text"><?php echo $post->full_text; ?></div>
        </div>
        <div id="comments">
            <h3 id="count">Комментарии (<span><?php echo e(count($comments)); ?></span>):</h3>
            <h4>Добавить комментарий:</h4>
			<?php if($errors->any()): ?>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<p class="message"><?php echo e($message); ?></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
            <form name="add_comment" action="<?php echo e(url()->current()); ?>" method="post">
                <?php echo csrf_field(); ?>
				<div>
                    <input type="text" name="name" placeholder="Ваше имя" value="<?php echo e(old('name')); ?>">
                </div>
                <div>
                    <textarea name="text" placeholder="Ваш текст"><?php echo e(old('text')); ?></textarea>
                </div>
				<?php echo NoCaptcha::display(); ?>

				<?php if($errors->has('g-recaptcha-response')): ?>
					<span class="text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
				<?php endif; ?>
                <div>
                    <input type="submit" name="add_comment" value="Добавить комментарий">
                </div>
            </form>
			<?php echo NoCaptcha::renderJs(); ?>

			
			<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="comment" id="">
                    <div class="name"><?php echo e($comment->name); ?></div>
                    <div class="date"><?php echo e($comment->created_at->translatedFormat('d F Y G:i:s')); ?></div>
                    <div class="clear"></div>
                    <div class="text"><?php echo e($comment->text); ?></div>
					<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $comment)): ?>
						<div class="functions">
							<a class="reply" href="<?php echo e(route('comment.delete', ['comment' => $comment])); ?>">Удалить</a>
						</div>
					<?php endif; ?>
                    <hr class="separator">
                </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
        <h4 id="post_other">Выпуски, которые Вас могут заинтересовать:</h4>
		<?php echo $__env->renderEach('post_intro', $posts, 'post'); ?>
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
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/post.blade.php ENDPATH**/ ?>