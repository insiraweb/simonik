<?php
include 'config/koneksi.php';
$action = $_REQUEST['action'];
 if($action=="cekall"){
  $stmt=$konek->prepare('SELECT id_o, nama FROM tb_office ORDER BY nama');
  $stmt->execute();
 }else{
  $stmt=$konek->prepare('SELECT id_o, nama FROM tb_office WHERE id_o=:sid ORDER BY nama');
  $stmt->execute(array(':sid'=>$action));
 } ?>

 <div class="row">
 <?php
 if($stmt->rowCount() > 0){
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
   extract($row); ?>

   <div class="col-xs-3">
   <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $nama; ?></div><br />
   </div>
   <?php
  }
 }else{
  ?>
  <div class="col-xs-3">
  <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $nama; ?></div><br />
  </div>
    <?php } ?>
 </div>
