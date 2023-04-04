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


            <!-- /.box-header -->
            <div class="box-body">
			              <h2 class="box-title">My Orders</h2>

<ul class="nav nav-tabs">
    <li class="active"><a href="#stats" data-toggle="tab" aria-expanded="true">Stats</a></li>
    <li class=""><a href="#myorders" data-toggle="tab" aria-expanded="false">My Orders</a></li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="stats"> 
	<div class="well well-sm">
		<p class="text-info">Please understand that each tool you sell will be pending for <b>10 hours</b> before we pay you in order to give the buyer a chance to report it if it was bad.</p>
			<h4>Your Sales Static</h4>
			<ul>
				<li>All Sales :  <b>1</b> ($4)</li>				

			</ul>
		</div>
	</div>
    <div class="tab-pane fade in" id="myorders"> 
	<br>
<table width="100%" class="table table-striped table-bordered table-condensed sort" id="table">
                <thead>
                <tr>
				<th></th>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Item</th>
                  <th>Open</th>
                  <th>Price</th>
                  <th>Report ID</th>
                  <th>Report State</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
	<tr>
			<td></td>
					<td>24</td>
					<td>leads</td>
					<td>http://xbaseleet.xyz/seller/tutorial.html</td>
					<td><button onclick="openitem(24)" class="btn btn-primary btn-xs"> OPEN</button></td>
					<td>4$</td>
					<td>n/a</td>
					<td> 
										</td>
					<td>2023-04-03 04:37:52</td>
				</tr></tbody>
</table>
</div>
</div>

<script type="text/javascript">
function openitem(order){
  $("#myModalHeader").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalHeader"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
