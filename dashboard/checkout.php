<?php
if(isset($_GET['total'])){
    $results = $_GET['total'];
    echo ("received:". htmlspecialchars($results));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="app.js"></script>
    <title>Document</title>
</head>
<body>
    <br>
    yeyy.

<div id="imageGallery"></div>

<script>
  // Retrieve the array of image URLs from local storage
  const imageURLsJSON = localStorage.getItem("imageSources");
  
  if (imageURLsJSON) {
    const imageURLs = JSON.parse(imageURLsJSON);
    const imageGallery = document.getElementById("imageGallery");
    
    // Loop through the array and create <img> elements
    imageURLs.forEach(function(imageURL) {
      const img = document.createElement("img");
      img.src = imageURL;
      img.alt = "Image";
      imageGallery.appendChild(img);
    });
  }
</script>

</body>
</html>