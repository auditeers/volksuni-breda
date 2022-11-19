<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-title">Website Inhoud</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file'></i> Webpagina's</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('collection') }}'><i class='nav-icon la la-book'></i> Collecties</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faq') }}'><i class='nav-icon la la-question'></i> FAQ's</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('block') }}'>
        <i class='nav-icon la la-stream'></i> Uitgelicht Blokjes</a>
</li>

<li class="nav-title">Cursus Beheer</li>
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('course') }}'><i class='nav-icon la la-school'></i> Basis Cursusinfo</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('program') }}'><i class='nav-icon la la-calendar'></i> Programma's</a></li>



<li class="nav-title">Algemene Informatie</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('teacher') }}'>
        <i class='nav-icon las la-chalkboard-teacher'></i> Docenten</a>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('location') }}'>
        <i class='nav-icon las la-map-marker'></i> Locaties</a>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('review') }}'>
        <i class='nav-icon la la-star'></i> Beoordelingen</a>
</li>


<li class="nav-title">Administratie</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('student') }}'>
        <i class='nav-icon la la-users'></i> Cursisten</a>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('order') }}'>
        <i class='nav-icon las la-pen'></i> Inschrijvingen</a>
</li>
<li class='nav-item'><a class='nav-link' href='#' onclick="alert('Deze funtionaliteit wordt nog ontwikkeld');return false;">
        <i class='nav-icon la la-file-export'></i> Rapportages</a>
</li>


<li class="nav-title">Instellingen</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Bestanden</span></a></li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Gebruikers & Rechten</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Gebruikers</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Rollen</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Rechten</span></a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-sync"></i> Import en Sync</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="/command/import/program"><i class="nav-icon la la-database"></i> <span>Programma</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/command/import/cats"><i class="nav-icon la la-database"></i> <span>Categorie&euml;n</span></a></li>
    </ul>
</li>

