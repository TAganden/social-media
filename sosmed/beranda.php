<?php require('header.php'); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
    	</button>
		
		<a href="beranda.php" class="navbar-brand">Facebook</a>
	</div>
	
	<div class="collapse navbar-collapse navbar-left" id="target-list">
		<ul class="nav navbar-nav">
			<li class="active"><a href="beranda.php">Beranda</a></li>
			<li><a href="profile.php">Profile</a></li>
		</ul>
	</div>
	
	<div class="collapse navbar-collapse pull-right" id="target-list">
		<ul class="nav navbar-nav">
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>

	<form role="search" class="navbar-form navbar-right">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Cari . . .">
			<button type="submit" class="btn btn-primary">CARI</button>
		</div>
	</form>
</nav>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
	<div class="col-md-4">
		 <img src="gambar/foto-default.jpg" width="150" height="150">
	</div>
	<div class="col-md-8">
		 ini kolom 8
	</div>
</div>
</div>
<?php require('footer.php'); ?>