<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{

    public function index(){
         $array = array_add(['name' => 'Desk'], 'price', 100);
        $array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        [$keys, $values] = array_divide(['name' => 'Desk','name2' => 'Desk2']);
         var_dump($keys);
        var_dump($values);
        $array = ['products' => ['desk' => ['price' => 100]]];

        $flattened = array_dot($array);
        $array = ['name' => 'Desk', 'price' => 100, 'price2' => 100];

        $filtered = array_except($array, ['price']);
        var_dump($flattened);
        var_dump($filtered);
        $array = [100, 200, 300];

        $first = array_first($array, function ($value, $key) {
            return $value >= 100;
        });
        $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];

        $flattened = array_flatten($array);
        $array = ['products' => ['desk' => ['price' => 100]],'products2' => ['desk' => ['price' => 100]]];

        array_forget($array, 'products.desk');
        $array = ['products' => ['desk' => ['price' => 100]]];

        $price = array_get($array, 'products.desk.price');
        $discount = array_get($array, 'products.desk.discount', 0);
        $array = ['product' => ['name' => 'Desk', 'price' => 100]];

        $contains = array_has($array, 'product.name');

// true

        $contains = array_has($array, ['product.price']);
        $array = [100, 200, 300, 110];

        $last = array_last($array, function ($value, $key) {
            return $value >= 301;
        },3);
        $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];

        $slice = array_only($array, ['name']);
        $array = [
            ['developer' => ['id' => 1, 'name' => 'Taylor']],
            ['developer' => ['id' => 2, 'name' => 'Abigail']],
        ];

        $names = array_pluck($array, 'developer.name','developer.id');
        $array = ['one', 'two', 'three', 'four'];

        $array = array_prepend($array, 'zero');
        $array = ['name' => 'Desk', 'price' => 100];

        $name = array_pull($array, 'name');
        $array = [1, 2, 3, 4, 5];

        $random = array_random($array);
        $array = ['products' => ['desk' => ['price' => 100]]];

        array_set($array, 'products.desk.price', 200);
        $array = ['Desk', 'Table', 'Chair'];

        $sorted = array_sort($array);
        $array = [
            ['name' => 'Desk'],
            ['name' => 'Table'],
            ['name' => 'Chair'],
        ];

        $sorted = array_values(array_sort($array, function ($value) {
            return $value['name'];
        }));
        $array = [
            ['Roman', 'Taylor', 'Li'],
            ['PHP', 'Ruby', 'JavaScript'],
        ];

        $sorted = array_sort_recursive($array);
        $string = 'Laravel';

        $array = array_wrap($string);
        $data = ['products' => ['desk' => ['price' => 100]]];

        data_fill($data, 'products.desk.price', 200);

// ['products' => ['desk' => ['price' => 100]]]

        data_fill($data, 'products.desk.discount', 10);
        $data = ['products' => ['desk' => ['price' => 100]]];

        $price = data_get($data, 'products.desk.price');
        $array = [100, 200, 300];

        $first = head($array);

// 100
        $path = app_path();
       // $path = app_path('Http/Controllers/Controller.php');
       // $path = base_path();

        $path = config_path();
//        $path = mix('css/app.css');
        $path = public_path();
        $path = resource_path();
        $converted = camel_case('foo_bar');
        $string = 'The event will take place between :start and :end';

        $string = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);
        //Str::orderedUuid();
        echo __('messages.welcome');
        $unreadCount = 'e';
        echo trans_choice('messages.notifications', $unreadCount);

    //    dd((string) Str::uuid());
        $url = action('ProductController@index');
      echo   $url = secure_asset('img/tinker.jpg');
        $url = asset('img/tinker.jpg');
        $container = app();
        $password = bcrypt('my-secret-password');

        $value = cache('key');

        $value = cache('key', '5');
        $value = cache('key');
        cache(['key' => 'value'], 5);

        cache(['key' => 'value'], now()->addSeconds(10));//sleep(20);
        $value = cache('key');
        $value = config('app.timezone');
        $token = csrf_token();
//        info('Some helpful information!');
//        logger('Debug message');
//        logger()->error('You are not allowed here.');

//        return retry(5, function () {
//            // Attempt 5 times while resting 100ms in between attempts...
//        }, 100);
        $callback = function ($value) {
            return $value * 2;
        };

        $result = transform(50, $callback);

        dd($collection = collect(['taylor', 'abigail']));

        abort(403);


        dd($first);
        dd($array);
    }
}
