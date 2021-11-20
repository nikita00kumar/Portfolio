<?php

// server side validation
    $error = "";
    $phpError = "";
    $successMessage = "";
if($_POST) {
    
    if (!$_POST['name']) {
        $error .= "Your name is required. <br>";
    }
        if (!$_POST['email']) {
        $error .= "Your email address is required. <br>";
    }
          if (!$_POST['email-body']) {
        $error .= "Your content is required. <br>";
    }
    
    if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid. <br>";
    }
    
    if ($error != "") {
        $phpError = $error;
    } else {
        $emailTo = "nikitakumar0301@gmail.com";
        $subject = "Portfolio Email";
        $content = $_POST['email-body'] . "From: " . $_POST['name'] ;
        $headers = "FROM: ". $_POST['email'];
        
        if(mail($emailTo, $subject, $content, $headers)) {
            $successMessage =  "Your message was sent! Thankyou! ";
        } else {
            $phpError = "Your message could not be sent, please try again.";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikita Kumar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" defer></script>
    <script src="ttps://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js" defer></script>
    <script src="scripts/main.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<section>

<article>
<!--Navigation-->

    <nav>
        <ul>
            <li><a href="#two">Introduction</a></li>
            <li><a href="#three">Skill</a></li>
            <li><a href="#four">Projects</a></li>
            <li><a href="#five">Contact</a></li>
        </ul>
        <!--Dark Mode-->
        <div>
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
            <div class="ball"></div>
            </label>
        </div>
    </nav>


</article>
        

<!--Introduction-->
<section id="two">
    <div class="introduction">
        <div class="introduction-image">
            <img class="introduction-thumbnail" src="images/thumbnail.jpg" style="width:300px">
        </div>
    
        <div class="introduction-text">
            <h4 class="introduction-text-h4">Nikita Kumar</h4>
            <h1 class="introduction-text-h1">UX Designer / Front End Developer</h1>
            <p class="introduction-text-p"> Identifiable branding + an engaging user experience </p>

            <a class="button button4" href="pdf/resume.pdf"> Download Resume </a>
            <a class="button button5" href="pdf/cover-letter.pdf"> Download Cover Letter </a>
        </div>
    </div>
</section>
    
<section id="three">
<!--Skill-->
    
<section class="three">
        <div class="skillsec">
            <div class="column-one">
            <p>    </p>

            <p>WORDPRESS. SILVERSTRIPE.</p>
        
            <p>FOUNDATION. BOOTSTRAP.</p>
        
            <p>THREE.JS. GREENSOCK.JS.</p>

            <p>HTML. CSS. JAVASCRIPT. SASS. PHP.</p>
            </div>

    
        <div class="text-test"><h1>Skills</h1></div>
    </div>
    </section>


<section id="four">
<!--Project Display-->
<div class="project">
    <div class="project-block">
        <div class="project-block_img">
            <img src="images/lego.jpg" alt="">
        </div>
        <div class="project-block_info">
            <div class="project-block_client">
                <span>Adrian Gould</span>
            </div>
            <h1 class="project-block_title">Lego Blog</h1>
            <p class="project-block_text"> My Team and I created a fully responsive and dynamic Blog Website for our Client through WordPress.</p>
            <a class="button button-p" href="#">Launch Site</a>
        </div>
    </div>
</div>

<div class="project">
    <div class="project-block">
        <div class="project-block_img">
            <img src="images/lego.jpg" alt="">
        </div>
        <div class="project-block_info">
            <div class="project-block_client">
                <span>Design Prototype</span>
            </div>
            <h1 class="project-block_title">App Design</h1>
            <p class="project-block_text"> My Team and I created a fully responsive and dynamic Blog Website for our Client through WordPress</p>
            <a class="button button-p" href="meditation_app.html">View Design</a>
        </div>
    </div>
</div>
</section>



<!--Contact Form-->
<section id='five' class="form">
            <div id="contact">
                <h1 class="form-title">Get In Touch</h1>
                
                <div id='error'>
                    <?php echo $phpError. $successMessage; ?>
                </div>
    
                <form action="" method="POST">
                    <label class="form-text" for="">Your Name</label>
                    <input class="form-input" type="text" name='name' id='name'>
                    <label class="form-text"for="">Your Email Address</label>
                    <input class="form-input" type="email" name='email' id='email'>
                    <label class="form-text" for="">Let Me Know What You Need</label>
                    <textarea class="form-input" cols="30" rows="10" id='emailContent' name='email-body'></textarea>
    
                    <input class="form-submit-btn" type="submit">
                </form>
            </div>
           
        </section>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
<script src="app.js"></script>

<script>
        $("form").submit(function(e){
            var error = "";
            
            if($("#name").val() == "") {
                error+= "<p> Please enter your Name or Business Name </p>";
            }
            
             if($("#email").val() == "") {
                error+= "<p> Please enter your Email Address </p>";
            }
             
            if($("#emailContent").val() == "") {
                error+= "<p> The content field is required </p>";
            }
            
            if(error != "") {
            $('#error').html(error);
            
            return false;
            } else {
              return true;
            }
        });
    </script>


</body>
</html>