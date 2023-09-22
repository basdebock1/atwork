<nav class="nav">
    <div class="nav__bar">
        <a class="nav__brand" href="/">
            Scouts Nieuwkerken
        </a>
        <div class="nav__items">
            <ul class="nav__links">
                <li>
                    <a href="/admin">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/nieuws">Nieuws</a>
                </li>
                <li>
                    <a href="/admin/leiding">Leiding</a>
                </li>
                <li>
                    <a href="/profile">Instellingen</a>
                </li>
                <li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer">
                            Uitloggen
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="nav__buttons">
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
