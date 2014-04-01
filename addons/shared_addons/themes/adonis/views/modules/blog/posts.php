
{{ if posts }}
    <div class="row-fluid blog-list">
	{{ posts }}
        <article class="row-fluid">
            {{if exists image:img}}
            <div class="span4 post-thumb">
                <a href="{{url}}">
                    {{image:img}}
                    <div class="date transition">{{ helper:date format="d" timestamp=created_on }}<br><span>{{ helper:date format="M" timestamp=created_on }}</span></div>
                    <div class="overlay"></div>
                    <div class="hidden-more transition">Continue reading →</div>
                </a>
            </div>
            
            {{else}}
            <div class="span4 post-no-pic">
                <div class="date transition">{{ helper:date format="d" timestamp=created_on }}<br><span>{{ helper:date format="M" timestamp=created_on }}</span></div>
            </div>
            {{endif}}
            <div class="span8 post-body">
                <h4 class="post-title"><a href="{{url}}">{{ title }}</a></h4>
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
                    <li class="comments"><i class="icon-comment"></i>{{ comment_count }}</li>
                </ul>
                <p class="post-intro">{{ intro }}</p>
                <a href="{{url}}" class="read-more">Continue reading →</a>
            </div>   
            </article>    
            {{ /posts }}
    </div>
    
	{{ pagination }}

{{ else }}
	
	{{ helper:lang line="blog:currently_no_posts" }}

{{ endif }}



                         
                            
               