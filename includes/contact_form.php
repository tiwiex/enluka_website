  <div class="col-12 col-sm-6 wow fadeInRight overflow-hidden">
      <h2 class="fables-second-text-color font-35 font-weight-bold wow fadeInLeft">Let's  <span class="fables-main-text-color">Talk</span></h2>
      <form method="POST" action="includes/send_mailer.php" class="fables-contact-form">
                      <div class="form-group"> 
                        <input type="text" name="name" class="form-control rounded-0 p-3"  placeholder="Name">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" name="email" class="form-control rounded-0 p-3" placeholder="Email">
                      </div>
                      <div class="form-group"> 
                        <input type="text" name="subject" class="form-control rounded-0 p-3" placeholder="Subject">   
                      </div>
                      <div class="form-group"> 
                          <textarea class="form-control rounded-0 p-3" name="message" placeholder="Message" rows="3"></textarea>
                      </div>   
                      <div class="form-group">
                         <!-- /End Top Header -->
                        <div class="loading">Loading</div>
                        <div class="error-message">Email sent succesfully</div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>                    
                      <div><button type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3">Send</button></div>
      </form>
  </div>
