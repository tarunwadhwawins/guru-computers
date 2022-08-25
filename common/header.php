<?php
   $current_page = $_SERVER['REQUEST_URI']; 
   //	echo $current_page; die;
   ?>
<!-- header -->
<header>
    <!-- Navbar -->
    <div class="container-fluid-lg">
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="<?php echo $url; ?>">
                <img src="<?php echo $url; ?>assets/images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
           </button>
            <div class="navbar-collapse" >
                <div class="section-bg"></div>
                <ul class="d-flex align-items-center navbar-nav m-auto">
                    <li class="nav-item <?php echo $current_page == '/gurucomputer/index' ? 'active':'' ?>">
                        <a class="nav-link " href="<?php echo $url; ?>index">Home</a>
                    </li>
                    <li class="nav-item <?php echo $current_page == '/gurucomputer/services-offered' ? 'active':'' ?> dropdown mainDropdown">
                        <a href="<?php echo $url; ?>services-offered" class="nav-link ">Computer Repair <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu mainMenu">
                            <li class="nav-item dropdown subMenuDropdown"><a href="javascript:void(0)" class=" nav-link dropdown-item" aria-expanded="false">MacBook Repair </a>
                                <!-- SubMenu -->
                                <ul class="subMenu dropdown-menu">
                                    <li><a href="<?php echo $url; ?>macbook-repair-delta" class="dropdown-item">MacBook Repair Delta</a></li>
                                    <li><a href="<?php echo $url; ?>macbook-repair-surrey" class="dropdown-item">MacBook Repair Surrey</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown subMenuDropdown"> <a href="javascript:void(0)" class=" nav-link dropdown-item" aria-expanded="false">Laptop Repair</a>
                                <!-- SubMenu -->
                                <ul class="subMenu dropdown-menu">
                                    <li><a href="<?php echo $url; ?>services/laptop-screen-replacement-in-delta" class="dropdown-item">Laptop Screen Replacement</a></li>
                                    <li><a href="<?php echo $url; ?>services/lapatop-ssd-upgrade-in-delta" class="dropdown-item">Laptop SSD Upgrade in Delta</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown subMenuDropdown"> <a href="javascript:void(0)" class=" nav-link dropdown-item" aria-expanded="false">Data Recovery</a>
                                <!-- SubMenu -->
                                <ul class="subMenu dropdown-menu">
                                    <li><a href="<?php echo $url; ?>services/data-recovery-services-delta" class="dropdown-item">Data Recovery Delta</a></li>
                                    <li><a href="<?php echo $url; ?>services/hard-drive-data-recovery-in-surrey" class="dropdown-item">Data Recovery Surrey</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown subMenuDropdown"> <a href="javascript:void(0)" class=" nav-link dropdown-item" aria-expanded="false">Virus Removal</a>
                                <!-- SubMenu -->
                                <ul class="subMenu dropdown-menu">
                                    <li><a href="<?php echo $url; ?>services/virus-spyware-malware-adware-removal" class="dropdown-item">Virus Removal Delta</a></li>
                                    <li><a href="<?php echo $url; ?>services/virus-malware-trojan-removal-surrey" class="dropdown-item">Virus Removal Surrey</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown repairDropdown">
                        <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown">Repair By Brands <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu repairMenu">
                            <li class="nav-item dropdown subMenuDropdown"> <a href="javascript:void(0)" class=" nav-link dropdown-item" aria-expanded="false">Apple</a>
                                <!-- SubMenu -->
                                <ul class="subMenu dropdown-menu">
                                    <li><a href="<?php echo $url; ?>macbook-repair-delta" class="dropdown-item">MacBook Repair</a></li>
                                    <li><a href="<?php echo $url; ?>services/imac-repair-delta" class="dropdown-item">iMac Repair</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $url; ?>services/asus-laptop-repair-delta" class="dropdown-item">ASUS Repair</a></li>
                            <li><a href="<?php echo $url; ?>services/acer-laptop-repair-delta" class="dropdown-item">Acer Repair</a></li>
                            <li><a href="<?php echo $url; ?>services/lenovo-laptop-repair-delta" class="dropdown-item">Lenovo Repair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $current_page == '/gurucomputer/about-us' ? 'active':'' ?>">
                        <a class="nav-link" href="<?php echo $url; ?>about-us">About Us</a>
                    </li>
                    <li class="nav-item <?php echo $current_page == '/gurucomputer/contact' ? 'active':'' ?>">
                        <a class="nav-link" href="<?php echo $url; ?>contact">Contact Us</a>
                    </li>
                </ul>
                <div class="detailed d-flex flex-column">
                    <a href="tel:+91-708-708-7356" data-bs-toggle="tooltip" data-bs-placement="top" title="On-Call"> <i class="fa fa-phone" aria-hidden="true"></i> +1 (604) 256-2193</a>

                    <a href="mailto:abs@gmail.com " data-bs-toggle="tooltip" data-bs-placement="top" class="guruImagelink d-flex"> <i class="fa fa-envelope" aria-hidden="true"></i><img src="<?php echo $url; ?>assets/images/Guru-Top-img.png" alt="guruimagelink"></a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--  -->