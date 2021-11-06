<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
      .hello{
          border: none;
      }
  </style>
  </head>
  <body> 
   <table width="500px" height="500px" cellspacing="0px" cellpadding="0px" border="1px" class="hello">
      <?php
          $pit = array("\t","a","b","c","d","e","f","g","h");

      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          echo "<td style='text-align:center;border:none' height=30px width=30px>".$row."</td>";
          for($col=1;$col<=8;$col++)
		  {   
          $ko=$row+$col;
          if($ko%2==0)
		  {    
          echo "<td style='text-align:center' height=30px width=30px bgcolor=#FFFFFF>".$row.$pit[$col]."</td>";
          }
		  else
		  {
            echo "<td style='color:white;text-align:center' height=30px width=30px bgcolor=#000000>".$row.$pit[$col]."</td>";
        }
          }
          echo "</tr>";
    }
    for($row=0;$row<=8;$row++){    
    echo "<td style='text-align:center;border:none' height=30px width=30px>".$pit[$row]."</td>";
}
?>
        
  </table>
  </body>
  </html>