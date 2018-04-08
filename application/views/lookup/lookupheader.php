<div class="grid-title">
	<h3>Viewing your Stops by Day</h3>
</div>
		<?php
		echo validation_errors();
		echo form_open('sr', 'class="grid-form"');
		?>

		<div class="subgrid-formdropdown">
			<label class="description" for="element_1">Who are you?</label>
				<span>
					<!-- create dropdown -->
					<?php
					//create an array that the form_dropdown understands
					$optionsDrowpdown = array();
					foreach ($srnames as $optionDrowpdown)
					{
						$optionsDrowpdown[$optionDrowpdown['sr_id']] = $optionDrowpdown['sr_name'];
					}
					//create the dropdown using the new array from above
					echo form_dropdown('sr_select', $optionsDrowpdown, set_value('sr_select'));
					?>
				</span>
		</div>

		<div class="subgrid-formDaySelectDescription">
			<label class="description" for="element_1">Select the day you would like to change</label>
		</div>

		<div class="subgrid-formDaySelect">
					<?php
					//use php to create the day bubble options
					foreach($days as $row)
					{
            if($dayradio == $row->value) {
              echo "<input id=".$row->day." name='dayradio' class='element radio' type='radio' value=".$row->value." checked/>";
              echo "<label class='radiocontainer' for=".$row->day.">".$row->dayshorthand."</label>";
            } else {
              echo "<input id=".$row->day." name='dayradio' class='element radio' type='radio' value=".$row->value." />";
              echo "<label class='radiocontainer' for=".$row->day.">".$row->dayshorthand."</label>";
            }
					}
					?>
		</div>

    <div class="subgrid-formDaySelectSubmit">
        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
    </div>
  </form>
  <div class="grid-formresults">
