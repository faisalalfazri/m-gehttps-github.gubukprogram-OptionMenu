    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo $server; ?>/assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>John Doe</p>
                    <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="profile.html">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
            
                <li class="nav-level">Navigation</li>
<?php
    if(!isset($_SESSION['get_menu'])){
        $access="1,2,3";
        $builder_menu="";
        $menu=$mysqli->query("SELECT mm.menu_id,mm.menu_name,mm.icon FROM main_menu mm LEFT OUTER JOIN sub_menu sm ON mm.menu_id=sm.menu_id WHERE sm.access_code IN ($access) GROUP BY mm.menu_id ORDER BY ordinal ASC") or die($mysqli->error);
        if($menu->num_rows>0){
            while($fetch_menu=$menu->fetch_assoc()){
                extract($fetch_menu);
                $builder_menu.='<li class="active treeview">
                        <a class="waves-effect waves-dark" href="#">
                            '.$icon.'<span> '.$menu_name.'</span><i class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu">';
                $submenu=$mysqli->query("SELECT * FROM sub_menu WHERE menu_id=".$menu_id." AND access_code IN ($access) ORDER BY sub_menu_ordinal ASC") or die($mysqli->error);
                if($submenu->num_rows>0){
                    while($fetch_submenu=$submenu->fetch_assoc()){
                        extract($fetch_submenu);
                        $builder_menu.='<li class="active"><a class="waves-effect waves-dark" href="'.$url.'" target="'.$target.'">'.$icon.'<span>'.$sub_menu_name.' </span></a></li>';
                    }
                }
                $builder_menu.='</ul></li>'; // close main menu 
                
                // for efficiency create session menu
                $_SESSION['get_menu']=$builder_menu;
            }
        }
        echo $builder_menu;
    }else{
        echo $_SESSION['get_menu'];
    }


    
?>

               
        </section>
    </aside>
