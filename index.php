<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Background holder -->
	<div class="background-holder" id="background-holder"></div>

	<!-- MAIN -->
	<div class="main container" id="main">
		<div class="container">
			<div class="sidebar">
				<!-- Intro -->
				<section id="intro" class="section--full intro intro--above">
					<h1 class="intro__title">
						<!-- Digital -->
						<span>
							Interactive
						</span>&nbsp;<br>
						<!-- Art direction -->
						<span>
							design +
						</span>&nbsp;
						<span>
							visual
						</span>&nbsp;<br>
						<!-- & visual -->
						<span>
							production
						</span>
					</h1>

					<div class="mobile-disclaimer">
						Mobile is not the best device to check my projects, I suggest you use a tablet or a computer. Meanwhile, take a look at my profile and social medias :)
					</div>
				</section>

				<section id="intro" class="section--full intro intro--behind">
					<div class="intro__title">
						<!-- Digital -->
						<span>
							Interactive
						</span>&nbsp;<br>
						<!-- Art direction -->
						<span>
							design +
						</span>&nbsp;
						<span>
							visual
						</span>&nbsp;<br>
						<!-- & visual -->
						<span>
							production
						</span>
					</div>
				</section>
			</div>

			<!-- Projects previews -->
			<div class="projects-wrapper" id="projects-wrapper">
				<!-- Col left -->
				<div class="projects-wrapper__col projects-wrapper__col--left">
					<!-- Project 01 -->
					<section id="project-01" class="project">
						<h2 class="project__title rellax" data-rellax-speed="-2"><span>GQ</span> <br><span>France</span></h2>
						<div class="project__img">
							<a href="#" class="project__link" data-project="project-01" data-bg="#FF5B2C">
								<img src="assets/img/thumb-gq.jpg" alt="">
							</a>
						</div>
					</section>

					<!-- Project 04 -->
					<section id="project-04" class="project">
						<h2 class="project__title rellax" data-rellax-speed="-2"><span>Basalte</span></h2>
						<div class="project__img">
							<a href="#" class="project__link" data-project="project-04" data-bg="#121212">
								<img src="assets/img/thumb-basalte.jpg" alt="">
							</a>
						</div>
					</section>
				</div>

				<!-- Col right -->
				<div class="projects-wrapper__col projects-wrapper__col--right">
					<!-- Project 02 -->
					<section id="project-02" class="project">
						<h2 class="project__title rellax" data-rellax-speed="-2"><span>M6</span> <br><span>Publicité</span></h2>
						<div class="project__img">
							<a href="#" class="project__link" data-project="project-02" data-bg="#65899C">
								<img src="assets/img/thumb-m6pub.gif" alt="">
							</a>
						</div>
					</section>

					<!-- Project 03 -->
					<section id="project-03" class="project">
						<h2 class="project__title rellax" data-rellax-speed="-2"><span>Ebay</span></h2>
						<div class="project__img">
							<a href="#" class="project__link" data-project="project-03" data-bg="#8B7EBE">
								<img src="assets/img/thumb-ebay.gif" alt="">
							</a>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<!-- Projects details -->
	<div id="project-zoom-tpl" class="project-zoom-tpl">
		<?php include 'html/project-01.php'; ?>
		<?php include 'html/project-02.php'; ?>
		<?php include 'html/project-03.php'; ?>
		<?php include 'html/project-04.php'; ?>
	</div>

	<!-- About section -->
	<div id="about-section" class="about-section">
		<div class="container">
			<div class="about__title">
				<span>I’m a senior<br> art director with<br> over 8 years<br> experience</span>
			</div>
			<div class="about__description">
				I like to craft things, that’s pretty most all of it. From UI to motion design, branding, illustration, photo and film, I will help you make your project come to life with a large scale vision.
			</div>

			<div class="get-in-touch">
				<span class="get-in-touch__title">Get in touch</span>
				<a href="mailto:hello@sarahnorrsken.fr" class="get-in-touch__mail link-w-veil">hello@sarahnorrsken.fr</a>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>