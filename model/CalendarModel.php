<?php

function getCalendar($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM calendar WHERE calendar_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;
	return $query->fetch();
} 

function getAllCalendar()  
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM calendar ORDER BY calendar_month ASC, calendar_day ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editCalendar() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;	
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($person) == 0 || strlen($month) == 0 || strlen($day) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE calendar SET calendar_person = :person, calendar_day = :day, calendar_month = :month, calendar_year = :year WHERE calendar_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':month' => $month,
		':day' => $day,
		':year' => $year,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteCalendar($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM calendar WHERE calendar_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createCalendar() 
{
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;	
	
	if (strlen($person) == 0 || strlen($month) == 0 || strlen($day) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO calendar(calendar_person, calendar_month, calendar_day, calendar_year) VALUES (:person, :month, :day, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $person,
		':month' => $month,
		':day' => $day,
		':year' => $year));

	$db = null;
	
	return true;
}
