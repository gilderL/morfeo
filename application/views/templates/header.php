<?php
/********************
*File name: header.php
*System Name: morfeo
*Module Name: welcome
*Class Name: none
*Dependencies: View			
*Revision: 2014-11-22
*Author:  
*e-mail Author: @uabc.edu.mx
*Copyright Notice: Derechos reservados, UABC 2014
*********************/
?>
<div id="Header">
    <div id="Logo" class="logo"></div>
    <div id="Search"></div>    
    <div id="Login">
    	<?php 
		if(isset($username)){
		
			echo form_open("users/login"); 
			echo form_input($username);
			echo form_input($password);
			echo '        <!--<div id="In" class="button"></div>
        <div id="Register"class="button"></div>-->
';
			echo '<div id="In" class="button"><?php echo form_button($submit);?></div>';
        	echo form_close();
	  		echo form_open("users/register");
      		echo '<div id="Register" class="button">';
	  		echo form_button($register);
			echo '</div>';
      		echo form_close();
		}
		?>
            
    </div>
</div>