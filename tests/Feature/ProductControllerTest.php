<?php

namespace Tests\Feature;

use App\Models\Product;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    public function testNoProductResponse()
    {
        $res = $this->get('/api/products');
        $res->assertStatus(200);
        $content = json_decode($res->getContent(), true);
        $this->assertIsArray($content);
        $this->assertEmpty($content);
    }

    public function testProductResponse()
    {
        $amount = 10;

        for ($i = 0; $i < $amount; $i++) {
            $product = new Product();
            $product->title = 'Product ' . $i;
            $product->description = 'Product ' . $i . ' description';
            $product->image = 'https://picsum.photos/200/300';
            $product->price = 10.00;
            $product->save();
        }

        $res = $this->get('/api/products');
        $res->assertStatus(200);
        $content = json_decode($res->getContent(), true);
        $this->assertIsArray($content);
        $this->assertCount($amount, $content);
    }
}
