<?php


namespace App\Http\Requests\Main\Products\ProductIngredient;


use App\Http\Requests\CustomFormRequest;

class ProductIngredientUpdateRequest extends CustomFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:product_ingredient,id,deleted_at,NULL',
            'product_id' 					=> '' ,
			'ingredient_id' 					=> '' ,
			
        ];
    }
}
