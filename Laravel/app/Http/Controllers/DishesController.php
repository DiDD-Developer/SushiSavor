<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class DishesController extends Controller
{
    public function create(Request $request) {
        $dish = Dishes::create([
            'name'=> $request->name,
            'weight'=> $request->weight,
            'price'=> $request->price,
            'category_id'=> $request->category_id,
        ]);

        return response()->json([
            'message'=>'Новое блюдо создано!',
            'id'=>$dish->id,
        ], 201);
    }

    public function get(Request $request) {
        $dishes = Dishes::select(['id', 'name', 'weight', 'price', 'image', 'category_id'])->get();

        return response()->json([
            'dishes'=> $dishes
        ]);
    }

    public function update(Request $request, $id) {
        $dish = Dishes::find($id);
        $dish->name = $request->name;
        $dish->weight = $request->weight;
        $dish->price = $request->price;
        $dish->category_id = $request->category_id;

        $dish->save();

        return response()->json([
            'message'=>'Город обновлен!',
            'id'=>$dish->id,
        ], 201);
    }

    public function delete(Request $request, $id) {
        $dish = Dishes::find($id);
        $dish->delete();

        return response()->json([
            'message'=>'Блюдо удалено!',
        ], 200);
    }
}
