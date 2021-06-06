<?php require __DIR__ . '/layouts/header.php'?>

	<div class="container">
		<ul class="small-menu"><!--small-nav -->
			<li><a href="" class="myacc">My Account</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul><!--small-nav -->
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bread"><a href="#">Home</a> &rsaquo; <?= $aboutConn['title']?></div>
							<div class="bigtitle"><?= $aboutConn['title']?></div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"><?= $aboutConn['title']?></div>
				</div>
				<div class="page-content">
                    <?= $aboutConn['content']?>
				</div>
                <div class="title-bg">
                    <div class="title">Vizyon</div>
                </div>
                <blockquote><?= $aboutConn['vision']?></blockquote>

                <div class="title-bg">
                    <div class="title">Missiya</div>
                </div>
                <blockquote><?= $aboutConn['mision']?></blockquote>

                <div class="title-bg">
                    <div class="title">Tanıtım Çarxı</div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $aboutConn['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
			</div>
<?php require __DIR__ . '/layouts/sidebar.php'?>
		</div>
		<div class="spacer"></div>
	</div>
	
<?php require __DIR__ . '/layouts/footer.php'?>
