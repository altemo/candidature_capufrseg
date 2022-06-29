
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/">Accueil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            L'OIRP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/pwords">Mots du pr&eacute;sident</a>
            <a class="dropdown-item" href="<?= base_url() ?>/apropos">&Agrave; propos de OIRP</a>
            <a class="dropdown-item" href="<?= base_url() ?>/faq">D&eacute;venir membre</a>
            <a class="dropdown-item" href="<?= base_url() ?>/team">Notre &eacute;quipe</a>
        </div>
    </li>
    <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CAUSES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="cause.html">Causes</a>
            <a class="dropdown-item" href="cause-single.html">Single Causes</a>
        </div>
    </li>-->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Distinctions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/ambassadeur">Ambassadeurs de la paix</a>
            <a class="dropdown-item" href="<?= base_url() ?>/certificat">V&eacute;rifier ma disctinction</a> 
            <!--<a class="dropdown-item" href="<?= base_url() ?>/distinction">V&eacute;rifier ma distinction</a>-->
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Causes d&eacute;fendues
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/cause/actions_humanitaires">Actions Humanitaires</a>
            <a class="dropdown-item" href="<?= base_url() ?>/cause/promotion_de_l_education">Promotion de l'&Eacute;ducation</a>
            <a class="dropdown-item" href="<?= base_url() ?>/cause/recherche_renforcement_de_la_paix">Recherche et Renforcement de la Paix</a>
            <a class="dropdown-item" href="<?= base_url() ?>/cause/lutte_contre_la_pauvrete">La Lutte Contre la Pauvret&eacute;</a>
            <a class="dropdown-item" href="<?= base_url() ?>/cause/formation_personne">Formation des volontaires</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            &Eacute;v&egrave;nements
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/photos">Gal&eacute;rie photo</a>
            <a class="dropdown-item" href="<?= base_url() ?>/event">&Eacute;v&egrave;nements</a>
        </div>
    </li>
   <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Membres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/team">Notre &eacute;quipe</a>
            <a class="dropdown-item" href="<?= base_url() ?>/membre#">Devenir membre</a>
        </div>
    </li>-->
     <!--<li class="nav-item ">
        <a class="nav-link" href="<?= base_url() ?>/cause" >
            Causes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url() ?>/event">Events</a>
        </div>
    </li>
   <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>/membre#">D&eacute;venir membre</a>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>/contactus">Contactez-nous</a>
    </li>
</ul>

<!--<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
        $request = service('request');
        ?>
        <li class="nav-item">
            <a href="/" class="nav-link <?= !$request->uri->getSegment(1) ? 'active' : null; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/users" class="nav-link <?= $request->uri->getSegment(1) == 'users' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/projects" class="nav-link <?= $request->uri->getSegment(1) == 'projects' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-cubes"></i>
                <p>Projects</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/tags" class="nav-link <?= $request->uri->getSegment(1) == 'tags' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-tags"></i>
                <p>Tags</p>
            </a>
        </li>
    </ul>
</nav> -->