<!DOCTYPE html>
<html>
  <head>
    <title>MK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Dodajemy link do pliku CSS Bootstrapa -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Dodanie linków do biblioteki Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-fxkEh+kX7C1BjK6wbhZq3pZuz06Jz6/Kmrup+eUEyJ2Dd1XaYXYJvkN16H7A8NvRj+Jt1sHtGk7e8IoKj9/7Vw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styl.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Strona główna <span class="sr-only">(current)</span></a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="logowanie.php">Logowanie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rejestracja.php">Rejestracja</a>
          </li>  
        </ul>
      </div>
      <div class="col-sm-3">
			<img src="pwste.png">
		</div>
    </nav>
    <div class="container mt-4">
      
    </div>
    <div class="container" style="max-width: 800px;">
</div>
    <!-- <div class="col-sm-9">
    <form action="logowanieskrypt.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="login" class="form-label">Login:</label>
    <input type="login" class="form-control"  placeholder="Login" name="login">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password"  class="form-control"  placeholder="Hasło" name="pswd">
  </div>

  <button type="submit" class="btn btn-primary">loguj</button>
</form> -->
<div class="container ">
  
  <h2>Rejestracja</h2>
  <form action="rejestracjaskrypt.php" method="POST">
  <div class="form-group">
      <label for="i">Imie:</label>
      <input type="text" class="form-control" placeholder="Podaj imie" name="imie">
    </div>
    <div class="form-group">
      <label for="Nazwisko">Nazwisko:</label>
      <input type="text" class="form-control" placeholder="Podaj nazwisko" name="nazwisko">
    </div>
    <div class="form-group">
      <label for="l">Login:</label>
      <input type="text" class="form-control" placeholder="Podaj login" name="login">
    </div>
    <div class="form-group">
      <label for="p">Hasło:</label>
      <input type="password" class="form-control" placeholder="Podaj hasło" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">OK</button>
  </form>
</div>
    <footer class="bg-dark text-white py-3 fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center text-md-left">
        <p class="mb-0">Projekt - Aplikacje WWW</p> <br>
        PWSTE Czarnieckiego 16, 37-500 Jarosław
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.9570713468916!2d22.6709749159326!3d50.01215982672896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473c9bd00702269d%3A0x34c3e02f77a47069!2sPa%C5%84stwowa%20Wy%C5%BCsza%20Szko%C5%82a%20Techniczno-Ekonomiczna!5e0!3m2!1spl!2spl!4v1679297200763!5m2!1spl!2spl"  height="150" width="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>

      </div>
      <div class="col-md-6 text-center text-md-right">
        <h1> Kontakt: </h1>
      <img src="mail.png" alt="Mail Icon" class="icon">  <span><i class="fas fa-envelope"></i> Email: <a href="mailto:krausmichal44@gmail.com">krausmichal44@gmail.com</a></span> <br>
      <img src="dane.png" alt="Mail Icon" class="icon">  <span><i class="fas fa-envelope"></i>Imie i Nazwisko: Michał Kraus</span> 
    </p>
      </div>
      <!-- <div class="row-md-5 col-md-10/5 text-center text-md-right">
      <img src="dane.png" alt="Mail Icon" class="icon">  <span><i class="fas fa-envelope"></i> Michał Kraus</span> 
       </div> -->
    </div>
    
  </div>
  
</footer>



    <!-- Dodajemy linki do plików JS Bootstrapa -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
