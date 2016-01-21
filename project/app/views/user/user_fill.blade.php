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


                <!-- FillFirst -->
                <div class="col-lg-10 col-md-10 col-sm-10" name="fillFirst" id="fillFirst" style='display:block;'/>
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

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label class="col-lg-10 col-md-10 col-sm-10 form-group"></label>
                    <div class="btn-group" data-toggle="buttons" >
                    <label class="btn btn-info" style="width:100px" onclick="toFillSecond()">
                      <input type="radio" autocomplete="off" > ถัดไป
                    </label>

                    </div>
                  </div>


                </div>


                <!-- FillSecond -->
                <div class="col-lg-10 col-md-10 col-sm-10" name="fillSecond" id="fillSecond" style='display:none;'/>
                <div class="panel panel-info">
                  <div class="panel-heading"><strong>กรอกข้อมูลใบเบิกเงิน</strong></div>
                  <div class="panel-body">

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label for="Search" class="col-lg-4 col-md-4 col-sm-4 form-group"><h4>เลือกวิธีการรับเงิน : </h4></label>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label  class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                      <label  class="col-lg-3 col-md-3 col-sm-3 form-group">
                      <button type="button" class="btn btn-info" style="width:200px" >เดินทางไปรับเงินด้วยตนเอง</button>
                      </label>
                      <label  class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                      <label  class="col-lg-3 col-md-3 col-sm-3 form-group">
                      <button type="button" class="btn btn-info" style="width:200px" >โอนเงินเข้าบัญชีธนาคาร</button>
                      </label>
                    </div>


                  </div>
                </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label class="col-lg-9 col-md-9 col-sm-9 form-group"></label>
                    <div class="btn-group" data-toggle="buttons" >
                    <label class="btn btn-info" style="width:100px" onclick="toFillFirst()">
                      <input type="radio" autocomplete="off" > ย้อนกลับ
                    </label>

                    </div>
                    <button type="button" class="btn btn-primary" style="width:100px" >บันทึกข้อมูล</button>
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

      function toFillSecond(){
        var element=document.getElementById('fillFirst');
        var element2=document.getElementById('fillSecond');
        element.style.display='none';
        element2.style.display='block';
      }

      function toFillFirst(){
       var element=document.getElementById('fillSecond');
       var element2=document.getElementById('fillFirst');
          element.style.display='none';
          element2.style.display='block';
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