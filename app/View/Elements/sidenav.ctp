 <!-- Side-Nav-->

      <aside class="main-sidebar hidden-print">

        <section class="sidebar">

          <div class="user-panel">

            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>

            <div class="pull-left info">

              <p><?php echo $this->Session->read('Auth.User.username'); ?></p>

              <p class="designation">
			  <?php
			  switch ($this->Session->read('Auth.User.role')) {
					case 'admin':
						echo 'Main Admin';
						break;
					case 'c_admin':
						echo 'Admin';
						break;
					case 'accountant_invoice':
						echo 'Invoice Accountant';
						break;
					case 'accountant_debit':
						echo 'Debit Accontant';
						break;
				}
			  ?>
			  </p>

            </div>

          </div>

          <!-- Sidebar Menu-->

          <ul class="sidebar-menu">

            <li class="active"><?php echo $this->Html->link('Dashboard', array('controller' => 'users', 'action' => 'index'));?><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

        

			
			<?php if($this->Session->read('Auth.User.role')=='admin' || $this->Session->read('Auth.User.role')=='c_admin') { ?>
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>User</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li><?php echo $this->Html->link('<i class="fa fa-user"></i> Add Accontant', array('controller' => 'Users', 'action' => 'userregistration','admin'=>true),array('escape' => false));?></a></li>

                 <li><?php echo $this->Html->link('<i class="fa fa-user"></i> Accontant List', array('controller' => 'Users', 'action' => 'index','admin'=>true),array('escape' => false));?></a></li>

                

              </ul>

            </li>
			
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Setting</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
               <?php if($setting)
					   {  echo '<li>'.
						 $this->Html->link('<i class="fa fa-circle-o"></i>Add Setting ', array('controller' => 'Settings', 'action' => 'add_setting','admin'=>true),array('escape' => false))
						.'</li>';
					   }
				?>
				<li>
				<?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Setting List  ', array('controller' => 'Settings', 'action' => 'setting_list','admin'=>true),array('escape' => false));?></a>
				</li>
              </ul>
            </li>
			
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Invoice</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> New', array('controller' => 'invoices', 'action' => 'addinvoice','admin'=>true),array('escape' => false));?></a></li>

                 <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Invoice List', array('controller' => 'invoices', 'action' => 'invoicelist'),array('escape' => false));?></a></li>

                

              </ul>

            </li>
             <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Client/Customer</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Client/Customer Registration', array('controller' => 'invoices', 'action' => 'add_company','admin'=>true),array('escape' => false));?></a></li>
 <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Client/Customer List', array('controller' => 'invoices', 'action' => 'com_list','admin'=>true),array('escape' => false));?></a></li>
                

              </ul>

            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Vendor</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li>
				<?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Vendor Registration', array('controller' => 'vendors', 'action' => 'add','admin'=>true),array('escape' => false));?></a>
				
				
				</li>
 <li>
 <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Vendor List', array('controller' => 'vendors', 'action' => 'index','admin'=>true),array('escape' => false));?></a></li>
                

              </ul>

            </li>
 <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Service</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li>
				<?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Add Service ', array('controller' => 'vendors', 'action' => 'add_service','admin'=>true),array('escape' => false));?></a>
				
				
				</li>
 <li>
 <?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Service List  ', array('controller' => 'vendors', 'action' => 'service_list','admin'=>true),array('escape' => false));?></a></li>
                

              </ul>

            </li>
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Debit</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li>
				<?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Add Debit ', array('controller' => 'vendors', 'action' => 'add_debit','admin'=>true),array('escape' => false));?></a>
				
				
				</li>
 <li>
 <?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Debit List  ', array('controller' => 'vendors', 'action' => 'debit_list','admin'=>true),array('escape' => false));?></a></li>
                

              </ul>

            </li>
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Product</span><i class="fa fa-angle-right"></i></a>

              <ul class="treeview-menu">

                <li>
				<?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Add Product', array('controller' => 'Products', 'action' => 'add_product','admin'=>true),array('escape' => false));?>
				</li>
				             

              </ul>

            </li>
			
			<li>
 <?php echo $this->Html->link('<i class="fa fa-circle-o"></i>Back Up  ', array('controller' => 'invoices', 'action' => 'database_mysql_dump','admin'=>true),array('escape' => false));?></a></li>
     
			<?php } ?>
          </ul>

        </section>

      </aside>