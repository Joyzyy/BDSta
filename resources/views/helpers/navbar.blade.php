<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<nav class="navbar mb-2 shadow-lg bg-neutral text-neutral-content px-0 md:px-8" id="nav1" style="z-index:2;">
    <div class="px-2 mx-2 navbar-start">
        <span class="text-lg font-bold">
            <a href="{{ route('/') }}">BDSta</a>
        </span>
    </div>

    <div class="navbar-center px-2 mx-2 lg:flex">
        <div class="flex justify-items-stretch">
            <a class="btn btn-ghost btn-sm rounded-btn" id="barbati" href="{{ route('barbati') }}">
                Barbati
            </a>

            <a class="btn btn-ghost btn-sm rounded-btn" id="femei" href="{{ route('femei') }}">
                Femei
            </a>

            <a class="btn btn-ghost btn-sm rounded-btn" id="accesorii" href="{{ route('accesorii') }}">
                Accesorii
            </a>

            <a class="btn btn-ghost btn-sm rounded-btn" id="parfumuri" href="{{ route('parfumuri') }}">
                Parfumuri
            </a>
        </div>
    </div>

    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <div tabindex="0">
                <a href="{{ route('cos') }}"><button class="btn btn-square btn-ghost">
                    <i class="fas fa-shopping-cart"></i>
                </button></a>
            </div>

            <ul class="shadow menu dropdown-content bg-base-100 rounded-box w-96">
            </ul>
        </div>

        <div class="dropdown dropdown-end">
            <div tabindex="0">
                <button class="btn btn-square btn-ghost">
                    <i class="fas fa-user"></i>
                </button>
            </div>

            <ul class="shadow menu dropdown-content bg-base-100 rounded-box w-52">
                @auth
                    @if (Auth::user()->name == "bdsta")
                    <li><a href="{{ route('panou_admin') }}">Panou administrator</li></a>
                    @endif
                    <li><a>Profil</a></li>
                    <li><a href="{{ route('logout') }}">Delogare</a></li>
                @endauth
                
                @guest
                    <li><a href="{{ route('login') }}">Logare</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("nav1").style.top = "0";
        } else {
            document.getElementById("nav1").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }

    if (typeof window.orientation !== 'undefined') {
        document.getElementById('barbati').innerHTML = "B";
        document.getElementById('femei').innerHTML = "F";
        document.getElementById('accesorii').innerHTML = "A";
        document.getElementById('parfumuri').innerHTML = "P";
    }
</script>