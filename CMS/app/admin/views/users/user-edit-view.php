<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
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

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

    <h2>Edit View</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Username</th>
                <td><?php echo $user_details['user_name'];?></td>
                <th>First Name</th>
                <td><td><?php echo $user_details['first_name'];?></td>
            </tr>

            <tr>
                <th>Last Name</th>
                <td><?php echo $user_details['last_name'];?></td>
                <th>Mobile</th>
                <td><td><?php echo $user_details['mobile'];?></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><?php echo $user_details['email'];?></td>
                <th>Gender</th>
                <td><td><?php echo ucfirst($user_details['gender']);?></td>
            </tr>
            </thead>

        </table>
        <a href="?admin=show&module=users&action=edit&record=<?php echo $user_details['id'];?>">Edit</a>
        <a href="javascript:window.history.back();">Cancel</a>
    </div>
</main>