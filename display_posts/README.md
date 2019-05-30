## The Loop is PHP code used by WordPress to display posts

When WordPress documentation says "This tag must be within The Loop", such as for specific <a href="https://codex.wordpress.org/Template_Tags">Template Tags</a> or plugins, the tag will be repeated for each post. 

```
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>
```

https://codex.wordpress.org/The_Loop

For example, The Loop displays the following information by default for each post:

```
Title <?php the_title(); ?>
Time <?php the_time(); ?>
Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?>
Categories: <?php the_category(', '); ?>
<?php the_tags('Tags: ', ', '); ?>
<?php the_content(); ?>
```

## get_the_date()

### Description

The get_the_date template tag retrieves the date the current $post was written. Unlike the_date() this tag will always return the date.

#### Usage

```php
<?php $pfx_date = get_the_date( $format, $post_id ); ?>
```


#### Parameters

$format
(string) (optional) PHP date format.
Default: the date_format option ('Date Format' on <b>Settings > General panel</b>)

$post
(integer) (optional) The ID of the post you'd like to fetch. By default the current post is fetched.
Default: null

https://codex.wordpress.org/Function_Reference/get_the_date


You can display other information about each post using the appropriate <a href="https://codex.wordpress.org/Template_Tags">Template Tags</a> or (for advanced users) by accessing the <b>$post</b> variable, which is set with the current post's information while The Loop is running.
