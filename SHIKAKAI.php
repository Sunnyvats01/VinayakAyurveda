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
            <img src="product-images/SHIKAKAI/SHIKAKAI-1.jpg" onclick="clickimg(this)" />
            <img src="product-images/SHIKAKAI/SHIKAKAI-2.jpg" onclick="clickimg(this)" />
            <img src="product-images/SHIKAKAI/SHIKAKAI-3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/SHIKAKAI/SHIKAKAI-1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Shikakai Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>65/- Per Kg</p>
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
            <b>Description:</b> Shikakai Powder is a 100% pure powder of organically grown Shikakai fruits. Fresh
            Shikakai fruits are sun-dried and ground into a triple-sifted microfine powder form for easier application.
            It is a traditional hair care herb that has been used since ages as a natural hair cleanser. Shikakai comes
            enriched with saponin, a natural surfactant that quickly forms into a mild lather. Saponin helps in
            cleansing away the dirt impurities and oil build-ups from the scalp without stripping it off its natural
            oils. Shikakai powder shampoo comes enriched with vitamins that allow it to retain moisture and help in
            conditioning the dry hair tresses. Its high antioxidant content helps to fight off free-radical damages
            which prevents split ends. The micro-nutrients present in shikakai powder for hair growth boost collagen
            production in the scalp and allow dormant hair follicles to grow. This, in result, promotes healthy hair
            growth. Shikakai powder for hair strengthens hair from its roots up and reduces hair breakage. Shikakai also
            comes as a saviour for tangled hair. The natural conditioning properties of Shikakai moisturise your hair
            offering you soft, shiny, detangled hair locks. The mild nature of herbal shikakai powder maintains the
            natural pH balance of the scalp and its antibacterial properties combats scalp itchiness and dandruff. It
            soothes inflamed scalp with its cooling antiseptic properties, restoring hair health. Shikakai is a great
            hair care ingredient for attaining soft, voluminous and bouncy hair.
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