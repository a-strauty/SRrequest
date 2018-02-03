<div id="form_container">

	<h2>Stops by Day</h2>

	<form id="form_srbyday" class="srbyday"  method="get" action="sr/results">
	<ul>
	<li id="li1">
	<!-- create dropdown -->
	<label class="description" for="element_1">Select Sales-Rep</label>
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
	</li>
	<li "li2">
	<label class="description" for="element_1">Select Day</label>
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
	</li>
	<li>
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	</li>
	</ul>
	</form>
</div>
<p>
<p><?php echo anchor('', 'Back')?>
<p>
