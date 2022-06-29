<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
    <div class="section banner-page" data-background="oirp/assets/img/banner-single.jpg" style="background-image: url(&quot;oirp/assets/img/banner-single.jpg&quot;);">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">Certificats</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Certificats</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Envoyer un <span>Message</span>
						</h2>
						<div class="margin-bottom-20"></div>

						<div class="content">
							<form action="<?= base_url() ?>/diplome" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
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
											<input type="email" class="form-control" id="identifiant" placeholder="Votre Identifiant" required="">
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
									<div id="success"></div>
									<button type="submit" class="btn btn-danger disabled" style="pointer-events: all; cursor: pointer;">Envoyer votre Message</button>
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