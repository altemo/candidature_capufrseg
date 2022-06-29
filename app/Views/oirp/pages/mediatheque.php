<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
    <div class="section banner-page" data-background="oirp/assets/img/image_oirp4.jpg" style="background-image: url(&quot;oirp/assets/img/image_oirp4.jpg&quot;);">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">M&eacute;diatheque</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">M&eacute;diatheque - <?= $request->uri->getSegment(2) == 'videos' ? 'Vid&eacute;os' : 'Photos'; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	<!-- OUR GALLERY -->
	<div class="section" data-background="<?= base_url() ?>/oirp/assets/img/bg-gallery.png">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Notre <span>Gal&eacute;rie</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="row popup-gallery gutter-5">
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?= base_url() ?>/oirp/assets/img/gallery-2.jpg" title="Gallery #2">
									<img src="<?= base_url() ?>/oirp/assets/img/gallery-2.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?= base_url() ?>/oirp/assets/img/gallery-3.jpg" title="Gallery #3">
									<img src="<?= base_url() ?>/oirp/assets/img/gallery-3.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?= base_url() ?>/oirp/assets/img/gallery-4.jpg" title="Gallery #4">
									<img src="<?= base_url() ?>/oirp/assets/img/gallery-4.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?= base_url() ?>/oirp/assets/img/gallery-5.jpg" title="Gallery #5">
									<img src="<?= base_url() ?>/oirp/assets/img/gallery-5.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?= base_url() ?>/oirp/assets/img/gallery-6.jpg" title="Gallery #6">
									<img src="<?= base_url() ?>/oirp/assets/img/gallery-6.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>
<?= $this->endSection('content') ?>