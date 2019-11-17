# Grid Code Theme Documentation

## Setup
* Crete `index.php` file
* Create `heade.php` file
* Create `footer.php` file
* Include `screenshot.png` file

## Load Styles & JavaScript files
* Create a `function.php` file
* Write this function

```php
// STYLES & SCRIPTS
function grid_code_assets() {
    // loading styles
    wp_enqueue_style('custom-google-fonts', 'fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('grid_code_main_styles', get_stylesheet_uri(), NULL, microtime(), all);

    // loading scripts
    wp_enqueue_script('grid_code_main_scripts', get_theme_file_uri('/js/test.js'), NULL, microtime(), true);
}
```

* Add the required hook to run the function:

```php
add_action('wp_enqueue_scripts', 'grid_code_assets');
```

* Add these functions to specific files:

```php
// At the end of header.php file
<?php wp_head(); ?>

// At the end of footer.php file
<?php wp_footer(); ?> 
```

## Theme Features
* Create a function to add the theme features
```php
// ADD THEME FEATURES
function grid_code_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html', array(
        'comment-list', 'comment-form', 'search-form'
    ));
}
```

* Add the required hook to run the function
```php
add_action('after_setup_theme', 'grid_code_features');
```

## Custom Post Type
* Create a function to support custom post types
```php
// CUSTOM POST TYPES
function grid_code_post_types() {
    // Project Post Type
    register_post_type('project', array(
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comment'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects'
        ),
        'menu_icon' => 'dashicons-clipboard'
    ));
}
```

* Add the required hook to run the function
```php
add_action('init', 'grid_code_post_types');
```

## Template Hierachy
* Pages & posts goes to the default page content, if there's no specific file for them!
    * index.php
    * singular.php (for posts & pages)
    * single.php (for posts & pages)
    * page.php (for pages)
    * page-$page-name.php (for custom page)
    * ... 

## Looping Posts
* Add `wp while loop` to the file
```php
<?php
    while (have_posts()) {
        the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title(); ?></h1>
        </a>
        <?php the_excerpt(); ?>
    <?php }
?>
```

* To loop posts in the `single.php` file
```php
while (have_posts()) {
        the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <span>Posted by <?php the_author(); ?></span>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        
    <?php 
        the_content();
        comment_form();
    }
?>
```

* To loop custom post type, just edit `WP_QUERY(`

```php
<?php
    $projectPosts = new WP_Query(array(
        'post_type' => 'project',
        'posts_per_page' => 2
    ));
    while ($projectPosts->have_posts()) {
        $projectPosts->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title(); ?></h1>
        </a>
        <?php the_excerpt(); ?>
    <?php }
?>
```

## Creating Blog Page
* Finish the design for `front-page.php`
* In the `wp settings -> Reading`, Make `front-page` as homepage & `blog` as the page for blog posts
* Copy everything from `front-page.php` and paste into `index.php`
* Make some adjustments to layout & style
* Use `while loop` to loop the posts, this will grab all the posts until the limit in `Reading settings`
* You can view the post meta by writing this code 

```php
Posted by <?php the_author(); ?> On <?php       the_time('F j, Y'); ?> in <?php echo get_the_category_list(','); ?>
```

* To change the number of posts shown in the blog, `settings -> reading -> number of posts`

* To paginate the posts
```htmlmixed=
// Create a style for the pagination
<div class="pagination">
    <?php echo paginate_links(); ?>
</div>
```

## Archiving Posts or Custom Posts
* Create `archive.php` page
* For the title, use `dynamic title` for the archived posts instead of `static title`

```php
<a href="<?php echo site_url('/blog'); ?>">
    <h2 class="page-heading"><?php the_archive_title(); ?></h2>
        </a>
```

## Archive for Custom Post
* Create a file `archive-$custom-post-name.php`
* Change any style or layout