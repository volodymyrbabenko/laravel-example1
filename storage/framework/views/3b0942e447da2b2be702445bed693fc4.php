<div class="post">
	<?php if(isset($number)): ?>
		<h4>Выпуск №<?php echo e($number); ?></h4>
	<?php endif; ?>
	<h1><?php echo e($post->title); ?></h1>
	<div class="img">
		<img src="/images/posts/<?php echo e($post->alias); ?>.png" alt="<?php echo e($post->title); ?>" />
	</div>
	<div class="text"><?php echo $post->intro_text; ?></div>
	<div class="more">
		<a href="<?php echo e(route('post', ['alias' => $post->alias])); ?>">ЧИТАТЬ ПОЛНОСТЬЮ &gt;</a>
	</div>
	<div class="info">
		<div class="date"><?php echo e($post->date_show->translatedFormat('d F Y')); ?></div>
		<div class="hits">
			<img src="images/hits.png" alt="" />Просмотров: <?php echo e($post->hits); ?>

		</div>
		<div class="clear"></div>
	</div>
</div> <?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/post_intro.blade.php ENDPATH**/ ?>