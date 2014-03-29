
<?php 

echo Asset::render_js('camera');
echo Asset::render_css('camera'); 


?>


<div id="camera_wrap_4" class="pattern_2">
    <?php foreach ($slides as $s):?>
    <div  data-thumb="<?php echo site_url('files/large/'.$s->filename);?>" data-src="<?php echo site_url('files/large/'.$s->filename);?>">
        <div class="camera_caption left-bottom fadeIn" data-destination="left-bottom">
            <div class="slider-caption">
                
                <?php if ($s->showcaption==1):?>
                <h3><span><?php echo $s->html;?> </span></h3>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>



<script type="text/javascript">
    $('#camera_wrap_4').camera({
        height: '35%',
        loader: 'bar',
        pagination: false,
        thumbnails: false,
        hover: false,
        playPause:false,
        opacityOnGrid: false,
        imagePath: '',
        fx: 'simpleFade, scrollRight, scrollBottom'
    });
</script>