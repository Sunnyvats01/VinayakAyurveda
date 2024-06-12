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
  <link rel="icon" type="image/x-icon" href="favicon-32x32.png">

  <title>PCD Pharma Franchise-Vinayak Ayurveda</title>
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
  <div id="about-Middle-div">
    <div id="about-heading">
      <p id="heading">PCD Pharma Franchise</p>
      <p id="subHeading">Home<span> > </span>PCD Pharma Franchise</p>
    </div>

    <div id="mid-dev-2">
      <div class="child1">
        <p>
          Vinayak Ayurveda Pvt. Ltd. is a leading Herbal/Ayurvedic PCD Pharma
          company in Delhi NCR (Faridabad). We are a WHO-GMP Certified and ISO
          9001:2015 certified company. Since 2023, we have been providing our
          PCD Pharma services for Herbal/Ayurvedic Products and trying to
          contribute to the welfare of people. We are pleased to welcome new
          PCD Pharma distributors/partners having a growth-oriented strategy
          for Ayurvedic Products. We are looking for Pharma Franchise for
          providing wide range of herbal products throughout the India.
          Serious, dedicated and experienced persons are welcome for sole
          marketing and distribution rights. We offers Ayurvedic Products
          include Capsules, Hair Oil, Shampoo, Handmade Soap, Herbal Powder,
          Ointment, Syrup, Juices etc which are widely appreciated for its
          accurate composition, effectiveness and purity. We offer lucrative
          terms to our franchise. Pharma Franchise refers to privilege or
          right. Franchising refers to business in which a trademark of Pharma
          Franchise company can be used by the other partner for doing
          business. The partner uses that brand to sell products. The
          franchise can be of different types and different modes. We are also
          engaged in marketing of our products to cover possible horizons.
          With the view to spread our presence across India, we provide you
          with a Monopoly distribution rights. Anyone who would like to apply
          for Monopoly distribution can visit our website and fill in a
          contact form.
        </p>
      </div>
      <div class="child2">
        <h2>Contact Us</h2>
        <form action="post" id="pcdform">


          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" value="Submit" name="button">submit</button>
          </div>
        </form>
      </div>
    </div>

    <div class="mid-dev-3">

      <div class="child3">
        <img src="img3.jpg" alt="image" />
      </div>
      <div class="child4">
        <h3><u>There are the following reasons to choose us</u></h3>
        <p class="child4-points">-GMP Certified Company</p>
        <p class="child4-points">-ISO 9001:2015 Certified Company</p>
        <p class="child4-points">-Rich Experience</p>
        <p class="child4-points">-Spacious warehouses</p>
        <p class="child4-points">-Wide range of products approved by Ayush Department</p>
        <p class="child4-points">-State-of-the-art Manufacturing Collaboration</p>
        <p class="child4-points">-PAN India Network</p>
        <p class="child4-points">-100% natural products</p>
        <p class="child4-points">-24/7 Customer services</p>

      </div>

    </div>
  </div>

  <footer>

    <?php
    include 'footer.php';

    ?>

  </footer>


  <script>

    let url = 'https://script.google.com/macros/s/AKfycbxnRj92w-siMqg8Kgxq0DeBGR3rYeQ3jK0KEUvOh7k3GlS29FUBwrURQkR55praO02dfg/exec';
    let form = document.querySelector("#pcdform")

    form.addEventListener("submit", (e) => {

      e.target.button.innerHTML = "Working"
      let d = new FormData(form);
      fetch(url, {
        method: "POST",
        body: d
      }).then((res) => res.text()).then((finalRes) => {

        form.reset();
        e.target.button.innerHTML = "Saved";

        setTimeout(() => {
          e.target.button.innerHTML = "Submit";

        }, 2000)

      })
      e.preventDefault();

    })


  </script>
  <script src="index.js"></script>
</body>

</html>