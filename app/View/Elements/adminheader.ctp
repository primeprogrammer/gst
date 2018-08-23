 <!-- Navbar-->

      <header class="main-header hidden-print"><a class="logo" href="index.html">Vali</a>

        <nav class="navbar navbar-static-top">

          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>

          <!-- Navbar Right Menu-->

          <div class="navbar-custom-menu">

            <ul class="top-nav">

              <!--Notification Menu-->

            

              <!-- User Menu-->

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>

                <ul class="dropdown-menu settings-menu">

                  <li><a href="/admin/Settings/setting_list"><i class="fa fa-cog fa-lg"></i> Settings</a></li>

                  <li><a href="/admin/users/edit"><i class="fa fa-user fa-lg"></i> Change Password</a></li>

                  <li><?php echo $this->Html->link('<i class="fa fa-sign-out fa-lg"></i>Logout', array('controller' => 'users', 'action' => 'logout','admin'=>false),array('escape' => false));?></li>

                </ul>

              </li>
			<li class="active"><?php 
    echo $this->Form->postLink(__('<i class="fa fa-sign-out fa-lg"></i>&nbsp;Logout'), array(
'controller' => 'Users',
                 'action' => 'logout',
                 'admin'=>false
                
                ), array('escape' => false)); 
?></li>
            </ul>

          </div>

        </nav>

      </header>