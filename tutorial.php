<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	   	<link rel='shortcut icon' type='image/x-icon' href='../img/favicon.ico' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jerux Seller</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
  <link rel="stylesheet" type="text/css" href="css/tickets.css">
	<script type="text/javascript" src="./assets/jquery.js"></script>
	<script type="text/javascript" src="./assets/bootstrap.js"></script>
	<script type="text/javascript" src="./assets/bootbox.min.js"></script>
	<script type="text/javascript" src="./assets/sorttable.js"></script>
    <link href="./assets/style.css" rel="stylesheet">

    <style>
.sort {
  .sortable
}
.sort th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25BE" 
}
</style>
<style>
.content {
	display:none;
}

</style>
<script type="text/javascript">
    function ajaxinfo(){
      $.ajax({
      type:       'GET',
      url:        'ajaxinfo.html',
      timeout: 10000 ,

           success: function(data){
              if (data != '01'){
                var data = JSON.parse(data);
                  for (var prop in data) {
                  $("#"+prop).html(data[prop] ).show();
                }
              }
              else {
                window.location = "logout.html";
              }
           }
         });

  }
    setInterval(function(){ajaxinfo()}, 3000);

 ajaxinfo();
	</script>
</head>


<body>

    <div id="wrapper">
    <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">

                <li class="sidebar-brand"><a href="./index"><div class="navbar-brand" onclick="location.href=&#39;index.html&#39;"><font color="white"><b><span class="glyphicon glyphicon-fire"></span> Seller Panel</b></font></div></a></li>
                <li><a href="https://jerux.to/buyer/index.html" onclick="window.open(this.href);return false;"><font color="white">Back to Jerux SHOP <span class="glyphicon glyphicon-share-alt"></span></font></a></li>

                <li><font color="white"><b>Seller Dashboard</b></font></li>
                    <li><a href="./index.html" style="cursor: pointer;">Main</a></li>
		                      <li><a href="./sales.html" style="cursor: pointer;">Sales <div id="sales" class="label label-info"></div></a></li>
                    <li><a href="./withdraw.html" style="cursor: pointer;">Withdraw</a></li>
                    <li><a href="./reports.html" style="cursor: pointer;">My Reports </a></li>			

                <li><font color="white"><b>Tools Management</b></font></li>
                    <li><a href="./rdp.html" style="cursor: pointer;">RDP <span id="rdp" class="label label-info"></span></a></li>
                    <li><a href="./shell.html" style="cursor: pointer;">Shell <span id="shell" class="label label-info"></span></a></li>
                    <li><a href="./cpanel.html" style="cursor: pointer;">cPanel <span id="cpanel" class="label label-info"></span></a></li>
				<li><a href="./mailer.html">PHP Mailer <span id="mailer" class="label label-info"></span></a></li>
	<li><a href="./smtp.html">SMTP <span id="smtp" class="label label-info"></span></a></li>
                    <li><a href="./leads.html">Leads <span id="leads" class="label label-info"></span></a></li>
                    <li><a href="./scampage.html">Scampage <span id="scams" class="label label-info"></span></a></li>
                    <li><a href="./tutorial.html">Tutorial/Method <span id="tutorials" class="label label-info"></span></a></li>
           <li><a href="./banks.html">Bank Accounts <span id="banks" class="label label-info"></span></a></li>
	      <li><a href="./premium.html">Premium/Shop/Dating <span id="premium" class="label label-info"></span></a></li>		
            </ul>




        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <b><span id="menu-toggle" onmouseover="this.style.cursor='pointer'"><span class="glyphicon glyphicon-indent-right"></span></span></b>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div id="divPage">
 <script>
    var v_aa =0;
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if (v_aa == 1) {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-right"></span>').show();
          v_aa =0;
        }
        else {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-left"></span>').show();
          v_aa =1;     
        }
        
    });

    </script>
<div class="row">
<script>
	$(function() {
		$(".preload").fadeOut(900, function() {
			$(".content").fadeIn(0);
		});
	});
	function TabDiv(n,u){
    $("#all").html('').show();
    $("#add").html('').show();
    $("#massadd").html('').show();
    $("#unsold").html('').show();

    $("#"+n).html('<div id="mydiv"><img  src="../img/loadTab.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        u,
    success:    function(data)
    {
    $("#"+n).html(data).show();
    newTableObject = document.getElementById('table');sorttable.makeSortable(newTableObject);
    }
});  
}
</script>  
     <div class="preload">
<div id="mydiv"><img src="img/wait.gif" class="ajax-loader"></div>  

  </div>
     <div class="content">


	<h2>Tutorials / Methods</h2>
  <script>


function delet(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./ajax/dtuto.php?id="+id,
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
</script>


<ul class="nav nav-tabs">
		<li class="active"><a href="#static" data-toggle="tab" aria-expanded="true">Static</a></li>
		<li class=""><a href="#all" data-toggle="tab" aria-expanded="false" onclick="TabDiv('all','tutorialTab1.php')">All</a></li>
		<li class=""><a href="#add" data-toggle="tab" aria-expanded="false" onclick="TabDiv('add','tutorialTab2.php')">Add</a></li>
	<!--	<li class=""><a href="#mass" data-toggle="tab" aria-expanded="false" onclick="TabDiv('mass','tutorialTab3.php')">Mass Add</a></li> -->
	</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="static"> 
<div class="well well-sm">
        <h4>Rules</h4>
        <ul> 

<li><b>Tutorials #1 </b>Please don't put fake tutorial and make sure it's worth the price</li>
<li><b>Tutorials #2 </b>Make sure the tutorial include everything the customer need to finish the job (including tools)</li>
<li><b>Tutorials #3 </b>We allow teamviewer leasons but don't ask customer for more money (include all price with the tool)</li>
<li>Make sure that the link is 100% working and will be working for the next months.</li>
<li>If the tool link is not working please delete it and readd it with the correct link</li>
<li>If you have mistaken or need to edit a tool just remove it and add it again</li>
        </ul> 
      </div>
      </div>
	  
	<div class="tab-pane fade" id="all"></div>
    <div class="tab-pane fade" id="add"></div>

</div>
</div></div>
            </div>
            </div>
        </div>
