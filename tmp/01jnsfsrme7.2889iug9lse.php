<table width="600" cellpadding="5" class="table table-hover table-bordered">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>


    <tbody>
    <?php foreach (($users?:array()) as $user): ?>
        <tr>
            <td><?php echo trim($user['name']); ?></td>
            <td><?php echo trim($user['email']); ?></td>
            <td><?php echo trim($user['mobile']); ?></td>
            <td><?php echo trim($user['address']); ?></td>
            <td>
                <a href="<?php echo $BASE.'/user/update/'. $user['id']; ?>" class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </a>
                <a href="<?php echo $BASE.'/user/delete/'. $user['id']; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span>Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>