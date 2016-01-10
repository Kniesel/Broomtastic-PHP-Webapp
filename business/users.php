<?php
// we now in presentation layer
// we will include business layer to load business logic
include("business.php");

// init User Model from Business Logic
$user = new User();

// insert new user if post data exists
if(isset($_POST["pk_username"]) && $_POST["pk_username"]){
  $user->createUser($_POST["pk_username"]);
}

// now load all users
$data = $user->getAllUsers();

// prepare HTML Table
function getHTMLTable($tabledata) {
  $html = '<table id="userstable">';
  $html .= '<thead><tr>';
  $html .= '<th>Following users exist:</th>';
  $html .= '</tr></thead>';

  foreach($tabledata as $user) {
    $html .= '<tbody><tr>';
    $html .= '<td>' . $user['pk_username'] . '</td>';
    $html .= '</tr></tbody>';
  }

  $html .= '</table>';

  return $html;
}

// now we can clearly output the requested data
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Broomtastic-Users</title>

    <link rel="stylesheet" type="text/css" href="../presentation/style/reset.css" >
    <link rel="stylesheet" type="text/css" href="../presentation/style/homestyle.css">
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <nav>
          <div class="dropdown">
            <button class="dropbutton">Sign in</button>
            <div class="dropdown-content">
              <form action="./users.php" method="post">
                <p>Username</p>
                <input class="inputforms" type="text" name="pk_username">
                <a class="inputforms" href="#">Password</a>
                <a class="inputforms" href="#">Login</a>
                <input class="inputforms" type="submit" value="Show all users">
              </form>
            </div>
          </div>
          <img id="owl" src="../presentation/img/owl.jpg" alt="Shopping Owl"/>
        </nav>
      </header>
  
      <aside>

        <p class="titles">FILTER BY:</p>
          <br>

          <p class="title2">Category</p>
          <form action="./products.php" method="post" class="filtercontent" name="tabledata"> 
            <select name="category">
              <option>Show all categories</option> 
              <option>Balls</option> 
              <option>Books</option> 
              <option>Brooms</option> 
              <option>Clothing</option> 
            </select>
            <input type="submit" value="OK" class="filtercontent">
          </form> 
      </aside>
      
      <section>
        <h1>Welcome to the Broomtastic-Webshop!</h1>
        <br>
        <p>If you would like to see our products, check the Categories-Box left and click on "OK".<br>
          For registration, please use the drop-down-menu "Sign in". But you can also just use it to show how many users have already registered.<br>
          Be aware that your username can only be chosen once!</p>
        <br>
         <?php echo getHTMLTable($data); ?><br />
        <br>

      </section>


      
      <footer>
        Ideas belong to Joanne K. Rowling. This website serves no commercial use.
      </footer>
  
    </div>
  
  </body>
</html>