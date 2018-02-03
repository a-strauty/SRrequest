
<!-- re-create 'sr by day' search form -->
<div id="form_container">
  <h2>Stops by Day</h2>

    <form id="form_srbyday" class="form_query"  method="get" action="results">
    <ul>
    <li id="li1">

      <label class="description" for="element_1">Select Sales-Rep</label>
      <span>

      <select name="sr_select">
        <?php
        //use php function to create sales rep dropdown
        foreach($names as $row)
        {
          if($sr_select == $row->sr_id) {
            echo '<option selected="true" value="'.$row->sr_id.'">'.$row->sr_name.'</option>';
          } else {
            echo '<option value="'.$row->sr_id.'">'.$row->sr_name.'</option>';
          }
        }
        ?>
      </select>

      </span>
    </li>

    <li id="li2">
      <label class="description" for="element_1">Select Day</label>
        <span><!-- create day radio buttons using same method as above -->

        <?php
        foreach($days as $row)
        {
          if($dayradio == $row->value) {
            echo "<input id=".$row->day." name='dayradio' class='element radio' type='radio' value=".$row->value." checked/>";
            echo "<label class='choice' for=".$row->day.">".$row->day."</label>";
          } else {
            echo "<input id=".$row->day." name='dayradio' class='element radio' type='radio' value=".$row->value." />";
            echo "<label class='choice' for=".$row->day.">".$row->day."</label>";
          }
        }
        ?>

        </span>
    </li>

    <li id="li_submit">
      <input id="saveForm" class="button_text" type="submit" name="submit" value="Search" />
    </li>

    </ul>
    </form>
</div>

<div id="form_container">
<!-- display search results from above form -->
<?php
  //create the table and new form for submitting requests
  unset($row);
  if ($accounts > 0) {
    echo "
      <form id='form_request' class='form_table'  method='post' action='request'>
        <table id='table_id' class='display'>
          <thead>
            <tr>
              <th>Change</th>
              <th>SR</th>
              <th>Day</th>
              <th>Sequence</th>
              <th>Acct#</th>
              <th>DBA</th>
              <th>Address</th>
              <th>Zip</th>
            </tr>
          </thead>
          <tbody>";
    //output data of each row

    foreach($accounts as $row) {
      //Create checkboxes with values of the account numbers for request form
      echo "
            <tr>
              <td><input type='checkbox' name='req_change[]' value='".$row->sr_acct."'></td>
              <td>".$row->sr_name."</td>
              <input type='hidden' name='req_sr' value='".$row->sr_name."' />
              <td>".$row->sr_day."</td>
              <input type='hidden' name='og_day' value='".$row->sr_day."' />
              <td>".$row->sr_seq."</td>
              <td>".$row->sr_acct."</td>
              <td>".$row->acct_dba."</td>
              <td>".$row->acct_address."</td>
              <td>".$row->acct_zip."</td>
            </tr>";
    }

    echo "
    </tbody>
    </table>
    </br>";
  } else {
    echo "0 results";
  };
//create submit request button
echo "
    </br>
    <input id='saveForm' class='button_text' type='submit' name='submit' value='Request' /> ";
echo anchor('sr', 'Cancel');
echo "
    </form>
    </div>";
?>
</div>
