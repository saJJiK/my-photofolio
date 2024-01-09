<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title> photofolio Assingment</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="cvjs.js"></script>
</head>

<body>
  <script>
    function check_password() {
      let pw1 = document.getElementById("password_1").value;
      let pw2 = document.getElementById("password_2").value;
      if (pw1 != pw2) {
        alert("Passwords does not match, Please try again.")
      }

    }
  </script>
  <?php
  include_once('./php/config.php');
  ?>
  <div class="container">
    <div class="title">Upolad &Sign up</div>
    <div class="content">
      <form action="connectivity-debug.php" method="post" method="post" enctype="multipart/form-data" target="ss">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="full_name" placeholder="Enter your name" required id="name">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="Username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="Email" placeholder="Enter your email" required>
          </div>  
            <span class="details">Confirm Password</span>
            <input type="password" name="conform_password" id="password_2" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <textarea name="comment" rows="5" cols="35" placeholder="Enter text here..."></textarea>
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
        <div class="input-box">
          <span class="details">My career</span>
          <input type="text" required id="" name="career">
        </div><br>
        <div class="input-box">
          <span class="details">About</span>
          <textarea name="commen" rows="5" cols="35" placeholder="Enter text here..."></textarea>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <textarea name="myskills" rows="5" cols="35" placeholder="about my skills" requied></textarea>
        </div>
        <br>

        <br><br>

        <label>HTML</label>
        <select id="html_skill" name="html_skill">
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
          <option value="50%">50%</option>
          <option value="60%">60%</option>
          <option value="70%">70%</option>
          <option value="80%">80%</option>
          <option value="90%">90%</option>
          <option value="100%">100%</option>
        </select>
        &nbsp



        <label>CSS</label>
        <select id="css_Skill" name="css_skill">
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
          <option value="50%">50%</option>
          <option value="60%">60%</option>
          <option value="70%">70%</option>
          <option value="180%">80%</option>
          <option value="90%">90%</option>
          <option value="100%">100%</option>
        </select> &nbsp

        <label>JavaScript</label>
        <select id="javascript_Skill" name="javascript_skill">
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
          <option value="50%">50%</option>
          <option value="60%">60%</option>
          <option value="70%">70%</option>
          <option value="80%">80%</option>
          <option value="90%">90%</option>
          <option value="100%">100%</option>
        </select> &nbsp

        <label>php</label>
        <select id="php_Skill" name="php_skill">
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
          <option value="50%">50%</option>
          <option value="60%">60%</option>
          <option value="70%">70%</option>
          <option value="80%">80%</option>
          <option value="90%">90%</option>
          <option value="100%">100%</option>
        </select> &nbsp

        <label>MySQL </label>
        <select id="mysql_Skill" name="mysql_skill">
          <option value="10%">10%</option>
          <option value="20%">20%</option>
          <option value="30%">30%</option>
          <option value="40%">40%</option>
          <option value="50%">50%</option>
          <option value="60%">60%</option>
          <option value="70%">70%</option>
          <option value="80%">80%</option>
          <option value="90%">90%</option>
          <option value="100%">100%</option>
        </select> &nbsp <br><br>

        <div class="input-box">
          <span class="details">My Service</span>
          <input type="text" name="service1" placeholder="1st" required> &nbsp &nbsp
          <input type="text" name="service2" placeholder="2nd" required> &nbsp &nbsp
          <input type="text" name="service3" placeholder="3rd" required> &nbsp &nbsp
        </div><br>

        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
          Select Image File to Upload:
          <input type="file" name="file">
          <div class="button">
          <input type="submit" name="submit" value="upload and Sign up">
        </form>


        
        
        </div>

      </form>
    </div>
  </div>

</body>

</html>