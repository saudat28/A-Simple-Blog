<?php include 'header.php'?>
    <section id="contact">
        <div class="container">
                 <div class="section-title">
                    <h2>Contact</h2>
                    <p> I would like to hear anything from you. Please get in touch with me.</p>
                 </div>

        <div class="grid">
          <div class="column">
                <div class="address">
                    <h3>My Address</h3>
                    <p>Kimironko, KG 20 Street, Kigali</p>
                </div>
          </div>
          <div class="column">
                <div class="address">
                    <h3>Email Me</h3>
                    <p>saudatsalehe@gmail.com</p>
                </div>
          </div>
          <div class="column">
                <div class="address">
                    <h3>Call Me</h3>
                    <p>+250 146 900</p>
                </div>
          </div>
        </div>
        <div class="grid">
        
        <div class="column">
          <div class="address2">
            <form method="POST"  action="contacti.php">
              <div class="group">
                 <div class="grid">                                      
                     <div class="column2">
                               <input type="text" name="name" autocomplete="off" placeholder="Enter your name" Required>
                               <input type="email"name="email" autocomplete="off"  Required placeholder="Enter your email">
                               <textarea type="text" name="message" autocomplete="off" placeholder="Enter your Message"  rows="5"></textarea>
                      </div>
                  </div>
                              <button type="submit" name ="submit" class="buttonf">Submit</button> 
                      </div>
          </form>
          </div>
           
        </div>
        <div class="column"> 
        
        </div>

        <div class="column"> 
            <img src="img/work2.jpg" class="img-contact">
        </div>
        </div>

        </div>
    </section><!-- End Contact Section -->
    <?php
    include 'footer.php' ?>
    </body>
    <script src="main.js"> </script>
 </html>


   