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
                        <img src="product-images/PUMPKIN SEEDS/1.jpg" onclick="clickimg(this)" />
                        <img src="product-images/PUMPKIN SEEDS/2.jpg" onclick="clickimg(this)" />
                        <img src="product-images/PUMPKIN SEEDS/3.jpg" onclick="clickimg(this)" />
                    </div>
                    <div class="main-images">
                        <img src="product-images/PUMPKIN SEEDS/1.jpg" id="imagebox" />
                    </div>
                </div>
            </div>
            <div class="text">
                <div class="content">
                    <p class="brand">Brand: Srishma </p>
                    <p class="Product-name">Srishma Pumpkin Seeds</p>
                </div>
                <div class="pricebox">
                    <p class="price">(Price on Request)</p>
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
                                <td>500</td>
                            </tr>
                        </table>
                    </div>
                    <p>
                        <b>Description: </b>
                        Savor the wholesome goodness of Pumpkin Seeds. Bursting with essential nutrients like magnesium,
                        zinc, and antioxidants, these seeds offer a deliciously crunchy snack or a nutritious addition
                        to salads and baked goods. Enjoy their nutty flavor and reap the health benefits, from
                        supporting heart health to boosting immunity. With Pumpkin Seeds, relish nature's gift in every
                        bite for a nourished body and soul.
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