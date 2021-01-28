<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div>
                <input type="text" placeholder="Search Username, Name, Email or Mobile">
        </div>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
<<<<<<< Updated upstream
=======
    <link href="assets/css/users-list-view.css" rel="stylesheet">
>>>>>>> Stashed changes

   <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

    <h2>Users List View</h2>
    <div class="table-responsive">
<<<<<<< Updated upstream
        <table class="table table-striped table-sm">
=======
    
        <table class="table table-dark table-sm">
>>>>>>> Stashed changes
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
<<<<<<< Updated upstream
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
=======
                <th>Password</th>
                <th>Email</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Country<th>
                <th>State</th>
                <th>Zip</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Action</th>
                <th>Action</th>

>>>>>>> Stashed changes
            </tr>
            </thead>
            <tbody>
            <?php
            $counter = 0;
            while($row = mysqli_fetch_assoc($users_list)){
                $counter++;
                ?>
            <tr>
                <td><?php echo $counter;?></td>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
<<<<<<< Updated upstream
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><a href="?admin=show&module=users&action=view&record=<?php echo $row['id'];?>">View</td>
                <td><a href="?admin=show&module=users&action=edit&record=<?php echo $row['id'];?>">Edit</td>
                <td><button onclick="deleteUser(<?php echo $row['id'] ?>)">Delete</button></td>
=======
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['state'];?></td>
                <td><?php echo $row['zip'];?></td>
                <td><?php echo $row['course'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><a class="btn info btn-sm" href="?admin=show&module=users&action=view&record=<?php echo $row['id'];?>">View</td>
                <td><a class="btn default btn-sm" href="?admin=show&module=users&action=edit&record=<?php echo $row['id'];?>">Edit</td>
                <td><button  class="btn danger btn-sm" onclick="deleteUser(<?php echo $row['id'] ?>)">Delete</button></td>
>>>>>>> Stashed changes
            </tr>
            <?php } ?>

            </tbody>
        </table>
        <?php if($counter === 0) {?>
        No records found
        <?php } ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
<<<<<<< Updated upstream
                <li <?php if($page > 1) { ?> class="page-item" <?php } else {?> class="page-item disabled" <?php } ?>>
                    <a class="page-link"  href="?admin=show&module=users&action=list&page=<?php echo ($page - 1) ?>" tabindex="-1"
                       aria-disabled="true">Previous</a>
=======
                <li <?php if($page >= 1) { ?> class="page-item" <?php } else {?> class="page-item disabled" <?php } ?>>
                    <a class="page-link" href="?admin=show&module=users&action=list&page=<?php echo ($page - 1) ?>" tabindex="-1" aria-disabled="true">Previous</a>
>>>>>>> Stashed changes
                </li>

                <?php
                $page_link = null;
                $page = ($page > 1 ) ? $page : 1;
                for($i = 1; $i < $total_pages; $i++){

                    if($i == $page){
                        $page_link .= "<li class='page-item active'><a class='page-link' href='?admin=show&module=users&action=list&page=$i'>$i</a></li>";
                    }else {
                        $page_link .= "<li class='page-item'><a class='page-link' href='?admin=show&module=users&action=list&page=$i'>$i</a></li>";
                    }
                }
                echo $page_link;
                ?>
<<<<<<< Updated upstream

                <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
=======
                <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <li <?php if($page <= 1) { ?> class="page-item" <?php } else {?> class="page-item enable" <?php } ?>>
                    <a class="page-link" href="?admin=show&module=users&action=list&page=<?php echo ($page - 2) ?>">Next</a>
>>>>>>> Stashed changes
                </li>
            </ul>
        </nav>
    </div>
</main>

<script>
    function deleteUser(id){
        // Method1 Call Ajax
        // Method2 Call Href
        if(confirm("Do you want to delete this user.")){
            window.location.href = "?admin=show&module=users&action=delete&record="+id;
        }else{
            alert("I am not intrested to delete this user.");
        }
    }
<<<<<<< Updated upstream
=======

   
>>>>>>> Stashed changes
</script>