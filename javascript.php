<?php
  include 'snippets/header.php';
 ?>
    <main>
      <h1>Javascript</h1>
      <section id="row2">
        <div class="rowbox20">
          <div class="buttonbox">
            <button class="" id="demo1-button" type="button" name="button" onclick="toggleDemo(1)">DEMO 1</button>
            <button class="" id="demo2-button" type="button" name="button" onclick="toggleDemo(2)">DEMO 2</button>
            <button class="" id="demo3-button" type="button" name="button" onclick="toggleDemo(3)">DEMO 3</button>
            <button class="" id="demo4-button" type="button" name="button" onclick="toggleDemo(4)">DEMO 4</button>
          </div>
        </div>
        <div class="demo-box" id="demo1">
          <div class="box-background">
            <div class="box-margin-10">
              <h2>Automatic Slideshow</h2>
              <div class="movieauto">
                <div class="posters">
                  <img class="mySlides" src="media/images/movies/everything.jpg" style="width:200px">
                  <img class="mySlides" src="media/images/movies/interstellar.jpg" style="width:200px">
                  <img class="mySlides" src="media/images/movies/mankind.jpg" style="width:200px">
                  <img class="mySlides" src="media/images/movies/saul.jpg" style="width:200px">
                  <img class="mySlides" src="media/images/movies/waltuh.jpg" style="width:200px">
                  <img class="mySlides" src="media/images/movies/spaceballs.jpg" style="width:200px">
                </div> <!-- Changing Banner -->
                <h2 id="auto-slide-title"></h2>
              </div>
            </div>
          </div>
          <div class="box-background">
            <div class="box-margin-10">
              <h2>Manual Slideshow</h2>
              <div id="movie1">
                <img id="movie-poster-two" src="media/images/movies/everything.jpg" alt="Moviefilm poster">
                <h2 id="manual-slide-title">Everything Everywhere All At Once</h2>
                <div class="slideshow-controls">
                  <button class="slideshow-control" type="button" name="button" onclick="prevMovie()">Prev.</button>
                  <button class="slideshow-control" type="button" name="button" onclick="nextMovie()">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="demo-box" id="demo2" style="display:none;">
          <h2>Choose Accent Colour</h2>
          <div class="acc-button-row">
            <button class="acc-button" id="acc-button-blue" type="button" name="button" onclick="accent('blue')">Alpine Blue</button>
            <button class="acc-button" id="acc-button-green" type="button" name="button" onclick="accent('green')">Emerald Green</button>
            <button class="acc-button" id="acc-button-orange" type="button" name="button" onclick="accent('orange')">Neon Orange</button>
          </div>
          <h2>Choose Background</h2>
          <select id="selectbackground" class="" name="" onchange="background()">
            <option value="">         --Choose a theme--</option>
            <option value="light">    Light     </option>
            <option value="inbetween">Inbetween </option>
            <option value="dark">     Dark      </option>
          </select>
          <h2>Choose Text Size</h2>
          <p>text</p>
          <input type="range" min="1" max="4" value="1" class="slider" id="myRange" oninput="changeText(value)">
        </div>
        <div class="demo-box" id="demo3" style="display:none;">

          <h2>Shopping Cart</h2>
          <ul id="listcontent" onload="loadcart()"></ul>
          <button type="button" name="button" onclick="clearCart()">Clear Cart</button>

          <div class="shop">
            <div class="item">
              <h3>Asus 15.6" Laptop</h3>
              <img src="media/images/shop/asus.jpg" alt="">
              <p>Intel Core i5 8GB-RAM 512GB-SSD - Grey</p>
              <p>$699</p>
              <button type="button" name="button" onclick="addToCart(0)">Add to Cart</button>
            </div>
            <div class="item">
              <h3>Acer Aspire 3 15.6"</h3>
              <img src="media/images/shop/acer.jpg" alt="">
              <p>Celeron N4020/8GB/256GB SSD</p>
              <p>$999</p>
              <button type="button" name="button" onclick="addToCart(1)">Add to Cart</button>
            </div>
            <div class="item">
              <h3>Microsoft Surface Laptop 2</h3>
              <img src="media/images/shop/surface.jpg" alt="">
              <p>Intel Core i5, 8GB RAM, 128GB SSD</p>
              <p>$1499</p>
              <button type="button" name="button" onclick="addToCart(2)">Add to Cart</button>
            </div>
            <div class="item">
              <h3>Microsoft Surface Laptop 3</h3>
              <img src="media/images/shop/surface2.jpg" alt="">
              <p>Intel Core i7, 12GB RAM, 512GB SSD</p>
              <p>$2999</p>
              <button type="button" name="button" onclick="addToCart(3)">Add to Cart</button>
            </div>
            <div class="item">
              <h3>Lenovo Yoga 9</h3>
              <img src="media/images/shop/yoga.jpg" alt="">
              <p>Intel® Core™ i5-1135G7, 16GB RAM</p>
              <p>$1000</p>
              <button type="button" name="button" onclick="addToCart(4)">Add to Cart</button>
            </div>
            <div class="item">
              <h3>Lenovo Yoga 13</h3>
              <img src="media/images/shop/yoga13.jpg" alt="">
              <p>Intel® Core™ i7-1177G7, 16GB RAM</p>
              <p>$1500</p>
              <button type="button" name="button" onclick="addToCart(5)">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="demo-box" id="demo4" style="display:none;">
          <div class="box-background">
            <div class="box-margin-10">
              <h3>Select Option: </h3>
              <select id="demo4-select" class="" name="" onchange="loadDemo4Data(value)">
                <option value="">--Choose a Gallery Image--</option>
              </select>
            </div>
          </div>
          <div class="box-background">
            <div class="box-margin-10">
              <h3>Add New Image: </h3>
              <div id="update-form">
                <input id="title" type="text" name="title" value="" placeholder="Title...">
                <input id="image" type="text" name="image" value="" placeholder="Image...">
                <input id="desc" type="text" name="desc" value="" placeholder="Description...">
                <button type="button" name="button" onclick="updateGallery()">Submit</button>
              </div>
            </div>
          </div>
          <div id="gallery" class="box-background">
            <div class="box-margin-10" id="target">
              <h3></h3>
              <img id="gallery-img" src="" alt="">
              <p></p>
            </div>
          </div>
        </div>
        <script>
          var myIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            const AtitleArray = ['Everything Everywhere All At Once',
                                'Interstellar',
                                'For All Mankind',
                                'Better Call Saul',
                                'Breaking Bad',
                                'Spaceballs'];
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            document.getElementById('auto-slide-title').innerHTML = AtitleArray[myIndex-1];
            setTimeout(carousel, 4000); // Change image every 4 seconds
          }

        </script>
      </section>
    </main>
<?php
  include 'snippets/footer.php';
 ?>
