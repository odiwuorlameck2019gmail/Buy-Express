<!DOCTYPE html>
<html>
    <head>
        <title>
            Buy Express
        </title>
        <link rel ="stylesheet" href="ADMEN.css">
        
    </head>
    <body onload="count_color();">
        
        <p class="company_name">Buy Express</p>
    <hr>
        <div class="Menu-bar">
      <ul>
          <li ><a href="#">Home</a></li>
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

      <form id="login" action="signin.php" method="post">
      <h1 id="signin">Sign In</h1><br/><br/>
      <input type="text" name="_username" placeholder="User name"/><br/><br/><br/>
      <input type="password" name="_password" placeholder="Password"/><br/><br/>
      <button type="submit" id="submit">Sign in</button><br/><br/>
      <button type="button" id="createbutton">Create Account</button><br/><br/>
      <button type="button" id="forgotAccount">Forgot Account</button>
      </form>
      <script src="admen.js"></script>
    </body>
</html>