<nav>
    <div id="logo"><a href="/">LOGO</a></div>

    <div class="menu">
        <a href="/" class="<?= urlIs('/') ? 'active' : '' ?>">Home</a>
        <a href="/about" class="<?= urlIs('/about') ? 'active' : '' ?>">About</a>
        <a href="/notes" class="<?= urlIs('/notes') ? 'active' : '' ?>">Notes</a>
        <a href="/cars" class="<?= urlIs('/cars') ? 'active' : '' ?>">Cars</a>
        <a href="/contact" class="<?= urlIs('/contact') ? 'active' : '' ?>">Contact</a>
    </div>
</nav>
<div class="wrapper">