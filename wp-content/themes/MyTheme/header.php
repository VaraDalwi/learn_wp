<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>

<style>
	body #ld_course_categorydropdown, body #ld_lesson_categorydropdown, body #ld_topic_categorydropdown, body .learndash{
		margin-bottom:0;
	}
	body{
		background-image:url("http://localhost/learn_wp/wp-content/uploads/2022/11/course-home-bg.png");
		background-attachment:fixed;
		background-size:cover;
		background-repeat:no-repeat;
	}
	#page .site-content{
		background-color:#000000b5;
	}
	.ast-single-post-order{
		min-height:102vh;
	}
	.entry-title{
		color:#fff;
		position:absolute;
		top:8%;
		left: 23%;
    	text-align: center;
		width: 55%;
	}
	.learndash-wrapper .ld-course-status.ld-course-status-enrolled{
		display:none;
	}
	.entry-header, .ast-no-thumbnail, .ast-no-meta{
		margin:0;
	}
	.ld-tabs-content{
		background-color:#fff;
		border-radius:7px 7px 0px 0px;
	}
	.ld-item-list, .ld-lesson-list{
		background-color:#fff;
		margin:0;
	}
	.learndash-wrapper .ld-tabs .ld-tabs-content .ld-tab-content{
		padding:4% 10% 0 10%;
	}
	.learndash-wrapper .ld-item-list{
		margin:0;
		padding:2% 10% 4% 10%;
	}
	.learndash-wrapper .ld-tabs{
		margin:0;
	}
	.learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab{
		background-color:#00a2e8;
		color:#fff;
		border-radius:7px 7px 0 0;
		padding:15px;
		box-shadow: inset 2px -2px 5px 0px #00000069;
	}
	.learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab.ld-active{
		background-color:#fff;
		color:#333333;
		padding: 20px 40px 20px 40px;
	}
	.learndash-wrapper .ld-tabs .ld-tabs-navigation{
		margin-left:10%;
	}
	.learndash-wrapper .ld-tabs .ld-tabs-navigation:after{
		width:277px;
	}
	.learndash-wrapper .ld-item-list .ld-item-list-item .ld-item-list-item-preview{
		padding:13px;
	}
	.learndash-wrapper .ld-item-list .ld-item-list-item .ld-item-list-item-preview:hover{
		box-shadow: 4px 6px 24px 1px rgba(0, 0, 0, 0.2);
		transition: 0.7s;
		border-left: 5px solid #01AED3;
		background-color:#fff;
	}
	.learndash-wrapper .ld-item-list .ld-item-list-item{
		margin:7px 0;
		border-radius:0px;
		background-color:#f7f7f7;
		border:none;
	}
	.learndash-wrapper .ld-expand-button{
		background-color:#fff;
		color:#00a2e8;
		border: 1px solid #00a2e8;
	}
	.learndash-wrapper .ld-expand-button:hover{
		background-color:#00a2e8;
		color:#fff;
	}
	.entry-content p{
		margin-bottom:0em;
	}
	.coursedetails{
		background-color:#00000080;
		position: absolute;
    	top: 18%;
		left:33%;
		width:36%;
		border-radius: 40px;
	}
	body .is-layout-flex{
		gap: 0px;
	}
	.courseinfo{
		position: absolute;
		top: 23%;
		left: 37%;
		width: 30%;
	}
	.buynowcol{
		position: absolute;
		top: 28%;
		left: 35%;
		width: 25%;
	}
	.buynowbtn{
		margin-left: 10% !important;
	}
	.secondheader{
		position: absolute;
		top: 40%;
		left: 0;
		width: 100%;
	}
	.detailsarrow{
		position: absolute;
		top: 35%;
		left: 50%;
	}
	.arrowlabel{
		position: absolute;
		top: 34%;
		left: 47%;
	}
	.learndash-wrapper .ld-expand-button.ld-button-alternate .ld-text{
		display:none;
	}
	.learndash-wrapper .ld-item-list .ld-item-list-item a.ld-item-name{
		font-size:18px;
		font-weight:400;
		color:#444444;
	}
	.learndash-wrapper .ld-item-list .ld-item-list-item .ld-item-title .ld-item-components{
		font-size:14px;
		font-weight:600;
	}
	.ast-single-post .entry-content a, .ast-comment-content a:not(.ast-comment-edit-reply-wrap a){
		text-decoration:none;
	}
</style>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
