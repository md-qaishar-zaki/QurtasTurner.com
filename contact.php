

  <?php  $page = 'contact'; include 'header.php' ?>

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Qurtas Turner Gate No.28, Zone 57, Street 28, Industrial Area, P.O.Box: 17473, Doha, State of Qatar</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@qurtasturner.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>(+974) 44784623<br>(+974) 55321540</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="1contact.php" method="post" role="form" class="php-email-form1">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
              <input id="btn-2" type="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
        </div>
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7220.71634203059!2d51.439844!3d25.191141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb283a57683fa2fbc!2sQurtas%20Qatar!5e0!3m2!1sen!2sin!4v1646109712665!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <?php include 'footer.php' ?>
