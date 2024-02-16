<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Campus Online</title>
</head>
<style>
    #logos-main{
        background-color: white;
        padding: 20px;
        display: flex;
        border-radius: 10px;
        justify-content: space-around;
        align-items: center;
        height: 150px;
        width: 1200px;
        margin-left: 10px;
    }
    #logos{
        width: 70px;
        height: 70px;
        
    }
    #discription{
        margin-top: 20px;
        background-color: rgba(67, 9, 240, 0.27);
        padding: 20px;
        border-radius: 10px;
        width: 1200px;
        height: 500px;
        margin-left: 10px;
    }
    

</style>    
<body>
<?php include "header.php"; ?> 
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
    <div id="logos-main">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
       <img src="img\logo-red.png" id="logos" class="img-thumbnail" alt="img\logo-red.png">
      
    </div>
    <div id="discription" >
        <h3>CLUB: IEI </h3>
        <p>latest evnets of the club</p>
    </div>    
    <?php include "footer.php"; ?>
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
</body>
</html>