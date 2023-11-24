  <!-- =======  #footer  Section ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex footer-links">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>র‌্যাব ফোর্সেস সদর দপ্তর</h4>
            <p>
              কার্গো অ্যাডমিন বিল্ডিং <br>
              শাহজালাল আন্তর্জাতিক বিমান বন্দর <br>
              কুর্মিটোলা, ঢাকা- ১২২৯ <br>

            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>অপারেশনস কন্ট্রোল রুম</h4>
            <p>
              <strong>টেলিফোন : </strong> ০২৫৫৬৬৯৯৯৯<br>
              <strong>মোবাইল নং : </strong> ০১৭৭৭৭২০০২৯<br>
              <strong>ফ্যাক্স : </strong> ০২-৪৮৯৬৩১৩৩<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-envelope-at icon"></i>
          <div>
            <h4>র‌্যাব ফরম</h4>
            <a
              href="https://webmail.police.gov.bd/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.police.gov.bd%2fowa">
              <strong>ওয়েবমেইল</strong>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>অফিসিয়াল সোশ্যাল মিডিয়া</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        © 2014 - 2023 Rapid Action Battalion(RAB). All Rights Reserved. Design, Development and Maintenance by <a
          href="https://www.peoplentech.net/" target="_blank">PeopleNTech Software</a>
      </div>
    </div>
  </footer>
  <!-- End #Footer -->

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Language Toggle Button Js -->
  <script>
    // Get the button element
    var button = document.querySelector('.language-btn');

    // Get the span element inside the button
    var span = button.querySelector('span');

    // Define an array of text values to toggle
    var textValues = ['বাং', 'EN'];

    // Initialize a variable to keep track of the current text index
    var textIndex = 0;

    // Add a click event listener to the button
    button.addEventListener('click', function () {
      // Toggle the text inside the span
      textIndex = (textIndex + 1) % textValues.length;
      span.textContent = textValues[textIndex];
    });
  </script>
  <!-- End Language Toggle Button Js -->