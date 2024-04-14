<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
      .elearn {
    /* E Learning */
    position: absolute;
    width: 149px;
    height: 35px;
    left: 80px;
    top: 53px;
    font-family: 'Space Grotesk', sans-serif; /* Ensure fallback fonts */
    font-style: normal;
    font-weight: 700;
    font-size: 26px;
    line-height: 33px;
    color: #FFFFFF;
}

.dash{

/* Dashboard */

position: absolute;
width: 187px;
height: 28px;
left: 90px;
top: 113px;

font-family: 'Space Grotesk';
font-style: normal;
font-weight: 500;
font-size: 25px;
line-height: 32px;
color: #FFFFFF;

}
.menu{
position: absolute;
width: 187px;
height: 28px;
left: 89.45px;
top: 180px;

font-family: 'Space Grotesk', sans-serif;
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 32px;

color: #000000;


}

.menu-link{
  text-decoration: none; /* Remove underline */
  color: inherit; /* Inherit text color from parent (.menu) */

position: absolute;
width: 187px;
height: 28px;

font-family: 'Space Grotesk', sans-serif;
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 32px;

color: #000000;

font-weight: bold; /* Initial bold font weight */


}

.menu-link:hover {
  /* Optional: Add hover styles */
  text-decoration: underline; /* Underline on hover */
  /* Add other hover styles as needed */
  font-weight: 1000;
      cursor: pointer; /* Change cursor on hover */
    

}


.logout {
  background: #000000;
  border-radius: 45px;
  width: 141px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Space Grotesk';
  font-style: normal;
  font-weight: 700;
  font-size: 23px;
  line-height: 40px;
  color: #FFFFFF;
  position: absolute;
  left: 70px;
  top: 580px;
}

#speakerImage {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage1 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage1:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage2 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage2:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage3 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage3:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage4 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage4:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage5 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: relative;
  left: 150px;
}

#speakerImage5:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage6 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 240px;
  top: 590px;
}

#speakerImage6:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}


.profile {
  position: absolute;
  width: 210px;
  height: 40px;
  left: 1060px;
  top: 24px;
  font-family: 'Space Grotesk';
  font-style: normal;
  font-weight: 400;
  font-size: 21px;
  line-height: 27px;
  color: #000000;
  background: #F5F5F5;
  border-radius: 18px;
  display: flex;
  align-items: center;
}

.info {
  display: flex;
  align-items: center;
}

.info img {
  width: 40px; /* Adjust image width as needed */
  height: 40px; /* Adjust image height as needed */
  margin-right: 10px; /* Adjust spacing between image and text */
  border-radius: 50%; /* Make the image circular */
}

.text-info {
  display: flex;
  flex-direction: column;
}

.stu{
  font-family: 'Space Grotesk';
  font-style: normal;
  font-weight: 400;
  font-size: 15px;
  line-height: 27px;
  color: #000000;
}
.username {
  font-family: 'Space Grotesk';
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 27px;
  color: #000000;
  text-transform: capitalize;

}

.shape{
box-sizing: border-box;

position: absolute;
width: 70%;
height: 180px;
left: 343px;
top: 80px;
border-radius: 30px;

}

.lower{
position: absolute;
width: 70%;
height: 250px;
left: 343px;
top: 260px;
background-color: #FFFFFF;

font-family: 'Space Grotesk';
font-style: normal;
font-weight: 700;
font-size: 27px;
line-height: 47px;

color: #000000;



}

.image-container {
      width: 24%;
      height: 240px; /* Set a common height for the image containers */
      float: left;
      box-sizing: border-box;
      padding: 10px; /* Add some padding to create space between images */
    }

    /* Style the images */
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Maintain aspect ratio and cover the container */
    }

.txt1{
font-family: 'Space Grotesk';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 31px;

color: #000000;


}

.txt2{
font-family: 'Space Grotesk';
font-style: normal;
font-weight: 400;
font-size: 15px;
line-height: 20px;

color: #000000;


}

#speakerImage11 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 190px;
  top: 300px;
}

#speakerImage11:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage22 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 420px;
  top: 300px;
}

#speakerImage22:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage33 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 650px;
  top: 300px;
}

#speakerImage33:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImage44 {
  width: 20px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 880px;
  top: 300px;
}

#speakerImage44:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

#speakerImagen {
  width: 17px; /* Adjust the width as needed */
  height: auto; /* Maintain aspect ratio */
  /* Additional styling properties */
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  position: absolute;
  left: 440px;
  top: 33px;
}

#speakerImagen:hover {
  cursor: pointer; /* Change cursor to pointer on hover */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* Add a shadow effect on hover */
  transform: scale(1.1); /* Scale up the image slightly on hover */
}

.popup {
      display: none;
      position: fixed;
      top: 400px;
      left: 180px;
      background: #fff;
      border: 1px solid #ccc;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      z-index: 999; /* Set a higher z-index value */

    }

    .color-circle {
      display: inline-block;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      margin-right: 5px;
    }

    /* Define colors for the circles */
    .normal-mode-color {
      background-color: #61BBD6; /* Change color as needed */
      font-family: 'Space Grotesk';
      font-style: normal;
      font-weight: 700;
      font-size: 24px;
      line-height: 31px;

      color: #000000;
    }

    .grey-mode-color {
      background-color: grey; /* Change color as needed */
      font-family: 'Space Grotesk';
      font-style: normal;
      font-weight: 700;
      font-size: 24px;
      line-height: 31px;

      color: #000000;
    }

    .normal-mode-color:hover {
      cursor: pointer; /* Change cursor to pointer on hover */

    }
    .grey-mode-color:hover {
      cursor: pointer; /* Change cursor to pointer on hover */

    }

    .content {
      width: 200px;
      height: 200px;
      border: 1px solid #000;
      margin-top: 20px;
    }

    /* Define colors for content divs */
    .normal-mode-content {
      background-color: #61BBD6; /* Default color */
    }

    .grey-mode-content {
      background-color: grey; /* Default color */
    }




    



    </style>
</head>

<body>
  
    <div style="background-color: #FFFFFF; width: 100%; height: 100%;">  
  
        <div style="background-color: #4DAFCD; width: 290px; height: 630px; float:left;" id="contentNormalMode">  
            <div class="elearn">E Learning</div>
        </div>  

        <div class="dash">
          Dashboard
        </div>

        <div class="menu">
          <b>
            <a href="games.html" class="menu-link">Games</a>
            <img id="speakerImage" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer" src="gamesv.mp3"></audio>
            <script>
                const speakerImage = document.getElementById('speakerImage');
                const audioPlayer = document.getElementById('audioPlayer');
                speakerImage.addEventListener('click', () => {
                if (audioPlayer.paused) {
                  audioPlayer.play();
                } else {
                  audioPlayer.pause();
                }
                });
            </script>

<br><br>
            <a href="stories_pg.html" class="menu-link">Stories</a>
            <img id="speakerImage1" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer1" src="storiesv.mp3"></audio>
            <script>
                const speakerImage1 = document.getElementById('speakerImage1');
                const audioPlayer1 = document.getElementById('audioPlayer1');

                speakerImage1.addEventListener('click', () => {
                if (audioPlayer1.paused) {
                  audioPlayer1.play();
                } else {
                  audioPlayer1.pause();
                }
                });
            </script>
<br><br>


            <a href="worksheet.html" class="menu-link">Worksheets</a>
            <img id="speakerImage2" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer2" src="worksheetsv.mp3"></audio>
            <script>
                const speakerImage2 = document.getElementById('speakerImage2');
                const audioPlayer2 = document.getElementById('audioPlayer2');

                speakerImage2.addEventListener('click', () => {
                if (audioPlayer2.paused) {
                  audioPlayer2.play();
                } else {
                  audioPlayer2.pause();
                }
                });
            </script>
<br><br>            

            <a href="Social_skills.html" class="menu-link">Social Skills</a>
            <img id="speakerImage3" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer3" src="socialv.mp3"></audio>
            <script>
                const speakerImage3 = document.getElementById('speakerImage3');
                const audioPlayer3 = document.getElementById('audioPlayer3');

                speakerImage3.addEventListener('click', () => {
                if (audioPlayer3.paused) {
                  audioPlayer3.play();
                } else {
                  audioPlayer3.pause();
                }
                });
            </script>

<br><br>
            
            <a href="music.html" class="menu-link">Music</a>
            <img id="speakerImage4" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer4" src="musicv.mp3"></audio>
            <script>
                const speakerImage4 = document.getElementById('speakerImage4');
                const audioPlayer4 = document.getElementById('audioPlayer4');

                speakerImage4.addEventListener('click', () => {
                if (audioPlayer4.paused) {
                  audioPlayer4.play();
                } else {
                  audioPlayer4.pause();
                }
                });
            </script>
<br><br>



            <!-- Button to trigger the popup -->
            <span onclick="togglePopup()" class="menu-link">Theme</span>

<div id="themePopup" class="popup">
  <span onclick="changeToNormalMode()">
    <span class="color-circle normal-mode-color"></span>Normal Mode
  </span><br>
  <span onclick="changeToGreyMode()">
    <span class="color-circle grey-mode-color"></span>Grey Mode
  </span>
</div>

<!-- Content divs -->

<script>
  function togglePopup() {
    var popup = document.getElementById('themePopup');
    if (popup.style.display === 'none') {
      popup.style.display = 'block';
    } else {
      popup.style.display = 'none';
    }
  }

  function changeToGreyMode() {
    document.getElementById('contentNormalMode').style.backgroundColor = '#BDBDBD'; // Change color for Normal Mode content

    document.getElementById('normalModeImage').style.display = 'none'; // Hide Normal Mode Image
    document.getElementById('normalModeImage2').style.display = 'none'; // Hide the second Normal Mode Image
    document.getElementById('greyModeImage').style.display = 'block'; // Show Grey Mode Image
    document.getElementById('greyModeImage2').style.display = 'block'; // Show the second Grey Mode Image
    document.getElementById('themePopup').style.display = 'none';
    document.getElementById('contentNormalMode').style.backgroundColor = '#BDBDBD'; // Change color for Normal Mode content

toggleImageMode('normalModeImage11', '1_bw.jpeg', '1.jpeg');
toggleImageMode('normalModeImage22', '2_bw.jpeg', '2.jpeg');
toggleImageMode('normalModeImage33', '3_bw.jpeg', '3.jpeg');
toggleImageMode('normalModeImage44', '4_bw.jpeg', '4.jpeg');

// toggleImageMode('normalModeImage2', '2_bw.jpeg', '2.jpeg');
// Add similar calls for other images you want to toggle for grey mode

document.getElementById('themePopup').style.display = 'none';

  }

  function changeToNormalMode() {
    document.getElementById('contentNormalMode').style.backgroundColor = '#4DAFCD'; // Reset color for Normal Mode content

    document.getElementById('normalModeImage').style.display = 'block'; // Show Normal Mode Image
    document.getElementById('normalModeImage2').style.display = 'block'; // Show the second Normal Mode Image
    document.getElementById('greyModeImage').style.display = 'none'; // Hide Grey Mode Image
    document.getElementById('greyModeImage2').style.display = 'none'; // Hide the second Grey Mode Image
    document.getElementById('themePopup').style.display = 'none';
    document.getElementById('contentNormalMode').style.backgroundColor = '#4DAFCD'; // Reset color for Normal Mode content

toggleImageMode('normalModeImage11', '1.jpeg', '1_bw.jpeg');
toggleImageMode('normalModeImage22', '2.jpeg', '2_bw.jpeg');
toggleImageMode('normalModeImage33', '3.jpeg', '3_bw.jpeg');
toggleImageMode('normalModeImage44', '4.jpeg', '4_bw.jpeg');

// Add similar calls for other images you want to toggle for normal mode

document.getElementById('themePopup').style.display = 'none';

  }
    function toggleImageMode(imageId, greyModePath, normalModePath) {
    const imageElement = document.getElementById(imageId);

    if (imageElement.src.includes('_bw')) {
      imageElement.src = normalModePath; // Change to normal mode image
    } else {
      imageElement.src = greyModePath; // Change to grey mode image
    }
  }


  
</script>
            <img id="speakerImage5" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer5" src="themev.mp3"></audio>
            <script>
                const speakerImage5 = document.getElementById('speakerImage5');
                const audioPlayer5 = document.getElementById('audioPlayer5');

                speakerImage5.addEventListener('click', () => {
                if (audioPlayer5.paused) {
                  audioPlayer5.play();
                } else {
                  audioPlayer5.pause();
                }
                });
            </script>


          </b>
        </div>
        <a href="logout.php">
        <div class="logout">
          Log out


        </div>
        </a>        <img id="speakerImage6" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer6" src="logoutv.mp3"></audio>
            <script>
                const speakerImage6 = document.getElementById('speakerImage6');
                const audioPlayer6 = document.getElementById('audioPlayer6');

                speakerImage6.addEventListener('click', () => {
                if (audioPlayer6.paused) {
                  audioPlayer6.play();
                } else {
                  audioPlayer6.pause();
                }
                });
            </script>



  
        <div style="background-color: #FFFFFF; width:50%; height: 100%; float:left;">  
              <div class="profile">
                <div class="info">
                  <img src="student.png" alt="Profile Image">
                  <div class="text-info">
                    <div class="username"><b><?php echo $_SESSION['username']; ?></b></div>
                    <div class="stu">student</div>
                  </div>
                </div>
              </div>

              <img src="notes.png" style="width: 20px; height: auto; position: absolute; left: 355px; top: 28px;
">

              <a href="notes.html"><div style="font-family: 'Space Grotesk', sans-serif; font-style: normal; font-weight: 500; font-size: 20px; line-height: 32px;
color: #000000; position:absolute;  left: 380px; top: 24px;" ><b>Notes</b></div></a>

<img id="speakerImagen" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayern" src="notesv.mp3"></audio>
            <script>
                const speakerImagen = document.getElementById('speakerImagen');
                const audioPlayern = document.getElementById('audioPlayern');

                speakerImagen.addEventListener('click', () => {
                if (audioPlayern.paused) {
                  audioPlayern.play();
                } else {
                  audioPlayern.pause();
                }
                });
            </script>


<div class="shape">
<img id="normalModeImage" alt="Mode Image" src="welcome_color.jpeg" style="position: absolute; height:180px; width:100%; left:0px">

<img id="greyModeImage" alt="Mode Image" src="welcome_bw.jpeg" style="position: absolute; height:180px; width:100%; left:0px; display:none"></div>

<div class="shape">
<img id="normalModeImage2" alt="Mode Image" src="welcome_color.jpeg" style="position: absolute; height:180px; width:100%; left:0px">

<img id="greyModeImage2" alt="Mode Image" src="welcome_bw.jpeg" style="position: absolute; height:180px; width:100%; left:0px; display:none"></div>      <div class="lower">
        Popular Courses<br>

        <div class="image-container">
        <a href="games.html">
        <img id="normalModeImage11" src="1.jpeg" alt="Mode Image">
  </a>
  <div class="txt1">Fun Activities</div>
  <div class="txt2">Activities that are fun to do like games and quizzes</div>
    <img id="speakerImage11" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer11" src="1.mp3"></audio>
            <script>
                const speakerImage11 = document.getElementById('speakerImage11');
                const audioPlayer11 = document.getElementById('audioPlayer11');

                speakerImage11.addEventListener('click', () => {
                if (audioPlayer11.paused) {
                  audioPlayer11.play();
                } else {
                  audioPlayer11.pause();
                }
                });
            </script>

  </div>


  <div class="image-container">
    <a href="Social_skills.html">        <img id="normalModeImage22" src="2.jpeg" alt="Mode Image">
</a>
    <div class="txt1">Social Skills</div>
    <div class="txt2">Boost your social skills with help of videos</div>
    <img id="speakerImage22" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer22" src="2.mp3"></audio>
            <script>
                const speakerImage22 = document.getElementById('speakerImage22');
                const audioPlayer22 = document.getElementById('audioPlayer22');

                speakerImage22.addEventListener('click', () => {
                if (audioPlayer22.paused) {
                  audioPlayer22.play();
                } else {
                  audioPlayer22.pause();
                }
                });
            </script>

  </div>

  <div class="image-container">
    <a href="stories_pg.html">        <img id="normalModeImage33" src="3.jpeg" alt="Mode Image">
</a>
    <div class="txt1">Children Classics</div>
    <div class="txt2">Watch animated videos of the children's classic books</div>
    <img id="speakerImage33" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer33" src="3.mp3"></audio>
            <script>
                const speakerImage33 = document.getElementById('speakerImage33');
                const audioPlayer33 = document.getElementById('audioPlayer33');

                speakerImage33.addEventListener('click', () => {
                if (audioPlayer33.paused) {
                  audioPlayer33.play();
                } else {
                  audioPlayer33.pause();
                }
                });
            </script>

  </div>

  <div class="image-container">
    <a href="worksheet.html">        <img id="normalModeImage44" src="4.jpeg" alt="Mode Image">
</a>
    <div class="txt1">Worksheets</div>
    <div class="txt2">Questions and quizzes to boost your knowledge</div>
    <img id="speakerImage44" src="Speaker_Icon.svg.png" alt="Speaker">
            <audio id="audioPlayer44" src="4.mp3"></audio>
            <script>
                const speakerImage44 = document.getElementById('speakerImage44');
                const audioPlayer44 = document.getElementById('audioPlayer44');

                speakerImage44.addEventListener('click', () => {
                if (audioPlayer44.paused) {
                  audioPlayer44.play();
                } else {
                  audioPlayer44.pause();
                }
                });
            </script>

  </div>

      </div>
        </div>  
    </div>  
</body>
</html>
