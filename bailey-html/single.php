<?php get_header(); ?>
<style>
#news{width:260px;float:left;margin-top:30px;}
#quick-links ul li{float:none;line-height:30px;}
#news ul li {background: url('<?php bloginfo('template_directory') ?>/images/arr.png') no-repeat top 7px left;}
#inner-banner{width:100%;float:left;height:300px;background:url('<?php bloginfo('template_directory') ?>/images/banner1.jpg') no-repeat center;}
</style>
<div id="inner-banner">
<div id="inner-banner1">
<h1>News</h1>
</div>
</div>

<div id="inner-page">
<div id="inner-page1">
<div id="inner-page2">
      
<div id="inner-left">

    <?php if (have_posts())  ?>
    <div class="news">
                <h2><?php the_title(); ?></h2>
                <p><?php the_time('l, F jS, Y') ?></p>
                    <p><?php the_content(); ?></p>
                    </div>
</div>


                    
</div>                
</div>
</div>

<?php get_footer(); ?>