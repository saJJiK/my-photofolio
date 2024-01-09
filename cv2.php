<!DOCTYPE html>
<html>
<head>
    <title>Personal Portfolio cv</title>
    <link rel='stylesheet' href='cvstyle.css'>

</head>
<body>
    

    <!-- home section start -->
    <section class='home' id='home'>
        <div class='max-width'>
            <div class='home-content'>
                <div class='text-1'>Hello, my name is</div>
                <div class='text-2'>Sajjitha Walallawita</div>
                <div class='text-3'>And I'm a Web Developer</div>
                
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class='about' id='about'>
        <div class='max-width'>
            <h2 class='title'>About me</h2>
            <div class='about-content'>
                <div class='column left'>
                    <img src='sk5.jpeg' alt=''>
                </div>
                <div class='column right'>
                    <div class='text'>I'm Sajjitha and I'm a Web Developer</div>
                    <p>Hi, I’m Sajjitha! I'm a web developer with in-depth experience in UI/UX design.
                         In a nutshell, I create websites that help organizations address business challenges and meet their needs.
                          I manage everything from website navigation and layout to a company's web hosting and security architecture.
                           My expertise lies within front-end web apps, and the main languages in my tech stack are JavaScript, React, and of course HTML/CSS. 
                           I’m a lifelong learner (currently taking a course on building AI chatbots with Python!) and love to read, run, and find new bubble tea shops in colombo..</p>
                    <a href='#'>Download CV</a>
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
                        <div class='text'>Web Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='box'>
                        <i class='fas fa-chart-line'></i>
                        <div class='text'>Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='box'>
                        <i class='fas fa-code'></i>
                        <div class='text'>Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
    <style>
        
    .skills-content .right .html::before{
        width: 90%;
    }
    .skills-content .right .css::before{
        width: 10%;
    }
    .skills-content .right .js::before{
        width: 80%;
    }
    .skills-content .right .php::before{
        width: 50%;
    }
    .skills-content .right .mysql::before{
        width: 70%;
    }

    </style>

    <!-- skills section start -->
    <section class='skills' id='skills'>
        <div class='max-width">
            <h2 class="title'>My skills</h2>
            <div class='skills-content'>
                <div class='column left'>
                    <div class='text'>My creative skills & experiences.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href='#'>Read more</a>
                </div>
                <div class='column right'>
                    <div class='bars'>
                        <div class='info'>
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class='line html'></div>
                    </div>
                    <div class='bars'>
                        <div class='info'>
                            <span>CSS</span>
                            <span>10%</span>
                        </div>
                        <div class='line css'></div>
                    </div>
                    <div class='bars'>
                        <div class='info'>
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class='line js'></div>
                    </div>
                    <div class='bars'>
                        <div class='info'>
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class='line php'></div>
                    </div>
                    <div class='bars'>
                        <div class='info'>
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class='line mysql'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                   <center>
                     <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Sajjitha Walallawita</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Gallle Road,Kalutara</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">sajjitha1234@gmail.com</div>
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
