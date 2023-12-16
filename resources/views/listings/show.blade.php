<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-12 bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-2xl font-medium text-gray-900 title-font">
                    {{ $listing->title }}
                </h2>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach($listing->tags as $tag)
                        <span class="inline-block mr-2 tracking-wide text-indigo-500 text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-3/4 px-4">
                    <div class="bg-white p-6 shadow-md rounded-lg mb-6">
                        <div class="leading-relaxed text-base">
                            {!! $listing->content !!}
                        </div>
                       
                    </div>
                </div>
                <div class="w-full md:w-1/4 px-4">
                    <div class="bg-white p-6 shadow-md rounded-lg">
                        <img
                            src="/storage/{{ $listing->logo }}"
                            alt="{{ $listing->company }} logo"
                            class="max-w-full mb-4"
                        >
                        <p class="leading-relaxed text-base">
                            <strong>Location: </strong>{{ $listing->location }}<br>
                            <strong>Company: </strong>{{ $listing->company }}
                        
                        </p>
                       
                    </div>
                </div>
                
            </div>
            <a href="{{ route('listings.apply', $listing->slug) }}" 
   class="block text-center my-4 tracking-wide bg-white text-purple-500 text-sm font-medium title-font py-2 border border-indigo-500 uppercase"
   style="width: 500px; transition: background-color 0.3s, color 0.3s;"
   onmouseover="this.style.backgroundColor='#c186c9'; this.style.color='white';"
   onmouseout="this.style.backgroundColor='white'; this.style.color='#c186c9';">
    Apply Now
</a>



        </div>
    </section>
</x-app-layout>
