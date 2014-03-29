<h2 class="page-title" id="page_title"><span><?php echo lang('user:register_header') ?></span></h2>

<div class="alert alert-info">
	<span id="active_step"><?php echo lang('user:register_step1') ?></span> &gt;
	<span><?php echo lang('user:register_step2') ?></span>
</div>

<?php if(!empty($error_string)): ?>
<div class="alert alert-error">
	<?php echo $error_string; ?>
</div>
<?php endif;?>
<div class="row-fluid">
    <div class="span6 input-form">
        <?php echo form_open('users/activate', 'id="activate-user"'); ?>
        <ul>
                <li>
                        <label for="email"><?php echo lang('global:email') ?></label>
                        <?php echo form_input('email', isset($_user['email']) ? $_user['email'] : '', 'maxlength="40"');?>
                </li>

                <li>
                        <label for="activation_code"><?php echo lang('user:activation_code') ?></label>
                        <?php echo form_input('activation_code', '', 'maxlength="40"');?>
                </li>

                <li>
                        <?php echo form_submit('btnSubmit', lang('user:activate_btn'), array('class' => 'btn')) ?>
                </li>
        </ul>
        <?php echo form_close(); ?>
    </div>
</div>