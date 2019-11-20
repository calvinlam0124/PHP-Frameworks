## Leaf API starter
Quickstart for APIs created with Leaf PHP Framework. 


#### Installation
To install using git, you can clone this repo
```bash
git clone https://github.com/leafsphp/leaf-api-starter.git
cd leaf-api-starter
composer install
php -S localhost:5000
```

or use **composer**
```bash
composer create-project leafs/api-starter leaf-api
cd leaf-api
php -S localhost:5000
```


#### Routing
Routing is done by calling the `Leaf\Core\Leaf` object. Simple routing example.
```php
$leaf = new Leaf\Core\Leaf;

$leaf->get('/', function() {
	// your code
});

$leaf->post('/add', function() {
	// your code
});

// using controllers
$leaf->get('/user/{id}', '\Controllers\UserController@show');

$leaf->run();
```


### Read the full documentation [here](https://leaf-docs.netlify.com)