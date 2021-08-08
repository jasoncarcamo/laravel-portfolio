@push("styles")
    <link href="/css/layout/header.css" rel="stylesheet"/>
@endpush

@push("scripts")
    <script src="/js/layout/header.js" defer></script>
@endpush
@stack("scripts")

@stack("styles")
<header id="nav-header">
    <button id="nav-burger" class="hamburger hamburger--collapse" type="button">
        <div class="burger-line line-top"></div>
        <div class="burger-line line-middle"></div>
        <div class="burger-line line-bottom"></div>
    </button>

    <div id="nav-bar-container">
        <nav id="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/technologies">Technologies</a>
            <a href="/projects">Projects</a>
        </nav>
    </div>
</header>