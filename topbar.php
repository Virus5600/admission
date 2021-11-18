<style type="text/css">
    .header .header-block-nav > ul > li:before {
        display: block;
        content: " ";
        width: 1px;
        height: 24px;
        top: 50%;
        margin-top: -12px;
        background-color: transparent;
        position: absolute;
        left: 0;
    }
</style>
<header class="header" style="height: 60px !important;">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="name"><?php echo $_SESSION['fullname']; ?></span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-gear icon"></i> Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="logoutuser();">
                        <i class="fa fa-power-off icon"></i> Logout 
                    </a>
                </div>
            </li>
            <li class="profile dropdown">
                <img class="img-circle" src="assets2/images/noimage5.png" height="35" id="topbarimage">
            </li>
        </ul>
    </div>
</header>