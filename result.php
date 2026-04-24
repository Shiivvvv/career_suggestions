<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Career Suggestions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="decoration decoration-1"></div>
    <div class="decoration decoration-2"></div>
    
    <div class="container">
        <header>
            <h1>Your Career Suggestions</h1>
            <p>Personalized career paths based on your profile</p>
        </header>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $stream = $_POST["stream"];
            $percentage = floatval($_POST["percentage"]);

            // Format stream name for display
            $stream_display = str_replace("_", " - ", $stream);
            $stream_display = str_replace("Science - ", "Science ", $stream_display);

            echo '<div class="student-info">';
            echo '<p><strong>Stream:</strong> ' . $stream_display . '</p>';
            echo '<p><strong>Percentage:</strong> ' . $percentage . '%</p>';
            echo '</div>';

            // Determine tier
            if ($percentage >= 85) {
                $tier = "high";
            } elseif ($percentage >= 60) {
                $tier = "mid";
            } else {
                $tier = "low";
            }

            // Load career data from JSON file
            $json_data = file_get_contents("careers.json");
            $career_data = json_decode($json_data, true);

            // Get message and careers from JSON
            if (isset($career_data[$stream][$tier])) {
                $message = $career_data[$stream][$tier]["message"];
                $careers = $career_data[$stream][$tier]["careers"];
            } else {
                $message = "We couldn't find specific suggestions for your selection. Please try again.";
                $careers = [];
            }

            echo '<div class="message-box">';
            echo '<p>' . $message . '</p>';
            echo '</div>';

            echo '<div class="results">';
            foreach ($careers as $career) {
                echo '<div class="card">';
                echo '<h3>' . $career["title"] . '</h3>';
                echo '<p><strong>About:</strong> ' . $career["desc"] . '</p>';
                echo '<p class="colleges"><strong>Famous Colleges:</strong> ' . $career["colleges"] . '</p>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<div class="message-box" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.15), rgba(245, 158, 11, 0.15)); border-color: rgba(239, 68, 68, 0.3); color: #fca5a5;">';
            echo '<p>Please submit the form on the homepage.</p>';
            echo '</div>';
        }
        ?>

        <div class="back-link">
            <a href="index.html">← Back to Home</a>
        </div>

        <footer>
            <p> Made with 💜 for Students | Find Your Path</p>
        </footer>
    </div>
</body>
</html>
