
 <table width="549" border="1">
                <tr>
				
			<!--	   <th width="30" scope="row">S/N</th>-->
				  <th width="170" scope="row">FULLNAME</th>
                  <th width="130" scope="row">EMAIL</th>
				  <th width="130" scope="row">MESSAGE</th>
                  
                   
                </tr>
                <?php
				include ('connection.php');
				$q=mysql_query("select * from message order by id asc") or trigger_error(mysql_error());
				 while ($row = mysql_fetch_array($q)){
				
				
					  			  ?>
                <tr>
				<!--<th scope="row"><?php// echo?>&nbsp;</th>-->

				  <th scope="row"><?php echo $row["name"]; ?>&nbsp;</th>
                  <th scope="row"><?php echo $row["email"]; ?>&nbsp;</th>
                  <th scope="row"><?php echo $row["msg"]?>&nbsp;</th>
				  
                     
                </tr>
					<?php } ?>
              </table>