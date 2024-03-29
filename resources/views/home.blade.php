<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Урганч туман ҳокимлиги расмий веб сайти</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center d-none d-md-block">
        <i class="bi bi-envelope-fill"></i>info@urganchhokimiyat.uz
        <i class="bi bi-phone-fill phone-icon"></i> +998 (62) 352-28-43
      </div>
      <p class="test">Hurmatli foydalanuvchilar ushbu sayti TEST rejimida ishlamoqda</p>
      <!-- <div class="search-form">
        <form action="">
          <input type="text">
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between ">
      <h1 class="logo"><a>Хоразм вилоят <br> Урганч тумани ҳокимлиги <br> Расмий веб сайти</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item dropdown p-1">
            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Туман хокимлиги</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('apparat')}}">Туман ҳокимлиги аппарати</a></li>
              <li><a class="dropdown-item" href="#">Бошқарув аппаратининг тузилмаси</a></li>
              <li><a class="dropdown-item" href="#">Қабул жадвали</a></li>
              <li><a class="dropdown-item" href="#">Ҳорижий ва халқаро ҳамкорлик алоқалари</a></li>
              <li><a class="dropdown-item" href="{{route('relationships')}}">Бошқа давлат органлари билан ўзаро муносабатлар</a></li>
              <li><a class="dropdown-item" href="#">Маҳаллий ва халқаро битимлар, шартномалар</a></li>
              <li><a class="dropdown-item" href="#">Кун тартиби, иш режаси ва йиғилиш масалалари</a></li>
              <li><a class="dropdown-item" href="#">Электрон ҳукумат доирасида қилинаётган ишлар</a></li>
              <li><a class="dropdown-item" href="#">Ҳокимлик иштирокидаги тадбирлар</a></li>
              <li><a class="dropdown-item" href="#">Бўш иш ўринлари</a></li>
              <li><a class="dropdown-item" href="#">Манзил</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown p-1">
            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Туман ҳақида</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('news')}}">Янгиликлар</a></li>
              <li><a class="dropdown-item" href="{{route('advert')}}">Тендер ва эълонлар</a></li>
              <li><a class="dropdown-item" href="#">Туман ҳақида маълумот</a></li>
              <li><a class="dropdown-item" href="#">Туман ташкилотлари</a></li>
              <li><a class="dropdown-item" href="{{route('neighbourhood')}}">Маҳалла фуқоралар йиғинлари</a></li>
              <li><a class="dropdown-item" href="#">Олий таълим муассасалари</a></li>
              <li><a class="dropdown-item" href="#">Мактабгача таълим муассасалари</a></li>
              <li><a class="dropdown-item" href="#">Умумий ўрта таълим мактаблар</a></li>
              <li><a class="dropdown-item" href="#">Касб-ҳунар коллежлари</a></li>
              <li><a class="dropdown-item" href="{{route('statistical')}}">Статистикалар</a></li>
              <li><a class="dropdown-item" href="#">Экология</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown p-1">
            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Электрон хизматлар</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Мурожаатлар статистикаси</a></li>
              <li><a class="dropdown-item" href="#">Кўп бериладиган саволларга жавоблар</a></li>
              <li><a class="dropdown-item" href="#">Фуқаролар мурожаатлари</a></li>
              <li><a class="dropdown-item" href="#">Нотариал ҳаракатлар учун Давлат божи ставкалари</a></li>
              <li><a class="dropdown-item" href="#">Маҳаллий давлат ҳокимияти таркиби</a></li>
              <li><a class="dropdown-item" href="#">Ҳаж ва Умра зиёратига бориш тартиби</a></li>
              <li><a class="dropdown-item" href="#">Бизнесни режалаштириш ва бошқариш</a></li>
              <li><a class="dropdown-item" href="#">Тадбиркорликни лицензиялаш</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/docs/-4486145?ONDATE=12.03.2022">Алкоголли савдофаолиятини лицензиялаш тартиби</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/ru/docs/-899322?ONDATE=29.12.2019">Улгуржи савдофаолиятини лицензиялаш</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/uz/docs/-6026643">Давлат харидларини амалга ошириш</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/docs/6694131">Транспорт хизматларини ташкил этиш</a></li>
              <li><a class="dropdown-item" href="#">Автомобил ёнилғиси савдо фаолиятини лицензиялаш</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/docs/-152653?ONDATE=26.10.2018%2000">Ер муносабатларини тартибга солиш</a></li>
              <li><a class="dropdown-item" href="#">Очиқ маълумотлар</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown p-1">
            <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Меъёрий ҳужжатлар</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://lex.uz/uz/docs/-6396146">Президент фармон, қарорлари</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/acts/-1160432">Қонунчилик палатаси қарорлари</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/docs/-6020887?ONDATE=18.05.2022%2000">Вазирлар Маҳкамаси қарорлари</a></li>
              <li><a class="dropdown-item" href="#">Туман ҳокими қарорлари</a></li>
              <li><a class="dropdown-item" href="#">Туман ҳокими фармойишлари</a></li>
              <li><a class="dropdown-item" href="https://lex.uz/acts/-1392614">Ўз кучини йўқотган меъёрий ҳужжатлари</a></li>
              <li><a class="dropdown-item" href="#">Туман ҳокимлиги иш юритиш йўриқномаси</a></li>
              <li><a class="dropdown-item" href="#">Расмий маърузалар</a></li>
              <li><a class="dropdown-item" href="{{route('developedParty')}}">Ишлаб чиқилган чора тадбирлар</a></li>
              <li><a class="dropdown-item" href="#">Аналитик хисобот ва тахлиллар</a></li>
              <li><a class="dropdown-item" href="#">Депутатлар фаолияти</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="#">Сайт харитаси</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Мурожаат қолдириш</a></li> -->
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Янгиликлар</h2>
          <p class="animate__animated animate__fadeInUp">Призидентимиз карорлари ва конунларидан хабардор бўлинг.
            Урганч Туманида рўй бераетган янгиликлар, юзага келган муамолар ва ечимлардан бохабар бўлинг.</p>
          <a href="{{route('news')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Кўпрок билиш</a>
        </div>
      </div>

    </div>
  </section>

  <main id="main">
  
  <!-- ======= Portfoio Section ======= -->
    <section id="portfolio" class="portfoio container" style="padding-bottom: 0;">
      <div class="section-title">
        <h2 style="text-align: left;">Янгиликлар</h2>
      </div>
      <div class="new-div">
        <section class="news-container row" style="margin-left: -12px; width: 100%;">
          <article class="news-card">
              <div>
                  <img class="my-img">
                  <div class="card-content ">
                    <h3 class="my-title">Title</h3>
                  </div>
                </div>
          </article>

          <article class="news-card ">
              <a>
                  <img class="my-img">
                  <div class="card-content">
                      <h3 class="my-title">Title</h3>
                  </div>
              </a>
          </article>

          <article class="news-card">
              <a>
                  <img class="my-img">
                  <div class="card-content">
                      <h3 class="my-title">Title</h3>
                  </div>
              </a>
          </article>

          <article class="news-card">
              <a>
                  <img class="my-img">
                  <div class="card-content">
                      <h3 class="my-title">Title</h3>
                  </div>
              </a>
          </article>

          <article class="news-card">
              <a>
                  <img class="my-img">
                  <div class="card-content">
                      <h3 class="my-title">Title</h3>
                  </div>
              </a>
          </article>

          <article class="news-card">
              <a>
                  <img class="my-img">
                  <div class="card-content">
                      <h3 class="my-title">Title</h3>
                  </div>
              </a>
          </article>
        </section>

        <div class="card" style="width: 18rem;">
          <img src="/assets/img/hokim.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text" style="
                position: relative;
                margin-top: -61px;
                height: 40px;
                background-color: lightgrey;
                filter: opacity(0.8);
                border: none;
                border-radius: 6px;
                padding-left: 10px;
            ">
            Urganch tumani hokimi <br> G‘ayratjon Sultonov</p>

            <div class="calendar">
        <div class="calendar-header">
            <button  id="prevBtn">&lt;</button>
            <h2 id="monthYear"></h2>
            <button id="nextBtn">&gt;</button>
        </div>
        <div class="calendar-body">
            <table class="calendar-table">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody id="calendarBody"></tbody>
            </table>
        </div>
    </div>

            <!-- <a href="https://lex.uz/docs/-6600413">
              <img src="/assets/img/2030.jpg">
            </a> -->

          </div>
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Биз билан богланиш</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Манзил:</h4>
                <p> Урганч туман Мустақиллик кўчаси 1-уй, 220500 <br>
                  Иш вақти: 09:00–18:00, тушлик: 13:00-14:00<br>
                  Дам олиш кунлари: Шанба ва якшанба</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>E-mail:</h4>
                <p>info@urganchhokimiyat.uz</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Тел:</h4>
                <p>+998 (62) 352-28-43</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Исм" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Электрон почта"
                    required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Хабар" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Хабар юбориш</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

        <div class="footer-newsletter">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h4>ЯНГИЛИКЛАРГА ОБУНА БЎЛИНГ</h4>
                <p>Янгиликлардан хабардор бўлиш учун куйидаги бўшликни тўлдиринг</p>
              </div>
              <div class="col-lg-6">
                <form action="" method="post">
                  <input type="email" name="email" placeholder="Електрон почтангизни езинг"><input type="submit"
                    value="Юбориш">
                </form>
              </div>
            </div>
          </div>
        </div>
    
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 footer-contact">
                <h4>Биз билан богланиш</h4>
                <p>
                  Урганч туман <br>
                  Мустақиллик кўчаси 1-уй, 220500 <br><br>
                  <strong>Тел:</strong> +998 (62) 352-28-43<br>
                  <strong>E-mail:</strong> info@urganchhokimiyat.uz<br>
                </p>
              </div>
              <div class="col-lg-6 c ol-md-6 footer-info">
                <h3>Хакида<br></h3>
                <p>Хоразим Вилояти Урганч Тумани хокимлиги расмий веб-сайти ахборот тизими. Туманимизда юз бераетган
                  янгиликлар ва фойдали хаволалар.</p>
                <div class="social-links mt-3">
                  <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                  <a href="https://www.facebook.com/Urganchtuman.axborotxizmati/" class="facebook"><i
                      class="bx bxl-facebook"></i></a>
                  <a href="http://www.instagram.com/urganchtumankhokimligi" class="instagram"><i
                      class="bx bxl-instagram"></i></a>
                  <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                  <a href="https://t.me/Urganch_tuman_news" class="linkedin"><i class="bx bxl-telegram"></i></a>
                </div>
              </div>
    
            </div> 
        </div>
      </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
  <script>
    function posts() {
    $.ajax({
        url: 'http://127.0.0.1:8000/api/data',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Posts : ", data.posts)
        },
        error: function () {
            //alert("Xatolik yuz berdi");
        }
    })
  }

  document.addEventListener("DOMContentLoaded", posts);

  const myUrl =  'http://127.0.0.1:8000/api/sixnew';

$.ajax({
    url: myUrl,
    type: "GET",
    dataType: "json",
    success: function (data) {

        let title = document.querySelectorAll(".my-title"),
            image = document.querySelectorAll(".my-img");

        for (let i = 0; i < 6; i++) {
        if (true) {
          title[i].innerHTML = data.posts[i].title+`...<a href="{{route('news')}}" class="glass-text">batafsil</a>`;
        }
          image[i].src = data.posts[i].photo_path;
        }
    },
    error: function () {
        //alert("Data was not found");
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    const monthYearDisplay = document.getElementById('monthYear');
    const calendarBody = document.getElementById('calendarBody');

    function generateCalendar(month, year) {
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startingDay = firstDayOfMonth.getDay();

        monthYearDisplay.textContent = `${getMonthName(month)} ${year}`;

        let date = 1;
        let calendarHTML = '';

        for (let i = 0; i < 6; i++) {
            calendarHTML += '<tr>';
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < startingDay) {
                    calendarHTML += '<td></td>';
                } else if (date > daysInMonth) {
                    break;
                } else {
                    calendarHTML += `<td${(date === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) ? ' class="current-month"' : ''}>${date}</td>`;
                    date++;
                }
            }
            calendarHTML += '</tr>';
            if (date > daysInMonth) {
                break;
            }
        }

        calendarBody.innerHTML = calendarHTML;
    }

    function getMonthName(monthIndex) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return months[monthIndex];
    }

    generateCalendar(currentMonth, currentYear);

    document.getElementById('prevBtn').addEventListener('click', function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    document.getElementById('nextBtn').addEventListener('click', function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });
});
  </script>

</body>

</html>
