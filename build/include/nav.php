<!-- component -->
<!--
Change class "fixed" to "sticky" in "navbar" (l. 33) so the navbar doesn't hide any of your page content!
-->

<style>
    ul.breadcrumb li+li::before {
        content: "\276F";
        padding-left: 8px;
        padding-right: 4px;
        color: inherit;
    }

    ul.breadcrumb li span {
        opacity: 60%;
    }

    #sidebar {
        -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }
</style>

<!-- Navbar start -->
<nav id="navbar" class="fixed top-0 z-40 flex w-full h-16 flex-row justify-between bg-[#191919]/50 px-4 sm:justify-between">
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
        <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="hidden h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div class="py-4">
      <a href="C:\wamp64\www\cinemet\build\index.php"><img src="/cinemet/build/img/allosimplon.png" alt="" class="h-10 w-10"></a>
    </div>

    <div class="py-4 text-2xl text-white hover:text-gray-200">
      <a href="/cinemet/build/content/login.php"><i class="bi bi-person-circle"></i></a>
    </div>
</nav>
<!-- Navbar end -->

<!-- Sidebar start-->
<div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
        <nav id="sidebar"
            class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
            <!-- one category / navigation group -->
            <div class="px-4 pb-6">
                <ul class="text-sm font-medium">
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="/cinemet/build/content/movies.php">
                            <span class="select-none"><i class="bi bi-film mr-4 text-xl"></i>Films</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#link1">
                            <span class="select-none"><i class="bi bi-tv mr-4 text-xl"></i>Séries</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="/cinemet/build/content/contact.php">
                            <span class="select-none"><i class="bi bi-pencil-square mr-4 text-xl"></i>Nous contacter</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#link3">
                            <span class="select-none"><i class="bi bi-search mr-4 text-xl"></i><input type="search" class="rounded-full placeholder:italic pl-4" placeholder="Rechercher..."></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- navigation group end-->
            <!-- example copies end -->
        </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
</div>
<!-- Sidebar end -->

<main>
    <!-- your content goes here -->
</main>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>