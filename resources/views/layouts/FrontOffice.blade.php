
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>Helpo HTML Template</title>
		<!-- styles-->
		<link rel="stylesheet" href="{{ asset('assets/FrontOffice/css/styles.min.css')}}"/>
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					<ul class="aside-menu">
						<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li class="item--active"><a href="index.html"><span>01 Home Color Style</span></a></li>
								<li><a href="front_2.html"> <span>02 Home Color Style</span></a></li>
								<li><a href="front_3.html"><span>03 Home Color Style</span></a></li>
								<li><a href="mono/index.html"><span>04 Home Monochrome</span></a></li>
								<li><a href="mono/front_2.html"><span>05 Home Monochrome</span></a></li>
								<li><a href="mono/front_3.html"><span>06 Home Monochrome</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="about.html"><span>Accueil</span></a></li>
								<li><a href="typography.html"> <span>Causes</span></a></li>
								<li><a href="donors.html"><span>Évènements</span></a></li>
								<li><a href="volunteer.html"><span>A propos</span></a></li>
								<li><a href="events.html"><span>Events</span></a></li>
								<li><a href="event-details.html"><span>Event Details</span></a></li>
								<li><a href="stories.html"><span>Stories</span></a></li>
								<li><a href="story-details.html"><span>Story Details</span></a></li>
								<li><a href="blog.html"><span>Blog</span></a></li>
								<li><a href="blog-post.html"><span>Blog Post</span></a></li>
								<li><a href="gallery.html"><span>Gallery</span></a></li>
								<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
								<li><a href="faq.html"><span>FAQ</span></a></li>
								<li><a href="404.html"><span>404 Page</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="causes.html"><span>Causes 1</span></a></li>
								<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
								<li><a href="causes_3.html"><span>Causes 3</span></a></li>
								<li><a href="cause-details.html"><span>Cause Details</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="shop.html"><span>Catalog Page</span></a></li>
								<li><a href="shop-product.html"><span>Shop Product</span></a></li>
								<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
								<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
								<li><a href="shop-account.html"><span>Shop Account</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
						<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a>
							<!-- sub menu start-->
							<ul class="aside-menu__sub-list">
								<li><a href="alerts.html"><span>Alerts</span></a></li>
								<li><a href="team.html"><span>Team</span></a></li>
								<li><a href="testimonials.html"><span>Testimonials</span></a></li>
								<li><a href="accordion.html"><span>Accordion</span></a></li>
								<li><a href="tabs.html"><span>Tabs</span></a></li>
								<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
								<li><a href="counters.html"><span>Counters</span></a></li>
								<li><a href="icons.html"><span>Icons</span></a></li>
							</ul>
							<!-- sub menu end-->
						</li>
					</ul>
				</div>
				<div class="aside-dropdown__item">
					<!-- aside menu start-->
					<ul class="aside-menu">
						<li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
						<li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
					</ul>
					<!-- aside menu end-->
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
					<ul class="aside-socials">
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--front">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo"><a class="header-logo__link" href="index.html"><img class="header-logo__img logo--light" src="img/logo_white.png" alt="logo"/><img class="header-logo__img logo--dark" src="img/logo_dark.png" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
                                    <li class="main-menu__item  main-menu__item--active"><a class="main-menu__link" href="{{route('f-home')}}"><span style="font-weight: bold; color:black;">Accueil</span></a></li>
                                    <li class="main-menu__item  main-menu__item--active"><a class="main-menu__link" href="{{route('f-causes')}}"><span style="font-weight: bold; color:black;">Nos Causes</span></a></li>
									<li class="main-menu__item  main-menu__item--active"><a class="main-menu__link" href="{{route('f-events')}}"><span style="font-weight: bold; color:black;">Évènements</span></a></li>
									<li class="main-menu__item  main-menu__item--active"><a class="main-menu__link" href="{{route('f-blog')}}"><span style="font-weight: bold; color:black;">Actualité</span></a></li>
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span style="font-weight: bold; color:black;">A propos</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list sub-list--style-2">
											<li><a href="{{route('f-about')}}"><span>Saarakh ONG</span></a></li>
											<li><a href="{{route('f-partners')}}"> <span>Partenaire</span></a></li>
											<li><a href="{{route('f-home')}}"><span>Donateurs</span></a></li>
											<li><a href="faq.html"><span>FAQ</span></a></li>
										</ul>
										<!-- sub menu end-->
                                    </li>
                                    <li class="main-menu__item  main-menu__item--active"><a class="main-menu__link" href="{{route('f-contacts')}}"><span style="font-weight: bold; color:black;">Contacts</span></a></li>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							<!-- lang select start-->
							<ul class="lang-select">
								<li class="lang-select__item lang-select__item--active"><span>FR</span>
									<ul class="lang-select__sub-list">
										<li><a href="#">Français</a></li>
										<li><a href="#">English</a></li>
									</ul>
								</li>
							</ul>
							<!-- lang select end-->
							<div class="dropdown-trigger d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div><a class="button button--squared" href="#"><span style="font-weight: bold; font-size:1.4em;">Faire un Don</span></a>
						</div>
					</div>
				</div>
			</header>
			<!-- header end-->
		    @yield('content')
			<!-- footer start-->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="footer-logo"><a class="footer-logo__link" href="index.html"><img class="footer-logo__img" src="{{asset('assets/FrontOffice/img/logo_white.png')}}" alt="logo"/></a></div>
							<!-- footer socials start-->
							<ul class="footer-socials">
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<!-- footer socials end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Contacts</h4>
							<div class="footer-contacts">
								<p class="footer-contacts__address">Dakar Sénégal</p>
								<p class="footer-contacts__phone">Mobile: <a href="tel:+31859644725">(+221) 77 000 00 00</a></p>
								<p class="footer-contacts__phone">Whatsapp: <a href="tel:+31859644725">(+221) 77 000 00 00</a></p>
								<p class="footer-contacts__mail">Email: <a href="mailto:support@helpo.org">infos@dondecoeur.org</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Menu & Liens utiles</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="index.html">Accueil</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Causes</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="about.html">Évènements</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">A propos</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Contact</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Donateurs</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="causes.html">Volontaires</a></li>
								</ul>
							</nav>
							<!-- footer nav end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Donate</h4>
							<p>Aidez nous à changer la vie de gens qui sont dans le besoin.</p><a class="button footer__button button--filled" href="#"> Faire un don</a>
						</div>
					</div>
					<div class="row align-items-baseline">
						<div class="col-md-6">
							<p class="footer-copyright">© 2021 Saarakh. Tous Droits Réservés | Une Filliale de Illugraphic</p>
						</div>
						<div class="col-md-6">
							<div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condision</a></div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="{{ asset('assets/FrontOffice/js/libs.min.js')}}"></script>
		<!-- scripts-->
		<script src="{{ asset('assets/FrontOffice/js/common.min.js')}}"></script>

	</body>
</html>

