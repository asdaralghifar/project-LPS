<!DOCTYPE html>
<html lang="en">
<?php 
include('ceks.php');
include('../../config/koneksi.php'); 
include('../header.php')
 ?>

<body>
   <div class="container-fluid bg-dark position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-dark navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 20px;">
            <!-- <i class="flaticon-043-teddy-bear"></i> -->
            <span class="text-white font-weight-bold">Laporan Program Khusus</span>
            <span class="text-white font-weight-bold">Slb Aksara Centre</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.php" class="nav-item nav-link">Program Terapi Perilaku (ABA)</a>
                <a href="ot.php" class="nav-item nav-link">Program Terapi Okupasi (OT)</a>
                <a href="spech.php" class="nav-item nav-link">Program Terapi Bicara (Speech)</a>
                <a href="checklist.php" class="nav-item nav-link">Checklist Perilaku</a>
            </div>
            <a href="../logout.php" class="btn btn-danger px-4">Logout</a>
        </div>
    </nav>
</div>
    <!-- Page content-->
    <div class="container" style="margin-top: 70px;">
        <form action="tambah_aba.php" method="POST">
            <div class="card m-4 p-4">
                <h4>Pengisian Formulir Program Terapi Perilaku (ABA)</h4>
                
                <p class="text-danger">Mohon diisi sesuai kententuan dan apa yang anda lakukan.</p>
                <div class="card bg-light mb-2">
                    <div class="card-body pl-3 pr-2 pb-0 pt-3">
                        <p id="soal1">
                            <span class="badge badge-primary">1</span>
                            <span>Informasi Awal</span>
                        </p>
                        <?php  $sql = "SELECT * FROM siswa ORDER BY id";
                        $query = mysqli_query($con, $sql);?>
                        <input type='hidden' name="id_kategori" value='Terapi Perilaku (ABA)'>                  
                        <div class="form-group">
                            <select name="nama" class="form-control input-border-bottom">
                                <option selected disabled>Nama Anak</option>
                                <?php while($daftar = mysqli_fetch_array($query)){?>
                                <option value="<?php echo $daftar['nama'];?>"><?php echo $daftar['nama'];?></option>
                                <?php }; ?>
                            </select>
                        </div>
                        <?php  $sql = "SELECT * FROM guru ORDER BY id";
                        $query = mysqli_query($con, $sql);?>
                        <div class="form-group">
                            <select name="terapis" id="" class="form-control input-border-bottom">
                                <option selected disabled>Nama Terapis</option>
                                <?php while($daftar = mysqli_fetch_array($query)){?>
                                <option value="<?php echo $daftar['nama'];?>"><?php echo $daftar['nama'];?></option>
                                <?php }; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-2">
                    <div class="card-body pl-3 pr-2 pb-0 pt-3">
                        <p id="soal1">
                            <span class="badge badge-primary">2</span>
                            <span>Kegiatan</span>
                        </p>
                        <?php  $sql = "SELECT * FROM kategori_kegiatan WHERE kategori = 'Terapi Perilaku (ABA)'";
                        $query = mysqli_query($con, $sql);?>
                        <div class="form-group">
                            <select name="kegiatan" class="form-control input-border-bottom">
                                <option selected disabled>Nama Kegiatan</option>
                                <?php while($daftar = mysqli_fetch_array($query)){?>
                                <option value="<?php echo $daftar['nama'];?>"><?php echo $daftar['nama'];?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-2">
                    <div class="card-body pl-3 pr-2 pb-0 pt-3">
                        <p id="soal1">
                            <span class="badge badge-primary">3</span>
                            <span>Sub Kegiatan</span>
                        </p>
                        <?php  $sql = "SELECT * FROM kegiatan WHERE kategori = 'Terapi Perilaku (ABA)'";
                        $query = mysqli_query($con, $sql);?>
                        <div class="form-group">
                            <select name="subk" class="form-control input-border-bottom">
                                <option selected disabled>Sub Kegiatan</option>
                                <?php while($daftar = mysqli_fetch_array($query)){?>
                                <option value="<?php echo $daftar['sub_kegiatan'];?>"><?php echo $daftar['sub_kegiatan'];?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-2">
                    <div class="card-body pl-3 pr-2 pb-0 pt-3">
                        <p id="soal1">
                            <span class="badge badge-primary">4</span>
                            <span>Pencapaian/Hasil</span>
                        </p>
                        <div class="form-group">
                            <select name="pencapaian" id="" class="form-control input-border-bottom">
                                <option selected disabled>Jenis Pencapaian</option>
                                <option value="Tidak Tercapai">Tidak Tercapai</option>
                                <option value="Belum Konsisten">Belum Konsisten</option>
                                <option value="Tercapai">Tercapai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-2">
                    <div class="card-body pl-3 pr-2 pb-0 pt-3">
                        <p id="soal1">
                            <span class="badge badge-primary">5</span>
                            <span>Penjelasan</span>
                        </p>
                        <div class="form-group">
                            <textarea name="penjelasan" class="form-control" placeholder="Penjelasan Pencapaian"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary col-md-2 mt-4 float-right" style="margin-left:auto">
            </div>
        </form>
    </div>

    <?php include '../footer.php' ?>
</body>

</html>