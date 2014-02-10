<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Hungry Hub -- Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/hungryhub.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logotype/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body id="home">
    <!-- NAV BAR -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-sr-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logotype/hh-symbol.png" class="img-responsive"></a>
        </div>
        <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-sr-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="#">RESTAURANTS</a>
              <ul>
                <li><a href="#">Featured</a></li>
                <li><a href="#">Most Popular</a></li>
                <li><a href="#">View All Restaurants</a></li>
              </ul>
              <!-- Sub Menu End -->
            </li>
            <!-- /.RESTAURANTS -->
          </ul>
          <!-- /.nav -->

          <form class="navbar-form navbar-left" role="search">
            <div class="input-group">
              <input type="text" class="form-control flat navbar-btn" placeholder="Search by restaurant, location, cuisine">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-primary navbar-btn"><span class="fui-search"></span></button>
              </div>
            </div>
            <!-- /.form-group -->
          </form>
          <!-- /.form -->
          
          <ul class="nav navbar-nav navbar-right">
            <li><button type="button" class="btn btn-link navbar-btn navbar-right">LOG IN</button></li>
            <li><button type="button" class="btn btn-inverse-link navbar-btn navbar-right">SIGN UP</button></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOR YOUR BUSINESS <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Home Layout 1</a></li>
                <li><a href="#">Home Layout 2</a></li>
                <li><a href="#">Home Layout 3</a></li>
              </ul>
            </li>
            <!-- /.RESTAURANTS -->
          </ul>
          <!-- /.nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div clas="table-responsive">
      <table class="table">
        <!-- TABLE HEADER START -->
        <thead>
              <tr>
                <th class="th-green">Currency</th>
                <th class="th-blue">Denomination</th>
                <th class="th-green-dark">Buying Rate</th>
                <th class="th-blue">Selling Rate</th>
              </tr>
        </thead>
        <!-- TABLE HEADER END -->

        <!-- TABLE BODY START -->
        <tbody>
          <tr>
            <td rowspan="5"><img src="images/flags/USD.png"> USD<br><small>United States</small></td>
            <td class="denom">100</td>
            <td class="currency-buying">31.63</td>
            <td class="currency-selling">31.68</td>
          </tr>
          <!-- USD 100 -->
          <tr>
            <td class="denom">50</td>
            <td class="currency-buying">31.58</td>
            <td class="currency-selling">31.68</td>
          </tr>
          <!-- USD 50 -->
          <tr>
            <td class="denom">20-10</td>
            <td class="currency-buying">31.48</td>
            <td class="currency-selling">31.58</td>
          </tr>
          <!-- USD 20-10 -->
          <tr>
            <td class="denom">5</td>
            <td class="currency-buying">31.38</td>
            <td class="currency-selling">31.58</td>
          </tr>
          <!-- USD 5 -->
          <tr>
            <td class="denom">1</td>
            <td class="currency-buying">31.03</td>
            <td class="currency-selling">31.38</td>
          </tr>
          <!-- USD 1 -->
          <tr>
            <td rowspan="2"><img src="images/flags/GBP.png"> GBP<br><small>United Kingdom</small></td>
            <td></td>
            <td class="currency-buying">50.55</td>
            <td class="currency-selling">50.70</td>
          </tr>
          <!-- GBP -->
          <tr>
            <td class="denom">20-5</td>
            <td class="currency-buying">50.45</td>
            <td class="currency-selling">50.70</td>
          </tr>
          <!-- GBP 20-5 -->
          <tr>
            <td rowspan="3"><img src="images/flags/EUR.png"> EUR<br><small>European Union</small></td>
            <td class="denom">500-100</td>
            <td class="currency-buying">42.25</td>
            <td class="currency-selling">42.30</td>
          </tr>
          <!-- EUR 500-100 -->
          <tr>
            <td class="denom">50</td>
            <td class="currency-buying">42.20</td>
            <td class="currency-selling">42.30</td>
          </tr>
          <!-- EUR 50 -->
          <tr>
            <td class="denom">20-5</td>
            <td class="currency-buying">42.15</td>
            <td class="currency-selling">42.30</td>
          </tr>
          <!-- EUR 20-5 -->
          <tr>
            <td rowspan="2"><img src="images/flags/CHF.png"> CHF<br><small>Switzerland</small></td>
            <td class="denom">1000-100</td>
            <td class="currency-buying">34.25</td>
            <td class="currency-selling">34.30</td>
          </tr>
          <!-- CHF 1000-100 -->
          <tr>
            <td class="denom">50</td>
            <td class="currency-buying">34.15</td>
            <td class="currency-selling">34.35</td>
          </tr>
          <!-- CHF 50 -->
          <tr>
            <td><img src="images/flags/AUD.png"> AUD<br><small>Australia</small></td>
            <td class="denom"></td>
            <td class="currency-buying">29.60</td>
            <td class="currency-selling">29.70</td>
          </tr>
          <!-- AUD -->
          <tr>
            <td rowspan="2"><img src="images/flags/JPY.png"> JPY<br><small>Japan</small></td>
            <td class="denom">10000-5000</td>
            <td class="currency-buying">0.3185</td>
            <td class="currency-selling">0.3200</td>
          </tr>
          <!-- JPY 10000-5000 -->
          <tr>
            <td class="denom">1000</td>
            <td class="currency-buying">0.1375</td>
            <td class="currency-selling">0.3200</td>
          </tr>
          <!-- JPY 1000 -->
          <tr>
            <td rowspan="3"><img src="images/flags/MYR.png"> MYR<br><small>Malaysia</small></td>
            <td class="denom">100-50</td>
            <td class="currency-buying">9.83</td>
            <td class="currency-selling">9.86</td>
          </tr>
          <!-- MYR 100-50 -->
          <tr>
            <td class="denom">10-5</td>
            <td class="currency-buying">9.73</td>
            <td class="currency-selling">9.86</td>
          </tr>
          <!-- MTR 10-5 -->
          <tr>
            <td class="denom">2-1</td>
            <td class="currency-buying">9.63</td>
            <td class="currency-selling">9.86</td>
          </tr>
          <!-- MYR 2-1 -->
          <tr>
            <td><img src="images/flags/SGD.png"> SGD<br><small>Singapore</small></td>
            <td></td>
            <td class="currency-buying">25.25</td>
            <td class="currency-selling">25.35</td>
          </tr>
          <!-- SGD -->
          <tr>
            <td><img src="images/flags/HKD.png"> HKD<br><small>Hong Kong</small></td>
            <td></td>
            <td class="currency-buying">4.06</td>
            <td class="currency-selling">4.08</td>
          </tr>
          <!-- HKD -->
          <tr>
            <td><img src="images/flags/CAD.png"> CAD<br><small>Canada</small></td>
            <td></td>
            <td class="currency-buying">30.10</td>
            <td class="currency-selling">30.20</td>
          </tr>
          <!-- CAD -->
          <tr>
            <td><img src="images/flags/DKK.png"> DKK<br><small>Denmark</small></td>
            <td></td>
            <td class="currency-buying">5.62</td>
            <td class="currency-selling">5.65</td>
          </tr>
          <!-- DKK -->
          <tr>
            <td><img src="images/flags/NOK.png"> NOK<br><small>Norway</small></td>
            <td></td>
            <td class="currency-buying">5.10</td>
            <td class="currency-selling">50.13</td>
          </tr>
          <!-- NOK -->
          <tr>
            <td><img src="images/flags/SEK.png"> SEK<br><small>Sweden</small></td>
            <td></td>
            <td class="currency-buying">4.76</td>
            <td class="currency-selling">4.79</td>
          </tr>
          <!-- SEK -->
          <tr>
            <td><img src="images/flags/TWD.png"> TWD<br><small>Taiwan</small></td>
            <td></td>
            <td class="currency-buying">1.075</td>
            <td class="currency-selling">1.085</td>
          </tr>
          <!-- TWD -->
          <tr>
            <td rowspan="2"><img src="images/flags/KRW.png"> KRW<br><small>South Korea</small></td>
            <td class="denom">50000-5000</td>
            <td class="currency-buying">0.0298</td>
            <td class="currency-selling">0.0300</td>
          </tr>
          <!-- KRW 50000-5000 -->
          <tr>
            <td class="denom">1000</td>
            <td class="currency-buying">0.0278</td>
            <td class="currency-selling">0.0300</td>
          </tr>
          <!-- KRW 1000 -->
          <tr>
            <td><img src="images/flags/CNY.png"> CNY<br><small>China</small></td>
            <td></td>
            <td class="currency-buying">5.16</td>
            <td class="currency-selling">5.18</td>
          </tr>
          <!-- CNY -->
          <tr>
            <td><img src="images/flags/PHP.png"> PHP<br><small>Philippines</small></td>
            <td></td>
            <td class="currency-buying">0.720</td>
            <td class="currency-selling">0.730</td>
          </tr>
          <!-- PHP -->
          <tr>
            <td><img src="images/flags/NZD.png"> NZD<br><small>New Zealand</small></td>
            <td></td>
            <td class="currency-buying">26.05</td>
            <td class="currency-selling">26.20</td>
          </tr>
          <!-- NZD -->
          <tr>
            <td><img src="images/flags/SAR.png"> SAR<br><small>Saudi Arabia</small></td>
            <td></td>
            <td class="currency-buying">8.35</td>
            <td class="currency-selling">8.45</td>
          </tr>
          <!-- SAR -->
          <tr>
            <td><img src="images/flags/AED.png"> AED<br><small>Arab Emirates</small></td>
            <td></td>
            <td class="currency-buying">8.50</td>
            <td class="currency-selling">8.60</td>
          </tr>
          <!-- AED -->
          <tr>
            <td><img src="images/flags/QAR.png"> QAR<br><small>Qatar</small></td>
            <td></td>
            <td class="currency-buying">8.55</td>
            <td class="currency-selling">8.65</td>
          </tr>
          <!-- QAR -->
          <tr>
            <td><img src="images/flags/OMR.png"> OMR<br><small>Oman</small></td>
            <td></td>
            <td class="currency-buying">81.20</td>
            <td class="currency-selling">82.00</td>
          </tr>
          <!-- OMR -->
          <tr>
            <td><img src="images/flags/BHD.png"> BHD<br><small>Bahrain</small></td>
            <td></td>
            <td class="currency-buying">82.70</td>
            <td class="currency-selling">83.50</td>
          </tr>
          <!-- BHD -->
          <tr>
            <td><img src="images/flags/KWD.png"> KWD<br><small>Kuwait</small></td>
            <td></td>
            <td class="currency-buying">108.70</td>
            <td class="currency-selling">109.50</td>
          </tr>
          <!-- KWD -->
          <tr>
            <td><img src="images/flags/ZAR.png"> ZAR<br><small>South African</small></td>
            <td></td>
            <td class="currency-buying">3.05</td>
            <td class="currency-selling">3.20</td>
          </tr>
          <!-- ZAR -->
          <tr>
            <td><img src="images/flags/IDR.png"> IDR<br><small>Indonesian</small></td>
            <td>IDR (1000)</td>
            <td class="currency-buying">2.67</td>
            <td class="currency-selling">2.82</td>
          </tr>
          <!-- IDR -->
          <tr>
            <td><img src="images/flags/INR.png"> INR<br><small>India</small></td>
            <td></td>
            <td class="currency-buying">0.495</td>
            <td class="currency-selling">0.505</td>
          </tr>
          <!-- INR -->
          <tr>
            <td><img src="images/flags/SCOT.png"> SCOT<br><small>Scotland</small></td>
            <td></td>
            <td class="currency-buying">49.70</td>
            <td class="currency-selling">50.20</td>
          </tr>
          <!-- SCOT -->
          <tr>
            <td><img src="images/flags/VND.png"> VND<br><small>Vietnam</small></td>
            <td>VND (1000)</td>
            <td class="currency-buying">1.46</td>
            <td class="currency-selling">1.51</td>
          </tr>
          <!-- VND -->
          <tr>
            <td><img src="images/flags/RUB.png"> RUB<br><small>Russian</small></td>
            <td></td>
            <td class="currency-buying">0.950</td>
            <td class="currency-selling">0.960</td>
          </tr>
          <!-- RUB -->
          <tr>
            <td><img src="images/flags/BND.png"> BND<br><small>Brunei</small></td>
            <td></td>
            <td class="currency-buying">25.10</td>
            <td class="currency-selling">25.25</td>
          </tr>
          <!-- BND -->
          <tr>
            <td><img src="images/flags/MOP.png"> MOP<br><small>Macau</small></td>
            <td></td>
            <td class="currency-buying">3.85</td>
            <td class="currency-selling">3.95</td>
          </tr>
          <!-- MOP -->
        </tbody>
        <!-- TABLE BODY END -->
      </table>
    </div>
    <!-- TABLE RESPONSIVE END -->
        
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/hungryhub.js"></script>

  </body>
</html>