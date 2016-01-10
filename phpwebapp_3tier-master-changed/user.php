<?php
// we now in presentation layer
// we will include business layer to load business logic
include("business.php");

// init User Model from Business Logic
$user = new User();

// insert new user if post data exists
if(isset($_POST["pk_username"]) && $_POST["pk_username"]){
	$user->createUser($_POST["pk_username"], $_POST["userpassword"]);
}

// now load all users
$data = $user->getAllUsers();

// prepare HTML Table
function getHTMLTable($tabledata) {
  $html = '<table id="userstable">';
  $html .= '<thead><tr>';
  $html .= '<th>Stadtname</th>';
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
   <title>Users</title>
 </head>
 <body>
 
 <form method="post" >
    <h2> Register: </h2> <br>
    Username: <br>
    <input type="text" name="pk_username" /><br>
    Password: <br>
    <input type="text" name="userpassword" /> <br>
    <input type="submit" value="Submit" />
  </form>

    
 <?php echo getHTMLTable($data); ?><br />
 
 </body>
</html>