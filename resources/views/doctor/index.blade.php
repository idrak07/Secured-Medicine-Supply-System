
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Doctor|HOME</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    
    <style type="text/css">
      #rcorners 
      {
        border-radius: 5px;
      } 
      /*table*/
        #viewtable {
          border-collapse: collapse;
          width: 100%;
        }

        #viewTbaleData {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
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
      <a class="navbar-brand" href="/doctr">NBR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                  <a class="nav-link" href="/nbr">Home</a>
              </li>
              
              
              
              
          </ul>
          
          
      </div>
      
      <ul class="navbar-nav mr-auto mt-2 mt-md-0" >
            <li class="nav-item" >
              <a class="nav-link active" href="/logout">Logout</a>
            </li>
          </ul>
  </div>
  <main role="main" class="container">
      <div class=" text-center">

              <h3 align="center">Prescribe Patient</h3>


              <form method = "POST" action = "/doctor">
                @csrf
                <table id="setface" border="0" align="center" width="60%"  style=" font-family: Courier-New;" align="justify"> 
                    
                    <tr style="height: 50px">
                        <td id="labelSet"><b>Patient Name  </b></td>
                        <td>
                          <input id="rcorners" style="height:40px;font-size:14pt;" type="text" name="patientname" size="40" placeholder="Write Patient Name " >
                        </td>

                    </tr>

                    <tr style="height: 50px">
                        <td id="labelSet"><b>Patient Contact No </b></td>
                        <td>
                          <input id="rcorners" style="height:40px;font-size:14pt;" min="11" max="11" type="text" name="patientcontactno" size="40" placeholder="Write Patient Mobile No" >
                        </td>

                    </tr>
                    <tr style="height: 50px">
                        <td id="labelSet"><b>Patient Age</b></td>
                        <td>
                          <select name="patientage" id="rcorners" style="height:40px;width: 420px;font-size:14pt;">
                            <option>Select age</option>
                            @for ($p = 1; $p < 12; $p++)
                            <option value="{{$p}} month">{{$p}} month</option>
                            @endfor

                            @for ($p = 1; $p < 10; $p++)
                            <option value="0{{$p}} year">0{{$p}} year</option>
                            @endfor
                            @for ($p = 10; $p < 150; $p++)
                            <option value="{{$p}} year">{{$p}} year</option>
                            @endfor
                          </select>
                     </td>

                    </tr>
                    <tr style="height: 50px">
                        <td id="labelSet"><b>Patient Gender</b></td>
                        <td>
                          <input id="rcorners" style="height:40px;font-size:14pt;" type="text" name="patientgender" size="40" placeholder="Write Patient Gender" >
                        </td>

                    </tr>
                    <tr style="height: 50px">
                        <td id="labelSet"><b>Patient Problem Description</b></td>
                        <td>
                          <textarea id="rcorners" style="height:100px;font-size:14pt; width: 420px;"  name="patientDesc" placeholder="Write Patient's problem"></textarea><br><br>
                        </td>

                    </tr>

                </table>
                <table id="setface" border="0" align="center" width="100%"  style=" font-family: Courier-New;" align="justify"> 
                  @for ($p = 1; $p < 11; $p++)
                    <tr style="height: 40px">
                        <td><b>Prescribed Medicine  {{$p}}  </b></td>
                        <td >
                          <input id="searchunit{{$p}}" style="border-radius: 5px; height:35px;font-size:10pt;" type="text" name="medicine[{{$p}}]" size="20" placeholder="Medicine Name" >
                        </td>
                        <td >
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="morning[{{$p}}]" size="10" placeholder="morning dosage " >&nbsp;
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="afternoon[{{$p}}]" size="10" placeholder="afternoon dosage " >&nbsp;
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="evening[{{$p}}]" size="10" placeholder="evening dosage " >&nbsp;
                        </td>
                        <td>
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="meal[{{$p}}]" size="10" placeholder="Meal time" >&nbsp;
                        </td>
                        <td>
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="days[{{$p}}]" size="10" placeholder="course Days" >&nbsp;
                        </td>
                        <td>
                          <input id="rcorners" style="height:35px;font-size:10pt;" type="text" name="comments[{{$p}}]" size="10" placeholder="Comments" >&nbsp;
                        </td>
                        
                    </tr>
                  @endfor
                </table>
                <br>
                <center>
                  <button type="submit" class="btn btn-success">
                    <a href=""  style="text-decoration: none; color: inherit;">
                       Prescribe
                    </a>
                  </button> 
                  
                </center>
            </form>
              
              

              
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
            Prepared By <br>Muntakim Islam Idrak,Robiul Hoque<br>Habiba, Shoaib
          </p>

          <div class="footer-icons">

            <a href="https://www.facebook.com/m.i.idrak/"><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/idrak07"><i class="fa fa-github"></i></a>

          </div>

        </div>

  </footer>

  <!--Script for navigation Bar -->

  <script type="text/javascript">
    $("#searchunit1").autocomplete({
        source : '{!!URL::route('getDrugname.Search')!!}',
        minLenght:3,
        autoFocus:true,
        select:function(e, ui){
          $('#searchunit1').val(ui.item.brand_name);
        }
      });
    $("#searchunit2").autocomplete({
        source : '{!!URL::route('getDrugname.Search')!!}',
        minLenght:3,
        autoFocus:true,
        select:function(e, ui){
          $('#searchunit2').val(ui.item.brand_name);
        }
      });
    $("#searchunit3").autocomplete({
        source : '{!!URL::route('getDrugname.Search')!!}',
        minLenght:3,
        autoFocus:true,
        select:function(e, ui){
          $('#searchunit3').val(ui.item.brand_name);
        }
      });
    $("#searchunit4").autocomplete({
        source : '{!!URL::route('getDrugname.Search')!!}',
        minLenght:3,
        autoFocus:true,
        select:function(e, ui){
          $('#searchunit4').val(ui.item.brand_name);
        }
      });
    $("#searchunit5").autocomplete({
        source : '{!!URL::route('getDrugname.Search')!!}',
        minLenght:3,
        autoFocus:true,
        select:function(e, ui){
          $('#searchunit5').val(ui.item.brand_name);
        }
      });
    
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
