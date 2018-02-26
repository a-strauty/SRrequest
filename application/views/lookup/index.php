<div class="grid-title">
	<h2>Stops by Day</h2>
</div>

	<form class="grid-form" id="srbyday"  method="get" action="sr/results">

		<div class="subgrid-formdropdown">
	<!-- create dropdown -->
			<label class="description" for="element_1">Who are you?</label>

				<span>
					<select name="sr_select">
						<?php
						//use php function to create sales rep dropdown
						foreach($names as $row)
						{
						echo '<option value="'.$row->sr_id.'">'.$row->sr_name.'</option>';
						}
						?>
					</select>
				</span>

		</div>

		<div class="subgrid-formDaySelectDescription">
			<label class="description" for="element_1">Select the day you would like to change</label>
		</div>
		<div class="subgrid-formDaySelect">
				<span>
						<?php
						//use php to create the day bubble options
						foreach($days as $row)
						{
						echo "<input id=".$row->day." name='dayradio' class='element radio' type='radio' value=".$row->value." />";
						echo "<label class='choice' for=".$row->day.">".$row->day."</label>";
						}
						?>
				</span>
		</div>
		<div class="subgrid-formDaySelectSubmit">
			<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</div>

	</form>


<div class="grid-bottomleft">
	<?php echo anchor('', 'Back')?>
</div>
