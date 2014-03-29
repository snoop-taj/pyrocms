
    <div class="row-fluid blog-list no-bar">
	{{ post }}
    
        <article class="row-fluid post-view">
            <div class="post-heading">
                <div class="date transition">{{ helper:date format="d" timestamp=created_on }}<br><span>{{ helper:date format="M" timestamp=created_on }}</span></div>
                <h4 class="post-title">{{ title }}</h4>
                <ul class="post-meta">  
                    {{if keywords}}
                    <li class="tags">
                        <span>
                            <i class="icon-tag"></i>
                            {{ keywords }}
                                <span><a href="blog/tagged/{{ keyword }}">{{ keyword }}</a></span>
                                <span class="separator"></span>
                            {{ /keywords }}
                        </span>

                    </li>
                    {{ endif }}
                    <li class="author"><i class="icon-user"></i><a href="user/view/{{author_id}}">{{ user:display_name user_id=author_id }}</a></li>
                    <li class="comments"><i class="icon-comment"></i>{{if ({comments:count entry_id=id entry_key="blog:posts"})}}{{comments:count entry_id=id entry_key="blog:posts"}}{{else}}0{{endif}}</li>
                </ul>
            </div>
            <div>
                    {{image:img}}
            </div>
            <div class="post-body">
               
               {{ body }}
              
            </div>   
            </article>    
            {{ /post }}
    </div>
    

<?php
if (Settings::get('enable_comments')){
    echo $this->comments->display() ;
    if ($form_display){echo $this->comments->form();}		
    else{echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled']))));}  
}
 ?>
    



                         
                            
               