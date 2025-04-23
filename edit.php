<?php
require_once('inc/header.php');
?>

<?php
                if (!isset($_GET['id'])) {
    set_messages('danger', "No Task Selected");
    header("Location: edit.php");
                    exit;
                }
                      
                $id = $_GET['id'];
                $task = select_tasks();
                $select = null;
                while ($row = mysqli_fetch_assoc($task))  {
                    if ($row['id'] == $id) {
                        $select = $row;
                        break;
                    }
                }
                ?>
<!-- in this project i make CURD by database and php -->
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="handeler/update.php" method="POST" class="form border p-2 my-5">
            <input type="hidden" id="id" name="id" class="form-control" value="<?= $select['id'] ?>">

                <input type="text" name="title" class="form-control my-3 border border-success"
                value="<?=$select['title']?>">
                <input type="submit" value="update" class="form-control btn btn-primary my-3 " >
            </form>
        </div>
            </div>
    </div>


<?php require_once('inc/footer.php'); ?>