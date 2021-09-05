

<?php
  include_once "conexion.php";
  $sentencia = $base_de_datos->query("SELECT * FROM productos;");
  $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php
  include_once "enlaces/head.php";
?>

<body class="sb-nav-fixed">


<?php
  include "enlaces/nav_lateral.php";
  ?>



    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
         
          
          </div>
          <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Productos</div>
            <div>
              <br>
            <a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
            </div>
            <br>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
          <th>ID</th>
          <th>Código</th>
          <th>Descripción</th>
          <th>Precio de compra</th>
          <th>Precio de venta</th>
          <th>Cantidad</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Código</th>
                      <th>Descripción</th>
                      <th>Precio de compra</th>
                      <th>Precio de venta</th>
                      <th>Cantidad</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
                    <?php foreach($productos as $producto){ ?>

                    <tr>
                     <td><?php echo $producto->id ?></td>
          <td><?php echo $producto->codigo ?></td>
          <td><?php echo $producto->descripcion ?></td>
          <td><?php echo $producto->precioCompra ?></td>
          <td><?php echo $producto->precioVenta ?></td>
          <td><?php echo $producto->existencia ?></td>
          <td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
          <td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
     
    </div>
  </div>
   <br>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
  <?php
    include_once "enlaces/link.php";
  
  ?>
</body>

</html>