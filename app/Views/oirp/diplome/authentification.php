<?= $this->extend('oirp/layout/main') ?>
<?= $this->section('content') ?>
<div class="section banner-page" data-background="oirp/assets/img/banner-single.jpg" style="background-image: url(&quot;oirp/assets/img/banner-single.jpg&quot;);">
    <div class="content-wrap pos-relative">
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="title-page">V&eacute;rification Identification</div>
        </div>
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">V&eacute;rification Identification</li>
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
                       R&eacute;sultat de l'Authentification
                    </h2>
                    <div class="margin-bottom-20"></div>

                    <div class="content">
                        <span class="bg-warning text-dark" >0 r&eacute;sultat trouv&eacute;</span>
                            <a class="text-danger btn btn-link p-0" href="<?=base_url()?>/certificat">&nbsp;Relancer l'authentification du dipl&ocirc;me ici</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>