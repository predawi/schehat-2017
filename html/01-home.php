<?php $class = 'home'; ?>
<?php include 'header.php'; ?>

	<!-- Background holder -->
	<div class="background-holder" id="background-holder"></div>

	<!-- MAIN -->
	<div class="main" id="main">
		<!-- Intro -->
		<section id="intro" class="section--full intro intro--above">
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
				<span class="visuallyhidden">fire</span>
				<div class="fire">
					<img src="../assets/img/fire.gif" alt="" class="lazyload">
				</div>
			</h1>
		</section>

		<section id="intro" class="section--full intro intro--behind">
			<div class="intro__title">
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
				<div class="fire">
					<img src="../assets/img/fire.gif" alt="" class="lazyload">
				</div>
			</divh1>
		</section>

		<!-- Projects previews -->
		<div class="projects-wrapper" id="projects-wrapper">
			<!-- Col left -->
			<div class="projects-wrapper__col projects-wrapper__col--left">
				<!-- Project 01 -->
				<section id="project-01" class="project">
					<h2 class="project__title rellax" data-rellax-speed="-2"><span>GQ</span> <br><span>France</span></h2>
					<div class="project__img">
						<a href="#" class="project__link" data-project="project-01" data-bg="#FF5B2C">
							<img src="../assets/img/thumb-gq.jpg" alt="">
						</a>
					</div>
				</section>

				<!-- Project 04 -->
				<section id="project-04" class="project">
					<h2 class="project__title rellax" data-rellax-speed="-2"><span>Basalte</span></h2>
					<div class="project__img">
						<a href="#" class="project__link" data-project="project-04" data-bg="#121212">
							<img src="../assets/img/thumb-basalte.jpg" alt="">
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
							<img src="../assets/img/thumb-m6pub.gif" alt="">
						</a>
					</div>
				</section>

				<!-- Project 03 -->
				<section id="project-03" class="project">
					<h2 class="project__title rellax" data-rellax-speed="-2"><span>Ebay</span></h2>
					<div class="project__img">
						<a href="#" class="project__link" data-project="project-03" data-bg="#8B7EBE">
							<img src="../assets/img/thumb-ebay.gif" alt="">
						</a>
					</div>
				</section>
			</div>
		</div>
	</div>

	<!-- Projects details -->
	<div id="project-zoom-tpl" class="project-zoom-tpl">
		<?php include 'project-01.php'; ?>
		<?php include 'project-02.php'; ?>
		<?php include 'project-03.php'; ?>
		<?php include 'project-04.php'; ?>
	</div>

	<!-- About section -->
	<div id="about-section" class="about-section">
		<div class="about-section__img">
			<img src="../assets/img/photo-about.jpg" alt="">
		</div>

		<div class="about-section__side">
			<div class="about-section__text">
				<p>Freelance art director based in Paris with over 8 years experience, I’ve been working for startups and international brands in media, culture, fashion and luxury sectors. Want to know more about me or to talk about your new project ? Drop a line below to my alter-ego bot !</p>

				<a href="https://twitter.com/nrrskn" target="_blank" class="about-section__link link-w-veil">Twitter</a>
				<a href="https://www.instagram.com/snorrsken/" target="_blank" class="about-section__link link-w-veil">Instagram</a>

				<ul class="about-section__tags">
					<li>Art direction</li>
					<li>Photo & Film</li>
					<li>Illustration</li>
					<li>Motiondesign</li>
					<li>Visual identity</li>
					<li>UI design</li>
				</ul>
			</div>

			<div class="about-section__chat" id="about-section__chat">
				<form id="cf-form" class="visuallyhidden">
					<fieldset>
						<label for="name">Hello handsome, what’s your name ?</label>
						<input required="" cf-questions="Hello handsome, what’s your name ?" type="text" class="form-control" name="name" id="name" tabindex="-1">
					</fieldset>

					<fieldset cf-questions="Nice to meet you {previous-answer}, what do you want to chat about ?">
						<label for="subject">Nice to meet you, what do you want to chat about ?</label>
						<input type="checkbox" name="subject" value="My new project" cf-label="My new project" />
						<input type="checkbox" name="subject" value="A collaboration" cf-label="A collaboration" />
						<input type="checkbox" name="subject" value="A partnership" cf-label="A partnership" />
					</fieldset>

					<fieldset>
						<label for="object">Tell me about it !</label>
						<input required="" cf-questions="Tell me about it !" type="text" class="form-control" name="object" id="object" tabindex="-1">
					</fieldset>

					<fieldset>
						<label for="email">Let’s stay in touch, can I have your email ?</label>
						<input required="" cf-questions="Let’s stay in touch, can I have your email ?" type="text" class="form-control" name="email" id="email" tabindex="-1">
					</fieldset>
				</form>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>