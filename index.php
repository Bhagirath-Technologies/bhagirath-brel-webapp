<?php include 'header.php'?>
<section>
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
          <a href="Solar Calculater.php">
            <i class="fa-solid fa-calculator"></i>
            <span>Solar Calculator</span>
          </a>
        </li>
      </ul>
    </div>
 <div class="slider-overlow" >
  <section class="carousel-section carousel">
    <div id="carouselExampleDark" class="carousel slide carousel--element" data-bs-ride="carousel"
      style="overflow-x: hidden ">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class=" carousel-item active" data-bs-interval="3000">
          <div class="bg_img_1 bg_style" loading="lazy"></div>
          <div id="carousel_title"
            class="carousel-caption1 sm_device_title animate__animated nimated animate__backInUp">
            <h1>Welcome to BREL Solar</h1>
            <p class="carousel_description">More energy from the sun falls on the earth in one hour than is used by
              everyone in the world in one year. A variety of technologies. we can say that it is the most efficient and
              infinite form of energy.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <div class="bg_img_2 bg_style" loading="lazy"></div>
          <div id="carousel_title" class="carousel-caption1 sm_device_title animate__animated animate__backInUp">
            <h1>Join the Solar Revolution</h1>
            <p class="carousel_description"> Without losing sight of the aesthetic aspect of it, we always look for an
              optimized design according to the function that it has to fulfill. heat water, solar cooling, and a
              variety of other commercial and industrial uses.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <div class="bg_img_3 bg_style" loading="lazy"></div>
          <div id="carousel_title"
            class="carousel-caption1 sm_device_title animate__animated nimated animate__backInUp">
            <h1>Sustainable-Simple-Solar</h1>
            <p class="carousel_description">The technology used in solar panels and advances in this regard offer us
              alternatives that seek improvements in efficiency.Solar energy is the power from the sun. It is a vast,
              inexhaustible, and clean resource.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>

  <section class="consulting-element slide">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <div class="consulting-image">
            <img src="./assets/img/bg-images/home/hero-section/consulting-image.webp" alt="" srcset=""
              class="img-fluid">
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="consulting-registration">
            <form id="conversionForm">
              <h4 class="text-center">Get A Free Solar Consultation Now!</h4>
              <br />
              <div class="form-group" style="margin-bottom: 20px">
                <input type="text" placeholder="Full Name" class="form-control mx-auto" id="nameInput" required
                  style="width: 100%" ; />
              </div>
              <div class="form-group" style="margin-bottom: 20px">
                <input type="tel" placeholder="Phone Number" class="form-control mx-auto" id="phoneInput" required
                  style="width:100%" ; />
              </div>
              <div class="form-group" style="margin-bottom: 20px">
                <input type="email" placeholder="Email" class="form-control mx-auto" id="emailInput" required
                  style="width: 100%" ; />
              </div>
              <div class="form-group" style="margin-bottom: 20px">
                <input type="text" placeholder="City" class="form-control mx-auto" id="cityInput" required
                  style="width: 100%" ; />
              </div>
              <div class="text-center button-sets">
                <button type="button" class="bg_background bg btn btn-lg " data-toggle="modal"
                  data-target="#resultModal">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="container" data-aos="zoom-in">

      <div class="row gy-4">
        <div class="col-xl-3 col-md-6 d-flex">
          <div class="service-item position-relative">
            <img src="./assets/img/icons/solar-panel.webp" alt="">
            <h4><a href="" class="stretched-link">Solar plate</a></h4>
            <p>Harness the sun's power for a brighter, energy-efficient tomorrow.</p>
            <a class="link_style">ReadMore
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex">
          <div class="service-item position-relative">
            <img src="./assets/img/icons/heater.webp" alt="">
            <h4><a href="" class="stretched-link">Solar Water Heater</a></h4>
            <p>Energy collecting of sun's power of high reliable energy high connect.</p>
            <a class="link_style">ReadMore
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>



        <div class="col-xl-3 col-md-6 d-flex">
          <div class="service-item position-relative">
            <img src="./assets/img/icons/solar-house.webp" alt="">
            <h4><a href="" class="stretched-link">PV Solar Panel</a></h4>
            <p> Embrace clean energy with high-performance solar panels tailored for your needs.</p>
            <a class="link_style">ReadMore
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex">
          <div class="service-item position-relative">
            <img src="./assets/img/icons/solar-energy.webp" alt="">
            <h4><a href="" class="stretched-link">Solar Wind</a></h4>
            <p>Unleash the combined power of solar and wind energy for a cleaner environment.Relable</p>
            <a class="link_style">ReadMore
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="text_content">
    <h3 class="text-center mt-5 mb-5 heading_section">Why Choose Solar</h3>
  </div>
  </section>

  <section class="element-widget">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-xl-3 col-md-6">
          <div class="element-icons-set">
            <i class="fa-regular fa-file-lines"></i>
          </div>
          <div class="element-tiltes mb-4">
            Cost-Efficiency
          </div>
          <div class="element-paragraph">
            <p>Save money on electricity bills with solar energy, offering significant long-term savings.
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 element-top-section">
          <div class="element-icons-set">
            <i class="fa-solid fa-handshake"></i>
          </div>
          <div class="element-tiltes mb-4">
            Eco-Friendly
          </div>
          <div class="element-paragraph">
            <p> Reduce your carbon footprint by using clean, renewable energy from the sun, contributing to a greener
              planet</p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 set-adjacement main-top ">
          <div class="element-icons-set">
            <i class="fa-solid fa-screwdriver-wrench"></i>
          </div>
          <div class="element-tiltes mb-4">
            Energy Independence
          </div>
          <div class="element-paragraph">
            <p>Gain more control over your power supply by relying on solar energy, decreasing dependence on traditional
              sources.</p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 element-top-section set-adjacement main-element-top">
          <div class="element-icons-set">
            <i class="fa-solid fa-bolt-lightning"></i>
          </div>
          <div class="element-tiltes mb-4 ">
            Low Maintenance, High Reliability
          </div>
          <div class="element-paragraph ">
            <p> Solar panels require minimal upkeep while providing reliable electricity for years to come.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="text_content test-up">
    <h3 class="text-center mt-5 heading_section">Our Services</h3>
  </div>
  </section>

  <section id="about">

    <div class="container mt-5" data-aos="fade-up">
      <header class="section-header">
      </header>

      <div class="row about-cols">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_images_1.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-grid-3x3"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p>
              Custom Solar Solutions: Tailored solar plant installations for homes, businesses, and communities.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_images_2.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-lightbulb"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p>Efficiency & Savings: Providing energy-efficient solar systems to significantly reduce electricity bills
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_images_3.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-sun-fill"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>
              Professional Installation: Expert installation by our skilled technicians for seamless, reliable setups
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_images_4.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-grid-3x3"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p>
              Ongoing Support: Continuous assistance and maintenance to ensure optimal performance of solar plants.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_images_5.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-lightbulb"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p>
              Educational Guidance: Offering knowledge and guidance throughout the transition to renewable energy.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="./assets/img/bg-images/home/Our services/solar_imges_6.webp" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-sun-fill"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>
              Environmental Impact: Contributing to a greener future by reducing carbon footprints through solar energy
              adoption.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="text_content">
    <h3 class="text-center mt-5 heading_section">Why Choose Us</h3>
  </div>

  <div class="hero_img2 bg_img7 mt-5">
    <div class="choose-heading" data-aos="fade-down">
      <h2>Live Green,Love Green,Think Green</h3>
        <p>Embrace a green lifestyle - Live Green, Love Green, Think Green, and together, let's save electricity with
          solar power</p>
    </div>
  </div>
  <div class="container">
    <div class="slider-show">
      <div class="row">
        <div class="col-lg-3 col-md-6 z-1">
          <div class="card card-element1" data-aos="fade-right" data-aos-duration="600">
            <div class="card-body element-icon">
              <i class="fa-solid fa-helmet-safety"></i>
              <h5 class="card-title text-center ">Expertise in Renewable</h5>
              <p class="card-text p-1 card-justify" style="text-align: center;"> BREL brings extensive experience and
                expertise in delivering
                customised solar
                solutions tailored to your specific needs..</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 z-1">
          <div class="card card-element1" data-aos="fade-right" data-aos-duration="600">
            <div class="card-body element-icon background-color-element">
              <i class="fa-regular fa-lightbulb"></i>
              <h5 class="card-title text-center">Quality and Affordability</h5>
              <p class="card-text p-1 card-justify" style="text-align: center;"> Our commitment to top-quality products
                and cost-effective solutions
                ensures you
                get the best value for your investment.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 z-1">
          <div class="card card-element1" data-aos="fade-left" data-aos-duration="600">
            <div class="card-body element-icon">
              <i class="fa-solid fa-layer-group"></i>
              <h5 class="card-title text-center">Customer Approach</h5>
              <p class="card-text p-1" style="text-align: center;">We prioritise our customers, offering seamless
                experiences and personalised
                support from inquiry to installation and beyond. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 z-1">
          <div class="card card-element1" data-aos="fade-left" data-aos-duration="600">
            <div class="card-body element-icon background-color-element">
              <i class="fa-brands fa-canadian-maple-leaf"></i>
              <h5 class="card-title text-center">Environmental Impact</h5>
              <p class="card-text p-1" style="text-align: center">By choosing BREL, you contribute to a greener future,
                reducing your carbon
                footprint and embracing sustainable energy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
  <div class="text_content ">
    <h3 class="text-center heading_section text-top">Our Client</h3>
  </div>
  <section>
    <div class="slider-area mt-5" data-aos="fade-up" data-aos-delay="100">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item carousel-top active">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img_1.webp" alt="">
            </div>
            <div class="carousel-caption carousel_caption ">
              <h3>Amit Kumar</h3>
              <h4>Co-Founder xyz</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum ab dicta amet in quidem officia
                tenetur
                laborum unde quibusdam.</p>
            </div>
          </div>
          <div class="carousel-item carousel-top">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img-2.webp" alt="" class="user">
            </div>
            <div class="carousel-caption carousel_caption">
              <h3>Vikash Rathore</h3>
              <h4>Senior Manager xyz</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum ab dicta amet in quidem officia
                tenetur
                laborum unde quibusdam.</p>
            </div>
          </div>
          <div class="carousel-item carousel-top">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img-3.webp" alt="" class="user">
            </div>
            <div class="carousel-caption carousel_caption">
              <h3>Rita Rathore</h3>
              <h4>Co-Founder xyz</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cum ab dicta amet in quidem officia
                tenetur
                laborum unde quibusdam.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev carousel_control" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel_control" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>


 <?php include 'footer.php'?>