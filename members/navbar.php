<!-- Navbar-->
      <header class="main-header hidden-print" style="box-shadow: 0px 0px 10px rgba(0,0,0, .2)">
        <!-- <div style="padding: 10px;background-color: #fff" class="mobss"></div> -->
        <div class="logo" style="background-color:#fff !important;"><center><a style="color:#41cd52 !important;font-family: ARIAL;font-size: 20px;font-weight: bold" href="dashboard.php"> Clini<span style="color: #222">Bond</span> </a></center></div>
        <div style="padding: 10px;background-color: #fff;border-bottom: solid 1px #eee" class="mobss"></div>
        <nav class="navbar navbar-static-top nava" style="background-color:#fff;">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas" style="color: #ccc"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu" id="mota"><a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color: #666;" aria-expanded="false">Notification <i class="fa fa-bell-o fa-lg"></i>

                <?php 
                  try {
                          $stmt = $pdo->prepare('SELECT * FROM `notification` WHERE `for`="admin" AND `status`="Unread"  ORDER BY date DESC');
                      } catch(PDOException $ex) {
                          echo "An Error occured!"; 
                          print_r($ex->getMessage());
                      }
                      $stmt->execute();
                      $user = $stmt->fetchAll();                      
                 ?>
                 <?php 
                  if(count($user)!=0){?>
                   <span  class="label label-danger" style="position: absolute;top:10px;right:0px;"><?php echo count($user); ?></span>
                  <?php 
                  }
                  ?>
               </a>
                <ul class="dropdown-menu" style="word-wrap: break-word;width: 340px;">
                 <?php                      

                      $i=1;
                      foreach ($user as $key => $value) {
                        if($i<8){
                           echo '<li style="  word-wrap: break-word;"><a style="padding: 20px;  word-wrap: break-word;" class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary" style="color: #ccc" ></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                            <div class="media-body"><span class="block">'.$value['notification'].'</span><span class="text-muted block" style="font-size:12px;">'.$value['date'].'</span></div></a></li>';
                            $i++;
                        }

                      }
                     ?>
                </ul>
              </li>
              <!-- User Menu-->


                <li class="dropdown"><a class="dropdown-toggle" href="#" style="color: #666;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile &nbsp;&nbsp;<i class="fa  fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a data-toggle="modal" data-target="#myModal1"><i class="fa fa-user fa-lg"></i>  Profile</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print" style="    background-color:#fff;">
        <section class="sidebar">

          <div class="user-panel">
            <div style="padding: 20px;" class="mobss"></div>
            <div class="pull-left image"><img class="img-circle" src="cbs.jpg" alt="User Image" style="background-color: #eee"></div>
            <div class="pull-left info">
              <p><?php echo $pdo_auth['first_name']." ".$pdo_auth['last_name']; ?></p>
              <p class="designation" style="opacity: .4;color: #002c61">Super Administrator</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
           
            <li><a href="update_data.php"><i class="fa fa-user"></i><span>Update Your Data</span></a></li>   
            <!-- <li><a href="users2.php"><i class="fa fa-laptop"></i><span> User Reports</span></a></li>    -->
           <!--  <li><a href="search_user.php"><i class="fa fa-search"></i><span> Search Users</span></a></li>       
            <li><a href="reporting.php"><i class="fa fa-file"></i><span> Reporting Users</span></a></li>       
            <li><a href="members.php"><i class="fa fa-users"></i><span> Members</span></a></li>       
            <li><a href="assign_lead_wrap.php"><i class="fa fa-plus-circle"></i><span> Assign Lead</span></a></li>        -->
           
          </ul>
        </section>
      </aside>