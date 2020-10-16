<?php 
session_start();
$servername='localhost';
$username='puneetha';
$password='Puneetha@25';
$dbname = 'osp_portfolio';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
  die("Database connection Error");
} 
if(isset($_POST['submit']))
   {  
   $Name = $_POST['Name'];
   $Email = $_POST['Email'];
   $Subject = $_POST['Subject'];
   $Message = $_POST['Message'];
   $sql = "INSERT INTO contact_us (Name,Email,Subject,Message)
   VALUES ('$Name','$Email','$Subject','$Message')";
   if (mysqli_query($conn, $sql)) {
   echo "<script>alert('Your Details are saved');</script>";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>portfolio</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
  <div class="content-container">
    <div id="home">
      <div id="nav">
        <div class="logo">
        </div>
        <div class="menu">
          <a class="menu-link active" href="#home"><i class="fas fa-home"></i><span>Home</span></a>
          <a class="menu-link" href="#profile"><i class="fas fa-home"></i><span>Profile & Skills</span></a>
          <a class="menu-link " href="#academicqualification"><i class="fas fa-home"></i><span>Academic Qualification</span></a>
          <a class="menu-link" href="#achievements"><i class="fas fa-home"></i><span>Achievements</span></a>
          <a class="menu-link " href="#projects"><i class="fas fa-home"></i><span>Projects</span></a>
          <a class="menu-link " href="#contact"><i class="fas fa-home"></i><span>Contact Me</span></a>
        </div>
      </div>
      <div id="hero">
        <div id="particles-js"></div>
        <div class="content">
          <h1 class="title">Myself<p></p>Puneetha Reddy</h1>
          <h3 style="color:#f24259">Scroll Down To know more about me</h3>
          <br>
          <a href="#profile"><i class="fas fa-angle-double-down"></i></a>
        </div>
      </div>
    </div>
    <div id="profile"></div>
    <div class="page-section" id="about">
      <h4 class="subtitle">PROFILE & SKILLS</h4>
      <div class="underline"></div>
      <div class="about-wrapper">
        <div class="info">
          <div class="image">
            <img src="./images/puneetha10.jpg" alt="">
            <br>
            <h4 class="subtitle">OBJECTIVE</h4>
            <div class="underline"></div>
          </div>
          <p>To work with dynamic and progressive organization in a competitive environment that will allow me to utilise my skill and Qualifications in the advancement of technology which adds value to the organisation and providing me with opputunities for growth simultaneously.</p>
        </div> 
        <div id = "skills" class="skills">
          <div class="skill">
            <div class="skill-title">
              <span>HTML</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  90%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>CSS</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  70%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>JS</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  75%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>Jquery</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                60%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>Angular JSON</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  55%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>PHP</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  50%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>MySQL</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  35%
                </div>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill-title">
              <span>C</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                  30%
                </div>
              </div>
            </div>
          </div>
        <div class="skill">
            <div class="skill-title">
              <span>Python</span>
            </div>
            <div class="progress-outer">
              <div class="progress-inner">
                <div class="percent">
                    25%
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <div id="academicqualification"></div>
    <div class="page-section" id="about">
      <h4 class="subtitle">ACADEMIC QUALIFICATION</h4>
      <div class="underline"></div>
      <div class="about-wrapper">
          </div>
          <h3>Under Graduation</h3>
          <h3 style="color:palevioletred">Qualification : BTech Information Technology</h3>
          <h3 style="color:palevioletred">Institution : Vellore Institution of Technology</h3>
          <h3 style="color:palevioletred">Current CGPA : 8.67</h3>
          <h3 style="color:palevioletred">Starting Year : 2019</h3>
          <div class="underline"></div>
          <h3>Semester Wise GPA</h3>
          <h3 style="color:palevioletred">First Semester : 8.12</h3>
          <h3 style="color:palevioletred">Second Semester : 9.04</h3>
          <div class="underline"></div>
          <h3>Intermediate Education</h3>
          <h3 style="color:palevioletred">Qualification : Class 12</h3>
          <h3 style="color:palevioletred">Institution : Sri Chaitanya Educational Institutions</h3>
          <h3 style="color:palevioletred">Starting Year : 2017</h3>
          <h3 style="color:palevioletred">Year of Passing : 2019</h3>
          <h3 style="color:palevioletred">Percentage/CGPA : 96.6 %</h3>
          <h3 style="color:palevioletred">Board of Study : Telangana Board of Intermediate Education</h3>
          <h3 style="color:palevioletred">Town : Kukatpally</h3>
          <h3 style="color:palevioletred">State : Telangana</h3>
          <div class="underline"></div>
          <h3>Secondary Education</h3>
          <h3 style="color:palevioletred">Qualification : Class 10</h3>
          <h3 style="color:palevioletred">Institution : Keshava Reddy Public School</h3>
          <h3 style="color:palevioletred">Year of Passing : 2017</h3>
          <h3 style="color:palevioletred">Percentage/CGPA : 10</h3>
          <h3 style="color:palevioletred">Board of Study : AP Board os Secondary Education</h3>
          <h3 style="color:palevioletred">Town : Nandyal</h3>
          <h3 style="color:palevioletred">State : Andhra Pradesh</h3>
        </div> 
        <div id="achievements"></div>
        <div class="page-section" id="about">
          <h4 class="subtitle">ACHIEVEMENTS</h4>
          <div class="underline"></div>
          <div class="about-wrapper">
              </div>
              <p>Sakshi Spell Bee 2013 Zonal Finalist 3</p>
            </div> 
            <div id="projects"></div>
    <div class="page-section" id="portfolio">
      <h4 class="subtitle">Projects</h4>
      <div class="underline"></div>
      <div class="portfolio-wrapper">
        <div class="portfolio-item">
          <div class="thumbnail">
            <img src="./images/movie.jpg" alt="">
          </div>
        <div class="overlay">
          <h5 class="project-title">MOVIE TICKET BOOKING SYSTEM</h5>
          <div class="projectunderline"></div>
          <div class="details">
            <p class="short-desc">It provides information about various movies screening in theatres.All the useful information about the movies can be found here </p>
            <a href="movie_ticket_booking_system.pdf" target="_blank"><i class="fas fa-eye"></i>View</a>
          </div>
        </div>
      </div>
        <div class="portfolio-item">
          <div class="thumbnail">
            <img src="./images/hci.jpg" alt="">
          </div>
          <div class="overlay">
            <h5 class="project-title">Cursor Control Using Facial Movements</h5>
            <div class="projectunderline"></div>
            <div class="details">
              <p class="short-desc">Our system is aimed for people with motor impairments who 
                would find it very convenient to operate computer systems 
                with the help of facial movements. Also, anybody who would 
                appreciate rapid cursor movement can use it.</p>
                <a href="cursor_control_using_facial_movements.pdf" target="_blank"><i class="fas fa-eye"></i>View</a>
            </div>
          </div>
        </div>
    <div class="portfolio-item">
      <div class="thumbnail">
        <img src="./images/campus.jpg" alt="">
      </div>
      <div class="overlay">
        <h5 class="project-title">Campus Recruitment management System</h5>
        <div class="projectunderline"></div>
        <div class="details">
          <p class="short-desc">A student or company information system which is web based system.The project is developed for placement cell being presently used in University for storing and retrieving the information of students who are registered in placement cell</p>
          <a href="campus_recruitment_management_system.pdf" target="_blank"><i class="fas fa-eye"></i>View</a>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="page-section" id="contact">
        <div id="contact"></div>
        <h4 class="subtitle">CONTACT ME</h4>
        <div class="underline"></div>
        <form method="POST" class="contact-form" name="form" action="action.php">
          <div class="form-group">
            <div class="input-wrapper">
              <input class="bordered" type="text" placeholder="Name*" name = "Name" id="Name">
              <svg preserveAspectRatio="none" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673 94">
                <rect class="border-line" x="0.5" y="0.5" width="672" height="93" rx="8" ry="8" />
              </svg>
            </div>
            <div class="input-wrapper">
              <input class="bordered" type="email" placeholder="Email*" name = "Email" id="Email">
              <svg preserveAspectRatio="none" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673 94">
                <rect class="border-line" x="0.5" y="0.5" width="672" height="93" rx="8" ry="8" />
              </svg>
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <input class="bordered" type="text" placeholder="Subject" name = "Subject" id="Subject">
              <svg preserveAspectRatio="none" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673 94">
                <rect class="border-line" x="0.5" y="0.5" width="672" height="93" rx="8" ry="8" />
              </svg>
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <textarea class="bordered" placeholder="Message*" rows="5" name = "Message" id="Message"></textarea>
              <svg preserveAspectRatio="none" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673 94">
                <rect class="border-line" x="0.5" y="0.5" width="672" height="93" rx="8" ry="8" />
              </svg>
            </div>
          </div>
          <div class="form-group">
            <button class="btn send" name="submit" type="submit">SEND MESSAGE</button>
          </div>
        </form>
      </div>
    <div id="footer">
      <a class="launcher" href="#"><i class="fas fa-angle-double-up"></i></a>
      <div class="social">
        <a href="https://github.com/puneetha10/" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/puneetha-minnalla-022808193/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.facebook.com/puneetha.minnalla/" target="_blank"><i class="fab fa-facebook"></i></a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script src="./js/debounce.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>

