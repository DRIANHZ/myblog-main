<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      rel="shortcut icon"
      href="./image/favicion (2).png"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      padding: 0 10%;
      /* background-color: red; */
    }

    .content {
      width: 100%;
      height: 620px;
      animation: randomgradient 5s ease-in-out infinite;
    }

    @keyframes randomgradient {
      0% {
        background-color: #61a0ff;
      }
      50% {
        background-color: #0345a8;
      }
      100% {
        background-color: #61a0ff;
      }
    }
    @keyframes randomcolor {
      0% {
        background-color: #61a0ff;
      }
      50% {
        background-color: #f2c1ff;
      }
      100% {
        background-color: #61a0ff;
      }
    }

    .page-header .ctn-txt h1 {
      font-family: "Nunito Sans", sans-serif;
      font-weight: bold;
      margin-top: 300px;
    }
    .page-header .ctn-txt h6 {
      font-family: "Nunito Sans", sans-serif;
      margin-top: 300px;
    }

    .custom-shape-divider-bottom-1698818968 {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
      transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1698818968 svg {
      position: relative;
      display: block;
      width: calc(100% + 1.3px);
      height: 138px;
    }

    .custom-shape-divider-bottom-1698818968 .shape-fill {
      fill: #ffffff;
    }


    
  </style>
  <body>
 
    <!--TODO tambahin ui + animasi di main page file ini buat sebagus mungkin -->

    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-between mt-2">

          <img src="./image/favicion (2).png" alt="favicion" width="60" />
          <ul class="nav navbar-nav d-inline">
            <li>
              <a
                class="btn btn-default btn-primary rounded-pill"
                href="home/register.php"
                role="button"
                >sing in</a
              >
              <a
                class="btn btn-default btn-primary rounded-pill"
                href="home/login.php"
                role="button"
                >login</a
              >
            </li>
          </ul>

        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">

          <img src="./image/Teks paragraf Anda-PhotoRoom.png-PhotoRoom.png" class="" alt="" style="width: 100%;">
        </div>
        <div class="col-12 col-lg-6  d-flex justify-content-center align-items-center">
          <div class="text-center">
          <h1 class="display-1 text-primary fw-bold" style="text-align: center;">connectline</h1>
            create your own connection with other people in this whole world
          </div>
          
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
