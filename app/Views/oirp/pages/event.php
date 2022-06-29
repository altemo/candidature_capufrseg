<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
    <div class="section banner-page" data-background="oirp/assets/img/banner-single.jpg" style="background-image: url(&quot;oirp/assets/img/banner-single.jpg&quot;);">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">&Eacute;v&egrave;nements</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">&Eacute;v&egrave;nements</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	<!-- EVENTS -->
	<div class="section mb-0">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Nos <span>&Eacute;v&egrave;nements</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section"   data-background="<?= base_url() ?>/oirp/assets/img/image_oirp2.jpg" >
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<!--<div class="col-sm-6 col-md-6">

						<div class="event-pin">
							<h1 class="color-white">&Eacute;v&egrave;nement actuel</h1>
							<h3><a href="#">Formation des volontaires</a></h3>
							<p>Sad ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
							<a href="#" class="read-more">Voir plus...</a>
							<div class="more-event"><a href="#"><i class="fa fa-long-arrow-left"></i></a></div>
						</div>

					</div>-->

					<div class="col-sm-6 col-md-5 col-md-offset-1 color-oirp-bgdarklight">
						<h2 class="section-heading light">
							<span>Dernier </span>&Eacute;v&egrave;nement
						</h2>			
						<div class="list-events">
							<div class="box-event">
								<div class="img-video">
									<!--<a href="https://www.youtube.com/watch?v=WkaJncKMVUs" class="popup-youtube play-video"><i class="fa fa-play fa-2x"></i></a>
									-->
									<img src="<?= base_url() ?>/oirp/assets/amb/1.jpeg" alt="">
									<!--<div class="ripple"></div>-->
								</div>
								<!--<div class="meta-date">
									<div class="date">24</div>
									<div class="month">AUG</div>
								</div>
								<div class="body-content">
									<h4><a href="events-detail.html">Meet & greet volunteer ny</a></h4>
									<div class="meta">
										<span class="date"><i class="fa fa-clock-o"></i>  12:00 am - 5:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> London, UK</span>
									</div>
									<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
								</div> -->
							</div>
						</div>
						
					</div>

				</div>


			</div>
		</div>
	</div>
<?= $this->endSection('content') ?>