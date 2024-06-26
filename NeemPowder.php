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
            <img src="product-images/Neem Powder/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/Neem Powder/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/Neem Powder/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/Neem Powder/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Neem Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>50/- per Piece</p>
          <div class="product-details">
            <table>

              <tr>
                <th>Packing Size</th>
                <td>200gm</td>
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
            <b>Description:</b> Neem Leaves Powder | Neem Tree | Azadirachta Indica is 100% Natural and Herbal. Neem
            leaf powder is known as a n exfoliating agent It flushes out toxins and impurities which makes our skin
            healthier. Furthermore, the powerful properties of neem leaf powder facilitates in providing freshness and
            glow to your skin. 100% natural and herbal.(No pesticides or chemicals used) Comes with Anti-bacterial,
            Anti-fungal, and Anti-viral properties. It Enhances Blood Circulation, detoxifies liver and regulates Blood
            pressure. Neem proves to be a miracle for skin and scalp. Neem has anti- fungal and anti- bacterial
            properties, and rich in Vitamin C, which is a boon for people with sensitive or oily skin. Treat acne and
            pimple: Neem contains margosic acid which kills the pimple causing bacteria leaving a clear skin.
            Moisturizes skin: Not many people know about the moisturizing properties of neem but, nonetheless, neem
            helps in getting rid of dryness of the skin without making it oily, thus giving a very balanced effect Neem
            powder can be included in your daily routine. It provides a clear and healthy looking skin. It has
            properties which removes impurities and environmental residue. This powder can be used on all skin types.
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