<?php
// we now in presentation layer
// we will include business layer to load business logic
include("./business.php");

// init User Model from Business Logic
$product = new Product();

$category = $_POST["category"]; 


if($category == "Show all categories"){
    echo "You entered all categories \n <br>";
    $data = $product->readAll();
  }
//call special category
else{
    echo "You entered category: " . $category . "\n <br>";
    $data = $product->readByCategory($category);
  }

// prepare HTML Table
function getHTMLTable($tabledata) {
  $html = '<table id="producttable">';
  $html .= '<thead><tr>';
  $html .= '<th>Product</th>';
  $html .= '<th>Category</th>';
  $html .= '<th>Price</th>';
  $html .= '<th>Description</th>';
  $html .= '</tr></thead>';

  foreach($tabledata as $product) {
    $html .= '<tbody><tr>';
    $html .= '<td>' . $user['productname'] . '</td>';
    $html .= '<td>' . $user['category'] . '</td>';
    $html .= '<td>' . $user['price'] . '</td>';
    $html .= '<td>' . $user['description'] . '</td>';
    $html .= '</tr></tbody>';
  }

  $html .= '</table>';

  return $html;
}

// now we can output the requested data
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Broomtastic</title>

    <link rel="stylesheet" type="text/css" href="style/reset.css" >
    <link rel="stylesheet" type="text/css" href="style/homestyle.css">
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <nav>
          <div class="dropdown">
            <button class="dropbutton">Sign in</button>
            <div class="dropdown-content">
              <a class="inputforms" href="#">Username</a>
              <a class="inputforms" href="#">Password</a>
              <a class="inputforms" href="#">Login</a>
              <a class="inputforms" href="#">Register</a>
            </div>
          </div>
          <img id="owl" src="./img/owl.jpg" alt="Shopping Owl"/>
        </nav>
      </header>
  
      <aside>
        <p class="titles">SORT BY:</p>

        <p class="titles">FILTER BY:</p>
          <br>

          <p class="title2">Price</p>
          <form action="#" class="filtercontent"> 
            <select name="price" >
              <option>Show all prices</option> 
              <option>0-250 Galleons</option> 
              <option>250-500 Galleons</option> 
              <option>500-1000 Galleons</option> 
            </select>
          </form> 

          <br>

          <p class="title2">Category</p>
          <form action="../business/products.php" method="post" class="filtercontent" name="tabledata"> 
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
         <?php echo getHTMLTable($data); ?><br />
        <p>Blablablubberfasel - Die HP schrift is nervig, de geht ned =/<br>
          TODO:<br>
          # keine doppelten einträge erlauben<br>
          # nicht erlauben, dass user sich ohne password einzugeben registriert (hab bei der table sogar not null extra dazugemacht und es geht td noch -_-)<br>
          # weiß noch ned wie des dann mit login ist und habs jz nur mal mit registrieren probiert wo ja a neuer eintrag angelegt wird<br>
          # table mit produkten ... ich weiß ehrlich ned, wie wir des filtern =/ weil ma ja fast auch bilder filtern dann irgw - überfooordert<br>
          # sollen wir des aufs git tun zum dran arbeiten? da steht irgendwas in der angabe ... und wir brauchen noch eine lösung wie wir beide zugriff haben, weil des läuft ja über des fh-ding und i muss es bei mir auch immer beim winscp rauftun, damits geht, wodurch du des fast mit deiner fh-datenbank immer machen müsstest<br>
          # suchfeld ... brauchen wir des? XD haben wir so viele produkte überhaupt? haha
        </p>
        <br>
        <table>

          <tr>
            <td class="tdtitle">
              Balls
            </td>
            <td class="tdtitle">
              Brooms
            </td>
            <td class="tdtitle">
              Clothing
            </td>
          </tr>

          <tr>
            <td>
              Snitch
            </td>
            <td>
              Broomtastic 5000
            </td>
            <td>
              Gloves
            </td>
          </tr>

          <tr>
            <td>
              Quaffle
            </td>
            <td>
              Broomtastic 5001
            </td>
            <td>
              Jackets
            </td>
          </tr>

          <tr>
            <td>
              
            </td>
            <td>
              
            </td>
            <td>
              
            </td>
          </tr>


        </table>

        <br>


      </section>


      
      <footer>
        Ideas belong to Joanne K. Rowling. This website serves no commercial use.
      </footer>
  
    </div>
  
  </body>
</html>