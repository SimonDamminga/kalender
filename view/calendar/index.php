<div class="container">
		<h1 class="title">Kalender</h1>
		<p class="add"><a id="adding" href="<?= URL ?>calendar/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Toevoegen</a></p>
	<?php
		setlocale(LC_TIME, 'Dutch', "NL_nl");
		foreach($calendar as $calendar_info){
			$monthNum = $calendar_info['calendar_month'];
			$monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10));
	?>
		<p class="titel"><?= $monthName ?></p>
		<hr>
		<p class="day"><?= $calendar_info['calendar_day']?></p>
		<p><a href="<?= URL ?>calendar/edit/<?= $calendar_info['calendar_id'] ?>"><?= $calendar_info['calendar_person']?> (<?= $calendar_info['calendar_year']?>)</p></a>
		<p><a href="<?= URL ?>calendar/delete/<?= $calendar_info['calendar_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><p>
	<?php 
		} 
	?>
		
</div>