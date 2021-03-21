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
          <a href="/" class="col-sm-4"><img class="img-fluid logo" src="image/honeyhunt-logo.png" alt="Honey Hunters"></a>

        </div>
      </div>
    </header>

    <main>
        <section id="add-comment">
          <div class="container">

            <form id="add-comment-form" name="comment_form" class="" action="" method="post">
              <div class="row add-comment-input-block">
                <div class="col-5 add-comment-left-side">
                  <div class="row form-group mb-0">
                    <label for="name">Имя</label>
                    <input class="form-control" id="name" autocomplete="off" type="text" name="name" value="" required>
                  </div>
                  <div class="row form-group mb-0">
                    <label for="email">E-Mail</label>
                    <input class="form-control" id="email" autocomplete="off" type="email" name="email" value="" required>
                  </div>
                </div>
                <div class="offset-1 col-6 add-comment-right-side">
                  <div class="form-group">
                    <label for="comment">Комментарий</label>
                    <textarea class="form-control comment-textarea" id="comment" name="comment" required></textarea>
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

                <div class="comments-item">
                  <div class="comments-item-author d-flex align-items-center justify-content-center">
                    Вася
                  </div>
                  <div class="comments-item-email">
                    vasya@mail.ru
                  </div>
                  <div class="comments-item-text">
                    Сообщение от Василия Пупкина.
                  </div>
                </div>

                <div class="comments-item">
                  <div class="comments-item-author d-flex align-items-center justify-content-center">
                    Маруся
                  </div>
                  <div class="comments-item-email">
                    marysia@mail.ru
                  </div>
                  <div class="comments-item-text">
                    Всем привет, я Маруся
                  </div>
                </div>

                <div class="comments-item">
                  <div class="comments-item-author d-flex align-items-center justify-content-center">
                    Вася
                  </div>
                  <div class="comments-item-email">
                    vasya@mail.ru
                  </div>
                  <div class="comments-item-text">
                    Сообщение от Василия Пупкина.
                  </div>
                </div>

                <div class="comments-item">
                  <div class="comments-item-author d-flex align-items-center justify-content-center">
                    Маруся
                  </div>
                  <div class="comments-item-email">
                    marysia@mail.ru
                  </div>
                  <div class="comments-item-text">
                    Всем привет, я Маруся
                  </div>
                </div>

                <div class="comments-item">
                  <div class="comments-item-author d-flex align-items-center justify-content-center">
                    Вася
                  </div>
                  <div class="comments-item-email">
                    vasya@mail.ru
                  </div>
                  <div class="comments-item-text">
                    Сообщение от Василия Пупкина.
                  </div>
                </div>

            </div>
          </div>
        </section>

    </main>

    <footer>
      <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
          <img class="img-fluid col-lg-3 footer-logo" src="image/honeyhunt-logo.png" alt="Honey Hunters">
          <div class="social-nets d-flex justify-content-between">
            <a href="https://vk.com/" class="socnet-button-link d-flex align-items-center justify-content-center"><i class="fab fa-vk"> <span class="socnet-link-text">VK</span> </i></a>
            <a href="https://www.facebook.com/" class="socnet-button-link d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"> <span class="socnet-link-text">facebook</span> </i></a>
          </div>

        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="module" src="js/script.js"></script>
  </body>
</html>
