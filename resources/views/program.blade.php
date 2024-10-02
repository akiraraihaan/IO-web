<x-layout>
    <x-sub-text>{{ __('Discover Our Program') }}</x-sub-text>

    <div class="flex justify-center">
        <div class="my-[50px] w-[1332px]">
            <div class="z-0 relative">
                <img src="./img/program-img-1.png">
            </div>
            <div class="h-[211px] bg-[#1F4894] z-10 relative -mt-[211px]">
                <p class="text-[25px] text-[#C4D25A] pl-[32px] pt-[32px]">Dual Degree</p>
                <a href="#" class=" text-[36px] text-white ml-[32px] pt-5 font-medium hover:underline flex leading-10">Geophysics student goes to Universiti Teknologi Petronas to continue their studies</a>
            </div>
        </div>
    </div>

    <div class="flex flex-row my-[173px]">
        <div class="w-1/2 flex flex-col items-center">
            <x-sub-text>{{ __('Dual Degree') }}</x-sub-text>
            <div class="h-[791px] w-[498px] my-11 border-2 border-slate-300 rounded-2xl shadow-2xl">
                <div class="h-[359px] w-[429px] mx-auto mt-[37px]">
                    <img src="./img/program-people.png">
                </div>
                <div>
                    <p class="mx-[42px] text-justify text-[#4D607D] text-[22px] mt-[42px]">Universitas Pertamina welcome international students who wants obtain bachelor degree. We offer undergraduate program spread into <span class="font-bold">6 Faculty and 15 study programs</span> you can choose.</p>
                </div>
                <div class="mx-auto mt-[32px] text-white bg-[#275DCB] w-[435px] flex justify-center rounded-md hover:bg-[#2b467c] transition duration-300">
                    <a href="#" class="text-[20px] font-bold py-[30px]">{{ __('APPLY NOW') }}</a>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex flex-col items-center">
            <x-sub-text>{{ __('Non-Degree') }}</x-sub-text>
            <div class="h-[791px] w-[498px] my-11 border-2 border-slate-300 rounded-2xl shadow-2xl">
                <div class="h-[359px] w-[429px] mx-auto mt-[37px]">
                    <img src="./img/program-people.png">
                </div>
                <div>
                    <p class="mx-[42px] text-justify text-[#4D607D] text-[22px] mt-[42px]">We have programs for inbound and outbound student.</p>
                </div>
                <div class="mx-auto mt-[165px] text-white bg-[#275DCB] w-[435px] flex justify-center rounded-md hover:bg-[#2b467c] transition duration-300">
                    <a href="#" class="text-[20px] font-bold py-[30px]">{{ __('CHOOSE YOUR PROGRAM') }}</a>
                </div>
            </div>
        </div >
    </div>

    <div class="mb-[364px]">

    </div>

</x-layout>
