<nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
    <div class="container">
        <div class="col-md-4  justify-content-left">
            <a class="navbar-brand" href="/">
                <img src="img/logo.png" alt="logo-img" width="100">
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-center col-md-4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ ($title === "Home" ? 'active' : '') }}" href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($title === "Profil" ? 'active' : '') }}"  href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Produk" ? 'active' : '') }}"  href="produk.html">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Client" ? 'active' : '') }}"  href="/client">Client</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($title === "Contact" ? 'active' : '') }}"  href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
