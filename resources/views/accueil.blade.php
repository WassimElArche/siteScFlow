<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCFLOW - Maillots de Football</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-color: #2d6aa1;
            --secondary-color: #3b82f6;
            --hover-color: #2563eb;
            --bg-light: #f9fafb;
            --text-dark: #333333;
            --card-bg: #ffffff;
        }

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

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease-in-out;
            font-weight: 600;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: var(--hover-color);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease-in-out;
            font-weight: 600;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: var(--hover-color);
        }

        .product-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-radius: 0.5rem;
            background-color: var(--card-bg);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            font-family: 'Roboto', sans-serif;
        }

        .bg-primary {
            background-color: var(--primary-color);
        }

        .bg-secondary {
            background-color: var(--secondary-color);
        }

        .bg-light {
            background-color: var(--bg-light);
        }

        .text-primary {
            color: var(--primary-color);
        }

        .text-dark {
            color: var(--text-dark);
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }

        .section-subtitle {
            font-size: 1rem;
            font-weight: 400;
            color: var(--text-dark);
        }

        .product-card .text-gray-600 {
            font-size: 0.875rem;
        }

        .btn-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: var(--card-bg);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 10;
            transition: opacity 0.3s ease-in-out;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            color: var(--text-dark);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: var(--hover-color);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }
    </style>
</head>

<body class="font-sans bg-light">

    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 text-xl font-bold text-primary">
                    SCFLOW
                </div>
                <div class="flex justify-center flex-1 space-x-6">
                    <div class="dropdown">
                        <a href="#" class="text-dark hover:text-primary">Championnat</a>
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
                        <a href="#" class="text-dark hover:text-primary">Nations</a>
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

                <div class="cart-icon">
                    <a href="/panier" class="text-dark hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="mr-2">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M7 4V3c0-.55.45-1 1-1h8c.55 0 1 .45 1 1v1h4c.55 0 1 .45 1 1v16c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h4zM9 4h6V3H9v1zm9 2h-2V5c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v1H4v14h16V6z" />
                        </svg>
                        <span>Panier</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">Bienvenue chez SCFLOW</h1>
            <p class="text-lg sm:text-xl mb-6">Découvrez des maillots de football exclusifs, disponibles dès maintenant !</p>
            <a href="#services" class="btn-primary">Explorez nos maillots</a>
        </div>
    </section>

    <section class="bg-light py-16">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="section-title">Nos Maillots en Exemples</h2>
            <p class="section-subtitle mb-8">Voici quelques-uns de nos modèles phares. Découvrez l'intégralité de notre collection dans la boutique complète.</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="product-card p-6">
                    <div class="product-image mb-4">
                        <img src="https://via.placeholder.com/300x400?text=Maillot+1" alt="Maillot 1">
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-4">Maillot de Football</h3>
                    <p class="text-gray-600">Découvrez nos maillots des clubs les plus populaires.</p>
                    <a href="/boutique" class="btn-secondary">Voir la boutique</a>
                </div>

                <div class="product-card p-6">
                    <div class="product-image mb-4">
                        <img src="https://via.placeholder.com/300x400?text=Maillot+2" alt="Maillot 2">
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-4">Maillot Personnalisé</h3>
                    <p class="text-gray-600">Ajoutez votre nom et numéro pour un look unique.</p>
                    <a href="/boutique" class="btn-secondary">Voir la boutique</a>
                </div>

                <div class="product-card p-6">
                    <div class="product-image mb-4">
                        <img src="https://via.placeholder.com/300x400?text=Maillot+3" alt="Maillot 3">
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-4">Maillot Vintage</h3>
                    <p class="text-gray-600">Découvrez nos modèles rétro, parfaits pour les fans de football de longue date.</p>
                    <a href="/boutique" class="btn-secondary">Voir la boutique</a>
                </div>
            </div>

            <div class="btn-container">
                <a href="/boutique" class="btn-primary">Accédez à la boutique complète</a>
            </div>
        </div>
    </section>

</body>

</html>
