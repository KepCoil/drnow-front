<?php include("_head.php") ?>
<?php include("_header.php") ?>


<main id="main-content-layour" class="js-main-content-layour main-content-layour main-content-layour-inner-page">
	<div class="container">


		<div class="sidebar-page">
			<div class="doctors-list">

				<h2 class="main-content-layour-inner-page__main-title">Наши доктора</h2>

				<div class="row sidebar-page__row">

					<div class="col-md-3 col-sm-4 sidebar-page__col">
						<aside class="sidebar-page__sidebar main-sidebar">
							<div id="js-search-list" class="main-sidebar__container">

								<div class="doctors-list__search-wrap">
									<input id="js-search-list-input" class="search doctors-list__search-input" placeholder="Мне нужен..." />
								</div>

								<nav class="sidebar-nav doctors-list__nav">
									<ul class="doctors-list__nav-list list">
										
										<!-- Список нужно генерить в алфавитном порядке -->

										<!-- Активный элемент -->
										<li class="doctors-list__nav-item doctors-list__nav-item-active">
											<a href="#" class="doctors-list__nav-link js-doc-list">Аллерголог</a>
										</li>


										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Андролог</a>
										</li>

										<!-- Не активный элеммент -->
										<li class="doctors-list__nav-item doctors-list__nav-item-disable">
											<a title="Докторов нет :(" href="#" class="doctors-list__nav-link js-doc-list">Гастроэнеролог</a>
										</li>


										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list"">Гинеколог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Дерматовенеролог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Иммунолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Инфекционист</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Кардиолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Кардиохирург</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Косметолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Невролог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Нейрохирург</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Нефролог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Маммолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Онколог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Оториноларинголог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Офтальмолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Педиатр</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Неонатолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Пластический хирург</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Проктолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Профпатолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Психолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Пульмонолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Ревматолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Сомнолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Сосудистый хирург</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Сурдолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Спортивный врач</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Стоматолог</a>
										</li>
										<li class="doctors-list__nav-item">
											<a href="#" class="doctors-list__nav-link js-doc-list">Терапевт</a>
										</li>


									</ul>
									<div id="js-search-clear-list" class="doctors-list__search-clear-list">
										Ничего не найдено :(
									</div>
								</nav>

								
							</div>
						</aside>
					</div>


					<div class="col-md-9 col-sm-8 sidebar-page__col">
						<div class="sidebar-page__main-content">

							<div class="doctors-list__content">
								
								<div class="doctors-list__item">
									<div class="doctors-list__item-left">
										<div class="doctors-list__wrap-img">
											<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc1.jpg');"></div>
											123
										</div>
									</div>
									<div class="doctors-list__item-right">
										123
									</div>
								</div>

								<div class="doctors-list__item">
									<div class="doctors-list__item-left">
										<div class="doctors-list__wrap-img">
											<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc1.jpg');"></div>
										</div>
									</div>
									<div class="doctors-list__item-right"></div>
								</div>
								
							</div>

						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

</main>



<?php include("_footer.php") ?>
<?php include("_end.php") ?>