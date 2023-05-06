<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Navbar sectie -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="/">
                <span>KTVM</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            OVER ONS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="dropdown-item" href="#">Het Harmonieorkest</a>
                            <a class="dropdown-item" href="#">De opmaat</a>
                            <a class="dropdown-item" href="#">De BBK</a>
                            <a class="dropdown-item" href="#">Bestuur</a>
                            <a class="dropdown-item" href="#">Historie</a>
                            <a class="dropdown-item" href="#">Concertagenda</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DONEER HIER
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a class="dropdown-item" href="#">Word Sponsor</a>
                        </div>
                    </li>
                    <a class="nav-link" href="#">NIEUWS</a>
                    <a class="nav-link" href="/contact">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© <?php echo date('Y') ?> KTVM </p>
      
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
      
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Over Ons</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
 
        </ul>
      
        <style>
          /* Voeg deze stijl toe aan je CSS om de aanpassingen te maken */
          footer .col-md-4 {
            margin: 0 auto; /* centrer de elementen */
          }
      
          footer ul {
            margin-right: 15px; /* ruimte toevoegen tussen het bedrijf en features element */
          }
        </style>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

<script>
    AOS.init();
</script>

</html>
