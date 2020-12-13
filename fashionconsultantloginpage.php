<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Confi-Couture">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>fashionconsultantloginpage</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="fashionconsultantloginpage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.0.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
    </style>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/Screenshot28.png"
}</script>
    <meta property="og:title" content="fashionconsultantloginpage">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-gradient u-header u-valign-middle u-header" id="sec-d7e0"><div class="u-container-style u-custom-color-4 u-expanded-width u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-1">CONFI-COUTURE</h1>
          <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="541" data-image-height="238">
            <img src="images/Screenshot28.png" class="u-logo-image u-logo-image-1" data-image-width="213.1396">
          </a>
        </div>
      </div></header>
    <section class="u-clearfix u-section-2" id="carousel_c879">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">BOOKINGS</h2>
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <?php
              include_once "conn.php";
              $connection = new Connection();
              $sql = "SELECT * FROM booking";
              $result = $connection->get_connection()->query($sql);
              // $row =$result->fetch_array();
              if($result){
                if($result->num_rows > 0){
                  echo "<table>";
                    echo "<tr>";
                      echo "<th><b>NAME</b?</th>";
                      echo "<th><b>EMAIL</b></th>";
                      echo "<th><b>PHONE</b></th>";
                      echo "<th><b>DATE<b></th>";
                      echo "<th><b>TIME<b></th>"; 
                    echo "</tr>";

                  while($row =$result->fetch_array()){
                    echo "<tr>";
                      echo "<td>" . $row['Name'] . "</td>";
                      echo "<td>" . $row['Email'] . "</td>";
                      echo "<td>" . $row['Phone'] . "</td>";
                      echo "<td>" . $row['Date'] . "</td>";
                      echo "<td>" . $row['Time'] . "</td>";
                    echo "</tr>";
                    
                  }
                  echo "</table>";
                } else{
                    echo "No records matching your query were found.";
                }
              } else{
                echo "ERROR: Could not able to execute $sql. " . $connection->error;
              }
              // Close connection
              // $connection->close();
              ?>
      </div>
    </section>
    
    <a href="index.html" data-page-id="180418496" class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-50 u-btn-1">LOG OUT<br>
    </a>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0c68"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">All rights reserved.&nbsp;</p>
      </div></footer>
    </section>
  </body>
</html>