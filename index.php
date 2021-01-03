<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "head.php"; ?>
</head>
<body>
	<div class="background-cover bg-dark">
		<div class="container bg-white">
			<div class="custom-header pt-4 pr-4 pl-4 pb-5">
				<?php require_once "myinfo.php"; ?>
			</div>
			<div class="custom-content">
				<div class="row">
					<!-- EDUCATION -->
					<?php require_once "education.php" ?>

					<!-- EXPERIENCEs -->
					<?php require_once "experience.php" ?>
				</div>
				<div class="custom-header">
					<!-- SKILLs -->
					<?php require_once "skills.php" ?>

					<!-- LANGUAGEs -->
					<?php require_once "languages.php" ?>

					<!-- HOBBIES -->
					<?php require_once "hobbies.php" ?>
				</div>
			</div>
		</div>
	</div>

<?php require_once "foot.php"; ?>
</body>
</html>