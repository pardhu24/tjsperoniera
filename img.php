<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gallery | Peroneira</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<style>
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	}

body {
	font-family:"Helvetica Neue", Arial, sans-serif;
	}

.mosaicflow__column {
	float:left;
	}

.mosaicflow__item {
	position:relative;
	}
	.mosaicflow__item img {
		display:block;
		width:100%;
		max-width:500px;
		height:auto;
		}
	.mosaicflow__item p {
		position:absolute;
		bottom:0;
		left:0;
		width:100%;
		margin:0;
		padding:5px;
		background:hsla(0,0%,0%,.5);
		color:#fff;
		font-size:14px;
		text-shadow:1px 1px 1px hsla(0,0%,0%,.75);
		opacity:0;
		-webkit-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		   -moz-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		     -o-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		        transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		}
	.mosaicflow__item:hover p {
		opacity:1;
		}
	</style>
</head>
<body>
<?php
include "admin/database/Insert.php";
include "admin/database/update.php";
 ?>
	<p></p>

	<div class="mosaicflow" data-item-height-calculation="attribute">
 <?php
					$projects = array();
					$proobj = new Select;
					$projects = $proobj->selectAll("projects");
					for($i = 0; $i<count($projects); $i++) {?>
					
                                                    <div class="mosaicflow__item">
			<img width="300" height="200" src="admin/<?php echo $projects[$i]['images'] ?>"  alt="<?php echo $projects[$i]['title'] ?>">
			<p> <?php echo $projects[$i]['title'] ?></p>
		</div><?php }?>
		

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/jquery.mosaicflow.js"></script>

</body>
</html>
