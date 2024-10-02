<navbar class="flex flex-row shadow-md shadow-slate-200 mb-[43px]">
    <div class="flex flex-row pl-8 m-4">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
            {{ __('About Us') }}
        </x-nav-link>

        <x-nav-link :href="route('global-network')" :active="request()->routeIs('global-network')">
            {{ __('Global Network') }}
        </x-nav-link>

        <x-nav-link :href="route('program')" :active="request()->routeIs('program')">
            {{ __('Program') }}
        </x-nav-link>

        <x-nav-link :href="route('news')" :active="request()->routeIs('news')">
            {{ __('News and Updates') }}
        </x-nav-link>

        <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
            {{ __('Contact us and Updates') }}
        </x-nav-link>
    </div>
    <div class="content-center ml-auto my-[16px] mr-[60px] bg-[#1F4894] rounded-[5px] hover:bg-blue-700 transition duration-700">
        <a href="#" class="text-[16px] text-white font-[500] px-[20px] py-[9px]">Apply or Login</a>
    </div>
</navbar>
