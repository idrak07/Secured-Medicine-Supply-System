
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DGDA|Biography</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    
    <style type="text/css">
        .navbar .dropdown-toggle, .navbar .dropdown-menu a {
          cursor: pointer;
        }

        .navbar .dropdown-item.active, .navbar .dropdown-item:active {
            color: inherit;
            text-decoration: none;
            background-color: inherit;
        }

        .navbar .dropdown-item:focus, .navbar .dropdown-item:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        @media (min-width: 767px) {
            .navbar .dropdown-toggle:not(.nav-link)::after {
                display: inline-block;
                width: 0;
                height: 0;
                margin-left: .5em;
                vertical-align: 0;
                border-bottom: .3em solid transparent;
                border-top: .3em solid transparent;
                border-left: .3em solid;
            }
        }
        #header{
          color: #343a40;
          font-family: Cambria;
          font-size:  50px;
        }
         #secondHeader{
          font-family: Times New Roman;
          font-size:  25px;
        }
        #backImage{
          background-image: url("./../medicine.jpg");
          background-color: #cccccc;
          background-size: 100%;
        }
        table{
          padding: 150px;
        }

        .footer-distributed{
          background-color: #292c2f;
          box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
          box-sizing: border-box;
          width: 100%;
          text-align: left;
          font: bold 16px sans-serif;

          padding: 40px 50px;
          margin-top: 80px;
        }
        footer{
          /*position: fixed;*/
          /*bottom: 0;*/
        }

        @media (max-height:800px){
          footer { position: static; }
        }
        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
          display: inline-block;
          vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left{
          width: 40%;
        }

        /* The company logo */

        .footer-distributed h3{
          color:  #ffffff;
          font: normal 25px 'Cookie', cursive;
          margin: 0;
        }

        .footer-distributed h3 span{
          color:  #5383d3;
        }

        /* Footer links */

        .footer-distributed .footer-links{
          color:  #ffffff;
          margin: 20px 0 12px;
          padding: 0;
        }

        .footer-distributed .footer-links a{
          display:inline-block;
          line-height: 1.8;
          text-decoration: none;
          color:  inherit;
        }

        .footer-distributed .footer-company-name{
          color:  #8f9296;
          font-size: 14px;
          font-weight: normal;
          margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center{
          width: 35%;
        }

        .footer-distributed .footer-center i{
          background-color:  #33383b;
          color: #ffffff;
          font-size: 25px;
          width: 38px;
          height: 38px;
          border-radius: 50%;
          text-align: center;
          line-height: 42px;
          margin: 10px 15px;
          vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope{
          font-size: 17px;
          line-height: 38px;
        }

        .footer-distributed .footer-center p{
          display: inline-block;
          color: #ffffff;
          vertical-align: middle;
          margin:0;
        }

        .footer-distributed .footer-center p span{
          display:block;
          font-weight: normal;
          font-size:14px;
          line-height:2;
        }

        .footer-distributed .footer-center p a{
          color:  #5383d3;
          text-decoration: none;;
        }


        /* Footer Right */

        .footer-distributed .footer-right{
          width: 20%;
        }

        .footer-distributed .footer-company-about{
          line-height: 20px;
          color:  #92999f;
          font-size: 13px;
          font-weight: normal;
          margin: 0;
        }

        .footer-distributed .footer-company-about span{
          display: block;
          color:  #ffffff;
          font-size: 14px;
          font-weight: bold;
          margin-bottom: 20px;
        }

        .footer-distributed .footer-icons{
          margin-top: 25px;
        }

        .footer-distributed .footer-icons a{
          display: inline-block;
          width: 35px;
          height: 35px;
          cursor: pointer;
          background-color:  #33383b;
          border-radius: 2px;

          font-size: 20px;
          color: #ffffff;
          text-align: center;
          line-height: 35px;

          margin-right: 3px;
          margin-bottom: 5px;
        }

        /* If you don't want the footer to be responsive, remove these media queries */

        @media (max-width: 880px) {

          .footer-distributed{
            font: bold 14px sans-serif;
          }

          .footer-distributed .footer-left,
          .footer-distributed .footer-center,
          .footer-distributed .footer-right{
            display: block;
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
          }

          .footer-distributed .footer-center i{
            margin-left: 0;
          }

        }
        
    </style>
    
</head>
<body>
    <div class="">
      <table id="backImage" border="0" width="100%">
        <tr>
          <td width="50%" height="150px" id="header">&nbsp;Secured Medicine Supply System</td>
          <td  width="50%" align="right" valign="bottom" id="secondHeader"><i>Software Project 2 &nbsp;&nbsp;</i></td>
        </tr>
        <tr>
        </tr>
      </table>
    </div>

  <div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation" width="100%">
      <a class="navbar-brand" href="/dgda">DGDA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                  <a class="nav-link" href="/dgda">Home</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="/dgda/background">Backround</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/dgda/biography">Biography<span class="sr-only">(current)</span></a>
              </li>
              
              
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pharmacies</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1">
                      <li class="dropdown-item" href="/dgda/pharmacies/requests" ><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/requests">New Pharmacy Requests</a></li>
                      <li class="dropdown-item dropdown">
                          <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">See Pharmacy List</a>
                          <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                              <li class="dropdown-item" href="/dgda/pharmacies/allopathicRetailPharmacyView"><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/allopathicRetailPharmacyView">Allopathic Retail Pharmacy</a></li>
                              <li class="dropdown-item" ><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/ayurvedic-retail-pharmacy-view">Ayurvedic Retail Pharmacy</a></li>
                              <li class="dropdown-item" ><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/unani-retail-pharmacy-view">Unani Retail Pharmacy</a></li>
                              <li class="dropdown-item" ><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/herbal-retail-pharmacy-view">Herbal Retail Pharmacy</a></li>
                              <li class="dropdown-item" ><a style="text-decoration:none;color: inherit;" href="/dgda/pharmacies/homeopathic-and-biochemic-retail-pharmacy-view">Homeopathic and Biochemic Retail Pharmacy</a></li>
                              <li class="dropdown-item" ><a style="text-decoration:none;color: inherit;" href="https://www.dgda.gov.bd/index.php/pharmacies/whole-sale-pharmacy-view-2">Model Pharmacy</a></li>
                              
                          </ul>
                      </li>
                  </ul>
              </li> -->
              <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown2">
                      <li class="dropdown-item" href="#"><a>Action 2 A</a></li>
                      <li class="dropdown-item" href="#"><a>Action 2 B</a></li>
                      <li class="dropdown-item" href="#"><a>Action 2 C</a></li>
                      <li class="dropdown-item dropdown">
                          <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                          <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                              <li class="dropdown-item" href="#"><a>Action 2.1 A</a></li>
                              <li class="dropdown-item" href="#"><a>Action 2.1 B</a></li>
                              <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                              <li class="dropdown-item dropdown">
                                  <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                      <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                      <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                      <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-item dropdown">
                                  <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                      <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                      <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                      <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li> -->
          </ul>
          <!-- <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
          
      </div>
      <ul class="navbar-nav mr-auto mt-2 mt-md-0" >
            <li class="nav-item" >
              <a class="nav-link active" href="/logout">Logout</a>
            </li>
          </ul>
  </div>

  <main role="main" class="container">
      <div class=" text-center">
          <h1 >Biography<br><br> </h1>
          <img src="./../Mahbubur_Rahman.jpg">
          <br><h3>Major General Md Mahbubur Rahman, <i>DPH, MCPH, MMEd</i><br></h3>
          <p>Director General<br>Directorate General of Drug Administration<br>Ministry of Health & Family Welfare<br> Health Services Division<br>Government of the People's Republic of Bangladesh</p>
      </div>
  </main>
  <footer class="footer-distributed">

        <div class="footer-left">

          <h3>Directorate General of Drug Administration<span><!-- logo --></span></h3>

          <p class="footer-links">
            <a href="https://www.dgda.gov.bd">Home</a>
            ·
            <a href="https://www.dgda.gov.bd/index.php/site-map">Site-Map</a>
            ·
            <a href="https://www.dgda.gov.bd/index.php/related-links">Related-Links</a>
            ·
            <a href="https://www.dgda.gov.bd/index.php/downloads/background">About</a>
            ·
            <a href="https://www.dgda.gov.bd/index.php/faqs">Faq</a>
            ·
            <a href="#">Contact</a>
          </p>

          <p class="footer-company-name">Directorate General of Drug Administration &copy; 2013</p>
        </div>

        <div class="footer-center">

          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Aushad Bhavan, Mohakhali</span> Dhaka-1212, Bangladesh</p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p> 8802 9880803, 9880864, <br>9880897, 9880924</p>
          </div>

          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="https://gmail.com/" data-cfemail="" target="_blank">dgda.gov@gmail.com</span></a></p>
          </div>

        </div>

        <div class="footer-right">

          <p class="footer-company-about">
            <span>Software Project 2</span>
            Prepared By <br>Muntakim Islam Idrak<br>Robiul Hoque<br>Habiba <br>Shoaib
          </p>

          <div class="footer-icons">

            <a href="https://www.facebook.com/m.i.idrak/"><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/idrak07"><i class="fa fa-github"></i></a>

          </div>

        </div>

  </footer>

  <!-- Script for navigation Bar -->

  <script type="text/javascript">
    $(document).ready(function () {

        $('.navbar .dropdown-item').on('click', function (e) {
            var $el = $(this).children('.dropdown-toggle');
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');

            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop , "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
        });

        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
            $(this).find('li.dropdown').removeClass('show open');
            $(this).find('ul.dropdown-menu').removeClass('show open');
        });

    });

  </script>

</body>
</html>
