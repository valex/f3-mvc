<form action="<?php echo $BASE.'/user/create'; ?>" method="post" class="form-horizontal" role="form">

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span> Name
        </span>
        <input type="text" id="name" name="name" value="" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-envelope"></span> Email
        </span>
        <input type="text" id="email" name="email" value="" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-headphones"></span> Mobile
        </span>
        <input type="text" id="mobile" name="mobile" value="" class="form-control">
    </div><br/><br/>

    <div class="input-group col-sm-4">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-home"></span> Address
        </span>
        <textarea row="5" id="address" name="address" class="form-control"></textarea>
    </div><br/><br/>

    <div class="form-group">
        <div class="col-sm-4">
            <input type="hidden" name="create" value="create" />
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-ok"></span> Add User
            </button>
        </div>
    </div>
</form>