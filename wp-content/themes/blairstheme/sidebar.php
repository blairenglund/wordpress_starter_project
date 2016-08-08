<div class="sidebar">
	<div class="header">
		<a class="header__name" href="<?php bloginfo('wpurl');?>">blair</a>
		<?php include '/php/social.php' ?>
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
			<?php wp_list_pages('title_li=') ?>
		</ul>
		<h3>Projects</h3>
			<?php include 'php/listprojects.php' ?>
		<h3>Articles</h3>
		<ul>
			<?php wp_get_archives( array('type'=>'postbypost') ); ?>
		</ul>
	</div>
</div>