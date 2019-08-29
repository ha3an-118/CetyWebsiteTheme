<?php

/**
 * Template Name: Order
 */

require_once(get_template_directory() . '/Templates/Header/DefaultHeader.php');
?>


<!-- body part-->
<main class="img-wave">
    <div class="col-lg-8 container mx-auto px-3 px-lg-0 mt-5 pb-6">

        <div class="space-100"></div> <!-- this is for spacing -->

        <!-- breadcrumb nav  -->
        <!-- <nav>
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item fa-08x"><a href="./Home.html"><span class="text-gray-cety hover-text-purple-cety focus-text-purple-cety">خانه</span></a>
                </li>
                <li class="breadcrumb-item active fa-08x" aria-current="page"><span>سفارش طراحی سایت</span></li>
            </ol>
        </nav> -->
        <!-- endbreadcrumb nav -->

        <div class="space-20"></div> <!-- this is for spacing -->

        <!-- form section -->
        <section>

            <!-- title of this section -->
            <div class="row">
                <i class="fa fa-clipboard-list fa-15x pl-2"></i><!-- list icon -->
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
                        <div class="col-5 col-md-4 col-lg-3 form-group text-right">
                            <label class="fa-08x px-1 placeholder-lbl" for="name">نام</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2 pl-4" id="name" aria-describedby="name" onfocus="input_focus(this)" onfocusout="input_focusout(this)"><!-- name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                        </div>
                        <!-- end name part -->

                        <!-- last name part -->
                        <div class="col-6 col-md-4 col-lg-3 form-group text-right">
                            <label class="fa-08x px-1 placeholder-lbl" for="lastname">نام خانواگی</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2 pl-4" id="lastname" aria-describedby="lastname" onfocus="input_focus(this)" onfocusout="input_focusout(this)"><!-- last name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                        </div>
                        <!-- end last name part -->
                    </div>
                    <!-- end name and last name -->

                    <small id="" class="form-text text-danger-cety text-right pt-3">
                        وارد کردن نام و نام خانوادگی
                        ضروری
                        است</small>


                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- phone number and email -->
                    <div class="form-row justify-content-around">

                        <!-- phone number part -->
                        <div class="col-4 col-md-4 col-lg-3 form-group text-right">
                            <label class="fa-08x px-1 placeholder-lbl" for="phonenumber">شماره تماس</label>
                            <input type="number" class="form-control shadow text-dark-cety p-2 pl-4" id="phonenumber" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- phone number input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                        </div>
                        <!-- end phone number part -->

                        <!-- email part -->
                        <div class="col-6 col-md-4 col-lg-3 form-group text-right" dir="ltr">
                            <label class="fa-08x px-1 placeholder-lbl" for="email">ایمیل</label>
                            <input type="email" class="form-control shadow text-left text-dark-cety p-2 pl-4" id="email" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- email input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                        </div>
                        <!-- end email part -->

                    </div>
                    <!-- end phone number and email -->

                    <small id="" class="form-text text-danger-cety text-right pt-3">وارد کردن شماره تماس و ایمیل
                        ضروری
                        است</small>

                    <!-- the jobs name and subject -->
                    <div class="form-row justify-content-around align-items-end">
                        <div class="col-6 col-md-4 col-lg-3 form-group text-right">
                            <label class="fa-08x px-1 placeholder-lbl" for="jobsname">عنوان کسب و کار</label>
                            <input type="text" class="form-control shadow text-dark-cety p-2 pl-4" id="jobsname" aria-describedby="emailHelp" onfocus="input_focus(this)" onfocusout="input_focusout(this)">
                            <!-- jobs name input -->
                            <button name="clearbtn" type="button" onclick="clear_input(this)" class="d-none border-0 bg-transparent clear-btn">
                                <i class="fa fa-times-circle text-gray-cety"></i>
                            </button>
                            <!--clear btn-->
                        </div>

                        <!-- job subject  -->
                        <div class="col-4 col-md-4 col-lg-3 form-group text-right">
                            <label class="pr-2 fa-08x" for="websitesubject">نوع وبسایت</label>
                            <div class="input-group" dir="ltr">
                                <select class="custom-select shadow pl-2" id="websitesubject">
                                    <option selected>ورزشی</option>
                                    <option value="1">فروشگاهی</option>
                                    <option value="2">خدماتی</option>
                                    <option value="3">نمایشگاهی</option>
                                </select>
                            </div><!-- website subject input -->
                        </div>
                        <!-- end job subject  -->
                    </div>
                    <!-- end jobs name and subject -->

                    <small id="" class="form-text text-danger-cety text-right pt-3">وارد عنوان کسب و کار
                        ضروری
                        است</small>

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- website address -->
                    <div class="form-row justify-content-around">
                        <div class="col-8 col-md-4 col-lg-3 form-group text-right">
                            <label class="pr-2 fa-08x" for="website">آدرس وبسایت</label>
                            <div class="input-group shadow" dir="ltr">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-1">www.</span><!-- place holder -->
                                </div>
                                <input type="text" class="form-control text-dark-cety  p-2" id="website" aria-describedby="emailHelp" placeholder="example.com">
                                <!-- website input -->
                            </div>
                        </div>
                    </div>
                    <!-- end website address -->

                    <small id="" class="form-text text-danger-cety text-center pt-3">وارد کردن آدرس وبسایت ضروری
                        است</small>

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <!-- description -->
                    <div class="form-row justify-content-around">
                        <div class="col-11 col-md-10 col-lg-9 form-group text-right">
                            <div class="form-group">
                                <label class="pr-2 fa-08x" for="description">توضیحات</label>
                                <textarea class="form-control shadow text-dark-cety p-2" id="description" rows="3" placeholder="توضیحات وبسایت من..."></textarea>
                                <!-- description input -->
                            </div>
                        </div>
                    </div>
                    <!-- end description -->

                    <div class="space-20"></div> <!-- this is for spacing -->

                    <button type="submit" class="btn rounded shadow bg-purple-cety text-white-cety hover-bg-light-purple-cety focus-bg-light-purple-cety">
                        تایید
                    </button><!-- sibmit btn -->
                </form>
            </div>
            <!-- end form body -->

        </section>
        <!-- end form section -->

    </div>
</main>
<!-- end body part-->


<?php
require_once(get_template_directory() . '/Templates/Footer/DefaultFooter.php');
?>