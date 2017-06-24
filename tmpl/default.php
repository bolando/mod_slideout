<?php 
// No direct access
defined('_JEXEC') or die; 
$doc->addStyleSheet('modules/mod_slideout/css/mod_slideout.css');
$doc->addScript('modules/mod_slideout/js/jquery.tabSlideOut.v1.3.js');?>

<script>
	jQuery(function(){
		jQuery('.demo').tabSlideOut({
		tabHandle:'.handle',  //class of the element that will be your tab
		pathToTabImage:'/images/contact_tab.gif',//path to the image for the tab (optionaly can be set using css)
		imageHeight:'122px',   //height of tab image
		imageWidth:'40px',   //width of tab image   
		tabLocation: 'left',   //side of screen where tab lives, top, right, bottom, or left
		speed: 300,   //speed of animation
		action:'click',//options: 'click' or 'hover', action to trigger animation
		topPos:'200px',//position from the top
		fixedPosition:true    //options: true makes it stick(fixed position) on scroll
		});
	});
</script>

<div class="slideout">
<a class="handle" href="#"></a>
<jdoc:include type="modules" name="slideout" style="xhtml" />
</div>
