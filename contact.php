<!DOCTYPE html>
<html lang="en">

<?php
include '_head.php';
?>

<body>

<?php
include '_header.php';
?>

<!-- page banner start -->
<section id="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1>যোগাযোগ</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page banner end -->

<main id="main">

    <!-- ======= Police Activities Section ======= -->

        <section id="" class="contact-page">
            <div data-aos="fade-up">
                <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h4 class='text-white'>র‍্যাবকে খুঁজুন</h4>
                        <p class='text-white'>র‌্যাবের মোবাইল নম্বর সংগ্রহ করতে সংশ্লিষ্ট জেলার ও থানার তথ্য দিন</p>
                        <div class="form-group col-md-12 top30">
                            <div class="row align-items-center">
                                <div class="col-md-2 vertical-center">
                                    <label for="district" class="control-label ver text-white">জেলা </label>
                                </div>
                                <div class="col-md-10">
                                    <select id="district" class="">
                                        <option value="">জেলা</option>
                                        <option value="1">ঢাকা</option>
                                        <option value="2">ফরিদপুর</option>
                                        <option value="3">গাজীপুর</option>
                                        <option value="4">গোপালগঞ্জ</option>
                                        <option value="5">জামালপুর</option>
                                        <option value="6">কিশোরগঞ্জ</option>
                                        <option value="7">মাদারীপুর</option>
                                        <option value="8">মানিকগঞ্জ</option>
                                        <option value="9">মুন্সিগঞ্জ</option>
                                        <option value="10">ময়মনসিংহ</option>
                                        <option value="11">নারায়াণগঞ্জ</option>
                                        <option value="12">নরসিংদী</option>
                                        <option value="13">নেত্রকোণা</option>
                                        <option value="14">রাজবাড়ি</option>
                                        <option value="15">শরীয়তপুর</option>
                                        <option value="16">শেরপুর</option>
                                        <option value="17">টাঙ্গাইল</option>
                                        <option value="18">বগুড়া</option>
                                        <option value="19">জয়পুরহাট</option>
                                        <option value="20">নওগাঁ</option>
                                        <option value="21">নাটোর</option>
                                        <option value="22">চাঁপাইনবাবগঞ্জ</option>
                                        <option value="23">পাবনা</option>
                                        <option value="24">রাজশাহী</option>
                                        <option value="25">সিরাজগঞ্জ</option>
                                        <option value="26">দিনাজপুর</option>
                                        <option value="27">গাইবান্ধা</option>
                                        <option value="28">কুড়িগ্রাম</option>
                                        <option value="29">লালমনিরহাট</option>
                                        <option value="30">নীলফামারী</option>
                                        <option value="31">পঞ্চগড়</option>
                                        <option value="32">রংপুর</option>
                                        <option value="33">ঠাকুরগাঁও</option>
                                        <option value="34">বরগুনা</option>
                                        <option value="35">বরিশাল</option>
                                        <option value="36">ভোলা</option>
                                        <option value="37">ঝালকাঠি</option>
                                        <option value="38">পটুয়াখালী</option>
                                        <option value="39">পিরোজপুর</option>
                                        <option value="40">বান্দরবান</option>
                                        <option value="41">ব্রাহ্মণবাড়িয়া</option>
                                        <option value="42">চাঁদপুর</option>
                                        <option value="43">চট্টগ্রাম</option>
                                        <option value="44">কুমিল্লা</option>
                                        <option value="45">কক্স বাজার</option>
                                        <option value="46">ফেনী</option>
                                        <option value="47">খাগড়াছড়ি</option>
                                        <option value="48">লক্ষ্মীপুর</option>
                                        <option value="49">নোয়াখালী</option>
                                        <option value="50">রাঙ্গামাটি</option>
                                        <option value="51">হবিগঞ্জ</option>
                                        <option value="52">মৌলভীবাজার</option>
                                        <option value="53">সুনামগঞ্জ</option>
                                        <option value="54">সিলেট</option>
                                        <option value="55">বাগেরহাট</option>
                                        <option value="56">চুয়াডাঙ্গা</option>
                                        <option value="57">যশোর</option>
                                        <option value="58">ঝিনাইদহ</option>
                                        <option value="59">খুলনা</option>
                                        <option value="60">কুষ্টিয়া</option>
                                        <option value="61">মাগুরা</option>
                                        <option value="62">মেহেরপুর</option>
                                        <option value="63">নড়াইল</option>
                                        <option value="64">সাতক্ষীরা</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-4">
                            <div class="row align-items-center" id="thanadiv" style="">
                                <div class="col-md-2 vertical-center">
                                    <label for="slcThana" class="control-label ver text-white">থানা </label>
                                </div>
                                <div class="col-md-10 contact-select ">
                                    <select id="slcThana" class="">
                                        <option value="">থানা নির্বাচন করুন</option>
                                        <option value="150">ফরিদপুর সদর</option>
                                        <option value="151">বোয়ালমারী</option>
                                        <option value="152">আলফাডাঙ্গা</option>
                                        <option value="153">মধুখালি</option>
                                        <option value="154">ভাঙ্গা</option>
                                        <option value="155">নগরকান্দা</option>
                                        <option value="156">চরভদ্রাসন</option>
                                        <option value="157">সদরপুর</option>
                                        <option value="158">শালথা</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-4 text-white">র‌্যাব - ৬</h4>
                        <div class="table-responsive ">
                            <table class="table table-bordered Projects-list-table">
                                <thead class="table-dark-color text-white">
                                <tr>

                                    <th scope="col">নিয়োগ</th>
                                    <th scope="col">কোম্পানী</th>
                                    <th scope="col">মোবাইল নম্বর</th>
                                    <th scope="col">টেলিফোন নম্বর</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class='text-white'>কোম্পানী কমান্ডার</td>
                                    <td class='text-white'>ব্যাটালিয়ন সদর
                                        (খুলনা ক্যাম্প)
                                    </td>
                                    <td>
                                        <a class='' href="#">০১৭৭৭৭১০৬৪৪</a>
                                    </td>
                                    <td><a class='' href="#">০১৭৭৭৭১০৬৪৪</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class='text-white'>র‍্যাবের সাথে যোগাযোগ</h4>
                        <p class='text-white'>আপনি র‍্যাবের সাথে যোগাযোগ করতে অনুসন্ধান করুন</p>
                        <div class="form-group col-md-12 top30">
                            <div class="row align-items-center">
                                <div class="col-md-2 vertical-center">
                                    <label for="contact1" class="control-label ver text-white">সদর দপ্তর/ ব্যাটালিয়ন </label>
                                </div>
                                <div class="col-md-10">
                                    <select id="contact1" class="">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">র&zwj;্যাব সদর দপ্তর</option>
                                        <option value="2">র&zwj;্যাব ব্যাটালিয়ন</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-4">
                            <div class="row align-items-center" id="thanadiv" style="">
                                <div class="col-md-2 vertical-center">
                                    <label for="slcThana1" class="control-label ver text-white">ইউনিট </label>
                                </div>
                                <div class="col-md-10 contact-select ">
                                    <select id="slcThana1" class="">
                                        <option value="">র&zwj;্যাব সদর দপ্তর নির্বাচন করুন</option>
                                        <option value="DG-OFFICE">ডিজি অফিস</option>
                                        <option value="7">অপারেশনস্ উইং</option>
                                        <option value="8">এ্যাডমিন অ্যান্ড ফাইন্যান্স উইং</option>
                                        <option value="4">লিগ্যাল অ্যান্ড মিডিয়া উইং</option>
                                        <option value="6">কমিউনিকেশন অ্যান্ড এমআইএস উইং</option>
                                        <option value="2">ইনভেস্টিগেশন অ্যান্ড ফরেনসিক উইং</option>
                                        <option value="1">ট্রেনিং অ্যান্ড ওরিয়েন্টেশন উইং</option>
                                        <option value="5">এয়ার উইং</option>
                                        <option value="9">আর এন্ড ডি সেল</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                         <h4 class="mt-4 text-white">র‌্যাব - ৬</h4>
                      
                        <div class="table-responsive">
                            <table class="table table-bordered Projects-list-table">
                                <thead class="table-dark-color text-white">
                                <tr>

                                    <th scope="col">নিয়োগ</th>
                                    <th scope="col">মোবাইল নম্বর</th>
                                    <th scope="col">টেলিফোন নম্বর</th>
                                    <th scope="col">ইমেইল</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class='text-white'>কোম্পানী কমান্ডার</td>
                                    <td>
                                        <a class='' href="#">০১৭৭৭৭১০৬৪৪</a>
                                    </td>
                                    <td><a class='' href="#">০১৭৭৭৭১০৬৪৪</a></td>
                                    <td><a class='' href="#"></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </section>

      

         <!-- ======= Police Activities Section ======= -->
    <section id="police-activities" class="police-activities">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
             
              <p class='text-white'>যোগাযোগের ঠিকানা</p>
              <div class="title-shape"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="police-activities-card card h-100">
              <div class="police-activities-card-head">
                <h4>র‌্যাব ফোর্সেস সদর দপ্তর</h4>
              </div>
              <div class="police-activities-card-content">
                <ul>
                  <li>
                    <i class="bx bxs-badge-check"></i> কার্গো অ্যাডমিন বিল্ডিং, 
                  </li>
                  <li>
                    <i class="bx bxs-badge-check"></i> শাহজালাল আন্তর্জাতিক বিমান বন্দর
                  </li>
                  <li><i class="bx bxs-badge-check"></i> কুর্মিটোলা, ঢাকা- ১২২৯</li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="police-activities-card card h-100">
              <div class="police-activities-card-head">
                <h4>র‌্যাব ফোর্সেস সদর দপ্তর</h4>
              </div>
              <div class="police-activities-card-content">
                <ul>
                  <li><i class='bx bxs-phone-call'></i>টেলিফোন : ০২৫৫৬৬৯৯৯৯</li>
                  <li>
                    <i class='bx bx-headphone'></i> মোবাইল নং:০১৭৭৭৭২০০২৯
                  </li>
                  <li><i class='bx bx-printer'></i> ফ্যাক্স : ০২-৪৮৯৬৩১৩৩</li>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End Police Activities Section -->




            <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 nopadding">
                <div id="map" class="office-map office-sec nomargin">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.8997197029084!2d90.39957001777755!3d23.857694432294398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c69ded90f0fb%3A0x9129419ca48edd7!2sRAB+Headquarters!5e0!3m2!1sen!2sbd!4v1563263304675!5m2!1sen!2sbd" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
    <!-- End Police Activities Section -->
</main>
<!-- End #main -->

<?php
include '_footer.php';
?>


</body>

</html>