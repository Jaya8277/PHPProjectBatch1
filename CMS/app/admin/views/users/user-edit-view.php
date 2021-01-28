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
<<<<<<< Updated upstream

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

    <h2>Edit View</h2>
    <div class="table-responsive">
        <form method="post" action="?admin=show&module=users&action=update">
=======
    <link href="assets/css/user-edit-view.css" rel="stylesheet">
    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
<div class="container">
    <h2>Edit View</h2>
    <div class="table-responsive">
    <form method="post" action="?admin=show&module=users&action=update">
>>>>>>> Stashed changes
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <input type="hidden" name="record" value="<?php echo $user_details['id'];?>">
                <th>Username</th>
<<<<<<< Updated upstream
                <td><?php echo $user_details['user_name'];?></td>
=======
                <td>
                <input type="text" name="user_name" id="user_name" value="<?php echo $user_details['user_name'];?>">
            </td>
                
>>>>>>> Stashed changes
                <th>Status</th>
                <td>
                    <select id="status" name="status" >
                        <option value="">Select</option>
                        <option <?php if($user_details['status'] === 'Active') {?> selected<?php }?> value="1">Active</option>
                        <option <?php if($user_details['status'] === 'Inactive') {?> selected <?php }?> value="0">Inactive</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Is Admin</th>
                <td>
                    <input type="checkbox" name="is_admin" id="is_admin" <?php if($user_details['is_admin'] === 'on') {?> checked<?php }?>>
                </td>
                <th>Gender</th>
<<<<<<< Updated upstream
                <td><?php echo ucfirst($user_details['gender']);?></td>
=======
                <td>
                    <input type="text" name="gender" id="gender" value="<?php echo ucfirst($user_details['gender']);?>">
                </td>
>>>>>>> Stashed changes
            </tr>

            <tr>
                <th>First Name</th>
                <td>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $user_details['first_name'];?>">
                </td>
                <th>Last Name</th>
<<<<<<< Updated upstream
                <td><?php echo $user_details['last_name'];?></td>
=======
                <td>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $user_details['last_name'];?>">
                </td>
                
>>>>>>> Stashed changes
            </tr>

            <tr>
                <th>Mobile</th>
<<<<<<< Updated upstream
                <td><?php echo $user_details['mobile'];?></td>
                <th>Email</th>
                <td><?php echo $user_details['email'];?></td>
=======
                <td>
                <input type="text" name="mobile" id="mobile" value="<?php echo $user_details['mobile'];?>">
                </td>
                <th>Email</th>
                <td>
                <input type="text" name="email" id="email" value="<?php echo $user_details['email'];?>">
                </td>
                
>>>>>>> Stashed changes
            </tr>

            <tr>
                <th>Address</th>
<<<<<<< Updated upstream
                <td><?php echo $user_details['address'];?></td>
                <th>Pincode</th>
                <td><?php echo $user_details['zip'];?></td>
=======
                <td>
                <input type="text" name="address" id="address" value="<?php echo $user_details['address'];?>">
            </td>
                <th>Pincode</th>
                <td>
                <input type="text" name="zip" id="zip" value="<?php echo $user_details['zip'];?>">
                </td>
>>>>>>> Stashed changes
            </tr>

            <tr>
                <th>State</th>
<<<<<<< Updated upstream
                <td><?php echo ucfirst($user_details['state']);?></td>
                <th>Country</th>
                <td><?php echo $user_details['country'];?></td>
            </tr>

            </thead>

        </table>
        <button>Update</button>
        <a href="javascript:window.history.back();">Cancel</a>
        </form>
    </div>
=======
                <td>
                <input type="text" name="state" id="state" value="<?php echo ucfirst($user_details['state']);?>">
            </td>
                <th>Country</th>
                <td>
                <input type="text" name="country" id="country" value="<?php echo $user_details['country'];?>">
            </td>
            </tr>
           
           

            </thead>

        </table>     
        
        <button class="btn info btn-sm">Update</button>
        <a class="btn danger btn-sm" href="javascript:window.history.back();">Cancel</a>
        </form>
    </div>
</div>
>>>>>>> Stashed changes
</main>