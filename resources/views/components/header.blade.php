<header class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('listings.index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#c186c9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 text-white p-2 rounded-full" viewBox="0 0 24 24">
    <path fill="#c186c9" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
</svg>




            <span class="ml-3 text-xl">Job Board</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Employers</a>
        </nav>
        <a href="{{ route('listings.create') }}" class="inline-flex items-center bg-muted-purple text-white border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0" style="transition: background-color 0.3s; text-decoration: none; color: white; background-color: #c186c9;" onmouseover="this.style.backgroundColor='#8a5b8e'" onmouseout="this.style.backgroundColor='#c186c9'">
    Post Job
</a>


            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>
