<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Osiset\BasicShopifyAPI\BasicShopifyAPI;

class ShopifyProductController extends Controller
{
    protected $shopify;

    public function __construct()
    {
        $this->shopify = new BasicShopifyAPI();
        $this->shopify->setApiKey(env('SHOPIFY_API_KEY'));
        $this->shopify->setApiSecret(env('SHOPIFY_API_SECRET'));
        $this->shopify->setShopUrl(env('SHOPIFY_STORE_URL'));
    }

    // Pour récupérer les produits de Shopify
    public function getProducts()
    {
        try {
            // Appel API pour obtenir les produits
            $products = $this->shopify->rest('GET', '/admin/api/2023-10/products.json');
            return response()->json($products);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur lors de la récupération des produits', 'message' => $e->getMessage()]);
        }
    }

    // Pour tester la connexion
    public function testConnection()
    {
        try {
            $shopInfo = $this->shopify->rest('GET', '/admin/api/2023-10/shop.json');
            return response()->json($shopInfo);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur de connexion', 'message' => $e->getMessage()]);
        }
    }
}
