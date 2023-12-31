 {{-- <x-app-layout>
        <section>
            <div class="container mx-auto mt-10 sm:p-6 md:p-4 p-6"> --}}

                <div class="grid grid-cols-12 gap-6">
                    <div class="profile-picture-container-community flex col-span-4  w-full item-center sm:ms-auto  ">
                      <img img src="{{ asset ($komunitass->image_komunitas) }}" alt="Profile Picture" class="profile-picture ">
                    </div>

                    <div class="col-span-8 flex-row gap-2  mt-16 ">
                        <h1 class="sm:ms-10 font-bold font-poppins text-white sm:text-[16px] md:text-[22px] lg:text-[32px]">{{ $komunitass->nama_komunitas }} <button>JOINED</button></h1>
                        {{-- <p class="font-poppins text-white sm:text-[8px] md:text-[12px] lg:text-[16px]">Pemrograman website</p> --}}
                        <div>
                            <p class="sm:ms-10 font-poppins text-white text-base mt-8 sm:text-[8px] md:text-[10px] lg:text-[14px]">{{ $komunitass->description_komunitas }}</p>
                        </div>

                        <div class="mt-10 flex-row mb-6">

                        </div>
                        <div class="font-poppins  flex space-x-8 sm:text-xs md:text-sm lg:text-base mt-6 items-center mb-6">
                             <div class="hidden sm:-my-px sm:ms-10 sm:flex gap-9">
                                <x-nav-link href="{{ route('mycommunity.Event',['id_komunitas'=> $komunitass->id_komunitas]) }}"  :active="request()->routeIs('mycommunity.Event',['id_komunitas'=> $komunitass->id_komunitas])">
                                    {{ __('Event') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('mycommunity.Galery',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('mycommunity.Galery',['id_komunitas'=> $komunitass->id_komunitas])">
                                    {{ __('Galery') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('mycommunity.Forum',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('mycommunity.Forum',['id_komunitas'=> $komunitass->id_komunitas])">
                                    {{ __('Forum') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('mycommunity.Event',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('contact')">
                                    {{ __('Edit') }}
                                </x-nav-link>
                            </div>
                            <button class="py-2 px-6 flex bg-white  hover:bg-purple-500 rounded-full duration-300">
                                <x-nav-link class="text-black my-auto hover:text-purple text-justify text-sm font-normal" href="{{ route('mycommunity.AddEvent',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('mycommunity.AddEvent',['id'=> $komunitass->id_komunitas])">
                                    {{ __('Add Event') }}
                                </x-nav-link>
                                {{-- <h1 > Add Event</h1> --}}
                            </button>





                        </div>
                    </div>
                </div>


                    {{-- <div class="container mx-auto ">
                      <div class="grid grid-cols-12 overflow-y-scroll h-96 mt-6">

                        <div class="col-span-6 p-6 gap-3 flex flex-col font-poppins">
                          <!-- Card 1 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                        <div class="col-span-6 p-6 gap-6 flex flex-col font-poppins">
                          <!-- Card 2 -->
                          <div class="w-full bg-white rounded-lg transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                            <!-- Image -->
                            <img class="h-full object-cover w-full rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                          </div>
                        </div>

                      </div>
                    </div> --}}
                {{-- </div>
        </section>
      </x-app-layout> --}}
