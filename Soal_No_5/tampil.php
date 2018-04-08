<?php

	mysql_connect("localhost","root","");

	mysql_select_db("bootchamparka");

	$qry=mysql_query("SELECT posts.title as postku, users.username as usernameku, comments.comment as komen FROM posts, users, comments WHERE posts.id=comments.postId and posts.createdBy=users.id");?>

	<table>
		<tbody>
			<?php 
				while($d=mysql_fetch_array($qry))
				{?>
					<tr>
						<th>post.title:</th>
						<td><?php echo $d['postku'] ?></td>
					</tr>
					<tr>
						<th>post.users.username</th>
						<td>dibuat oleh <?php echo $d['usernameku'] ?></td>
					</tr>
					<tr>
						<th>comments</th>
						<td><?php echo $d['komen'] ?></td>
					</tr>
				<?php } ?>

		</tbody>
	</table>
