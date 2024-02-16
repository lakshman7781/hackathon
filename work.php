<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Poll Page</title>
    <style>
        body {
            background-color: #f2f2f4 !important;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .poll-container {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .poll-question {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .poll-choices {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .poll-choice {
            margin-bottom: 10px;
        }

        .poll-option {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            background-color: #f2f2f4;
        }

        .poll-percent {
            margin-left: 10px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="poll-container">
        <?php
include "connect.php";

if (isset($_SESSION['idnum'])) {
    $reg_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);
    
    // Check if the user has already voted
    $check_voted_query = "SELECT * FROM poll_results WHERE reg_no = '$reg_no'";
    $check_voted_result = mysqli_query($conn, $check_voted_query);

    if (mysqli_num_rows($check_voted_result) > 0) {
        echo "You have already voted. Thank you!";
    } else {
        // User has not voted, proceed to display the poll options
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

    </div>

</body>

</html>