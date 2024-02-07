<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">



    <title>Style Switcher | Porto - Multipurpose Website Template</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">



    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/latest.css">

</head>
<style>
    /* Style the button that is used to open and close the collapsible content */
    .chat-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        z-index: 1000;
    }

    .containeer {
        position: relative;
    }

    .cursor {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 24px;
    }

    .left {
        left: 10px;
        /* Adjust as needed */
    }

    .right {
        right: 10px;
        /* Adjust as needed */
    }

    .categories {
        display: flex;
        overflow-x: hidden;
        white-space: nowrap;
        margin: 0 -10px;
        /* Adjust as needed */
    }

    .category {
        display: inline-block;
        margin: 0 10px;
        /* Adjust as needed */
    }

    .show {
        display: block !important;
    }

    .active {
        /* Define the styles for the active state */
    }
</style>

<body style="background-color:#f2f2f4 !important;">
    <div role="main" class="main shop pt-4">
        <?php include "header1.php"; ?>


        <div role="main" class="main">

        <div class="carousel-container" id="mainSection">
			<div class="carousel" id="carousel">
				<div class="panel">
					<img src="img/13.png" alt="Image 1">
				</div>
				<div class="panel">
					<img src="img/14.png" alt="Image 2">
				</div>
				<div class="panel">
					<img src="img/13.png" alt="Image 3">
				</div>
				<div class="panel">
					<img src="img/14.png" alt="Image 4">
				</div>
			</div>
			<button class="prev" onclick="changePanel(-1)">&#8249;</button>
			<button class="next" onclick="changePanel(1)">&#8250;</button>
		</div>
        </div>


        <hr>
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme stage-margin nav-style-1 " data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg">
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="container" style="display: flex; justify-content: center;">
            <div class="row justify-content-center py-2">
                <h2><b>Campus Updates</b></h2>
            </div>
        </div>
    </div>


    <div class="containner" style="margin-left:auto; margin-right: auto;">
        <div class="cateegory">
            <div class="top-deals-container">
                <h2 class="top-deals-heading">Top News</h2>
            </div>


            <div class="#" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <br>
                <div class="card" style="margin:auto; margin-bottom: 10px;">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="img/blog/medium/blog-1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>
                                <p class="card-text mb-2">Prajwalan hackathon by C.S.E </p>
                                <a href="https://prajwalan2024.vercel.app/" class="toggle-title" class="read-more text-color-primary font-weight-semibold text-2">Read More<i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="img/blog/medium/blog-1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>
                                <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                                <a href="#" class="read-more text-color-primary font-weight-semibold text-2" data-bs-target="#collapseExample" aria-controls="collapseExample">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card-body">
                            <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="img/blog/medium/blog-1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>
                                <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                                <a href="#" class="read-more text-color-primary font-weight-semibold text-2" data-bs-target="#collapseExample" aria-controls="collapseExample">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card-body">
                            <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Bootstrap Bundle with Popper and Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            // JavaScript to toggle collapse state
            $(document).ready(function() {
                $(".read-more").click(function() {
                    $(this).toggleClass('active');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.read-more').click(function(e) {
                    e.preventDefault();
                    var target = $(this).data('bs-target');
                    var $target = $(target);
                    if ($target.hasClass('show')) {
                        $target.collapse('hide');
                    } else {
                        $target.collapse('show');
                    }
                });
            });
        </script>

        <script src="vendor/plugins/js/plugins.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>

        <!-- Theme Custom -->
        <script src="js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>
        <!-- Vendor -->
        <script src="vendor/plugins/js/plugins.min.js"></script>
        <script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
        <script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
        <script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="js/views/view.shop.js"></script>

        <!-- Theme Custom -->
        <script src="js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>
        <script>
			let currentPanel = 1;
			const panelWidth = 1200; // Width of each panel
			const totalPanels = 4; // Total number of panels
			const autoScrollInterval = 3000; // Interval for automatic scrolling in milliseconds (adjust as needed)

			function changePanel(direction) {
				currentPanel += direction;

				if (currentPanel < 1) {
					currentPanel = totalPanels;
				} else if (currentPanel > totalPanels) {
					currentPanel = 1;
				}

				updateCarousel();
			}

			function updateCarousel() {
				const carousel = document.getElementById('carousel');
				const panelContainer = document.querySelector('.carousel-container');
				const translateValue = -panelWidth * (currentPanel - 1);
				carousel.style.transform = `translateX(${translateValue}px)`;
				panelContainer.style.width = `${panelWidth}px`;
			}

			function autoScroll() {
				changePanel(1); // Automatically move to the next panel
			}

			// Set up automatic scrolling
			const autoScrollIntervalId = setInterval(autoScroll, autoScrollInterval);

			// Stop automatic scrolling when user interacts with the carousel
			document.querySelector('.carousel-container').addEventListener('mouseenter', () => {
				clearInterval(autoScrollIntervalId);
			});

			// Resume automatic scrolling when user stops interacting with the carousel
			document.querySelector('.carousel-container').addEventListener('mouseleave', () => {
				setInterval(autoScroll, autoScrollInterval);
			});
		</script>

        <script>
            (function($) {

                'use strict';

                $('.open-style-switcher').on('mousedown', function(e) {
                    e.preventDefault();
                    $('.style-switcher-open-loader').trigger('click');
                    return false;
                });

            }).apply(this, [jQuery]);
        </script>
        <?php include "footer.php"; ?>
</body>

</html>