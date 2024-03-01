<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href=".htaccess">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!-- Icon -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://kit.fontawesome.com/61ed1c50ae.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- close Icon -->

   <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Ubuntu:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Ubuntu:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
   
  <!-- Close Font -->
    <script defer src="JS/script.js"></script>

    <!-- Animated Css -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <!-- ============================================================= -->
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/translate.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
  <link rel="shortcut icon" href="sliki/oemuc2.png" type="image/x-icon">
  <title>ОЕМУЦ Св.Наум Охридски</title>
   
  </head>
  <body>

  <?php 
    require("news/index.php");

    
  ?>
  
   
    <div class="loader" id="loader">
      <div class="gear-box">
          <img class="gear1" src="sliki/gear.svg" alt="gear">
          <img class="gear2" src="sliki/gear.svg" alt="gear">
      </div>
      <div class="gear-box box1">
          <img class="gear1" src="sliki/gear.svg" alt="gear">
          <img class="gear2" src="sliki/gear.svg" alt="gear">
      </div>
      <div class="gear-box box2">
          <img class="gear1" src="sliki/gear.svg" alt="gear">
          <img class="gear2" src="sliki/gear.svg" alt="gear">
      </div>
  </div>
  
  <div id="progress">
    <span id="progress-value"><i class="fa-solid fa-arrow-up " style="color: #fdc734;"></i></span>
  </div>
  






    <header>
      <div class="con-nav">
          <input type="checkbox" name="" id="check">
          
          <div class="logo-container">
              <h3 class="logo"><img src="sliki/logo1.png" alt=""></h3>
          </div>

          <div class="nav-btn-ivo">
              <div class="nav-links">
                  <ul>
                      <li class="nav-link" style="--i: .6s">
                          <a href="index.html">Почетна</a>
                      </li>
                      <li class="nav-link" style="--i: .85s">
                          <a href="#">Струки<i class="fas fa-caret-down"></i></a>
                          <div class="dropdown">
                              <ul>
                                <li class="dropdown-link">
                                  <a href="#">Електротехничка струки<i class="fas fa-caret-down"></i></a>
                                  <div class="dropdown second">
                                      <ul>
                                          <li class="dropdown-link">
                                              <a href="ktia.html">Електротехницар за компјутерска техника и автоматика</a>
                                          </li>
                                          <li class="dropdown-link">
                                              <a href="tim.html">Техницар за индустриска мехатроника</a>
                                          </li>
                                          <li class="dropdown-link">
                                              <a href="ee.html">Електротехницар енергетичар</a>
                                          </li>
                                          <li class="dropdown-link">
                                            <a href="eet.html">Елетротехницар за електроника и телекомуникации</a>
                                        </li>
                                        <li class="dropdown-link">
                                          <a href="em.html">Електромеханичар</a>
                                      </li>
                                          <div class="arrow"></div>
                                      </ul>
                                  </div>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">Машинска струка<i class="fas fa-caret-down"></i></a>
                                <div class="dropdown second">
                                    <ul>
                                        <li class="dropdown-link">
                                            <a href="#">Техничар за производно машинство</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Машински техничар</a>
                                        </li>
                                        <li class="dropdown-link">
                                            <a href="#">Машински техничар за моторни возила</a>
                                        </li>
                                        <li class="dropdown-link">
                                          <a href="#">Техничар за компјутерско управување</a>
                                      </li>
                                        <li class="dropdown-link">
                                          <a href="#">Заварувач обработувач на метал</a>
                                      </li>
                                        <div class="arrow"></div>
                                    </ul>
                                </div>
                            </li>
                                  <li class="dropdown-link">
                                      <a href="soobrakjajna.html">Сообраќајна струка</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="kozmetika.html">Лични услуги</a>
                                  </li>
                                  <div class="arrow"></div>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-link" style="--i: 1.1s">
                          <a href="#">Настава<i class="fas fa-caret-down"></i></a>
                          <div class="dropdown">
                              <ul>
                                  <li class="dropdown-link">
                                      <a href="rakovoden.html">Раководен тим</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="aktivi.html">Стручни активи</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="adkadar.html">Административен кадар</a>
                                  </li>
                                  <div class="arrow"></div>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-link" style="--i: 1.1s">
                        <a href="#">Проекти<i class="fas fa-caret-down"></i></a>
                        <div class="dropdown">
                            <ul>
                              <li class="dropdown-link">
                                <a href="#">E twinning проекти 2023/2024<i class="fas fa-caret-down"></i></a>
                                <div class="dropdown second">
                                    <ul>
                                        <li class="dropdown-link">
                                            <a href="#">Water as a source of life</a>
                                        </li>
                                        <li class="dropdown-link">
                                          <a href="#">Interaktivne Funkcije u STEM-u</a>
                                      </li>
                                      <li class="dropdown-link">
                                        <a href="#">Let's fight for a better World</a>
                                    </li>
                                    <li class="dropdown-link">
                                      <a href="#">Game not waste</a>
                                  </li>
                                  <li class="dropdown-link">
                                    <a href="#">Be kind, be a role model</a>
                                </li>
                                <li class="dropdown-link">
                                  <a href="#">Read what you eat</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">NOW (Nature often welcomes)</a>
                            </li>
                            <li class="dropdown-link">
                              <a href="#">Let's shape our dreams with Tinkercad</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">We talk C++ language</a>
                        </li>
                        <li class="dropdown-link">
                          <a href="#">Multidisciplinary STEM skills</a>
                      </li>
                          <li class="dropdown-link">
                            <a href="#">Are you ready for a change?</a>
                        </li>
                                        <div class="arrow"></div>
                                    </ul>
                                </div>
                            </li>
                                <li class="dropdown-link">
                                    <a href="balkanjuniorproekt.html">Балкан Јуниор</a>
                                </li>
                                <li class="dropdown-link">
                                  <a href="#">Еразмус проекти<i class="fas fa-caret-down"></i></a>
                                  <div class="dropdown second">
                                      <ul>
                                          <li class="dropdown-link">
                                              <a href="DigitalVET.html">DigitalVET</a>
                                          </li>
                                          <div class="arrow"></div>
                                      </ul>
                                  </div>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">E twinning проекти 2022/2023<i class="fas fa-caret-down"></i></a>
                                <div class="dropdown second">
                                    <ul>
                                        <li class="dropdown-link">
                                            <a href="#">No Other World</a>
                                        </li>
                                        <li class="dropdown-link">
                                          <a href="#">Natural Disaters</a>
                                      </li>
                                      <li class="dropdown-link">
                                        <a href="#">Funkcije u STEM-u</a>
                                    </li>
                                    <li class="dropdown-link">
                                      <a href="#">Thematics Mathematics</a>
                                  </li>
                                  <li class="dropdown-link">
                                    <a href="#">1.5 Degree: Together possible </a>
                                </li>
                                <li class="dropdown-link">
                                  <a href="#">Where are my footprints</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">The magic of kindness</a>
                            </li>
                            <li class="dropdown-link">
                              <a href="#">Attach but not addicted</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">KarMa-tematik</a>
                        </li>
                                        <div class="arrow"></div>
                                    </ul>
                                </div>
                            </li>
                                <li class="dropdown-link">
                                    <a href="#">Junior Achievement<i class="fas fa-caret-down"></i></a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="#">Girls Go Circular</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="#">Училишна компанија</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                              
                                <div class="arrow"></div>
                            </ul>
                        </div>
                        <li class="nav-link" style="--i: 1.1s">
                          <a href="#">Галерија<i class="fas fa-caret-down"></i></a>
                          <div class="dropdown">
                              <ul>
                                  <li class="dropdown-link">
                                      <a href="dodeluvanje.html">Доделување дипломи 2021/2022</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="balkanjunior.html">Балкан Јуниор 2019</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="ferijalna.html">Феријална пракса</a>
                                  </li>
                                  <li class="dropdown-link">
                                    <a href="prakticnagal.html">Практична настава</a>
                                </li>
                                <li class="dropdown-link">
                                  <a href="natprevarigal.html">Натпревари</a>
                              </li>
                              <li class="dropdown-link">
                                <a href="#">Презентации на Центарот</a>
                            </li>
                            
                                  <div class="arrow"></div>
                              </ul>
                          </div>
                      </li>
                        <li class="nav-link" style="--i: 1.35s">
                          <a href="zanas.html">За нас</a>
                      </li>
                    </li>
                    <li class="nav-link" style="--i: .6s">
                      <div class="language">
                        <img
                          src="lang/lang__mk.png"
                          alt="ru"
                          data-google-lang="mk"
                          class="language__img"
                          width="24"
                          height="15"
                        />
                        <img
                          src="lang/lang__en.png"
                          alt="en"
                          data-google-lang="en"
                          class="language__img"
                          width="24"
                          height="15"
                        />
                        <img
                          src="lang/lang__de.png"
                          alt="de"
                          data-google-lang="de"
                          class="language__img"
                          width="24"
                          height="15"
                        />
                        <img
                          src="lang/lang__sq.png"
                          alt="de"
                          data-google-lang="sq"
                          class="language__img"
                          width="24"
                          height="15"
                        />
                        <img
                          src="lang/lang__tr.png"
                          alt="de"
                          data-google-lang="tr"
                          class="language__img"
                          width="24"
                          height="15"
                        />
                      </div>
                  </li>
                  </ul>
              </div>
          </div>

          <div class="hamburger-menu-container">
              <div class="hamburger-menu">
                  <div></div>
              </div>
          </div>
      </div>
  </header>

  
  
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/oemucvesti.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Enjoy the finest coffee drinks.</span>
            <h2>
              Enjoy Our Exclusive <br />
              Coffee and Cocktails
            </h2>
            <form action="news/index.php" method="post">
              <a href="news/index.php" class="button">Вести</a>
            </form>
            
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/Patronat2-840x430.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text">We really like what we do.</span>
            <h2>
              Coffee Beans with a <br />
              Perfect Aroma
            </h2>
            <a href="#" class="button">Вести</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/Krit-2-840x430.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Making Our coffee with lover.</span>
            <h2>
              Alluring and Fragrant <br />
              Coffee Aroma
            </h2>
            <a href="#" class="button">Вести</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

  <!-- Partneri-->
  
  <section class="partneri">
    <logo-slider>
      <div class="">
        <img src="sliki/partneri/Kostal.png"></img> 
        <img class="sliki/partneri/learnica" src="sliki/partneri/LTH-logo2.png"></img>
        <img  src="sliki/partneri/ODW.png"></img>
        <img class="magna" src="sliki/partneri/Magna.png"></img>
        <img  src="sliki/partneri/Logoevn.png"></img>
       
        
      </div>
      <div>
        <img src="sliki/partneri/Kostal.png"></img>
        <img  class="learnica" src="sliki/partneri/LTH-logo2.png"></img>
        <img  src="sliki/partneri/ODW.png"></img>
        <img class="magna" src="sliki/partneri/Magna.png"></img>
        <img  src="sliki/partneri/Logoevn.png"></img>
      </div>
      <div>
        <img src="sliki/partneri/Kostal.png"></img>
        <img  class="learnica" src="sliki/partneri/LTH-logo2.png"></img>
        <img  src="sliki/partneri/ODW.png"></img>
        <img class="magna" src="sliki/partneri/Magna.png"></img>
        <img  src="sliki/partneri/Logoevn.png"></img>
      </div>


 
</logo-slider>
   </section>
  <!-- Close Partneri-->
   <!-- Struki-->
   <section id="struki" class="struki">
    <div class="naslov">
      <h2>Струки</h2>
    </div>
    <div class="container-struki">
      <div class="box" style="--clr:#47b2e4;">
        <div class="content">
          <div class="icon">
            <ion-icon style="color: #fff;" name="desktop"></ion-icon>
          </div>
          <div class="text">
            <h3>Електротехничка струка</h3>
            <a href="elektrotehnicka.html">Дознај повеќе</a>
          </div>
        </div>
      </div>
      <div class="box2" style="--clr:#f2951e;">
        <div class="content">
          <div class="icon">
            <ion-icon style="color: #fff;" name="cog"></ion-icon>
          </div>
          <div class="text">
            <h3>Машинска<br> струка</h3>
            <a href="masinska.html">Дознај повеќе</a>
          </div>
        </div>
      </div>
      <div class="box3" style="--clr:#f23824;">
        <div class="content">
          <div class="icon">
            <ion-icon style="color: #fff;" name="car-sport"></ion-icon>
          </div>
          <div class="text">
            <h3>Сообраќајна<br> струка</h3>
            <a href="soobrakjajna.html">Дознај повеќе</a>
          </div>
        </div>
      </div>
      <div class="box4" style="--clr:#e948ae;">
        <div class="content">
          <div class="icon">
            <ion-icon style="color: #fff;" name="brush"></ion-icon>
          </div>
          <div class="text">
            <h3>Лични<br> услуги</h3>
            <a href="kozmetika.html">Дознај повеќе</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Close Struki-->

  <!-- delegacija -->
  <section id="del" class="del">
    <div class="del-container" data-aos="zoom-in">
  
      <div class="del-redica">
        <div class="text-lg-start">
          <a target="_blank" href="https://shorturl.at/bxCQ7">
            <h3>Дуално стручно образование-инвестиција во твојата иднина</h3>
          </a>
          </div>
        <div class="img-container">
          <a target="_blank" href="https://shorturl.at/lLTY5">
            <img class="tabla-del" src="sliki/partneri/Tablicka-Final-1-page-001-300x212.jpg" alt="">
          </a>
        
         <a target="_blank" href="https://shorturl.at/qGX35">
          <img class="logo-del" src="sliki/partneri/delegacija.png" alt="">
         </a>

        </div>
      </div>
  
    </div>
    </section>
    <!-- del -->

    <!--Za nas-->

  <section id="zanas" class="zanas">
    <div class="naslov">
      <h2>За нас</h2>
    </div>
    <div class="content-zanas">
      <div class="tekst-1">
        <p>
          Развојниот пат на Општинскиот електромашински училиштен центар „Св. Наум Охридски“ од Охрид започнува во учебната 1966/1967 година како резултат на стопанската ориентација на општина Охрид. Центарот беше формиран со цел да подготвува кадри од металската насока за потребите на металската индустрија во градот како што беа фабриката „Братство“, фабриката за автомобилски делови и алати „Херој Тоза Драговиќ“ и фабриката „Езерка“.
        </p>
      </div>
    </div>
    <div class="counters">
      <div>
        <div class="counter">
          <h1><span data-count="800">0</span></h1>
          <h3>Ученици</h3>
        </div>
        <div class="counter">
          <h1><span data-count="60">0</span></h1>
          <h3>Професори</h3>
        </div>
        <div class="counter">
          <h1><span data-count="13">0</span></h1>
          <h3>Струки</h3>
        </div>
      </div>
    </div>
  <div class="povekje">
    <button class="zanas-btn">
      <span><a href="zanas.html">Дознај повеќе</a></span>
    </button>
  </div>
  </section>
  
  <!--Close Za nas-->


  
  <!-- Contact -->
  <section class="kontakt">
    <div class="naslov">
      <h2>Контакт</h2>
    </div>
    <div class="contact-wrap">
      <div class="contact-in">
        <h1>Испрати порака</h1>
        <form>
          <input type="text" placeholder="Име и презиме" class="contact-in-input">
          <input type="text" placeholder="Мејл" class="contact-in-input">
          <input type="text" placeholder="Наслов" class="contact-in-input">
          <textarea placeholder="Порака" class="contact-in-textarea"></textarea>
          <input type="submit" value="Прати" class="contact-in-btn">
        </form>
      </div>
      <div class="contact-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.3785365678254!2d20.814656451490848!3d41.12626177918736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1350db7ae60d9125%3A0xbb17deb08ffa91cf!2sOEMUC%20%22St.%20Naum%20Ohridski%22!5e0!3m2!1sen!2smk!4v1680698901288!5m2!1sen!2smk" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
   <!--Close Contact  -->


     <!-- ----------------------------------------FOOTER---------------------------------------- -->
<footer>
  <div class="footer1">
    <img src="sliki/oemuc2.png" alt="" class="log">
    <p>ОЕМУЦ</p>
    <ul class="social">
      <li><a href="https://www.facebook.com/O%D0%95%D0%9C%D0%A3%D0%A6-%D0%A1%D0%B2-%D0%9D%D0%B0%D1%83%D0%BC-%D0%9E%D1%85%D1%80%D0%B8%D0%B4%D1%81%D0%BA%D0%B8-%D0%9E%D1%85%D1%80%D0%B8%D0%B4-509105895795971"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256"><path fill="currentColor" d="M128 20a108 108 0 1 0 108 108A108.12 108.12 0 0 0 128 20Zm12 191.13V156h20a12 12 0 0 0 0-24h-20v-20a12 12 0 0 1 12-12h16a12 12 0 0 0 0-24h-16a36 36 0 0 0-36 36v20H96a12 12 0 0 0 0 24h20v55.13a84 84 0 1 1 24 0Z"/></svg></a></li>
      <li><a href="https://www.google.com/maps/place/OEMUC+%22St.+Naum+Ohridski%22/@41.1262658,20.8146618,17z/data=!3m1!4b1!4m6!3m5!1s0x1350db7ae60d9125:0xbb17deb08ffa91cf!8m2!3d41.1262618!4d20.8168505!16s%2Fg%2F1hf0x0ftn"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 7.35q3.05-2.8 4.525-5.088Q18 11.975 18 10.2q0-2.725-1.738-4.463Q14.525 4 12 4Q9.475 4 7.737 5.737Q6 7.475 6 10.2q0 1.775 1.475 4.062Q8.95 16.55 12 19.35ZM12 22q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Zm0-11.8Z"/></svg> </a></li>
      <li><a href="mailto:emucohrid@yahoo.com"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5l8-5v10zm-8-7L4 6h16l-8 5z"/></svg></a></li>
    </ul>
    <div class="footer-bottom">
      <p>Copyright &copy; 2023  All Rights Reserved</p>
    </div>
  </div>
</footer>


  

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/loader.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      
    </script>


  </body>
</html>
