<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
    <div class="section banner-page" data-background="/oirp/assets/img/banner-single.jpg" style="background-image: url(&quot;/oirp/assets/img/banner-single.jpg&quot;);">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">Mots du pr&eacute;sident</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mots du Pr&eacute;sident</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap-top">
			<div class="container">
				<div class="row align-items-end">

					<div class="col-sm-6 col-md-6">
						<!--<img src="<?= base_url() ?>/oirp/assets/img/help-people.jpg" alt="" class="img-fluid">-->
						<img src="/oirp/assets/img/photo_pr.jpeg" alt=""  class="img-fluid">
					</div>

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							Mot <span>du</span> Pr&eacute;sident
						</h2>
						<!--<div class="section-subheading">
							L'organisation Internationale Pour La Recherche de la Paix (O.I.R.P) est une Organisation Non-gouvernementale de soutien aux actions de Paix de l'ONU.
							Selon les Saintes Écritures :
							&lqoute;Heureux sont ceux qui procurent la Paix!&rquote;
							La Paix est un don que Dieu a donné aux hommes. C'est un héritage  qui nous a été légué par Dieu dont nous devions l'entretenir et la préserver de peur de la dégrader. Que chacun de nous prenne garde à la manière dont il gère ce héritage précieux qui nous a été confié par Dieu. Demain devant Dieu, nous seront tous responsables et allions rendre compte de la manière dont nous avions géré la Paix que Dieu nous a confiée.
							La Paix est un préalable à tout développement durable et prospère. 
							Ne la détruisons pas !
							Soyons des artisans de la Paix en vue d'être utile dans ce monde en déclin. Avec la Paix, construisons le dialogue, la négociation, l'amour, la fraternité, la culture de la Paix et le vivre ensemble.
							Que Dieu nous aide tous à être des Hommes et des Femmes de Paix !
						</div> -->
						<!--<div class="margin-bottom-50"></div>-->
						<dl class="hiw">
							<dt><span class="fa fa-handshake"></span></dt>
							<dd><div class="no">01</div><h3>Oeuvrer pour la Paix</h3></dd>
							<dt><span class="fa fa-gift"></span></dt>
							<dd><div class="no">02</div><h3>Faire des Dons</h3></dd>
							<dt><span class="fa fa-male"></span></dt>
							<dd><div class="no">03</div><h3>Devenir Volontaire</h3></dd>
							<dt><span class="fa fa-bullhorn"></span></dt>
							<dd><div class="no">04</div><h3>Partager nos instants sociaux</h3>.</dd>
						</dl>
						<!--<div class="spacer-70"></div>-->
					</div>

				</div>
			</div>
		</div>
	</div>
<?= $this->endSection('content') ?>