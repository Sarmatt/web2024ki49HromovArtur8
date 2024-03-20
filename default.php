<!DOCTYPE html>
<html>
<head>
	<title>LiteralNest Rustcraft</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Metal Mania' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
</head>
<body>

	<header>
		<div class="company-data">
			<img class="company-data-logo" src="img/CompanyLogo.png" alt="Logo">
			<h1 class="company-data-title">LITERALNEST</h1>
	
		</div>	
	</header>

			<div class="background-link-container">
  				<a class="background-link" href="/authorization.php"><p>LOGIN</p></a>
			</div>

		<div class="project-title">
			<p>RUSTCRAFT</p>
		</div>

		<div class="content1">
			<p>A unique combination of two giants of the gaming industry - Rust and Minecraft</p>
		</div>

		<div class="map">
			<p>Game Map:</p>
			<img class="map-character" src = "img/MapCharacter.png">
			<img class="map-map" src="img/Map.png">
		</div>

		<div class="countdown-container-title">
			<p>Coming out in:</p>
		</div>

    <div class="countdown-container">
        <div>
            <?php
            // Function definition
            function displayRemainingTime($endTime) {
                // Current timestamp
                $currentTime = time();
                
                // Calculate remaining time in seconds
                $remainingTime = $endTime - $currentTime;
                
                // Convert remaining time to hours, minutes, and seconds
                $hours = floor($remainingTime / 3600);
                $minutes = floor(($remainingTime % 3600) / 60);
                $seconds = $remainingTime % 60;
                
                // Output remaining time
echo '<div>';
                echo '<span id="days">' . sprintf("%02d", floor($hours / 24)) . '</span>';
                echo '<div class="timer-label">Days</div>';
                echo '</div>';
                echo '<div class="countdown-item">';
                echo '<span id="hours">' . sprintf("%02d", $hours % 24) . '</span>';
                echo '<div class="timer-label">Hours</div>';
                              echo '</div>';
                              echo ' <div class="countdown-item">';
                echo '<span id="minutes">' . sprintf("%02d", $minutes) . '</span>';
                echo '<div class="timer-label">Minutes</div>';
                          echo '</div>';
                          echo '       <div class="countdown-item">';
                echo '<span id="seconds">' . sprintf("%02d", $seconds) . '</span>';
                echo '<div class="timer-label">Seconds</div>';
                     echo '</div>';
            }

            // Example usage: Display remaining time until 2023-12-31 23:59:59
            $endTime = strtotime("2024-04-15 23:59:59");
            displayRemainingTime($endTime);
            ?>
        </div>
</section>

	<section>
		<div class="image-grid">
			<div class="image-item">
				<img src="img/Screen1.png" alt="Image 1">
			</div>
			<div class="image-item">
				<img src="img/Screen2.png" alt="Image 2">
			</div>
			<div class="image-item">
				<img src="img/Screen3.png" alt="Image 3">
			</div>
			<div class="image-item">
				<img src="img/Screen4.png" alt="Image 4">
			</div>
		</div>
	</div>
	</section>

	<section>
		<div class = "contact-title"><p>CONTACT US:</p></div>

		<div class ="contact">
    		<div class = "contact-link"><img src = "img/instagram.png"><a href="https://www.instagram.com/literalnest/">WWW.INSTAGRAM.COM/LITERALNEST</a></div>
        	<div class = "contact-link"><img src = "img/youtube.png"><a href="https://www.youtube.com/@literalnest">WWW.YOUTUBE.COM/@LITERALNEST</a></div>
 		</div>
	</section>
</body>
</html>