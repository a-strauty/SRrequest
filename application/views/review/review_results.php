<?php
if ($accounts > 0)
{
    echo "
      <div id='form_container'>
      <form id='form_request' class='form_table'  method='post' action='remind.php'>
        <table id='table_id' class='display'>
          <thead>
            <tr>
              <th>Request ID</th>
              <th>Acct#</th>
              <th>Current SR</th>
              <th>New SR</th>
              <th>Current Day</th>
              <th>New Day</th>
              <th>DBA</th>
              <th>Address</th>
              <th>Zip</th>
            </tr>
          </thead>
          <tbody>";
    //output data of each row
    foreach ($accounts as $row) {
      # code...
      echo "
            <tr>
              <td>".$row->req_id."</td>
              <td>".$row->acctnum."</td>
              <td>".$row->original_sr."</td>
              <td>".$row->newsr."</td>
              <td>".$row->original_day."</td>
              <td>".$row->newday."</td>
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

echo "
    </br>
    </form>
    </div>";
echo anchor('', 'Back home.');
echo "<br />";
