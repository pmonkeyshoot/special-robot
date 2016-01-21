<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าตรวจสอบประวัติการเบิกเงิน - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <style>
      table, th, td {
        text-align:center; 
        vertical-align:middle;
      }
    </style>
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
                <div class="panel-heading"><strong>ตรวจสอบประวัติการเบิกเงิน</strong></div>
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
                  <li role="presentation"><a href="/user/main">หน้าแรก</a></li>
                  <li role="presentation"><a href="/user/fill">กรอกใบเบิกเงิน</a></li>
                  <li role="presentation" class="active"><a href="/user/record">ตรวจสอบประวัติการเบิกเงิน</a></li>
                  <li role="presentation"><a href="/user/info">ข้อมูลผู้ใช้งาน</a></li>
                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ยังไม่ดำเนินการ <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="/user/record">ยังไม่ดำเนินการ</a></li>
                      <li><a href="/user/record/inprogress">กำลังดำเนินการ</a></li>
                      <li><a href="/user/record/approve">อนุมัติ</a></li>
                    </ul>
                    <br><br><br>
                  </div>
                  
                  <div class="panel panel-info">
                    <div class="panel-heading"><strong>ประวัติการเบิกเงิน</strong></div>
                    <div class="panel-body">
                    
                      <table class="table table-striped table-bordered" >
                        <tr>
                          <th>No.</th>
                          <th>เลขที่ใบเบิกเงิน</th> 
                          <th>เวลา</th>
                          <th>รายการ</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>101/23</td> 
                          <td>4 ม.ค. 2559 : 14.00 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-warning" style="width:100px" data-toggle="modal" data-target="#editModal">แก้ไข</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>102/24</td> 
                          <td>5 ม.ค. 2559 : 11.30 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-warning" style="width:100px" data-toggle="modal" data-target="#editModal">แก้ไข</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                        </tr>
                      </table>

                      <div>
                        <br>
                        <label for="Name" class="col-lg-3 col-md-3 col-sm-3 form-group">จำนวนเงินที่เบิกไปแล้ว : </label>
                        <label for="Name" class="col-lg-3 col-md-3 col-sm-3 form-group"><font size="3" color="red">18,000 บาท</font></label>
                        <label for="Amount" class="col-lg-3 col-md-3 col-sm-3 form-group">จำนวนเงินคงเหลือ : </label>
                        <label for="Amount" class="col-lg-3 col-md-3 col-sm-3 form-group"><font size="3" color="red">2,000 บาท</font></label>
                      </div>

                      <!-- infoModal -->
                      <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="infoModalLabel">ข้อมูลใบเบิกเงิน</h4>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- editModal -->
                      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-warning">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="editModalLabel">แก้ไขข้อมูลใบเบิกเงิน</h4>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                              <button type="button" class="btn btn-primary" >บันทึก</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- deleteModal -->
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-danger">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="deleteModalLabel">ลบใบเบิกเงิน</h4>
                            </div>
                            <div class="modal-body">
                              <h2><font color="red">ยืนยันการลบใบเบิกเงิน </font></h2>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                              <button type="button" class="btn btn-danger" >ยืนยัน</button>
                            </div>
                          </div>
                        </div>
                      </div>

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