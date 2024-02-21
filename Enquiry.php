<?php include 'header.php'?> 

 <div class="overflow-x-hidden">
    <section class="flex-column d-block ">
        <div class="hero_img bg_img8">
            <h2 class="breadcrums_title ms-4">Enquiry</h2>
            <div class="d-flex align-items-center justify-content-center ms-4 mb breadcrumb-section">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb_icons"><i class="bi bi-chevron-right"></i></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Enquiry</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="icons-social">
        <ul class="list-icons">
            <li>
                <a href="Enquiry.php">
                    <i class="fa-regular fa-circle-question"></i>
                    <span>Enquiry</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-envelope-circle-check"></i>
                    <span>www.brel.com</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-headset"></i>
                    <span>Service Support</span>
                </a>
            </li>
            <li>
                <a href="Solar Calculater.php  ">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Solar Calculator</span>
                </a>
            </li>
        </ul>
    </div>

    <SECtion class="title-wrap mt-5">
        <div class="container">
            <div class="title-text">
                <h4>Hello There!</h4>
                <h2>You are just a step away from going solar. Please help us with the below details and our team shall
                    getting touch with you shortly.</h2>
            </div>

        </div>
    </SECtion>
    <section>
        <form>
            <div class="container">
                <div class="form-inner">
                    <div class="form-row row">
                        <div class="col-xl-6">
                            <div class="form-col">
                                <div class="form-inner-row row">
                                    <div class="form-innner-col reval-fade col-md-6" style="opacity: 1;">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Name">
                                            <span class="icon-wrap">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-innner-col reval-fade col-md-6" style="opacity: 1;">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="Email">
                                            <span class="icon-wrap">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-innner-col reval-fade col-md-6" style="opacity: 1;">
                                        <div class="form-group">
                                            <input type="number" name="mobileNumber" id="MobileNumber"
                                                placeholder="Contact Number">
                                            <span class="icon-wrap">
                                                <i class="fa fa-mobile-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-innner-col reval-fade col-md-6" style="opacity: 1;">
                                        <div class="form-group">
                                            <input type="text" name="city" id="city" placeholder="City">
                                            <span class="icon-wrap">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-innner-col reval-fade col-md-12" style="opacity: 1;">
                                        <div class="form-group">
                                            <div class="custom-dropdown-wrapper reveal fade" style="opacity: 1;">
                                                <select name="" id="">
                                                    <option value="">Select Reason For Contact</option>
                                                    <option value="">FeedBack</option>
                                                    <option value="">Enquiry</option>
                                                    <option value="">Complaint</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="col-md-12" style="opacity: 1;">
                                <div class="form-group">
                                    <textarea placeholder="Message" style="height:270px;"></textarea>
                                    <span class="icon-wrap" style="margin-top: -115px;">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap text-center reveal-fade col-md-12" style="opacity: 1;">
                <div class="submit-group">
                    <input type="Submit" class="button-style" value="Send Enquiry">
                </div>
            </div>
            </div>
        </form>
    </section>
</div>
 <?php include 'footer.php'?>