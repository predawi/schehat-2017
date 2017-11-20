<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Background holder -->
	<div class="background-holder" id="background-holder"></div>

	<div class="main" id="main">
		<!-- Intro -->
		<section id="intro" class="section--full intro magnetic">
			<h1 class="intro__title">
				<!-- Digital -->
				<span class="txtwav slow" data-font="font-bebas">
					Digital
				</span>&nbsp;<br>
				<!-- Art direction -->
				<span class="txtwav slow" data-font="font-peacesans">
					Art
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-gradual">
					direction
				</span>&nbsp;<br>
				<!-- & visual -->
				<span class="txtwav slow" data-font="font-zefani">
					&
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-peacesans">
					visual
				</span>&nbsp;<br>
				<!-- Production -->
				<span class="txtwav slow" data-font="font-gradual">
					production
				</span>&nbsp;<br>
				<!-- Made with -->
				<span class="txtwav slow" data-font="font-peacesans">
					made
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-bebas">
					with
				</span>&nbsp;<br>
			</h1>
		</section>

		<div class="projects-wrapper" id="projects-wrapper">
			<!-- Project 01 -->
			<section id="project-01" class="section--full project magnetic">
				<div class="container">
					<div class="project__metas">
						<div class="project__metas__item">
							<span>Client</span>
							GQ France
						</div>
						<div class="project__metas__item">
							<span>Project</span>
							IOS Application
						</div>
						<div class="project__metas__item">
							<span>Role</span>
							Art Direction
						</div>
					</div>

					<div class="project__img">
						<a href="#" class="project-link" data-project="project-01" data-bg="#FF5B2C">
							<?php echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						</a>
					</div>
				</div>
			</section>

			<!-- Project 02 -->
			<section id="project-02" class="section--full project magnetic">
				<div class="container">
					<div class="project__metas">
						<div class="project__metas__item">
							<span>Client</span>
							GQ France
						</div>
						<div class="project__metas__item">
							<span>Project</span>
							IOS Application
						</div>
						<div class="project__metas__item">
							<span>Role</span>
							Art Direction
						</div>
					</div>

					<div class="project__img">
						<a href="#" class="project-link" data-project="project-02" data-bg="#FF5B2C">
							<?php echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						</a>
					</div>
				</div>
			</section>

			<!-- Project 03 -->
			<section id="project-03" class="section--full project magnetic">
				<div class="container">
					<div class="project__metas">
						<div class="project__metas__item">
							<span>Client</span>
							GQ France
						</div>
						<div class="project__metas__item">
							<span>Project</span>
							IOS Application
						</div>
						<div class="project__metas__item">
							<span>Role</span>
							Art Direction
						</div>
					</div>

					<div class="project__img">
						<a href="#" class="project-link" data-project="project-03" data-bg="#FF5B2C">
							<?php echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						</a>
					</div>
				</div>
			</section>

		</div>
	</div>

	<div id="project-zoom-tpl" class="project-zoom-tpl">

		<!--canvas id="canvas"></canvas-->

		<div class="project-zoom" data-zoom="project-01">
			<div class="project-slide">
				<video width="760" height="" muted loop>
					<source src="../assets/img/videos/gq1.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="project-slide">
				<video width="760" height="" muted loop>
					<source src="../assets/img/videos/gq2.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="project-slide">
				<video width="760" height="" muted loop>
					<source src="../assets/img/videos/gq3.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="project-slide">
				<video width="760" height="" muted loop>
					<source src="../assets/img/videos/gq4.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<div class="project-slide">
				<video width="760" height="" muted loop>
					<source src="../assets/img/videos/gq5.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>

		<div class="project-zoom" data-zoom="project-02">
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
		</div>

		<div class="project-zoom" data-zoom="project-03">
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
			<div class="project-slide">
				<img src="http://placehold.it/760x456" alt="">
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>