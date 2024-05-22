@extends('layouts.client')

@section('title' , 'Bosh sahifa')

@section('content')

      <section id="home" class="text-white bg-hero-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-12">
              <h1>Foto va video suratga olish platformasi</h1>
              <p class="short-bio">
                  Biz professional ijodiy fotografiya va videografiya yaratish xizmatlarini taqdim etamiz
              </p>
              <a href="{{route('login')}}" class="cf-btn"> Buyurtma berish </a>
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
                <img src="{{asset("images/hero-removebg-preview.png")}}" class="img-fluid" alt="" />
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
                  <h3>FOTOSURATSIYA</h3>
                  <p>
                      TO'Y FOTOGRAFI,
                      SEVGI HIKOYASI,
                      OILAVIY FOTOGRAFSIYA,
                      TUG'ILGAN KUN FOTOGRAFASI,
                      FOTOGRAFSIYA REKLAMA,
                      FOTOGRAFSIYA
                  </p>
                  <a href="#services_1" class="link"></a>
                </div>

                <div class="mfp-fade mfp-hide" id="services_1">
                  <div class="content">
{{--                    <div class="img">--}}
{{--                      <img src="{{asset("client/assets/images/services/1.jpg")}}" alt="" />--}}
{{--                    </div>--}}
                    <div class="des">
                      <h4>FOTOSURATSIYA</h4>
                      <p class="price"><span>$99</span> dan boshlab</p>
                      <p>
                          <b class="text-dark">TO‘Y FOTOGRAFI</b> <br>
                          To'y kuningizdagi eng yaxshi lahzalarni suratga olish.
                      </p>
                      <p>
                          <b class="text-dark">SEVGI HIKOYASI</b> <br>
                          Sevgi hikoyangizni suratlarda aks ettirish.
                      </p>
                        <p>
                            <b class="text-dark">OILAVIY FOTOGRAFIYA</b> <br>
                            Oila bilan quvonchli onlarni suratga olish.
                        </p>
                        <p>
                            <b class="text-dark">TUG‘ILGAN KUN FOTOGRAFASI</b> <br>
                            Tug‘ilgan kuningizni unutilmas suratlarga tushirish.
                        </p>
                        <p>
                            <b class="text-dark">FOTOGRAFSIYA REKLAMA</b> <br>
                            Mahsulot va xizmatlaringizni reklama qilish uchun suratga olish.
                        </p>
                        <p>
                            <b class="text-dark">FOTOGRAFSIYA</b> <br>
                            Boshqa har qanday suratga olish xizmatlari.
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
                  <h3 class="fst-uppercase">VIDEO SURATGA OLISH</h3>
                  <p>
                      TO'Y VIDEOGRAFIYASI,
                      SEVGI HIKOYASI VIDEOGRAFIYASI,
                      TUG'ILGAN KUNNI VIDEO SURATGA OLISH,
                      REKLAMA VIDEOSI,
                      KORPORATIV VIDEO SURATGA OLISH,
                      KO'P KAMERALI SURATGA OLISH
                  </p>
                  <a href="#services_2" class="link"></a>

                  <div class="mfp-fade mfp-hide" id="services_2">
                    <div class="content">
{{--                      <div class="img">--}}
{{--                        <img src="./assets/images/services/2.jpg" alt="" />--}}
{{--                      </div>--}}
                      <div class="des">
                        <h4>VIDEO SURATGA OLISH</h4>
                        <p class="price"><span>$99</span> dan boshlanadi</p>
                          <p>
                              <b class="text-dark">TO'Y VIDEOGRAFIYASI</b> <br>
                              To'y kuningizdagi eng go'zal lahzalarni video formatida abadiylashtirish. <br>
                          </p>

                          <p>
                              <b class="text-dark">SEVGI HIKOYASI VIDEOGRAFIYASI</b> <br>
                              Sevgi hikoyangizni film sifatida suratga olish. <br>
                          </p>

                          <p>
                              <b class="text-dark">TUG'ILGAN KUNNI VIDEO SURATGA OLISH</b> <br>
                              Tug'ilgan kuningizdagi eng yaxshi onlarni video shaklida saqlash. <br>
                          </p>

                          <p>
                              <b class="text-dark">REKLAMA VIDEOSI</b> <br>
                              Mahsulot va xizmatlaringizni reklama qilish uchun video yaratish. <br>
                          </p>

                          <p>
                              <b class="text-dark">KORPORATIV VIDEO SURATGA OLISH</b> <br>
                              Kompaniyangiz uchun korporativ tadbirlarni video formatida suratga olish. <br>
                          </p>

                          <p>
                              <b class="text-dark">KO'P KAMERALI SURATGA OLISH</b> <br>
                              Tadbir va loyihalar uchun ko'p kamerali video suratga olish xizmatlari. <br>
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
                  <h3>MANTAJ XIZMATI</h3>
                  <p>
                      RANGNI TUZATISH, PORTRET RETUCHI, MUALFIK, QAYTA QILISH, FOTO ALBOM
                  </p>
                  <a href="#services_3" class="link"></a>

                  <div class="mfp-fade mfp-hide" id="services_3">
                    <div class="content">
{{--                      <div class="img">--}}
{{--                        <img src="{{asset("client/assets/images/services/3.jpg")}}" alt="" />--}}
{{--                      </div>--}}
                      <div class="des">
                        <h4>MANTAJ XIZMATI</h4>
                        <p class="price"><span>$99</span> dan boshlab</p>
                          <p>
                              <b class="text-dark">RANGNI TUZATISH</b> <br>
                              Rasmlaringiz ranglarini mukammal qilish. <br>
                          </p>

                          <p>
                              <b class="text-dark">PORTRET RETUCHI</b> <br>
                              Portret fotosuratlaringizni professional tarzda retush qilish. <br>
                          </p>

                          <p>
                              <b class="text-dark">MUALLIFLIK</b> <br>
                              Tasvirlaringizga ijodiy va professional montaj qilish. <br>
                          </p>

                          <p>
                              <b class="text-dark">QAYTA QILISH</b> <br>
                              Eski yoki shikastlangan rasmlaringizni qayta tiklash. <br>
                          </p>

                          <p>
                              <b class="text-dark">FOTO ALBOM</b> <br>
                              Sizning rasmlaringizdan go'zal va unutilmas foto albom yaratish. <br>
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
                  <img src="{{asset("images/about.jpg")}}" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7">
              <div class="section-title left">
                <p class="sub-title">Biz haqimizda</p>
                <h2>Bizning jamoa</h2>
              </div>
                <p>
                    Biz, <b>MaxDev</b> jamoasi, professional suratga olish va videografiya xizmatlarini taqdim etamiz. To'y, sevgi hikoyasi, oilaviy fotosuratlar, reklama va korporativ videolarni yuqori sifatda suratga olamiz.
                    Bizning xizmatlarimiz orasida rangni tuzatish, portret retuchi, qayta tiklash va foto albom yaratish kabi mantaj xizmatlari ham bor. Biz mijozlarimizning eng muhim lahzalarini abadiylashtirish uchun xizmat ko'rsatamiz. <br>
                </p>
                <div class="d-flex align-center btn-container">
                <a href="#" class="cf-btn">BATAFSIL</a>
                <div class="d-flex watch-video align-center">
                  <a
                    href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
                    class="play-btn"
                    ><i class="fa-solid fa-circle-play"></i
                  ></a>
                  <p>Video</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="portfolio">
        <div class="container">
          <div class="section-title">
            <p class="sub-title">Bizning portfelimiz</p>
            <h2>
                Namoyish <br>
                eng yaxshi ishlarimizdan ba'zilari
            </h2>
          </div>
          <div class="portfolio-container">
            <div class="filter-btn">
              <a href="#" class="active" data-filter="*">Hammasi</a>
              <a href="#" data-filter=".youtube">Youtube</a>
              <a href="#" data-filter=".vimeo">Vimeo</a>
              <a href="#" data-filter=".soundcloud">Soundcloud</a>
              <a href="#" data-filter=".popup">Rasmlar</a>
              <a href="#" data-filter=".details">Tafsilot</a>
            </div>
            <div class="portfolio-items">
              <div class="item youtube">
                <a href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
                  ><img src="{{asset("images/1.png")}}" alt=""
                /></a>
              </div>
              <div class="item vimeo">
                <a href="https://vimeo.com/132528823"
                  ><img src="{{asset("images/2.png")}}" alt=""
                /></a>
              </div>
              <div class="item soundcloud">
                <a
                  href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F159967086&amp;show_artwork=true&amp;maxwidth=1020&amp;maxheight=1000&amp;auto_play=1"
                  ><img src="{{asset("images/3.png")}}" alt=""
                /></a>
              </div>
              <div class="item popup">
                <a href="{{asset("images/5.png")}}"
                  ><img src="{{asset("images/5.png")}}" alt=""
                /></a>
              </div>
              <div class="item details">
                <a href="#details-popup"
                  ><img src="{{asset("images/4.png")}}" alt=""
                /></a>
                <div class="mfp-fade mfp-hide" id="details-popup">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("images/4.png")}}" alt="" />
                    </div>
                    <div class="des">
                      <span>Tafsilotlar</span>
                      <h4>Mobil ilova</h4>
                      <p>
                        Biz tez harakat qilishimiz kerak bo'lgan dunyoda yashayapmiz
                        g'oyalarimizni iloji boricha moslashuvchan tarzda takrorlang. Bino
                        maketlar haqiqiy hayot o'rtasidagi ideal muvozanatni ta'minlaydi.
                        yakuniy mahsulotning taqdimoti va qulayligi
                        modifikatsiya.
                      </p>
                      <p>
                        Maketlar ijodiy bosqich uchun ham foydalidir
 loyiha - masalan, siz tushunishga harakat qilayotganingizda
 sizning foydalanuvchi oqimlari yoki to'g'ri vizual ierarxiya - va
 ishlab chiqarish bosqichi, ular maqsadni ifodalaydi
 mahsulot. Maketlarni ijodingizning bir qismiga aylantirish va
 ishlab chiqish jarayoni tez va osonlik bilan imkonini beradi
 fikrlash.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item popup">
                <a href="{{asset("images/6.png")}}"
                  ><img src="{{asset("images/6.png")}}" alt=""
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
                Bizning mijozlarimiz <br>
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
                      To‘yimizdagi suratlar va videolar ajoyib chiqdi! Jamoa juda professional va ijodkor.
                      Har bir lahzani go'zal tarzda abadiylashtirishdi. Tavsiya qilaman!
                  </p>
                  <div class="author-info">
                    <div class="image-container">
                      <img src="{{asset("images/man.png")}}" alt="" />
                    </div>
                    <div class="author-info-content">
                      <h3>Elmurod Xakimov</h3>
                      <p class="complay-name">Mijoz</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-item swiper-slide">
                <div class="slider-item-content">
                  <p>
                      Sevgi hikoyamizni suratga olishda yuqori darajada xizmat ko'rsatishdi.
                      Suratlar va videolar juda sifatli chiqdi. Biz juda mamnunmiz va albatta yana foydalanamiz.
                  </p>
                  <div class="author-info">
                    <div class="image-container">
                      <img src="{{asset("images/man.png")}}" alt="" />
                    </div>
                    <div class="author-info-content">
                      <h3>Mijos</h3>
                      <p class="complay-name">Akmal Iskandarov</p>
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
          <div class="bg-primary client-container" style="padding: 20px;">
            <div class="swiper client-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#">
                      <img src="{{asset("images/maxdev.png")}}" alt=""/>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                      <img src="{{asset("images/maxdev.png")}}" alt=""/>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#">
                      <img src="{{asset("images/maxdev.png")}}" alt=""/>
                  </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="{{asset("images/maxdev.png")}}" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="{{asset("images/maxdev.png")}}" alt=""/>
                    </a>
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
                    ><img src="{{asset("/images/blog_1.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>MaxDev</span> / 23.06.2022</p>
                  <h4>
                    <a href="#blog-popup-1">
                        To‘y Suratga Olish: Esdalik Lahzalari
                    </a>
                  </h4>
                  <p>
                      To'y kuningizni eslab qolish uchun eng yaxshi yo'l - professional fotosuratlar.
                      Ushbu blog postida, biz to'y suratga olishning muhim jihatlarini,
                      suratga olish uslublarini va eng yaxshi natijalarni olish uchun
                      maslahatlarni o'rtoqlashamiz.
                  </p>
                </div>
                <div id="blog-popup-1" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("/images/blog_2.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category">
                        <span>MaxDev</span> / 15.05.2024
                      </p>
                      <h4>To‘y Suratga Olish: Esdalik Lahzalari<</h4>
                      <p>
                          To'y kuningizni eslab qolish uchun eng yaxshi yo'l - professional fotosuratlar.
                          Ushbu blog postida, biz to'y suratga olishning muhim jihatlarini, suratga olish
                          uslublarini va eng yaxshi natijalarni olish uchun maslahatlarni o'rtoqlashamiz.
                          To'y kuningizni yodga saqlash, har bir lahzani sekin, chiroyli va abadiylashtirish
                          uchun yordam beramiz. Bizning qadrlashgan jamoa sizning to'y kuningizni unutilmas
                          qilishga yordam berish uchun tayyor.
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
                    ><img src="{{asset("/images/blog_2.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>MaxDev</span> / 17.05.2024</p>
                  <h4>
                    <a href="#blog-popup-2">
                        Sevgi Hikoyasi: Suratlarda Abadiylashtirish
                    </a>
                  </h4>
                  <p>
                      Har bir sevgi hikoyasi o'ziga xos va unutilmas.
                      Ushbu blog postida, biz sizning sevgi hikoyangizni suratlarda qanday qilib chiroyli va samimiy
                      tarzda aks ettirish mumkinligini muhokama qilamiz.
                      Suratga olish jarayonida nimaga e'tibor berish kerakligi haqida maslahatlar beramiz.
                  </p>
                </div>
                <div id="blog-popup-2" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("/images/blog_2.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category"><span>Web Design</span> / 17.05.2024</p>
                      <h4>Sevgi Hikoyasi: Suratlarda Abadiylashtirish</h4>
                      <p>
                          Har bir sevgi hikoyasi o'ziga xos va unutilmas.
                          Ushbu blog postida, biz sizning sevgi hikoyangizni suratlarda qanday
                          qilib chiroyli va samimiy tarzda aks ettirish mumkinligini muhokama qilamiz.
                          Suratga olish jarayonida nimaga e'tibor berish kerakligi haqida maslahatlar
                          beramiz. Sevgi hikoyalaringizni unutilmas va jazbli suratlarga aylantirish
                          uchun kerakli texnikalarni va yondashuvlarni taqdim etamiz.
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
                    ><img src="{{asset("images/blog_3.png")}}" alt=""
                  /></a>
                </div>
                <div class="blog-content">
                  <p><span>MaxDev</span> / 19.05.2024</p>
                  <h4>
                    <a href="#blog-popup-3">
                        Fotosuratlarni Tahrirlash: Sifatni Oshirish
                    </a>
                  </h4>
                  <p>
                      Fotosuratlarni tahrirlash ularni yanada chiroyli va jozibador qilishga yordam beradi.
                      Ushbu blog postida, biz rangni tuzatish, portret retuchi va boshqa tahrir usullarining
                      afzalliklari haqida gaplashamiz.
                      Tahrirlash jarayonida foydalanish mumkin bo'lgan eng yaxshi dasturlarni ko'rib chiqamiz.
                  </p>
                </div>
                <div id="blog-popup-3" class="mfp-fade mfp-hide">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset("images/blog_3.png")}}" alt="dora_img" />
                    </div>
                    <div class="des">
                      <p class="category">
                        <span>MaxDev</span> / 19.05.2024
                      </p>
                      <h4>
                          Fotosuratlarni Tahrirlash: Sifatni Oshirish
                      </h4>
                      <p>
                          Fotosuratlarni tahrirlash ularni yanada chiroyli va jozibador qilishga yordam beradi.
                          Ushbu blog postida, biz rangni tuzatish, portret retuchi va boshqa tahrir usullarining
                          afzalliklari haqida gaplashamiz. Tahrirlash jarayonida foydalanish mumkin bo'lgan eng yaxshi
                          dasturlarni ko'rib chiqamiz. Fotosuratlar tahrir qilishning eng yaxshi usullari, eng zahiri
                          xususiyatlari va eng yuqori sifatli natijalarni olishning yollari haqida sizga ko'rsatishga
                          tayyormiz.
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
                <p class="sub-title">Aloqa !</p>
                <h2>Narx uchun biz bilan bog'laning, jamoaga qo'shilishga yordam bering</h2>
              </div>
              <ul class="info-details">
                <li>
                  <h4>Elektron pochta</h4>
                  <p>maxdev@gmail.com</p>
                </li>
                <li>
                  <h4>Manzil</h4>
                  <p>
                    Andijon shahar <br />
                    Boburshoh ko‘chasi 56-uy
                  </p>
                </li>
                <li>
                  <h4>Telefon/h4>
                  <p>+998 90 206 98 28</p>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <form action="#" class="contact-form">
                <div class="form-group">
                  <input type="text" placeholder="Ism" />
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Elektron po‘chta" />
                </div>
                <div class="form-group">
                  <textarea name="message" placeholder="Xabar"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="cf-btn">Xabar yuborish</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

@endsection
