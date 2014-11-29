	
<div class="wrapper">
<!--<div class="grid-10 grid"> -->
<form action="" method="post" enctype="multipart/form-data">
                  
<?php

foreach($users as $user_list)
{
?>
   
                
 
               
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                       
                        <td ><?php echo $user_list->id;?></td>
                        <td ><?php echo $user_list->firstname;?></td>
                   
                        
                        <td ><?php echo $user_list->lastname;?></td>
                   
                        
                        <td ><?php echo $user_list->streetaddress;?></td>
                   
                        
                        <td ><?php echo $user_list->city;?></td>
                   
                        <td ><?php echo $user_list->country;?></td>
                       
                        <td ><?php echo $user_list->postalcode;?></td>
                   
                        
                        <td ><img src="upload/<?php echo $user_list->image;?>" hieght='50' width='50'/></td>
                   
                       
                        
                    </tr>
                </table>
              
<?php } ?>                
</form>    
<!--</div>-->
</div>