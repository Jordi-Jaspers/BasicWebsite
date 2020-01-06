<!DOCTYPE HTML>
<html>
	<head>
		<title>Jordi Jaspers | Homepage</title>
		<link rel="icon" type="image/ico" href="images/avatar.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="bio" content="Self-learning software and electrical engineering through research & development. Engineering Student at UHasselt University Belgium.">
		<meta name="keywords" content="Engineer, Engineering, Projects, Self-made, Student, Professional, First, Website, IT, Developer, ICT, Electronic">
		<meta name="author" content="Jordi Jaspers">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
	</head>

	<body class="is-preload">

		<!-- Header -->
		<div id="header">

			<div class="top">
				<!-- Logo -->
					<div id="logo">
						<span class="image avatar48"><img src="images/avatar.png" alt="" /></span>
						<h1 id="title">Jordi Jaspers</h1>
						<p>Electronic & Software </p>
						<p>Engineer</p>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#top" id="top-link"><span class="icon solid fa-home">Homepage</span></a></li>
							<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Portfolio</span></a></li>
							<li><a href="#webapplication" id="webapplication-link"><span class="icon fa-window-restore">Web-Application</span></a></li>
							<li><a href="#about" id="about-link"><span class="icon solid fa-address-card">About Me</span></a></li>
							<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
						</ul>
					</nav>

					<!-- Authentication in the Navbar -->
					<nav id="nav">
						<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" id="login-link"><span class="icon solid fa-sign-in-alt">{{ __('Login') }}</span></a></li>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" id="register-link"><span class="icon solid fa-user-plus">{{ __('Register') }}</span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a onclick="myFunction()" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									<span class="icon solid fa-user">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                </a>
									<div id="myDropdown" class="dropdown-content" >
									@if (Auth::user()->id == 1)
										<a class="dropdown-item" href="/messages" id="messages-link">
										<span class="icon solid fa-inbox">Messages</span>
										</a>
									@endif	
										<a class="dropdown-item" href="/blog" id="BlogPost-link">
										<span class="icon solid fa-blog">Blog</span>
										</a>

										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<span class="icon solid fa-sign-out-alt">{{ __('Logout') }}</span>
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
							</li>
                        @endguest
                    </ul>
					<ul>
						@guest	
						@if (Route::has('register'))
							<li><a><span id="login-error" class="icon solid fa-times-circle login-error">Not logged in!</span ></a></li>
						@endif
						@else
						<li><a><span id="login-confirmation" class="icon solid fa-check login-confirmation">Logged in!</span ></a></li>
						@endguest
					</ul>

				</nav>
		</div>

			<div class="bottom">
				<!-- Social Icons -->
	
					<ul class="icons">
						<li><a href="https://www.instagram.com/jordi_jaspers/" class="icon brands fa-instagram"><span
									class="label">Instagram</span></a></li>
						<li><a href="https://www.linkedin.com/in/jordi-jaspers/" class="icon brands fa-linkedin"><span
									class="label">LinkedIn</span></a></li>
						<li><a href="https://github.com/Jordi-Jaspers" class="icon brands fa-github"><span
									class="label">Github</span></a></li>
						<li><a href="https://www.slideshare.net/slideshow/embed_code/key/BVNCamDQU5umn7" class="icon solid fa-file"><span
									class="label">Resume</span></a></li>
						<li><a href="mailto:jordijaspers@gmail.com" class="icon solid fa-envelope"><span 
									class="label">Email</span></a></li>
					</ul>
			</div>
		</div>

	<!-- Main -->
		<div id="main">

			<!-- Intro -->
				<section id="top" class="one dark cover">
					<div class="container">

						<header>
							<h2 class="alt"><strong>Jordi Jaspers</strong></h2>
							<p>Self-learning software developer through research & development. 
							Electronic & software engineering student at UHasselt | KULeuven</p>
						</header>

						<div class="bottom">

							<!-- Social Icons -->
							<ul class="icons">
								<li><a href="https://www.instagram.com/jordi_jaspers/" class="icon brands fa-instagram"><span
											class="label">Instagram</span></a></li>
								<li><a href="https://www.linkedin.com/in/jordi-jaspers/" class="icon brands fa-linkedin"><span
											class="label">LinkedIn</span></a></li>
								<li><a href="https://github.com/Jordi-Jaspers" class="icon brands fa-github"><span
											class="label">Github</span></a></li>
								<li><a href="https://www.slideshare.net/slideshow/embed_code/key/BVNCamDQU5umn7"
										class="icon solid fa-file"><span class="label">Resume</span></a></li>
								<li><a href="mailto:jordijaspers@gmail.com" class="icon solid fa-envelope"><span
											class="label">Email</span></a>
								</li>
							</ul>

						</div>

						<footer>
							<a href="#portfolio" class="button scrolly">Learn more</a>
						</footer>

					</div>
				</section>

			<!-- Portfolio -->
				<section id="portfolio" class="two">
					<div class="container">

						<header>
							<h2>Portfolio</h2>
						</header>

						<p>A few project I made throughout the years. To review the source code, click on the image. This will route you to the corresponding Github repository.</p>

						<div class="row">
							<div class="col-4 col-12-mobile">
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/ARMv8_Pipeline"
									class="image fit"><img src="images/pic02.jpg" alt="" /></a>
									<header>
										<h3>ARMv8 Pipeline (Verilog)</h3>
									</header>
								</article>
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/GBA_INFCQ"
									class="image fit"><img src="images/pic03.png" alt="" /></a>
									<header>
										<h3>GBA Mario game (C/C++)</h3>
									</header>
								</article>
								<article class="item">
										<a href="https://github.com/Jordi-Jaspers/Discordbot"
										class="image fit"><img src="images/pic06.png" alt="" /></a>
										<header>
											<h3>Discordbot (Java)</h3>
										</header>
								</article>
							</div>
							<div class="col-4 col-12-mobile">
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/RocketShooter"
									class="image fit"><img src="images/pic05.jpg" alt="" /></a>
									<header>
										<h3>SpaceInvader (Java)</h3>
									</header>
								</article>
								<article class="item">
										<a href="https://github.com/Jordi-Jaspers/ALTERA_SOCO_PROJECT" 
										class="image fit"><img src="images/pic04.jpeg" alt=""/></a>
										<header>
											<h3>LED Globe (Verilog)</h3>
										</header>
								</article>
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/Chrome_Offline_Game" class="image fit"><img src="images/pic07.jpg"
											alt="" /></a>
									<header>
										<h3>Google dinosaur game (Java)</h3>
									</header>
								</article>
							</div>
							<div class="col-4 col-12-mobile">
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/Tamarac"
									class="image fit"><img src="images/pic08.gif" alt="" /></a>
									<header>
										<h3>Tamarac (VHDL)</h3>
									</header>
								</article>
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/microfluidics"
									class="image fit"><img src="images/pic09.png" alt="" /></a>
									<header>
										<h3>Microfluidics viscosometer (Python)</h3>
									</header>
								</article>
								<article class="item">
									<a href="https://github.com/Jordi-Jaspers/Raspberry_Smart_Mirror" class="image fit"><img src="images/pic12.jpg"
											alt="" /></a>
									<header>
										<h3>Smart-Mirror (Node.js)</h3>
									</header>
								</article>
							</div>
						</div>
						<footer>
								<a href="https://github.com/Jordi-Jaspers/" class="button scrolly">More Projects on Github</a>
						</footer>
					</div>
				</section>

			<!-- Web-Application -->
			<section id="webapplication" class="three">
					<div class="container">

						<header>
							<h2>Web-Application</h2>
						</header>

						<p>This web-application is called "CurrencyExchanger" and makes use of the Rapid Currency API. The applet is built with different REST & SOAP-services</p>

						<footer>
								<a href="http://127.0.0.1:5000/CurrencyExchanger" class="button scrolly">Go to Web-Application</a>
						</footer>

					</div>
				</section>

			<!-- About Me -->
				<section id="about" class="four">
					<div class="container">

						<header>
							<h2>About Me</h2>
						</header>

						<p>Never the greatest student at school, but I love creating/learning through projects that interest me. Over the years I
						have taught myself multiple new things. I have spend a lot of time developing software & building electronic circuits.
						To fund my studies and projects, I work part-time next to my education. I've been catering and working in tech-related
						businesses since 2010. These different jobs have given me experience in multiple sectors.</p>

						<div class="box1">
							<summary>
								<h3>Languages</h3>
							</summary>
							<ul>
								<li>Dutch - Native Language</li>
								<li>English - C2 Level</li>
								<li>French - B2 Level</li>
								<li>German - A1 Level</li>
							</ul>
						</div>

						<div class="box2">
							<summary>
								<h3>Software Development</h3>
							</summary>
							<ul>
								<li>Java/Python Automation and logic design</li>
								<li>Basic Labview Automation</li>
								<li>Verilog/VHDL FPGA programming</li>
								<li>Low level C & C++ Experience</li>
								<li>HTML & CSS basic website design</li>
								<li>Usage of Amazon Web Services</li>
							</ul>
						</div>

						<div class="box3">
							<summary>
								<h3>Diplomas</h3>
							</summary>
							<ul>
								<li>Sin Moo Hapkido: 3th dan Black Belt - Official Trainer</li>
								<li>Technical Institute Sparrendal: VCA Certificate – Safety On The Workfloor</li>
								<li>Technical Institute Sparrendal: ICT Certificate – Usage Of MS Office</li>
								<li>Technical Institute Sparrendal: Secundairy Education Certificate - Engineering Science</li>
								<li>Technical Institute Sparrendal: PXL nomination – Tech Award 2015</li>
								<li>LIMTECH: Basic Hydraulics & Pneumatics Certificate</li>
								<li>UHasselt/KULeuven: Bachelor Electronic & Software Engineering</li>
								<li>UHasselt/KULeuven: Masters Electronic & Software Engineering</li>
								<li>Amazon: Multiple Amazon Web Services certificates</li>
							</ul>
						</div>	
					</div>
				</section>

			<!-- Contact -->
			<section id="contact" class="five">
				<div class="container">

					<header>
						<h2>Contact Me</h2>
					</header>

					<div class="form-notifications">
						@if(count($errors) > 0)
							@foreach($errors->all() as $error)
							<div class="alert-danger">
								{{$error}}
							</div>
							@endforeach
						@elseif(session('success'))	
						<div class="alert-confirmation">
								<p>Message was succesfully sent!</p>
						</div>
						@endif
					</div>		

					<!-- From Handler for the MessageControler, uses authentication and unique email.-->
					{!! Form::open(['url' => 'home/submit']) !!}
						<div class="row">
							<div class="col-6 col-12-mobile">
									{{Form::label('name', 'Name')}}
									{{Form::text('name', ' ', ['class' => 'form-control',  'placeholder' =>'Name & Surname'])}}
							</div>
							<div class="col-6 col-12-mobile">
									{{Form::label('email', 'E-Mail')}}
									{{Form::text('email', ' ', ['class' => 'form-control',  'placeholder' => 'example@gmail.com'])}}
							</div>
							<div class="col-12">
									{{Form::label('message', 'Message')}}
									{{Form::textarea('message', ' ', ['class' => 'form-control',  'placeholder' => 'Enter your message'])}}	
							</div>
							<div class="col-12">
									{{Form::submit('Submit',  ['class' => 'btn'])}}
							</div>
						</div>
						{!! Form::close() !!}
				</div>
			</section>
</div>

	<!-- Footer -->
		<div id="footer">
			<!-- Copyright -->
				<ul class="copyright">
					<li>&copy; Jordi Jaspers. All rights reserved.</li>
				</ul>
		</div>

	<!-- Scripts -->

		<script>
		function myFunction() {
  			document.getElementById("myDropdown").classList.toggle("show");
		}
		</script>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
