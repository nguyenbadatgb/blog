<!---->
<!--<div class="w3-row">-->
<!--	-->
<!--    <div class="w3-col l8 s12">-->
<!--        --><?php //DisplayPostsIndex(); ?>
<!--    </div>-->
<!--	-->
<!--    <div class="w3-col l4">-->
<!--        <div class="w3-card w3-margin w3-margin-top">-->
<!--            --><?php //DisplayOwner(); ?>
<!--        </div>-->
<!--        <hr>-->
<!--	    -->
<!--        <div class="w3-card w3-margin">-->
<!--            <div class="w3-container w3-padding">-->
<!--                <h4>Popular Posts</h4>-->
<!--            </div>-->
<!--            <ul class="w3-ul w3-hoverable w3-white">-->
<!--                --><?php //PopularPosts(); ?>
<!--            </ul>-->
<!--        </div>-->
<!--        <hr>-->
<!--	    -->
<!--        <div class="w3-card w3-margin">-->
<!--            <div class="w3-container w3-padding">-->
<!--                <h4>Tags</h4>-->
<!--            </div>-->
<!--            <div class="w3-container w3-white">-->
<!--                <p>--><?php //Tags(); ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--	    -->
<!--    </div>-->
<!--	-->
<!--</div>-->
<!--<br>-->
<!--<div class="w3-center">-->
<!--    <div class="w3-bar w3-border w3-round">-->
<!--      <b><a href="index.php" class="w3-bar-item w3-button">First</a></b>-->
<!--      <b><a href="--><?php //if($PageNo <= 1){echo "#"; } else { echo "?Page=".($PageNo - 1);} ?><!--" class="--><?php //if($PageNo <= 1){echo "w3-disabled"; } ?><!-- w3-bar-item w3-button">&laquo;</a></b>-->
<!--      <b><a href="--><?php //if($PageNo >= $TotalPages){ echo "#"; } else { echo "?Page=".($PageNo + 1); } ?><!--" class="--><?php //if($PageNo >= $TotalPages){ echo "w3-disabled"; } ?><!-- w3-button">&raquo;</a></b>-->
<!--      <b><a href="?Page=--><?php //echo $TotalPages; ?><!--" class="w3-button">Last</a></b>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!DOCTYPE html>
<html lang="en"
      class=" sizes websockets customelements history postmessage webworkers picture pointerevents webanimations webgl srcset flexbox cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="msapplication-TileColor" content="#0E0E0E">
	<meta name="template-color" content="#0E0E0E">
	<meta name="description" content="Index page">
	<meta name="keywords" content="index, page">
	<meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.svg">
	<link href="../css/style.css?v=1" rel="stylesheet">
	<title>Duykhanh - I am a high school student with a relentless passion for data science and computer science</title>
	<style data-jss="" data-meta="MuiDialog">
        @media print {
            .MuiDialog-root {
                position: absolute !important;
            }
        }

        .MuiDialog-scrollPaper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .MuiDialog-scrollBody {
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
        }

        .MuiDialog-scrollBody:after {
            width: 0;
            height: 100%;
            content: "";
            display: inline-block;
            vertical-align: middle;
        }

        .MuiDialog-container {
            height: 100%;
            outline: 0;
        }

        @media print {
            .MuiDialog-container {
                height: auto;
            }
        }

        .MuiDialog-paper {
            margin: 32px;
            position: relative;
            overflow-y: auto;
        }

        @media print {
            .MuiDialog-paper {
                box-shadow: none;
                overflow-y: visible;
            }
        }

        .MuiDialog-paperScrollPaper {
            display: flex;
            max-height: calc(100% - 64px);
            flex-direction: column;
        }

        .MuiDialog-paperScrollBody {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .MuiDialog-paperWidthFalse {
            max-width: calc(100% - 64px);
        }

        .MuiDialog-paperWidthXs {
            max-width: 444px;
        }

        @media (max-width: 507.95px) {
            .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthSm {
            max-width: 600px;
        }

        @media (max-width: 663.95px) {
            .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthMd {
            max-width: 960px;
        }

        @media (max-width: 1023.95px) {
            .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthLg {
            max-width: 1280px;
        }

        @media (max-width: 1343.95px) {
            .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthXl {
            max-width: 1920px;
        }

        @media (max-width: 1983.95px) {
            .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperFullWidth {
            width: calc(100% - 64px);
        }

        .MuiDialog-paperFullScreen {
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: none;
            border-radius: 0;
        }

        .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
            margin: 0;
            max-width: 100%;
        }
	</style>
</head>
<body data-new-gr-c-s-check-loaded="14.1134.0" data-gr-ext-installed="" cz-shortcut-listen="true">
<div class="body-overlay-1"></div>
<div id="preloader-active" style="display: none;">
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="preloader-inner position-relative">
			<div class="text-center"><img class="mb-10" src="images/favicon.svg" alt="GenZ">
				<div class="preloader-dots"></div>
			</div>
		</div>
	</div>
</div>
<header class="header sticky-bar bg-gray-900">
	<div class="container">
		<div class="main-header">
			<div class="header-logo"><a class="d-flex" href=""><img class="logo-night" alt="GenZ" src="images/logo.svg"><img class="d-none logo-day" alt="GenZ" src="images/logo-day.svg"></a></div>
			<div class="header-nav">
				<nav class="nav-main-menu d-none d-xl-block">
					<ul class="main-menu">
						<li>
							<a class="active" href="">Home</a>
						</li>
						<li><a class="color-gray-500" href="#">Voluntary</a>
						</li>
						<li><a class="color-gray-500" href="#">Work experience</a>
						</li>
						<li><a class="color-gray-500" href="#">Leadership</a>
						</li>
						<li><a class="color-gray-500" href="#">Sports</a>
						</li>
						<li><a class="color-gray-500" href="#">Hobbies</a></li>
					</ul>
				</nav>
				<div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
			</div>
			<div class="header-right text-end"><a class="btn btn-search" href=""></a>
				<div class="form-search p-20">
					<form action="">
						<input class="form-control" type="text" placeholder="Search">
						<input class="btn-search-2" type="submit" value="">
					</form>
					<div class="popular-keywords text-start mt-20">
						<p class="mb-10 color-white">Popular tags:</p><a class="color-gray-600 mr-10 font-xs" href=""># Travel,</a><a class="color-gray-600 mr-10 font-xs" href=""># Tech,</a><a
								class="color-gray-600 mr-10 font-xs" href=""># Movie</a><a class="color-gray-600 mr-10 font-xs" href=""># Lifestyle</a><a class="color-gray-600 mr-10 font-xs" href="">#
						                                                                                                                                                                               Sport</a>
					</div>
				</div>
				<div class="switch-button">
					<div class="form-check form-switch">
						<input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" role="switch" checked="">
					</div>
				</div>
				<a class="btn btn-linear d-none d-sm-inline-block hover-up hover-shadow" href="">Subscribe</a>
			</div>
		</div>
	</div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar bg-gray-900">
	<div class="mobile-header-wrapper-inner">
		<div class="mobile-header-content-area">
			<div class="mobile-logo border-gray-800"><a class="d-flex" href=""><img class="logo-night" alt="GenZ" src="images/logo.svg"><img class="d-none logo-day" alt="GenZ"
			                                                                                                                                 src="images/logo-day.svg"></a></div>
			<div class="perfect-scroll">
				<div class="mobile-menu-wrap mobile-header-border">
					<nav class="mt-15">
						<ul class="mobile-menu font-heading">
							<li><span class="menu-expand"><i class="fi-rr-caret-down"></i></span><a href="">Home</a>
							</li>
							<li><span class="menu-expand"><i class="fi-rr-caret-down"></i></span><a href="">Category</a>
							</li>
							<li><span class="menu-expand"><i class="fi-rr-caret-down"></i></span><a href="">Single Post</a>
							</li>
							<li><span class="menu-expand"><i class="fi-rr-caret-down"></i></span><a class="color-gray-500" href="">Portfolio</a>
							</li>
							<li><span class="menu-expand"><i class="fi-rr-caret-down"></i></span><a href="">Pages</a>
							</li>
							<li><a href="">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-account border-gray-800">
					<div class="mobile-header-top bg-gray-900">
						<div class="user-account"><a href=""><img src="images/ava.jpg" alt="GenZ"></a>
							<div class="content">
								<h6 class="user-name color-white">Hello<span class="color-white"> Steven !</span></h6>
								<p class="font-xs text-muted">You have 3 new messages</p>
							</div>
						</div>
					</div>
					<ul class="mobile-menu">
						<li><a href="">Profile</a></li>
						<li><a href="">Articles Saved</a></li>
						<li><a href="">Add new post</a></li>
						<li><a href="">My Likes</a></li>
						<li><a href="">Account Setting</a></li>
						<li><a href="">Sign out</a></li>
					</ul>
				</div>
				<div class="site-copyright color-gray-400 mt-30">Copyright 2023 © Genz - Personal Blog Template.<br>Designed by<a href="" target="_blank">&nbsp; AliThemes</a></div>
			</div>
		</div>
	</div>
</div>
<main class="main">
	<div class="cover-home1">
		<div class="container">
			<div class="row">
				<div class="col-xl-1"></div>
				<div class="col-xl-10 col-lg-12">
					<div class="banner">
						<div class="row align-items-end">
							<div class="col-lg-6 pt-100"><span class="text-sm-bold color-gray-600 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Hello Everyone!</span>
								<h1 class="color-gray-50 mt-20 mb-20 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">I’m
									<a class="typewrite color-linear" href="" data-period="3000"><span class="wrap">Duy Khanh</span></a></h1>
								<div class="row">
									<div class="col-lg-9">
										<p class="text-base color-gray-600 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">I am a high school student
										                                                                                                                                    with a relentless passion
										                                                                                                                                    for data science and
										                                                                                                                                    computer science. My journey
										                                                                                                                                    in the world of technology
										                                                                                                                                    and data-driven solutions is
										                                                                                                                                    driven by an abiding
										                                                                                                                                    commitment to making a
										                                                                                                                                    difference in the lives of
										                                                                                                                                    those who are facing
										                                                                                                                                    challenges.
											<br>
										</p>
									</div>
								</div>
								<div class="box-subscriber mt-40 mb-50 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
									<div class="inner-subscriber bg-gray-800">
										<form class="d-flex" action="">
											<input class="input-sybscriber" type="text" placeholder="Type your email address">
											<button class="btn btn-linear btn-arrow-right">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6 text-center">
								<div class="banner-img position-relative wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><img src="images/IMG_8514 (1).JPG"
								                                                                                                                                           alt="Genz">
									<div class="pattern-1"><img src="images/pattern-1.svg" alt="Genz"></div>
									<div class="pattern-2"><img src="images/pattern-2.svg" alt="Genz"></div>
									<div class="pattern-3"><img src="images/pattern-3.svg" alt="Genz"></div>
									<div class="pattern-4"><img src="images/pattern-4.svg" alt="Genz"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-70">
						<div class="box-topics border-gray-800 bg-gray-850">
							<div class="row">
								<div class="col-lg-2">
									<h5 class="mb-15 color-white wow animate__ animate__fadeInUp animated" data-wow-delay="0s"
									    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">More about me</h5>
									<p class="color-gray-500 mb-20 wow animate__ animate__fadeInUp animated" data-wow-delay=".3s"
									   style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">These are pattern about my life.</p>
									<div class="box-buttons-slider position-relative wow animate__ animate__zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
										<div class="swiper-button-prev swiper-button-prev-style-1" tabindex="0" role="button" aria-label="Previous slide"
										     aria-controls="swiper-wrapper-827dd0f688cd56e4"></div>
										<div class="swiper-button-next swiper-button-next-style-1" tabindex="0" role="button" aria-label="Next slide"
										     aria-controls="swiper-wrapper-827dd0f688cd56e4"></div>
									</div>
								</div>
								<div class="col-lg-10">
									<div class="box-swiper">
										<div class="swiper-container swiper-group-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
											<div class="swiper-wrapper" id="swiper-wrapper-827dd0f688cd56e4" aria-live="off"
											     style="transform: translate3d(-1438.4px, 0px, 0px); transition-duration: 0ms;">
                                                <?php getTags(); ?>

<!--												<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/sport.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Sport</h6>-->
<!--																		<p class="text-xs color-gray-500">38 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/travel.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Travel</h6>-->
<!--																		<p class="text-xs color-gray-500">63 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/design.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Design</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/movie.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Movie</h6>-->
<!--																		<p class="text-xs color-gray-500">125 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" role="group" aria-label="5 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/lifestyle.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Lifestyle</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="6 / 15" style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/IMG_4935.JPG" style="width: 160px; height: 195px;" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Hobbies</h6>-->
<!--																		<p class="text-xs color-gray-500">38 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="7 / 15" style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/Voluntary.png" style="width: 160px ; height: 195px;" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Voluntary</h6>-->
<!--																		<p class="text-xs color-gray-500">63 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="8 / 15" style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/Work_Experience.png" style="width: 160px; height: 195px;" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Work experience</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="9 / 15" style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/sport.png" style="width: 160px; height: 195px;" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Sport</h6>-->
<!--																		<p class="text-xs color-gray-500">125 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" role="group" aria-label="10 / 15" style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/LeaderShip.png" style="width: 160px; height: 195px;" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Leadership</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="11 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/sport.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Sport</h6>-->
<!--																		<p class="text-xs color-gray-500">38 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="12 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/travel.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Travel</h6>-->
<!--																		<p class="text-xs color-gray-500">63 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="13 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/design.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Design</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="14 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/movie.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Movie</h6>-->
<!--																		<p class="text-xs color-gray-500">125 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
<!--												<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" role="group" aria-label="15 / 15"-->
<!--												     style="width: 159.8px; margin-right: 20px;">-->
<!--													<div class="card-style-1"><a href="#">-->
<!--															<div class="card-image"><img src="images/lifestyle.png" alt="Genz">-->
<!--																<div class="card-info">-->
<!--																	<div class="info-bottom">-->
<!--																		<h6 class="color-white mb-5">Lifestyle</h6>-->
<!--																		<p class="text-xs color-gray-500">78 Articles</p>-->
<!--																	</div>-->
<!--																</div>-->
<!--															</div>-->
<!--														</a></div>-->
<!--												</div>-->
											</div>
											<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <h2 class="color-linear d-inline-block mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Editor's picked</h2>
                    <p class="text-lg color-gray-500 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Featured and highly rated articles</p>
                    <div class="row mt-70">
                      <div class="col-lg-6 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        <div class="card-blog-1 hover-up">
                          <div class="card-image mb-20"><a class="post-type" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"></a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/news2.png" alt="Genz"></a></div>
                          <div class="card-info">
                            <div class="row">
                              <div class="col-7"><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Lifestyle</a>
                              </div>
                              <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                            </div><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                              <h4 class="color-white mt-20"> Self-observation is the first step of inner unfolding</h4></a>
                            <div class="row align-items-center mt-25">
                              <div class="col-7">
                                <div class="box-author"><img src="images/author.png" alt="Genz">
                                  <div class="author-info">
                                    <h6 class="color-gray-700">Joseph</h6><span class="color-gray-700 text-sm">25 Nov 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><span>Read more</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 wow animate__ animate__fadeIn animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="card-blog-1 hover-up">
                          <div class="card-image mb-20"><a class="post-type" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"></a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/news1.png" alt="Genz"></a></div>
                          <div class="card-info">
                            <div class="row">
                              <div class="col-7"><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Design</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Movie</a>
                              </div>
                              <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">6 mins read</span></div>
                            </div><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                              <h4 class="color-white mt-20"> Self-observation is the first step of inner unfolding</h4></a>
                            <div class="row align-items-center mt-25">
                              <div class="col-7">
                                <div class="box-author"><img src="images/author2.png" alt="Genz">
                                  <div class="author-info">
                                    <h6 class="color-gray-700">Joseph</h6><span class="color-gray-700 text-sm">27 Sep 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><span>Read more</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="card-blog-1 hover-up">
                          <div class="card-image mb-20"><a class="post-type" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"></a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/news3.png" alt="Genz"></a></div>
                          <div class="card-info">
                            <div class="row">
                              <div class="col-7"><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Design</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Movie</a>
                              </div>
                              <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">6 mins read</span></div>
                            </div><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                              <h5 class="color-white mt-20"> Self-observation is the first step of inner unfolding</h5></a>
                            <div class="row align-items-center mt-25">
                              <div class="col-7">
                                <div class="box-author"><img src="images/author3.png" alt="Genz">
                                  <div class="author-info">
                                    <h6 class="color-gray-700">Joseph</h6><span class="color-gray-700 text-sm">27 Sep 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><span>Read more</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                        <div class="card-blog-1 hover-up">
                          <div class="card-image mb-20"><a class="post-type" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"></a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/news4.png" alt="Genz"></a></div>
                          <div class="card-info">
                            <div class="row">
                              <div class="col-7"><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Design</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Movie</a>
                              </div>
                              <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">6 mins read</span></div>
                            </div><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                              <h5 class="color-white mt-20"> Self-observation is the first step of inner unfolding</h5></a>
                            <div class="row align-items-center mt-25">
                              <div class="col-7">
                                <div class="box-author"><img src="images/author4.png" alt="Genz">
                                  <div class="author-info">
                                    <h6 class="color-gray-700">Joseph</h6><span class="color-gray-700 text-sm">27 Sep 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><span>Read more</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="card-blog-1 hover-up">
                          <div class="card-image mb-20"><a class="post-type" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"></a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/news5.png" alt="Genz"></a></div>
                          <div class="card-info">
                            <div class="row">
                              <div class="col-7"><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Design</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> #Movie</a>
                              </div>
                              <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">6 mins read</span></div>
                            </div><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                              <h5 class="color-white mt-20"> Self-observation is the first step of inner unfolding</h5></a>
                            <div class="row align-items-center mt-25">
                              <div class="col-7">
                                <div class="box-author"><img src="images/author5.png" alt="Genz">
                                  <div class="author-info">
                                    <h6 class="color-gray-700">Joseph</h6><span class="color-gray-700 text-sm">27 Sep 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-5 text-end"><a class="readmore color-gray-500 text-sm" href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><span>Read more</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mb-50"><a class="btn btn-linear btn-load-more wow animate__animated animate__zoomIn" style="visibility: hidden; animation-name: none;">
                        Show More Posts
                        <i class="fi-rr-arrow-small-right"></i></a></div>
                    <h2 class="color-linear d-inline-block mb-10 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Popular Tags</h2>
                    <p class="text-lg color-gray-500 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Most searched keywords</p>
                    <div class="row mt-70 mb-50">
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0s" style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag1.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Travel</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag2.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> Culture</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag3.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Lifestyle</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag4.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Fashion</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag5.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Food</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag6.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Space</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag7.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Animal</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag8.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Minimal</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag9.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Interior</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag10.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Plant</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag11.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Nature</a></div>
                        </div>
                      </div>
                      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="card-style-2 hover-up hover-neon wow animate__animated animate__fadeIn" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                          <div class="card-image"><a href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"><img src="images/tag12.png" alt="Genz"></a></div>
                          <div class="card-info"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Business</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-70">
                      <div class="col-lg-8">
                        <h2 class="color-linear d-inline-block mb-10">Recent posts</h2>
                        <p class="text-lg color-gray-500">Don't miss the latest trends</p>
                        <div class="box-list-posts mt-70">
                          <div class="card-list-posts wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <div class="card-image hover-up"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-news-1.jpg" alt="Genz"></a></div>
                            <div class="card-info"><a class="btn btn-tag bg-gray-800 hover-up" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Working Tips</a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                <h4 class="mt-15 mb-20 color-white">Helpful Tips for Working from Home as a Freelancer</h4></a>
                              <p class="color-gray-500">Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far</p>
                              <div class="row mt-20">
                                <div class="col-7"><a class="color-gray-700 text-sm mr-15" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Lifestyle</a></div>
                                <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="card-list-posts wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <div class="card-image hover-up"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-news-2.jpg" alt="Genz"></a></div>
                            <div class="card-info"><a class="btn btn-tag bg-gray-800 hover-up" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Working Tips</a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                <h4 class="mt-15 mb-20 color-white">Helpful Tips for Working from Home as a Freelancer</h4></a>
                              <p class="color-gray-500">Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far</p>
                              <div class="row mt-20">
                                <div class="col-7"><a class="color-gray-700 text-sm mr-15" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Lifestyle</a></div>
                                <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="card-list-posts wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <div class="card-image hover-up"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-news-3.jpg" alt="Genz"></a></div>
                            <div class="card-info"><a class="btn btn-tag bg-gray-800 hover-up" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Working Tips</a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                <h4 class="mt-15 mb-20 color-white">Helpful Tips for Working from Home as a Freelancer</h4></a>
                              <p class="color-gray-500">Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far</p>
                              <div class="row mt-20">
                                <div class="col-7"><a class="color-gray-700 text-sm mr-15" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Lifestyle</a></div>
                                <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="card-list-posts wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <div class="card-image hover-up"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-news-4.jpg" alt="Genz"></a></div>
                            <div class="card-info"><a class="btn btn-tag bg-gray-800 hover-up" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Working Tips</a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                <h4 class="mt-15 mb-20 color-white">Helpful Tips for Working from Home as a Freelancer</h4></a>
                              <p class="color-gray-500">Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far</p>
                              <div class="row mt-20">
                                <div class="col-7"><a class="color-gray-700 text-sm mr-15" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Lifestyle</a></div>
                                <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="card-list-posts wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <div class="card-image hover-up"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-news-5.jpg" alt="Genz"></a></div>
                            <div class="card-info"><a class="btn btn-tag bg-gray-800 hover-up" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Working Tips</a><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                <h4 class="mt-15 mb-20 color-white">Helpful Tips for Working from Home as a Freelancer</h4></a>
                              <p class="color-gray-500">Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far</p>
                              <div class="row mt-20">
                                <div class="col-7"><a class="color-gray-700 text-sm mr-15" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Travel</a><a class="color-gray-700 text-sm" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"># Lifestyle</a></div>
                                <div class="col-5 text-end"><span class="color-gray-700 text-sm timeread">3 mins read</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <nav class="mb-50">
                          <ul class="pagination">
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".0s" style="visibility: hidden; animation-delay: 0s; animation-name: none;"><a class="page-link page-prev" href=""><i class="fi-rr-arrow-small-left"></i></a></li>
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"><a class="page-link" href="">1</a></li>
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"><a class="page-link active" href="">2</a></li>
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;"><a class="page-link" href="">3</a></li>
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;"><a class="page-link" href="">...</a></li>
                            <li class="page-item wow animate__animated animate__fadeIn" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;"><a class="page-link page-next" href=""><i class="fi-rr-arrow-small-right"></i></a></li>
                          </ul>
                        </nav>
                      </div>
                      <div class="col-lg-4">
                        <div class="sidebar">
                          <div class="box-sidebar bg-gray-850 border-gray-800">
                            <div class="head-sidebar wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                              <h5 class="line-bottom">Popular Posts</h5>
                            </div>
                            <div class="content-sidebar">
                              <div class="list-posts">
                                <div class="item-post wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                                  <div class="image-post"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-post.jpg" alt="Genz"></a></div>
                                  <div class="info-post border-gray-800"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                      <h6 class="color-white">Creating is a privilege but it’s also a gift</h6></a><span class="color-gray-700">15 mins read</span>
                                    <ul class="d-inline-block">
                                      <li class="color-gray-700">15 April 2022</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="item-post wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                                  <div class="image-post"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-post2.jpg" alt="Genz"></a></div>
                                  <div class="info-post border-gray-800"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                      <h6 class="color-white">Being unique is better than being perfect</h6></a><span class="color-gray-700">15 mins read</span>
                                    <ul class="d-inline-block">
                                      <li class="color-gray-700">15 April 2022</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="item-post wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                                  <div class="image-post"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-post3.jpg" alt="Genz"></a></div>
                                  <div class="info-post border-gray-800"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                      <h6 class="color-white">Every day, in every city and town across the country</h6></a><span class="color-gray-700">15 mins read</span>
                                    <ul class="d-inline-block">
                                      <li class="color-gray-700">15 April 2022</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="item-post wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                                  <div class="image-post"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-post4.jpg" alt="Genz"></a></div>
                                  <div class="info-post border-gray-800"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                      <h6 class="color-white">Your voice, your mind, your story, your vision</h6></a><span class="color-gray-700">15 mins read</span>
                                    <ul class="d-inline-block">
                                      <li class="color-gray-700">15 April 2022</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="item-post wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                                  <div class="image-post"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html"><img src="images/img-post4.jpg" alt="Genz"></a></div>
                                  <div class="info-post border-gray-800"><a href="https://wp.alithemes.com/html/genz/demos/single-sidebar.html">
                                      <h6 class="color-white">Your voice, your mind, your story, your vision</h6></a><span class="color-gray-700">15 mins read</span>
                                    <ul class="d-inline-block">
                                      <li class="color-gray-700">15 April 2022</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
					<!-- <div class="box-sidebar bg-gray-850 border-gray-800">
                      <div class="head-sidebar wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                        <h5 class="line-bottom">Last Comment</h5>
                      </div>
                      <div class="content-sidebar">
                        <div class="list-comments">
                          <div class="item-comment border-gray-800 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <p class="color-gray-500 mb-20">“ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner “</p>
                            <div class="box-author-small"><img src="images/author6.png" alt="Genz">
                              <div class="author-info"><span class="d-block color-gray-700 text-sm">Jane Cooper</span><span class="color-gray-700 text-xs">15 April 2022</span></div>
                            </div>
                          </div>
                          <div class="item-comment border-gray-800 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <p class="color-gray-500 mb-20">“ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner “</p>
                            <div class="box-author-small"><img src="images/author7.png" alt="Genz">
                              <div class="author-info"><span class="d-block color-gray-700 text-sm">Katen Doe</span><span class="color-gray-700 text-xs">15 April 2022</span></div>
                            </div>
                          </div>
                          <div class="item-comment border-gray-800 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">
                            <p class="color-gray-500 mb-20">“ Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner “</p>
                            <div class="box-author-small"><img src="images/author8.png" alt="Genz">
                              <div class="author-info"><span class="d-block color-gray-700 text-sm">Barbara Cartland</span><span class="color-gray-700 text-xs">15 April 2022</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-sidebar bg-gray-850 border-gray-800">
                      <div class="head-sidebar"><a href=""><img src="images/logo.svg" alt="Genz"></a>
                        <h6 class="color-gray-700">Follow us on instagram</h6>
                      </div>
                      <div class="content-sidebar">
                        <div class="row mt-30 mb-10">
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery2.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery3.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery4.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery5.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery6.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery7.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery8.png" alt="Genz"></a></div>
                          <div class="col-sm-4 col-4 mb-20 wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;"><a href=""><img class="bdrd-8" src="images/gallery9.png" alt="Genz"></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> -->
					<footer class="footer">
						<div class="container">
							<div class="footer-1 bg-gray-850 border-gray-800">
								<div class="row">
									<div class="col-lg-4 mb-30"><a class="wow animate__animated animate__fadeInUp" href="" style="visibility: hidden; animation-name: none;"><img class="logo-night"
									                                                                                                                                              src="images/logo.svg"
									                                                                                                                                              alt="Genz">
											<img class="d-none logo-day" alt="GenZ" src="images/logo-day.svg"></a>
										<p class="mb-20 mt-20 text-sm color-gray-500 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Duykhanh Story...</p>
										<h6 class="color-white mb-5 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Address</h6>
										<p class="text-sm color-gray-500 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">58 To Huu, Trung Van, Nam Tu Liem,
										                                                                                                                            Ha Noi, Viet Nam<br>(+84) 904557264
											<br>khanhnd2201@gmail.com </p>
									</div>
									<div class="col-lg-4 mb-30">
										<h6 class="text-lg mb-30 color-white wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Categories</h6>
										<div class="row">
											<div class="col-6">
												<ul class="menu-footer">
													<li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500"
													                                                                                                         href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">

															VOLUNTARY</a></li>
													<li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500"
													                                                                                                         href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">

															WORK EXPERIENCE</a></li>
													<li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500"
													                                                                                                         href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">LEADERSHIP</a>
													</li>
													<!-- <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">SPORTS</a></li> -->
													<!-- <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html"> -->

													<!-- HOBBIES</a></li> -->
													<!-- <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Curiosity</a></li> -->
												</ul>
											</div>
											<div class="col-6">
												<ul class="menu-footer">
													<li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500"
													                                                                                                         href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">HOBBIES</a>
													</li>
													<li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500"
													                                                                                                         href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">SPORTS</a>
													</li>
													<!-- <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Biology</a></li>
                                                    <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Design</a></li>
                                                    <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Breakfast</a></li>
                                                    <li class="wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;"><a class="color-gray-500" href="https://wp.alithemes.com/html/genz/demos/blog-archive.html">Dessert</a></li> -->
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4 mb-30">
										<h4 class="text-lg mb-30 color-white wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Newsletter</h4>
										<p class="text-base color-gray-500 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">Sign up to be first to receive the
										                                                                                                                              latest stories inspiring us, case
										                                                                                                                              studies, and industry news.</p>
										<div class="form-newsletters mt-15 wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">
											<form action="">
												<div class="form-group">
													<input class="input-name border-gray-500" type="text" placeholder="Your name">
												</div>
												<div class="form-group">
													<input class="input-email border-gray-500" type="email" placeholder="Emaill address">
												</div>
												<div class="form-group mt-20">
													<button class="btn btn-linear hover-up">
														Subscribe
														<!-- <i class="fi-rr-arrow-small-right"></i> -->
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="footer-bottom border-gray-800">
									<div class="row">
										<div class="col-lg-5 text-center text-lg-start">
											<!-- <p class="text-base color-white wow animate__animated animate__fadeIn" style="visibility: hidden; animation-name: none;">© Created by<a class="copyright" href="http://alithemes.com/" target="_blank"> AliThemes.com</a></p> -->
										</div>
										<div class="col-lg-7 text-center text-lg-end">
											<div class="box-socials">
												<div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s"
												     style="visibility: hidden; animation-delay: 0s; animation-name: none;"><a class="icon-socials icon-twitter color-gray-500"
												                                                                               href="https://twitter.com/">Twitter</a></div>
												<div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s"
												     style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"><a class="icon-socials icon-linked color-gray-500"
												                                                                                 href="https://www.linkedin.com/">LinkedIn</a></div>
												<div class="d-inline-block wow animate__animated animate__fadeIn" data-wow-delay=".4s"
												     style="visibility: hidden; animation-delay: 0.4s; animation-name: none;"><a class="icon-socials icon-insta color-gray-500"
												                                                                                 href="https://www.instagram.com/">Instagram</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<div class="progressCounter progressScroll hover-up hover-neon-2" style="width: 50px; height: 50px; position: fixed; bottom: 20px; right: 20px;">
						<div class="progressScroll-border"
						     style="position: relative; text-align: center; width: 100%; height: 100%; border-radius: 50%; background-color: rgb(14, 165, 234); background-image: linear-gradient(90deg, transparent 50%, rgb(15, 23, 42) 50%), linear-gradient(90deg, rgb(15, 23, 42) 50%, transparent 50%);">
							<div class="progressScroll-circle"
							     style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 45px; height: 45px; border-radius: 50%; background-color: rgb(34, 47, 67);">
								<span class="progressScroll-text" style="top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute; font-size: 20px;"><i
											class="fi-rr-arrow-small-up"></i></span></div>
						</div>
					</div>
					<script src="js/modernizr-3.6.0.min.js"></script>
					<script src="js/jquery-3.6.0.min.js"></script>
					<script src="js/jquery-migrate-3.3.0.min.js"></script>
					<script src="js/bootstrap.bundle.min.js"></script>
					<script src="js/waypoints.js"></script>
					<script src="js/wow.js"></script>
					<script src="js/text-type.js"></script>
					<script src="js/swiper-bundle.min.js"></script>
					<script src="js/jquery.progressScroll.min.js"></script>
					<script src="js/main.js"></script>

					<div id="7C41421F-8B1D-E537-2024-034CCEA9E7AA"></div>
					<div class="selection_bubble_root" style="visibility: hidden;"></div>
					<div id="image_search" class="selection_img_search" style="visibility: hidden;"></div>
					<style type="text/css">.typewrite > .wrap {
                            border-right: 0.08em solid #fff
                        }</style>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true">
	<template shadowrootmode="open">
		<style>
            div.grammarly-desktop-integration {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            div.grammarly-desktop-integration:before {
                content: attr(data-content);
            }
		</style>
		<div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration"
		     data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div>
	</template>
</grammarly-desktop-integration>
</html>
