<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body::after {
            content: "";
            display: table;
            clear: both;
            background-color: lightgreen;
           
        }

        .left-section {
            float: left;
            width: 30%; /* Takes up 1/3 of the available space */
            box-sizing: border-box;
            
        }

        .left-section-top {
            background-color: red;
            color: white;
            text-align: center;
            padding: 20px;
            margin: 5px;
            min-height: 40px;
            max-height: 70px;
            line-height: 70px; /* Set line-height equal to max-height to vertically center text */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            margin-left: 30px;
            
        }

        .left-section-top img {
            vertical-align: middle; /* Vertically center the image */
 /* Adjust margin as needed */
            margin-left: -70px; /* Adjust margin as needed to move the image slightly to the left */
        }

        .left-section-top h1 {
            margin: 0; /* Remove default margin for h1 */
        }
        .left-section-bottom {
            background-color: rgb(0, 140, 255);
            color: white;
            text-align: center;
            padding: 20px;
            margin: 5px;
            min-height: 450px;
            border-radius: 5px;
            margin-left: 30px;
        }

        .right-section {
            float: left;
            width: 70%; /* Takes up 2/3 of the available space */
            box-sizing: border-box;
            
        }

        .right-section-inner {
            background-color: lightblue;
            color: white;
            text-align: center;
            padding: 20px;
            margin: 5px;
            border-radius: 5px;
            margin-right: 40px;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?> <!-- Check that 'header.php' is properly formatted -->

    <div class="left-section">
        <div class="left-section-top">
            <a href="img/12.png"> <img src="img/12.png" alt="12" width="100" height="100"> </a>
            Hello
            <h1>Left Top</h1>
        </div>
        <div class="left-section-bottom">
            <!-- Add content here -->
        </div>
    </div>

    <div class="right-section">
        <div class="right-section-inner">
            <h1>Right Section</h1>
        </div>
    </div>
</body>
</html>
