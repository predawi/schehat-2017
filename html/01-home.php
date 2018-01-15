<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Background holder -->
	<div class="background-holder" id="background-holder"></div>

	<!-- MAIN -->
	<div class="main" id="main">
		<!-- Intro -->
		<section id="intro" class="section--full intro magnetic">
			<h1 class="intro__title">
				<!-- Digital -->
				<span class="txtwav slow" data-font="font-peacesans">
					Digital
				</span>&nbsp;<br>
				<!-- Art direction -->
				<span class="txtwav slow" data-font="font-peacesans">
					Art
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-peacesans">
					direction
				</span>&nbsp;<br>
				<!-- & visual -->
				<span class="txtwav slow" data-font="font-peacesans">
					&
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-peacesans">
					visual
				</span>&nbsp;<br>
				<!-- Production -->
				<span class="txtwav slow" data-font="font-peacesans">
					production
				</span>&nbsp;<br>
				<!-- Made with -->
				<span class="txtwav slow" data-font="font-peacesans">
					made
				</span>&nbsp;
				<span class="txtwav slow" data-font="font-peacesans">
					with
				</span>&nbsp;<br>
			</h1>
		</section>

		<!-- Projects previews -->
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
							M6 Pub
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
						<a href="#" class="project-link" data-project="project-02" data-bg="#65899C">
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
							Ebay
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
						<a href="#" class="project-link" data-project="project-03" data-bg="#8B7EBE">
							<?php echo get_the_post_thumbnail( 0, 'gq-image', array( 'data-location' => 'project-thumb', 'alt' => '#' ) ); ?>
						</a>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!-- Projects details -->
	<div id="project-zoom-tpl" class="project-zoom-tpl">
		<?php include 'project-01.php'; ?>
		<?php include 'project-02.php'; ?>
		<?php include 'project-03.php'; ?>
	</div>

	<!-- About section -->
	<div id="about-section" class="about-section">
		<div class="about-section__img">
			<img src="http://placehold.it/900x768" alt="">
		</div>

		<div class="about-section__side">
			<div class="about-section__text">
				<p>Freelance art director based in Paris with over 7 years experience, I’ve been working for startups and international brands in media, culture, fashion and luxury sectors. My personnal style is all about colors, playing with type and making crispy animations. Want to know more about me or to talk about your new project ? Drop a line below to my alter-ego bot :)</p>

				<a href="#" class="about-section__link">Twitter</a>
				<a href="#" class="about-section__link">Instagram</a>

				<ul class="about-section__tags">
					<li>Art direction</li>
					<li>Photo & Film</li>
					<li>Illustration</li>
					<li>Motiondesign</li>
					<li>Visual identity</li>
					<li>UI design</li>
				</ul>
			</div>

			<div class="about-section__chat" cf-context>
				<form id="cf-form" cf-form class="visuallyhidden">
					<fieldset>
						<label for="name">Hello handsome, what’s your name ?</label>
						<input required="" cf-questions="Hello handsome, what’s your name ?" type="text" class="form-control" name="name" id="name" tabindex="-1">
					</fieldset>

					<fieldset>
						<label for="surname">Hello handsome, what’s your name ?</label>
						<input required="" cf-questions="Hello handsome, what’s your name ?" type="text" class="form-control" name="surname" id="surname" tabindex="-1">
					</fieldset>
				</form>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>