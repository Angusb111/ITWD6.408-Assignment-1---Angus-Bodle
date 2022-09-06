    <?php
    $page_title = 'Wee Woo';
    include 'snippets/header.php'; ?>
    <main>
      <section>
        <div class="showcase">
          <div class="background"></div>
          <div id="herobox">
            <h2>Advanced Internet and Web Learning Portfolio</h2>
            <h1 id="hero">I am Angus Bodle</h1>
            <h2>And I'm a Web Developer</h2>
          </div>
        </div>
      </section>
      <section id="row2">
        <div class="rowbox50" id="biocontainer">
          <div class="rowboxtop" id="bio1">
            <h1 class="thinh1">Boiii</h1>
            <img id="portrait" src="media\images\portrait-icon.jpg" alt="My Portrait">
          </div>
          <?php include 'snippets/bio.php' ?>
        </div>
        <div class="rowbox50">
          <h1 class="thinh1">My Top 5 Web Technologies</h1>
          <ol>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>mySQL</li>
            <li>Javascript</li>
          </ol>
        </div>
      </section>
      <section id="row3">
        <div class="rowbox100">
          <h1 class="thinh1">My Web Development Competences</h1>
          <div class="flipboxcol">
            <div class="flipboxrow">
              <div class="flip-box">
               <div class="flip-box-inner">
                 <div class="flip-box-front">
                   <p>HTML</p>
                   <img src="media/images/html5.png" alt="HTML5 icon">
                 </div>
                 <div class="flip-box-back">
                   <h2>Rating: 8/10</h2>
                   <p>Words 'n Such</p>
                 </div>
               </div>
              </div>
              <div class="flip-box">
               <div class="flip-box-inner">
                 <div class="flip-box-front">
                   <p>CSS</p>
                   <img src="media/images/css3.png" alt="HTML5 icon">
                 </div>
                 <div class="flip-box-back">
                   <h2>Rating: 8/10</h2>
                   <p>Words 'n Such</p>
                 </div>
               </div>
              </div>
              <div class="flip-box">
               <div class="flip-box-inner">
                 <div class="flip-box-front">
                   <p>Javascript</p>
                   <img src="media/images/javascript.png" alt="HTML5 icon">
                 </div>
                 <div class="flip-box-back">
                   <h2>Rating: 4.5/10</h2>
                   <p>Words 'n Such</p>
                 </div>
               </div>
              </div>
            </div>
            <p>(Hover to Flip)</p>
          </div>
        </div>
      </section>
      <section id="row4">
        <div class="rowbox100">
          <h1 class="thinh1">Declaration of Authenticity</h1>
          <?php include 'snippets\declaration.php' ?>
        <div>
      </section>
    </main>
    <?php  include 'snippets/footer.php'; ?>
