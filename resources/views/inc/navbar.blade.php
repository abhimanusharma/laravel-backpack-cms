<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">BackpackApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">About us</a>
        </li>
        <li class="nav-item {{Request::is('services') ? 'active' : ''}}">
            <a class="nav-link" href="/services">Services</a>
        </li>
        </ul>
    </div>
</nav>