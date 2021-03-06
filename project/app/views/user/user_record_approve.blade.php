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
      .modal-body {
        max-height: auto; 
        overflow-y: auto;
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
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">อนุมัติ <span class="caret"></span>
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
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>102/24</td> 
                          <td>5 ม.ค. 2559 : 11.30 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
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
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="infoModalLabel">รายละเอียดข้อมูลใบเบิกเงิน</h4>
                            </div>
                            <div class="modal-body">

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">นายพีรพล  ตั้งขวัญพาณิชย์ </label>
                                  <label class="col-lg-1 col-md-1 col-sm-1 form-group">วันที่ : </label>
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">4 มกราคม 2559 </label>
                                  <label class="col-lg-1 col-md-1 col-sm-1 form-group">เวลา : </label>
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">14.00 น. </label>
                                  
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                              <div class="panel panel-info">
                              <div class="panel-heading"><strong>ข้อมูลใบเบิกเงิน</strong></div>
                              <div class="panel-body">

                              <fieldset disabled>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillName" class="col-lg-2 col-md-2 col-sm-2 form-group">ข้าพเจ้า : </label>
                                  <input type="text" id="disabledTextInput" class="col-lg-4 col-md-4 col-sm-4 form-group" placeholder="นายพีรพล  ตั้งขวัญพาณิชย์">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillPosi" class="col-lg-2 col-md-2 col-sm-2 form-group">ตำแหน่ง : </label>
                                  <input type="text" id="disabledTextInput" class="col-lg-4 col-md-4 col-sm-4 form-group" placeholder="พนักงานต้อนรับ">
                                  <label for="FillUnder" class="col-lg-2 col-md-2 col-sm-2 form-group">สังกัด : </label>
                                  <input type="text" id="disabledTextInput" class="col-lg-4 col-md-4 col-sm-4 form-group" placeholder="คณะวิศวกรรมศาสตร์">
                                </div>

                              </fieldset>
                    

                    
                              <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group">ขอเบิกค่ารักษาพยาบาลของ : </label>
                                  <label for="FillofFath" class="col-lg-3 col-md-3 col-sm-3 form-group"> ข้าพเจ้า </label>
                         
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillDise" class="col-lg-4 col-md-4 col-sm-4 form-group">ป่วยเป็นโรค : </label>
                                  <label for="FillDise" class="col-lg-4 col-md-4 col-sm-4 form-group">ไข้หวัดใหญ่ </label>
                         
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillHos" class="col-lg-4 col-md-4 col-sm-4 form-group">ได้รับการตรวจรักษาพยาบาลจาก : </label>
                                  <label for="FillHos" class="col-lg-4 col-md-4 col-sm-4 form-group">โรงพยาบาลลาดกระบัง </label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillDate" class="col-lg-4 col-md-4 col-sm-4 form-group">วันที่ : </label>
                                  <label for="FillDate" class="col-lg-4 col-md-4 col-sm-4 form-group">15 มกราคม 2559 </label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillAmount" class="col-lg-4 col-md-4 col-sm-4 form-group">เป็นเงิน : </label>
                                  <label for="FillAmount" class="col-lg-3 col-md-3 col-sm-3 form-group">2,000 </label>
                                  <label for="FillAmount" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillBill" class="col-lg-4 col-md-4 col-sm-4 form-group">ตามใบเสร็จรับเงินจำนวน : </label>
                                  <label for="FillBill" class="col-lg-3 col-md-3 col-sm-3 form-group">2 </label>
                                  <label for="FillBill" class="col-lg-2 col-md-2 col-sm-2 form-group">ฉบับ </label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">ซึ่งเป็นสถานพยาบาลของ : </label>
                                  <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">เอกชน</label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">ประเภท : </label>
                                  <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">คลินิก </label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">สิทธิที่เบิกได้ : </label>
                                  <label for="FillTypeH" class="col-lg-3 col-md-3 col-sm-3 form-group">2,000 </label>
                                  <label for="FillTypeH" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>

                                </div> 

                                 


                              </fieldset>

                              </div>
                              </div>
                              </div>
                              



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
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