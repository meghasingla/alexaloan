<?php include("header.php"); ?>

  

  
  
   
   <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact us</h2>
            <address class="single-address">
              <h4>Corporate Office:</h4>
              <p></p>
            </address>
             <address class="single-address">
              <h4>Branch Office:</h4>
              <p></p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p></p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p></p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="" class="contact-form" method="post">
              <div class="form-group">                
                <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">                
                <input type="text" class="form-control" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
              </div>    
              <div class="form-group">                
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" pattern="^\d{4}\d{3}\d{3}$" required>
              </div>              
              <div class="form-group">
                <textarea class="form-control" name="message" required></textarea>
              </div>
              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Google Map -->
  <section id="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28018.3243902!2d77.07301976258256!3d28.621052875008264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04ba6b064d0f%3A0xf609cdf712fe603e!2sJanakpuri%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1486817386393" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End Google Map -->
          </div>
        </div>
      </div>
    </div>
  </section> 

  
   <?php include("footer.php"); ?>