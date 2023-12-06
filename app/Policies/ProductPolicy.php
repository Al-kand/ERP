<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use App\Http\Requests\ProductRequest;

class ProductPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(?User $user, Product $product, ProductRequest $request): bool
    {

        return config('products.role') === 'admin' ?
            true :
            $product->article === $request->input('article');
    }
}
