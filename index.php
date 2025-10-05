<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebee - Your Community Chat Platform</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@600;800&display=swap" rel="stylesheet">

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
                }
            }
        }
    </script>

    <style>
        /* A little extra sparkle for the hero text */
        .hero-text-shadow {
            text-shadow: 0 0 15px rgba(79, 70, 229, 0.5), 0 0 30px rgba(79, 70, 229, 0.3);
        }
    </style>
</head>
<body>
<body class="bg-gray-900 text-gray-200 font-sans antialiased">
    
    <div id="app" class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="py-6 px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-between items-center">
                <div class="text-2xl font-display font-extrabold tracking-wider text-white">Ebee</div>
                <div>
                    <a href="https://github.com/LaugeSvan/Ebee" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-300">GitHub</a>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex items-center justify-center text-center px-4">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white hero-text-shadow">
                    Build Your Community. <span class="text-indigo-400">Own Your Platform.</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
                    Ebee is an open-source, self-hostable chat platform for building online communities that value privacy and control.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="#" id="cta-button" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50 transform hover:-translate-y-1 transition-all duration-300">
                        Get Started
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-6 text-center text-gray-500 text-sm">
            <p>Ebee is an early-stage open-source project. Licensed under GPL-3.0.</p>
        </footer>
    </div>

    <script>
        // Interactive "Get Started" button with a secret shortcut
        document.getElementById('cta-button').addEventListener('click', (e) => {
            e.preventDefault();

            // On Ctrl+Shift+Click, redirect to the testing area
            if (e.ctrlKey && e.shiftKey) {
                window.location.href = '/app';
            } else {
                alert('Ebee is still in early development, but thanks for your interest! Check out the project on GitHub to follow our progress.');
            }
        });
    </script>
</body>
</html>
