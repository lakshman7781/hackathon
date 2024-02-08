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
  --ease: linear(0,.005,.02 2.2%,.045,.081 4.9%,.16 7.3%,.465 16.2%,.561,.642,.713 25.8%,.773,.825 32.7%,.868 36.5%,.905 40.9%,.935 45.7%,.958 51.1%,.975 57.4%,.986 64.4%,.993 73.1%,.997 84.1%,.999);
  --ease-bar: linear(
    0, 0.005, 0.02, 0.045, 0.081 5%, 0.16 7.6%, 0.463 16.6%, 0.558, 0.639, 0.709,
    0.769, 0.82 33.3%, 0.863 37.1%, 0.902 41.6%, 0.932 46.5%, 0.956 51.9%,
    0.973 58.2%, 0.985 65.3%, 0.992 73.8%, 0.997 84.7%, 0.999
  );
  --trans: all var(--t) var(--ease);
  --star-color: 210deg; 
  --star-time: 7s;
  --star-ease: cubic-bezier(0.75, 0, 0.25, 1);
}

.post {
  padding:  1.5rem 1rem 2rem;
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
  background:lightblue
  background-size: calc( 100% - 2px ) 100%;
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
  .poll-choice.winner .poll-result .star div:before { animation-delay: 0.1s; }
  .poll-choice.winner .poll-result .star div:after { animation-delay: 0s; }
  
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
    filter: drop-shadow(1px 1px 0px rgba(0,0,0,0.5)) drop-shadow(-1px 1px 0px rgba(0,0,0,0.5)) drop-shadow(0px 1px 2px rgba(0,0,0,0.25)) drop-shadow(0px 1px 5px rgba(0,0,0,0.25));
    z-index: 4;
  }
  
}

@keyframes starGlow {
  0%, 90%, 100% {
    filter: brightness(1) contrast(1) saturate(1) opacity(0);
    scale: 0;
  }
  10%, 25% {
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

  ul, li {
    margin: unset;
    padding: unset;
    list-style: none;
  }

  input {
  width: 16px;
  height: 16px;
  appearance: none;
  background-color: red; /* Adjusted background color for better visibility */
  border: greenyellow; /* Adjusted border color for better contrast */
  box-shadow: inset 0 0 0 1px transparent;
  border-radius: 100%;
  padding: 0;
  margin: 0;
}

input:checked {
  background-color: rgb(252, 210, 62);
  border-color:greenyellow;
  box-shadow: red; /* Adjusted box-shadow color to match the post background */
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
       

            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme stage-margin nav-style-1 " data-plugin-options="{'items': 7, 'margin': 26, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 20}" style="background-color: white; padding:10px; border-radius:10px; margin-top:10px; margin-right:10px;">
                        <div>
                        <a href="clubs.php">
                            <img alt="" class="img-fluid rounded" src="img/projects/project-5.jpg" style="height: 100px; width: 100px;">
                        </a>
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-6.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-7.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-1.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-2.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-3.jpg" style="height: 100px; width: 100px;">
                        </div>
                        <div>
                            <img alt="" class="img-fluid rounded" src="img/projects/project-4.jpg" style="height: 100px; width: 100px;">
                        </div>
                    </div>
                </div>
            </div>

           
<div style="margin-left: 50px;margin-right: 50px;">

<main id="app" >

  <div class="post" >
    
<h3>Campus Buzz</h3>
  <!-- <h1>Poll with Animation</h1> -->
    <p class="text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, quas itaque! Aliquam laboriosam mollitia quod nulla nostrum possimus?
    </p>

    <section class="poll">
      <p class="poll-details">
        Poll • Ends in 22h
      </p>
      <ul class="poll-choices">
        <li class="poll-choice choice-1">
          <label for="choice-1">
            <div class="poll-result">
              <div class="star"><div></div></div>
            </div>
            <div class="poll-label">
              <div class="radio"><input type=radio id="choice-1" name="poll" /></div>
              <div class="answer">Dolor</div>
            </div>
            <p class="poll-percent">
              0%
            </p>
          </label>
        </li>
        <li class="poll-choice choice-2">
          <label for="choice-2">
            <div class="poll-result">
              <div class="star"><div></div></div>
            </div>
            <div class="poll-label">
              <div class="radio"><input type=radio id="choice-2" name="poll" /></div>
              <div class="answer">Lorem</div>
            </div>
            <p class="poll-percent">
              0%
            </p>
          </label>
        </li>
        <li class="poll-choice choice-3">
          <label for="choice-3">
            <div class="poll-result">
              <div class="star"><div></div></div>
            </div>
            <div class="poll-label">
              <div class="radio"><input type=radio id="choice-3" name="poll" /></div>
              <div class="answer">Assumenda, quas itaque! Aliquam laboriosam mollitia quod nulla nostrum possimus</div>
            </div>
            <p class="poll-percent">
              0%
            </p>
          </label>
        </li>
        <li class="poll-choice choice-4">
          <label for="choice-4">
            <div class="poll-result">
              <div class="star"><div></div></div>
            </div>
            <div class="poll-label">
              <div class="radio"><input type=radio id="choice-4" name="poll" /></div>
              <div class="answer">IDC, just wanna creep</div>
            </div>
            <p class="poll-percent">
              0%
            </p>
          </label>
        </li>
      </ul>
    </section>
  </div>

  <button>Reset</button>

</main>
<script>
    const choices = document.querySelectorAll('input[name=poll]');

const increaseNumber = (node,value) => {
  node.innerText = "0%";
  node.innerText = value + "%";
  animateNumber(0,value, 1200,easeQuad,function(v) {
    node.innerText = Math.ceil(v) + "%";
  })
}

const reset = () => {
  choices.forEach((c,i) => {
    const pollChoice = c.closest(".poll-choice");
    const result = pollChoice.querySelector(".poll-result");
    c.closest(".poll").classList.remove("answered");
    pollChoice.classList.remove("winner");
    result.style.setProperty("--percent", 0 + "%");
    pollChoice.querySelector(".poll-percent").innerText = "0%"; 
  })
}

const handleChange = event => {
  const choice = event.target;
  const choiceIndex = [...choices].indexOf(choice);
  let total = 100;
  let remaining = total;
  let values = [];
  choices.forEach((c,i) => {
    let r = Math.ceil(Math.random() * remaining);
    remaining -= r;
    values[i] = r;
  });
  values[values.length-1] = values[values.length-1] + remaining;
  choices.forEach((c,i) => {
    const pollChoice = c.closest(".poll-choice");
    const result = pollChoice.querySelector(".poll-result");
    pollChoice.classList.remove("winner");
    if ( values[i] === Math.max(...values) ) {
      pollChoice.classList.add("winner");
    }
    result.style.setProperty("--percent", values[i] + "%");
    increaseNumber(pollChoice.querySelector(".poll-percent"), values[i]);
      
  });
  choice.closest(".poll").classList.add("answered");
}

choices.forEach(choice => {
  choice.addEventListener('change', handleChange );
});

// ----

document.querySelector("button").addEventListener('click', reset);





  function easeQuad(t) {
    return t*t/(2*(t*t-t)+1)
  }
  
  function animateNumber(
    start,
    end,
    duration,
    easingFunction,
    callback 
  ) {
    const startTime = Date.now();
    const endTime = startTime + duration;
    const change = end - start;
    const tick = () => {
      const now = Date.now();
      if (now >= endTime) {
        callback(end);
      } else {
        const elapsed = now - startTime;
        const value = easingFunction(elapsed / duration) * change + start;
        callback(value);
        requestAnimationFrame(tick);
      }
    };
    tick();
  }
  </script>
</div>


 
   


            <div class="container" style="margin: 20px; margin-left: 30px; overflow: hidden;">
          
    <div class="category">
        <br>
       
    <h2  style="left: 0% !important; margin-left:-799px;">Latest Updates</h2>
        
        <div class="#" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="card" style="border-color: black;">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <img src="img/blog/medium/blog-1.jpg" class="card-img" alt="Blog Image">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <h4 class="card-title">Card Title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                            <a href="#" class="btn btn-primary read-more" data-bs-toggle="collapse" data-bs-target="#new1" aria-expanded="false" aria-controls="new1">
                                Read More <i class="fas fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="new1" style="width:800px; ">
                    <div class="card-body">
                        <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                    </div>
                </div>
            </div>
            <br>

            <div class="card" style="border-color: black;">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <img src="img/blog/medium/blog-1.jpg" class="card-img" alt="Blog Image">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body" style="width: 100%;">
                            <h4 class="card-title">Card Title</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                            <a href="#" class="btn btn-primary read-more" data-bs-toggle="collapse" data-bs-target="#new4" aria-expanded="false" aria-controls="new4">
                                Read More <i class="fas fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="new4" style="width:800px; ">
                    <div class="card-body">
                        <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                    </div>
                </div>
            </div>
            <br>

<div class="card" style="border-color: black;">
    <div class="row g-0">
        <div class="col-lg-4">
            <img src="img/blog/medium/blog-1.jpg" class="card-img" alt="Blog Image">
        </div>
        <div class="col-lg-8">
            <div class="card-body" style="width: 100%;">
                <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                <a href="#" class="btn btn-primary read-more" data-bs-toggle="collapse" data-bs-target="#new3" aria-expanded="false" aria-controls="new3">
                    Read More <i class="fas fa-angle-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="collapse" id="new3" style="width:800px; ">
        <div class="card-body">
            <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
        </div>
    </div>
</div>


          <br>
         

<div class="card" style="border-color: black;">
    <div class="row g-0">
        <div class="col-lg-4">
            <img src="img/blog/medium/blog-1.jpg" class="card-img" alt="Blog Image">
        </div>
        <div class="col-lg-8">
            <div class="card-body" style="width: 100%;">
                <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi </p>
                <a href="#" class="btn btn-primary read-more" data-bs-toggle="collapse" data-bs-target="#new4" aria-expanded="false" aria-controls="new4">
                    Read More <i class="fas fa-angle-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="collapse" id="new4" style="width:800px; ">
        <div class="card-body">
            <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
        </div>
    </div>
</div>
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