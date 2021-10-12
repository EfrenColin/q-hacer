<template>
    <div  class="flex h-screen bg-white dark:bg-gray-900"
          :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Backdrop -->
        <div
            v-show="isSideMenuOpen"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        ></div>
        <aside
            v-if="$page.component.startsWith('User')"
            class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-14 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            v-show="isSideMenuOpen"
            @click="closeSideMenu"
            @keydown.escape="closeSideMenu"
        >
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a
                    class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                    href="#"
                >
                    Todoo
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
              <span
                  class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"
              ></span>
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                            href="index.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                ></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="forms.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                                ></path>
                            </svg>
                            <span class="ml-4">Forms</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="cards.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                ></path>
                            </svg>
                            <span class="ml-4">Cards</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="charts.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                                ></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">Charts</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="buttons.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                                ></path>
                            </svg>
                            <span class="ml-4">Buttons</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="modals.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                                ></path>
                            </svg>
                            <span class="ml-4">Modals</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="tables.html"
                        >
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            <span class="ml-4">Tables</span>
                        </a>
                    </li>
                </ul>
                <div class="px-6 my-6">
                    <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Create account
                        <span class="ml-2" aria-hidden="true">+</span>
                    </button>
                </div>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-1 space-y-1 bg-green-500 border-b-2 border-gray-900">
                <div class=" flex items-center justify-between h-auto px-6 mx-auto">
                    <!-- Mobile hamburger -->
                    <button
                        class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu"
                        aria-label="Menu"
                    >
                        <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <div class="flex items-center justify-center space-x-2">
                        <Link :href="route('dashboard')"  :class="[ $page.component.startsWith('Dashboard') ? 'bg-green-300' :'']"
                              class="p-1 text-green-400 transition-colors duration-200 rounded hover:text-green-600 hover:bg-green-400 focus:outline-none focus:bg-green-300 focus:ring-green-800">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </Link>
                    </div>

                    <div class="flex items-center justify-center space-x-2">
                        <div class="relative">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="relative">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        </div>
                        <div class="relative" v-if="$page.props.auth.user">
                            <BreezeDropdown align="right" width="64" content-classes="w-64 bg-white py-1">
                                <template #trigger>
                                    <button  class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name" />
                                    </button>
                                </template>

                                <template #content>
                                    <div class="text-center p-6 border-b">
                                        <img
                                            class="h-16 w-16 rounded-full mx-auto"
                                            :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name"
                                        />
                                        <p class="pt-2 text-lg font-semibold" v-text="$page.props.auth.user.name"></p>
                                        <p class="text-sm text-gray-600" v-text="$page.props.auth.user.email"></p>
                                        <div class="mt-5">
                                            <a
                                                href="#"
                                                class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-700"
                                            >
                                             Administrar cuenta
                                            </a>
                                        </div>
                                        <div class="mt-8">
                                            <p class="text-xs font-medium text-gray-400 leading-none float-right">Versión <strong class="text-red-500">0.1</strong></p>
                                        </div>
                                    </div>
                                    <div class="border-b">
                                        <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                                            <div class="text-gray-800">
                                                <svg
                                                    fill="none"
                                                    stroke="currentColor"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    strokeWidth="1"
                                                    viewBox="0 0 24 24"
                                                    class="w-5 h-5"
                                                >
                                                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>
                                            <div class="pl-3">
                                                <p class="text-sm font-medium text-gray-800 leading-none">Invitar miembros</p>
                                                <p class="text-xs text-gray-500">Agrega/administra invitaciones y usuarios invitados</p>
                                            </div>
                                        </a>

                                        <Link :href="route('settings.users.personal')" class="px-4 py-2 hover:bg-gray-100 flex">
                                            <div class="text-gray-800">
                                                <svg
                                                    fill="none"
                                                    stroke="currentColor"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    strokeWidth="1"
                                                    viewBox="0 0 24 24"
                                                    class="w-5 h-5"
                                                >
                                                    <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div class="pl-3">
                                                <p class="text-sm font-medium text-gray-800 leading-none">Configuraciones personales</p>
                                                <p class="text-xs text-gray-500">correo, perfil, notificaciones</p>
                                            </div>
                                        </Link>
                                        <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                                            <div class="text-gray-800">
                                                <svg
                                                    fill="none"
                                                    stroke="currentColor"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    strokeWidth="1"
                                                    viewBox="0 0 24 24"
                                                    class="w-5 h-5"
                                                >
                                                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                            <div class="pl-3">
                                                <p class="text-sm font-medium text-gray-800 leading-none">Configuraciones de cuenta</p>
                                                <p class="text-xs text-gray-500">Uso,equipos</p>
                                            </div>
                                        </a>
                                        <!--<a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                                            <div class="text-green-600">
                                                <svg
                                                    fill="none"
                                                    stroke="currentColor"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    strokeWidth="1"
                                                    viewBox="0 0 24 24"
                                                    class="w-5 h-5"
                                                >
                                                    <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                                </svg>
                                            </div>
                                            <div class="pl-3">
                                                <p class="text-sm font-medium text-gray-800 leading-none">
                                                    Apps &amp; integrations
                                                </p>
                                                <p class="text-xs text-gray-500">Google, slack, mail</p>
                                            </div>
                                        </a> -->
                                    </div>
                                    <div>
                                        <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                                            <p class="text-sm font-medium text-gray-800 leading-none">Soporte</p>
                                        </a>
                                        <BreezeDropdownLink :href="route('logout')" method="post" as="button">
                                            Cerrar sesión
                                        </BreezeDropdownLink>
                                    </div>
                                </template>
                            </BreezeDropdown>
                        </div>
                        <Link :href="route('login')" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-green-600 uppercase transition bg-transparent border-2 border-green-600 rounded hover:bg-green-100 focus:outline-none"
                              v-else>
                            Acceder
                        </Link>
                    </div>
                </div>
            </header>
            <aside   v-if="!$page.component.startsWith('User/Setting')"  class=" hidden h-full fixed mt-8 w-64 overflow-y-auto bg-gray-50 md:block flex-shrink-0">
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <div class="flex w-full max-w-xs px-4">
                        <ul class="flex flex-col w-full space-y-2 mt-5">
                            <li class="my-px flex justify-between items-center">
                               <div>
                                   <div class="mt-1 relative">
                                       <button type="button" class="relative w-56 bg-transparent border border-gray-300 rounded-md  pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-green-500 focus:border-green-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                          <span class="flex items-center">
                                            <span class="block truncate">
                                              Espacio de trabajo
                                            </span>
                                          </span>
                                           <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                          </span>
                                       </button>

                                   </div>
                               </div>
                            </li>
                            <li class="my-px flex justify-between items-center">
                                <span class="flex font-medium text-sm text-gray-400 px-2 uppercase">Menu</span>
                            </li>
                            <li class="my-px">
                                <a class="flex flex-row items-center px-2 py-2 rounded-lg  hover:text-green-600 hover:bg-gray-100">
                                        <span class="flex items-center justify-center text-sm text-gray-400"  :class="[route().current('users.purchases') ? 'text-green-400' : 'text-gray-400']">
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                            </svg>
                                        </span>
                                    <span class="ml-3 text-sm">Inicio</span>
                                </a>
                            </li>
                            <li class="my-px">
                                <a
                                      class="flex flex-row items-center px-2 py-2 rounded-lg text-gray-600 hover:text-green-600 hover:bg-gray-100">
                                        <span class="flex items-center justify-center text-sm" :class="[route().current('users.favorites') ? 'text-green-400' : 'text-gray-400']">
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                            </svg>
                                        </span>
                                    <span class="ml-3 text-sm">Hoy</span>
                                </a>
                            </li>
                            <li class="my-px">
                                <a
                                    class="flex flex-row items-center px-2 py-2 rounded-lg text-gray-600 hover:text-green-600 hover:bg-gray-100">
                                        <span class="flex items-center justify-center text-sm" :class="[route().current('users.favorites') ? 'text-green-400' : 'text-gray-400']">
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                            </svg>
                                        </span>
                                    <span class="ml-3 text-sm">Proximo</span>
                                </a>
                            </li>
                            <li class="my-px">
                                <a href="#" @click="show = !show"

                                   class="flex flex-row items-center px-2 py-2 rounded-lg text-gray-600 hover:text-green-600 hover:bg-gray-100">
                                        <span class="flex items-center justify-center text-sm" :class="[route().current('users.business.*') ? 'text-green-400' : 'text-gray-400']">
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </span>
                                    <span class="ml-3 text-sm">Proyectos</span>
                                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">2</span>
                                </a>
                            </li>
                            <li class="my-px" v-if="show">
                                <ul class="flex flex-col w-full">
                                    <li>
                                        <a href="#" class="flex flex-row items-center px-3 ml-2 rounded-lg text-gray-600 hover:text-green-600">
                                            <div class="border-l border-gray-200 py-1">
                                                <span class="ml-5 text-sm">Sub Item</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li >
                                        <a class="flex flex-row items-center px-3 ml-2 rounded-lg hover:text-green-600">
                                            <div class="border-l border-gray-200 py-1 flex flex-row items-center">
                                                    <span class="flex items-center justify-center text-sm text-green-400 ml-5 ">
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
                                                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </span>
                                                <span class="ml-1 text-sm">Agregar</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="my-px">
                                <a
                                    class="flex flex-row items-center px-2 py-2 rounded-lg text-gray-600 hover:text-green-600 hover:bg-gray-100">
                                        <span class="flex items-center justify-center text-sm" :class="[route().current('users.favorites') ? 'text-green-400' : 'text-gray-400']">
                                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                            </svg>
                                        </span>
                                    <span class="ml-3 text-sm">Etiquetas</span>
                                </a>
                            </li>
                            <li class="my-px">
                                <span class="flex font-medium text-sm text-gray-400 px-2 uppercase">Compartidos conmigo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <main class="h-full  overflow-y-auto" :class="[ $page.component.startsWith('User/Setting') ? '' :'ml-0 md:ml-64']">
                <slot></slot>

            </main>

        </div>

    </div>
</template>

<script>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeApplicationLogo,
        BreezeDropdown,
        BreezeDropdownLink,
        BreezeNavLink,
        BreezeResponsiveNavLink,
        Link,
    },

    data() {
        return {
            showingNavigationDropdown: false,
            isSideMenuOpen: false,
            show: true,
            toggleTheme: false,
        }
    },
    methods:{
        closeSideMenu() {
            this.isSideMenuOpen = false
        },
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen
        },
    },

}
</script>
