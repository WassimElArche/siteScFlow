<?php

namespace App\Services;

use OhMyBrew\BasicShopifyAPI;

class ShopifyService
{
    protected $shopify;

    public function __construct()
    {
        $this->shopify = new BasicShopifyAPI;
        $this->shopify->setShop(env('SHOPIFY_SHOP_NAME'));
        $this->shopify->setApiKey(env('SHOPIFY_API_KEY'));
        $this->shopify->setPassword(env('SHOPIFY_API_PASSWORD'));
    }

    // Fonction pour récupérer les produits
    public function getProducts()
    {
        try {
            $products = $this->shopify->rest('GET', '/admin/products.json');
            return $products['products'] ?? [];
        } catch (\Exception $e) {
            return ['error' => 'Unable to fetch products: ' . $e->getMessage()];
        }
    }

    // Autres fonctions selon vos besoins...
}
