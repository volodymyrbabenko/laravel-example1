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
	 <?php $__env->slot('title', null, []); ?> Видеокурсы от Михаила Русакова <?php $__env->endSlot(); ?>
	 <?php $__env->slot('description', null, []); ?> Информация обо всех обучающих Видеокурсах от Михаила Русакова. <?php $__env->endSlot(); ?>
	 <?php $__env->slot('keywords', null, []); ?> видеокурсы русаков, видеокурсы михаил русаков, обучающие видеокурсы михаил русаков <?php $__env->endSlot(); ?>
	 <?php $__env->slot('left', null, []); ?> 
		<div id="other">
            <h1>Видеокурсы от Михаила Русакова</h1>
            <p>Есть несколько вариантов обучения созданию сайтов. Давайте их разберём:</p>
            <div class="course_info">
                <div>
                    <div>
                        <img src="images/course_icon_1.png" alt="">
                    </div>
                    <div>Книги. Отличный вариант, но есть одна загвоздка. Дело в том, что создание сайтов - это некий процесс, который нужно видеть. А в книге у Вас будет лишь код, поэтому у новичков (исходя из моей практики) будет миллион вопросов. Куда скопировать, как создать файл нужного формата, как его запустить, почему он не отображается, почему не показывается расширение файла, почему, почему, почему. И вот на все эти вопросы ни один автор любой книги ответ дать не может. Он не в состоянии всё предусмотреть и описать все возникающие проблемы в книге.</div>
                </div>
                <div>
                    <div>
                        <img src="images/course_icon_2.png" alt="">
                    </div>
                    <div>Семинары и репетиторы. Очень дорогое удовольствие, но, пожалуй, одно из лучших. Единственное, что у Вас будет конкретное расписание занятий, что не всегда удобно. Или, допустим, Вы хотите заниматься уже ближе к ночи, но едва ли Вы сможете найти семинар, который проходит ночью. Плюс не получится заниматься, например, в какой-нибудь очереди в банке.</div>
                </div>
                <div>
                    <div>
                        <img src="images/course_icon_3.png" alt="">
                    </div>
                    <div>Институт. Самый полезный вариант с точки зрения будущей работы (диплом-то у Вас будет), но знаний он даёт мало. Это факт, поскольку я сам проучился много лет на программиста, и знаю, что в институтах преподаётся лишь устаревшая информация. И так везде (а я интересовался у многих людей). Фактически, для получения хороших знаний Вам придётся воспользоваться другим способом.</div>
                </div>
                <div>
                    <div>
                        <img src="images/course_icon_4.png" alt="">
                    </div>
                    <div>Видеокурсы. Наиболее оптимальный вариант, сочитающий в себе невысокую цену (сравнимую с книгами) и удобство изучения (когда захотите, где захотите и сколько захотите), а также отличную усваивомость материала, поскольку Вы не только слышите все комментарии автора, но ещё и видите, что он делает, как делает и что в конечном итоге получает. Я считаю, что для обучения созданию сайтов самый лучший вариант - это именно видеоинформация.</div>
                </div>
            </div>
            <p>Исходя из вышесказанного, я принял решение создавать Видеокурсы, которые помогут новичкам с нуля создавать и раскручивать свои сайты. Но я понимаю, что не у всех есть деньги даже на книгу, поэтому я записал и бесплатные курсы, содержащие базовую информацию, которая Вам позволит уже создавать свои первые сайты.</p>
        </div>
		
		<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="course">
				<h3><?php echo e($loop->index + 1); ?>. <?php echo e($course->title); ?></h3>
				<div class="course_table">
					<div>
						<div>
							<img src="images/courses/<?php echo e($course->alias); ?>.png" alt="<?php echo e($course->title); ?>">
						</div>
						<div class="course_order">
							<p>ЦЕНА: <span><?php echo e($course->price); ?> euro</span></p>
							<div class="order">
								<a href="https://srs.myrusakov.ru/order?product_ids=<?php echo e($course->product_id); ?>&amp;utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->alias); ?>">ЗАКАЗАТЬ</a>
							</div>
							<div class="more">
								<a href="https://srs.myrusakov.ru/<?php echo e($course->alias); ?>?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->alias); ?>">ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<?php echo $course->full_description; ?>

			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<?php $__currentLoopData = $free_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="course">
                <h3><?php echo e($loop->index + count($courses) + 1); ?>. <?php echo e($course->title); ?></h3>
                <div class="course_table">
                    <div>
                        <div>
                            <img src="images/courses/<?php echo e($course->alias); ?>.png" alt="<?php echo e($course->title); ?>">
                        </div>
                        <div class="course_order">
                            <p>ЗАПОЛНИТЕ ФОРМУ</p>
                            <form name="subscribe_<?php echo e($course->alias); ?>" method="post" action="https://srs.myrusakov.ru/subscribe?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=<?php echo e($course->title); ?>" onsubmit="return SR_submit(this)">
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
                    </div>
                </div>
                <div class="clear"></div>
                <?php echo $course->description; ?>

            </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php endif; ?><?php /**PATH E:\xampp_\htdocs\bloglaravel.local\resources\views/courses.blade.php ENDPATH**/ ?>