<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>หน้ากรอกใบเบิกเงิน - ระบบเบิกค่ารักษาพยาบาลพนักงานสถาบันฯ (Medical Expense Reimbursement System)</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <link rel="stylesheet" media="all" type="text/css" href="/css/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="/css/jquery-ui-timepicker-addon.css" />

    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-sliderAccess.js"></script>



       
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
                <div class="panel-heading"><strong>กรอกใบเบิกเงิน</strong></div>
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
                  <li role="presentation" class="active"><a href="/user/fill">กรอกใบเบิกเงิน</a></li>
                  <li role="presentation"><a href="/user/record">ตรวจสอบประวัติการเบิกเงิน</a></li>
                  <li role="presentation"><a href="/user/info">ข้อมูลผู้ใช้งาน</a></li>
                </ul>
              </div>


              <div class="panel-body">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
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
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> บิดา ชื่อ : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="นายไก่  จิก" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="1100701826105" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofMath" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> มารดา ชื่อ : </label>
                          <label for="FillofMath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="นายผึ้ง  ต่อย" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="1100701826105" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSpou" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> คู่สมรส ชื่อ : </label>
                          <label for="FillofSpou" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="นางมด  กัด" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="1100701826105" disabled></label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon1" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> บุตร ลำดับที่ 1 ชื่อ : </label>
                          <label for="FillofSon1" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="นายใบ  ไม้" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="1100701826105" disabled></label>

                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon1" class="col-lg-4 col-md-4 col-sm-4 form-group">เกิดเมื่อ : </label>
                          <label for="FillofSon1" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="10 มกราคม 2540" disabled></label>
                          
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon2" class="col-lg-4 col-md-4 col-sm-4 form-group"><input type="checkbox"> บุตร ลำดับที่ 2 ชื่อ : </label>
                          <label for="FillofSon2" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="นางสาวแสน  สวย" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group">เลขบัตรประจำตัวประชาชน : </label>
                          <label for="FillofFath" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="1100701826105" disabled></label>
                          <label for="FillOf" class="col-lg-4 col-md-4 col-sm-4 form-group"></label>
                          <label for="FillofSon2" class="col-lg-4 col-md-4 col-sm-4 form-group">เกิดเมื่อ : </label>
                          <label for="FillofSon2" class="col-lg-4 col-md-4 col-sm-4 form-group"> <input type="text" placeholder="11 มกราคม 2540" disabled></label>
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
                          <label for="FillTypeH" class="col-lg-4 col-md-4 col-sm-4 form-group">ซึ่งเป็นสถานพยาบาลของ : </label>
                          <select class="col-lg-2 col-md-2 col-sm-2 form-group" >
                            <option selected="selected">กรุณาเลือก ...</option>
                            <option value="1">เอกชน</option>
                            <option value="2">ราชการ</option>
                          </select>
                          <label for="FillTypeH" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                         
                          
                        </div>




                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillDate" class="col-lg-4 col-md-4 col-sm-4 form-group">ตั้งแต่วันที่ : </label>
                          <input class="col-lg-2 col-md-2 col-sm-2 form-group" type="text" name="dateInput" id="dateInput" value="" />
                          <label for="FillDate" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label for="FillDate" class="col-lg-2 col-md-2 col-sm-2 form-group">ถึงวันที่ : </label>
                          <input class="col-lg-2 col-md-2 col-sm-2 form-group" type="text" name="dateInput" id="dateInput" value="" />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillAmount" class="col-lg-4 col-md-4 col-sm-4 form-group">เป็นเงินรวมทั้งสิ้น : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" >
                          <label for="FillAmount" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillBill" class="col-lg-4 col-md-4 col-sm-4 form-group">ตามใบเสร็จรับเงินจำนวน : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" >
                          <label for="FillBill" class="col-lg-2 col-md-2 col-sm-2 form-group">ฉบับ </label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label for="FillBill" class="col-lg-12 col-md-12 col-sm-12 form-group">ข้าพเจ้ามีสิทธิได้รับเงินค่ารักษาพยาบาล ตามพระราชกฤษฎีกาเงินสวัสดิการเกี่ยวกับการรักษาพยาบาล : </label>
                          
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        
                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"><input type="checkbox"> ตามสิทธิ : </label> 
                          <label class="col-lg-7 col-md-7 col-sm-7 form-group"><input type="checkbox"> เฉพาะส่วนที่ขาดอยู่จากสิทธิที่ได้รับจากหน่วยงานอื่น </label> 
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                          <label class="col-lg-7 col-md-7 col-sm-7 form-group"><input type="checkbox"> เฉพาะส่วนที่ขาดอยู่จากสัญญาประกันภัย </label> 
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label>
                          
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label for="FillAmount" class="col-lg-2 col-md-2 col-sm-2 form-group">เป็นเงิน : </label>
                          <input class="col-lg-3 col-md-3 col-sm-3 form-group" type="text" >
                          <label for="FillAmount" class="col-lg-2 col-md-2 col-sm-2 form-group">บาท</label>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          
                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">และ ข้าพเจ้า</label>                           
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> ไม่มีสิทธิได้รับค่ารักษาพยาบาลจากหน่วยงานอื่น </label>

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> มีสิทธิได้รับค่ารักษาพยาบาลจากหน่วยงานอื่นแต่เลือกใช้สิทธิจากทางราชการ </label> 

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> มีสิทธิได้รับค่ารักษาพยาบาลตามสัญญาประกันภัย </label>

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> เป็นผู้ใช้สิทธิเบิกค่ารักษาพยาบาลสำหรับบุตรแต่เพียงฝ่ายเดียว </label>  

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group">และ ข้าพเจ้า</label>                           
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> ไม่มีสิทธิได้รับค่ารักษาพยาบาลจากหน่วยงานอื่น </label>

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> มีสิทธิได้รับค่ารักษาพยาบาลจากหน่วยงานอื่น แต่ค่ารักษาพยาบาลที่ได้รับต่ำกว่าสิทธิตามพระราชกฤษฎีกาฯ </label> 

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> มีสิทธิได้รับค่ารักษาพยาบาลตามสัญญาประกันภัย </label>

                          <label class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                          <label class="col-lg-2 col-md-2 col-sm-2 form-group"></label> 
                          <label class="col-lg-9 col-md-9 col-sm-9 form-group"><input type="checkbox"> มีสิทธิได้รับค่ารักษาพยาบาลจากหน่วยงานอื่นในฐานะเป็นผู้อาศัยสิทธิของผู้อื่น</label> 
                        

                        </div>



                       

                      

                      </fieldset>
                    </form>

                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label class="col-lg-9 col-md-9 col-sm-9 form-group"></label>
                    <label class="col-lg-3 col-md-3 col-sm-3 form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                      <button type="button" class="btn btn-primary" >ยืนยัน</button>
                    </label>

                    

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