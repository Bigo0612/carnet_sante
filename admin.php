<?php

include "assets/back/inc/pdo.php";

$sql = "SELECT * from users WHERE 1";
$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchALL();

?>

<?php include "admin_header.php"; ?>


                    <i class="fas fa-table"></i> Liste des utilisateurs <a href="user_creation.php">Créer un nouvelle utilisateur</a></div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Edition</th>
                                    <th>Supression</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($users as $key => $user): ?>
                                <tr>
                                  <td><?php echo $user['prenom']; ?></td>
                                  <td><?php echo $user['email']; ?></td>
                                  <td><?php echo $user['roles'] ?></td>
                                  <td><a class="btn btn-success"href="user_edition.php?id=<?php echo $user['id'] ?>">EDITION</a></td>
                                  <td><a class="btn btn-danger" href="user_suppression.php?id=<?php echo $user['id'] ?>">SUPPRESSION</a></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>

                      </div>
                    </div>

<?php include "admin_footer.php"; ?>
