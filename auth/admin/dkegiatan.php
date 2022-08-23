<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; 
include('ceks.php');
include('../../config/koneksi.php'); ?>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets1/img/profil3.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									
									<li>
										<a class="dropdown-item" href="../logout.php" onclick="return confirm('Apakah anda yakin ingin Log Out?')">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<?php include "menu.php"?>;
		<!-- Sidebar -->
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Daftar Program</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<?php  
								
								if (isset($_GET['id']) == 'id') {
									$sql = "DELETE FROM `kegiatan` WHERE `id`='$_GET[id]'";
									mysqli_query($con, $sql);
								}
								
								$sql = "SELECT * FROM kegiatan";
                                $query = mysqli_query($con, $sql);	
								?>
								
								<div class="card-header">
									<div class="d-flex align-items-center">
										<a href="tkegiatan.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>Add</a>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th style="width: 10%">Action</th>
													
													<th>Nama Program</th>
													<th>Nama Kegiatan</th>
													<th>Sub Kegiatan</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											
											while($daftar = mysqli_fetch_array($query)){;
											?>
												<tr>
											
												<td>
												<!-- echo "<td><a href='jadwal.php?id=".$jadwal['id']."' class='btn btn-danger ' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?') \">Delete</a>
                                            		<a href='update_jadwal.php?id=".$jadwal['id']."' class='btn btn-success'>Update</a>"; -->
													<div class="form-button-action">
															
															<a href="dkegiatan.php?id=<?php echo $daftar['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-link btn-danger">
																<i class="fa fa-times"></i>
															</a>
														</div>
													</td>
													
													<td><?php echo $daftar['kategori']; ?></td>
													<td><?php echo $daftar['nama_kegiatan']; ?></td>
													<td><?php echo $daftar['sub_kegiatan']; ?></td>
													
																									
												</tr>
												<?php }; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include "footer.php";?>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets1/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets1/js/core/popper.min.js"></script>
	<script src="../../assets1/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets1/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets1/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets1/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets1/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets1/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets1/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>