<x-app-layout>
    <section>
        <div class="container mx-auto mt-10 sm:p-6 md:p-4 p-6">
            <div class="grid grid-cols-12 gap-6">
                <div class="profile-picture-container-community flex col-span-4  w-full item-center sm:ms-auto  ">
                    <img img src="{{ asset ($komunitass->image_komunitas) }}" alt="Profile Picture" class="profile-picture ">
                </div>

                <div class="col-span-8 flex-row gap-2  mt-16 ">
                    <h1 class="sm:ms-10 font-bold font-poppins text-white sm:text-[16px] md:text-[22px] lg:text-[32px]">
                        {{ $komunitass->nama_komunitas }}
                        <button id="joinButton" data-community-id="{{ $komunitass->id_komunitas }}">JOIN</button>
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

                            <!-- ... -->

                        </div>
                        <button class="py-2 px-6 flex bg-white  hover:bg-purple-500 rounded-full duration-300">
                            <x-nav-link class="text-black my-auto hover:text-purple text-justify text-sm font-normal" href="{{ route('mycommunity.AddEvent',['id_komunitas'=> $komunitass->id_komunitas]) }}" :active="request()->routeIs('mycommunity.AddEvent',['id'=> $komunitass->id_komunitas])">
                                {{ __('Add Event') }}
                            </x-nav-link>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const joinButton = document.getElementById('joinButton');

            joinButton.addEventListener('click', function () {
                const communityId = joinButton.getAttribute('data-community-id');

                // Kirim permintaan AJAX untuk melakukan JOIN di sini

                // Setelah mendapatkan balasan dari server, ganti teks tombol JOIN
                joinButton.innerHTML = 'JOINED';
            });
        });
    </script>
</x-app-layout>
