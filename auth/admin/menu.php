<!DOCTYPE html>
<html lang="en">
<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>	
							</a>
						</li>
						<li class="nav-item">
							<a href="duser.php">
								<i class="fas fa-user"></i>
								<p>Daftar User</p>	
							</a>
						</li>
						<li class="nav-item">
							<a href="dguru.php">
								<i class="fas fa-user"></i>
								<p>Daftar Guru</p>	
							</a>
						</li>
						<li class="nav-item">
							<a href="dsiswa.php">
								<i class="fas fa-user"></i>
								<p>Daftar Siswa</p>	
							</a>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Program</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="dkategori.php">
											<span class="sub-item">Daftar Kegiatan</span>
										</a>
									</li>
									<li>
										<a href="dkegiatan.php">
											<span class="sub-item">Daftar Program</span>
										</a>
									</li>
									<li>
										<a href="detail.php">
											<span class="sub-item">Laporan Kegiatan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables1">
								<i class="fas fa-table"></i>
								<p>Checklist</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables1">
								<ul class="nav nav-collapse">
									<li>
										<a href="dlist.php">
											<span class="sub-item">Daftar Perilaku</span>
										</a>
									</li>
									<li>
										<a href="ceklist.php">
											<span class="sub-item">Laporan Perilaku</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="mx-4 mt-2">
							<a href="../logout.php" onclick="return confirm('Apakah anda yakin ingin Log Out?')" class="btn btn-primary btn-block">Log Out</a> 
						</li>
					</ul>
				</div>
			</div>
</div>
</html>