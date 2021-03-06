<h2 class="page-title" id="page_title">{{helper:lang line="user:login_header"}}</h3>

<div class="row-fluid">
    <div  class='span6 input-form'>


        <?php if (validation_errors()): ?>
        <div class="alert alert-error">
                <?php echo validation_errors();?>
        </div>
        <?php endif; ?>
        <div class="row-fluid">
            <?php echo form_open('users/login', array('id'=>'login-small')); ?>

            <ul>
                    <li class="email">
                            <div class="input-prepend span12">
                              <span class="add-on"><i class="icon-user"></i></span>
                              <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="span11" id="prependedInput" placeholder="'.lang('global:email').'"')?>
                            </div>
                    </li>
                    <li class="pword">
                            <div class="input-prepend span12">
                                  <span class="add-on"><i class="icon-key"></i></span>
                                  <input type="password" name="password" maxlength="20" class="span11" id="prependedInput" placeholder="{{helper:lang line='user:password_label'}}" />
                            </div>
                    </li>
                    <li>
                        <div class='row-fluid'>
                            <div class='span6'>
                                <label class="checkbox">
                                    <?php echo form_checkbox('remember', '1', FALSE); ?> <?php echo lang('user:remember'); ?>
                                </label>
                            </div>
                            <div class='span6'>
                                <button type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class='btn btn-info pull-right'>{{helper:lang line="user:login_btn"}}</button> 
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class='row-fluid'>
                            <div class='span6'>
                                <a href="<?php echo site_url('register');?>" class="btn btn-block btn-info">{{helper:lang line='user:register_btn'}}</a>
                            </div>
                            <div class='span6'>
                                <a href="<?php echo site_url('users/reset_pass');?>" class="btn btn-block">{{helper:lang line='user:reset_password_link'}}</a>
                            </div>
                        </div>
                    </li>

            </ul>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
    