<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1421813684786088',
            xfbml      : true,
            version    : 'v2.2'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        //js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<1421813684786088>";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<?php
/*
<div>
    <div>
        <span>Facebook </span>
    </div>
        <iframe href="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com&width=223&colorscheme=light&show_faces=false&border_color=%23FFFFFF&stream=true&header=false&height=400" scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 223px; height: 56px;" allowtransparency="true">
        </iframe>
</div>
*/
?>