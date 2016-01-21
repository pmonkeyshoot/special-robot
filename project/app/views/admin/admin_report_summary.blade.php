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
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">รายงานสรุป <span class="caret"></span>
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
                    <label for="Search" class="col-lg-2 col-md-2 col-sm-2 form-group">เลือกวันที่ : </label>
                    <input type="text" class="col-lg-3 col-md-3 col-sm-3 form-group"  placeholder="เลือกวันที่">

                    <label for="Search" class="col-lg-2 col-md-2 col-sm-2 form-group">ถึงวันที่ : </label>
                    <input type="text" class="col-lg-3 col-md-3 col-sm-3 form-group"  placeholder="เลือกวันที่">
                    <label for="Search" class="col-lg-1 col-md-1 col-sm-1 form-group"></label>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#reportModal"> ตกลง</button>
                         
                  </div>
                

                </div>
                <div class="col-lg-1 col-md-1 col-sm-1"></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
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