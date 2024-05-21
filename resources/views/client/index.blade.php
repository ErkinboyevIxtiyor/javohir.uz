@extends('layouts.client')

@section('title' , 'Bosh sahifa')

@section('content')

      <section id="home" class="text-white bg-hero-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-12">
              <h1>Foto va video suratga olish ishlarini olib borish uchin online platforma</h1>
              <p class="short-bio">
                I'm a Freelance UI/UX Designer and Product Desiger based in
                London, England. I strives to build immersive and beautiful web
                applications through carefully crafted code and user-centric
                design.
              </p>
              <a href="#contact" class="cf-btn"> Buyurtma berish </a>
              <div class="counter d-flex align-center content-space-between">
                <div class="experence">
                  <h2><span class="count">7</span>+</h2>
                  <p class="font-20px">Year Exprence</p>
                </div>
                <div class="project">
                  <h2><span class="count">300</span>+</h2>
                  <p class="font-20px">Complete Project</p>
                </div>
                <div class="clients">
                  <h2><span class="count">135</span>+</h2>
                  <p class="font-20px">Heppy Client</p>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="hero-right">
                <div class="hero-right-bg"></div>
                <img src="{{asset("client/assets/images/author/hero.png")}}" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="extra-bg"></div>
      </section>
      <section id="services">
        <div class="container">
          <div class="section-title">
            <p class="sub-title">Bizning xizmatlar</p>
            <h2>
              Nima qilamiz <br />
              Bizning mijozlar uchun
            </h2>
          </div>
          <div class="card-container">
            <div class="row">
              <div class="col-md-6 col-xl-4">
                <div class="service-card">
                  <div class="icon-container">
                    <img src="{{asset("client/assets/icons/uiux.svg")}}" class="svg" alt="" />
                  </div>
                  <h3>Dizaynerlik xizmati</h3>
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </p>
                  <a href="#services_1" class="link"></a>
                </div>

                <div class="mfp-fade mfp-hide" id="services_1">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("client/assets/images/services/1.jpg")}}" alt="" />
                    </div>
                    <div class="des">
                      <h4>UI/UX Designer</h4>
                      <p class="price">Start from <span>$99</span></p>
                      <p>
                        We live in a world where we need to move quickly and
                        iterate on our ideas as flexibly as possible. Building
                        mockups strikes the ideal balance between true-life
                        representation of the end product and ease of
                        modification.
                      </p>
                      <p>
                        Mockups are useful both for the creative phase of the
                        project - for instance when you're trying to figure out
                        your user flows or the proper visual hierarchy - and the
                        production phase when they will represent the target
                        product. Making mockups a part of your creative and
                        development process allows you to quickly and easily
                        ideate.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="service-card">
                  <div class="icon-container">
                    <img src="{{asset("client/assets/icons/web_dev.svg")}}" class="svg" alt="" />
                  </div>
                  <h3>Montaj xizmati</h3>
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </p>
                  <a href="#services_2" class="link"></a>

                  <div class="mfp-fade mfp-hide" id="services_2">
                    <div class="content">
                      <div class="img">
                        <img src="./assets/images/services/2.jpg" alt="" />
                      </div>
                      <div class="des">
                        <h4>Webflow Developer</h4>
                        <p class="price">Start from <span>$99</span></p>
                        <p>
                          We live in a world where we need to move quickly and
                          iterate on our ideas as flexibly as possible. Building
                          mockups strikes the ideal balance between true-life
                          representation of the end product and ease of
                          modification.
                        </p>
                        <p>
                          Mockups are useful both for the creative phase of the
                          project - for instance when you're trying to figure out
                          your user flows or the proper visual hierarchy - and the
                          production phase when they will represent the target
                          product. Making mockups a part of your creative and
                          development process allows you to quickly and easily
                          ideate.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="service-card">
                  <div class="icon-container">
                    <img
                      src="{{asset("client/assets/icons/product_desginer.svg")}}"
                      class="svg"
                      alt=""
                    />
                  </div>
                  <h3>Mahsulot dizayneri</h3>
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </p>
                  <a href="#services_3" class="link"></a>

                  <div class="mfp-fade mfp-hide" id="services_3">
                    <div class="content">
                      <div class="img">
                        <img src="{{asset("client/assets/images/services/3.jpg")}}" alt="" />
                      </div>
                      <div class="des">
                        <h4>Product Designer</h4>
                        <p class="price">Start from <span>$99</span></p>
                        <p>
                          We live in a world where we need to move quickly and
                          iterate on our ideas as flexibly as possible. Building
                          mockups strikes the ideal balance between true-life
                          representation of the end product and ease of
                          modification.
                        </p>
                        <p>
                          Mockups are useful both for the creative phase of the
                          project - for instance when you're trying to figure out
                          your user flows or the proper visual hierarchy - and the
                          production phase when they will represent the target
                          product. Making mockups a part of your creative and
                          development process allows you to quickly and easily
                          ideate.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5">
              <div class="author-image-container">
                <div class="image-bg moving-effect"></div>
                <div class="image-area">
                  <img src="{{asset("client/assets/images/author/about.png")}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7">
              <div class="section-title left">
                <p class="sub-title">Biz haqimizda</p>
                <h2>Mukofotlangan dizayner</h2>
              </div>
              <p>
                In publishing and graphic design, Lorem ipsum is a placeholder
                text commonly used to demonstrate the visual form of a document or
                a typeface without . <br /><br />
                In publishing and graphic design, Lorem ipsum is a placeholder .In
                publishing and graphic design, Lorem ipsum is a placeholder .
              </p>
              <div class="d-flex align-center btn-container">
                <a href="#" class="cf-btn">Read More</a>
                <div class="d-flex watch-video align-center">
                  <a
                    href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
                    class="play-btn"
                    ><i class="fa-solid fa-circle-play"></i
                  ></a>
                  <p>Watch Video</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="portfolio">
        <div class="container">
          <div class="section-title">
            <p class="sub-title">My Portfolio</p>
            <h2>
              Showcasing <br />
              some of my best work
            </h2>
          </div>
          <div class="portfolio-container">
            <div class="filter-btn">
              <a href="#" class="active" data-filter="*">All</a>
              <a href="#" data-filter=".youtube">Youtube</a>
              <a href="#" data-filter=".vimeo">Vimeo</a>
              <a href="#" data-filter=".soundcloud">Soundcloud</a>
              <a href="#" data-filter=".popup">Images</a>
              <a href="#" data-filter=".details">Detail</a>
            </div>
            <div class="portfolio-items">
              <div class="item youtube">
                <a href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
                  ><img src="{{asset("client/assets/images/portfolio/1.png")}}" alt=""
                /></a>
              </div>
              <div class="item vimeo">
                <a href="https://vimeo.com/132528823"
                  ><img src="{{asset("client/assets/images/portfolio/2.png")}}" alt=""
                /></a>
              </div>
              <div class="item soundcloud">
                <a
                  href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F159967086&amp;show_artwork=true&amp;maxwidth=1020&amp;maxheight=1000&amp;auto_play=1"
                  ><img src="{{asset("client/assets/images/portfolio/3.png")}}" alt=""
                /></a>
              </div>
              <div class="item popup">
                <a href="{{asset("client/assets/images/portfolio/5.png")}}"
                  ><img src="{{asset("client/assets/images/portfolio/5.png")}}" alt=""
                /></a>
              </div>
              <div class="item details">
                <a href="#details-popup"
                  ><img src="{{asset("client/assets/images/portfolio/4.png")}}" alt=""
                /></a>
                <div class="mfp-fade mfp-hide" id="details-popup">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("client/assets/images/portfolio/4.png")}}" alt="" />
                    </div>
                    <div class="des">
                      <span>Details</span>
                      <h4>Mobile Application</h4>
                      <p>
                        We live in a world where we need to move quickly and
                        iterate on our ideas as flexibly as possible. Building
                        mockups strikes the ideal balance between true-life
                        representation of the end product and ease of
                        modification.
                      </p>
                      <p>
                        Mockups are useful both for the creative phase of the
                        project - for instance when you're trying to figure out
                        your user flows or the proper visual hierarchy - and the
                        production phase when they will represent the target
                        product. Making mockups a part of your creative and
                        development process allows you to quickly and easily
                        ideate.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item popup">
                <a href="{{asset("client/assets/images/portfolio/6.png")}}"
                  ><img src="{{asset("client/assets/images/portfolio/6.png")}}" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="testimonials">
        <div class="container">
          <div class="testimonials-top">
            <div class="section-title left">
              <p class="sub-title">Guvohlar</p>
              <h2>
                Mening mijozlarim <br>
                nima deyishadi
              </h2>
            </div>
            <div class="arrows">
              <a class="arrow arrow-left active">
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <a class="arrow arrow-right">
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
          </div>
          <div class="testimonial-sliders swiper">
            <div class="swiper-wrapper">
              <div class="slider-item swiper-slide">
                <div class="slider-item-content">
                  <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a
                    document or a typeface without relying on meaningful content.
                    Lorem ipsum may be used as a placeholder before final copy is
                    available.
                  </p>
                  <div class="author-info">
                    <div class="image-container">
                      <img src="{{asset("client/assets/images/testimonial/1.jpg")}}" alt="" />
                    </div>
                    <div class="author-info-content">
                      <h3>Beseie Cooper</h3>
                      <p class="complay-name">Xyz Company</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-item swiper-slide">
                <div class="slider-item-content">
                  <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a
                    document or a typeface without relying on meaningful content.
                    Lorem ipsum may be used as a placeholder before final copy is
                    available.
                  </p>
                  <div class="author-info">
                    <div class="image-container">
                      <img src="{{asset("client/assets/images/testimonial/2.jpg")}}" alt="" />
                    </div>
                    <div class="author-info-content">
                      <h3>Mike Anderson</h3>
                      <p class="complay-name">Vivaco Studio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div id="client">
        <div class="container">
          <div class="bg-primary client-container">
            <div class="swiper client-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#"
                    ><img src="{{asset("client/assets/images/colaborators/1.png")}}" alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a href="#"
                    ><img src="{{asset("client/assets/images/colaborators/2.png")}}" alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a href="#"
                    ><img src="{{asset("client/assets/images/colaborators/3.png")}}" alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a href="#"
                    ><img src="{{asset("client/assets/images/colaborators/4.png")}}" alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a href="#"
                    ><img src="{{asset("client/assets/images/colaborators/5.png")}}" alt=""
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="blog">
        <div class="container">
          <div class="section-title">
            <p class="sub-title">Bizning blogim</p>
            <h2>
                Bizning so'nggi yangilanishlarimiz, <br>
                blogimiz, maslahatlarimiz, fokuslarimiz va boshqalar
            </h2>
          </div>
          <div class="row blog-items">
            <div class="col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog-image-container">
                  <a href="#blog-popup-1"
                    ><img src="{{asset("client/assets/images/blog/1.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>UI/UX Design</span> / 23.06.2022</p>
                  <h4>
                    <a href="#blog-popup-1"
                      >User interface design or user interface engineering</a
                    >
                  </h4>
                  <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate .
                  </p>
                </div>
                <div id="blog-popup-1" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("client/assets/images/blog/2.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category">
                        <span>UI/UX Design</span> / 23.06.2022
                      </p>
                      <h4>User interface design or user interface engineering</h4>
                      <p>
                        We live in a world where we need to move quickly and
                        iterate on our ideas as flexibly as possible. Building
                        mockups strikes the ideal balance between true-life
                        representation of the end product and ease of
                        modification.
                      </p>
                      <p>
                        Mockups are useful both for the creative phase of the
                        project - for instance when you're trying to figure out
                        your user flows or the proper visual hierarchy - and the
                        production phase when they will represent the target
                        product. Making mockups a part of your creative and
                        development process allows you to quickly and easily
                        ideate.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog-image-container">
                  <a href="#blog-popup-2"
                    ><img src="{{asset("client/assets/images/blog/2.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>Web Design</span> / 23.01.2023</p>
                  <h4>
                    <a href="#blog-popup-2"
                      >Web design encompasses many different skills</a
                    >
                  </h4>
                  <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate .
                  </p>
                </div>
                <div id="blog-popup-2" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("client/assets/images/blog/2.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category"><span>Web Design</span> / 23.01.2023</p>
                      <h4>Web design encompasses many different skills5</h4>
                      <p>
                        We live in a world where we need to move quickly and
                        iterate on our ideas as flexibly as possible. Building
                        mockups strikes the ideal balance between true-life
                        representation of the end product and ease of
                        modification.
                      </p>
                      <p>
                        Mockups are useful both for the creative phase of the
                        project - for instance when you're trying to figure out
                        your user flows or the proper visual hierarchy - and the
                        production phase when they will represent the target
                        product. Making mockups a part of your creative and
                        development process allows you to quickly and easily
                        ideate.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog-image-container">
                  <a href="#blog-popup-3"
                    ><img src="{{asset("client/assets/images/blog/3.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>Web Development</span> / 23.02.2022</p>
                  <h4>
                    <a href="#blog-popup-3"
                      >Jim Morisson Says when the musics over turn off the
                      light</a
                    >
                  </h4>
                  <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate .
                  </p>
                </div>
                <div id="blog-popup-3" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("client/assets/images/blog/4.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category">
                        <span>Web Development</span> / 23.06.2022
                      </p>
                      <h4>
                        Jim Morisson Says when the musics over turn off the light
                      </h4>
                      <p>
                        We live in a world where we need to move quickly and
                        iterate on our ideas as flexibly as possible. Building
                        mockups strikes the ideal balance between true-life
                        representation of the end product and ease of
                        modification.
                      </p>
                      <p>
                        Mockups are useful both for the creative phase of the
                        project - for instance when you're trying to figure out
                        your user flows or the proper visual hierarchy - and the
                        production phase when they will represent the target
                        product. Making mockups a part of your creative and
                        development process allows you to quickly and easily
                        ideate.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <div class="container">
          <div class="row align-center">
            <div class="col-lg-6">
              <div class="section-title left">
                <p class="sub-title">Get in touch !</p>
                <h2>Contact us for a quote, help to join the team</h2>
              </div>
              <ul class="info-details">
                <li>
                  <h4>Mail</h4>
                  <p>example@gmail.com</p>
                </li>
                <li>
                  <h4>Address</h4>
                  <p>
                    1540 Brookside Drive <br />
                    Birmingham, Alabama, USA
                  </p>
                </li>
                <li>
                  <h4>Phone</h4>
                  <p>0123456789</p>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <form action="#" class="contact-form">
                <div class="form-group">
                  <input type="text" placeholder="Name" />
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Email" />
                </div>
                <div class="form-group">
                  <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="cf-btn">Send me message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

@endsection
