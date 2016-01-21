<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าค้นหารายชื่อผู้มีสิทธิ - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
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
                  <li role="presentation"><a href="/admin/checkrecord">ตรวจสอบข้อมูลใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="/admin/adduser">บันทึกข้อมูลผู้มีสิทธิใหม่</a></li>
                  <li role="presentation" class="active"><a href="/admin/search/user">ค้นหาชื่อผู้มีสิทธิ</a></li>
                  <li role="presentation"><a href="/admin/search/doc">ค้นหาใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="/admin/report">พิมพ์รายงาน</a></li>
                  <li role="presentation"><a href="/admin/graph">สรุปยอดเบิกเงิน</a></li>

                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label for="Search" class="col-lg-4 col-md-4 col-sm-4 form-group"><h4>ค้นหาพนักงานสถาบัน : </h4></label>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                      <label for="Search" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                      <select class="col-lg-3 col-md-3 col-sm-3 form-group" onchange='CheckSearch(this.value);'>
                        <option selected="selected">เลือกประเภทการค้นหา...</option>
                        <option value="1">ค้นหาด้วยชื่อ-นามสกุล</option>
                        <option value="2">ค้นหาด้วยเลขบัตรประจำตัวประชน</option>
                      </select>
                      <label for="Search" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>

                      <label for="SearchN" name="SearchN" id="SearchN" class="col-lg-7 col-md-7 col-sm-7 form-group" style='display:none;'/> 
                        <input type="text" class="col-lg-7 col-md-7 col-sm-7 form-group"  placeholder="ชื่อ - นามสกุล">
                        <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                        <button type="button" class="btn btn-default"> ค้นหา</button>
                      </label>

                      <label for="SearchID" name="SearchID" id="SearchID" class="col-lg-7 col-md-7 col-sm-7 form-group" style='display:none;'/> 
                        <input type="text" class="col-lg-7 col-md-7 col-sm-7 form-group" placeholder="เลขบัตรประจำตัวประชาชน">
                        <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                        <button type="button" class="btn btn-default"> ค้นหา</button>
                      </label>
                         
                  </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1"></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-info">
                  <div class="panel-heading"><strong>ผลการค้นหา</strong></div>
                    <div class="panel-body">
                    
                      <table class="table table-striped table-bordered" >
                        <tr>
                          <th>No.</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>ประเภท</th>
                          <th>หน่วยงาน</th>
                          <th>รายการ</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>พนักงานรายได้</td> 
                          <td>คณะวิศวกรรมศาสตร์</td> 
                          <td>
                            <button type="button" class="btn btn-primary" style="width:100px" data-toggle="modal" data-target="#fillModal">บันทึก</button>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>พนักงานรายได้</td> 
                          <td>คณะวิศวกรรมศาสตร์</td> 
                          <td>
                            <button type="button" class="btn btn-primary" style="width:100px" data-toggle="modal" data-target="#fillModal">บันทึก</button>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                        </tr>
                      </table>

                      <!-- fillModal -->
                      <div class="modal fade" id="fillModal" tabindex="-1" role="dialog" aria-labelledby="fillModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="fillModalLabel">บันทึกข้อมูลใบเบิกเงิน</h4>
                            </div>
                            <div class="modal-body">

                <div class="panel panel-info">
                  <div class="panel-heading"><strong>กรอกข้อมูลใบเบิกเงิน</strong></div>
                  <div class="panel-body">
                    <form>
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
                          <label for="FillofFath" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> ข้าพเจ้า </label>
                         
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> บิดา ชื่อ : </label>
                          <label for="FillofFath" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="นายไก่  จิก" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofMath" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> มารดา ชื่อ : </label>
                          <label for="FillofMath" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="นายผึ้ง  ต่อย" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSpou" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> คู่สมรส ชื่อ : </label>
                          <label for="FillofSpou" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="นางมด  กัด" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon1" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> บุตร ลำดับที่ 1 ชื่อ : </label>
                          <label for="FillofSon1" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="นายใบ  ไม้" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon1" class="col-lg-3 col-md-3 col-sm-3 form-group">เกิดเมื่อ : </label>
                          <label for="FillofSon1" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="10 มกราคม 2540" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon2" class="col-lg-3 col-md-3 col-sm-3 form-group"><input type="checkbox"> บุตร ลำดับที่ 2 ชื่อ : </label>
                          <label for="FillofSon2" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="นางสาวแสน  สวย" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon2" class="col-lg-3 col-md-3 col-sm-3 form-group">เกิดเมื่อ : </label>
                          <label for="FillofSon2" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" placeholder="11 มกราคม 2540" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillDise" class="col-lg-4 col-md-4 col-sm-4 form-group">ป่วยเป็นโรค : </label>
                          <select class="col-lg-2 col-md-2 col-sm-2 form-group" onchange='CheckDise(this.value);'>
                            <option selected="selected">กรุณาเลือก ...</option>
                            <option value="1">ไข้หวัด</option>
                            <option value="2">ไข้หวัดใหญ่</option>
                            <option value="3">ไข้เลือดออก</option>
                            <option value="Other">อื่นๆ ระบุ</option>
                          </select>
                          <label for="FillDise" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" name="dise" id="dise" style='display:none;'/></label>
                         
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillHos" class="col-lg-4 col-md-4 col-sm-4 form-group">ได้รับการตรวจรักษาพยาบาลจาก : </label>
                          <select class="col-lg-2 col-md-2 col-sm-2 form-group" onchange='CheckHos(this.value);'>
                            <option selected="selected">กรุณาเลือก ...</option>
                            <option value="1">โรงพยาบาลลาดกระบัง</option>
                            <option value="2">โรงพยาบาลบางพลี</option>
                            <option value="3">โรงพยาบาลบางมด</option>
                            <option value="Other">อื่นๆ ระบุ</option>
                          </select>
                          <label for="FillHos" class="col-lg-5 col-md-5 col-sm-5 form-group"> <input type="text" name="hospital" id="hospital" style='display:none;'/></label>
                         
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillDate" class="col-lg-4 col-md-4 col-sm-4 form-group">วันที่ : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" name="dateInput" id="dateInput" value="" />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillAmount" class="col-lg-4 col-md-4 col-sm-4 form-group">เป็นเงิน : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" >
                          <label for="FillAmount" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillBill" class="col-lg-4 col-md-4 col-sm-4 form-group">ตามใบเสร็จรับเงินจำนวน : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" >
                          <label for="FillBill" class="col-lg-2 col-md-2 col-sm-2 form-group">ฉบับ </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">ซึ่งเป็นสถานพยาบาลของ : </label>
                          <select class="col-lg-2 col-md-2 col-sm-2 form-group" onchange='CheckHosType(this.value);'>
                            <option selected="selected">กรุณาเลือก ...</option>
                            <option value="1">เอกชน</option>
                            <option value="2">ราชการ</option>
                          </select>
                          <label for="FillTypeH" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <button name="hosDes1" id="hosDes1" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" 
                          data-content="test" style='display:none;'/> รายละเอียด</button>
                          <button name="hosDes2" id="hosDes2" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" 
                          data-content="test" style='display:none;'/> รายละเอียด</button>
                          
                        </div>

                        <div name="hosType1" id="hosType1" style='display:none;'/>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> คลินิก : สิทธิที่เบิกได้ </label>
                          <input id="mytext" class="col-lg-2 col-md-2 col-sm-2 form-group" data-trigger="hover" data-placement="right" data-content="test." />

                          <label for="FillTypeH" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> โพลีคลินิก : สิทธิที่เบิกได้ </label>
                          <input class="col-lg-2 col-md-2 col-sm-2 form-group" type="text" >
                          <label for="FillTypeH" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> โรงพยาบาล : สิทธิที่เบิกได้ </label>
                          <input class="col-lg-2 col-md-2 col-sm-2 form-group" type="text" >
                          <label for="FillTypeH" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>

                        </div>
                        </div>

                      <div name="hosType2" id="hosType2" style='display:none;'/>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">สิทธิที่เบิกได้ </label>
                          <input id="mytext" class="col-lg-2 col-md-2 col-sm-2 form-group" data-trigger="hover" data-placement="right" data-content="test." />

                          <label for="FillTypeH" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>

                        </div>
                      </div>

                      

                      </fieldset>
                    </form>

                  </div>
                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                              <button type="button" class="btn btn-primary" >ยืนยัน</button>
                            </div>
                          </div>
                        </div>
                      </div>




                      <!-- infoModal -->
                      <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="infoModalLabel">ข้อมูลประวัติ</h4>
                            </div>
                            <div class="modal-body">

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">นายพีรพล  ตั้งขวัญพาณิชย์ </label>
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">ประเภท : </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">พนักงานรายได้ </label>
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                                  <label class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <div class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-info" style="width:200px">
                                      <input type="radio" name="options" id="option1" autocomplete="off" onchange='infoUser(this);'> ข้อมูลส่วนตัว
                                    </label>
                                    <label class="btn btn-info" style="width:200px">
                                      <input type="radio" name="options" id="option2" autocomplete="off" onchange='recordUser(this);'> ประวัติการเบิกเงิน
                                    </label>

                                  </div>
                                  </label>


                              </div>

                <div name="infoUser" id="infoUser" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                    <div class="panel panel-info">
                    <div class="panel-heading"><strong>ข้อมูลส่วนตัว</strong></div>
                    <div class="panel-body">
                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="NameEng" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (Eng.): </label>
                      <label for="NameEng" class="col-lg-6 col-md-6 col-sm-6 form-group">Mr.Peerapol Tangkwanpanich</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>

                      <label for="Status" class="col-lg-6 col-md-6 col-sm-6 form-group">สภาพพนักงาน : </label>
                      <label for="Status" class="col-lg-6 col-md-6 col-sm-6 form-group">พ้นสภาพ</label>

                      <label for="Type" class="col-lg-6 col-md-6 col-sm-6 form-group">ประเภทพนักงาน : </label>
                      <label for="Type" class="col-lg-6 col-md-6 col-sm-6 form-group">พนักงานเงินรายได้</label>

                      <label for="Department" class="col-lg-6 col-md-6 col-sm-6 form-group">สังกัด : </label>
                      <label for="Department" class="col-lg-6 col-md-6 col-sm-6 form-group">คณะวิศวกรรมศาสตร์</label>

                      <label for="Email" class="col-lg-6 col-md-6 col-sm-6 form-group">E-mail : </label>
                      <label for="Email" class="col-lg-6 col-md-6 col-sm-6 form-group">pmonkeyshoot@gmail.com</label>

                      <label for="Tel" class="col-lg-6 col-md-6 col-sm-6 form-group">เบอร์โทร : </label>
                      <label for="Tel" class="col-lg-6 col-md-6 col-sm-6 form-group">0891514171</label>
                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading"><strong>ข้อมูลบิดา-มารดา</strong></div>
                    <div class="panel-body">

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                        <p class="bg-info">ข้อมูลบิดา</p>

                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>
                      <br>

                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>


                    </div>

                    <div class="panel-body">

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                        <p class="bg-info">ข้อมูลมารดา</p>

                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>
                      <br>

                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading"><strong>ข้อมูลคู่สมรส</strong></div>
                    <div class="panel-body">
                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>
                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>
                    </div>
                  </div>

                  <div class="panel panel-info">
                    <div class="panel-heading"><strong>ข้อมูลบุตร</strong></div>
                    <div class="panel-body">

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                        <p class="bg-info">ข้อมูลบุตรคนที่ 1</p>

                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>

                      <br>

                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>


                    </div>

                    <div class="panel-body">

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      <div class="col-lg-8 col-md-8 col-sm-8 form-group">
                        <p class="bg-info">ข้อมูลบุตรคนที่ 2</p>

                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">ชื่อ - นามสกุล (ไทย): </label>
                      <label for="Name" class="col-lg-6 col-md-6 col-sm-6 form-group">นายพีรพล ตั้งขวัญพาณิชย์</label>

                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">รหัสบัตรประจำตัวประชาชน : </label>
                      <label for="Iden" class="col-lg-6 col-md-6 col-sm-6 form-group">1100701826107</label>

                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">วัน/เดือน/ปี เกิด : </label>
                      <label for="Birthday" class="col-lg-6 col-md-6 col-sm-6 form-group">23 ธันวาคม 2536</label>

                      <br>

                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2 form-group"></div>

                      
                    </div>
                  </div>

                    
                  </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group"></label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <button type="button" class="btn btn-info" style="width:150px" >แก้ไขข้อมูล</button>
                                  </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                                    <button type="button" class="btn btn-info" style="width:150px" >บันทึกข้อมูล</button>
                                  </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group"></label>

                                </div>

                </div>

                <div name="recordUser" id="recordUser" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">


                    <div class="panel panel-info">
                    <div class="panel-heading"><strong>ประวัติการเบิกเงิน</strong></div>
                    <div class="panel-body">

                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                          <label class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <div class="btn-group" data-toggle="buttons" >
                            <label class="btn btn-info" style="width:150px">
                              <input type="radio" autocomplete="off" onchange='tableUnProg(this);' > ยังไม่ดำเนินการ
                            </label>
                            <label class="btn btn-info" style="width:150px">
                              <input type="radio" autocomplete="off" onchange='tableInProg(this);'> กำลังดำเนินการ
                            </label>
                            <label class="btn btn-info" style="width:150px">
                              <input type="radio" autocomplete="off" onchange='tableApprove(this);'> อนุมัติ
                            </label>

                          </div>
                          </label>


                      </div>
                    

                    <div name="tableUnProg" id="tableUnProg" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>
                      <table class="table table-striped table-bordered">
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
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>102/24</td> 
                          <td>5 ม.ค. 2559 : 11.30 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div name="tableInProg" id="tableInProg" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>
                      <table class="table table-striped table-bordered">
                        <tr>
                          <th>No.</th>
                          <th>เลขที่ใบเบิกเงิน</th> 
                          <th>เวลา</th>
                          <th>รายการ</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>201/23</td> 
                          <td>4 ม.ค. 2559 : 14.00 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>202/24</td> 
                          <td>5 ม.ค. 2559 : 11.30 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div name="tableApprove" id="tableApprove" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>
                      <table class="table table-striped table-bordered">
                        <tr>
                          <th>No.</th>
                          <th>เลขที่ใบเบิกเงิน</th> 
                          <th>เวลา</th>
                          <th>รายการ</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>301/23</td> 
                          <td>4 ม.ค. 2559 : 14.00 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>302/24</td> 
                          <td>5 ม.ค. 2559 : 11.30 น.</td>
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" >ดูข้อมูล</button>
                          </td>
                        </tr>
                      </table>
                    </div>

                      <div>
                        <br>
                        <label for="Name" class="col-lg-3 col-md-3 col-sm-3 form-group">จำนวนเงินที่เบิกไปแล้ว : </label>
                        <label for="Name" class="col-lg-3 col-md-3 col-sm-3 form-group"><font size="3" color="red">18,000 บาท</font></label>
                        <label for="Amount" class="col-lg-3 col-md-3 col-sm-3 form-group">จำนวนเงินคงเหลือ : </label>
                        <label for="Amount" class="col-lg-3 col-md-3 col-sm-3 form-group"><font size="3" color="red">2,000 บาท</font></label>
                      </div>

                    </div>
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

                      

                      <!-- deleteModal -->
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-danger">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="deleteModalLabel">ลบข้อมูล</h4>
                            </div>
                            <div class="modal-body">
                              <h2><font color="red">ยืนยันการลบข้อมูล </font></h2>
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
       var element2=document.getElementById('SearchID');
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

      function CheckDise(val){
       var element=document.getElementById('dise');
        if(val=='Other')
          element.style.display='block';
        else  
          element.style.display='none';
      }

      function CheckHos(val){
       var element=document.getElementById('hospital');
        if(val=='Other')
          element.style.display='block';
        else  
          element.style.display='none';
      }

      function CheckHosType(val){
       var element1=document.getElementById('hosType1');
       var element2=document.getElementById('hosType2');
       var element3=document.getElementById('hosDes1');
       var element4=document.getElementById('hosDes2');
        if(val=='1'){
          element1.style.display='block';
          element2.style.display='none';
          element3.style.display='block';
          element4.style.display='none';
        }else if(val=='2'){
          element1.style.display='none';
          element2.style.display='block';
          element3.style.display='none';
          element4.style.display='block';
        }else{
          element1.style.display='none';
          element2.style.display='none';
          element3.style.display='none';
          element4.style.display='none';

        }
      }

      function infoUser(val){
       var element=document.getElementById('infoUser');
       var element2=document.getElementById('recordUser');
        if(val.checked){
          element.style.display='block';
          element2.style.display='none';
        }else {
          element.style.display='none';
          element2.style.display='block';
        }
      }

      function recordUser(val){
       var element=document.getElementById('recordUser');
       var element2=document.getElementById('infoUser');
        if(val.checked){
          element.style.display='block';
          element2.style.display='none';
        }else {
          element.style.display='none';
          element2.style.display='block';
        }
      }

      function tableUnProg(val){
       var element=document.getElementById('tableUnProg');
       var element2=document.getElementById('tableInProg');
       var element3=document.getElementById('tableApprove');
        if(val.checked){
          element.style.display='block';
          element2.style.display='none';
          element3.style.display='none';
        }else {
          element.style.display='none';
        }
      }

      function tableInProg(val){
       var element=document.getElementById('tableInProg');
       var element2=document.getElementById('tableUnProg');
       var element3=document.getElementById('tableApprove');
        if(val.checked){
          element.style.display='block';
          element2.style.display='none';
          element3.style.display='none';
        }else {
          element.style.display='none';
          element2.style.display='block';
        }
      }

      function tableApprove(val){
       var element=document.getElementById('tableApprove');
       var element2=document.getElementById('tableUnProg');
       var element3=document.getElementById('tableInProg');
        if(val.checked){
          element.style.display='block';
          element2.style.display='none';
          element3.style.display='none';
        }else {
          element.style.display='none';
          element2.style.display='block';
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