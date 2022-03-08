@include('layouts/font_end/head')


<body>


  @include('layouts/font_end/headber')


  <!-- ======= Home Section ======= -->
  <section id="hero">

    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url(font_end/assets/img/slide/4.jpg)">
      <div class="carousel-container">
        <div class="container">
          <h2 class="animate__animated animate__fadeInDown">ยินดีต้อนรับสู่ <span>ร้านเพชรปลาทูโอมาน</span></h2>
          <p class="animate__animated animate__fadeInUp">เป็นร้านขายอยู่ตลาดนัดหรือเทศการณ์ต่างๆ</p>
          <a href="#menu" class="btn-get-started animate__animated animate__fadeInUp scrollto">Menu More</a>
        </div>
      </div>
    </div>

  </section><!-- End Home -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Home</h2>
        <p>หน้าแรก</p>
      </div>

      <div class="row">
        @foreach ($product as $pp)
        <div class="col-xl-4 col-lg-4 col-md-8">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('/admin/img/'.$pp->image)}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <br>
                <div class="text-center">
                  <h4>{{$pp->name}}</h4>
                </div>
                <div class="text-center">
                  <h6>{{$pp->price}} บาท</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <br>
      </div>

      <div class="row content">
        <div class="col-xl-6 col-lg-6 col-md-8" data-wow-delay="0.6s">
          <div class="member" data-aos="zoom-in" data-aos-delay="700">
            <img src="{{asset('/font_end/assets/img/portfolio/888.png')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <br>
                <h4>ปูยักษ์อลาสก้านั้น</h4>
                <p>
                  ปูยักษ์อลาสก้านั้น มันคือ ปูทะเลธรรมดา แต่มันตัวโต และมันมาจากทะเลแถบขั้วโลกเหนือ ซึ่งไม่ใช่ทะเลของอเมริกา หรือรัฐอลาสก้าอย่างเดียว
                  แต่ครอบคลุมพื้นที่ขั้วโลกเหนือเกือบทั้งหมด แต่ที่เรียกว่าปูอลาสก้า เพราะอลาสก้าเป็นท่าเทียบเรือที่ใหญ่ ที่สุดสำหรับเรือประมงที่ตระเวนจับปลา ปู
                  ในย่านนั้น คือจับมาแล้วต้องมาส่งที่ท่าอลาสก้า จากนั้นค่อยส่งออกไปทั่วโลก
                  ก็เหมือนเนื้อโกเบของญี่ปุ่น ซึ่งไม่ได้เป็นเนื้อที่ผลิตจากเมืองโกเบ หากแต่ส่งมาจากเมืองใกล้ๆ แล้วมาส่งออกผ่านเมืองโกเบ ซึ่งเป็นเมืองท่าใหญ่
                </p>
                <a href="https://www.sanook.com/money/209181/" class="btn-learn-more">ลิ้งค์อ้างอิง</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-8" data-wow-delay="0.6s">
          <div class="member" data-aos="zoom-in" data-aos-delay="700">
            <img src="{{asset('/font_end/assets/img/portfolio/999.png')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <br>
                <h4>ปลาแซลมอน</h4>
                <p>
                  ปลาแซลมอนตัวเต็มวัยมีขนาดประมาณ 10-11 นิ้ว ลำตัวมีสีเงินวาว มีจุดสีดำที่บริเวณด้านบนของลำตัวเหนือเส้นข้างลำตัว
                  แซลมอนชีวิตส่วนใหญ่อาศัยอยู่ในมหาสมุทร มีเพียงส่วนน้อยที่อาศัยอยู่ในทะเลสาบแซลมอนผสมพันธุ์ในน้ำจืด
                  ว่ายเข้าสู่แม่น้ำเพื่อวางไข่ ในช่วงฤดูฝนและฤดูหนาวในทะเลสาบน้ำจืดหรือแม่น้ำที่มีปริมาณออกซิเจนสูง
                </p>
                <a href="http://gg.gg/v47w5" class="btn-learn-more">ลิ้งค์อ้างอิง</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">


      <div class="section-title">
        <h2>menu</h2>
        <p>เมนู</p>
        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-8">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset('/font_end/assets/img/portfolio/1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ปลาทูโอมานนึ่ง</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคาตัวละ 80-120 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.1s">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('/font_end/assets/img/portfolio/2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ปลาทูหอม</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคาตัวละ 25 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('/font_end/assets/img/portfolio/33.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ปลาโอแดดเดียว</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคาตัวละ 60 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.4s">
            <div class="member" data-aos="zoom-in" data-aos-delay="500">
              <img src="{{asset('/font_end/assets/img/portfolio/55.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ไก่เขย่าราคา</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคา 20 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.5s">
            <div class="member" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{asset('/font_end/assets/img/portfolio/6.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>เห็ดเข็มทอง</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคา 20 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.6s">
            <div class="member" data-aos="zoom-in" data-aos-delay="700">
              <img src="{{asset('/font_end/assets/img/portfolio/7.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ปลาทูมันแช่น้ำปลา</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคาตัวละ 30-100 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-8" data-wow-delay="0.3s">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <img src="{{asset('/font_end/assets/img/portfolio/4.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <div class="text-center">
                    <h4>ปลาส้ม</h4>
                  </div>
                  <div class="text-center">
                    <h6>ราคาชิ้นละ 30-50 บาท</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
  </section><!-- End Menu Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>ติดต่อ</p>
      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>location</h3>
                <p>ตลาดข้างอำเภอไทรน้อย</p>
                <div class="member">
                  <img src="{{asset('/font_end/assets/img/slide/2.jpg')}}" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bxl-facebook"></i>
                <h3>Facebook</h3>
                <p>Fai Juta</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Phone</h3>
                <p>0860107550</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>ผู้จัดทำ</p>
      </div>

      <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('/font_end/assets/img/team/t1.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นายสิรดนัย กระดี่</h4>
                <span>สาขาเทคโนโลยีสารสนเทศ</span>
              </div>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100018602675662"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.1s">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('/font_end/assets/img/team/t2.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นายฉัตรวินทร์ ชาติทอง</h4>
                <span>สาขาเทคโนโลยีสารสนเทศ</span>
              </div>
              <div class="social">
                <a href="https://www.facebook.com/chatravin.chattong"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.2s">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{asset('/font_end/assets/img/team/t3.jpg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>นายเจษฎาวัฒน์ นิธิโรจน์ทวี</h4>
                <span>สาขาเทคโนโลยีสารสนเทศ</span>
              </div>
              <div class="social">
                <a href="https://www.facebook.com/p.jessadawat"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  </main><!-- End #main -->


  @include('layouts/font_end/footer')


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/font_end/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('/font_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/font_end/assets/js/main.js')}}"></script>

</body>

</html>