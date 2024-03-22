<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Янгиликлар</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    
    <x-link>
        <!-- css links -->
    </x-link>

</head>

<body>

<x-main>


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('home')}}">Асосий сахифа</a></li>
                    <li><a href="#">Янгиликлар</a></li>
                </ol>
                <h2>Янгиликлар</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries col-sm-12">
                    
                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div><!-- End blog entries list -->
                    
                    <div class="col-lg-4 col-sm-12">
                        
                        <div class="sidebar">
                            
                            <h3 class="sidebar-title">Кидириш</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn -->
                            
                            <!-- <div class="card"> -->
                              <!-- <img src="/assets/img/hokim.jpg" class="card-img-top">
                              <div class="card-body">
                                <p class="card-text">
                                Urganch tumani hokimi <br> G‘ayratjon Sultonov
                                </p> -->
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
                                <a href="https://lex.uz/docs/-6600413">
                                  <img id="img-2030" src="/assets/img/2030.jpg">
                                </a>
                              </div>
                            <!-- </div> -->
                        </div><!-- End blog sidebar -->

                        </div>
                    </div>
                </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
 
</x-main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <script>
    function posts() {
    $.ajax({
        url: 'http://127.0.0.1:8000/api/sixnew',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Posts : ", data.posts)
        },
        error: function () {
            alert("Xatolik yuz berdi");
        }
    })
  }

  document.addEventListener("DOMContentLoaded", posts);

$.ajax({
    url: 'http://127.0.0.1:8000/api/sixnew',
    type: "GET",
    dataType: "json",
    success: function (data) {

        let title = document.querySelectorAll("#title"),
            myContent = document.querySelectorAll("#content"),
            image = document.querySelectorAll(".my-card-image");

            console.log(title);
        for (let i = 0; i < 6; i++) {
            myContent[i].innerHTML = data.posts[i].content;
            title[i].innerHTML = data.posts[i].title;
            image[i].src = data.posts[i].photo_path;
        }

    },
    error: function () {
        alert("Data was not found");
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