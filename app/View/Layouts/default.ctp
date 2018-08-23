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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		GST Billing Software Online/Offline
	</title>
	 <meta name="keywords" content="+918004387168,+918795202855,GST Billing, Billing Software, " />
    
	<meta name="description" content="A GST Bill Nikalo.com is billing software user generate a bill online/offline. This is easy software." />
	<meta name="title" content="GST Bill Nikalo.Com | Online Billing System Service | Offline Billing Service | Credit or debit maintain"/>
	
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
    <meta name="msvalidate.01" content="227509541A318351713490BE44D5AB9A" />
    <link rel="canonical" href="<?php echo Router::url( $this->here, true ); ?>" />
    <meta name="identifier-url" content="http://primeprogrammer.com/" />
    <meta name = "viewport" content = "user-scalable=no, width=device-width,intial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
    
    <meta name="abstract" content="A GST Bill Nikalo.com is billing software user generate a bill online/offline. This is easy software." />
    
    
    <meta http-equiv="content-language" content="EN">
    
    <meta name="author" content="Perfectionist" />
    
    <meta name="revisit-after" content="2" />
    
    <meta name="language" content="EN" />
        
    <meta name="copyright" content="© 2017 Prime Programmer" />
    
   <meta name="robots" content="index, follow" />
   <meta name="revisit-after" content="2 days" />
   <meta name="creator" content="Mahendra Kr. Mishra (Gstbillnikalo.com)" />
   <meta name="publisher" content="GST Billing Software(Online/Offline) (Gstbillnikalo.com)" />
	
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
	

			

			<?php echo $this->fetch('content'); ?>
		
	        <?php echo $this->element('sql_dump'); ?>
	</div>
	
	<footer>
	    <center><h6>Email: info@gstbillnikalo.com  Contact: 8004387168/8795202855</h6></center>
	</footer>
	
	<script type="text/javascript">
	       
            setTimeout(function() {
                $('.message').fadeOut();
                $('.message').val('')
            }, 8000);
            setTimeout(function() {
                $('.success').fadeOut();
                $('.success').val('')
            }, 8000);

        </script>
</body>
 
</html>
