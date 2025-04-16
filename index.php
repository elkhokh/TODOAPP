
<?php
 require_once('inc/header.php'); 
$select= select_tasks();
?>

<!-- in this project i make CURD by database and php -->
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handeler/create.php" method="POST" class="form border p-2 my-5">
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new task">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new task">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php   
                    if(mysqli_num_rows($select)>0):
                        while($row=mysqli_fetch_assoc($select)): ?>
                
                            <tr>
                                <td><?=$row['id']; ?></td>
                                <td><?=$row['title'] ;?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                </td>
                            </tr>
                        
                            <?php endwhile; ?>
                            <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php require_once('inc/footer.php'); ?>