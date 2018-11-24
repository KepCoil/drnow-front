<?php include("_head.php") ?>
<?php include("_header.php") ?>


<main id="main-content-layour" class="js-main-content-layour main-content-layour main-content-layour-inner-page">
	<div class="container">


		<div class="sidebar-page">
			<div class="doctors-list">

				<h2 class="main-content-layour-inner-page__main-title">Наши доктора</h2>

				<div class="row sidebar-page__row">

					<div class="col-md-3 sidebar-page__col">
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


					<div class="col-md-9 sidebar-page__col">
						<div class="sidebar-page__main-content">

							<div class="doctors-list__content">
								
								<div class="doctors-list__item">
									<div class="doctors-list__main">
										<div class="doctors-list__item-left">
											<div class="doctors-list__wrap-img" data-toggle="modal" data-target="#doc-card-info-1">
												<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc1.jpg');"></div>
											</div>
										</div>
										<div class="doctors-list__item-right">
											<h4 class="doctors-list__name" data-toggle="modal" data-target="#doc-card-info-1">Иванов Иван Иванович</h4>
											<div class="doctors-list__doc">Хирург</div>
											<div class="doctors-list__text">Кандидат медицинских наук. Врач высшей квалификационной категории. Стаж работы - 24 года.</div>
											<div class="doctors-list__wrap-btn">
												<button class="btn doctors-list__btn doctors-list__btn-attendant"><i class="doctors-list__btn-icon fas fa-ambulance"></i>Дежурный</button>
												<button class="btn doctors-list__btn doctors-list__btn-consultation"><i class="doctors-list__btn-icon fas fa-user-md"></i>Консультация</button>
												<button class="btn doctors-list__btn doctors-list__btn-write"><i class="doctors-list__btn-icon fas fa-comments"></i>Написать</button>
											</div>
										</div>
									</div>
									<div class="doctors-list__info"></div>

									<!-- Modal -->
									<div class="modal fade doctors-list__modal" id="doc-card-info-1" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Карточка доктора</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<div class="modal-footer">
													<div class="doctors-list__wrap-btn">
												<button class="btn doctors-list__btn doctors-list__btn-attendant"><i class="doctors-list__btn-icon fas fa-ambulance"></i>Дежурный</button>
												<button class="btn doctors-list__btn doctors-list__btn-consultation"><i class="doctors-list__btn-icon fas fa-user-md"></i>Консультация</button>
												<button class="btn doctors-list__btn doctors-list__btn-write"><i class="doctors-list__btn-icon fas fa-comments"></i>Написать</button>
											</div>
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="doctors-list__item">
									<div class="doctors-list__main">
										<div class="doctors-list__item-left">
											<div class="doctors-list__wrap-img">
												<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc2.jpg');"></div>
											</div>
										</div>
										<div class="doctors-list__item-right">
											<h4 class="doctors-list__name">Кузнецова Елена Сергеевна</h4>
											<div class="doctors-list__doc">Хирург</div>
											<div class="doctors-list__text">Занимается мануальной терапией больше 50 лет.</div>
											<div class="doctors-list__wrap-btn">
												<button class="btn doctors-list__btn doctors-list__btn-attendant"><i class="doctors-list__btn-icon fas fa-ambulance"></i>Дежурный</button>
												<button class="btn doctors-list__btn doctors-list__btn-consultation"><i class="doctors-list__btn-icon fas fa-user-md"></i>Консультация</button>
												<button class="btn doctors-list__btn doctors-list__btn-write"><i class="doctors-list__btn-icon fas fa-comments"></i>Написать</button>
											</div>
										</div>
									</div>
									<div class="doctors-list__info"></div>
								</div>

								<div class="doctors-list__item">
									<div class="doctors-list__main">
										<div class="doctors-list__item-left">
											<div class="doctors-list__wrap-img">
												<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc1.jpg');"></div>
											</div>
										</div>
										<div class="doctors-list__item-right">
											<h4 class="doctors-list__name">Иванов Иван Иванович</h4>
											<div class="doctors-list__doc">Хирург</div>
											<div class="doctors-list__text">Кандидат медицинских наук. Врач высшей квалификационной категории. Стаж работы - 24 года. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Страна, проектах. Единственное переписывается океана над, последний букв, рукопись до.</div>
											<div class="doctors-list__wrap-btn">
												<button class="btn doctors-list__btn doctors-list__btn-attendant"><i class="doctors-list__btn-icon fas fa-ambulance"></i>Дежурный</button>
												<button class="btn doctors-list__btn doctors-list__btn-consultation"><i class="doctors-list__btn-icon fas fa-user-md"></i>Консультация</button>
												<button class="btn doctors-list__btn doctors-list__btn-write"><i class="doctors-list__btn-icon fas fa-comments"></i>Написать</button>
											</div>
										</div>
									</div>
									<div class="doctors-list__info"></div>
								</div>

								<div class="doctors-list__item">
									<div class="doctors-list__main">
										<div class="doctors-list__item-left">
											<div class="doctors-list__wrap-img">
												<div class="doctors-list__img" style="background-image: url('img/test/doc-photo/doc2.jpg');"></div>
											</div>
										</div>
										<div class="doctors-list__item-right">
											<h4 class="doctors-list__name">Кузнецова Елена Сергеевна</h4>
											<div class="doctors-list__doc">Хирург</div>
											<div class="doctors-list__text">Занимается мануальной терапией больше 50 лет. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Ты, безопасную они. Семантика рукописи толку они которой, одна букв, вопроса составитель вскоре реторический всемогущая ведущими ipsum прямо предупредила переулка?</div>
											<div class="doctors-list__wrap-btn">
												<button class="btn doctors-list__btn doctors-list__btn-attendant"><i class="doctors-list__btn-icon fas fa-ambulance"></i>Дежурный</button>
												<button class="btn doctors-list__btn doctors-list__btn-consultation"><i class="doctors-list__btn-icon fas fa-user-md"></i>Консультация</button>
												<button class="btn doctors-list__btn doctors-list__btn-write"><i class="doctors-list__btn-icon fas fa-comments"></i>Написать</button>
											</div>
										</div>
									</div>
									<div class="doctors-list__info"></div>
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