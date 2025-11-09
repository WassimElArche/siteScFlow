<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ShopifyController extends Controller
{
    public function getProducts()
    {
        // Créer une instance de Guzzle Client
        $client = new Client();

        // Les informations de connexion à Shopify
        $shopUrl = env('SHOPIFY_STORE_URL'); // Exemple: 'maboutique.myshopify.com'
        $apiKey = env('SHOPIFY_API_KEY');
        $apiSecret = env('SHOPIFY_API_SECRET');
        $accessToken = env('SHOPIFY_ACCESS_TOKEN'); // Tu peux obtenir un access token lors de l'authentification

        // Appeler l'API Shopify pour récupérer les produits
        try {
            $response = $client->request('GET', "https://$shopUrl/admin/api/2023-10/products.json", [
                'headers' => [
                    'X-Shopify-Access-Token' => $accessToken,
                    'Content-Type' => 'application/json',
                ],
            ]);

            $products = json_decode($response->getBody()->getContents(), true);

            return response()->json($products);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur lors de la connexion à Shopify', 'message' => $e->getMessage()]);
        }
    }
}
