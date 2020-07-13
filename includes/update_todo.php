<form action="" method="post">
    <div class='form-group'>
            <?php
                if(isset($_GET['update'])){
                    $todo_id = $_GET['update'];
                    $query = "SELECT * FROM todo WHERE id = {$todo_id} ";
                    $fetch_specific_todo = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($fetch_specific_todo)){
                    $todo_id = $row['id'];
                    $todo_name = $row['todo_name'];
                    $todo_content = $row['todo_content'];
                    echo "<div class='form-group'>";
                    echo "<label for='todo_name'>Todo Title</label>";
                    echo "<input type='text' value='$todo_name' name='todo_name' class='form-control'>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo "<label for='todo_content'>Todo Content</label>";
                    echo "<textarea value='<?php if(isset($todo_content)){ echo $todo_content}?>' cols='30' rows='5' name='todo_content' class='form-control'></textarea>";
                    echo "</div>";
                    }
                }
            ?>
    </div>                            
    <?php
        if(isset($_POST['update_todo'])){
            $the_todo_id = $_POST['id'];
            $the_todo_name = $_POST['todo_name'];
            $the_todo_content = $_POST['todo_content'];
            $query = "UPDATE todo SET todo_name = '{$the_todo_name}', todo_content = '{$the_todo_content}' WHERE id = {$todo_id} ";
            $update_todo = mysqli_query($connection, $query);
        if(!$update_todo){
            die("Error ". mysqli_error($connection));
            }
            header("Location: index.php");
        }
    ?>
        <div class='form-group'><button type='submit' name='update_todo' class='btn btn-success col-sm-12 col-md-12 col-lg-12 col-xl-12'><i class='fa fa-edit'></i> Update</button></div>
</form>