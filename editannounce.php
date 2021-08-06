<h1>
			<?php
			session_start();
			echo $_SESSION['uname']
			?>
		</h1>
		<form action="announcement1.php" method="POST">
			<textarea name="Text1" cols="40" rows="5"><?php echo $_SESSION["Announcement"]; ?></textarea>
			<br>
			<button type="submit">Edit</button>
		</form>
		</a>