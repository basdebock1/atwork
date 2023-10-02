<nav class="nav">
    <div class="nav__bar">
        <a class="nav__brand" href="/">
            Scouts Sint-Martinus
        </a>
        <div class="nav__items">
            <ul class="nav__links">
                <li>
                    <a class="{{ request()->is('over-ons') ? 'active' : '' }}" href="/over-ons">Over ons</a>
                </li>
                <li>
                    <a class="{{ request()->is('nieuws*') ? 'active' : '' }}" href="/nieuws">Nieuws</a>
                </li>
                <li>
                    <a class="{{ request()->is('leiding') ? 'active' : '' }}" href="/leiding">Leiding</a>
                </li>
                <li>
                    <a class="{{ request()->is('takken') ? 'active' : '' }}" href="/takken">Takken</a>
                </li>
                <li>
                    <a class="{{ request()->is('uniform') ? 'active' : '' }}" href="/uniform">Uniform</a>
                </li>
                <li>
                    <a class="{{ request()->is('inschrijven') ? 'active' : '' }}" href="/inschrijven">Inschrijven</a>
                </li>
            </ul>
            <ul class="social__links">
                <li>
                    <a href=""><i class="fab fa-facebook fa-lg"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-instagram fa-lg"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-gift fa-lg"></i></a>
                </li>
            </ul>
        </div>
        <button onclick="openMenu()" class="burger">
            <div class="strip">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </button>
    </div>
    </div>
</nav>

<script>
    const openMenu = () => {
        document.querySelector('.burger').classList.toggle('active');
        document.querySelector('.nav').classList.toggle('active');
        document.querySelectorAll('.nav__links').forEach(element => {
            element.addEventListener('click', () => {
                document.querySelector('.burger').classList.remove('active');
                document.querySelector('.nav').classList.remove('active');
            })
        });
    }
</script>
