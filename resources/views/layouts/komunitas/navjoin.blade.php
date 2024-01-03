@php
    // Misalkan $isJoined adalah variabel yang menandakan apakah user sudah bergabung atau belum
    $isJoined = \App\Models\joins::where('id_komunitas', $komunitass->id_komunitas)->where('KEY', auth()->user()->KEY)->exists();
@endphp
{{-- <x-app-layout>
    <section>
        <div class="container mx-auto mt-10 sm:p-6 md:p-4 p-6"> --}}
            <div class="grid grid-cols-12 gap-6">
                <div class="profile-picture-container-community flex col-span-4  w-full item-center sm:ms-auto  ">
                    <img img src="{{ asset ($komunitass->image_komunitas) }}" alt="Profile Picture" class="profile-picture ">
                </div>

                <div class="col-span-8 flex-row gap-2  mt-16 ">
                    <h1 class="sm:ms-10 font-bold font-poppins text-white sm:text-[16px] md:text-[22px] lg:text-[32px]">
                        {{ $komunitass->nama_komunitas }}
                        <button id="joinButton" data-community-id="{{ $komunitass->id_komunitas }}">
                        <form action="{{ route('Community.joinS',['id_komunitas'=> $komunitass->id_komunitas]) }}" method="post">
                            @csrf
                            {{-- <input type="hidden" name="id_komunitas" value="{{ $id_komunitas }}"> --}}
                            {{-- <button type="submit" class="text-black">Join</button> --}}
                            @if($isJoined)
                                <button type="button" disabled>Joined</button>

                        </form>
                        </button>
                    </h1>
                    <div>
                        <p class="sm:ms-10 font-poppins text-white text-base mt-8 sm:text-[8px] md:text-[10px] lg:text-[14px]">{{ $komunitass->description_komunitas }}</p>
                    </div>

                    <div class="mt-10 flex-row mb-6">
                        <!-- ... -->
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

                           {{-- <x-nav-link href="{{ route('mycommunity.Edit',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('contact')">
                               {{ __('Edit') }}
                           </x-nav-link> --}}
                       </div>
                       {{-- <button class="py-2 px-6 flex bg-white  hover:bg-purple-500 rounded-full duration-300">
                           <x-nav-link class="text-black my-auto hover:text-purple text-justify text-sm font-normal" href="{{ route('mycommunity.AddEvent',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('mycommunity.AddEvent',['id'=> $komunitass->id_komunitas])">
                               {{ __('Add Event') }}
                           </x-nav-link>
                       </button> --}}
                   </div>


                </div>
            </div>
            {{-- @include('layouts.komunitas.event') --}}
            @else
            <button type="submit">Join</button>
        @endif
        {{-- </div>
    </section>
</x-app-layout> --}}
