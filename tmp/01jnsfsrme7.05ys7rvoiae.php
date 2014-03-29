<form action="<?php echo $BASE.'/user/update'; ?>" method="post" class="form-horizontal" role="form">

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span> Name
        </span>
        <input type="text" id="name" name="name" value="<?php echo $POST['name']; ?>" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-envelope"></span> Email
        </span>
        <input type="text" id="email" name="email" value="<?php echo $POST['email']; ?>" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-headphones"></span> Mobile
        </span>
        <input type="text" id="mobile" name="mobile" value="<?php echo $POST['mobile']; ?>" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-home"></span> Address
        </span>
        <textarea row="5" id="address" name="address" class="form-control"><?php echo $POST['address']; ?></textarea>
    </div><br/><br/>

    <div class="form-group">
        <div class="col-sm-4">
            <input type="hidden" name="id" value="<?php echo $POST['id']; ?>" />
            <input type="hidden" name="update" value="update" />
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-edit"></span> Update
            </button>
        </div>
    </div>
</form>