<footer class="border-t border-green-300 bg-gradient-to-b from-green-700 via-green-600 via-gray-600 to-gray-700 text-white">
    <div class="mx-auto grid max-w-7xl gap-6 px-4 py-5 text-sm sm:px-6 md:grid-cols-3 lg:px-8">
        <!-- First Column -->
        <div class="bg-white/10 p-3">
            <p class="text-lg font-semibold">HomeSayar</p>
            <p class="mt-3 leading-6 text-green-50">
                Connecting learners, parents, teachers, and administrators in one simple, trusted platform.
            </p>
            <p class="mt-3 leading-6 text-green-50">
                ကျောင်းသား/သူများ၊ မိဘများ နှင့် ဆရာများကိုရိုးရှင်းပြီး ယုံကြည်စိတ်ချရသော ပလက်ဖောင်းတစ်ခုတည်းတွင် ချိတ်ဆက်ပေးခြင်း။
            </p>
        </div>

        <!-- Second Column -->
        <div class="bg-white/10 p-3">
            <p class="text-base font-semibold text-white">Quick Links</p>
            <div class="mt-3 grid grid-cols-2 gap-2 text-green-50">            
                <div class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="transition hover:text-white">Home</a>  
                    <a href="{{ route('events') }}" class="transition hover:text-white">Events</a>              
                    <a href="{{ route('blogs') }}" class="transition hover:text-white">Blogs</a>
                    <a href="{{ route('jobs') }}" class="transition hover:text-white">Jobs</a>                
                </div>
                <div class="flex flex-col gap-2">
                    <a href="{{ route('about.us') }}" class="transition hover:text-white">About Us</a> 
                    <a href="{{ route('contact.us') }}" class="transition hover:text-white">Contact Us</a>
                    <a href="{{ route('login') }}" class="transition hover:text-white">Login</a>
                    <a href="{{ route('register') }}" class="transition hover:text-white">Register</a>
                </div>
            </div>
        </div>

        <!-- Third Column -->
        <div class="bg-white/10 p-3">
            <p class="text-base font-semibold text-white">Contact</p>
            <div class="mt-3 space-y-2 text-green-50">
                <p>123 Education Street</p>
                <p>Yangon, Myanmar</p>
                <p>info@homesayar.com</p>
                <p>+95 9 1234 5678</p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright -->
    <div class="border-t border-white/20 bg-green-900/30">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-4 text-center text-sm text-green-50 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
            <p>© 2026 HomeSayar. All rights reserved.</p>
            <p>Built for better education connections.</p>
        </div>
    </div>
</footer>
