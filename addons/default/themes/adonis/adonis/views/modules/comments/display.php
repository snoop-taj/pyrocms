<section id="comments" class="vmargin">

    <h3 ><span><?php echo lang('comments:title'); ?></span></h3>
         
    <?php if ($comments): ?>
        <ul class="comment-list">
        <?php foreach ($comments as $item): ?>
            <li class="clearfix comment-holder">
                <div class="row-fluid">
                    <div class="avatar-image span1">
                        <div>
                            <?php echo gravatar($item->user_email, 60); ?>
                        </div>
                    </div>


                    <div class="comment-info span11">
                        <ul class="clearfix">
                            <li class="name">
                                <?php echo $item->website ? anchor($item->website, $item->user_name, 'rel="external nofollow"') : $item->user_name; ?>
                            </li>
                            <li class="comment-meta-separator">/</li>
                            <li>
                                <?php echo format_date($item->created_on); ?>
                            </li>
                            
                        </ul>
              
                        <div>
                            <?php if (Settings::get('comment_markdown') AND $item->parsed > ''): ?>
                                <?php echo $item->parsed; ?>
                            <?php else: ?>
                                <p><?php echo nl2br($item->comment); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>	
            </li>

        
        <?php endforeach; ?>
        </ul>

    <?php else: ?>
        <p><?php echo lang('comments:no_comments'); ?></p>
    <?php endif; ?>
</section>



