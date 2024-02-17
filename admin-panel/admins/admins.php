<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php 

if(!isset ($_SESSION['admin_name'])){
  header("location: ".ADMINURL."/admins/login-admins.php");
}

$admins = $conn->query("SELECT * FROM admins");
$admins->execute();

$allAdmins = $admins->fetchAll(PDO::FETCH_OBJ);

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline"><i class="fas fa-user-tie"></i> Admins</h5>
             <a  href="create-admins.php" class="btn btn-primary mb-4 text-center float-right"><i class="fa-solid fa-plus"></i> Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><i class="fas fa-id-card"></i> Id</th>
                    <th scope="col"><i class="fas fa-user"></i> Admin Name</th>
                    <th scope="col"><i class="fas fa-envelope"></i> Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allAdmins as $admins) : ?>
                  <tr>
                    <th scope="row"><?php echo $admins->id; ?></th>
                    <td><?php echo $admins->adminname; ?></td>
                    <td><?php echo $admins->email; ?></td>
                   
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



      <?php require "../layouts/footer.php"; ?>