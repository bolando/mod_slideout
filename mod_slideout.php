<?php
// blokowanie bezpo�redniego uruchomienia
defined('_JEXEC') or die;
// w��czenie klasy modelu z jej metodami
//require_once dirname(__FILE__) . '/helper.php';
 


//przygotowanie do za�adowania styl�w
$doc =& JFactory::getDocument();

//w��czenie domy�lnego layoutu
require JModuleHelper::getLayoutPath('mod_slideout');
