<script>
var id;
function myff(id)
{
document.body.id=id;
}
</script>
<header>
				<div class="row-1">
			<!--	 pr ($this->params['action']); --> 
					<h1><a  href="/"><img src="/img/logo.png" height="90px" ></a></h1>
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
						
						  <li> <?php echo $this->Html->link('Home',array('controller' => 'Pages', 'action' => 'frontindex', 'id'=>'page1'), array('onclick'=>'myff("page1")', 'class'=>(!empty($this->params['action']) && ($this->params['action']=='frontindex') )?'active' :'inactive')); ?></li>
						   <li>
						   <?php echo $this->Html->link('About Us',array('controller' => 'Pages', 'action' => 'frontaboutus', 'id'=>'page4'), array('onclick'=>'myff("page4")','class'=>(!empty($this->params['action']) && ($this->params['action']=='frontaboutus') )?'active' :'inactive')); ?>
						  </li>
						  <li><?php echo $this->Html->link('Download',array('controller' => 'Pages', 'action' => 'frontdownload', 'id'=>'page2'), array('onclick'=>'myff("page2")','class'=>(!empty($this->params['action']) && ($this->params['action']=='frontdownload') )?'active' :'inactive')); ?>
						 </li>
						  <li>
						  <?php echo $this->Html->link('Our Services',array('controller' => 'Pages', 'action' => 'frontourservices', 'id'=>'page3'), array('onclick'=>'myff("page3")','class'=>(!empty($this->params['action']) && ($this->params['action']=='frontourservices') )?'active' :'inactive')); ?>
						 </li>
						 
						  <li class="last-item">
						  
						  <?php echo $this->Html->link('Contact Us',array('controller' => 'Pages', 'action' => 'frontcontactus', 'id'=>'page5'), array('onclick'=>'myff("page5")','class'=>(!empty($this->params['action']) && ($this->params['action']=='frontcontactus') )?'active' :'inactive')); ?>
						  
						  
						  </li>
						</ul>
					</nav>
				</div>
				
			</header>