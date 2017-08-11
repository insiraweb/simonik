<script src="asset/js/jquery-3.2.1.min.js" charset="utf-8"></script>
<script>
  $(document).ready(function(){
      function getAll(){
        $.ajax({
          url   : 'gettentor.php',
          data  : 'action=cekall',
          cache : false,
          success : function(r){
            $("#tampil").html(r);
          }
        });
      }
      getAll();

      $("#unit").change(function(){
        var id = $(this).find(":selected").val();
        var dataString = 'action='+ id;

        $.ajax({
          url   : 'gettentor.php',
          data  : dataString,
          cache : false,
          success : function(r)
          {
            $("#tampil").html(r);
          }
        });
  });
  });
</script>
</body>
</html>
