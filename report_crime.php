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
                    <h1>রিপোর্ট ক্রাইম</h1>
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
                <div class="col-12">
                    <div class="section-title">
                        <p class='text-white'>রিপোর্ট ক্রাইম</p>
                        <div class="title-shape mb-3"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                        <div class="table-responsive">
                            <table class="table table-bordered Projects-list-table">
                                <thead class="table-dark-color">
                                <tr>

                                    <th class='text-center text-white' scope="col">র‌্যাব - ১৪ (কন্ট্রোল)</th>
                                    <th class='text-center text-white' scope="col">কোম্পানী কমান্ডার (জামালপুর ক্যাম্প)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td class='text-center'>
                                        <a class='' href="#">০১৭৭৭৭১১৪৯৯</a>
                                    </td>
                                    <td class='text-center'><a class='' href="#">০১৭৭৭৭১১৪১১</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="contact-address">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>
                <span>আপনার তথ্য গোপন রাখা হবে</span>
              </h2>
                        <p class='text-white'>বিস্তারিত তথ্য দিন</p>
                        <div class="title-shape mb-3"></div>
                    </div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="">

                                <div class="">
                                    <div class="new-user-info">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class='text-white mb-1'>আপনার নাম (অপশনাল):</label>
                                                <input id="name" placeholder='আপনার নাম (অপশনাল)' type="text"
                                                       class="form-control"
                                                       value="" name="name" autocomplete="new-name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class='text-white mb-1' for="phone">মোবাইল নম্বর (অপশনাল):</label>
                                                <input placeholder='মোবাইল নম্বর' required id="phone" type="text"
                                                       class="form-control"
                                                       value="" name="phone" autocomplete="new-phone">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class='text-white mb-1' for="email">আপনার ইমেইল (অপশনাল):</label>
                                                <input placeholder='আপনার ইমেইল' required id="email" type="email"
                                                       class="form-control"
                                                       value="" name="email" autocomplete="new-email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class='text-white mb-1' for="crime_id">অপরাধের ধরণ: <strong
                                                            class="text-danger">*</strong></label>
                                                <select class="form-control" name="crime_id" id="crime_id">
                                                    <option value="" selected disabled>অপরাধের ধরণ নির্বাচন করুন
                                                    </option>
                                                    <option value="10">অস্ত্র ও বিস্ফোরক দ্রব্য</option>
                                                    <option value="9">মাদক</option>
                                                    <option value="8">অপহরন</option>
                                                    <option value="7">জঙ্গীবাদ</option>
                                                    <option value="6">খুন</option>
                                                    <option value="5">চোরাচালান</option>
                                                    <option value="4">ডাকাতি</option>
                                                    <option value="3">সন্ত্রাসবাদ</option>
                                                    <option value="-1">অন্যান্য</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class='text-white mb-1' for="district_id">জেলা : <strong
                                                            class="text-danger">*</strong></label>
                                                <select class="form-control" name="district_id" id="district_id">
                                                    <option value="" selected disabled>জেলা নির্বাচন করুন</option>
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

                                            <div class="mb-3 col-md-6">
                                                <label class='text-white mb-1' for="thana_id">থানা: <strong
                                                            class="text-danger">*</strong></label>
                                                <select id="thana_id" name="thana_id" class="form-control">
                                                    <option value="" selected disabled>থানা নির্বাচন করুন</option>
                                                    <option value="220">আড়াইহাজার</option>
                                                    <option value="221">সোনারগাঁও</option>
                                                    <option value="222">বন্দর</option>
                                                    <option value="223">নারায়ানগঞ্জ সদর</option>
                                                    <option value="224">রূপগঞ্জ</option>
                                                    <option value="225">সিদ্ধিরগঞ্জ</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class='text-white mb-1' for="head_message"> আপনার অভিযোগ বিস্তারিত লিখুন: <strong
                                                            class="text-danger">*</strong></label>
                                                <textarea placeholder='আপনার অভিযোগ বিস্তারিত লিখুন' name="head_message" id="head_message" rows="5"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <label class='text-white mb-1'> ছবি/ভিডিও সংযুক্ত করুন (যদি থাকে): <strong class="text-danger"> <small>(File
                                                        must be jpg, jpeg, png, gif, mp4, 3gp or wmv.)</small></strong></label>

                                            <div class="mb-3">
                                                <div class="">

                                                    <input class="file-upload text-white" name="image" type="file"
                                                           data-allowed-file-extensions="jpg jpeg png">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary-contact rounded-1 fw-bold">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="18" height="18">
                                                    <path
                                                            d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"
                                                            fill="rgba(255,255,255,1)"></path>
                                                </svg>
                                                পাঠিয়ে দিন
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>


            </div>
        </div>
    </section>
    <!-- End Police Activities Section -->
</main>
<!-- End #main -->

<?php
include '_footer.php';
?>


</body>

</html>