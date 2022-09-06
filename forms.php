<?php
  include 'snippets/header.php';
 ?>
    <main>
      <section id="pagerow">
        <section class="pvdy">
          <div class="buttonbox">
            <button type="button" name="button" onclick="toggleForm()">HTML FORM</button>
            <button type="button" name="button" onclick="toggleForm()">GOOGLE FORM</button>
          </div>
        </section>
        <section class="pvdy">
          <form id="htmlform">
           <input type="text" id="fname" name="fname" minlength="3" required><br>
           <label for="fname">A copypasta is a block of text that is copied and pasted across the Internet by individuals through online forums and social networking websites. Copypastas are said to be similar to spam as they are often used to annoy other users and disrupt online discourse.</label><br>
           <input type="radio" id="fname" name="fname" minlength="3" required><br>
           <label for="lname">The word "copypasta" was first used on Usenet groups in 2006.</label><br>
           <input type="text" id="lname" name="lname" required><br>
           <label for="fname">The term "copypasta" is derived from the computer term "copy/paste", and can be traced back to an anonymous 4chan thread from 2006.</label><br>
           <input type="text" id="fname" name="fname" minlength="3" required><br>
           <input type="submit" name="submit" value="Submit">
          </form>
          <iframe id="googleform" src="https://docs.google.com/forms/d/e/1FAIpQLSdmYPL-Q_BIK1PiQxP4uRkhSxwp-OXpL9CIJlVJPpmFc781VQ/viewform?embedded=true" width="640" height="1097" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </section>
      </section>
    </main>
<?php
  include 'snippets/footer.php';
 ?>
The term "copypasta" is derived from the computer term "copy/paste", and can be traced back to an anonymous 4chan thread from 2006.[
