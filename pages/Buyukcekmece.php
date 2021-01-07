<!DOCTYPE html>
<html lang="en">
<head>   
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Büyükçekmece</title>
    <!-- dropdown css import -->
    <!-- <link rel="stylesheet" href="public/css/dropdown.css" -->
    <!--bootstrap import-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--chart.js import-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--jquery import-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Navbar starts -->

    <nav class="row navbar fixed-top navbar-dark mb-5 bg-dark py-4">
        
        <div class="col-md-3"> 
            <div class="dropdown">
                <button class="navbar-toggler" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="Beylikduzu.php">Beylikdüzü</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="Buyukcekmece.php">Büyükçekmece</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="Avcilar.php">Avcılar</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-white">
                <h2>İstanbul Macfit Spor Salonları Alet Kullanım Oranları</h2>
            </div>
        </div>
        <div class="col-md-2"></div>

      
        
    </nav>


    <!-- Navbar ends -->


<!-- Daily Data for Beylikduzu Starts-->


    <div class="container justify-content-center my-4">

        <h3 class="d-flex justify-content-center" id="gun"></h3>

        <!-- Graph div -->

        <canvas class="my-5" id="gunlukbcekmece" width="50" height="25" style="width: 50%; height: 50%"/>

    </div>

        <!-- Radio buttons -->

    <div id="radioDiv" class="d-flex justify-content-center my-5">
        <div class="form-check form-check-inline justify-content-center">

            <input class="form-check-input" type="radio" name="bcekmecegraphgunluk" checked onclick="DailyBuyukcekmece()" value="pie">
            <label class="form-check-label mr-3" for="pie">Pie Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphgunluk" onclick="DailyBuyukcekmece()" value="bar">
            <label class="form-check-label mr-3" for="bar">Bar Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphgunluk" onclick="DailyBuyukcekmece()" value="line">
            <label class="form-check-label mr-3" for="line">Line Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphgunluk" onclick="DailyBuyukcekmece()" value="radar">
            <label class="form-check-label mr-3" for="radar">Radar Grafiği</label>

        </div>
    </div>

    
    <hr>

<!-- Daily Data for Beylikduzu Ends -->


<!-- Weekly Data for Beylikduzu -->

    <div class="container justify-content-center my-5">

        <h3 class="d-flex justify-content-center" id="hafta"></h3>

        <!-- Graph div -->

        <canvas class="my-5" id="haftalikbcekmece" width="50" height="25" style="width: 50%; height: 50%"/>

    </div>

    <!-- Radio buttons -->

    <div id="radioDiv" class="d-flex justify-content-center my-5">
        <div class="form-check form-check-inline justify-content-center">

            <input class="form-check-input" type="radio" name="bcekmecegraphhaftalik" checked onclick="WeeklyBuyukcekmece()" value="pie">
            <label class="form-check-label mr-3" for="pie">Pie Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphhaftalik" onclick="WeeklyBuyukcekmece()" value="bar">
            <label class="form-check-label mr-3" for="bar">Bar Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphhaftalik" onclick="WeeklyBuyukcekmece()" value="line">
            <label class="form-check-label mr-3" for="line">Line Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphhaftalik" onclick="WeeklyBuyukcekmece()" value="radar">
            <label class="form-check-label mr-3" for="radar">Radar Grafiği</label>

        </div>
    </div>


    <hr>

<!-- Weekly Data for Buyukcekmece Ends -->


<!-- Monthly Data for Buyukcekmece Starts -->


<div class="container justify-content-center my-5">

        <h3 class="d-flex justify-content-center" id="ay"></h3>

        <!-- Graph div -->

        <canvas class="my-5" id="aylikbcekmece" width="50" height="25" style="width: 50%; height: 50%"/>

    </div>

    <!-- Radio buttons -->

    <div id="radioDiv" class="d-flex justify-content-center my-5">
        <div class="form-check form-check-inline justify-content-center">

            <input class="form-check-input" type="radio" name="bcekmecegraphaylik" checked onclick="MonthlyBuyukcekmece()" value="pie">
            <label class="form-check-label mr-3" for="pie">Pie Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphaylik" onclick="MonthlyBuyukcekmece()" value="bar">
            <label class="form-check-label mr-3" for="bar">Bar Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphaylik" onclick="MonthlyBuyukcekmece()" value="line">
            <label class="form-check-label mr-3" for="line">Line Grafiği</label>

            <input class="form-check-input" type="radio" name="bcekmecegraphaylik" onclick="MonthlyBuyukcekmece()" value="radar">
            <label class="form-check-label mr-3" for="radar">Radar Grafiği</label>

        </div>
    </div>


    <hr>

<!-- Monthly Data for Buyukcekmece Ends -->


    
<!-- Script begins -->

<!-- Boostrap scripts -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- JQuery -->

<script src="../public/js/Buyukcekmece/dailyBuyukcekmece.js"></script>
<script src="../public/js/Buyukcekmece/weeklyBuyukcekmece.js"></script>
<script src="../public/js/Buyukcekmece/monthlyBuyukcekmece.js"></script>



</body>
</html>