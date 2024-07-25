<!-- !DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="medical.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Dancing+Script:wght@700&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h1 > Medi Care Center</h1>
                <h4>Services available 24*7</h4>

            </div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#service">Service's</a></li>
                <li><a href="#doctors">Doctor's</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li>  <a href="login.php" >Login</a></li>
            </ul>
            <i id="bar" class="fa-solid fa-bars"></i>
        </nav>

        <div class="main">
            <img src="main.png" alt="">
            <div class="mainText">
                <h1>Elevating Medical Care </h1>
                <p>Empowering seniors with comprehensive coverage and innovative healthcare solutions for a healthier, more secure future.Join us in our commitment to providing comprehensive, personalized healthcare solutions that empower individuals to live healthier, fuller lives.</p>
                <button>More Services</button>
            </div>
        </div>
 

        <div id="service">
            <div class="head">
                <h1>Our Service's</h1>
            </div>
            <div class="service">
                 
                <div class="serviceCard">
                    <img src="chest.webp" alt="">
                    <p>Chest and Respiratory</p>
                </div>
                <div class="serviceCard">
                    <img src="laboratory.webp" alt="">
                    <p>laboratory</p>
                </div>
                <div class="serviceCard">
                    <img src="physio.webp" alt="">
                    <p>Physiotherapy</p>
                </div>
                <div class="serviceCard">
                    <img src="nutrition.webp" alt="">
                    <p>nutrition</p>
                </div>
                <div class="serviceCard">
                    <img src="emerg.jpg" alt="">
                    <p>Emergency Room</p>
                </div>
            </div>
        </div>

        <div id="doctors">
            <div class="head">
                <h1>Our Doctor's</h1>
            </div>
            <div class="doctors">
                <div class="team">
                    <img src="d1.jpg" alt="">
                    <img src="d2.jpg" alt="">
                    <img src="d3.jpg" alt="">
                </div>
                <div class="team">
                    <img src="d4.jpg" alt="">
                    <img src="d5.jpg" alt="">
                    <img src="d6.jpg" alt="">
                </div>
                <div class="team">
                    <img src="d7.jpg" alt="">
                    <img src="d2.jpg" alt="">
                    <img src="d9.jpg" alt="">
                </div>

            </div>
        </div>

        <div id="blog">
            <div class="head">
                <h1>Read Blog</h1>
            </div>
            <div class="blogs">
                <div class="blogCard">
                    <img src="blg1.jpg.jpg" alt="">
                    <h2>Doctors</h2>
                    <a href="#">Read More</a>
                </div>
                <div class="blogCard">
                    <img src="bl2.jpg" alt="">
                    <h2>Skeletal Wellness</h2>
                    <a href="#">Read More</a>
                </div>
                <div class="blogCard">
                    <img src="bl3.webp" alt="">
                    <h2>Neurology</h2>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div id="appointment">
            <div class="head">
                <h1>Book An Appointment</h1>
            </div>
            <div class="form">
                <form method="POST" action="appointment.php">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="date" name="date" required>
                <input type="time" name="time" required>
                <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div id="appointment">
            <div class="head1">
                <h1>Medical Records</h1>
            </div>
        <div class="form1">
            <input type="text" placeholder="Enter Name">
            <input type="text" placeholder="Doctor's Name">
            <input type="date">
            <input type="time" >
            <button>Submit</button>
        

        <div class="footer">
            <div class="text">
                <h2>About</h2>
                <p> A well-equipped guidance for a healthy , fuller life.</p>
                <p>X-ray/radiology services</p>
                <p>Laboratory services</p>
                <p>Emergency doctors available </p>
                <p style="color: rgb(159, 92, 152);"><a href="terms.html">Terms & Conditions</a></p>

            </div>
            <div class="text">
                <h2>Care</h2>
                <p>Facility</p>
                <p>Staff</p>
                <p>Reviews</p>
                <p>Support</p>

            </div>
            <div class="text">
                <h2>Address</h2>
                <p>Lane-02</p>
                <p>Near Park</p>
                <p>Hi-Tech city</p>
                <p>Hyderabad</p>

            </div>
            <div class="text">
                <h2>Contact Us</h2>
                <p>LinkedIn</p>
                <p>YouTube</p>
                <p>Facebook</p>
                <p>Instagram</p>

            </div>
        </div>
    </div>
    <script src="medical.js"></script>
</body>
</html>