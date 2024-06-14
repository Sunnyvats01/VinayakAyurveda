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

  <title>Products</title>
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
  <div id="about-heading">
    <p id="heading">Products</p>
    <p id="subHeading">Home<span> > </span>Our Products</p>
  </div>

  <div class="product-page">

    <div class="filter-buttons" style="margin-bottom: 4rem;">

      <p>Product cateogry</p>
      <hr>
      <button class="active" data-name="All">All products</button>
      <button data-name="cateogry1">Ayurvedic Syrup</button>
      <button data-name="cateogry2">Ayurvedic Powder</button>
      <button data-name="cateogry3"> Herbal Juice</button>
      <button data-name="category4"> Herbal Cosmetics</button>
      <button data-name="category5"> Herbal Capsules</button>
      <button data-name="category6"> Raw Herbs</button>

    </div>

    <div class="product-box-container">

      <div class="box" data-name="cateogry1">
        <a href="Cough-Serup.php"><img src="product-images/Cough Serup/Cough-Serup-1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Cough-Serup.php">Cough Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40 Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Arjun-Chaal-Powder.php"><img src="product-images/Arjun Chaal Powder/Arjun-Chaal-Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Arjun-Chaal-Powder.php">Arjun Chaal Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Ashwagandha-Powder.php"><img src="product-images/Ashwagandha Powder/Ashwagandha- Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Ashwagandha-Powder.php">Ashwagandha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>85/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Beetroot-Powder.php"><img src="product-images/Beetroot Powder/Beetroot-Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Beetroot-Powder.php">Beetroot Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Giloy-Powder.php"><img src="product-images/Giloy Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Giloy-Powder.php">Giloy Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="MULETHI.php"><img src="product-images/MULETHI/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="MULETHI.php">Mulethi </a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>120/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="MULTANIMITTI.php"> <img src="product-images/MULTANI MITTI/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="MULTANIMITTI.php">Multani Mitti</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>15/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="NEEM.php"><img src="product-images/NEEM/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NEEM.php">Neem Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Kg
          </div>

        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="REETHA.php"><img src="product-images/REETHA/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="REETHA.php">Reetha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>85/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="ROSE.php"><img src="product-images/ROSE/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="ROSE.php">Rose Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>500/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Gurmar-Powder.php"><img src="product-images/Gurmar Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Gurmar-Powder.php">Gudmar Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Karela-Powder.php"><img src="product-images/Karela Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Karela-Powder.php">Karela Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Jamun-Powder.php"><img src="product-images/Jamun Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Jamun-Powder.php">Jamun Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Aloevera-Juice.php"><img src="product-images/Aloevera Juice/Aloevera-Juice-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Aloevera-Juice.php">Aloevera Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Giloy-Juice.php"> <img src="product-images/Giloy Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Giloy-Juice.php">Giloy Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Jamun-Juice.php"> <img src="product-images/Jamun Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Jamun-Juice.php">Jamun Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Karela-Juice.php"><img src="product-images/Karela Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Karela-Juice.php">Karela Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="NeemKarelaJamunjuice.php"><img src="product-images/Neem Karela Jamun juice/1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NeemKarelaJamunjuice.php">Neem Karela Jamun </a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="NoniJuice.php"><img src="product-images/Noni Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NoniJuice.php">Noni Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="RoseWater.php"><img src="product-images/Rose Water/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">
          <h4><a href="RoseWater.php">Rose Water</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>25/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Almond-Oil.php"><img src="product-images/Almond OIl/Almond-Oil-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Almond-Oil.php">Almond Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>120/- Per
            Piece</div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Aloevera-Gel.php"><img src="product-images/Aloevera Gel/Aloevera-Gel-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Aloevera-Gel.php">Aloevera Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Castor-Oil.php"><img src="product-images/Castor Oil/Castor-Oil-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Castor-Oil.php">Castor Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Cucumber-Gel.php"><img src="product-images/Cucumber Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Cucumber-Gel.php">Cucumber Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="NeemOil.php"><img src="product-images/Neem Oil/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NeemOil.php">Neem Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="OnionOil.php"><img src="product-images/Onion Oil/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="OnionOil.php">Onion Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="OrangeGel.php"><img src="product-images/Orange Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Castor-Oil.php">Orange Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="PapayaGel.php"><img src="product-images/Papaya Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="OrangeGel.php">Papaya Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category1">
        <a href="Srishma Aloevera Gel.php"><img src="patent product image/Srishma Aloevera Gel.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Aloevera Gel.php">Srishma Aloevera Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>20/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category1">
        <a href="Srishma Cucumber Gel.php"><img src="patent product image/Srishma Cucumber Gel.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Cucumber Gel.php">Srishma Cucumber Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Giloy Ras.php"><img src="patent product image/Srishma Giloy Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Giloy Ras.php">Srishma Giloy Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Jamun Ras.php"><img src="patent product image/Srishma Jamun Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Jamun Ras.php">Srishma Jamun Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Karela Ras.php"><img src="patent product image/Srishma Karela Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Karela Ras.php">Srishma Karela Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"> </i>60/- Per
            Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Aloevera Ras.php"><img src="patent product image/Srishma Aloevera Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Aloevera Ras.php">Srishma Aloevera Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Neem Karela Jamun Ras.php"> <img src="patent product image/Srishma Neem Karela Jamun Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Karela Jamun Ras.php">Srishma Neem Karela Jamun Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>

      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Cough Syrup.php"><img src="patent product image/Srishma Cough Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Cough Syrup.php">Srishma Cough Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>25/- Per Piece
          </div>

        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Liver Syrup.php"><img src="patent product image/Srishma Liver Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Liver Syrup.php">Srishma Liver Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Enzyme Syrup.php"><img src="patent product image/Srishma Enzyme Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Enzyme Syrup.php">Srishma Enzyme Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Multi Vita Syrup.php"><img src="patent product image/Srishma Multi Vita Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Multi Vita Syrup.php">Srishma Multi Vita Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Srishma Neem Powder.php"><img src="patent product image/Srishma Neem Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Powder.php">Srishma Neem Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Srishma Giloy Powder.php"><img src="patent product image/Srishma Giloy Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Giloy Powder.php">Srishma Giloy Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>80/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Jamun Powder.php"><img src="patent product image/Srishma Jamun Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Jamun Powder.php">Srishma Jamun Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Gudmar Powder.php"> <img src="patent product image/Srishma Gudmar Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Gudmar Powder.php">Srishma Gudmar Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>80/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Karela Powder.php"> <img src="patent product image/Srishma Karela Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Karela Powder.php">Srishma Karela Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Moringa Powder.php"><img src="patent product image/Srishma Moringa Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Moringa Powder.php">Srishma Moringa Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>70/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Arjun Chaal Powder.php"><img src=" patent product image/Srishma Arjun Chaal Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Arjun Chaal Powder.php">Srishma Arjun Chaal Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>70/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Ashwagandha Powder.php"><img src="patent product image/Srishma Ashwagandha Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Ashwagandha Powder.php">Srishma Ashwagandha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>150/- Per
            Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category4">
        <a href="Srishma Neem Oil.php"><img src="patent product image/Srishma Neem Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Oil.php">Srishma Neem Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">

        <a href="Srishma Pain Oil.php"><img src="patent product image/Srishma Pain Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Pain Oil.php">Srishma Pain Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Onion Oil.php"><img src="patent product image/Srishma Onion Oil.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Onion Oil.php">Srishma Onion Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Kumkamadi Face Glow Oil.php"><img
            src="patent product image/Srishma Kumkamadi Face Glow Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Kumkamadi Face Glow Oil.php">Srishma Kumkamadi Face Glow Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Skin Whitening Cream.php"><img src="patent product image/Srishma Skin Whitening Cream.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Skin Whitening Cream.php">Srishma Skin Whitening Cream</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Turmeric & Myrrh Soap.php"><img src="patent product image/Srishma Turmeric & Myrrh Soap.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Turmeric & Myrrh Soap.php">Srishma Turmeric & Myrrh Soap</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>


      <div class="box" data-name="category5">
        <a href="Srishma Moringa Capsule.php"><img src="patent product image/Srishma Moringa Capsule.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Moringa Capsule.php">Srishma Moringa Capsule</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>90/- Per Piece
          </div>
        </div>
      </div>


      <div class="box" data-name="category5">
        <a href="Srishma Ashwagandha Capsule.php"><img src="patent product image/Srishma Ashwagandha Capsule.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Ashwagandha Capsule.php">Srishma Ashwagandha Capsule</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>110/ Per Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category6">
        <a href="Srishma Chia Seeds.php"><img src="product-images/CHIA SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Chia Seeds.php">Srishma Chia Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Basil Seeds.php"><img src="product-images/BASIL SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Basil Seeds.php">Srishma Basil Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Pumpkin Seeds.php"><img src="product-images/PUMPKIN SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Pumpkin Seeds.php">Srishma Pumpkin Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Sunflower Seeds.php"><img src="product-images/SUNFLOWER SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Sunflower Seeds.php">Srishma Sunflower Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Watermelon.php"><img src="product-images/WATERMELON SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Watermelon.php">Srishma Watermelon</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
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

  <script>

    let buttons = document.querySelectorAll(".filter-buttons button");
    let card = document.querySelectorAll(".product-box-container .box");

    console.log(buttons, card);


    const filterCards = (e) => {

      document.querySelector(".active").classList.remove("active");
      e.target.classList.add("active");

      card.forEach((c) => {

        c.classList.add("hide")
        if (e.target.dataset.name == c.dataset.name || e.target.dataset.name === "All") {
          c.classList.remove("hide");
        }
      });
    };


    buttons.forEach((btn) => {
      btn.addEventListener("click", filterCards);
    })


  </script>

  <script src="index.js"></script>
</body>

</html>