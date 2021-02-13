

<?php
function openHTML(){
if(isset($_POST['saveChanges'])){
  $name=$_POST['name'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $address1=$_POST['streetAddress1'];
  $address2=$_POST['streetAddress2'];
  $addressCity=$_POST['addressCity'];
  $addressState=$_POST['addressState'];
  $addressZip=$_POST['addressZip'];
  //array of form values
  $account=[$name, $username, $password, $address1, $address2, $addressCity,
    $addressState, $addressZip];
    accountDetails($account);
} else {
  $name="Name";
  $username="Username";
  $password="Password";
  $address1="Street Address";
  $address2="Street Address";
  $addressCity="City";
  $addressState="State";
  $addressZip="Zip";
  getBody();
}}
function getTitle(){
$title = "<title>Lebraun = Self-portrait in a Straw Hat</title>";
}
function getBody(){
  $queryString=$_SERVER['QUERY_STRING'];
  if ($queryString == 'page=account') {
    $account=["Name", "Username", "password", "Address 1", "Address2",
      "City", "State", "Zip"];
    accountDetails($account);
  } else {
    echo '
  <body>
    <header>
      <nav class="user">
        <ul>
          <li><a href="http://localhost/github/csci2006_MichelleCappellin/2006Assignment2/index.php?page=account">My Account</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Shopping Cart</a></li>
        </ul>
      </nav>
      <h1>Art Store</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Art Works</a></li>
          <li><a href="#">Artists</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <article class="artwork">
        <h2 class="art_title">Self-portrait in a Straw Hat</h2>
        <p class="artist">By <a href="#">Louise Elisabeth Lebrun</a></p>
        <figure><img src="artwork/medium/13.jpg" alt="Self-portrait in a Straw Hat"
          title="Self-Portrait in a Straw Hat">
          <figcaption>
            <p>The painting appears, after cleaning, to be an autograph replica of
            a picture, the original of which was painted in brussels in 1782 in
            free imitation of Rubenss Chapeau de Paille, which LeBrun had seen in
            Antwerp. It was exhibited in Paris in 1782 at the Salon de la
            Correspondance. LeBruns original is recorded in a private collection in France.</p>
            <p class="list_price">$700</p>
            <div class="actions"><a href="#">Add to Wish list</a>
            </a href="#">Add to Shopping Cart</a></div>
            <table class="artwork_info">
              <caption>Product Details</caption>
              <tbody>
                <tr>
                  <td class="facet">Medium:</td>
                  <td class="value">Oil on canvas</td>
                </tr>
                <tr>
                  <td class="facet">Dimension:</td>
                  <td class="value">98cm x 71cm</td>
                </tr>
                <tr>
                  <td class="facet">Home:</td>
                  <td class="value"><a href="#">National Gallery, London</a></td>
                </tr>
                <tr>
                  <td class="facet">Genres:</td>
                  <td class="value"><a href="#">Realism</a>, <a href="#">Rococo</a></td>
                </tr>
                <tr>
                  <td class="facet">Subjects:</td>
                  <td class="value"><a href="#">People</a>, <a href="#">Arts</a></td>
              </tr>
              </tbody>
            </table>
          </figcaption>
        </figure>
      </article>
      <h2>Similar Artwork</h2>
      <article class="related">
        <div class="relatedArt">
          <figure><img src="artwork/small/293.jpg" alt="Still Life with Flowers in
          a Glass Vase" title="Still Life with Flowers in a Glass Vase">
            <figcaption>
              <p><a href="#293">Still Life with Flowers in a Glass Vase</a></p>
            </figcaption>
          </figure>
        <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
      </div>
      <div class="relatedArt">
        <figure><img src="artwork/small/183.jpg" alt="Portrait of Alida Christina Assink" title="Portrait of Alida Christina Assink">
          <figcaption>
            <p><a href="#183">Portrait of Alida Christina Assink</a></p>
          </figcaption>
        </figure>
        <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
      </div>
      <div class="relatedArt">
        <figure><img src="artwork/small/820.jpg" alt="Self-portrait" title="Self-portrait">
          <figcaption>
            <p><a href="#820">Self-portrait</a></p>
          </figcaption>
        </figure>
        <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
      </div>
      <div class="relatedArt">
        <figure><img src="artwork/small/374.jpg" alt="William II, Prince of Orange, and his Bride, Mary Stuart" title="William II, Prince of Orange, and his Bride, Mary Stuart">
          <figcaption>
            <p><a href="#374">William II, Prince of Orange, and his Bride, Mary Stuart</a></p>
          </figcaption>
        </figure>
        <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
      </div>
      <div class="relatedArt">
        <figure><img src="artwork/small/849.jpg" alt="Milkmaid" title="Milkmaid">
          <figcaption>
            <p><a href="#849">Milkmaid</a></p>
          </figcaption>
        </figure>
        <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
      </div>
    </article>
    </main>
  <footer>
    <p>All images are copyright to their owners. This is just a hypothetical site
     ©2020 Copyright Art Store</p>
  </footer>
  </body>';
}}

function accountDetails($account){

  echo '
  <form method="post" action="http://localhost/github/csci2006_MichelleCappellin/2006Assignment2/index.php?">
  <fieldset>
  <legend>Account</legend>
  <label for="Name">Enter your name:</label>
  <input type="text" name="name" id="name" value="'.$account[0].'"/></br>
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" value="'.$account[1].'"/></br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" value="'.$account[2].'"/></br>
  <label for="streetAddress1">Address - Street:</label>
  <input type="text" name="streetAddress1" id="streetAddress1" value="'.$account[3].'"/></br>
  <label for="streetAddress2"<Apartment or Unit:</label>
  <input type="text" name="streetAddress2" id="streetAddress2" value="'.$account[4].'"/></br>
  <label for="addressCity">City:</label>
  <input type="text" name="addressCity" id="addressCity" value="'.$account[5].'"/></br>
  <label for="addressState">State:</label>
  <input type="text" name="addressState" id="addressState" value="'.$account[6].'"/></br>
  <label for="addressZip">Zip code:</label>
  <input type="text" name="addressZip" id="addressZip" value="'.$account[7].'"/></br>
  <input type="submit" name="saveChanges" value="Save Changes"/>
  ';
}

 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <?php getTitle(); ?>
   <link rel="stylesheet" href="aux/default.css">
 </head>
 <?php openHTML(); ?>
 </html>
