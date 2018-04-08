<?php

	mysql_connect("localhost","root","");

	mysql_select_db("bootchamparka");

	$qry=mysql_query("SELECT posts.title as postku, posts.content as content, users.username as usernameku, comments.comment as komen FROM posts, users, comments WHERE posts.id=comments.postId and posts.createdBy=users.id");?>

	<?php 
	while($d=mysql_fetch_array($qry))
	{
		$title = $d['postku'];
		$content = $d['content'];
		$penulis = $d['usernameku'];
	}?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Blogge Inyong</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<header>
				<h1 class="text-center"><b><?php echo $title; ?></b></h1>
			</header>
			<br>
			<br>
			<p>
				<h4><?php echo $content; ?></h4>
			</p>
			<br>
			<br>
			<br>
			<p>
				<h4>Ditulis oleh: <?php echo $penulis; ?></h4>
			</p>
			<br>
			<br>
			<br>
			<h3><b>Comments:</b></h3><br>
			<table>
				<tbody>
					<?php
						$qry2=mysql_query("SELECT posts.id, comments.comment as komenku, comments.postId FROM posts, comments WHERE posts.id=comments.postId");
						while($e=mysql_fetch_array($qry2))
						{
							?>
							<tr>
								<td><?php echo $e['komenku'] ?></td>
							</tr>
						<?php } ?>

				</tbody>
			</table>
		</div>
	</body>
	</html>
