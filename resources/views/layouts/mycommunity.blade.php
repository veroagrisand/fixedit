<x-app-layout>
    <section>
        <div class="container mx-auto mt-16 sm:p-6 md:p-4 p-6">
                @foreach ($komunitas as $K )
                <div class=" w-full min-h-screen gap-8 flex flex-col  items-center mx-auto font-poppins pb-6">
                  <!-- Card -->
                  <div class="w-full p-8 flex  transparent outline outline-1 outline-purple-700  rounded-2xl transform transition-all hover:-translate-y-2 duration-300  hover:bg-purple-800">
                    <!-- Image -->
                    <img class="rounded-full w-32 h-32" src="{{ $K->image_komunitas }}" alt="">
                    <div class="p-4 flex flex-col justify-center">
                      <!-- Heading -->
                      <h2 class="font-bold text-white text-lg mb-2">{{ $K->nama_komunitas }}</h2>
                      <!-- Description -->
                      <p class="text-sm text-slate-300">{{ $K->description_komunitas }}</p>
                    </div>
                    <!-- CTA -->
                    <div class=" flex flex-col justify-center absolute inset-y-0 right-14">
                      <a role='button' href="{{ route('mycommunity.Event',['id'=> $K->id_komunitas]) }}" class="text-slate-100 text-bold hover:text-bold bg-purple-600 px-3 py-2 rounded-lg hover:bg-purple-900">See More</a>
                    </div>
                  </div>
                  @endforeach

            </div>
        </div>
    </section>

  </x-app-layout>
