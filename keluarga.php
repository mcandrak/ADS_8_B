<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro = new Nilai($db);
$stmt = $pro->readAll();
$count = $pro->countAll();

if(isset($_POST['hapus-contengan'])){
    $imp = "('".implode("','",array_values($_POST['checkbox']))."')";
    $result = $pro->hapusell($imp);
    if($result){
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showSuccessToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    } else{
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showErrorToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    }
}
?>
<form method="post">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Monitoring Lansia</h4>
		</div>
		<div class="col-md-6 text-left">
           <table class="table" id="tabeldata"> 

                <tr>
                    <td rowspan="4" width="100px"><a href="#"><img src="images/lansiacontoh.jpg"></a></td>
                    <td width="120px"> Nama Lansia :</td>
                    <td width="200"> Suparto </td>
                </tr>
                <tr>
                    <td> Alamat Lansia :</td>
                    <td> Jln Mayjen Panjaitan gg 12 no. 17</td>
                </tr>
                <tr>
                    <td> Kondisi Lansia :</td>
                    <td> alergi obat A</td>
                </tr>
           </table>

		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="150px">Tanggal dan Waktu</th>
                <th>Keterangan</th>
                <th width="100px">Interaksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Tanggal dan Waktu</th>
                <th>Keterangan</th>
                <th>Interaksi</th>
            </tr>
        </tfoot>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td style="vertical-align:middle;"><?php echo $row['ket_nilai'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['jum_nilai'] ?></td>
                <td class="text-center" style="vertical-align:middle;">
					<a href="#" class="btn btn-warning">kirim umpan balik</a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
    </form>		
<?php
include_once 'footer.php';
?>