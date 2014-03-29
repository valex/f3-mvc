<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li <?php if ($page_head == 'User List'): ?>class="active"<?php endif; ?>>
                <a href="<?php echo $BASE.'/'; ?>">
                    <span class="glyphicon glyphicon-th-list"></span> Read
                </a>
            </li>
            <li <?php if ($page_head == 'Create User'): ?>class="active"<?php endif; ?>>
                <a href="<?php echo $BASE.'/user/create'; ?>">
                    <span class="glyphicon glyphicon-plus-sign"></span> Create
                </a>
            </li>
            <?php if ($page_head == 'Update User'): ?>
                <li class="active">
                    <a href="javascript:void(0);">
                        <span class="glyphicon glyphicon-plus-sign"></span> Update
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
