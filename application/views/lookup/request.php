  <h2>Request Account Changes</h2>
<div id="form container">

<?php

  if($accounts>0)
  {
    echo "
    <form id='form_request' class='form_query' method='post' action='submit'>
        <table id='table_id' class='display'>
          <thead>
            <tr>
              <th>SR</th>
              <th>New SR</th>
              <th>Old Day</th>
              <th>New Day</th>
              <th>Acct#</th>
              <th>DBA</th>
              <th>Address</th>
              <th>Zip</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>";

    //output data of each row
    foreach($accounts as $id => $row)
    {
      //create salesrep name dropdown
      echo "
        <tr>
          <td>".$row->sr_name."</td>
          <input type='hidden' name='req[".$id."][original_sr]' value='".$row->sr_name."' />
          <td>
            <select name='req[".$id."][newsr]'>";
            //this select name must match table name when submitting
            foreach($names as $rows)
            {
               //Set dropdown equal to current selection
              if ($req_sr == $rows->sr_id) {
                echo "
                  <option selected='true' value='".$rows->sr_id."'>".$rows->sr_name."</option>";
              } else {
                echo "
                  <option value='".$rows->sr_id."'>".$rows->sr_name."</option>";
              };
            };
      //create day dropdown
      echo "
            </select>
          </td>
          <td>".$row->sr_day."</td>
          <input type='hidden' name='req[".$id."][original_day]' value='".$row->sr_day."' />
          <td>
          	<select name='req[".$id."][newday]'>";
              foreach($days as $rowss)
              {
                //set day to current selection
                if($day == $rowss->value) {
                  echo "
                    <option selected='true' value='".$rowss->value."'>".$rowss->day."</option>";
                } else {
                  echo "
                    <option value='".$rowss->value."'>".$rowss->day."</option>";
                }
              }
      //build the rest of the form and add a hidden value to catch the account number.
      //All submitted variables on this page must match table name.
      echo "
          	</select>
          </td>
          <td>".$row->sr_acct."</td>
          <input type='hidden' name='req[".$id."][acctnum]' value='".$row->sr_acct."' />
          <td>".$row->acct_dba."</td>
          <td>".$row->acct_address."</td>
          <td>".$row->acct_zip."</td>
          <td>".$row->acct_phone."</td>
        </tr>";
    }
    echo "
    </tbody>
    </table>
    </br>
      <input id='saveForm' class='button_text' type='submit' name='submit' value='Request' />
    </form>";
  } else {
    echo "0 results";
  };
