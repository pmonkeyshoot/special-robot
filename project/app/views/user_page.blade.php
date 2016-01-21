<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าหลักผู้ใช้งาน - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
  </head>

  <body>
    <!-- Header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <span class="glyphicon glyphicon-home"></span>  Medical Expense Reimbursement System 
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Main -->
    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
              <div class="panel panel-warning">
                <div class="panel-heading"><strong>หน้าหลักผู้ใช้งาน</strong></div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <!-- <label for="filename" class="col-xs-4 control-label">Picture</label> -->
                      <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <center><img style = class="img-responsive" src= {{"/image/defaultUsers.png"}} class="img-rounded" width="150" height="150"></center>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 form-group">
                        <br>
                        <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล ผู้ใช้งาน : </label>
                        <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>
                        <label for="Amount" class="col-lg-6 col-md-6 col-sm-6 form-group">จำนวนเงินที่สามารถเบิกได้ : </label>
                        <label for="Amount" class="col-lg-6 col-md-6 col-sm-6 form-group"><font size="3" color="red">20,000 บาท</font></label>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                        <br>
                        <label for="Type" class="col-lg-4 col-md-4 col-sm-4 form-group">ประเภท : </label>
                        <label for="Type" class="col-lg-8 col-md-8 col-sm-8 form-group">พนักงานเงินงบประมาณ</label>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="panel-body">
                <ul class="nav nav-pills nav-justified" >
                  <li role="presentation" class="active"><a href="#">หน้าแรก</a></li>
                  <li role="presentation"><a href="#">กรอกใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="#">ตรวจสอบประวัติการเบิกเงิน</a></li>
                  <li role="presentation"><a href="#">ข้อมูลผู้ใช้งาน</a></li>
                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                <center><strong><h1>ยินดีต้อนรับเข้าสู่ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ</h1></strong></center>
                <br>
                <div class="panel panel-info">
                  <div class="panel-heading"><strong>ข้อมูลข่าวสาร</strong></div>
                  <div class="panel-body">
                    <center><strong><h2>วัน - เวลาทำการ : วันจันทร์ - วันศุกร์ เวลา 08.00 - 17.00 น. </h2></strong></center>
                  </div>
                </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1"></div>

              </div>
          </div>
        </div>

        


    </div>
  </body>

  <!-- End -->
  <footer class="text-center">
    <center>
      <p>Power by 2PM CE@KMITL</p>
      <p>Contract us : <a href="mailto:library2pm@gmail.com">library2pm@gmail.com</a></p>
      <p>Copyright © 2014 all rights reserved</p>
    </center>
  </footer>

  <!-- script references -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/scripts.js"></script>
</html>