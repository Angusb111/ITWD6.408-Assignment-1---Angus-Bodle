<?php
  include 'snippets/header.php';
 ?>
    <main>
      <frame onload="loadXMLDoc()">
      <h1 id="hero">XML/RSS</h1>
      <section id="pagerow">
        <section class="pvdy">
          <div class="buttonbox">
            <button type="button" name="button" onclick="loadXMLDoc()">load XML Data</button>
            <button type="button" name="button" onclick="loadRSS()">Load RSS</button>
          </div>
        </section>
        <section class="pvdy">
        <div id="demo"></div>
        </section>
      </section>
      <section id="rssFeed"></section>


      <script>
      function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
          }
        };
        xhttp.open("GET", "XML/4628.xml", true);
        xhttp.send();
      }
      </script>
    </main>
<?php
  include 'snippets/footer.php';
 ?>
