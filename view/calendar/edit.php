<!--<div id="container">
  <h1>Dit is student/edit</h1>
</div>-->
<div class="container">
	<form action="<?= URL ?>calendar/editSave" method="post">
		<div><p class="text">Voornaam: </p></div>
		<input type="text" name="person" value="<?= $calendar['calendar_person']; ?>">
		<br>
		<br>
		<div><p class="text">Dag: </p></div>
		<select name="day">
			<option value="1" <?php if ($calendar['calendar_day'] == 1) {echo "selected=\true\"";}?>>1</option>
			<option value="2" <?php if ($calendar['calendar_day'] == 2) {echo "selected=\true\"";}?>>2</option>
			<option value="3" <?php if ($calendar['calendar_day'] == 3) {echo "selected=\true\"";}?>>3</option>
			<option value="4" <?php if ($calendar['calendar_day'] == 4) {echo "selected=\true\"";}?>>4</option>
			<option value="5" <?php if ($calendar['calendar_day'] == 5) {echo "selected=\true\"";}?>>5</option>
			<option value="6" <?php if ($calendar['calendar_day'] == 6) {echo "selected=\true\"";}?>>6</option>
			<option value="7" <?php if ($calendar['calendar_day'] == 7) {echo "selected=\true\"";}?>>7</option>
			<option value="8" <?php if ($calendar['calendar_day'] == 8) {echo "selected=\true\"";}?>>8</option>
			<option value="9" <?php if ($calendar['calendar_day'] == 9) {echo "selected=\true\"";}?>>9</option>
			<option value="10" <?php if ($calendar['calendar_day'] == 10) {echo "selected=\true\"";}?>>10</option>
			<option value="11" <?php if ($calendar['calendar_day'] == 11) {echo "selected=\true\"";}?>>11</option>
			<option value="12" <?php if ($calendar['calendar_day'] == 12) {echo "selected=\true\"";}?>>12</option>
			<option value="13" <?php if ($calendar['calendar_day'] == 13) {echo "selected=\true\"";}?>>13</option>
			<option value="14" <?php if ($calendar['calendar_day'] == 14) {echo "selected=\true\"";}?>>14</option>
			<option value="15" <?php if ($calendar['calendar_day'] == 15) {echo "selected=\true\"";}?>>15</option>
			<option value="16" <?php if ($calendar['calendar_day'] == 16) {echo "selected=\true\"";}?>>16</option>
			<option value="17" <?php if ($calendar['calendar_day'] == 17) {echo "selected=\true\"";}?>>17</option>
			<option value="18" <?php if ($calendar['calendar_day'] == 18) {echo "selected=\true\"";}?>>18</option>
			<option value="19" <?php if ($calendar['calendar_day'] == 19) {echo "selected=\true\"";}?>>19</option>
			<option value="20" <?php if ($calendar['calendar_day'] == 20) {echo "selected=\true\"";}?>>20</option>
			<option value="21" <?php if ($calendar['calendar_day'] == 21) {echo "selected=\true\"";}?>>21</option>
			<option value="22" <?php if ($calendar['calendar_day'] == 22) {echo "selected=\true\"";}?>>22</option>
			<option value="23" <?php if ($calendar['calendar_day'] == 23) {echo "selected=\true\"";}?>>23</option>
			<option value="24" <?php if ($calendar['calendar_day'] == 24) {echo "selected=\true\"";}?>>24</option>
			<option value="25" <?php if ($calendar['calendar_day'] == 25) {echo "selected=\true\"";}?>>25</option>
			<option value="26" <?php if ($calendar['calendar_day'] == 26) {echo "selected=\true\"";}?>>26</option>
			<option value="27" <?php if ($calendar['calendar_day'] == 27) {echo "selected=\true\"";}?>>27</option>
			<option value="28" <?php if ($calendar['calendar_day'] == 28) {echo "selected=\true\"";}?>>28</option>
			<option value="29" <?php if ($calendar['calendar_day'] == 29) {echo "selected=\true\"";}?>>29</option>
			<option value="30" <?php if ($calendar['calendar_day'] == 30) {echo "selected=\true\"";}?>>30</option>
			<option value="31" <?php if ($calendar['calendar_day'] == 31) {echo "selected=\true\"";}?>>31</option>
		</select>
		<br>
		<br>
		<div><p class="text">Maand: </p></div>
		<select name="month">
			<option value="1" <?php if ($calendar['calendar_month'] == 1) {echo "selected=\true\"";}?>>Januari</option>
			<option value="2" <?php if ($calendar['calendar_month'] == 2) {echo "selected=\true\"";}?>>Februari</option>
			<option value="3" <?php if ($calendar['calendar_month'] == 3) {echo "selected=\true\"";}?>>Maart</option>
			<option value="4" <?php if ($calendar['calendar_month'] == 4) {echo "selected=\true\"";}?>>April</option>
			<option value="5" <?php if ($calendar['calendar_month'] == 5) {echo "selected=\true\"";}?>>Mei</option>
			<option value="6" <?php if ($calendar['calendar_month'] == 6) {echo "selected=\true\"";}?>>Juni</option>
			<option value="7" <?php if ($calendar['calendar_month'] == 7) {echo "selected=\true\"";}?>>Juli</option>
			<option value="8" <?php if ($calendar['calendar_month'] == 8) {echo "selected=\true\"";}?>>Augustus</option>
			<option value="9" <?php if ($calendar['calendar_month'] == 9) {echo "selected=\true\"";}?>>September</option>
			<option value="10" <?php if ($calendar['calendar_month'] == 10) {echo "selected=\true\"";}?>>Oktober</option>
			<option value="11" <?php if ($calendar['calendar_month'] == 11) {echo "selected=\true\"";}?>>November</option>
			<option value="12" <?php if ($calendar['calendar_month'] == 12) {echo "selected=\true\"";}?>>December</option>	
		</select>
		<br>
		<br>
		<div><p class="text">Jaar: </p></div>
		<input type="text" name="year" value="<?= $calendar['calendar_year']; ?>">
		<br>
		<br>
		<input type="hidden" name="id" value="<?= $calendar['calendar_id']; ?>">
		<input type="submit" value="Verzenden">
	</form>

</div>