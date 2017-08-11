<?php
  include 'header.php';
  ?>
  <select id="unit">
    <option value="cekall" selected="selected">-- pilih unit --</option>
<?php
  include 'config/koneksi.php';
  $stmt = $konek->prepare("SELECT unit FROM tb_tentor");
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    extract($row);
    ?>
    <option value="<?php echo $unit; ?>"><?php echo $unit;?></option>
    <?php } ?>
  </select>
  <hr>
  <div class="" id="tampil">
    <!--tampilkan data detail disini-->
  </div>
  <?php include 'footer.php'; ?>
