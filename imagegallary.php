<!DOCTYPE HTML>
<?php
include "admin/include/dbase.php";
include "header/head.php";
?>
<style>
	.image{
		border:2px gray red;
		height:100px;
		width:100px;
	}

</style>

<div class="container">
<?php for($i=1;$i<4;$i++){
	?>


<div class="card-columns border border-2 hello " id="<?php echo $i;?>"  >
<div class="card" style="width: 500px;">
<div class="card-body">
<img   src="images/1.jpg"  height="200px" width="450px" style="border:3px solid gray">	
<div  id="mainimg<?php echo $i;?>">
<img src="images/2.jpg"  class="image">
<img src="images/3.jpg" class="image">	
<img src="images/4.jpg"  class="image">
<img src="images/5.jpg" class="image">	
</div>	
</div>	
</div>
<div class="card" style="width: 500px; margin-left:200px;">
<div class="card-body">
<h1 class="card-text text-center">hello this is image slide show</h1>	
</div>	
</div>
</div>
<?php
}
	?>
<script>

$(document).ready(function(){
$('.hello').click(function(){
var img=$(this).attr('id');
	alert("#mainimg"+img);
   $("#mainimg"+img+">img").css('visibility','hidden');
});
});

</script>