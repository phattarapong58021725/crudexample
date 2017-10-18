<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>
<center>
	<div class ="contanner">
		<div class ="row">
			<div class="col-md-12">
				<h1>My frist bootstrap</h1>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addMember" >
				ควย
				</button>
				<button type="button" class="btn btn-warning">ควยใหญ่กว่า</button>
			</div>
		</div>
	</div>
	
	
	<div class="modal fade" role="dialog" id="addMember">
		<div class="modal-dialog">
			 <div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">หัวควย</h4>
				</div>
					<div class="modal-body">
						<p>บางครั้งควยก็ไม่ใหญ่</p>
					</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">ปิดควย</button>
						</div>
			</div>
		</div>
	</div>
</center>

	
	
	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	

</body>
</html>