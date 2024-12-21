<?php
include 'connection.php';
include 'fetch_data.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nicole's Corememories</title>
    <link rel="icon" href="assets/img/cm_icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: black;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
        }

        .bgimg {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('assets/img/insideout.jpg');
            min-height: 100%;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .bubble {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            animation: bounce 2s ease-in-out infinite;
            padding: 10px;
            margin-top: 30px;
            transition: transform 0.3s ease, width 0.3s ease, height 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
        }

        .bubble:hover {
            transform: scale(1.2);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.9);
        }

        .bubble-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            filter: blur(2px);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            padding-bottom: 30px;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            margin: auto;
            padding: 30px;
            border: 1px solid #888;
            width: 85%;
            max-width: 500px;
            border-radius: 8px;
            text-align: center;
            color: white;
        }

        .modal-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .modal-content h2 {
            color: white;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .modal-content p {
            font-size: 16px;
            text-align: justify;
            color: white;
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .w3-row-padding {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .w3-third {
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }

            .bubble {
                width: 80px;
                height: 80px;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .w3-third {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .bubble {
                width: 70px;
                height: 70px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar with image -->
    <nav class="w3-sidebar w3-hide-medium w3-hide-small w3-hover-shadow" style="width:40%">
        <div class="bgimg"></div>
    </nav>

    <!-- Hidden Sidebar (reveals when clicked on menu icon)-->
    <nav class="w3-sidebar w3-animate-right w3-xxlarge"
        style="display:none;padding-top:230px;right:0;z-index:2; background-color:#655C9E;" id="mySidebar">
        <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-xxxlarge w3-display-topright"
            style="padding:0 12px;">
            <i class="fa fa-remove"></i>
        </a>
        <div class="w3-bar-block w3-center">
            <a href="#" class="w3-bar-item w3-button w3-text-white w3-hover-black w3-xlarge"
                onclick="closeNav()">Home</a>
            <a href="#about" class="w3-bar-item w3-button w3-text-white w3-hover-black w3-xlarge"
                onclick="closeNav()">About</a>
            <a href="#island" class="w3-bar-item w3-button w3-text-white w3-hover-black w3-xlarge"
                onclick="closeNav()">Island of Personality</a>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="w3-main w3-padding-large" style="margin-left:40%">

        <!-- Menu icon to open sidebar -->
        <span class="w3-button w3-top w3-black w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
            onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="w3-container w3-center w3-text-white" style="padding:128px 16px" id="home">
            <img src="assets/img/core.png" class="w3-image" style="width:60%; padding-bottom: 20px;">
            <img src="assets/img/insideout.jpg" class="w3-image w3-hide-large w3-hide-small w3-round w3-hover-shadow" i
                style="display:block;width:40%;margin:auto;">
            <img src="assets/img/insideout.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round w3-hover-shadow"
                width="500" height="1333">
        </header>

        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
            <h2>About</h2>
            <hr class="w3-opacity">
            <p class="w3-text-white">Welcome to a journey through my mind! This website is a collection of islands, each
                one representing a
                unique part of who I am. Every island holds its own story feeling and experience creating a world rich
                with meaning and emotion. As you explore you'll find vibrant visuals personal stories and reflections
                that capture the essence of my inner world. Each island is a reminder that every feeling—whether it's
                happiness sadness or something in between—helps shape who I am.

                This website is not just about sharing pictures or stories. It's about reflecting on the memories and
                experiences that guide my journey and embracing the depth of what makes me whole. Welcome to my world
                and thank you for walking through these memories with me.
            </p>
        </div>

        <!-- Island of Personality -->
        <div class="w3-padding-32 w3-content" id="island">
            <h2 class="w3-text-grey">My Island Of Personality</h2>
            <hr class="w3-opacity">

            <?php
            $islandIds = ['island1', 'island2', 'island3', 'island4'];
            $index = 0;

            foreach ($islands as $island) {
                $islandName = $island['name'];
                $color = $island['color'];
                $image = $island['image'];
                $shortDescription = $island['shortDescription'];
                $longDescription = $island['longDescription'];
                $imagePath = 'assets/img/' . $image;

                echo '
                    <div class="w3-container w3-content w3-center" style="max-width:1300px; padding-top:30px; margin-top:20px;" id="' . $islandIds[$index] . '">
                        <h2 class="w3-wide" style="color:' . $color . ';"><b>' . $islandName . ' Island</b></h2>
                        <p class="w3-opacity w3-text-white"><i>' . $shortDescription . '</i></p>
                        <img src="' . $imagePath . '" class="w3-greyscale w3-hover-shadow" style="width:70%; margin:20px 0;">
                        <p class="w3-justify w3-padding-small w3-text-white">' . $longDescription . '</p>';

                $contentSql = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . intval($island['islandOfPersonalityID']);
                $contentResult = $conn->query($contentSql);

                if ($contentResult && $contentResult->num_rows > 0) {
                    echo '<div class="w3-row-padding" style="padding-bottom:30px; display: flex; flex-wrap: wrap; justify-content: center;">';
                    $contentIndex = 0;

                    while ($content = $contentResult->fetch_assoc()) {
                        $contentImagePath = 'assets/img/' . $content['image'];
                        $bubbleColor = $content['color'];
                        $contentText = $content['content'];
                        echo '<div class="w3-third" style="padding: 10px; display: flex; justify-content: center; align-items: center;">
                                <div class="bubble" style="background-color:' . $bubbleColor . '; width: 100px; height: 100px; border-radius: 50%; padding: 20px; text-align: center;" 
                                data-island-name="' . $islandName . '" data-image="' . $contentImagePath . '" 
                                data-content="' . $contentText . '" data-color="' . $color . '"  onclick="showModal(this)">
                                <img src="' . $contentImagePath . '" class="bubble-img" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                                </div>
                                </div>';
                        $contentIndex++;
                    }
                    echo '</div>';
                }
                echo '</div>';

                $index++;
            }
            ?>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 id="modalIslandName"></h2>
                <img id="modalImage" src="" alt="Image" />
                <p id="modalText"></p>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-light-grey w3-center" style="margin:-24px">
            <img src="assets/img/cm_icon.png" alt="logo" style="width: 15%" />
        </footer>

        <script>
            function showModal(element) {
                document.getElementById('modalIslandName').textContent = element.getAttribute('data-island-name');
                document.getElementById('modalImage').src = element.getAttribute('data-image');
                document.getElementById('modalText').textContent = element.getAttribute('data-content');
                document.querySelector(".modal-content").style.backgroundColor = element.getAttribute('data-color');
                document.getElementById('myModal').style.display = "block";
            }

            function closeModal() {
                document.getElementById('myModal').style.display = "none";
            }

            function openNav() {
                document.getElementById("mySidebar").style.width = "60%";
                document.getElementById("mySidebar").style.display = "block";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.display = "none";
            }
        </script>
</body>

</html>