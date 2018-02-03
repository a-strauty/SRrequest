<div id="form_container">
	<h2>Review created requests</h2>

	<form id="form_review" class="select"  method="get" action="review/review_results">
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
	<li>
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
	</li>
	</ul>
	</form>
</div>
