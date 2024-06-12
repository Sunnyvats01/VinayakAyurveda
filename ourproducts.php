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
        <a href="Cough-Serup.html"><img src="product-images/Cough Serup/Cough-Serup-1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Cough-Serup.html">Cough Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40 Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Arjun-Chaal-Powder.html"><img src="product-images/Arjun Chaal Powder/Arjun-Chaal-Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Arjun-Chaal-Powder.html">Arjun Chaal Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Ashwagandha-Powder.html"><img src="product-images/Ashwagandha Powder/Ashwagandha- Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Ashwagandha-Powder.html">Ashwagandha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>85/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Beetroot-Powder.html"><img src="product-images/Beetroot Powder/Beetroot-Powder-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Beetroot-Powder.html">Beetroot Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Giloy-Powder.html"><img src="product-images/Giloy Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Giloy-Powder.html">Giloy Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="MULETHI.html"><img src="product-images/MULETHI/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="MULETHI.html">Mulethi </a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>120/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="MULTANIMITTI.html"> <img src="product-images/MULTANI MITTI/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="MULTANIMITTI.html">Multani Mitti</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>15/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="NEEM.html"><img src="product-images/NEEM/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NEEM.html">Neem Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Kg
          </div>

        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="REETHA.html"><img src="product-images/REETHA/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="REETHA.html">Reetha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>85/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="ROSE.html"><img src="product-images/ROSE/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="ROSE.html">Rose Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>500/- Per Kg
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Gurmar-Powder.html"><img src="product-images/Gurmar Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Gurmar-Powder.html">Gudmar Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Karela-Powder.html"><img src="product-images/Karela Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Karela-Powder.html">Karela Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Jamun-Powder.html"><img src="product-images/Jamun Powder/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Jamun-Powder.html">Jamun Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Aloevera-Juice.html"><img src="product-images/Aloevera Juice/Aloevera-Juice-1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Aloevera-Juice.html">Aloevera Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Giloy-Juice.html"> <img src="product-images/Giloy Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Giloy-Juice.html">Giloy Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Jamun-Juice.html"> <img src="product-images/Jamun Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Jamun-Juice.html">Jamun Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="Karela-Juice.html"><img src="product-images/Karela Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Karela-Juice.html">Karela Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="NeemKarelaJamunjuice.html"><img src="product-images/Neem Karela Jamun juice/1.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NeemKarelaJamunjuice.html">Neem Karela Jamun </a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry3">
        <a href="NoniJuice.html"><img src="product-images/Noni Juice/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NoniJuice.html">Noni Juice</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="RoseWater.html"><img src="product-images/Rose Water/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">
          <h4><a href="RoseWater.html">Rose Water</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>25/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Almond-Oil.html"><img src="product-images/Almond OIl/Almond-Oil-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Almond-Oil.html">Almond Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>120/- Per
            Piece</div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Aloevera-Gel.html"><img src="product-images/Aloevera Gel/Aloevera-Gel-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Aloevera-Gel.html">Aloevera Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Castor-Oil.html"><img src="product-images/Castor Oil/Castor-Oil-1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Castor-Oil.html">Castor Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Cucumber-Gel.html"><img src="product-images/Cucumber Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Cucumber-Gel.html">Cucumber Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="NeemOil.html"><img src="product-images/Neem Oil/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="NeemOil.html">Neem Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>40/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="OnionOil.html"><img src="product-images/Onion Oil/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="OnionOil.html">Onion Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="OrangeGel.html"><img src="product-images/Orange Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Castor-Oil.html">Orange Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="PapayaGel.html"><img src="product-images/Papaya Gel/1.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="OrangeGel.html">Papaya Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>45/- Per Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category1">
        <a href="Srishma Aloevera Gel.html"><img src="patent product image/Srishma Aloevera Gel.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Aloevera Gel.html">Srishma Aloevera Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>20/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category1">
        <a href="Srishma Cucumber Gel.html"><img src="patent product image/Srishma Cucumber Gel.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Cucumber Gel.html">Srishma Cucumber Gel</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Giloy Ras.html"><img src="patent product image/Srishma Giloy Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Giloy Ras.html">Srishma Giloy Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Jamun Ras.html"><img src="patent product image/Srishma Jamun Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Jamun Ras.html">Srishma Jamun Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Karela Ras.html"><img src="patent product image/Srishma Karela Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Karela Ras.html">Srishma Karela Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"> </i>60/- Per
            Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Aloevera Ras.html"><img src="patent product image/Srishma Aloevera Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Aloevera Ras.html">Srishma Aloevera Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Neem Karela Jamun Ras.html"> <img src="patent product image/Srishma Neem Karela Jamun Ras.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Karela Jamun Ras.html">Srishma Neem Karela Jamun Ras</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>

      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Cough Syrup.html"><img src="patent product image/Srishma Cough Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Cough Syrup.html">Srishma Cough Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>25/- Per Piece
          </div>

        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Liver Syrup.html"><img src="patent product image/Srishma Liver Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Liver Syrup.html">Srishma Liver Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Enzyme Syrup.html"><img src="patent product image/Srishma Enzyme Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Enzyme Syrup.html">Srishma Enzyme Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry1">
        <a href="Srishma Multi Vita Syrup.html"><img src="patent product image/Srishma Multi Vita Syrup.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Multi Vita Syrup.html">Srishma Multi Vita Syrup</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Srishma Neem Powder.html"><img src="patent product image/Srishma Neem Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Powder.html">Srishma Neem Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>50/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="cateogry2">
        <a href="Srishma Giloy Powder.html"><img src="patent product image/Srishma Giloy Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Giloy Powder.html">Srishma Giloy Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>80/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Jamun Powder.html"><img src="patent product image/Srishma Jamun Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Jamun Powder.html">Srishma Jamun Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Gudmar Powder.html"> <img src="patent product image/Srishma Gudmar Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Gudmar Powder.html">Srishma Gudmar Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>80/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Karela Powder.html"> <img src="patent product image/Srishma Karela Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Karela Powder.html">Srishma Karela Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Moringa Powder.html"><img src="patent product image/Srishma Moringa Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Moringa Powder.html">Srishma Moringa Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>70/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Arjun Chaal Powder.html"><img src=" patent product image/Srishma Arjun Chaal Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Arjun Chaal Powder.html">Srishma Arjun Chaal Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>70/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category2">
        <a href="Srishma Ashwagandha Powder.html"><img src="patent product image/Srishma Ashwagandha Powder.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Ashwagandha Powder.html">Srishma Ashwagandha Powder</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>150/- Per
            Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category4">
        <a href="Srishma Neem Oil.html"><img src="patent product image/Srishma Neem Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Neem Oil.html">Srishma Neem Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">

        <a href="Srishma Pain Oil.html"><img src="patent product image/Srishma Pain Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Pain Oil.html">Srishma Pain Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>60/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Onion Oil.html"><img src="patent product image/Srishma Onion Oil.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Onion Oil.html">Srishma Onion Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>35/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Kumkamadi Face Glow Oil.html"><img
            src="patent product image/Srishma Kumkamadi Face Glow Oil.jpg" class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Kumkamadi Face Glow Oil.html">Srishma Kumkamadi Face Glow Oil</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Skin Whitening Cream.html"><img src="patent product image/Srishma Skin Whitening Cream.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Skin Whitening Cream.html">Srishma Skin Whitening Cream</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>65/- Per Piece
          </div>
        </div>
      </div>

      <div class="box" data-name="category4">
        <a href="Srishma Turmeric & Myrrh Soap.html"><img src="patent product image/Srishma Turmeric & Myrrh Soap.jpg"
            class="product-img" /></a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Turmeric & Myrrh Soap.html">Srishma Turmeric & Myrrh Soap</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>75/- Per Piece
          </div>
        </div>
      </div>


      <div class="box" data-name="category5">
        <a href="Srishma Moringa Capsule.html"><img src="patent product image/Srishma Moringa Capsule.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Moringa Capsule.html">Srishma Moringa Capsule</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>90/- Per Piece
          </div>
        </div>
      </div>


      <div class="box" data-name="category5">
        <a href="Srishma Ashwagandha Capsule.html"><img src="patent product image/Srishma Ashwagandha Capsule.jpg"
            class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Ashwagandha Capsule.html">Srishma Ashwagandha Capsule</a></h4>
          <div class="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(73, 74, 75);"></i>110/ Per Piece
          </div>
        </div>
      </div>



      <div class="box" data-name="category6">
        <a href="Srishma Chia Seeds.html"><img src="product-images/CHIA SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Chia Seeds.html">Srishma Chia Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Basil Seeds.html"><img src="product-images/BASIL SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Basil Seeds.html">Srishma Basil Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Pumpkin Seeds.html"><img src="product-images/PUMPKIN SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Pumpkin Seeds.html">Srishma Pumpkin Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Sunflower Seeds.html"><img src="product-images/SUNFLOWER SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Sunflower Seeds.html">Srishma Sunflower Seeds</a></h4>
          <div class="price">Price on Request
          </div>
        </div>
      </div>
      <div class="box" data-name="category6">
        <a href="Srishma Watermelon.html"><img src="product-images/WATERMELON SEEDS/1.jpg" class="product-img" />
        </a>
        <div class="product-box-bottom">

          <h4><a href="Srishma Watermelon.html">Srishma Watermelon</a></h4>
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