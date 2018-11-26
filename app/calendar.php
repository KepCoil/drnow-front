<?php include("_head.php") ?>
<?php include("_header.php") ?>

<main id="main-content-layour" class="js-main-content-layour main-content-layour">
	<div id="wrap">
		<div class="container">

			<div class="table-responsive">
				<table class="table table-condensed table-bordered">
					<thead>
						<tr>
							<th>Дата</th>
							<th>Время</th>
							<th>Запись</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>25 Ноября</td>
							<td>16:00 - 18:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>

						<tr>
							<td rowspan="2">25 Ноября</td>
							<td>16:00 - 18:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>
						<tr>
							<td>18:00 - 20:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>

						<tr>
							<td rowspan="3">27 Ноября</td>
							<td>16:00 - 18:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>
						<tr>
							<td>18:00 - 20:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>
						<tr>
							<td>20:00 - 22:00</td>
							<td><button class="btn">записаться</button></td>
						</tr>

					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</main>

<?php include("_footer.php") ?>
<?php include("_end.php") ?>