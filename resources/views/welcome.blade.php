{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Behance Modern Palette - Tailwind</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .scrollbar-none::-webkit-scrollbar { display: none; }
        .scrollbar-none { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-[#fafafa] text-zinc-900 antialiased">

    <!-- ========================================== -->
    <!-- 1. HEADER / NAVBAR                         -->
    <!-- ========================================== -->
    <header class="flex items-center justify-between px-6 py-4 border-b border-zinc-100 sticky top-0 bg-white/80 backdrop-blur-md z-50">
        <div class="flex items-center space-x-6">
            <!-- New Modern Logo Color -->
            <span class="text-2xl font-extrabold tracking-tight cursor-pointer bg-gradient-to-r from-violet-600 to-indigo-600 bg-clip-text text-transparent">Bēhance</span>
            <nav class="hidden md:flex items-center space-x-5 text-[15px] font-bold text-zinc-900">
                <a href="#" class="border-b-2 border-indigo-600 pb-1 text-indigo-600">Explorer</a>
                <a href="#" class="text-zinc-500 hover:text-black">Emplois</a>
                <a href="#" class="text-zinc-500 hover:text-black flex items-center gap-1">
                    Ressources 
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <span class="text-zinc-200">|</span>
                <a href="#" class="text-zinc-500 hover:text-black flex items-center gap-1">
                    Recruter 
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                </a>
            </nav>
        </div>

        <div class="flex items-center space-x-3">
            <!-- Modernized Indigo Buttons -->
            <button class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-indigo-700 transition shadow-sm shadow-indigo-100 cursor-pointer">
                Commencer un essai gratuit
            </button>
            <button class="border border-zinc-200 text-indigo-600 bg-white px-5 py-2 rounded-full text-sm font-bold hover:bg-zinc-50 transition cursor-pointer">
                Se connecter
            </button>
            <span class="text-sm font-bold text-zinc-400 ml-2 hidden sm:inline-block cursor-pointer hover:text-black">Adobe</span>
        </div>
    </header>

    <!-- ========================================== -->
    <!-- 2. HERO SECTION (NEW GRADIENT TITLE & BG)   -->
    <!-- ========================================== -->
    <section class="max-w-4xl mx-auto text-center px-4 pt-20 pb-12">
        <!-- Modern Text Gradient for Title -->
        <h1 class="text-5xl md:text-[72px] font-extrabold tracking-tight leading-[1.1] text-zinc-950 mb-6">
            Retrouvez les <br>
            <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">meilleurs créateurs</span> <br>
            du monde sur Behance
        </h1>
        <p class="text-zinc-500 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-10">
            Une plateforme complète qui aide employeurs et artistes à naviguer dans l'univers de la création, que ce soit pour nourrir leur inspiration ou pour se mettre en relation.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            <button class="w-full sm:w-auto bg-zinc-950 text-white px-8 py-3.5 rounded-full font-bold text-[15px] hover:bg-zinc-800 transition shadow-lg shadow-zinc-200 cursor-pointer">
                Recruter un artiste freelance
            </button>
            <button class="w-full sm:w-auto bg-white text-indigo-600 px-8 py-3.5 rounded-full font-bold text-[15px] hover:bg-zinc-50 transition border border-zinc-200 cursor-pointer">
                Tester Behance Pro
            </button>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. SEARCH & FILTERS BAR                    -->
    <!-- ========================================== -->
    <section class="max-w-7xl mx-auto px-6 py-4 flex flex-col lg:flex-row items-center justify-between gap-4">
        <div class="w-full lg:w-auto flex flex-col sm:flex-row items-center gap-3 flex-1 max-w-4xl">
            <button class="w-full sm:w-auto flex items-center justify-center gap-2 bg-white border border-zinc-200 rounded-full px-5 py-3 font-bold text-sm text-zinc-800 hover:border-zinc-900 transition cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                Filtrer
            </button>

            <div class="w-full flex items-center bg-white border border-zinc-200 rounded-full px-4 py-1.5 focus-within:border-indigo-500 shadow-sm transition">
                <svg class="w-5 h-5 text-zinc-400 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="Rechercher sur Behance..." class="w-full bg-transparent outline-none text-[15px] text-zinc-800 placeholder-zinc-400 py-1.5">
                <div class="hidden md:flex items-center space-x-1 ml-2 shrink-0 bg-zinc-50 p-1 rounded-full border border-zinc-100">
                    <button class="bg-white text-zinc-950 shadow-sm font-bold text-xs px-3 py-1.5 rounded-full cursor-pointer">Projets</button>
                    <button class="text-zinc-600 hover:text-black font-bold text-xs px-3 py-1.5 rounded-full cursor-pointer">Personnes</button>
                    <button class="text-zinc-600 hover:text-black font-bold text-xs px-3 py-1.5 rounded-full cursor-pointer">Ressources</button>
                    <span class="text-zinc-200 px-1">|</span>
                    <button class="text-zinc-400 hover:text-black p-1 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-auto flex justify-end shrink-0">
            <button class="flex items-center gap-2 font-bold text-sm text-zinc-800 hover:text-zinc-600 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                Recommandations
                <svg class="w-3 h-3 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. CATEGORIES BAR                          -->
    <!-- ========================================== -->
    <section class="max-w-7xl mx-auto px-6 mb-8 relative">
        <div class="flex items-center space-x-3 overflow-x-auto pb-3 scrollbar-none">
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-indigo-600 text-white shadow-sm shadow-indigo-100 cursor-pointer">★ For You</button>
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-white border border-zinc-200 text-zinc-800 hover:bg-zinc-50 cursor-pointer">♡ Following</button>
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-white border border-zinc-200 text-zinc-800 hover:bg-zinc-50 cursor-pointer">🥇 Top créations</button>
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-white border border-zinc-200 text-zinc-800 hover:bg-zinc-50 cursor-pointer">Graphisme</button>
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-white border border-zinc-200 text-zinc-800 hover:bg-zinc-50 cursor-pointer">Photographie</button>
            <button class="shrink-0 h-11 px-5 rounded-xl font-bold text-xs bg-white border border-zinc-200 text-zinc-800 hover:bg-zinc-50 cursor-pointer">UI/UX</button>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. PROJECTS GRID SECTION                   -->
    <!-- ========================================== -->
    <main class="max-w-7xl mx-auto px-6 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="group flex flex-col justify-between">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-[#df6b49] flex items-center justify-center cursor-pointer shadow-sm group-hover:shadow-md transition">
                    <span class="text-white text-4xl font-black tracking-tighter">OSOM</span>
                    <div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div class="mt-3 flex items-start justify-between">
                    <div>
                        <h3 class="font-bold text-[15px] text-zinc-900 hover:text-indigo-600 transition cursor-pointer">OSMO® Brand</h3>
                        <p class="text-xs text-zinc-400 mt-0.5">Fritzzz Rosemond</p>
                    </div>
                    <div class="flex items-center space-x-3 text-zinc-400 font-bold text-xs mt-0.5">
                        <span class="flex items-center gap-1 hover:text-zinc-900 cursor-pointer">👍 471</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group flex flex-col justify-between">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-tr from-[#988270] to-[#ccd4e0] flex items-center justify-center cursor-pointer shadow-sm">
                    <div class="absolute top-3 left-3 bg-zinc-900/80 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-lg">📁 Enregistrer</div>
                </div>
                <div class="mt-3 flex items-start justify-between">
                    <div>
                        <h3 class="font-bold text-[15px] text-zinc-900 hover:text-indigo-600 transition truncate max-w-[180px]">The night is short</h3>
                        <p class="text-xs text-zinc-400 mt-0.5">Flowerliti</p>
                    </div>
                    <div class="flex items-center space-x-3 text-zinc-400 font-bold text-xs mt-0.5">
                        <span class="flex items-center gap-1 hover:text-zinc-900 cursor-pointer">👍 59</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 (Pro Box - New Gradient) -->
            <div class="group flex flex-col justify-between">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-tr from-indigo-900 via-slate-900 to-purple-900 p-6 flex flex-col justify-between cursor-pointer shadow-md border border-indigo-950">
                    <p class="text-indigo-100 text-[16px] font-bold text-center leading-snug mt-2">
                        Mettez vos meilleures créations en avant auprès du public le plus pertinent.
                    </p>
                    <div class="text-center mb-2">
                        <button class="bg-white text-indigo-950 font-bold text-xs px-5 py-2.5 rounded-full hover:bg-indigo-50 shadow-md cursor-pointer transition">
                            Commencer un essai gratuit
                        </button>
                    </div>
                </div>
                <div class="mt-3">
                    <h3 class="font-bold text-[15px] text-zinc-900">En faire plus avec Behance Pro</h3>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="group flex flex-col justify-between">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-[#8b1418] flex items-center justify-center cursor-pointer shadow-sm">
                    <div class="w-24 h-32 bg-[#6c0f12] rounded-lg shadow-2xl transform rotate-[15deg] flex items-center justify-center">
                        <span class="text-red-900 text-2xl font-serif">Q</span>
                    </div>
                </div>
                <div class="mt-3 flex items-start justify-between">
                    <div>
                        <h3 class="font-bold text-[15px] text-zinc-900 hover:text-indigo-600 transition cursor-pointer">Forever queen</h3>
                        <p class="text-xs text-zinc-400 mt-0.5">Plusieurs propriétaires</p>
                    </div>
                    <div class="flex items-center space-x-3 text-zinc-400 font-bold text-xs mt-0.5">
                        <span class="flex items-center gap-1 hover:text-zinc-900 cursor-pointer">👍 171</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- ========================================== -->
    <!-- 6. LOGIN / INSCRIPTION D'IMAGE             -->
    <!-- ========================================== -->
    <section class="max-w-xl mx-auto text-center px-6 py-20 border-t border-zinc-100 bg-white rounded-3xl shadow-sm border border-zinc-100 my-12">
        <h2 class="text-2xl md:text-[32px] font-extrabold tracking-tight text-zinc-950 leading-tight mb-8">
            Connectez-vous ou inscrivez-vous <br> pour voir plus de projets
        </h2>

        <div class="space-y-3.5 max-w-md mx-auto">
            <button class="w-full flex items-center justify-center gap-3 border border-zinc-200 rounded-full py-3 px-6 font-bold text-[15px] text-zinc-800 hover:bg-zinc-50 transition cursor-pointer">
                <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#EA4335" d="M12.24 10.285V14.4h6.887c-.275 1.565-1.88 4.604-6.887 4.604-4.33 0-7.866-3.577-7.866-8s3.536-8 7.866-8c2.46 0 4.105 1.025 5.047 1.926l3.227-3.11C18.436 1.921 15.56 1 12.24 1 6.033 1 1 6.033 1 12.24s5.033 11.24 11.24 11.24c6.478 0 10.793-4.537 10.793-10.986 0-.74-.08-1.3-.175-1.85l-10.618-.36z"/></svg>
                Continuer avec Google
            </button>

            <button class="w-full flex items-center justify-center gap-3 border border-zinc-200 rounded-full py-3 px-6 font-bold text-[15px] text-zinc-800 hover:bg-zinc-50 transition cursor-pointer">
                <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                Continuer avec Facebook
            </button>
        </div>

        <div class="mt-5">
            <a href="#" class="text-indigo-600 font-bold text-sm hover:underline">Voir plus</a>
        </div>

        <div class="relative flex py-5 items-center max-w-md mx-auto">
            <div class="flex-grow border-t border-zinc-200"></div>
            <span class="flex-shrink mx-4 text-zinc-400 font-medium text-sm">Ou</span>
            <div class="flex-grow border-t border-zinc-200"></div>
        </div>

        <div>
            <h3 class="font-bold text-lg text-zinc-950 cursor-pointer hover:text-indigo-600 transition">
                Continuer avec une adresse e-mail
            </h3>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 7. FOOTER SECTION                          -->
    <!-- ========================================== -->
    <footer class="border-t border-zinc-100 bg-white pt-12 pb-6 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-8 border-b border-zinc-100 pb-10">
            <div class="max-w-xs">
                <span class="text-xl font-black tracking-tight bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Bēhance</span>
                <p class="text-xs text-zinc-400 mt-3 leading-relaxed">
                    Behance est la plus grande plateforme créative au monde pour présenter et découvrir des travaux créatifs.
                </p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 text-xs font-bold text-zinc-900">
                <div class="flex flex-col space-y-2.5">
                    <span class="text-zinc-400 font-medium">Pour les créatifs</span>
                    <a href="#" class="hover:text-indigo-600 transition">Explorer</a>
                    <a href="#" class="hover:text-indigo-600 transition">Behance Pro</a>
                </div>
                <div class="flex flex-col space-y-2.5">
                    <span class="text-zinc-400 font-medium">Pour les recruteurs</span>
                    <a href="#" class="hover:text-indigo-600 transition">Recruter</a>
                </div>
                <div class="flex flex-col space-y-2.5">
                    <span class="text-zinc-400 font-medium">Société</span>
                    <a href="#" class="hover:text-indigo-600 transition">À propos</a>
                </div>
                <div class="flex flex-col space-y-2.5">
                    <span class="text-zinc-400 font-medium">Support</span>
                    <a href="#" class="hover:text-indigo-600 transition">Centre d'aide</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto pt-6 flex flex-col sm:flex-row justify-between items-center text-[11px] text-zinc-400 gap-4">
            <div class="flex flex-wrap gap-4 justify-center sm:justify-start">
                <span>© 2026 Adobe Inc.</span>
                <a href="#" class="hover:text-black">Confidentialité</a>
            </div>
            <div class="flex items-center gap-1.5 font-bold text-zinc-900">
                <span>Adobe</span>
            </div>
        </div>
    </footer>

</body>
</html> --}}