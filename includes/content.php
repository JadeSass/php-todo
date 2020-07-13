<div class="container bd-content">
    <h2 class="text-primary"><i class="fa fa-edit text-primary"></i> Todo App</h2>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php
            if(isset($_POST['create_todo'])){
                $todo_name = $_POST['todo_name'];
                $todo_content = $_POST['todo_content'];
                if($todo_name == "" || empty($todo_name) && $todo_content == "" || empty($todo_content)){
                    echo "<div class='alert alert-danger'>Please fill in the necessary field.</div>";
                }else{
                    $query = "INSERT INTO todo(todo_name, todo_content) VALUE ('{$todo_name}', '$todo_content')";
                    $insert_query = mysqli_query($connection, $query);
                }
            }
            ?>
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="todo_name">Todo Title</label>
                        <input type="text" name="todo_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="todo_content">Todo Content</label>
                        <textarea type="text" name="todo_content" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-success col-sm-12 col-md-12 col-lg-12 col-xl-12" type="submit" name="create_todo">Create Todo</button>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php
                if(isset($_GET['update'])){
                    $todo_id = $_GET['update'];
                    include "includes/update_todo.php";
                }
            ?>
            </div>
    <?php
        $query = "SELECT * FROM todo";
        $fetch_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($fetch_query)){
            $todo_id = $row['id'];
            $todo_name = $row['todo_name'];
            $todo_content = $row['todo_content'];
            ?>
            <?php
            if(isset($_GET['delete'])){
                $todo_id = $_GET['delete'];
                $query = "DELETE FROM todo WHERE id = {$todo_id}";
                $delete_query = mysqli_query($connection, $query);
                header("Location: index.php");
            }
            ?>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 section-todo">
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12">
                    <div class="card">
                        <h4 class="text-primary"><b><?php echo $todo_name?></b></h4>
                        <p><?php echo $todo_content ?></p>
                        <?php echo "<a href='index.php?delete={$todo_id}' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a>" ?>
                        <?php echo "<a href='index.php?update={$todo_id}' class='btn btn-success'><i class='fa fa-edit'></i> Update</a>" ?>
                    </div>  
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</div>