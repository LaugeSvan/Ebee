<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebee - Chat</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        // Customizing Tailwind with the selected fonts
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'gray': {
                            900: '#121212',
                            800: '#1e1e1e',
                            700: '#2d2d2d',
                            600: '#3c3c3c',
                            500: '#555555',
                            400: '#8c8c8c',
                            300: '#cccccc',
                            200: '#e5e5e5',
                            100: '#f4f4f4',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar for a more modern look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1e1e1e;
        }
        ::-webkit-scrollbar-thumb {
            background: #3c3c3c;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555555;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200 font-sans antialiased">

    <div class="flex h-screen text-gray-300">
        <!-- Server List -->
        <div class="bg-gray-900 p-3 space-y-4">
            <a href="#" class="block bg-indigo-600 p-2 rounded-full text-white">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </a>
            <a href="#" class="block bg-gray-800 p-2 rounded-full hover:bg-indigo-500 hover:rounded-2xl transition-all duration-200">
                <img src="https://via.placeholder.com/50/2d2d2d/ffffff?text=G" class="w-8 h-8 rounded-full">
            </a>
            <a href="#" class="block bg-gray-800 p-2 rounded-full hover:bg-indigo-500 hover:rounded-2xl transition-all duration-200">
                <img src="https://via.placeholder.com/50/2d2d2d/ffffff?text=D" class="w-8 h-8 rounded-full">
            </a>
        </div>

        <!-- Channel & User Info -->
        <div class="w-64 bg-gray-800 flex flex-col">
            <div class="px-4 h-16 flex items-center border-b border-gray-700 shadow-md">
                <h2 class="text-xl font-display font-bold text-white">My Community</h2>
            </div>
            <div class="flex-1 overflow-y-auto p-4 space-y-4">
                <div>
                    <h3 class="text-gray-400 uppercase tracking-wider text-sm font-bold mb-2">Text Channels</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="flex items-center px-2 py-1 text-white bg-gray-700 rounded">
                            <i data-feather="hash" class="w-4 h-4 mr-2"></i> general
                        </a></li>
                        <li><a href="#" class="flex items-center px-2 py-1 text-gray-400 hover:bg-gray-700 rounded">
                            <i data-feather="hash" class="w-4 h-4 mr-2"></i> announcements
                        </a></li>
                        <li><a href="#" class="flex items-center px-2 py-1 text-gray-400 hover:bg-gray-700 rounded">
                            <i data-feather="hash" class="w-4 h-4 mr-2"></i> development
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-400 uppercase tracking-wider text-sm font-bold mb-2">Direct Messages</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="flex items-center px-2 py-1 text-gray-400 hover:bg-gray-700 rounded">
                            <img src="https://via.placeholder.com/32" class="w-6 h-6 rounded-full mr-2"> Alice
                        </a></li>
                        <li><a href="#" class="flex items-center px-2 py-1 text-gray-400 hover:bg-gray-700 rounded">
                            <img src="https://via.placeholder.com/32" class="w-6 h-6 rounded-full mr-2"> Bob
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="px-4 h-16 flex items-center border-t border-gray-700">
                <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full mr-3">
                <div class="flex-1">
                    <div class="font-bold text-white">SalsaCat</div>
                    <div class="text-xs text-gray-400">#1337</div>
                </div>
                <button class="text-gray-400 hover:text-white"><i data-feather="settings" class="w-5 h-5"></i></button>
            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="flex-1 flex flex-col bg-gray-700">
            <!-- Chat Header -->
            <div class="px-6 h-16 flex items-center border-b border-gray-800 shadow-md">
                <div class="flex items-center">
                    <i data-feather="hash" class="w-6 h-6 text-gray-400"></i>
                    <h3 class="ml-2 font-bold text-xl text-white">general</h3>
                </div>
            </div>

            <!-- Example Messages -->
            <div class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-start mb-6">
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full mr-4">
                    <div>
                        <div class="flex items-baseline">
                            <span class="font-bold text-indigo-400 mr-2">Alice</span>
                            <span class="text-xs text-gray-400">Today at 2:30 PM</span>
                        </div>
                        <p class="text-gray-200">Hey everyone! Welcome to the #general channel.</p>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full mr-4">
                    <div>
                        <div class="flex items-baseline">
                            <span class="font-bold text-green-400 mr-2">Bob</span>
                            <span class="text-xs text-gray-400">Today at 2:31 PM</span>
                        </div>
                        <p class="text-gray-200">Glad to be here! The UI is looking clean.</p>
                    </div>
                </div>
                <div class="flex items-start mb-6">
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full mr-4">
                    <div>
                        <div class="flex items-baseline">
                            <span class="font-bold text-white mr-2">SalsaCat</span>
                            <span class="text-xs text-gray-400">Today at 2:32 PM</span>
                        </div>
                        <p class="text-gray-200">Thanks! Still a work in progress, but it's getting there.</p>
                    </div>
                </div>
            </div>

            <!-- Message Input -->
            <div class="px-6 py-4 bg-gray-800">
                <div class="bg-gray-900 rounded-lg flex items-center px-4">
                    <button class="text-gray-400 hover:text-indigo-400">
                        <i data-feather="plus-circle" class="w-6 h-6"></i>
                    </button>
                    <input type="text" placeholder="Message #general" class="flex-1 bg-transparent p-4 text-white placeholder-gray-500 focus:outline-none">
                    <button class="text-gray-400 hover:text-indigo-400">
                        <i data-feather="send" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>
</body>
</html>