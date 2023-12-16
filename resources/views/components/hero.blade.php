<section class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row px-5 pt-16 pb-8 justify-between items-start">
        <div class="w-full md:w-2/3 flex flex-col items-start text-left">
            <br>
            <br>
            <br>
            <br>
           
            <div style="display: flex; align-items: center;">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Unlock Your Career Potential</h1>
                &nbsp;&nbsp;
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-purple-900">Today!</h1>
            </div>
            <br>
            <br>
            <form class="flex w-full justify-start items-end" action="{{ route('listings.index') }}" method="get">
                <div class="relative mr-4 w-full lg:w-1/2 text-left">
                    <input type="text" id="s" name="s" value="{{ request()->get('s') }}" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button style="background-color: #c186c9; padding: 0.75rem 1.5rem; color: white; border: none; cursor: pointer; transition: background-color 0.3s; font-size: 16px;" onmouseover="this.style.backgroundColor='#8a5b8e'" onmouseout="this.style.backgroundColor='#c186c9'">Search</button>
            </form>
            <br>
            <br>
            <a class="text-sm mt-5 text-black-500 mb-10 w-full" style="font-size: 16px;">
                Pursue your passion, discover your purpose, and transform<br>
                your dream job into a fulfilling reality.
            </a>
        </div>

        <div class="w-full md:w-1/2">
        <br>
            <img src="{{ asset('bg-home.png') }}" alt="Image description" class="w-full h-auto">
        </div>
    </div>
</section>
