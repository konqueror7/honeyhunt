<?php

?>

<!doctype html>
<html lang="ru" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Honey Hunters</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="fonts/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fonts/fontawesome/css/brands.css" rel="stylesheet">
    <link href="fonts/fontawesome/css/solid.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="container">
        <div class="row">
          <a href="/" class="col-sm-12 col-lg-4"><img class="img-fluid logo" src="image/honeyhunt-logo.png" alt="Honey Hunters"></a>

        </div>
      </div>
    </header>

    <main>
        <section id="add-comment">
          <div class="container">

            <form id="add-comment-form" name="comment_form" class="" action="" method="post">
              <div class="row add-comment-input-block">
                <div class="col-lg-5 col-sm-12 add-comment-left-side">
                  <div class="form-group mb-0 d-flex flex-column justify-content-between">
                    <label for="name">Имя</label>
                    <input class="form-control" id="name" autocomplete="off" type="text" name="name" value="" required title="Введите свое имя">
                  </div>
                  <div class="form-group mb-0 d-flex flex-column justify-content-between">
                    <label for="email">E-Mail</label>
                    <input class="form-control" id="email" autocomplete="off" type="email" name="email" value="" required title="Укажите адрес электронной почты">
                  </div>
                </div>
                <div class="offset-lg-1 col-lg-6 col-sm-12 add-comment-right-side">
                  <div class="form-group d-flex flex-column justify-content-between">
                    <label for="comment">Комментарий</label>
                    <textarea class="form-control comment-textarea" id="comment" name="comment" required title="Оставьте сообщение"></textarea>
                  </div>
                </div>
              </div>
              <div class="row d-flex justify-content-end">
                <button class="btn btn-danger comment-submit" type="submit" name="submit">Записать</button>
              </div>
            </form>


          </div>
        </section>

        <section id="comments">

          <div class="container">
            <div class="row">
              <h1 class="w-100 text-center">Выводим комментарии</h1>

            </div>
            <div class="comments-list row d-flex justify-content-start text-center">

            </div>
          </div>
        </section>

    </main>

    <footer>
      <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-xs-4 footer-logo-block">
            <img class="img-fluid  footer-logo" src="image/honeyhunt-logo.png" alt="Honey Hunters">
          </div>
          <div class="col-xs-6 social-nets-block">
            <div class="social-nets d-flex justify-content-between">
              <a href="https://vk.com/" class="socnet-button-link d-flex align-items-center justify-content-center"><i class="fab fa-vk"> <span class="socnet-link-text">VK</span> </i></a>
              <a href="https://www.facebook.com/" class="socnet-button-link d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"> <span class="socnet-link-text">facebook</span> </i></a>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <script type="module" src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
