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
            <img src="product-images/Karela Powder/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/Karela Powder/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/Karela Powder/3.jpg " onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/Karela Powder/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Karela Powder</p>
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
            <b>Description:</b> Karela Powder | Bitter Melon | Bitter Gourd | Momordica Charantia is 100% Natural and
            Herbal. Bitter melon, also known as bitter gourd or Momordica charantia, is a tropical fruit-like gourd said
            to offer a variety of benefits. Bitter melon may be consumed as a food, as a juice known as karela juice, or
            as a tea. Bitter melon is a member of the squash family, Cucurbitaceae. It is commonly known as balsam pear
            or karela and is widely cultivated in Asia, South America, the Caribbean, and East Africa. Did you know?
            This fruit has a very warty, ridged exterior and is harvested before ripening, as it becomes increasingly
            bitter. Bitter melon contains many nutrients that can be beneficial to your health. It's linked to lowering
            blood sugar, which some studies suggest means it can aid in diabetes treatment. It acts as a blood purifier
            that helps keeps the skin glowing. It is used in the management of blood boils, scabies, itching, ringworm
            and other fungal infections. The antioxidants present in Karela protect against skin diseases and prevent
            skin cell damage.
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