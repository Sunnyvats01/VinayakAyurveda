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

  <title>Contact Us</title>
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
      <p id="heading">Contact Us</p>
      <p id="subHeading">Home<span> > </span>Contact Us</p>
    </div>

    <div id="mid-dev-3">


      <div class="mid-dev-2-par1 " id="contact-us-form">
        <div class="child14" id="form-page5">
          <p class="form-heading">Contact Us</p>
          <form id="contact-us-form-working">
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
              <button type="submit" name="button">submit</button>
            </div>
          </form>


        </div>
      </div>




      <div class="child10">
        <h3>Contact Info</h3>
        <hr class="contact-us-headings">
        <p id="companyName">Vinayak Ayurveda Pvt. Ltd.</p>
        <p id="companyAddress">Plot No. 12 New DLF Industrial Area</p>
        <p id="companyAddress">Phase 1, Faridabad(Haryana)</p>
        <p id="companyAddress">Pin-121003</p>
        <p id="companyAddress">Mobile: +91 9870579944</p>
        <p id="companyAddress">Email-info@vinayakayurveda.in</p>
      </div>
      <div class="child12">


        <p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.865852861091!2d77.31169537535163!3d28.453459975763042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1708433675919!5m2!1sen!2sin"
            width="650" height="250" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" id="iframe1"></iframe>
        </p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.865852861091!2d77.31169537535163!3d28.453459975763042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1708433675919!5m2!1sen!2sin"
          width="250" height="150" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" id="iframe2"></iframe>

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.865852861091!2d77.31169537535163!3d28.453459975763042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1708433675919!5m2!1sen!2sin"
          width="1200" height="550" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" id="iframe3"></iframe>
      </div>




    </div>



    <footer>

      <?php
      include 'footer.php';

      ?>

    </footer>


    <script>

      let url = 'https://script.google.com/macros/s/AKfycbxnRj92w-siMqg8Kgxq0DeBGR3rYeQ3jK0KEUvOh7k3GlS29FUBwrURQkR55praO02dfg/exec';
      let form = document.querySelector("#contact-us-form-working");

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