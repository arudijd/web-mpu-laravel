
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
  <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset("img/logo.png") }}" alt="logo-img" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarToggleExternalContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
                <a class="nav-link {{ ($title === "Home" ? 'active' : '') }}" href="/">Beranda</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ ($title === "Profil" ? 'active' : '') }}"  href="/profil">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Produk" ? 'active' : '') }}"  href="/produk">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Client" ? 'active' : '') }}"  href="/client">klien</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ ($title === "Contact" ? 'active' : '') }}"  href="/contact">Kontak</a>
            </li>
        </ul>
    </div>
  </div>
</nav>



