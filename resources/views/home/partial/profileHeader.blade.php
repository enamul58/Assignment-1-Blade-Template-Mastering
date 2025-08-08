 <!-- Profile Header -->
    <div class="profile-header">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center md:items-end">
                <div class="avatar-upload mb-4 md:mb-0 md:mr-6">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-md">
                    <div class="avatar-overlay">
                        <i class="fas fa-camera text-white text-xl"></i>
                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800">John Doe</h1>
                    <p class="text-gray-600 mb-2">Senior Web Developer</p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <span class="text-gray-600"><i class="fas fa-map-marker-alt mr-1"></i> San Francisco, CA</span>
                        <span class="text-gray-600"><i class="fas fa-calendar-alt mr-1"></i> Joined June 2021</span>
                    </div>
                    <div class="mt-4 flex justify-center md:justify-start space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                <div class="mt-4 md:mt-0 md:ml-auto">
                    <button class="bg-white text-blue-600 border border-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                        <i class="fas fa-edit mr-2"></i> Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Navigation -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4">
            <nav class="flex space-x-8">
                <a href="#" class="py-4 px-1 tab-active">Posts</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Comments</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Bookmarks</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Stats</a>
                <a href="#" class="py-4 px-1 text-gray-600 hover:text-blue-600 transition">Settings</a>
            </nav>
        </div>
    </div>