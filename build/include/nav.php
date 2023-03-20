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
<nav id="navbar" class="fixed top-0 z-40 flex w-full h-16 flex-row justify-between bg-[#191919]/50 px-4 sm:justify-between duration-300 ease-in-out">
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200 md:hidden">
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

    <div class="hidden md:block w-full py-4 px-16">
      <form>   
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-[#F5EDF0] border border-[#F5EDF0] rounded-lg bg-transparent focus:border-[#406E8E]" required>
          </div>
      </form>
    </div>

    <div class="py-4 text-2xl text-white hover:text-gray-200">
      <a class="open-login"><i class="bi bi-person-circle"></i></a>
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
                            <span class="select-none"><i class="bi bi-search mr-4 text-xl"></i><input type="search" class="rounded-full placeholder:italic pl-4 w-3/4" placeholder="Rechercher..."></span>
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

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos){
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;
    } 
</script>

<!-- MODAL -->
<dialog id="login" class="login h-40vh w-[320px] p-0 bg-[#191919]">
          <div class="absolute loginclose text-white text-center w-[24px]">X</div>
    <div class="p-6 rounded shadow-md">
      <div class=" mb-4">
        <h1 class="text-xl font-medium mb-2 flex">
          <span id="login-heading" class="border-b w-1/2 text-center cursor-pointer font-bold text-[#406E8E]">Connexion</span>
          <span id="register-heading" class="w-1/2 text-center cursor-pointer font-bold text-gray-500">Inscription</span>
        </h1>
      </div>
      
      <div id="login-form">
        <form action="#" method="POST">
          <div class="my-5 px-2">
            <input class="bg-[#191919] appearance-none border-b  w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="email" type="email" placeholder="Entrez votre email">
          </div>
          <div class="my-5 px-2">
            <input class="bg-[#191919] appearance-none border-b  w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="password" type="password" placeholder="Entrez votre mot de passe">
          </div>
          <button class="bg-[#406E8E] hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
            type="submit">
            Se connecter
          </button>
        </form>
      </div>
      <div id="register-form" style="display:none;">
        <form action="#" method="POST">
          <div class="my-5 px-2">
            <input class="bg-[#191919] appearance-none border-b  w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="name" type="text" placeholder="Entrez votre nom">
          </div>
          <div class="my-5 px-2">
            <input class="bg-[#191919] appearance-none border-b  w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="email" type="email" placeholder="Entrez votre email">
          </div>
          <div class="my-5 px-2">
            <input class="bg-[#191919] appearance-none border-b  w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
              id="password" type="password" placeholder="Entrez votre mot de passe">
          </div>
          <button class="bg-[#406E8E] hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
            type="submit">
            S'inscrire
          </button>
        </form>
      </div>
    </div>
  </div>

  

</dialog>

        <script>
            const modal = document.querySelector("#login");
            const openModal = document.querySelector(".open-login");
            const closeModal = document.querySelector(".loginclose");

            openModal.addEventListener("click", () => {
            modal.showModal();
            });

            closeModal.addEventListener("click", () => {
            modal.close();
            });
        </script>
        
        <script>
    const loginHeading = document.getElementById('login-heading');
    const registerHeading = document.getElementById('register-heading');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    // Add click event listener to login heading
    loginHeading.addEventListener('click', () => {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
      loginHeading.classList.add('text-[#406E8E]', 'font-bold', 'border-b');
      loginHeading.classList.remove('text-gray-500', 'font-medium');
      registerHeading.classList.add('text-gray-500', 'font-medium');
      registerHeading.classList.remove('text-[#406E8E]', 'font-bold', 'border-b');
    });

    // Add click event listener to register heading
    registerHeading.addEventListener('click', () => {
      registerForm.style.display = 'block';
      loginForm.style.display = 'none';
      registerHeading.classList.add('text-[#406E8E]', 'font-bold', 'border-b');
      registerHeading.classList.remove('text-gray-500', 'font-medium',);
      loginHeading.classList.add('text-gray-500', 'font-medium');
      loginHeading.classList.remove('text-[#406E8E]', 'font-bold', 'border-b');
    });
  </script>