<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tanah Longsor</title>
    <link rel="shortcut icon" href="assets/image/icon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;600;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/landingLayout.css" />

    <style>
    .gini:hover {
        color: #cb6040;
        text-decoration: none;
    }
    </style>
</head>

<body style="
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f2e5bf;
      overflow-x: hidden;
    ">
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand" href="#">
            <img src="assets/image/logo.png" height="60" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link active" href="index.php" style="color: #cb6040;">Beranda</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link" href="berita.php" style="color: black;">Berita</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link" href="tentang.php" style="color: black;">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="call-center-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1.5rem">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <p>Call Center</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="banner">
        <div class="banner-overlay"></div>
        <div class="container text-center">
            <div class="banner-content">
                <img src="assets/image/tittle.png" class="img-fluid" alt="Title Image" style="margin-top: 7rem;" />
                <p class="banner-text mt-4" style="
              background-color: rgba(242, 229, 191, 0.8);
              padding: 1rem 2rem;
              color: black;
              font-weight: 600;
              border-radius: 2rem;
            ">
                    salah satu jenis gerakan massa tanah atau batuan, ataupun
                    percampuran keduanya, menuruni lereng akibat terganggunya kestabilan
                    tanah atau batuan penyusun lereng.
                </p>
            </div>
        </div>
    </section>
    <script src="assets/js/landing.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>