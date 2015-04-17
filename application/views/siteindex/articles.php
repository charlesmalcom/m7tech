<?php

echo"
    <div id='container'>
        <article>
";

    foreach($articleData as $row){

        echo"
            <h2>$row->articleTitle</h2>
            <div class='article-info'>Posted on $row->postedDate by <a href='#' rel='author'>$row->postedBy</a></div>
        ";

        echo html_entity_decode($row->article);

        echo "<br>
            <div 
                class='fb-like' 
                data-href='http://facebook.com/m7programming' 
                data-layout='standard' 
                data-action='like' 
                data-show-faces='true' 
                data-share='true'>
            </div>";

        }

    

echo"</article>

</div>

<div class='clear'></div>";