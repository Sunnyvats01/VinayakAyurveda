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
            <img src="product-images/ROSE/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/ROSE/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/ROSE/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/ROSE/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Rose Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>500/- Per Kg</p>
          <div class="product-details">
            <table>

              <tr>
                <th>Packing Size</th>
                <td>25 Kg</td>
              </tr>
              <tr>
                <th>Shelf Life</th>
                <td>36 Months</td>
              </tr>
              <tr>
                <th>MOQ</th>
                <td>25 Kg</td>
              </tr>
            </table>
          </div>
          <p>
            <b>Description:</b> Rose Petals Powder is a 100% pure and organic powder derived from organically grown rose
            flowers, which ensures that it has no pesticides or synthetic fertiliser residues. Rose petal powder for
            face is a gentle exfoliator that deep cleans away the skin’s dirt impurities while nourishing it from deep
            inside. Powerful antioxidants of natural rose petal powder delays the onset of wrinkles and fine lines,
            tightens up the facial skin and delays ageing process. Its cooling properties soothe the skin, reduce suntan
            and brighten up the skin complexion. The vitamin C present in rose petals powder boosts collagen production,
            regenerates skin cells, lightens up skin blemishes and dark spots. The natural astringent properties of this
            rose petal powder face pack helps to remove excess oil, without drying up the skin, keeps pimples and
            further acne breakouts at bay. Being rich in vitamins A, C, D and E, this organic rose petals powder works
            amazingly on dry and frizzy hair and enhances hair growth. The soothing herbal face pack powder naturally
            conditions and tames frizzy and making hair silky and bouncy.
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