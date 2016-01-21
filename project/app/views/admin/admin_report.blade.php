<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าพิมพ์รายงาน - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
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
                  <li role="presentation"><a href="/admin/search/user">ค้นหาชื่อผู้มีสิทธิ</a></li>
                  <li role="presentation"><a href="/admin/search/doc">ค้นหาใบเบิกเงิน</a></li>
                  <li role="presentation" class="active"><a href="/admin/report">พิมพ์รายงาน</a></li>
                  <li role="presentation"><a href="/admin/graph">สรุปยอดเบิกเงิน</a></li>

                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายงานเฉพาะบุคคล <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="/admin/report">รายงานเฉพาะบุคคล</a></li>
                      <li><a href="/admin/report/summary">รายงานสรุป</a></li>
                      <li><a href="/admin/report/doc">รายงานรวมใบเบิกเงิน</a></li>
                      
                    </ul>
                    <br><br>
                    
                  </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label for="Search" class="col-lg-3 col-md-3 col-sm-3 form-group">ค้นหารายชื่อบุคลากร : </label>
                      <select class="col-lg-2 col-md-2 col-sm-2 form-group" onchange='CheckSearch(this.value);'>
                        <option selected="selected">กรุณาเลือก...</option>
                        <option value="1">ค้นหาด้วยชื่อ-นามสกุล</option>
                        <option value="2">ค้นหาด้วยเลขบัตรประจำตัวประชาชน</option>
                      </select>
                      <label for="Search" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>

                      <label for="SearchN" name="SearchN" id="SearchN" class="col-lg-6 col-md-6 col-sm-6 form-group" style='display:none;'/> 
                        <input type="text" class="col-lg-7 col-md-7 col-sm-7 form-group"  placeholder="ชื่อ - นามสกุล">
                        <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                        <button type="button" class="btn btn-default"> ค้นหา</button>
                      </label>

                      <label for="SearchD" name="SearchD" id="SearchD" class="col-lg-6 col-md-6 col-sm-6 form-group" style='display:none;'/> 
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
                            <button type="button" class="btn btn-primary" style="width:100px" data-toggle="modal" data-target="#reportModal">ดูรายงาน</button>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>พนักงานรายได้</td> 
                          <td>คณะวิศวกรรมศาสตร์</td> 
                          <td>
                            <button type="button" class="btn btn-primary" style="width:100px" data-toggle="modal" data-target="#reportModal">ดูรายงาน</button>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">ดูข้อมูล</button>
                          </td>
                        </tr>
                      </table>

                      <!-- reportModal -->
                      <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="reportModalLabel">รายงานเฉพาะบุคคล</h4>
                            </div>
                            <div class="modal-body">

                              ...

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">พิมพ์รายงาน</button>
                              <button type="button" class="btn btn-info" data-dismiss="modal">Export File</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
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