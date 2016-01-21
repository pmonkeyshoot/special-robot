@extends('layout')

@section('body')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-2"></div>
      <div class="col-lg-6 col-md-6 col-sm-8">
        <center><img style = class="img-responsive" src= {{"/image/Logo_kmitl.jpg"}} class="img-rounded" width="220" height="200" ></center>
        <center><strong><h1>ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ</h1></strong></center>
        <form class="form-signin" role="form" name="form1" method="post" action="check_login">
          <div class="panel panel-warning">
            <div class="panel-heading"><strong>Please sign in</strong></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-1"></div>
                  <div class="col-xs-10">
                    <div class="form-group">
                      <label for="txtUsername">ชื่อผู้ใช้</label>
                      <input name="txtUsername" type="text" class="form-control" id="txtUsername" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <label for="txtPassword">รหัสผ่าน</label>
                      <input name="txtPassword" type="password" class="form-control" id="txtPassword" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                      <label for="txtCheck">รหัสตรวจสอบ</label>
                      <center>
                        <h2>
                          <span class="label label-default"> EXAMPLE </span>&nbsp;
                          <span class="glyphicon glyphicon-repeat" aria-hidden="true" ></span>
                        </h2>
                      </center>
                    </div>
                    <div class="form-group">
                      <label for="txtCaptcha">ป้อนรหัสตรวจสอบ</label>
                      <input name="txtCaptcha" type="text" class="form-control" id="txtCaptcha" placeholder="Enter Captcha">
                    </div>
                    <button type="submit" name="Login" value="Login" class="btn btn-success">Login</button>
                    <button type="reset" name="Clear" value="Clear" class="btn btn-danger">Clear</button>
                  </div>
                <div class="col-xs-1"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-2"></div>
    </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

@stop