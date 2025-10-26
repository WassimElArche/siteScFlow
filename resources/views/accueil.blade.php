<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCFLOW - Maillots de Football</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .ticker {
            white-space: nowrap;
            overflow: hidden;
        }

        .ticker-text {
            display: inline-block;
            animation: ticker-animation 40s linear infinite;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .ticker-text span {
            padding-right: 50px;
        }

        @keyframes ticker-animation {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .ticker-text {
            display: flex;
        }

        .ticker-text div {
            display: inline-block;
        }

        /* Style pour le menu déroulant */
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            min-width: 160px;
            z-index: 10;
            transition: opacity 0.3s ease-in-out;
        }

        .dropdown-menu a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Animation pour le menu déroulant */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        /* Panier */
        .cart-icon {
            display: flex;
            align-items: center;
            position: relative;
        }

        .cart-icon a {
            display: flex;
            align-items: center;
            text-gray-700;
            font-size: 18px;
        }

        .cart-icon .cart-count {
            background-color: red;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 50%;
            position: absolute;
            top: -5px;
            right: -5px;
        }

    </style>
</head>

<body class="font-sans bg-gray-50">

    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 text-xl font-bold text-blue-600">
                    SCFLOW
                </div>
                <div class="flex justify-center flex-1 space-x-6">
                    <!-- Menu avec animation -->
                    <div class="dropdown">
                        <a href="#" class="text-gray-700 hover:text-blue-600">Championnat</a>
                        <div class="dropdown-menu">
                            <a href="#">Premier League</a>
                            <a href="#">La Liga</a>
                            <a href="#">Serie A</a>
                            <a href="#">Bundesliga</a>
                            <a href="#">Ligue 1</a>
                            <a href="#">MLS</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="#" class="text-gray-700 hover:text-blue-600">Nations</a>
                        <div class="dropdown-menu">
                            <a href="#">France</a>
                            <a href="#">Brésil</a>
                            <a href="#">Argentine</a>
                            <a href="#">Allemagne</a>
                            <a href="#">Espagne</a>
                            <a href="#">Italie</a>
                        </div>
                    </div>

                </div>
                <!-- Panier -->
                <div class="cart-icon">
                    <a href="/panier" class="text-gray-700 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="mr-2">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M7 4V3c0-.55.45-1 1-1h8c.55 0 1 .45 1 1v1h4c.55 0 1 .45 1 1v16c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h4zM9 4h6V3H9v1zm9 2h-2V5c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v1H4v14h16V6z" />
                        </svg>
                        <span>Panier</span>
                    </a>
                    <div class="cart-count">3</div> <!-- Exemple de nombre d'articles dans le panier -->
                </div>
            </div>
        </div>
    </header>

    <section class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">Bienvenue chez SCFLOW</h1>
            <p class="text-lg sm:text-xl mb-6">Découvrez des maillots de football exclusifs, disponibles dès maintenant !</p>
            <a href="#services"
                class="bg-white text-blue-600 hover:bg-blue-100 px-6 py-3 rounded-lg text-lg font-semibold transition">Explorez nos maillots</a>
        </div>
    </section>

    <section class="bg-blue-700 text-white py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="ticker">
                <div class="ticker-text">
                    <div>🏆 "Nouveaux maillots 2025 en stock ! Découvrez notre nouvelle collection" | ⚽ Maillots de la Ligue 1 disponibles dès maintenant | 🏅 Maillots personnalisés avec vos noms et numéros ! Commandez aujourd'hui ! | ⚽ Découvrez notre sélection spéciale coupe du monde 2026 | 🏆 Maillots vintage des années 90 maintenant en précommande !</div>
                    <div>🏆 "Nouveaux maillots 2025 en stock ! Découvrez notre nouvelle collection" | ⚽ Maillots de la Ligue 1 disponibles dès maintenant | 🏅 Maillots personnalisés avec vos noms et numéros ! Commandez aujourd'hui ! | ⚽ Découvrez notre sélection spéciale coupe du monde 2026 | 🏆 Maillots vintage des années 90 maintenant en précommande !</div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-semibold text-blue-600 mb-8">Nos Maillots</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Maillots de Football</h3>
                    <p class="text-gray-600">Découvrez une large gamme de maillots pour tous les clubs et sélections nationales.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Maillots Personnalisés</h3>
                    <p class="text-gray-600">Ajoutez votre nom ou numéro sur votre maillot préféré pour un look unique !</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Maillots Vintage</h3>
                    <p class="text-gray-600">Revivez les grands moments du football avec nos maillots rétro des années 80 et 90 !</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
