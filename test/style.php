<?php
function setProps ($classname,$fontcolor,$fontsize)
	{	echo "
		<style>
		.$classname{
			color : $fontcolor;
			font-size : $fontsize;
		}
		</style>";
	 } 
function setBorders($classname,$bordertype,$borderradii)
{
	echo "
		<style>
			.$classname {
				border : $bordertype;
				border-radius : $borderradii;
			}
		</style> ";
}
 ?>


<?php 
	setProps('date','green',7);
	setProps('content','black',12);
	
	setBorders('content','1px solid blue','5px');
?>
