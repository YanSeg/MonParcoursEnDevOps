<header>
  <!-- Main navigation container -->
  <nav
    class="flex-no-wrap relative flex w-full items-center justify-between bg-[#FBFBFB] py-2 shadow-md shadow-black/5 lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <!-- Hamburger button for mobile view -->
      <button
        class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
        type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="[&>svg]:w-7">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
            <path fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </button>

      <!-- Collapsible navigation container -->
      <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
        id="navbarSupportedContent1" data-te-collapse-item>
        <!-- Logo -->
        <a class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
          href="#">
          <img src="/img/logo.png" style="height: 60px" alt="Logo" loading="lazy" />
        </a>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>

            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
              href="{{ route('accueil')}}" data-te-nav-link-ref>Acceuil</a>
          </li>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
              href="/liste-des-produits" data-te-nav-link-ref>Catalogue</a>
          </li>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
              href="/team" data-te-nav-link-ref>Notre équipe</a>
          </li>
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
              href="/backoffice" data-te-nav-link-ref>Backoffice</a>
          </li>
        </ul>
      </div>
      <div class="relative flex items-center">
        <a class="mr-4 text-neutral-600 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none [&.active]:text-black/90"
          href="/Panier">
          <span class="[&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
              <path
                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
            </svg>
          </span>
        </a>

        <!-- Container with two dropdown menus -->
        <div class="relative" data-te-dropdown-ref>
          <!-- First dropdown trigger -->
          <a class="hidden-arrow mr-4 flex items-center text-neutral-600 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none [&.active]:text-black/90"
            href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
            <!-- Dropdown trigger icon -->


            <!-- Second dropdown container -->
            <div class="relative" data-te-dropdown-ref>
              <!-- Second dropdown trigger -->
              <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
                <!-- User avatar -->
                <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                  style="height: 25px; width: 25px" alt="" loading="lazy" />
              </a>
              <!-- Second dropdown menu -->
              <ul
                class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                <!-- Second dropdown menu items -->
                <li>
                  <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="{{route('dashboard')}}" data-te-dropdown-item-ref>login</a>
                </li>
                <li>
                  <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="{{route('register')}}" data-te-dropdown-item-ref>register</a>
                </li>
                <li>
                  <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="{{route('register')}}" data-te-dropdown-item-ref>register</a>
                </li>
                <li>
                  <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                    href="{{route('register')}}" data-te-dropdown-item-ref>register</a>
                </li>

              </ul>
            </div>
        </div>
      </div>
  </nav>
</header>