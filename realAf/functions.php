<?php 
function realaf_theme_support(){
    add_theme_support( 'menus' );
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support( 'editor-styles' );
    add_theme_support('html5');
    register_sidebar( array(
        'name'  => 'Left Sidebar',
        'id'    => 'lsidebar',
        'description'=>'this is left sidebar. Drag and Drop any element of item.',
         'class'    =>  'widget',
        'before_widget'=>'<div class="widget wid-vid wid-comment wid-banner wid-category wid-tweet post content nav wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<div class="heading">
        <h4>',
        'after_title'=>'</h4>
        </div>',
        'before_sidebar'=>'<div class="">',
        'after_sidebar'=>'</div>'
    ) );
    register_sidebar(array(
        'name'=> 'Footer Sidebar',
        'id'    =>  'fsidebar',
        'description'=> 'This is footer sidebar. Drug and Drop any item here',
        
        'before_title'=>    '
        <div class="footer-heading" style="list-style:none;"><h4>',
        'after_title'=> '</h4></div>
        <div class="content">',
        
    ));
}
add_action('after_setup_theme','realaf_theme_support');

// link css and javescript
function realaf_css_script(){
    wp_enqueue_style('stylesheet',get_stylesheet_uri());
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/owl-carousel/owl.carousel.css');
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('datepicker',get_template_directory_uri().'/css/bootstrap-datetimepicker.min.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/font-awesome-4.4.0/css/font-awesome.min.css');
    
    

    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-2.1.1.js',array('jquery'),true,true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),true,true);
    wp_enqueue_script('datepicker',get_template_directory_uri().'/js/bootstrap-datetimepicker.js',array('jquery'),true,true);
    wp_enqueue_script('local',get_template_directory_uri().'js\bootstrap-datetimepicker.js',array('jquery'),true,true);
    wp_enqueue_script('localtimepicker',get_template_directory_uri().'/js/bootstrap-datetimepicker.fr.js',array('jquery'),true,true);
    wp_enqueue_script('owl-carousal',get_template_directory_uri().'/owl-carousel/owl.carousel.js',array('jquery'),true,true);
    wp_enqueue_script('custom-1',get_template_directory_uri().'/js/custom-1.js',array('jquery'),true,true);
    wp_enqueue_script( 'custom-2', get_template_directory_uri().'/js/custom-2.js',array('jquery'),true,true);
    
}
add_action('wp_enqueue_scripts','realaf_css_script');

function realaf_comment($avt){?>
    
    
    <div class="content">
        <div class="post">
            <a href="<?php comment_link();?>">
                
            </a>
            <div class="gutter-7px">
                <?php echo get_avatar($avt);?>
            </div>
            <div class="wrapper">
                <h5><?php comment_author();?></h5>
                <a href="#"><h5><?php echo get_comment_text();?></h5></a>
                <ul class="list-inline">
                    <li><i class="fa fa-calendar"></i><?php comment_date( 'F d, Y ');?><?php comment_time( 'g:i a' );?></li> 
                    <li><i class="fa fa-thumbs-up"></i>1,200</li>
                </ul>
            </div>
    </div>
<?php
}
add_filter('duplicate_comment_id', '__return_false');

function search_filter($query){
    if($query->is_search()){
        $query->set('post_type',array('post'));
    }
}
add_action('pre_get_posts','search_filter');
?>