<?php
if($_POST["nz-sample-request"]) {
    mail("emma@metalsolutions.uk.com", "NedZink Sample Request", $_POST["nz-sample-request"], "From: an@email.address");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
        <!-- Page CSS -->
    <link rel="stylesheet" href="css/my-css.css">
    <link rel="stylesheet" href="css/metals-page.css">
<link rel="stylesheet" href="css/nedzink.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

<!-- Filter Gallery CSS -->
<link rel="stylesheet" href="css/glightbox.css">

<!-- Animations CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <title>NedZink</title>
  </head>
<body>
<form method="post" action="sample-request-form.php">
            
            <label for="checkbox-naturel">
              <input type="checkbox" id="checkbox-naturel" name="nz-sample-request" value="nedzink naturel">
              NedZink Naturel
            </label>
            <label for="checkbox-neo">
              <input type="checkbox" id="checkbox-neo" name="nz-sample-request" value="nedzink neo">
              NedZink Neo
            </label>
            <label for="checkbox-noir">
              <input type="checkbox" id="checkbox-noir" name="nz-sample-request" value="nedzink noir">
              NedZink Noir
            </label>
            <label for="checkbox-nuance-red">
              <input type="checkbox" id="checkbox-nuance-red" name="nz-sample-request" value="nedzink nuance red">
              NedZink Nuance Red
            </label>

          <button class="submit more-button" type="submit">Send</button>
        </form>
</body>