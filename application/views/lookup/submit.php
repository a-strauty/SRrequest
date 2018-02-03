<?php

foreach ($req as $row)
{
  echo "<br /> Account ".$row['acctnum']." submitted for day ".$row['newday']." and salesrep ".$row['newsr']."<br />";
};
echo anchor('sr', 'Back');
