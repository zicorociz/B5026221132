<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Link css -->
    <link rel="stylesheet" href="ets/style.css" />

    <!-- Link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Poppins:wght@500;700;800&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />

    <!-- Link untuk icon pada tab -->
    <link rel="icon" href="ets/logo.png" type="image" />

    <!-- link icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Zikrul Khalis'Portfolio</title>
  </head>
  <body style="font-family: Poppins; background-color: #1f1f1f; color: #fff">
    <!-- Mulai Navbar -->
    <nav id="home" class="navbar navbar-expand-lg">
      <div class="container me-5">
        <a class="navbar-brand" href="#"><img src="ets/Zico..png" alt="Bootstrap" width="auto" height="30" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav me-auto">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#about">About Me</a>
            <a class="nav-link" href="#service">Services</a>
            <a class="nav-link" href="#portfolio">Portfolio</a>
            <a class="nav-link" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Mulai Home -->
    <section class="jumbotron text-center" style="background-image: url('ets/bg.png')">
      <img src="ets/foto depan rektorat 2.jpg" alt="Zikrul Khalis" width="250" class="rounded-circle" />
      <h1 class="display-" style="font-weight: 800">Zikrul Khalis</h1>
      <p class="lead">A Creative Designer & Web Development</p>
    </section>
    <!-- Akhir Home -->

    <!-- Mulai about -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="ets/profil.png" alt="Zikrul Khalis" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>About Me</h2>
              <p>
                I am Zikrul Khalis, a student majoring in Information Systems at Sepuluh Nopember Institute of Technology (ITS) Surabaya, who has experience in various design projects, including posters and UI/UX. I work efficiently within
                the theme and understand user needs. I'm excited for new design challenges and creating visually stunning designs.
              </p>
              <a href="https://drive.google.com/file/d/17J1q5T3XDAbjRfyrWkBf-DMZmq_-EAWA/view?usp=share_link" target="_blank" class="btn">Download CV</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Mulai Services -->
    <section id="service">
      <div class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="section-head col-sm-12 text-center">
              <div class="about-text text-center">
                <h2 style="width: 12.5rem">My Services</h2>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card rounded-4" style="background-color: #1f1f1f; color: #fff; border: 4px solid #1ca7ec">
                <div class="item">
                  <img src="ets/CD.png" alt="" style="margin: 0 auto" />
                  <h3>Creative Design</h3>
                  <p>With 1 year of experience using applications that I am good at are Adobe Photoshop, Adobe Illustrator, Figma, HTML/CSS</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card rounded-4" style="background-color: #1f1f1f; color: #fff; border: 4px solid #1ca7ec">
                <div class="item">
                  <img src="ets/UI.png" alt="" style="margin: 0 auto" />
                  <h3>User Interface</h3>
                  <p>An experienced UI Designer uses Figma to design interfaces with efficient collaboration and interactive prototyping</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card rounded-4" style="background-color: #1f1f1f; color: #fff; border: 4px solid #1ca7ec">
                <div class="item">
                  <img src="ets/UX.png" alt="" style="margin: 0 auto" />
                  <h3>User Experience</h3>
                  <p>Optimizing user interaction through research, prototyping and intuitive design for superior digital experiences</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Services -->

    <!-- Portfolio Mulai -->
    <section id="portfolio">
      <div class="about-text text-center">
        <h2 style="width: 17.7rem">My Recent Works</h2>
      </div>
      <ul class="nav nav-pills mb-3 me-5 mt-5" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active custom-active-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom-active-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Graphic Design</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom-active-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Web Design</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom-active-button" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Game Design</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 14.png" alt="luffy" width="300" />
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio text-center">
                  <img src="ets/Rectangle 15.png" alt="masjid" width="300" />
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 16.png" alt="" width="300" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 17.png" alt="luffy" width="300" />
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio text-center">
                  <img src="ets/Rectangle 18.png" alt="luffy" width="300" />
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 19.png" alt="luffy" width="300" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 20.png" alt="luffy" width="300" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio">
                  <img src="ets/Rectangle 21.png" alt="luffy" width="300" />
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="porfolio text-center">
                  <img src="img/Rectangle 22.png" alt="luffy" width="300" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Akhir -->

    <!-- Contact Mulai -->
    <section id="contact" class="contact py-5">
      <div class="container py-5">
        <div class="section-head col-sm-12 text-center">
          <div class="about-text text-center">
            <h2 style="width: 17rem; border-bottom: hidden">Let's <span style="color: #1ca7ec">Discuss</span></h2>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-lg-12 mx-auto">
            <div class="row text-center">
              <div class="col-lg-4">
                <div class="circle text-center">
                  <a href="https://api.whatsapp.com/send?phone=6281368282434" target="_blank">
                    <span><i class="fas fa-phone-alt"></i></span>
                  </a>
                </div>
                <div class="text">
                  <h6>No Telp</h6>
                  <p>+6281368282434</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="circle text-center">
                  <a href="mailto:khaliszikrul16@gmail.com" target="_blank">
                    <span><i class="fa-solid fa-envelope"></i></span>
                  </a>
                </div>
                <div class="text">
                  <h6>Email</h6>
                  <p>khaliszikrul16@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="circle text-center">
                  <a href="https://maps.app.goo.gl/Vhq6LP1C3YDX8KeX9" target="_blank">
                    <span><i class="fa-solid fa-location-dot"></i></span>
                  </a>
                </div>
                <div class="text">
                  <h6>Address</h6>
                  <p>Surabaya, Jawa Timur</p>
                </div>
              </div>
            </div>
            <form action="https://drive.google.com/file/d/1w31yzTB7Ghtdx9rsq2JpdHqiLdOHXU3z/view?usp=sharing" method="get" target="_blank" onsubmit="return validateForm();">
              <div class="input-group mb-4">
                <input id="username" type="text" class="form-control ms-3 rounded-3" placeholder="Username" aria-label="Username" />
                <div id="msg" class="text-danger"></div>
                <input id="email" type="email" class="form-control me-3 rounded-3" placeholder="Email" aria-label="Email" />
              </div>
              <div id="message" class="textarea">
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6"></textarea>
              </div>
              <div class="submit">
                <input type="submit" class="btn mt-3" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Akhir -->

    {{-- Link Laravel Mulai --}}
    <button type="button" class="btn"><a href="{{ route('week1') }}">Week 1</a></button>
    {{-- Link Laravel Akhir --}}

    <!-- Footer Mulai -->

    <footer>
      <div style="font-size: 2rem" class="socials text-center">
        <a href="https://github.com/zicorociz" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.instagram.com/zicorociz/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/zikrul-khalis/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#service">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Zikrul Khalis</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer Akhir -->


    <!-- Link javaScript -->
    <script src="js/code.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
