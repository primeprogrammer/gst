<header>
				<div class="row-1">
					<h1><a  href="/"><?php echo $this->Html->image('/img/logo.png', array('alt' => 'Logo')); ?></a>
					<form id="search-form" action="" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="search-form">					
								<input type="text" name="search" value="" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
						<a href="#" onClick="document.getElementById('search-form').submit()">Search</a>																		
							</div>
						</fieldset>
					</form>
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li> <?php echo $this->Html->link('Home',array('controller' => 'Pages', 'action' => 'index', 'class'=>'active','admin'=>false)); ?></li>
						  <li><?php echo $this->Html->link('Download',array('controller' => 'Pages', 'action' => 'download','admin'=>false)); ?>
						 </li>
						  <li>
						  <?php echo $this->Html->link('Our Services',array('controller' => 'Pages', 'action' => 'ourservices','admin'=>false)); ?>
						 </li>
						  <li>
						   <?php echo $this->Html->link('About Us',array('controller' => 'Pages', 'action' => 'aboutus','admin'=>false)); ?>
						  </li>
						  <li class="last-item">
						  
						  <?php echo $this->Html->link('Contact Us',array('controller' => 'Pages', 'action' => 'contactus','admin'=>false)); ?>
						  
						  
						  </li>
						</ul>
					</nav>
				</div>
				
			</header>