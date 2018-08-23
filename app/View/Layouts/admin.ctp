<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		gst lucknow
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('main');
		echo $this->Html->script('jquery-2.1.4.min', array('inline' => false));
		echo $this->Html->script('bootstrap.min', array('inline' => false));
		echo $this->Html->script('plugins/pace.min', array('inline' => false));
		echo $this->Html->script('main', array('inline' => false));
		//echo $this->Html->css("css_file", null, array("inline"=>false));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
	<?php 
if($this->Session->check('Auth.User')){
echo $this->element('adminheader');
echo $this->element('sidenav');  } ?>

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		
	        <?php echo $this->element('sql_dump'); ?>
	</div>
</body>
 
</html>
