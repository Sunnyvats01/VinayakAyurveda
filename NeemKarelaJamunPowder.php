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
            <img src="product-images/Neem Karela Jamun Powder/1.jpg" onclick="clickimg(this)" />
            <img src="product-images/Neem Karela Jamun Powder/2.jpg" onclick="clickimg(this)" />
            <img src="product-images/Neem Karela Jamun Powder/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="product-images/Neem Karela Jamun Powder/1.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Vinayak Ayurveda</p>
          <p class="Product-name">Neem Karela Jamun Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>50/- per Piece </p>
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
            <b> Description:</b> Neem karela jamun powder for Maintaining Blood Sugar Levels."Introducing our Jamun
            Karela Neem Powder – a natural powerhouse that combines the goodness of Jamun (Indian Blackberry), Karela
            (Bitter Gourd), and Neem. This unique herbal blend is thoughtfully crafted to harness the numerous health
            benefits associated with these potent ingredients. Here's a detailed description: Our Jamun Karela Neem
            Powder is a synergistic combination of Jamun, Karela, and Neem, each known for its distinct health-promoting
            properties. Jamun and Karela are traditionally renowned for their potential to help maintain healthy blood
            sugar levels. This powder provides a convenient way to incorporate these herbs into your daily routine.
            Karela, with its bitter taste, has been traditionally used to support digestive health. Combined with Jamun
            and Neem, this powder contributes to overall digestive wellness.
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