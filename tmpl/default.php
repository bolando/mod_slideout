<?php 
// No direct access
defined('_JEXEC') or die; 
$doc->addStyleSheet('modules/mod_slideout/css/mod_slideout.css');
$doc->addScript('modules/mod_slideout/js/jquery.tabSlideOut.v1.3.js');

if ($params->get('obrazek') == 'custom') {
	$obrazek = $params->get('custom-image');
	$wymiary = getimagesize($obrazek);
	$height = $wymiary[1];
	$width = $wymiary[0];
} else {
	$obrazek = 'modules/mod_slideout/images/contact_tab.gif';
	$height = '122';
	$width = '40';
	}
?>

<script>
	jQuery(function(){
		jQuery('.slideout').tabSlideOut({
		tabHandle:'.handle',  //class of the element that will be your tab
		pathToTabImage:<?php echo '\'/' .$obrazek . '\''; ?>,//path to the image for the tab (optionaly can be set using css)
		imageHeight:<?php echo '\'' . $height . 'px\''; ?>,   //height of tab image
		imageWidth:<?php echo '\'' . $width . 'px\''; ?>,   //width of tab image   
		tabLocation: <?php echo '\'' . $params->get('pozycja') . '\''; ?>,   //side of screen where tab lives, top, right, bottom, or left
		speed: 300,   //speed of animation
		action:'click',//options: 'click' or 'hover', action to trigger animation
		topPos:<?php echo '\'' . $params->get('odleglosc') . 'px\''; ?>,//position from the top
		fixedPosition:true    //options: true makes it stick(fixed position) on scroll
		});
	});
</script>

<div class="slideout">
<a class="handle" href="#">tekst</a>
<?php echo $params->get('tresc'); ?>
</div>
