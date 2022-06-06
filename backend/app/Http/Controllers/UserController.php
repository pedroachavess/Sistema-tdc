<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use Namshi\JOSE\JWT;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function insert(Request $user)
    {
        $data = $user->all();
        $data["password"] = base64_encode($data["password"]);
        $user = $data;
        return User::create($user);
    }
    public function products_user()
    {
        $users = User::all();
        $products = Products::all();
        $now = date("Y-m-d");

        foreach ($users as $user) {


            if ($user->day_updated_at == null || $user->day_updated_at < $now) {
                $selected_id = array();
                $object_products = array();

                while (count($selected_id) < 5) {

                    $random_int = random_int(0, count($products) - 1);
                    if (!in_array($random_int, $selected_id)) {
                        array_push($selected_id, $random_int);
                    }
                }
                foreach ($selected_id as $id) {
                    array_push($object_products, $products[$id]->name);
                }
                $user->products_user = $object_products;
                $user->day_updated_at = $now;
                User::where("id", $user->id)->update(["products_user" => $user->products_user, "day_updated_at" => $user->day_updated_at]);
            }
        }
        return $users;
    }
}
