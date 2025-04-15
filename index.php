
<?php require_once('inc/header.php');  ?>

<!-- in this project i make CURD by database and php -->
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handeler/create.php" method="POST" class="form border p-2 my-5">
                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
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
                            <tr>
                                <td>1</td>
                                <td>New Task</td>
                                <td>
                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="#" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- git remote add origin https://github.com/elkhokh/TODOAPP.git
git branch -M master
git push -u origin master -->

    <?php require_once('inc/footer.php'); ?>