<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand" style="line-height: 60px !important;">
                <div class="logo" style="padding-right: -25px;">
                    <span class="l l1"></span>
                    <span class="l l2"></span>
                    <span class="l l3"></span>
                    <span class="l l4"></span>
                    <span class="l l5"></span>
                </div>&nbsp;Treasury
            </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li id="treasurydashboardmenu">
                    <a href="index.php" aria-expanded="false"><i class="fa fa-home"></i>Dashboard</a>
                </li>
                <li id="treasurystudentmenu">
                    <a href="index.php?menu=<?php echo base64_encode(urlencode("Treasury")); ?>&sub=<?php echo base64_encode(urlencode("Student"));?>"><i class="fa fa-users"></i>Student</a>
                </li>
                <li id="treasuryreportsmenu">
                    <a href="index.php?menu=<?php echo base64_encode(urlencode("Treasury")); ?>&sub=<?php echo base64_encode(urlencode("Reports"));?>"><i class="fa fa-book"></i>Reports</a>
                </li>
            </ul>
        </nav>
    </div>
    <footer class="sidebar-footer">
        
    </footer>
</aside>
