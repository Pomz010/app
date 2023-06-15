{{-- User Avatar Menu --}}
<header class="bg-slate-800 px-2 py-1">
    <nav class="flex justify-between">
        <div class="flex items-center gap-x-6">
            <span class="flex justify-center items-center">
                <img class="h-8 w-16" src="img/navlogo.png" alt="Header logo">
            </span>
    
            <ul class="flex text-white gap-x-6">
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{ route('show-movement') }}">Asset Monitoring</a></li>
                <li><a href="#">Department</a></li>
                <li><a href="#">Employee List</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Vendor</a></li>
                <li><a href="#">Service Support</a></li>
            </ul> 
        </div>
        
        <div id="avatarContainer" class="relative">
            <span id="userAvatar" class="w-min cursor-pointer">
                <svg class="h-8 fill-current text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" fill="none"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z"/>
                </svg>
            </span>
    
            <div id="avatarMenu" class="bg-white py-2 px-4 absolute right-0 w-max rounded divide-y-2 shadow-md hidden">
                <div class="py-2 flex flex-col leading-8">
                    <span>Profile</span>
                    <span>Update credentials</span>
                </div>
                <div class="py-2"><a href="/signout">Signout</a></div>
            </div>
        </div>
    </nav>
</header>