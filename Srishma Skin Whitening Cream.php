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
            <img src="patent product image/SKIN WHITENING CREAM/Srishma Skin Whitening Cream.jpg"
              onclick="clickimg(this)" />
            <img src="patent product image/SKIN WHITENING CREAM/2.jpg" onclick="clickimg(this)" />
            <img src="patent product image/SKIN WHITENING CREAM/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="patent product image/SKIN WHITENING CREAM/Srishma Skin Whitening Cream.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Srishma</p>
          <p class="Product-name">Srishma Skin Whitening Cream</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>65/- Per Piece</p>
          <div class="product-details">
            <table>

              <tr>
                <th>Packing Size</th>
                <td>50gm</td>
              </tr>
              <tr>
                <th>Shelf Life</th>
                <td>36 Months</td>
              </tr>
              <tr>
                <th>MOQ</th>
                <td>500</td>
              </tr>
            </table>
          </div>
          <p>
            <b>Description: </b>Introducing Srishma Skin Whitening Cream, a nourishing skincare solution by Srishma.
            Formulated with gentle yet effective ingredients, this cream helps brighten and even out skin tone. It
            reduces the appearance of dark spots, blemishes, and pigmentation, leaving your skin with a radiant glow.
            With regular use, Srishma Skin Whitening Cream promotes a smoother, more luminous complexion. Embrace the
            confidence of flawless skin with Srishma.
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