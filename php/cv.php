<?php
include_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = "";
$name = "";
$email = "";
$number = "";

$address = "";
$birthday = "";
$carreer = "";
$about = "";
$myservice_1 = "";
$myservice_2 = "";
$myservice_3 = "";
$myskills = "";
$myskills_1 = "";
$myskills_2 = "";
$myskills_3 = "";
$myskills_4 = "";
$myskills_5 = "";
$image_file="";


$sql = "SELECT * FROM userinfo WHERE username ='$username'&& password ='$password'";
$result = $__conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {

    $fullname = $row['fullname'];
    $name = $row['username'];
    $email = $row['email'];
    $number = $row['phone number'];
    $address = $row['address'];
    $birthday = $row['birthday'];
    $carreer = $row['carreer'];
    $about = $row['about'];
    $myservice_1 = $row['myservice 1'];
    $myservice_2 = $row['myservice 2'];
    $myservice_3 = $row['myservice 3'];
    $myskills = $row['my skills'];
    $myskills_1 = $row['my_skills1'];
    $myskills_2 = $row['my_skills2'];
    $myskills_3 = $row['my_skills3'];
    $myskills_4 = $row['my_skills4'];
    $myskills_5 = $row['my_skills5'];
    $image_file=$row['image_filename'];

        echo("
        <!DOCTYPE html>
    <html>
    <head>
        <title>Personal Portfolio cv</title>
        <link rel='stylesheet' href='../cvstyle.css'>

    </head>
    <body>


        <!-- home section start -->
        <section class='home' id='home'>
            <div class='max-width'>
                <div class='home-content'>
                    <div class='text-1'>Hello, my name is</div>
                    <div class='text-2'>$fullname</div>
                    <div class='text-3'>And I'm a $carreer</div>

                </div>
            </div>
        </section>

        <!-- about section start -->
        <section class='about' id='about'>
            <div class='max-width'>
                <h2 class='title'>About me</h2>
                <div class='about-content'>
                    <div class='column left'>
                        <img src='../image_upload/$image_file' alt='user Profile picture'>
                    </div>
                    <div class='column right'>
                        <div class='text'>I'm Sajjitha and I'm a $carreer</div>
                        <p>Hi, I’m $fullname I'm a $carreer $about</p>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- services section start -->
        <section class='services' id='services'>
            <div class='max-width'>
                <h2 class='title'>My services</h2>
                <div class='serv-content'>
                    <div class='card'>
                        <div class='box'>
                            <i class='fas fa-paint-brush'></i>
                            <div class='text'>$myservice_1</div>
                            
                        </div>
                    </div>
                    <div class='card'>
                        <div class='box'>
                            <i class='fas fa-chart-line'></i>
                            <div class='text'>$myservice_2</div>
                            
                        </div>
                    </div>
                    <div class='card'>
                        <div class='box'>
                            <i class='fas fa-code'></i>
                            <div class='text'>$myservice_3</div>
                            
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </section>
        <style>

        .skills-content .right .html::before{
            width: $myskills_1%;
        }
        .skills-content .right .css::before{
            width: $myskills_2%;
        }
        .skills-content .right .js::before{
            width: $myskills_3%;
        }
        .skills-content .right .php::before{
            width: $myskills_4%;
        }
        .skills-content .right .mysql::before{
            width: $myskills_5%;
        }

        </style>

        <!-- skills section start -->
        <section class='skills' id='skills'>
            <div class='max-width'>
                <h2 class='title'>My skills</h2>
                <div class='skills-content'>
                    <div class='column left'>
                        <div class='text'>My creative skills & experiences.</div>
                        <p>$myskills</p>
                        <a href='#'>Read more</a>
                    </div>
                    <div class='column right'>
                        <div class='bars'>
                            <div class='info'>
                                <span>HTML</span>
                                <span>$myskills_1%</span>
                            </div>
                            <div class='line html'></div>
                        </div>
                        <div class='bars'>
                            <div class='info'>
                                <span>CSS</span>
                                <span>$myskills_2%</span>
                            </div>
                            <div class='line css'></div>
                        </div>
                        <div class='bars'>
                            <div class='info'>
                                <span>JavaScript</span>
                                <span>$myskills_3%</span>
                            </div>
                            <div class='line js'></div>
                        </div>
                        <div class='bars'>
                            <div class='info'>
                                <span>PHP</span>
                                <span>$myskills_4%</span>
                            </div>
                            <div class='line php'></div>
                        </div>
                        <div class='bars'>
                            <div class='info'>
                                <span>MySQL</span>
                                <span>$myskills_5%</span>
                            </div>
                            <div class='line mysql'></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- contact section start -->
        <section class='contact' id='contact'>
            <div class='max-width'>
                <h2 class='title'>Contact me</h2>
                <div class='contact-content'>
                    <div class='column left'>
                       <center>
                         <div class='text'>Get in Touch</div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                        <div class='icons'>
                            <div class='row'>
                                <i class='fas fa-user'></i>
                                <div class='info'>
                                    <div class='head'>Name</div>
                                    <div class='sub-title'>$fullname</div>
                                </div>
                            </div>
                            <div class='row'>
                                <i class='fas fa-map-marker-alt'></i>
                                <div class='info'>
                                    <div class='head'>Address</div>
                                    <div class='sub-title'>$address</div>
                                </div>
                            </div>
                            <div class='row'>
                                <i class='fas fa-envelope'></i>
                                <div class='info'>
                                    <div class='head'>Email</div>
                                    <div class='sub-title'>$email</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </section>



    </body>
    </html>
     ");
} else {
    echo ("login unsuccessful, Please Check your password");
}
?>