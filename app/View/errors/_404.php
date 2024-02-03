<!-- Simple 404 Page using HTML & CSS -->
<!-- Author: Godnon Dsilva -->

<!-- HTML5 -->
<!DOCTYPE html>
<html>
  <head>
    <!-- Enter your title of the page -->
    <title>404</title>
    <!-- Link the CSS posted below to this page, change the href -->
    <style type="text/css">
    	/* Imported fonts */
@import url('https://fonts.googleapis.com/css?family=Anton');
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

/* CSS */
body {
  background-color: #222;
  font-family: 'Anton',  sans-serif;
  margin: 0;
}


body > main > center > p {
  color: #ddd;
  font-family: 'Open Sans'. sans-serif !important;
}

body > main > center > h1 {
  text-transform: uppercase;
  color: #0077ff;
  font-size: 48px;
}

body > main > center > h3 > a {
  text-transform: uppercase;
  font-size: 18px;
  color: #000;
  background-color: #0077ff;
  text-decoration: none;
  padding: 1px 5px;
  border: 1px solid #0077ff;
  border-radius: 5px;
}
    </style>
    <base href=""> <!-- Enter your website URL here -->

    <!-- Just some important metas, you can ignore these -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- If you want to learn more about them then visit https://www.w3schools.com/tags/tag_meta.asp -->
  </head>
  <body>
    <main>
      <center>
        <br /><br /><br /><br /><br /><br />
  			<h1>404 - no need to explain!</h1>
  			<p> <?= $msg ?> <br><br>
                  • Check your URI<br />
                  • Check Class names<br />
                  • Check again<br /><br /><br /></p>
        <h3><a href="/">Go home !</a></h3>
        <br /><br /><br /><br />
      </center>
    </main>
  </body>
</html>