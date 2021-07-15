<!DOCTYPE html>
<html>
    <head>
        <title>
            Buy Express
        </title>
        <link rel ="stylesheet" href="ADMEN.css">
        <script src="admen.js"></script>
    </head>
    <body onload="count_color();">
        
        <p class="company_name">Buy Express</p>
    <hr>
        <div class="Menu-bar">
      <ul>
          <li ><a href="AdmenHomePage.php">Home</a></li>
          <li>
            <a href="#">About Us</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href ="#">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Team</a></li>
                </ul>
            </div> 
        </li>
          <li><a href="#">Services</a>
          <div class="sub-menu-2">
            <ul>
                <li><a href ="#">New Service</a></li>
                <li><a href="#">Remove Service </li>
                <li><a href="#">Services</a></li>
            </ul>
          </div> 
          </li>
          <li><a href="#" >Jobs</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Pricing</a></li>
          <li class="apply"><a href="#">Apply</a>
            <div class="client-investor-submenu">
                <ul>
                    <li><a href="#">Client</a></li>
                    <li><a href="#">Investor</a></li>
                    </li>
               </ul>
               </div>
        </li>
          <li><a href="#">Location</a></li>
          <li><a href="#">Contact Us</li>
      </ul>
      </div>

      <form id="login" action="create.php" method="post">
      <h1 id="createAccount">Create Account</h1><br/><br/>
      <input type="text" name="username_" placeholder="User name"/><br/>
      <input type="email" name="Emailcreate_" placeholder="Email Address"/><br/>
      <input type="password" name="password_1" placeholder="Password"/><br/>
      <input type="password" name="passwordcreate_1" placeholder=" Confirm Password"/><br/><br/>
      <button type="submit" id="submit">Create Account</button>
      </form>
    </body>
</html>