<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">



  <title>Campus Online</title>

  <meta name="keywords" content="WebSite Template" />
  <meta name="description" content="Porto - Multipurpose Website Template">
  <meta name="author" content="okler.net">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />


  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
<style>
  :root {
    /* vars */
    --post-bg: rgb(14, 14, 17);
    --t: .4s;
    --ease: linear(0, .005, .02 2.2%, .045, .081 4.9%, .16 7.3%, .465 16.2%, .561, .642, .713 25.8%, .773, .825 32.7%, .868 36.5%, .905 40.9%, .935 45.7%, .958 51.1%, .975 57.4%, .986 64.4%, .993 73.1%, .997 84.1%, .999);
    --ease-bar: linear(0, 0.005, 0.02, 0.045, 0.081 5%, 0.16 7.6%, 0.463 16.6%, 0.558, 0.639, 0.709,
        0.769, 0.82 33.3%, 0.863 37.1%, 0.902 41.6%, 0.932 46.5%, 0.956 51.9%,
        0.973 58.2%, 0.985 65.3%, 0.992 73.8%, 0.997 84.7%, 0.999);
    --trans: all var(--t) var(--ease);
    --star-color: 210deg;
    --star-time: 7s;
    --star-ease: cubic-bezier(0.75, 0, 0.25, 1);
  }

  .post {
    padding: 1.5rem 1rem 2rem;
    padding-left: 3rem;
    border-bottom: 1px solid hsl(0deg 0% 100% / 10%);
  }

  .poll-details {
    font-size: 0.75rem;
    font-weight: 400;
    color: hsl(240deg 15.6% 78.63% / 65%);
  }

  .poll-choices {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .poll-choice label {
    padding-inline: 1rem;
    display: flex;
    justify-content: space-between;
    border-radius: 0.5rem;
    border: 1px solid rgb(76, 76, 92);
    position: relative;
    isolation: isolate;
  }

  .poll-choice .poll-label {
    gap: 0.5rem;
    overflow: hidden;
    width: 100%;
    min-height: 44px;
  }

  .poll-choice .poll-percent,
  .poll-choice .poll-label {
    display: flex;
    align-items: center;
    font-weight: 400;
    margin: 0;
    z-index: 1;
  }

  .poll-choice .poll-percent {
    opacity: 0;
    translate: 100% 0;
    width: 2rem;
    text-align: right;
    justify-content: end;
    transition: all calc(var(--t)*3) var(--ease-bar);
  }

  .poll-choice .answer {
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: block;
    filter: none;
    transition: var(--trans);
  }

  .poll-choice .poll-label .radio {
    display: flex;
    transition: var(--trans);
    overflow: hidden;
    flex: 0 0 16px;
  }

  .poll-result {
    position: absolute;
    inset: -1px;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    mask-size: cover;
    background-size: 0% 100%;
    background-position: 0% 0%;
    transition: opacity var(--t) var(--ease);
    opacity: 0;
  }

  .poll-result:before,
  .poll-result:after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: calc(0.5rem);
    mix-blend-mode: hard-light;
    background-image: linear-gradient(90deg, hsl(240deg 10% 90% / 50%), hsl(240deg 10% 90% / 90%) 80%);
    background-size: inherit;
    background-repeat: no-repeat;
    background-position: inherit;
    transition: all calc(var(--t)*3) var(--ease-bar);
  }

  .poll-result:after {
    inset: 1px;
    border-radius: calc(0.5rem - 1px);
    background: lightblue;
    background-size: calc(100% - 2px) 100%;
    opacity: 1;
    z-index: 1;
    mix-blend-mode: unset;
  }

  .poll-result .star {
    position: absolute;
    left: var(--percent, 0%);
    top: 50%;
    translate: -50% -50%;
    width: auto;
    height: 90%;
    transition: left calc(var(--t)*3) var(--ease-bar), opacity calc(var(--t)*3) var(--ease-bar);
    mix-blend-mode: plus-lighter;
    filter: drop-shadow(0 0 3px hsl(var(--star-color) 100% 60% / 70%)) drop-shadow(0 0 8px hsl(var(--star-color) 100% 60% / 70%));
    z-index: 2;
    opacity: 0;
  }

  .poll-result .star:after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    translate: -50% -50%;
    height: 120%;
    aspect-ratio: 1/10;
    border-radius: 100%;
    background: yellow;
    translate: -50% -50%;
  }


  .poll-result .star div {
    position: absolute;
    left: 50%;
    top: 50%;
    translate: -50% -50%;
    height: 120%;
    aspect-ratio: 1/2;
    background:
      radial-gradient(2px 35% at center, hsl(var(--star-color) 100% 80% / 70%), hsl(var(--star-color) 100% 20% / 0%)),
      radial-gradient(2px 40% at center, hsl(var(--star-color) 100% 90% / 90%), hsl(var(--star-color) 100% 20% / 0%)),
      radial-gradient(1px 45% at center, white, hsl(var(--star-color) 100% 100% / 100%), hsl(var(--star-color) 100% 20% / 0%));
    mix-blend-mode: color-dodge;
    opacity: 1;
    z-index: 3;
  }

  .poll-result .star div::before,
  .poll-result .star div::after {
    content: "";
    position: absolute;
    right: 50%;
    top: 50%;
    translate: 50% -50%;
    rotate: 45deg;
    height: 50%;
    aspect-ratio: 1/1;
    background: yellow;
    opacity: 1;
    mix-blend-mode: plus-lighter;
  }

  .poll-result .star div::after {
    rotate: -45deg;
  }

  .poll.answered {

    .poll-choice.winner .poll-result:before {
      background-image: linear-gradient(254deg, green 5%, orange 45%, red 95%);
    }

    .poll-choice .poll-result {
      opacity: 1;
      background-size: var(--percent, 0%) 100%;
    }

    .poll-choice.winner .poll-result .star {
      opacity: 1;
      transition-delay: 0s, 0.2s;
    }

    .poll-choice.winner .poll-result .star div,
    .poll-choice.winner .poll-result .star div:before,
    .poll-choice.winner .poll-result .star div:after {
      animation: starGlow var(--star-time) var(--star-ease) infinite;
    }

    .poll-choice.winner .poll-result .star div:before {
      animation-delay: 0.1s;
    }

    .poll-choice.winner .poll-result .star div:after {
      animation-delay: 0s;
    }

    .poll-choice .radio {
      flex: 0 1 0px;
    }

    .poll-choice .answer {
      translate: -0.5rem 0;
    }

    .poll-choice .poll-percent {
      translate: 0 0;
      opacity: 1;
    }

    .poll-choice.winner .poll-percent,
    .poll-choice.winner .poll-label {
      filter: drop-shadow(1px 1px 0px rgba(0, 0, 0, 0.5)) drop-shadow(-1px 1px 0px rgba(0, 0, 0, 0.5)) drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.25)) drop-shadow(0px 1px 5px rgba(0, 0, 0, 0.25));
      z-index: 4;
    }

  }

  @keyframes starGlow {

    0%,
    90%,
    100% {
      filter: brightness(1) contrast(1) saturate(1) opacity(0);
      scale: 0;
    }

    10%,
    25% {
      filter: brightness(1.6) contrast(1.5) saturate(2) opacity(1);
      scale: 1;
    }
  }




  @layer app {

    #app {

      width: 100%;
      height: auto;
      background-color: white;
      border-radius: 8px;

    }

    ul,
    li {
      margin: unset;
      padding: unset;
      list-style: none;
    }

    input {
      width: 16px;
      height: 16px;
      appearance: none;
      background-color: red;
      /* Adjusted background color for better visibility */
      border: greenyellow;
      /* Adjusted border color for better contrast */
      box-shadow: inset 0 0 0 1px transparent;
      border-radius: 100%;
      padding: 0;
      margin: 0;
    }

    input:checked {
      background-color: rgb(252, 210, 62);
      border-color: greenyellow;
      box-shadow: red;
      /* Adjusted box-shadow color to match the post background */
    }

    p.text {
      margin: 0;
    }

    h1 {
      font-size: 1.8rem;
      margin: 1em 0 0;
    }
</style>

<body style="background-color:#f2f2f4 !important;">
  <div role="main" class="main shop pt-4">
    <?php include "events_header.php"; ?>




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
    <style>
      .domain {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 10px;
        padding: 10px;
        border-radius: 10px;
        margin: 10px;
        margin-right: 50px !important;
        margin-left: 50px;
        background-color: #f2f2f4;
      }
    </style>

    <div class="row">
      <div class="col">
        <div class="domain" style=" border-radius:10px; margin-top:10px; margin-right:10px; text-align: center;">

          <div>
            <a href="campusupdates.php">
              <p style="font-size: 20px; font-weight: bold; background-color: white; padding:10px; border-radius: 15px; width: 300px;">Clubs</p>
            </a>
          </div>
          <div>
            <p style="font-size: 20px; font-weight: bold; background-color: white; padding:10px; border-radius: 15px; width: 300px;">Campus Chat</p>
          </div>
          <div>
            <p style="font-size: 20px; font-weight: bold; background-color: white; padding:10px; border-radius: 15px; width: 300px;">Internships</p>
          </div>
        </div>
      </div>
    </div>


    <div style="margin-left: 50px;margin-right: 30px;">

      <main id="app">

      <div class="poll-container">
            <?php
            include "connect.php";

            if (isset($_SESSION['idnum'])) {
                // Check if the user has already voted
                if (isset($_SESSION['voted'])) {
                    echo "You have already voted. Thank you!";
                } else {
                    $reg_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);
                    $sql = "SELECT * FROM poll_admin";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $question = $row['question'];
                    $options = array($row['option1'], $row['option2'], $row['option3'], $row['option4']);

                    // Fetch poll results from the database
                    $sql_poll_results = "SELECT option, COUNT(*) as votes FROM poll_results GROUP BY option";
                    $result_poll_results = mysqli_query($conn, $sql_poll_results);
                    $poll_results = array();
                    if ($result_poll_results) {
                        while ($row_poll_results = mysqli_fetch_assoc($result_poll_results)) {
                            $poll_results[$row_poll_results['option']] = $row_poll_results['votes'];
                        }
                    }

                    // Calculate total votes
                    $total_votes = array_sum($poll_results);

                    // Display the poll options
                    ?>
                    <h2 class="poll-question"><?php echo $question; ?></h2>
                    <ul class="poll-choices">
                        <?php foreach ($options as $index => $option): ?>
                            <li class="poll-choice">
                                <button class="poll-option" data-option="<?php echo $option; ?>">
                                    <?php echo $option; ?>
                                    <span class="poll-percent">
                                        <?php
                                        // Calculate and display percentage
                                        if ($total_votes > 0 && isset($poll_results[$option])) {
                                            echo round(($poll_results[$option] / $total_votes) * 100) . '%';
                                        } else {
                                            echo '0%';
                                        }
                                        ?>
                                    </span>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php
                }
            } else {
                echo "You need to be logged in to vote.";
            }
            ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $(".poll-option").click(function () {
                        // Check if the user has already voted
                        if ("<?php echo isset($_SESSION['voted']) ? $_SESSION['voted'] : '' ?>" !== '1') {
                            var option = $(this).data("option");
                            $.ajax({
                                url: "vote.php",
                                method: "POST",
                                data: { option: option },
                                success: function (data) {
                                    location.reload();
                                }
                            });
                            // Set the session variable indicating that the user has voted
                            <?php $_SESSION['voted'] = '1'; ?>;
                        }
                    });
                });
            </script>
        </div>

      </main>
      
    </div>






    <div class="container" style="margin: 20px; margin-left: 50px;  overflow: hidden;">

      <div class="category">
        <br>

        <h2 style="left: 0% !important; margin-left:-799px;">Latest Updates</h2>


        <?php
					// Include the file to establish a database connection
					include 'connect.php';

					// Write your SQL query
					$sql = "SELECT * FROM event";

					// Execute the query
					$result = mysqli_query($conn, $sql);

					// Check if there are any results
					if (mysqli_num_rows($result) > 0) {
						// Output data of each row
						while ($row = mysqli_fetch_assoc($result)) {
							// Output the HTML structure with product details
					?>

        <div class="row align-items-left" style="margin-left: -500px;">
          <div class="col-sm-5 mb-4 mb-sm-0">
            <div class="product mb-0">
              <div class="product-thumb-info border-0 mb-0">

                <div class="product-thumb-info-badges-wrapper">
                  <span class="badge badge-ecommerce text-bg-success">NEW</span>

                </div>
                <a href="">
                  <div class=" ">
                    <img alt="" class="img-fluid" src="<?php echo $row['image']; ?>" style="height: 200px; width: 200px; ">

                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="summary entry-summary">

              <h2 class="mb-0 font-weight-bold text-7"><a href="shop-product-sidebar-left.html" class="text-color-dark text-color-hover-primary text-decoration-none"><?php echo $row['eventname']; ?></a></h2>



              <div class="divider divider-small">
                <hr class="bg-color-grey-400">
              </div>



              <div data-plugin-readmore data-plugin-options="{
              'buttonOpenLabel': 'Read More <i class=\'fas fa-chevron-down text-2 ms-1\'></i>',
              'buttonCloseLabel': 'Read Less <i class=\'fas fa-chevron-up text-2 ms-1\'></i>'
               }">
               <?php echo $row['eventdescription']; ?></p>
                <div class="readmore-button-wrapper d-none">
                  <a href="#" class="text-decoration-none">
                    Read More
                    <i class="fas fa-chevron-down"></i>
                  </a>
                </div>
                <p>Starting Date: <?php echo $row['startdate']; ?></p>
                <p>Ending Date: <?php echo $row['enddate']; ?></p>
              </div>


            </div>
          </div>


        </div>
        <br>

        <?php
						}
					} else {
						echo "0 results";
					}

					// Close the database connection
					mysqli_close($conn);
					?>
        <br>


        <!-- Bootstrap Bundle with Popper -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

        <script>
          document.addEventListener("DOMContentLoaded", function() {
            // Get all elements with the class '.read-more'
            const readMoreButtons = document.querySelectorAll('.read-more');

            // Loop through each read more button
            readMoreButtons.forEach(function(readMoreButton) {
              // Get the corresponding collapse element
              const collapseElement = document.querySelector(readMoreButton.getAttribute('data-bs-target'));

              // Add event listener to the "show.bs.collapse" event of the collapse element
              collapseElement.addEventListener('show.bs.collapse', function() {
                // Change button text to "Minimize" and change icon
                readMoreButton.innerHTML = 'Minimize <i class="fas fa-angle-up"></i>';
              });

              // Add event listener to the "hide.bs.collapse" event of the collapse element
              collapseElement.addEventListener('hide.bs.collapse', function() {
                // Change button text to "Read More" and change icon
                readMoreButton.innerHTML = 'Read More <i class="fas fa-angle-down"></i>';
              });

              // Add event listener to the "Read More" button
              readMoreButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor click behavior

                // Toggle the collapse state of the collapse element
                const isCollapsed = collapseElement.classList.contains('show');
                if (isCollapsed) {
                  collapseElement.classList.remove('show');
                } else {
                  collapseElement.classList.add('show');
                }
              });
            });
          });
        </script>


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
  </div>
  <?php include "footer.php"; ?>
</body>

</html>