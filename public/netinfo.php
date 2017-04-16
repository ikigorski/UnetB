<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNetB - Cadastro</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body>
    <div class="wrapper">

      <?php
        include "../public/header.inc";
       ?>

       <div class="container center-panel">
         <button onclick="document.getElementById('id01').style.display='block'" style="width:90%;">Testar</button>

         <div id="id01" class="modal">

           <form class="modal-content animate" action="">
             <div class="imgcontainer">
               <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               <div class="container">
                 <div class="container center" style="background-color:#f1f1f1">
                   <p>
                     <?php
                     include "../connectionspeed.php";
                     ?>
                     </p>
                   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Sair</button>
                 </div>
               </div>
             </form>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>

          </div>
        </div>
      </div>

    <div class="footer">
      <?php
      include "../public/footer.inc";
      ?>
    </div>

</body>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>
