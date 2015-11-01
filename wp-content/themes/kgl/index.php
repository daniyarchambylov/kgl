<?php get_header(); ?>
<section class=hero style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg.jpg')">
	<div class=container>
		<div class=row>
			<div class="col-xs-12 text-center hero--content">
				<h1><?php pll_e('Диагностика и лечение в Южной Корее с Korea Green Life'); ?></h1>

				<p>Специально для Вас мы собрали только самые необходимые сведения, чтобы сэкономить драгоценное время на поиск
					нужной информации в интернете.</p> <a href=# data-toggle=modal data-target=#myModal
														  class="custom-btn-action custom-btn-outline">Бесплатная консультация</a>
			</div>
		</div>
	</div>
</section>
<section class=content>
	<div class=container>
		<div class=row>
			<div class=col-xs-12><h1>3 причины выбрать <br> Korea Life Green</h1></div>
		</div>
		<div class=row>
			<div class="col-md-6 col-xs-12">
				<ul class="line-list">
					<li class="line-list--item">
						Вся работа осуществляется <strong>сертифицированным координатором</strong>, имеющим опыт работы в многопрофильной больнице
					</li>
					<li class="line-list--item">
						<strong>One-stop обслуживание</strong> – можно заказать все услуги в одном месте и не нужно больше никуда обращаться.
					</li>
					<li class="line-list--item">
						Предоставляются <strong>специальные скидки </strong> для постоянных клиентов
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-12 news"><h4>Новости</h4>
				<?php echo do_shortcode('[ic_add_posts template="my-recent-tmpl.php" showposts="2"]'); ?>
				<?php $news_id = get_locale() == 'en' ? 35 : 23 ?>
				<a href="<?php echo get_page_link($news_id); ?>" class=news--more><?php pll_e('Все новости'); ?></a></div>
		</div>
		<div class=row>
			<div class="col-md-6 col-xs-12">
				<div class=hospitals><h2 class=hospitals--title>Многопрофильные больницы</h2>

					<p class=hospitals--meta>Многие многопрофильные больницы Кореи созданы на базе медицинских факультетов ведущих
						университетов, а это значит:</p>
					<ul class="bullet-list">
						<li class="bullet-list--feature">
							<a href="#">только самые квалифицированные и опытные специалисты;</a>
						</li>
						<li class="bullet-list--feature">последнии технологии в области лечения и диагностирования заболеваний всех органов и систем;</li>
						<li class="bullet-list--feature">диагностика в самые кратчайшие сроки;</li>
						<li class="bullet-list--feature">консультации сразу нескольких специалистов;</li>
					</ul>
					<a href=# class="custom-btn custom-btn-green">Все больницы</a></div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class=hospitals-spec><h2 class=hospitals-spec--title>Специализированные клиники</h2>

					<p class=hospitals-spec--text>С развитием медицины в Корее успешно стали развиваться специализированные
						клиники, которые предоставляют спектр медицинских услуг в одной узкой специализации. </p>

					<p class=hospitals-spec--text>Естественно, что динамичное продвижение в одной специализации дает собственные
						преимущества таких клиник и больниц. </p>

					<p class=hospitals-spec--text>Помимо узкоспециализированного оборудования, врачи и доктора подобных клиник
						постоянно совершенствуют свои методы и технологии благодаря многолетнему и большому практическому </p> <a
						href=# class="custom-btn custom-btn-lightgreen">Все клиники</a></div>
			</div>
		</div>
		<div class=row>
			<div class=col-xs-12>
				<div class=hr-head><h2 class=hr-head--title>Этапы подготовки</h2></div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class=tabs-left>
					<ul class="nav nav-tabs">
						<li class=active><a href=#a data-toggle="tab">С чего начать?</a></li>
						<li><a href="#b" data-toggle="tab">Что предстоит?</a></li>
						<li><a href="#c" data-toggle="tab">Диагностическое обследование</a></li>
						<li><a href="#d" data-toggle="tab">Амбулаторный прием</a></li>
						<li><a href="#e" data-toggle="tab">Госпитализация</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class=tab-content>
					<div class="tab-pane active" id="a">
						<ul class="custom-list pull-left">
							<li class=custom-list-item>Сбор информации</li>
							<li class=custom-list-item>Отправка запроса в несколько клиник</li>
							<li class=custom-list-item>Получение ответа</li>
							<li class=custom-list-item>Принятие решения о выборе клиники и дате поездки</li>
							<li class=custom-list-item>Предварительное бронирование обследования/лечения</li>
						</ul>
					</div>
					<div class=tab-pane id="b">
						<ul class="custom-list pull-left">
							<li class=custom-list-item>Принятие решения о выборе клиники и дате поездки</li>
							<li class=custom-list-item>Отправка запроса в несколько клиник</li>
							<li class=custom-list-item>Получение ответа</li>
							<li class=custom-list-item>Сбор информации</li>
							<li class=custom-list-item>Предварительное бронирование обследования/лечения</li>
						</ul>
					</div>
					<div class=tab-pane id="c">CCCCThirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
						varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.
					</div>
					<div class=tab-pane id="d">DDDDDSecondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
						accumsan. Aliquam in felis sit amet augue.
					</div>
					<div class=tab-pane id="e">EEEEEThirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
						varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.
					</div>
				</div>
			</div>
		</div>
		<div class=row>
			<div class="col-xs-12 hr-head"><h2 class=hr-head--title>Этапы подготовки</h2></div>
			<div class=col-xs-12>
				<div class=extra-services>
					<a href=#><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon1.svg">Переводческие услуги</a>
					<a href=#><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon2.svg">Трансфер и сопровождение</a>
					<a href=#><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon3.svg">Визовая поддержка</a>
					<a href=#><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon4.svg">Проживание</a>
					<a href=#><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon5.svg">Досуг</a></div>
			</div>
		</div>
	</div>
</section>
<?php //endif; ?>
<?php get_footer(); ?>
