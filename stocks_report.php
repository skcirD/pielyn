<?php
require_once '../php/init.php';
session_start();
security_session();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Stocks Report</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/stocks_report.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>

  <body style="background: #DCDCDC;">
      <?php include ('../php/navigation.php'); ?>

      <div class="main-content">
          <div class="table-con">
            <div class="tableTop-con" style="padding: 10px;">

                <a id="item" href="stocks_report.php">Stock Adjustment</a>
                <a style="margin:0; font-size: 20px;">|</a>
                <a id="po" href="stocks_report2.php">Stocks Added</a>

            </div>
              <table>
                  <thead style="font-size: 10px;">
                      <th style="width:10px;">#</th>
                      <th style="width:100px;">Pcode</th>
                      <th style="width: 500px">Product name</th>
                      <th style="width: 500px">Reason</th>
                      <th style="width: 100px">Oldstock</th>
                      <th style="width: 100px">Newstock</th>
                      <th style="width: 100px">Datechange</th>
                      <th style="width: 100px">Timechange</th>
                      <th style="width: 100px">Username</th>
                  </thead>
                  <tbody>
                      <?php displayStocksReport(); ?>
                  </tbody>
              </table>
          </div>
      </div>
      <div class="btn">
        <a id="btnback" href="index.php">Back</a>
      </div>
  </body>
  </html>
