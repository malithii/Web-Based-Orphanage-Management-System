<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="utf-8">
	<title>Our Impact </title>
	<link rel="stylesheet" href="Impact.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
<body>

<div class="con red topBotomBordersOut">
    
    <div>
    <img src="hand.png" width=70px height=70px style="float:left;position:absolute ;top:10px;left:90px; ">
        <span style="float:left;position:absolute ;top:70px;left:16px;font-family:cursive;font-size:15px; ">
        SRI JINANANDA CHILDRENS'
            <br>
            HOME 
        </span>
    </div>
    
  <a href="Home.php">HOME</a>
  <a href="ways%20to%20help.php">WAYS TO HELP</a>
   <a href="Impact.php">OUR IMPACT</a>
  
  <a href="Contact.php">CONTACT</a>
    
 <button  onclick="window.location.href = 'Donate.php';" class="button1" >Donate</button>
    
  

</div>


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Sri Jinananda Orphanage</h1>
    <button onclick="window.location.href='Contact.php';">View more</button>
  </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">orphans</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-seedling fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Staff</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-id-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Average Donations (per month)
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$100</div>
                            </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2"></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Adaptions(per year)
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                            </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2"></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    
</div>


<div class="row">
    
  <div id="myChart" style="width:80%; max-width:900px; height:500px;"></div>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Year', 'Amount'],
  [2007,500],[2008,560],[2009,800],[2010,900],[2011,985],[2012,800],[2013,1000],[2014,1200],[2015,1000],[2016,1200],[2017,1750],[2018,1800],[2019,1750],[2020,2000]
]);
// Set Options
var options = {
  title: 'Donations Overview',
  hAxis: {title: 'Years'},
  vAxis: {title: 'Amount of Donations'},
  legend: 'none'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);
}
</script>


    
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Donations
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Government fund
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Other
                    </span>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Additional resources</h3>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Notices</a></li>
                            <li><a href="#">More info</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3><strong>Contact Us</strong></h3>
                        <p>Sri Jinanda Orphanage Sri Lanka
                            Fund Development and communication office
                            P.O. Box 5, Piliyandala
                            Telephone:+94-11-270 2712
                            Email: donate@jinanadacvsrilanka.org</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Sri Jinanda Orphanage © 2020</p>
            </div>
        </footer>
    </div>


<script src="chart.js/Chart.min.js"></script>
<script src="chart.js/chart-area-demo.js"></script>
<script src="chart.js/chart-pie-demo.js"></script>

</body>
</html>