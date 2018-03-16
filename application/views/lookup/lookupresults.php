<!-- display search results from above form -->
<?php
  //create the table and new form for submitting requests
  unset($row);
  if ($accounts > 0) {
    echo form_open('sr/request');
    echo "
        <table id='tbl-lookupresults' class='display'>
        <colgroup>
          <col style='width:3%'>
          <col style='width:3%'>
          <col style='width:6%'>
          <col style='width:50%'>
          <col style='width:32%'>
          <col style='width:6%'>
        </colgroup>
          <thead>
            <tr>
              <th></th>
              <th></th>
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
              <input type='hidden' name='req_sr' value='".$row->sr_name."' />
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
