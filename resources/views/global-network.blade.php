<x-layout>

    <div class="bg-[#F8FBFB] pt-12">
        <x-sub-text>{{ __('Global Network') }}</x-sub-text>
        <div class="flex justify-center my-12 flex-col items-center">
            <div class="bg-white w-[1337px] h-[631px] shadow-2xl rounded-3xl flex flex-row z-10">
                <div class="w-1/2">
                    <img src="./img/global-network-people-1.png">
                </div>
                <div class="w-1/2 mt-[116px] mx-[64px] text-justify">
                    <p class="text-[24px] font-[500px] text-[#4D607D]">To support the internationalization of UPER, the International Partnership Division has actively partnered with universities and institutions through Southeast Asia, East Asia, Europe, and American Region. We keep expanding our network throughout the globe as seen by the increasing numbers of partners each year.</p>
                </div>
            </div>
            <div class="z-0 -mt-[73px]">
                <div class="h-[832px] w-[1337px]">
                    <img src="./img/global-network-people-2.png" class="z-0">
                    <div class="z-10 relative -mt-[450px] flex flex-row justify-center">
                        <div class="w-[530px] h-[188px] bg-white mx-[50px] rounded-2xl text-center hover:bg-slate-200 transition duration-300">
                            <a href="#" class="w-full flex justify-center mt-12">
                                <img src="./img/intl-icon.png" class="h-[46px] w-[49px]">
                            </a>
                            <div class="text-[#1F4894] text-[28px] font-semibold mt-4">
                                <a href="#">{{ __('International Collaboration') }}</a>
                            </div>
                        </div>
                        <div class="w-[530px] h-[188px] bg-white mx-[50px] rounded-2xl text-center hover:bg-slate-200 transition duration-300">
                            <a href="#" class="w-full flex justify-center mt-12">
                                <img src="./img/collab-icon.png" class="h-[46px] w-[49px]">
                            </a>
                            <div class="text-[#1F4894] text-[28px] font-semibold mt-4">
                                <a href="#">{{ __('Collaboration With Us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pb-[151px] bg-[#F8FBFB]"></div>

</x-layout>
