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
            <img src="product-images/Giloy Powder/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/Giloy Powder/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/Giloy Powder/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/Giloy Powder/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Giloy Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>50/- Per Piece</p>
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
            <b>Description: </b>Giloy Powder | Tinospora Cordifolia | Amrita | Gulvel | Guduchi | Amrutha Balli For Face
            | Weight Loss | Hair Care | Eating | Drink | Fever| Diabetes | Immunity Booster is 100% Natural and Herbal.
            Giloy Powder Weight loss: Giloy contains antioxidants that can help boost immunity and remove toxins from
            the body, which can help protect the body against various diseases and infections. The herb is also known to
            boost metabolism, leading to better weight loss. Drinking fresh Giloy juice helps to improve immunity and
            can be used to manage fevers due to its antipyretic activity. It also increases platelet count and might
            help in dengue fever. Giloy Powder has antioxidant properties that can help in hair problems and maintain
            hair health. Giloy possesses Raktashodhaka and anti-inflammatory properties. Due to its ability to help
            counter inflammations, Giloy may help combat hair problems, dandruff, and other scalp and hair ailments.
            Giloy Powder is full of antioxidants and helps to release toxins from the body. Giloy juice also detoxifies
            your skin and improve your skin. Giloy is also used for liver diseases, urinary tract infections, and
            heart-related issues. Guduchi is also called as Giloy and is botanically known as Tinospora cordifolia
            powder. Guduchi for immunity wellness contains the most natural and effective formulation of trusted natural
            ingredients Guduchi boosts the body's defence mechanism (immunity). Helps to maintain healthy body
            temperature, blood sugar and blood pressure levels which are already within normal limits.Helps to purify
            blood and provide skin health. It is somewhat bitter by nature and a potent immunomodulatory herb. A
            powerful immunity booster and an anti allergic herb. “Giloy is a universal herb that helps boost immunity”.
            It is a powerhouse of antioxidants which fight free-radicals, keep your cells healthy and get rid of
            diseases. Giloy helps remove toxins, purifies blood, fights bacteria that causes diseases and also combats
            liver diseases and urinary tract infections.
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