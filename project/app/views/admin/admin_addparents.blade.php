<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้าบันทึกข้อมูลผู้มีสิทธิใหม่ - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
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
                  <li role="presentation" class="active"><a href="/admin/adduser">บันทึกข้อมูลผู้มีสิทธิใหม่</a></li>
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
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">บุคคลในครอบครัว <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="/admin/adduser">พนักงานสถาบันฯ</a></li>
                      <li><a href="/admin/addparents">บุคคลในครอบครัว</a></li>
                      
                    </ul>
                    <br><br>
                    
                  </div>
                  </div>

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

                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-info">
                  <div class="panel-heading"><strong>ผลการค้นหา</strong></div>
                    <div class="panel-body">
                    
                      <table class="table table-striped table-bordered" >
                        <tr>
                          <th>No.</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>ประเภท</th>
                          <th>รายการ</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>พนักงานรายได้</td> 
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">เพิ่มข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>นายพีรพล  ตั้งขวัญพาณิชย์</td> 
                          <td>พนักงานรายได้</td> 
                          <td>
                            <button type="button" class="btn btn-info" style="width:100px" data-toggle="modal" data-target="#infoModal">เพิ่มข้อมูล</button>
                            <button type="button" class="btn btn-danger" style="width:100px" data-toggle="modal" data-target="#deleteModal">ลบ</button>
                          </td>
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
                                  <label class="col-lg-2 col-md-2 col-sm-2 form-group">ประเภท : </label>
                                  <label class="col-lg-3 col-md-3 col-sm-3 form-group">พนักงานรายได้ </label>
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label class="col-lg-4 col-md-4 col-sm-4 form-group">เพิ่มบุคคลภายในครอบครัว : </label>

                                  <label class="col-lg-8 col-md-8 col-sm-8 form-group">
                                  <div class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-info" style="width:100px">
                                      <input type="checkbox" autocomplete="off" onchange='addParents(this);'> บิดา-มารดา
                                    </label>
                                    <label class="btn btn-info" style="width:100px">
                                      <input type="checkbox" autocomplete="off" onchange='addSpouse(this);'> คู่สมรส
                                    </label>
                                    <label class="btn btn-info" style="width:100px">
                                      <input type="checkbox" autocomplete="off" onchange='addSon(this);'> บุตร
                                    </label>
                                  </div>
                                  </label>
                                </div>

                              </div>

                <div name="addParents" id="addParents" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลบิดา-มารดา</strong></div>
                      <div class="panel-body">

                        <label class="col-lg-3 col-md-3 col-sm-3 form-group"><p><strong><h4>กรอกข้อมูลบิดา : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                        <label class="col-lg-3 col-md-3 col-sm-3 form-group"><p><strong><h4>กรอกข้อมูลมารดา : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                      </div>
                    </div>
                    
                  </div>

                </div>

                <div name="addSpouse" id="addSpouse" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลคู่สมรส</strong></div>
                      <div class="panel-body">

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                      </div>
                    </div>
                    
                  </div>

                </div>

                <div name="addSon" id="addSon" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลบุตร</strong></div>
                      <div class="panel-body">

                        <label class="col-lg-4 col-md-4 col-sm-4 form-group"><p><strong><h4>กรอกข้อมูลบุตรคนที่ 1 : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                        <label class="col-lg-4 col-md-4 col-sm-4 form-group"><p><strong><h4>กรอกข้อมูลบุตรคนที่ 2 : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                      </div>
                    </div>
                    
                  </div>

                </div>



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">บันทึกข้อมูล</button>
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



                <div name="addParents" id="addParents" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลบิดา-มารดา</strong></div>
                      <div class="panel-body">

                        <label class="col-lg-3 col-md-3 col-sm-3 form-group"><p><strong><h4>กรอกข้อมูลบิดา : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                        <label class="col-lg-3 col-md-3 col-sm-3 form-group"><p><strong><h4>กรอกข้อมูลมารดา : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                      </div>
                    </div>
                    
                  </div>

                </div>

                <div name="addSpouse" id="addSpouse" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลคู่สมรส</strong></div>
                      <div class="panel-body">

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                      </div>
                    </div>
                    
                  </div>

                </div>

                <div name="addSon" id="addSon" class="col-lg-12 col-md-12 col-sm-12 form-group" style='display:none;'/>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <div class="panel panel-info">
                      <div class="panel-heading"><strong>กรอกข้อมูลบุตร</strong></div>
                      <div class="panel-body">

                        <label class="col-lg-4 col-md-4 col-sm-4 form-group"><p><strong><h4>กรอกข้อมูลบุตรคนที่ 1 : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
                        </div>

                        <label class="col-lg-4 col-md-4 col-sm-4 form-group"><p><strong><h4>กรอกข้อมูลบุตรคนที่ 2 : </h4></strong></p></label>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">ชื่อ-นามสกุล : </label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">
                            <select>
                              <option selected="selected">คำนำหน้า...</option>
                              <option value="1">นาย</option>
                              <option value="2">นาง</option>
                              <option value="3">นางสาว</option>
                            </select>
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="ชื่อ">
                          </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="นามสกุล">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">วันเดือนปีเกิด : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text" placeholder="เลือกวันที่">
                          </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <input type="text">
                          </label>
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

      function addParents(val){
       var element=document.getElementById('addParents');
        if(val.checked){
          element.style.display='block';
        }else {
          element.style.display='none';
        }
      }

      function addSpouse(val){
       var element=document.getElementById('addSpouse');
        if(val.checked){
          element.style.display='block';
        }else {
          element.style.display='none';
        }
      }

      function addSon(val){
       var element=document.getElementById('addSon');
        if(val.checked){
          element.style.display='block';
        }else {
          element.style.display='none';
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