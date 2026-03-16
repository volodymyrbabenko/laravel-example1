<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo e($title); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo e($description); ?>" />
    <meta name="keywords" content="<?php echo e($keywords); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="/styles/main.css" />
    <link type="text/css" rel="stylesheet" href="/styles/fancybox.css" />
    <script src="/js/jquery.js"></script>
    <script src="/js/is_mobile.js"></script>
    <script src="/js/fancybox.js"></script>
    <script src="/js/functions.js"></script>
	<script async src="https://vk.com/js/api/openapi.js?121"></script>
</head>
<body>
	<div id="header">
		<ul class="menu">
            <li>
                <a href="<?php echo e(route('author')); ?>">Об авторе</a>
            </li>
            <li>
                <a href="<?php echo e(route('courses')); ?>">Видеокурсы</a>
            </li>
            <li>
                <a href="<?php echo e(route('releases')); ?>">Выпуски рассылки</a>
            </li>
            <li>
                <a href="<?php echo e(route('sites')); ?>">Сайты учеников</a>
            </li>
            <li>
                <a target="_blank" href="https://myrusakov.ru">Мой сайт</a>
            </li>
            <li>
                <a target="_blank" href="https://support.myrusakov.ru">Поддержка</a>
            </li>
        </ul>
        <div class="clear"></div>
		<div id="header_title">
			<h2><a href="<?php echo e(route('index')); ?>">блог Михаила Русакова</a></h2>
		</div>
		<div id="search">
			<form name="search" method="get" action="<?php echo e(route('search')); ?>">
                <?php echo csrf_field(); ?>
				<div>
					<input type="text" name="search_query" placeholder="Поиск" />
					<input type="image" src="/images/search_icon.png" alt="Поиск" />
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="content">
		<div id="slider">
			<?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slider_item">
                    <img src="/images/courses/<?php echo e($course->alias); ?>.png" alt="<?php echo e($course->titel); ?>" />
                    <div class="slider_content">
                        <h3><?php echo e($course->titel); ?></h3>
                        <p><?php echo e($course->slider_description); ?></p>
                    </div>
                    <div class="more"><a target="_blank" href="https://srs.myrusakov.ru/<?php echo e($course->alias); ?>?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->alias); ?>">УЗНАТЬ ПОДРОБНЕЕ</a></div>
                </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
		<div class="clear"></div>
		<div id="bullets">
			<div class="active"></div>
			<?php for($i = 1; $i < count($slider); $i++): ?>
				<div></div>
			<?php endfor; ?>
		</div>
        </div>
        <div id="left"><?php echo e($left); ?></div>
		<div id="right"><?php echo e($right?? ''); ?>

			<div class="courses" id="courses">
				<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="course">
                        <h4><?php echo e($course->title); ?></h4>
                        <img src="/images/courses/<?php echo e($course->alias); ?>.png" alt="<?php echo e($course->title); ?>" />
                        <p class="more">
                            <a target="_blank" href="https://srs.myrusakov.ru/<?php echo e($course->alias); ?>?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->alias); ?>">ПОЛУЧИТЬ БЕСПЛАТНО</a>
                        </p>
                    </div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="arrows">
                    <div>
                        <div class="left">
                            <img src="/images/arrow_left.png" alt="" />
                        </div>
                        <div>Бесплатные курсы</div>
                        <div class="right">
                            <img src="/images/arrow_right.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>		
            <div id="recommendations">
				<h4>Рекомендую</h4>
				<div>
					<a target="_blank" class="more" href="https://myrusakov.ru/r/reg">REG.RU</a>
					<a target="_blank" href="https://myrusakov.ru/r/reg"><img src="/images/regru.png" alt="" /></a>
					<p>Одно из лучших мест, где можно зарегистрировать на себя доменное имя за скромную плату. Все свои домены перенёс к ним и покупаю новые только у них!</p>
				</div>
				<div>
					<a target="_blank" class="more" href="https://myrusakov.ru/r/hostia">HOSTIA.RU</a>
					<a target="_blank" class="more" href="https://myrusakov.ru/r/hostia"><img src="/images/hostia.png" alt="" /></a>
					<p>На мой взгляд, лучший хостинг в Рунете. Я перепробовал много их, то они были медленными, то отключались часто, то была высокая цена. Hostia.ru - это отличная скорость, высокая надёжность и при этом низкая цена (от 0.88$ в месяц).</p>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<footer>
		<p>
			<img src="/images/logo_footer.png" alt="" />
		</p>
		<p>
			<img src="/images/logo_arrow.png" alt="" />
			<a href="<?php echo e(route('index')); ?>"><span>блог Михаила Русакова</span></a>
		</p>
		<ul class="menu">
            <li>
                <a href="<?php echo e(route('author')); ?>">Об авторе</a>
            </li>
            <li>
                <a href="<?php echo e(route('courses')); ?>">Видеокурсы</a>
            </li>
            <li>
                <a href="<?php echo e(route('releases')); ?>">Выпуски рассылки</a>
            </li>
            <li>
                <a href="<?php echo e(route('sites')); ?>">Сайты учеников</a>
            </li>
            <li>
                <a target="_blank" href="https://myrusakov.ru">Мой сайт</a>
            </li>
            <li>
                <a target="_blank" href="https://support.myrusakov.ru">Поддержка</a>
            </li>
        </ul>
        <div class="clear"></div>
        <div id="copy">
            <p>&copy; Blog.MyRusakov.ru <?php echo e(date('Y')); ?> г.</p>
            <p>ВСЕ ПРАВА ЗАЩИЩЕНЫ.</p>
        </div>
	</footer>
</body>
</html><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/layouts/main-layout.blade.php ENDPATH**/ ?>