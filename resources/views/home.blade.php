<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        *{
            border: 0px solid red;
        }
    </style>
</head>
<body class="font-poppins">
    <navbar class="flex flex-row shadow-md shadow-slate-200 mb-[43px]">
        <div class="flex flex-row pl-8 m-4">
            <div class="text-sm text-red-900 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">Home</a></div>
            <div class="text-sm text-gray-700 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">About Us</a></div>
            <div class="text-sm text-gray-700 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">Global Network</a></div>
            <div class="text-sm text-gray-700 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">Program</a></div>
            <div class="text-sm text-gray-700 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">News and Updates</a></div>
            <div class="text-sm text-gray-700 w-max px-[22px] py-2"><a href="" class="hover:text-red-600 transition duration-500">Contact us and Update</a></div>
        </div>
        <div class="content-center ml-auto my-[16px] mr-[60px] bg-[#1F4894] rounded-[5px] hover:bg-blue-700 transition duration-700">
            <a href="" class="text-[16px] text-white font-[500] px-[20px] py-[9px]">Apply or Login</a>
        </div>
    </navbar>
    <div>
        <div class="flex relative h-[857px]">
            <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[315px] ml-auto z-20 flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                <img src="./img/left-arrow.png" class="h-full w-full object-contain"></img>
            </a>
            <div class="w-[90%] h-[600px] -mx-5 mb-5 bg-cover bg-center z-10" style="background-image: url('./img/2.png');">
                <img src="./img/1.png"></img>
                <div class="flex z-20 -mt-8 justify-center">
                    <a href="" class="bg-white rounded-full w-[14px] h-[14px] mx-1 "></a>
                    <a href="" class="bg-white rounded-full w-[14px] h-[14px] mx-1 opacity-[0.71]"></a>
                    <a href="" class="bg-white rounded-full w-[14px] h-[14px] mx-1 opacity-[0.36]"></a>
                </div>
                <div class="bg-[#1F4894] max-w-full h-[274px] -mt-5">
                    <div class="flex flex-col mx-8 mt-10 pt-10 mb-16">
                        <h3 class="text-[#C4D25A] text-[25px] font-medium">News</h3>
                        <a href="" class="text-white text-[36px] tracking-tight underline leading-tight hover:text-blue-200 transition duration-500 w-[90]">Universitas Pertamina International Students Sharing Sessions : How To Adapt in New Education Environment</a>
                        <P class="text-white text-md mt-4 ml-1 font-light">Ini adalah detail sekilas dari beritanya agar lebih memudahkan pengguna untuk mengetahui konteks berita tanpa membaca keseluruhan berita.</P>
                    </div>
                </div>
            </div>
            <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[315px] mr-auto z-20 flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                <img src="./img/right-arrow.png" class="h-full w-full object-contain"></img>
            </a>
        </div>

        <div class="h-[56px]"></div>

        <div class="flex w-full bg-[#F8FBFB] mb-9">
            <div class="m-4 w-1/3 h-fit">
                <div class="flex flex-col items-center">
                    <p class="text-[#1F4894] text-[36px] font-semibold">Calendar and Event</p>
                    <div class="h-1 w-36 bg-[#C4D25A] mt-2"></div>
                </div>
                <div class="min-w-max mt-4 ml-4 mb-4 bg-white h-[475px] shadow-md rounded-xl flex flex-col items-center">
                    <div class="mt-6 mb-8">
                        <a href="" class="text-2xl text-[#333333] font-semibold hover:text-purple-800 transition duration-500">August</a>
                    </div>
                    <div class="flex justify-between mx-20">
                        <!-- ini calendar -->
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Mon</div>
                            <a href="" class="text-sm text-slate-300 mx-3 mb-5 hover:text-purple-800 transition duration-300">29</a>
                            <a href="" class="text-sm text-slate-800 mx-3 mb-5 hover:text-purple-800 transition duration-300">5</a>
                            <a href="" class="text-sm text-slate-800 mx-3 mb-5 hover:text-purple-800 transition duration-300">12</a>
                            <a href="" class="text-sm text-slate-800 mx-3 mb-5 hover:text-purple-800 transition duration-300">19</a>
                            <a href="" class="text-sm text-slate-800 mx-3 mb-5 hover:text-purple-800 transition duration-300">26</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Tue</div>
                            <a href="" class="text-sm text-slate-300 mx-3 mb-5 hover:text-purple-800 transition duration-300">30</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">6</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">13</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">20</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">27</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Wed</div>
                            <a href="" class="text-sm text-slate-300 mx-3 mb-5 hover:text-purple-800 transition duration-300">31</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">7</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">14</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">21</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">28</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Thu</div>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">1</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">8</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">15</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">22</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">29</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Fri</div>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">2</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">9</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">16</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">23</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">30</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Sat</div>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">3</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">10</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">17</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">24</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-300 hover:font-semibold">31</a>
                         </div>
                         <div class="flex flex-col text-center">
                            <div class="text-sm text-slate-800 mx-3 mb-8">Sun</div>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-500 hover:font-semibold">4</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-500 hover:font-semibold">11</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-500 hover:font-semibold">18</a>
                            <a href="" class="text-sm text-black mx-3 mb-5 hover:text-purple-800 transition duration-500 hover:font-semibold">25</a>
                            <a href="" class="text-sm text-slate-300 mx-3 mb-5 hover:text-purple-800 transition duration-500">1</a>
                         </div>
                    </div>
                    <div class="mt-auto mb-12 text-[#4D607D] mx-auto flex flex-col">
                        <a href="" class="mb-1 hover:text-purple-800 transition duration-300">9 August - Deadline IISMA</a>
                        <a href="" class="hover:text-purple-800 transition duration-300">12 August - Deadline AFMAM Plus Australia</a>
                    </div>
                </div>
            </div>
            <div class="m-4 w-2/3 h-fit">
                <div class="flex flex-col items-center">
                    <p class="text-[#1F4894] text-[36px] font-semibold">Discover Our Program</p>
                    <div class="h-1 w-36 bg-[#C4D25A] mt-2"></div>
                </div>
                <div class="w-[90] mt-4 mr-4 mb-4 bg-white h-[475px] shadow-md rounded-xl overflow-hidden flex flex-col">
                    <div class="max-w-full h-1/2 m-4 rounded-xl"><img src="./img/3.png" class="h-full w-full rounded-md object-cover"></div>
                    <div class="font-semibold m-4">
                        <a href="" class="text-4xl hover:text-slate-700 transition duration-500">Universitas Pertamina Study Abroad to Universiti Teknologi Petronas</a>
                    </div>
                    <div class="text-[#4D607D] my-1 ml-6">This program aims to blabla lorem ipsum</div>
                    <a href="" class="bg-[#275DCB] w-fit py-2 px-4 ml-auto mt-auto mb-7 mr-7 h-fit rounded-md text-white hover:bg-blue-800 transition duration-500">Explore all programs →</a>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div class="flex flex-col items-center mb-12">
                <p class="text-[#1F4894] text-[36px] font-semibold">Testimonials</p>
                <div class="h-1 w-36 bg-[#C4D25A] mt-2"></div>
            </div>
            <div class="flex flex-row relative">
                <div class="z-20 ml-12">
                    <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[181px] mx-auto flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                        <img src="./img/left-arrow.png" class="h-full w-full object-contain"></img>
                    </a>
                </div>
                <div class="w-[1303px] h-fit overflow-x-hidden mx-4 z-10">
                    <div class="overflow-x-auto relative p-4">
                        <div class="flex space-x-[43px] max-w-full">
                            <div class="w-[610px] h-[377px] bg-white rounded-lg drop-shadow-lg flex">
                                <div class="w-[350px] m-auto p-3">
                                    <a href=""><img src="./img/person-1.png" class="hover:opacity-55 transition duration-500"></a>
                                </div>
                                <div class="w-full flex flex-col">
                                    <a href="" class="mt-4 mx-2 w-fit text-2xl font-semibold hover:text-purple-800 transition duration-500">Shaumaya Qha</a>
                                    <a href="" class="m-2 w-fit text-xl font-medium hover:text-purple-800 transition duration-500">Computer Science Student</a>
                                    <p class="mx-2 pr-12 w-fit text-[#4D607D] text-sm">Choosing to pursue my graduate studies at Pertamina University through the exchange program was the best decision of my academic career. The interdisciplinary approach to environmental science here has opened my eyes to new possibilities and approaches in addressing global environmental challenges . . .</p>
                                    <a href="" class="ml-auto mt-auto p-2 mr-4 mb-4 bg-[#C4D25A] text-[#1F4894] font-medium rounded-md hover:bg-[#e5f573] transition duration-500">Read More →</a>
                                </div>
                              </div>
                          <div class="w-[610px] h-[377px] bg-white rounded-lg drop-shadow-lg flex">
                            <div class="w-[350px] m-auto p-3">
                                <a href=""><img src="./img/person-2.png" class="hover:opacity-55 transition duration-500"></a>
                            </div>
                            <div class="w-full flex flex-col">
                                <a href="" class="mt-4 mx-2 w-fit text-2xl font-semibold hover:text-purple-800 transition duration-500">Subhangi Duhan</a>
                                <a href="" class="m-2 w-fit text-xl font-medium hover:text-purple-800 transition duration-500">Management Student</a>
                                <p class="mx-2 pr-12 w-fit text-[#4D607D] text-sm">The global perspective I've gained here is unparalleled. Engaging in discussions with classmates from all corners of the world has challenged my preconceptions and broadened my understanding of global economics. The friendships I've formed and the memories I've made will stay with me forever . . .</p>
                                <a href="" class="ml-auto mt-auto p-2 mr-4 mb-4 bg-[#C4D25A] text-[#1F4894] font-medium rounded-md hover:bg-[#e5f573] transition duration-500">Read More →</a>
                            </div>
                          </div>
                          <div class="w-[610px] h-[377px] bg-white rounded-lg drop-shadow-lg flex">
                            <div class="w-[350px] m-auto p-3">
                                <a href=""><img src="./img/person-3.png" class="hover:opacity-55 transition duration-500"></a>
                            </div>
                            <div class="w-full flex flex-col">
                                <a href="" class="mt-4 mx-2 w-fit text-2xl font-semibold hover:text-purple-800 transition duration-500">Shaumaya Qha</a>
                                <a href="" class="m-2 w-fit text-xl font-medium hover:text-purple-800 transition duration-500">Computer Science Student</a>
                                <p class="mx-2 pr-12 w-fit text-[#4D607D] text-sm">Choosing to pursue my graduate studies at Pertamina University through the exchange program was the best decision of my academic career. The interdisciplinary approach to environmental science here has opened my eyes to new possibilities and approaches in addressing global environmental challenges . . .</p>
                                <a href="" class="ml-auto mt-auto p-2 mr-4 mb-4 bg-[#C4D25A] text-[#1F4894] font-medium rounded-md hover:bg-[#e5f573] transition duration-500">Read More →</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="z-20 mr-12">
                    <a href="" class="bg-[#C4D25A] h-[85px] w-[33px] mt-[181px] ml-auto flex items-center justify-center hover:bg-[#e7f483] transition duration-700">
                        <img src="./img/right-arrow.png" class="h-full w-full object-contain"></img>
                    </a>
                </div>
            </div>
            <div class="flex justify-center mt-6">
                <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1"></a>
                <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1 opacity-[0.71]"></a>
                <a href="" class="bg-blue-600 rounded-full w-[14px] h-[14px] mx-1 opacity-[0.36]"></a>
            </div>
        </div>

        <div class="bg-[#F8FBFB] w-full h-max pb-20">
            <div class="pt-16">
                <div class="flex">
                    <img src="./img/Instagram.png" class="w-[41px] h-[41px] ml-auto mr-2 mt-1">
                    <p class="text-[#1F4894] text-[36px] font-semibold mr-auto w-fit ml-2">Instagram</p>
                </div>
                <div class="h-1 w-36 bg-[#C4D25A] mt-2 m-auto"></div>
            </div>
            <div class="flex flex-row">
                <div class="w-full m-20">
                    <img src="./img/ig-mockup.png">
                </div>
                <div class="w-full flex flex-col items-center justify-center">
                    <p class="font-semibold text-xl m-4">Follow us on :</p>
                    <a href="https://instagram.com/univpertamina_io" class="text-[#1F4894] m- 4 rounded-md text-2xl font-bold py-3 px-12 bg-[#c4d25a] hover:bg-[#dbe885] transition duration-500">@univpertamina_io</a>
                </div>
            </div>
            <div>
                <p class="text-[#1F4894] text-center text-4xl font-semibold mb-6">Video Profile of Universitas Pertamina</p>
            </div>
            <div class="w-90 flex justify-center rounded-xl overflow-hidden ">
                <a href="https://www.youtube.com/watch?v=rvB5LsROYbQpp=ygUjdW5pdmVyc2l0YXMgcGVydGFtaW5hIHByb2ZpbGUgdmlkZW8%3D" class="w-2/3"><img src="./img/profile-video-display.png" class="opacity-100 hover:opacity-50 hover:drop-shadow-xl transition duration-500"></a>
            </div>
        </div>

        <div>
            <div class="flex w-full h-max bg-[#1F4894] justify-center items-start pb-12">
                <div class="mx-auto">
                    <p class="text-[#FF9800] mt-11 text-2xl mb-2">INFORMATION FOR</p>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Prospective Students</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Alumni</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Financial Aid</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Professionals</a></li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <P class="text-[#FF9800] mt-11 text-2xl mb-2">ADMISSION</P>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Foundation</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Undergraduate</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Postgraduate</a></li>
                    </ul>
                    <P class="text-[#FF9800] mt-11 text-2xl mb-2">RESEARCH</P>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Research Institutes</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Centre of Excellence</a></li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <P class="text-[#FF9800] mt-11 text-2xl mb-2">RELATED LINKS</P>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Facts & Figures</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Directories</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Media</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Governance</a></li>
                    </ul>
                    <P class="text-[#FF9800] mt-11 text-2xl mb-2">RESOURCE</P>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Academic Calendar</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Career @ UTP</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Visit UTP</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Enquiry</a></li>
                    </ul>
                </div>
                <div class="mx-auto">
                    <P class="text-[#FF9800] mt-11 text-2xl mb-2">GATEWAY</P>
                    <ul class="text-white font-light">
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">ULibrary</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">PETRONAS SWITCH</a></li>
                        <li class="mb-2"><a href="" class="hover:text-orange-300 transition duration-500">Whistleblowing</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="bg-[#8D3928] w-full h-fit flex items-center justify-center">
            <div class="flex flex-col items-center justify-center h-max my-auto py-2">
                <p class="text-white py-1 text-sm">Universiti Teknologi PETRONAS, 32610 Seri Iskandar, Perak Darul Ridzuan, Malaysia</p>
                <div class="flex py-1">
                    <p class="text-white text-sm">Tel: 1-300-22-8887 | Enquiries:</p>
                    <a href="" class="text-blue-600 hover:underline pl-1 text-sm"> UCS Portal</a>
                </div>
                <p class="text-white text-sm py-1">Registration NO: DU003(A)</p>
                <p class="text-white text-sm py-1">Copyright © Universiti Teknologi PETRONAS 2024</p>
                <div class="flex py-1">
                    <p class="text-white text-[10px] font-light">Disclaimer: Universiti Teknologi PETRONAS shall not be liable for any loss or damage caused by the usage of any information obtained from this web site. </p>
                    <a href="" class="text-white text-[10px] font-light pl-1 underline hover:text-slate-400 transition duration-500">Privacy Notice </a>
                    <p class="text-white text-[10px] font-light pl-1">Best Viewed using Google Chrome 46.0 and Above. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
