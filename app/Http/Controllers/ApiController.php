<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as Category;
class ApiController extends Controller
{
   public function categories(){ // Получает все категории
        $category = Category::all();

        return $category->toJson(JSON_PRETTY_PRINT);
   }

   public function addCategory(Request $req){ // добавляет категорию
        $data = $req->post();
        $error = [];
        if($data['title'] == '')
            $error[] = "Заполните название";

        if(count($error) == 0) {
            $model = new Category();
            $model->title = $data['title'];
            $model->save();

            
        }
   }


}
