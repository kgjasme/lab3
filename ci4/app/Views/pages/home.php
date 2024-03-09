<?php
    $facebook_url = "https://www.facebook.com/klarenzj/";
    $instagram_url = "https://www.instagram.com/renzjsm";
    $github_url = "https://github.com/kgjasme";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klarenz Jasme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://www.chromethemer.com/wallpapers/chromebook-wallpapers/images/960/jdm-chromebook-wallpaper.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative; 
            background-size: cover;
        }

        .profile-container {
            position: absolute;
            top: 20px; 
            left: 20px;
            z-index: 1;
            display: flex; 
            align-items: center;
        }

        .profile-frame {
            width: 240px; 
            height: 290px; 
            border-radius: 20px; 
            overflow: hidden;
            margin-right: 20px; 
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px; 
        }

        .main-heading {
            color: white;
            text-align: left; 
            margin: 0 0 0 10px; 
            z-index: 1;
            position: absolute;
            top: 20px;
            left: calc(250px + 20px); 
            white-space: nowrap;
        }

        .main-heading h1 {
			margin: 0;
			font-family: 'Raleway', sans-serif;
        }

        .main-heading p {
            margin: 5px 0 0;
			 font-family: 'Source Sans Pro', sans-serif;
        }

        .nav-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2;
        }

        .icon-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            z-index: 3; /* Ensure icons are above other content */
        }

        .nav-icon {
            font-size: 24px;
            margin-bottom: 10px;
            color: white;
            cursor: pointer;
        }

        .nav-icon:hover {
            color: #85C7F2;
        }

        .games-list, .movie-list, .music-list {
            position: fixed;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            display: none; 
            flex-direction: row; 
            align-items: center;
            justify-content: center; 
            animation: fade-in 0.5s ease-out;
            width: auto; 
            max-width: 80%;
            z-index: 3; 
            color: white; 
        }

        .games-list.visible, .movie-list.visible, .music-list.visible {
            display: flex; 
        }

        .games-list li, .movie-list li, .music-list li {
            list-style: none;
            text-align: center; 
        }

        .games-list img {
            width: 280px;
            height: 200px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .games-list span, .movie-list span, .music-list span {
            display: block;
        }

        .date-time-container {
			position: fixed;
			bottom: 20px;
			right: 20px;
			color: white;
			font-size: 14px;
			z-index: 1;
			font-family: 'Source Sans Pro', sans-serif; 
		}

        .social-links {
            position: fixed;
            bottom: 20px;
            left: 20px; /* Adjusted to move the icons to the bottom left */
            display: flex;
            align-items: center;
        }

        .social-links a {
            color: #F9F6EE;
            font-size: 36px; /* Enlarged the icons */
            margin-right: 10px;
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            color: #E9DCC9;
            transform: scale(1.2);
        }

        .intro-container {
            margin-left: 50px;
            padding-top: 20px; 
        }
    </style>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            const gamesIcon = document.querySelector(".gamepad-icon");
            const gamesList = document.querySelector(".games-list");
            const movieIcon = document.querySelector(".movie-icon");
            const movieList = document.querySelector(".movie-list");
            const musicIcon = document.querySelector(".music-icon");
            const musicList = document.querySelector(".music-list");

            gamesIcon.addEventListener("click", function () {
                gamesList.classList.toggle("visible");
                if (gamesList.classList.contains("visible")) {
                    fadeIn(gamesList);
                } else {
                    fadeOut(gamesList);
                }
            });

            movieIcon.addEventListener("click", function () {
                movieList.classList.toggle("visible");
                if (movieList.classList.contains("visible")) {
                    fadeIn(movieList);
                } else {
                    fadeOut(movieList);
                }
            });

            musicIcon.addEventListener("click", function () {
                musicList.classList.toggle("visible");
                if (musicList.classList.contains("visible")) {
                    fadeIn(musicList);
                } else {
                    fadeOut(musicList);
                }
            });

            const profileImage = document.querySelector(".profile-image");

            profileImage.addEventListener("mouseover", function () {
                profileImage.style.backgroundColor = "transparent";
            });

            profileImage.addEventListener("mouseout", function () {
                profileImage.style.backgroundColor = "transparent";
            });

            const profileContainer = document.querySelector(".profile-container");

            function updateMainHeading(name, status) {
                const mainHeading = document.querySelector(".main-heading");
                mainHeading.innerHTML = `<h1>${name}</h1><p>${status}</p>`;
            }

            const dateTimeContainer = document.querySelector(".date-time-container");
            function updateDateTime() {
                const currentDate = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', hour12: true };
                dateTimeContainer.textContent = currentDate.toLocaleDateString('en-US', options);
            }
            setInterval(updateDateTime, 1000);
            updateDateTime();
        });

        function fadeIn(element) {
            element.style.opacity = '0';
            element.style.display = 'flex';

            setTimeout(function() {
                element.style.opacity = '1';
            }, 100);
        }

        function fadeOut(element) {
            element.style.opacity = '1';

            setTimeout(function() {
                element.style.opacity = '0';
                element.style.display = 'none';
            }, 100);
        }
    </script>
</head>
<body>
<div class="nav-container">
    <div class="icon-container">
        <a href="#" class="gamepad-icon" title="Games">
            <i class="fas fa-gamepad nav-icon"></i>
        </a>
        <ul class="games-list">
            <li>
                <img src="https://i.pinimg.com/originals/d1/de/fa/d1defa4795faffe3bb98a44787fe02aa.jpg" alt="League of Legends">
                <span>League of Legends</span>
            </li>
            <li>
                <img src="https://i.pinimg.com/originals/d3/39/5e/d3395ed9226a8a74c22891f4b2fe688f.png" alt="Valorant">
                <span>Valorant</span>
            </li>
            <li>
                <img src="https://4kwallpapers.com/images/wallpapers/grand-theft-auto-v-1920x1080-10738.jpg" alt="Grand Theft Auto V">
                <span>Grand Theft Auto V</span>
            </li>
        </ul>
        <a href="#" class="movie-icon" title="Favorite Movies">
            <i class="fas fa-film nav-icon"></i>
        </a>
         <ul class="movie-list">
        <li>
            <img src="https://www.gstatic.com/tv/thumb/v22vodart/3429/p3429_v_v8_aa.jpg" alt="The Shawshank Redemption">
            <span>The Shawshank Redemption</span>
        </li>
        <li>
            <img src="https://www.gstatic.com/tv/thumb/v22vodart/16321/p16321_v_v8_ab.jpg" alt="The Godfather">
            <span>The Godfather</span>
        </li>
        <li>
            <img src="https://www.gstatic.com/tv/thumb/v22vodart/14805/p14805_v_v8_aa.jpg" alt="Pulp Fiction">
            <span>Pulp Fiction</span>
        </li>
		</ul>
        <a href="#" class="music-icon" title="Favorite Music Genres">
            <i class="fas fa-music nav-icon"></i>
        </a>
         <ul class="music-list">
        <li>
            <img src="https://media.istockphoto.com/photos/rock-music-word-written-with-bolder-white-and-green-cubes-picture-id1133672791?k=6&m=1133672791&s=612x612&w=0&h=qkbIYSS_GxIBgXNivKpCR6ahQwOhCxFgJ-PNrHWlS9s=" alt="Rock">
            <span>Rock</span>
        </li>
        <li>
            <img src="https://media.istockphoto.com/photos/pop-music-picture-id687847258?k=6&m=687847258&s=612x612&w=0&h=7vJ7tn-mT2wi6GZ7ZLM1RpBhvXri4ZY1lAPvkFAxgAM=" alt="Pop">
            <span>Pop</span>
        </li>
        <li>
            <img src="https://media.istockphoto.com/photos/hiphop-music-concert-scene-picture-id912446980?k=6&m=912446980&s=612x612&w=0&h=25ZdNPI6qTbcBVrsDZpjM8ICR1r5XhunXyV7DB_KxPc=" alt="Hip Hop">
            <span>Hip Hop</span>
        </li>
		</ul>
            </li>
        </ul>
    </div>
</div>

<div class="profile-container">
    <div class="profile-frame">
        <img src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/429790512_2958159274323399_7338016723462110732_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHPCL3FLkRZobzp3nbS2b-TAhc0Bf_-ZMoCFzQF__5kyuLczXfOFdOhBHZM52FQXTYtBZsfI9X8vqKiDllmWTe4&_nc_ohc=P6lBIojX-_AAX8Dr8as&_nc_ht=scontent.fmnl17-1.fna&oh=00_AfC3DWn4f1hnd7wu3Zp9Jbs_buWndwP_xoQ-NRxIQ0jbuQ&oe=65F05287"class="profile-image">
    </div>
    <div class="main-heading">
        <h1>Klarenz Jasme</h1>
        <p>A CS student at Asia Pacific College</p>
    </div>
</div>

<div class="social-links">
    <a href="<?php echo $facebook_url; ?>" target="_blank">
        <i class="fab fa-facebook fa-lg"></i>
    </a>
    <a href="<?php echo $instagram_url; ?>" target="_blank">
        <i class="fab fa-instagram fa-lg"></i>
    </a>
    <a href="<?php echo $github_url; ?>" target="_blank">
        <i class="fab fa-github fa-lg"></i>
    </a>
</div>

<div class="date-time-container"></div>

</body>
</html>
