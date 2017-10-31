<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Intro -->
	<section id="intro" class="section--full intro magnetic">
		<h1 class="intro__title">
			<span class="txtwav slow">DIGITAL</span>&nbsp;<br>
			<span class="txtwav slow">Art direction</span>&nbsp;<br>
			<span class="txtwav slow">& production</span>&nbsp;<br>
			<span class="txtwav slow">made with</span>
		</h1>
	</section>

	<!-- Background holder -->
	<div class="background-holder" id="background-holder"></div>

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
					<a href="#" class="project-link" data-project="project-01" data-bg="sample/gq-image.jpg">
						<?php //echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						<img src="http://placehold.it/760x430" alt="">
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
					<a href="#" class="project-link" data-project="project-02" data-bg="sample/gq-image.jpg">
						<?php //echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						<img src="http://placehold.it/760x430" alt="">
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
					<a href="#" class="project-link" data-project="project-03" data-bg="">
						<?php //echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						<img src="http://placehold.it/760x430" alt="">
					</a>
				</div>
			</div>
		</section>

		<a href="#" class="next-project base-cta" id="next-project">Next</a>
	</div>

	<div id="project-zoom-tpl" class="project-zoom-tpl">
		<a href="#" class="close-project base-cta" id="close-project">Back</a>

		<canvas id="canvas"></canvas>

		<div class="project-zoom" data-zoom="project-01">
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
	</div>

<?php include 'footer.php'; ?>