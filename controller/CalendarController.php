<?php

require(ROOT . "model/CalendarModel.php");

function index()
{
	render("calendar/index", array(
		'calendar' => getAllCalendar() 
	));
}

function create() 
{
	render("calendar/create");
}

function createSave()
{

	if (!createCalendar()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "calendar/index");
}

function edit($id)
{

	render("calendar/edit", array(
		'calendar' => getCalendar($id)
		));	
}

function editSave()
{
	if (!editCalendar($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "calendar/index");
} 

function delete($id)
{
	if (!deleteCalendar($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "calendar/index");
}
