<?php
 
  if(isset($_SESSION['views'])){
     $_SESSION['views'] = $_SESSION['views']+ 1;
  }else{
     $_SESSION['views'] = 1;
  }
  echo "Total page views = ". $_SESSION['views'];
?>