class Footer extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
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
    `
  }
}

customElements.define('footer-component', Footer);