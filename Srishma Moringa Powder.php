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
            <img src="patent product image/MORINGA POWDER/Srishma Moringa Powder.jpg" onclick="clickimg(this)" />
            <img src="patent product image/MORINGA POWDER/2.jpg" onclick="clickimg(this)" />
            <img src="patent product image/MORINGA POWDER/3.jpg" onclick="clickimg(this)" />
          </div>
          <div class="main-images">
            <img src="patent product image/MORINGA POWDER/Srishma Moringa Powder.jpg" id="imagebox" />
          </div>
        </div>
      </div>
      <div class="text">
        <div class="content">
          <p class="brand">Brand: Srishma</p>
          <p class="Product-name">Srishma Moringa Powder</p>
        </div>
        <div class="pricebox">
          <p class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: #050505;"></i>70/- Per Piece</p>
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
            <b>Description: </b>Experience the goodness of Srishma Moringa Powder. Made from pure moringa leaves, it's
            packed with nutrients and antioxidants. Boost your health and energy with this natural supplement. Choose
            Srishma Moringa Powder for a simple and best way to support your well-being.
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
    <div class="foot-panel2">
      <ul>
        <p>Quick Links</p>
        <a href="index.html">Home</a>
        <a href="aboutUs.html">About us</a>
        <a href="ourproducts.html">Our Products</a>
        <a href="PCDpharma.html"> PCD Pharma Franchise </a>
        <a href="thirdparty.html">Third Party Manufacturing</a>
        <a href="ContactUs.html">Contact Us</a>

      </ul>

      <ul>
        <p>Services</p>
        <a>Private Lables</a>
        <a>Cosmetics thirdparty Manufacturing</a>
        <a>Ayurvedic Medicine</a>
        <ul class="footer-inner-list">
          <li><a href=""><i class="fa-brands fa-instagram "></i></a></li>
          <li><a href=""><i class="fa-brands fa-facebook "></i></a></li>
          <li><a href=""><i class="fa-brands fa-x-twitter "></i></a></li>
          <li><a href="https://wa.me/9870579944"><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>
      </ul>

      <ul>
        <p>Contact Info</p>
        <a> Vinayak Ayurveda Pvt. Ltd.</a>
        <a>Plot No. 12 New DLF Industrial Area</a>
        <a> Phase 1, Faridabad(Haryana)</a>
        <a>Pin-121003 </a>
        <a>Mobile: +91 9870579944</a>
        <a>Email-info@vinayakayurveda.in</a>

      </ul>
    </div>
    <div class="foot-panel4">
      <div class="pages">
        <a>Conditions of Use</a>
        <a>Privacy</a>
        <a>Your Ads Privacy Choices</a>
      </div>
      <div class="copyright">
        All Right Reserved @ vinayakayurveda.Web Design & Development By
        Vinayak Ayurveda
      </div>
    </div>
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