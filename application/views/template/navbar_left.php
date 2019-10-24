<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?=base_url('dashboard/app-assets/images/backgrounds/04.jpg')?>">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url()?>"><img class="brand-logo w-75" style="margin-top: -40px;" alt="Telkom Akses admin logo" src="<?=base_url('dashboard/app-assets/images/logo/logo-ta.png')?>"/></a></li>
          <!-- <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li> -->
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active nav-item"><a href="<?=base_url()?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            <ul class="menu-content">
              <li class="<?php if ($page == 'action') echo 'active' ?>"><a class="menu-item" href="<?=base_url()?>">Data Action</a>
                  </li>
              <li class="<?php if ($page == 'empty') echo 'active' ?>"><a class="menu-item" href="<?=base_url('EmptyLocker')?>">Data Locker</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>
    