<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าตรวจสอบข้อมูลใบเบิกเงิน - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <link rel="stylesheet" media="all" type="text/css" href="/css/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="/css/jquery-ui-timepicker-addon.css" />

    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-sliderAccess.js"></script>
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
              <div class="panel panel-primary">
                <div class="panel-heading"><strong>หน้าหลักผู้ใช้งาน</strong></div>
                <div class="panel-body">
                  <center><strong><h1>ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ</h1></strong></center>
                </div>

              <div class="panel-body">
                <ul class="nav nav-pills nav-justified" >
                  <li role="presentation"><a href="/admin/main">หน้าแรก</a></li>
                  <li role="presentation" class="active"><a href="/admin/checkrecord">ตรวจสอบข้อมูลใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="/admin/adduser">บันทึกข้อมูลผู้มีสิทธิใหม่</a></li>
                  <li role="presentation"><a href="/admin/search/user">ค้นหาชื่อผู้มีสิทธิ</a></li>
                  <li role="presentation"><a href="/admin/search/doc">ค้นหาใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="/admin/report">พิมพ์รายงาน</a></li>
                  <li role="presentation"><a href="/admin/graph">สรุปยอดเบิกเงิน</a></li>

                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">กำลังดำเนินการ <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="/admin/checkrecord">ยังไม่ดำเนินการ</a></li>
                      <li><a href="/admin/checkrecordinp">กำลังดำเนินการ</a></li>
                      
                    </ul>
                    <br><br>
                    
                  </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label for="Search" class="col-lg-2 col-md-2 col-sm-2 form-group">ค้นหา : </label>
                      <select class="col-lg-2 col-md-2 col-sm-2 form-group" onchange='CheckSearch(this.value);'>
                        <option selected="selected">กรุณาเลือก...</option>
                        <option value="1">ค้นหาด้วยชื่อ-นามสกุล</option>
                        <option value="2">ค้นหาด้วยวันที่</option>
                      </select>
                      <label for="Search" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>

                      <label for="SearchN" name="SearchN" id="SearchN" class="col-lg-7 col-md-7 col-sm-7 form-group" style='display:none;'/> 
                        <input type="text" class="col-lg-7 col-md-7 col-sm-7 form-group"  placeholder="ชื่อ - นามสกุล">
                        <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                        <button type="button" class="btn btn-default"> ค้นหา</button>
                      </label>

                      <label for="SearchD" name="SearchD" id="SearchD" class="col-lg-7 col-md-7 col-sm-7 form-group" style='display:none;'/> 
                        <input type="text" class="col-lg-7 col-md-7 col-sm-7 form-group" placeholder="เลือกวันที่">
                        <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                        <button type="button" class="btn btn-default"> ค้นหา</button>
                      </label>
                         
                  </div>
                

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1"></div>

              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-info">
                  <div class="panel-heading"><strong>รายชื่อใบเบิกเงิน</strong></div>
                    <div class="panel-body">
                    
                      <table class="table table-striped table-bordered" >
                        <tr>
                          <th>No.</th>
                          <th>ชื่อ-นามสกุล</th> 
                          <th>วันที่</th>
                          <th>เวลา</th>
                          <th>รายการ</th>
                          <th>ยอดเงินคงเหลือ(บาท)</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>4 ม.ค. 2559</td>
                          <td>14.00 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                          <td>20,000</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>4 ม.ค. 2559</td>
                          <td>15.00 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                          <td>20,000</td>
                        </tr>
                      </table>

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
                              
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <button type="button" class="btn btn-info" style="width:150px" >ตรวจสอบสิทธิ</button>
                                  </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <button type="button" class="btn btn-info" style="width:150px" >ดูประวัติ</button>
                                  </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <button type="button" class="btn btn-info" style="width:150px" >ใส่เลขใบสำคัญ</button>
                                  </label>
                                  <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>

                                </div>



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">พิมพ์ใบเบิกเงิน</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">บันทึกข้อมูลใบเบิกเงิน</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
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

              </div>
          </div>
        </div>

        


    </div>

    <script type="text/javascript">

      $(function(){
        $("#dateInput").datepicker({
          dateFormat: 'dd-M-yy'
        });
      });

      $('#mytext').popover('show');

      function CheckSearch(val){
       var element=document.getElementById('SearchN');
       var element2=document.getElementById('SearchD');
        if(val=='1'){
          element.style.display='block';
          element2.style.display='none';
        }
        else if(val=='2'){
          element.style.display='none';
          element2.style.display='block';
        }else {
          element.style.display='none';
          element2.style.display='none';
        }
      }



      

      

    </script>
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

</html>