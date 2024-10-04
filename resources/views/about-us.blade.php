<x-layout>

    <div class="w-full flex">
        <img src="./img/about-us-image.png" class="w-[90%] mx-auto mb-12"></img>
    </div>
    <div class="mb-12">
        <x-sub-text >Be Global Leaders!</x-sub-text>
    </div>

    @php
        $classes = 'mx-[102px] text-[22px] font-[500] text-[#4D607D] text-justify';
        $attributes = ['class' => $classes];
    @endphp

    <div class="my-[62px]">

        <p class="mx-[102px] text-[22px] font-[500] text-[#4D607D] text-justify">Universitas Pertamina is a private university focused on Business and Technology and a manifestation of PT. Pertamina (Persero) contribution with the spirit of becoming a world-class university. </p>

        <br><br>

        <p class="mx-[102px] text-[22px] font-[500] text-[#4D607D] text-justify">The International Partnership Division is established under the Vice Rector for Research, Development and Partnership Office to support the internationalization strategies of Universitas Pertamina by supporting on wide range of international activities. We are responsible for the partnership development by identifying, establishing and maintaining relationships with universities, research institution, and industry partners globally. Building opportunities for UPER civitas Academica to explore the international horizons through various programs such as Student and Faculty Exchange Program, International Internship, Joint Research, Community Outreach etc. </p>

        <br><br>

        <p class="mx-[102px] text-[22px] font-[500] text-[#4D607D] text-justify">We also support degree and non-degree-seeking students regarding their study and immigration status in Indonesia, conducting cultural adaptation activities to ensure a smooth studying and living experience for international students at UPER. The international partnership division manages administration, organizing events, and promotion of international programs. Therefore, International Partnership division has become the bridge of communication between UPER and related parties. </p>

    </div>

    <div class="my-24 mx-auto text-center">
        <x-sub-text>Vice Rector for Research, Development, and <br> Partnership Welcoming Words</x-sub-text>
    </div>

    <div class="flex flex-row relative">
        <div class="z-20 ml-12">
            <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[145px] mx-auto flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                <img src="./img/left-arrow.png" class="h-full w-full object-contain"></img>
            </a>
        </div>
        <div class="w-[1303px] h-fit overflow-x-hidden mx-4 z-10">
            <div class="overflow-x-auto relative p-4">
                <div class="flex space-x-[43px] max-w-full">
                    <div class="w-full h-[343px] bg-white rounded-lg drop-shadow-lg flex mx-[195px]">
                        <div class="w-[350px] m-auto p-3">
                            <a href=""><img src="./img/person-1.png" class="hover:opacity-55 transition duration-500 h-[284px]"></a>
                        </div>
                        <div class="w-full flex flex-col -ml-8">
                            <a href="" class="mt-6 w-fit text-2xl font-semibold hover:text-purple-800 transition duration-500">Sudirman</a>
                            <a href="" class="w-fit text-xl font-medium hover:text-purple-800 transition duration-500">Vice Rector for Research and Development</a>
                            <p class="pr-12 mt-8 text-justify w-fit text-[#4D607D] text-sm ">Choosing to pursue my graduate studies at Pertamina University through the exchange program was the best decision of my academic career. The interdisciplinary approach to environmental science here has opened my eyes to new possibilities and approaches in addressing global environmental challenges . . .</p>
                            <a href="" class="ml-auto mt-auto p-2 mr-12 mb-12 bg-[#C4D25A] text-[#1F4894] font-medium rounded-md hover:bg-[#e5f573] transition duration-500">Learn More →</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="z-20 mr-12">
            <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[145px] ml-auto flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                <img src="./img/right-arrow.png" class="h-full w-full object-contain"></img>
            </a>
        </div>
    </div>

    <div class="my-12">
        <x-sub-text>Meet Our Team</x-sub-text>
    </div>

    <div class="flex flex-row relative justify-center">
        <div class="w-[1187px] h-fit overflow-x-hidden mx-4 z-10">
            <div class="overflow-x-auto relative p-4">
                <div class="flex space-x-[43px] max-w-full items-center">
                    <div class="w-[311px] h-[442px] bg-white rounded-lg drop-shadow-lg flex flex-col">
                        <div class="w-[311px] m-auto flex justify-center">
                            <a href=""><img src="./img/team-person.png" class="hover:opacity-55 transition duration-500 w-[311px] h-[303px]"></a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <div class="flex flex-col items-center">
                                <a href="#" class="text-[#161E2B] text-[24px] hover:underline font-semibold mt-3">{{__('Amanda Putri')}}</a>
                                <div class="h-[2px] w-[212px] bg-[#C4D25A] mt-2"></div>
                            </div>
                            <p class="mx-auto my-4 w-fit text-[#4D607D] text-[18px] text-center">Research and <br> Development Staff</p>
                        </div>
                    </div>
                    <div class="w-[311px] h-[442px] bg-white rounded-lg drop-shadow-lg flex flex-col">
                        <div class="w-[311px] m-auto flex justify-center">
                            <a href=""><img src="./img/team-person.png" class="hover:opacity-55 transition duration-500 w-[311px] h-[303px]"></a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <div class="flex flex-col items-center">
                                <a href="#" class="text-[#161E2B] text-[24px] hover:underline font-semibold mt-3">{{__('Amanda Putri')}}</a>
                                <div class="h-[2px] w-[212px] bg-[#C4D25A] mt-2"></div>
                            </div>
                            <p class="mx-auto my-4 w-fit text-[#4D607D] text-[18px] text-center">Research and <br> Development Staff</p>
                        </div>
                    </div>
                    <div class="w-[311px] h-[442px] bg-white rounded-lg drop-shadow-lg flex flex-col">
                        <div class="w-[311px] m-auto flex justify-center">
                            <a href=""><img src="./img/team-person.png" class="hover:opacity-55 transition duration-500 w-[311px] h-[303px]"></a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <div class="flex flex-col items-center">
                                <a href="#" class="text-[#161E2B] text-[24px] hover:underline font-semibold mt-3">{{__('Amanda Putri')}}</a>
                                <div class="h-[2px] w-[212px] bg-[#C4D25A] mt-2"></div>
                            </div>
                            <p class="mx-auto my-4 w-fit text-[#4D607D] text-[18px] text-center">Research and <br> Development Staff</p>
                        </div>
                    </div>
                    <div class="w-[311px] h-[442px] bg-white rounded-lg drop-shadow-lg flex flex-col">
                        <div class="w-[311px] m-auto flex justify-center">
                            <a href=""><img src="./img/team-person.png" class="hover:opacity-55 transition duration-500 w-[311px] h-[303px]"></a>
                        </div>
                        <div class="w-full flex flex-col items-center">
                            <div class="flex flex-col items-center">
                                <a href="#" class="text-[#161E2B] text-[24px] hover:underline font-semibold mt-3">{{__('Amanda Putri')}}</a>
                                <div class="h-[2px] w-[212px] bg-[#C4D25A] mt-2"></div>
                            </div>
                            <p class="mx-auto my-4 w-fit text-[#4D607D] text-[18px] text-center">Research and <br> Development Staff</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <div class="flex justify-center mt-6 mb-[76px]">
        <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1"></a>
        <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1 opacity-[0.71]"></a>
        <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1 opacity-[0.36]"></a>
    </div>

</x-layout>
