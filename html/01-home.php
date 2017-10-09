<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Intro -->
	<section id="intro" class="section--full intro magnetic">
		<h1 class="intro__title">
			DIGITAL<br>
			Art direction<br>
			& production<br>
			made with
		</h1>
	</section>

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
				<a href="#">
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
				<a href="#">
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
				<a href="#">
					<?php echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
				</a>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?>