<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/media-queries.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Products-Vinayak Ayurveda</title>
</head>

<body>
  <header>

    <?php
    include "topbar.php"
      ?>

    <?php
    include "header.php"
      ?>


  </header>

  <!-- main part start -->
  <div class="product-details-heading">
    <p>Product Details</p>
  </div>

  <div class="container">
    <div class="product-wrapper">
      <div class="productbox">
        <div class="allimages">
          <div class="smallimages">
            <img src="product-images/Orange Gel/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/Orange Gel/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/Orange Gel/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/Orange Gel/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Orange Gel</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>45/- Per Piece</p>
          <div class="product-details">
            <table>

              <tr>
                <th>Packing Size</th>
                <td>150gm</td>
              </tr>
              <tr>
                <th>Shelf Life</th>
                <td>36 Months</td>
              </tr>
              <tr>
                <th>MOQ</th>
                <td>1000</td>
              </tr>
            </table>
          </div>
          <p>
            <b>Description:</b> Crafted with passion, skill, fresh ingredients and skin expertise. The Orange Gel helps
            you get radiant and glowing skin. After all in life, all you need is Love; hydrated, soft skin! The Orange
            Gel helps treat dark spots and blemishes. Oranges have a high content of citric acid which is effective in
            drying away acne and gets rid of all toxins resulting in preventing future acne breakouts. Oranges are a
            rich source of vitamin C which improves the skin texture and colour. It also helps in restoring collagen in
            your body which is responsible for skin firming and prevents premature aging of skin. The Orange Gel is for
            all skin types but most beneficial for dry and dull skin. It will spruce up and brighten your dull skin. It
            also refines your pores and control oiliness. The Orange Gel leaves you with a radiant skin making your skin
            firm and glowing.
          </p>
        </div>



        <div class="contact-details">
          <Button id="Call-Us">
            <a href="tel:9871099539">Call Us</a>
          </Button>
          <form id="Email-form" action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="8e8f0bf8-f260-46d0-a00f-be9c433731b8" />
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" placeholder="Enter your email">
            <button id="submit-btn" type="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>

    <?php
    include 'footer.php';

    ?>

  </footer>
  <script>
    function clickimg(smallimage) {
      var fullimg = document.getElementById("imagebox");

      fullimg.src = smallimage.src;
    }
  </script>
  <script src="index.js"></script>
</body>

</html>