<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
    <div class="section banner-page" data-background="oirp/assets/img/banner-single.jpg" style="background-image: url(&quot;oirp/assets/img/banner-single.jpg&quot;);">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">Contactez - nous</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contactez - nous</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6 col-md-6">

						<h2 class="section-heading">
							&nbsp;
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fab fa-facebook"></i>
							</div>
							<div class="info-text">
								Facebook@oirp
							</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fab fa-twitter"></i>
							</div>
							<div class="info-text">
								Facebook@oirp
							</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fab fa-instagram"></i>
							</div>
							<div class="info-text">
								Instagram@oirp
							</div>
						</div>
						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fab fa-youtube"></i>
							</div>
							<div class="info-text">
								Youtube@oirp
							</div>
						</div>

					</div>
					
					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							Nos Coordonn&eacute;es
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-text">Riviera Faya - Carrefour Nouveau Goudron , Cocody abidjan</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-text">info@oirp-ong.com</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">OIRP/CI : (+225) 27 359 68565 - 07 030 80370</div>
							<div class="info-text">OIRP/EUROPE : (+351) 936 886 760</div>
							<div class="info-text">OIRP/AMERIQUE : +1 (647) 219-6319</div>
						</div>						
					</div>
					<div class="clearfix"></div>
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Envoyer un <span>Message</span>
						</h2>
						<div class="margin-bottom-20"></div>

						<div class="content">
							<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_name" placeholder="Votre nom" required="">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" id="p_email" placeholder="Votre e-mail" required="">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_subject" placeholder="Sujets">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="p_phone" placeholder="Votre num&eacute;ro">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="form-group">
									 <textarea id="p_message" class="form-control" rows="6" placeholder="Votre Message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary disabled" style="pointer-events: all; cursor: pointer;">Envoyer votre Message</button>
								</div>
							</form>
							<div class="margin-bottom-50"></div>
							<p><em>Note: Veuillez nous laisser vos messages et suggestions, nous vous r&eacute;pondrons au plus vite.</em></p>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>
<?= $this->endSection('content') ?>