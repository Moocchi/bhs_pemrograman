# Membuat Lumen project, setup User, dan Auth

- Bukalah terminal dan bikin folder baru 
di tempat kalian menyimpan data perkuliahan

- jangan lupa tambahkan .gitignore agar DB tidak masuk ke dalam GIT
dalam kasus saya git ignore nya seperti ini
```
db/
nginx/
php/
```

- setelah itu buatlah folder dengan nama UAS

- yang mana struktur foldernya terdiri dari
``` 
|UAS
|-db
|--conf.d
|----my.cnf
|-nginx
|--default.conf
|--Dockerfile
|-php
|--docker-entrypoint.sh
|--Dockerfile
|--local.ini
|--www.conf
```
- lakukan perintah
```
docker-compose up -d --build
```

- setelah selesai masuk kedalam containernya dengan perintah 
```
docker exec -it uas bash
```
- lakukan perintah didalam containernya 
```
composer create-project laravel/lumen .
```
- menghapus file composer.lock dalam containernya
```
rm -rf composer.lock
```
- setelah itu masih didalam container lakukan perintah 
```
composer require flipbox/lumen-generator
```
- selanjutnya tambahkan dalam folder src/bootstrap/app.php

``` php
line 26              : $app->withFacades(); 
line 28              : $app->withEloquent();
line 95              : $app->register(App\Providers\AuthServiceProvider::class);
tambahkan di line 97 : $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```

- selanjutnya didalam container lakukan perintah 
```
mv .env.example .env
```
- sesuaikan config .env terkait database
untuk kasus saya .env nya seperti ini
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db_uas
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```
- didalam container lakukan perintah 
```
php artisan key:generate
```
- setelah itu hapus file model User.php
```
rm -rf app/Models/User.php
```

- setelah itu create model, controller, migration dan seeder;
```
php artisan make:model User -mcs --resource
```

- tambahkan didalam migrationnya 
```php
$table->id();
$table->string('username');
$table->string('password');
$table->timestamp();
```
- tambahkan didalam user seeder
```php
public function run() {
    $timestamp = \Carbon\Carbon::now()->toDateTimeString();
    DB::table('users')->insert([
        'username' => 'client',
        'password' => 'password',
        'created_at' => $timestamp,
        'updated_at' => $timestamp,
    ]);
}
```
- tambahkan juga di bagian atas user seeder
```
use Illuminate\Support\Facades\DB;
```

- di file database seeder tambahkan
```
$this->call([
    UserSeeder::class,
]);
```

- setelah itu lakukan 
```
php artisan migrate:fresh --seed
```

- setelah itu masuk ke dalam routing didalam folder
```
src/route/web.php
```

- bikin routing ke user tadi
```php
$router->group(['prefix' => 'api/v1/testing'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
});
```

- selanjutnya didalam model 
```
protected $connection = 'mysql';
protected $fillable = [
    'username', 'password'
];
```
- selanjutnya dalam user controller 
```php
use Illuminate\Support\Facades\DB;
```
```php
public function index(){
    $query = DB::connection('mysql')->table('users')->get();
    return response()->json($query, 200);
}
```

- jangan lupa
```
chmod 777 -R storage/.
```

- membuat middleware dan aktifkan fitur middlewarenya didalam folder 
```
bootsrap/app.php
```
selanjutnya
```php
line 79 : $app->routeMiddleware([
'auth' => App\Http\Middleware\Authenticate::class,
]);
$app->register(App\Providers\AuthServiceProvider::class);
```

set ke route aktifkan middleware
```php
$router->group(['prefix' => 'api/v1/testing', 'middleware'=>'auth'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
});
```
setelah itu setup middlewarenya di folder
```
app/Http/Middleware/Authenticate.php
```

dengan membuat seperti ini
```php
use Illuminate\support\Facades\DB;
```

```php
public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            if($request->header('password')) {
                $token = $request->header('password');
                if ($token) {
                    $check_token = DB::connection('mysql')
                        ->table('users')
                        ->where('password', $token)
                        ->first();

                    if ($check_token === null) {
                        $res['success'] = false;
                        $res['message'] = 'Permission Not Allowed';
                        return response()->json($res, 403);
                    }
                } else {
                    $res['success'] = false;
                    $res['message'] = 'Not Authorized';
                    return response()->json($res, 401);
                }
            } else {
                $res['success'] = false;
                $res['message'] = 'Not Authorized';
                return response()->json($res, 401);
            }
        }

        return $next($request);
    }
```
## setelah itu buat model baru untuk studi kasusnya
```
php artisan make:model (isi dengan studi kasus nya) -mcs --resource
```

- setup pada fungsi get, post, put, delete di src/app/http/controller/(studi kasus)controller.php show, edit, dll.