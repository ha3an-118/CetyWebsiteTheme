<?php

/**
 * Template Name: Order
 */

get_header();
?>

<!-- body part-->
<main class="img-wave">
    <div class="col-lg-8 container mx-auto px-3 px-lg-0 mt-5 pb-6">

        <div class="space-100"></div> <!-- this is for spacing -->

        <!-- form section -->
        <section>

            <!-- title of this section -->
            <div class="row">
                <i class="fa fa-clipboard-list fa-15x pr-2"></i><!-- list icon -->
                <h4 class="text-center">فرم سفارش طراحی سایت</h4><!-- the title -->
            </div>
            <!-- end title of this section -->

            <div class="space-20"></div> <!-- this is for spacing -->

            <!-- the fotm body -->
            <div>
                <form>

                    <!-- name and last name -->
                    <div class="form-row justify-content-around">

                        <!-- name part -->
                        <div class="col-5 col-md-4 col-lg-3 form-group text-left">
                            <label class="fa-08x px-1 placeholder-lbl" for="name">نام</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2" id="name" aria-describedby="name" onfocus="input_focus(this)" onfocusout="input_focusout(this)"><!-- name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                            <div class="valid-feedback">وارد کردن نام ضروری است</div> <!-- feedback msg -->
                        </div>
                        <!-- end name part -->

                        <!-- last name part -->
                        <div class="col-6 col-md-4 col-lg-3 form-group text-left">
                            <label class="fa-08x px-1 placeholder-lbl" for="lastname">نام خانواگی</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2" id="lastname" aria-describedby="lastname" onfocus="input_focus(this)" onfocusout="input_focusout(this)"><!-- last name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                            <div class="invalid-feedback">وارد کردن نام خانوادگی ضروری است</div>
									<!-- feedback msg -->
                        </div>
                        <!-- end last name part -->
                    </div>
                    <!-- end name and last name -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- phone number and email -->
                    <div class="form-row justify-content-around">

                        <!-- phone number part -->
                        <div class="col-4 col-md-4 col-lg-3 form-group text-left">
                            <label class="fa-08x px-1 placeholder-lbl" for="phonenumber">شماره تماس</label>
                            <input type="number" class="form-control shadow text-dark-cety text-center p-2" id="phonenumber" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- phone number input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                            <div class="invalid-feedback">وارد کردن شماره تماس ضروری است</div>
									<!-- feedback msg -->
                        </div>
                        <!-- end phone number part -->

                        <!-- email part -->
                        <div class="col-6 col-md-4 col-lg-3 form-group text-left">
                            <label class="fa-08x px-1 placeholder-lbl" for="email">ایمیل</label>
                            <input style="direction: ltr !important;padding-left:25px !important" type="email" class="form-control shadow text-right text-dark-cety p-2" id="email" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- email input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                            <div class="invalid-feedback">وارد کردن ایمیل ضروری است</div> <!-- feedback msg -->
                        </div>
                        <!-- end email part -->

                    </div>
                    <!-- end phone number and email -->

                    <!-- the jobs name and subject -->
                    <div class="form-row justify-content-around align-items-center mt-md-3">
                        <div class="col-6 col-md-4 col-lg-3 form-group mt-5 mt-sm-4 text-left">
                            <label class="fa-08x px-1 placeholder-lbl" for="jobsname">عنوان کسب و کار</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2" id="jobsname" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- jobs name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                            <div class="invalid-feedback">وارد کردن عنوان کسب و کار ضروری است</div>
									<!-- feedback msg -->
                        </div>

                        <!-- job subject  -->
                        <div class="col-4 col-md-4 col-lg-3 form-group text-left">
                            <label class="pl-2 fa-08x" for="websitesubject">نوع وبسایت</label>
                            <div class="input-group">
                                <select style="text-align: left" class="custom-select shadow pr-2" id="websitesubject">
                                    <option selected>ورزشی</option>
                                    <option value="1">فروشگاهی</option>
                                    <option value="2">خدماتی</option>
                                    <option value="3">نمایشگاهی</option>
                                </select>
                            </div><!-- website subject input -->
                            <div class="invisible">.</div>
                        </div>
                        <!-- end job subject  -->
                    </div>
                    <!-- end jobs name and subject -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- website address -->
                    <div class="form-row justify-content-around">
                        <div class="col-8 col-md-4 col-lg-3 form-group text-left">
                            <label class="pl-2 fa-08x" for="website">آدرس وبسایت</label>
                            <div class="input-group shadow" style="direction: ltr !important">
                                <div class="input-group-prepend">
                                    <span style="direction: ltr !important" class="input-group-text px-1">www.</span><!-- place holder -->
                                </div>
                                <input style="direction: ltr !important" type="text" class="form-control text-dark-cety  p-2" id="website" aria-describedby="emailHelp" placeholder="example.com">
                                <!-- website input -->
                            </div>
                            <div class="invalid-feedback">وارد کردن آدرس وبسایت ضروری است</div>
									<!-- feedback msg -->
                        </div>
                    </div>
                    <!-- end website address -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- description -->
                    <div class="form-row justify-content-around">
                        <div class="col-11 col-md-10 col-lg-9 form-group text-left">
                            <div class="form-group">
                                <label class="pl-2 fa-08x" for="description">توضیحات</label>
                                <textarea class="form-control shadow text-dark-cety p-2" id="description" rows="3" placeholder="توضیحات وبسایت من..."></textarea>
                                <!-- description input -->
                            </div>
                        </div>
                    </div>
                    <!-- end description -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <div class="col-11 col-md-10 col-lg-9 mx-auto mt-4">
								<button type="submit"
									class="btn rounded shadow bg-purple-cety text-white-cety hover-bg-light-purple-cety focus-bg-light-purple-cety">
									تایید
								</button>
							</div><!-- sibmit btn -->
                </form>
            </div>
            <!-- end form body -->

        </section>
        <!-- end form section -->

    </div>
</main>
<!-- end body part-->



<?php
get_footer();
