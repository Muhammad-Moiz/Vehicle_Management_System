<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="bsbmd/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muhammad Moiz</div>
                    <div class="email">muhammadmoiz2221@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?php echo e(Route::is('dashboard')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('dashboard')); ?>">
                           <i class="material-icons">keyboard_arrow_right</i>
                            <span>Home</span>
                        </a>
                    </li>
                   

                   <li>
                        <a href="javascript:void(0);"class="menu-toggle waves-effect waves-block toggle">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>User Management</span>
                        </a>
                    <ul class="ml-menu">
                        <li <?php echo e(Route::is('users')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('users')); ?>" class="waves-effect waves-block" >
                            <span>Add A User</span>
                        </a>
                        </li>
                    
                        <li <?php echo e(Route::is('listUsers')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('listUsers')); ?>">
                                <span>View all users</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    

                  
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggle">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Driver Management</span>
                        </a>
                    <ul class="ml-menu">
                        <li <?php echo e(Route::is('driver')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('driver')); ?>">
                            <span>Add A Driver</span>
                        </a>
                        </li>
                        <li <?php echo e(Route::is('listDrivers')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('listDrivers')); ?>">
                                <span>View all Drivers</span>
                            </a>
                        </li>
                    </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggle ">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Promo Codes</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?php echo e(Route::is('promocode')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('promocode')); ?>">
                                <span>Add a Promo Code</span>
                            </a>
                            </li>
                            <li <?php echo e(Route::is('listpromocode')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('listpromocode')); ?>">
                                <span>View all Promo code</span>
                            </a>
                            </li>
                        </ul>
                    </li>
 
                    
                    
                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggle ">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Car Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?php echo e(Route::is('car')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('car')); ?>">
                                <span>Add a Car</span>
                            </a>
                            </li>
                            <li <?php echo e(Route::is('listCar')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('listCar')); ?>">
                                <span>View all Car</span>
                            </a>
                            </li>
                        </ul>
                    </li>
                   

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggle">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Packages</span>
                        </a>
                    <ul class="ml-menu">
                        <li <?php echo e(Route::is('package')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('package')); ?>">
                            <span>Add A Package</span>
                        </a>
                        </li>
                        <li <?php echo e(Route::is('listPackage')? 'class=active':''); ?>>
                            <a href="<?php echo e(route('listPackage')); ?>">
                                <span>View all Packages</span>
                            </a>
                        </li>
                    </ul>
                    </li>

                    <li <?php echo e(Route::is('ride')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('ride')); ?>">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Ride</span>
                        </a>
                    </li>

                    <li <?php echo e(Route::is('fare')? 'class=active':''); ?>>
                        <a href="<?php echo e(route('fare')); ?>">
                            <i class="material-icons">keyboard_arrow_right</i>
                            <span>Fare</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
           


            <!-- Footer -->
        

            <div class="legal">
                <div class="copyright">
                    <a href="javascript:void(0);">VMS - Management System</a>.
                </div>
                 
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
 
        <!-- #END# Right Sidebar -->
    </section>