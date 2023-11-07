<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap</title>
    <link rel="stylesheet" href="css/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div
      class="jumbotron-fluid bg-danger shadow text-center"
      style="padding: 24px"
    >
      <h3 class="text-white">Monkey D Luffy kaizoku ou ni ore wa ni naru</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-12">
              <h2>Zikrul Khalis</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                facere temporibus error fuga cum aperiam ut voluptatem. Vero
                provident nobis, asperiores quo deleniti corrupti nesciunt.
              </p>
            </div>
            <div class="row">
              <div class="col-6">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Laborum, blanditiis itaque, veniam quis rerum architecto quod
                  molestiae, optio inventore voluptates vero cupiditate adipisci
                  debitis perspiciatis.
                </p>
              </div>
              <div class="col-6">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Ipsam quam odit, accusantium adipisci accusamus ex obcaecati
                  possimus aliquid maiores eaque, numquam, nam pariatur porro
                  vitae.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="spinner-grow text-muted"></div>
    <div class="spinner-grow text-primary"></div>
    <div class="spinner-grow text-success"></div>
    <div class="spinner-grow text-info"></div>
    <div class="spinner-grow text-warning"></div>
    <div class="spinner-grow text-danger"></div>
    <div class="spinner-grow text-secondary"></div>
    <div class="spinner-grow text-dark"></div>
    <div class="spinner-grow text-light"></div>
    <button class="btn btn-primary">
      <span class="spinner-border spinner-border-sm"></span>
    </button>

    <button class="btn btn-primary">
      <span class="spinner-border spinner-border-sm"></span>
      Loading..
    </button>

    <button class="btn btn-primary" disabled>
      <span class="spinner-border spinner-border-sm"></span>
      Loading..
    </button>

    <button class="btn btn-primary" disabled>
      <span class="spinner-grow spinner-grow-sm"></span>
      Loading..
    </button>
    <div class="container">
      <h2>Simple Collapsible</h2>
      <p>Click on the button to toggle between showing and hiding content.</p>
      <button
        type="button"
        class="btn btn-primary"
        data-toggle="collapse"
        data-target="#demo"
      >
        Simple collapsible
      </button>
      <div id="demo" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </div>
    </div>
  </body>
</html>
