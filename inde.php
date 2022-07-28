<!DOCTYPE html>
<html>
 <head>
  <title>How to return JSON Data from PHP Script using Ajax Jquery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">How to return JSON Data from PHP Script using Ajax Jquery</h2>
   <h3 align="center">Search Employee Data</h3><br />   
   <div class="row">
    <div class="col-md-4">
     <select name="employee_list" id="employee_list" class="form-control">
      <option value="">Select Employee</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
     </select>
    </div>
   
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    
   </div>
   <br />
   <div class="table-responsive" id="employee_details" style="display:none">
   <table class="table table-bordered">
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td width="90%"><span id="employee_name">david</span></td>

    </tr>
    <div id="version">rata mike</div>
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= document.querySelector('#version').id;
  var text= document.querySelector('#version').textContent;
  
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id,
    text:text},
    dataType:"JSON",
    success:function(data)
    {
     
        alert("guardado con exito");
     
    }
   })
  
 });
});
</script>