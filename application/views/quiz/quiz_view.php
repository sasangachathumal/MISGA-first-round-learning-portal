<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>resources/css/quiz.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="build.css">
<!------ Include the above in your HEAD tag ---------->

	
    <script src="main.js"></script>
</head>
<body background="<?php echo base_url(); ?>resources/images/quiz_bg.jpg">
    <h3 style="text-align: center">
        [[Subject]] - Quiz 1
    </h3>
<div class="container">
	<div class="row">
	    <br/>
        <div class="panel panel-warning">
            <div class="panel-heading">  
                 <strong style="font-size: 17px">Q 01.</strong> 
                 <div  style="font-size: 16px">
                 HTML stands for?
             </div> 
                 </div>  
        
<div class = "panel-body" >
      <h5><b>Select 1 more more answers</b></h5>
           </div>
           <div class="funkyradio">
<ul class = "list-group">
    <li class = "list-group-item">
     <div class="funkyradio-warning">
        <input type="checkbox" name="checkbox" id="check1" />
       <label for="check1">Hyper Text Markup Language</label>
        </div>
    </li>
    <li class = "list-group-item">
    <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="check2" />
            <label for="check2">High Text Markup Language</label>
        </div>
    </li>
    <li class = "list-group-item">
    <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="check3" />
            <label for="check3">Hyper Tabular Markup Language</label>
        </div>
    </li>
    <li class = "list-group-item">
    <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="check4" />
            <label for="check4">How To Meet Laidies</label>
        </div>
    </li>
    <li class = "list-group-item">
    <div class="funkyradio-warning">
            <input type="checkbox" name="checkbox" id="check5" />
            <label for="check5">None of these</label>
        </div>
    </li>
   </ul>

   </div>
   <center>
   <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</center>

</div>
</div>
</body>
</html>