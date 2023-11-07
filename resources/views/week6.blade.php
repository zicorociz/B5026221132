<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JavaScript</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Poppins:wght@100;300;400;700&family=Skranji:wght@700&display=swap"
      rel="stylesheet"
    />
    <script>
      function changeText() {
        var span = document.getElementById("output");
        var textBox = document.getElementById("textbox");
        textbox.style.color = "green";
        textbox.style.fontSize = "13pt";
        textbox.style.fontFamily = "Comic Sans MS";
        span.className = "text-success";
        span.innerHTML = textbox.value;
        hadiah();
      }
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <script src="js1.js"></script>

      <center>
        <button class="btn btn-warning" onclick="hadiah();">Klik WOY!</button>
      </center>
      <br />
      <button onclick="changeText();">Click me!</button>
      <span id="output">replace me</span><br />
      <input id="textbox" type="text" />
    </div>
  </body>
</html>
