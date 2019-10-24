
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Empty Smart Locker</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Empty Action Smart Locker</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- HTML (DOM) sourced data -->
<section id="html">
	<div class="row">
	    <div class="col-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title">Data Action Smart Locker</h4>
	                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        			<div class="heading-elements">
	                    <ul class="list-inline mb-0">
	                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
	                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
	                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
	                        <li><a data-action="close"><i class="ft-x"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body card-dashboard">
                        <div clas="row">
                            <div class="col-4 offset-4">
                                <?php foreach ($status as $key => $value) { ?>
                                    <p class="card-title text-center">Locker <?php echo $value['locker']; ?></p>
                                    <div id="locker_field">
                                        <?php if ($value['rftag'] == '') { ?>
                                            <img src="<?=base_url('dashboard/app-assets/images/icon/empty.png')?>" alt="" class="w-100 mb-4">
                                        <?php } else { ?>
                                            <img src="<?=base_url('dashboard/app-assets/images/icon/field.png')?>" alt="" class="w-100 mb-4">
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>                        
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!--/ HTML (DOM) sourced data -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
	