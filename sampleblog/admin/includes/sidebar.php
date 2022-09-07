<div id="layoutSidenav_nav">

    <?php echo $page = substr($_SERVER['SCRIPT_NAME'],strpos( $_SERVER['SCRIPT_NAME'],"/")+24);?>
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link <?=$page == 'index.php' ? 'active' : ''?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                    
                    
                    
                </a>
                
                <?php if($_SESSION['auth_role'] == '2') : ?> 
                <a class="nav-link collapsed <?=$page == 'register-add.php' || $page == 'view-registered.php' || $page == 'edit-registered.php' ? 'active' : ''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                
                <div class="collapse <?=$page == 'register-add.php' || $page == 'view-registered.php' || $page == 'edit-registered.php' ? 'show' : ''?>" id="collapseUsers" aria-labelledby="users" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?=$page == 'register-add.php' ? 'active' : ''?>" href="register-add.php">Add Users</a>
                        <a class="nav-link <?=$page == 'view-registered.php' || $page == 'edit-registered.php' ? 'active' : ''?>" href="view-registered.php">View Users</a>
                    </nav>
                </div>
                <?php endif; ?>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed <?=$page == 'category-view.php' || $page == 'category-add.php' || $page == 'category-edit.php' ? 'active' : ''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?=$page == 'category-view.php' || $page == 'category-add.php' || $page == 'category-edit.php' ? 'show' : ''?>" id="collapseLayouts" aria-labelledby="posts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?=$page == 'category-add.php' ? 'active' : ''?>" href="category-add.php">Add Category</a>
                        <a class="nav-link <?=$page == 'category-view.php' || $page == 'category-edit.php' ? 'active' : ''?>" href="category-view.php">View Category</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?=$page == 'post-add.php' || $page == 'post-view.php' || $page == 'post-edit.php' ? 'active' : ''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?=$page == 'post-add.php' || $page == 'post-view.php' || $page == 'post-edit.php' ? 'show' : ''?>" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?=$page == 'post-add.php' ? 'active' : ''?>" href="post-add.php">Add Post</a>
                        <a class="nav-link <?=$page == 'post-view.php' || $page == 'post-edit.php' ? 'active' : ''?>" href="post-view.php">View Posts</a>
                    </nav>
                </div>



                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Add Posts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="post-add.php">Add Posts</a>
                                <a class="nav-link" href="post-view.php">View Posts</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            View Posts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="post-add.php">Add Posts</a>
                                <a class="nav-link" href="post-view.php">View Posts</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php 
                if (isset($_SESSION['auth_user'])): ?>
                    <?= $_SESSION['auth_user']['user_name'];?>
                <?php endif; ?>
        </div>
    </nav>
</div>