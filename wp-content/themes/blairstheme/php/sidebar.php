<div class="sidebar">
	<div class="header">
		<a class="header__name" href="/">blair</a>
		<?php include 'php/social.php' ?>
	</div>

	<div class="navbar">
		<form>
			<select name="theme">
				<option value="classic" <?php if($_GET["theme"] == "classic") { ?> selected <?php } ?> >classic</option>
				<option value="cake time" <?php if($_GET["theme"] == "cake time") { ?> selected <?php } ?> >cake time</option>
			</select>
			<input type="submit" name="submittheme">
		</form>
		<h3>Pages</h3>
		<ul>
		<?php 
			$pages = array("home"=> "index.php", "goals"=> "goals.php", "photos"=> "photos.php");
			foreach ($pages as $page => $address) {
				if ($page == $pageID) {
					echo "<li id='currentpage'><a href=".$address.">".$page."</a></li>";
				}
				else { 
					echo "<li><a href=".$address.">".$page."</a></li>";
				}
			}
		?>
		</ul>
		<h3>Projects</h3>
		<?php include 'php/listprojects.php' ?>
		<h3>Articles</h3>
		<?php include 'php/listarticles.php' ?>
	</div>
</div>