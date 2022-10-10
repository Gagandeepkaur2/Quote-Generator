<?php
    $api_url='http://api.quotable.io/random';
    $quote=json_decode(file_get_contents($api_url));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quote Generator</title>
	<style type="text/css">
		body{
			background: #f4f4f4;
			display: flex;
			justify-content: center;
			font-family: arial;
		}
		.box{
			background: #fff;
			padding: 20px;
			width: 500px;
			font-size: 19px;
			line-height: 22px;
			color: #555;
		}
		.tag{
			background: #ddd;
			padding: 10px;
			border-radius: 10px;
			margin-right: 15px;
		}
		
	</style>
</head>
<body>
	<div class="box">
		<h3 class="content"><?php echo $quote->content;?></h3>
		<h5>- By <?php echo $quote->author;?></h5>
		<div class="tag-wrap">
			<?php foreach($quote->tags as $tag) {?>
				<span class="tag">
					<?php echo $tag;?>
				</span>
			<?php } ?> 
		</div>
	</div>

</body>
</html>