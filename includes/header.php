<?php
$firm_name = "AK LEGAL CHAMBERS";
$location_text = "High Court Judicature at Allahabad (Lucknow Bench)";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | " . $firm_name : $firm_name . " | Advocates & Legal Consultants"; ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        law: {
                            navy: '#0f172a',    /* Deep authoritative dark slate */
                            gold: '#c5a059',    /* Premium classic legal gold/amber accent */
                            light: '#f8fafc',   /* Pristine cool gray background */
                            card: '#ffffff'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Merriweather', serif; }
    </style>
</head>
<body class="bg-law-light text-slate-800 flex flex-col min-h-screen">

    <!-- ================= PREMIUM FIXED NAVIGATION ================= -->
    <header class="bg-law-navy text-white sticky top-0 z-50 shadow-xl border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                
                <!-- Logo & Brand Mark -->
                <a href="index.php" class="flex-shrink-0 flex items-center gap-3 cursor-pointer group">
                    <div class="bg-gradient-to-br from-law-gold to-amber-700 p-2.5 rounded-sm shadow-md group-hover:scale-105 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-serif text-2xl font-bold tracking-wider text-white leading-none"><?php echo $firm_name; ?></span>
                        <span class="text-law-gold text-xs tracking-widest uppercase font-medium mt-1">Advocates & Legal Consultants</span>
                    </div>
                </a>
                
                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex space-x-8 items-center font-medium">
                    <a href="index.php" class="text-gray-300 hover:text-law-gold transition duration-300 <?php echo ($current_page == 'home') ? 'text-law-gold border-b-2 border-law-gold pb-1' : ''; ?>">Home</a>
                    <a href="about.php" class="text-gray-300 hover:text-law-gold transition duration-300 <?php echo ($current_page == 'about') ? 'text-law-gold border-b-2 border-law-gold pb-1' : ''; ?>">About Counsel</a>
                    <a href="expertise.php" class="text-gray-300 hover:text-law-gold transition duration-300 <?php echo ($current_page == 'expertise') ? 'text-law-gold border-b-2 border-law-gold pb-1' : ''; ?>">Practice Expertise</a>
                    <a href="contact.php" class="bg-gradient-to-r from-law-gold to-amber-600 hover:from-amber-500 hover:to-law-gold text-white px-6 py-3 rounded-sm text-sm font-semibold tracking-wide uppercase transition duration-300 shadow-lg">Schedule Appointment</a>
                </nav>

                <!-- Mobile Navigation Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none p-2 rounded-md hover:bg-slate-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dynamic Dropdown Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-950 border-t border-slate-800 transition duration-300">
            <nav class="px-4 pt-3 pb-6 space-y-2">
                <a href="index.php" class="block px-4 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'home') ? 'text-law-gold bg-slate-900' : 'text-gray-300 hover:text-white hover:bg-slate-900'; ?>">Home</a>
                <a href="about.php" class="block px-4 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'about') ? 'text-law-gold bg-slate-900' : 'text-gray-300 hover:text-white hover:bg-slate-900'; ?>">About Counsel</a>
                <a href="expertise.php" class="block px-4 py-3 rounded-md text-base font-medium <?php echo ($current_page == 'expertise') ? 'text-law-gold bg-slate-900' : 'text-gray-300 hover:text-white hover:bg-slate-900'; ?>">Practice Expertise</a>
                <a href="contact.php" class="block px-4 py-3.5 mt-4 text-base font-bold bg-gradient-to-r from-law-gold to-amber-600 text-white rounded-sm text-center shadow-md uppercase tracking-wider">Schedule Appointment</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
    
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>