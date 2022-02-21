Laravel Employees Management project main steps:
1). Create laravel project from composer:
	composer create-project laravel/laravel employees
	cd exmployees
	php artisan serve
2). For bootstrap and vue go to https://github.com/laravel/ui:
	composer require laravel/ui
	
	php artisan ui bootstrap --auth
	npm install && npm run dev
	npm run dev
	code .
	
	php artisan ui vue
	npm install && npm run dev
	npm run dev
3). Create Employee models and migrations:
	php artisan make:model Employee -m
	php artisan make:model Country -m
	php artisan make:model State -m
	php artisan make:model City -m
	php artisan make:model Department -m
4). Open '.env' file and add database name then create new database 'employees' in sqlyog
	php artisan migrate (It will create all tables in database)
5). Open database/migrations/create_*_table.php files and add columns like this:
	$table->string('first_name');
	$table->string('middle_name')->nullable();
	$table->foriegnId('department_id')->constrained();  (add foriegn key for relationships between tables)
6). php artisan migrate:fresh (this will create columns in tables)
	*Note: If you got error like: Failed to open referenced table..
			then rename that migration file to load at last
7). Modify views as your desire: resources/views/register.blade.php then modify respective controllers and models for newly added columns: Http/Controllers/*.php, Http/Models/*.php
8). Create controller: php artisan make:controller Backend/UserController --resource (for backend)
9). Create folder 'users' in 'resources/views/' folder and create files 'index/create/edit.blade.php'
10). Create route in 'web.php': Route::resource('users', UserController::class);
11). php artisan make:request UserStoreRequest (for validation of create requests)
	php artisan make:request UserUpdateRequest (for validation of update requests)
12). php artisan make:controller Api/EmployeeController --resource (for frontend)

--- Vue usage for Employees crud operations --
13). Create folder 'employees' in 'resources/views/' folder and create file 'index.blade.php'
14). Create folder 'employees' in 'resources/js/components' and create files 'index/create/edit.vue'
15). npm install vue-router then in app.js:
	import VueRouter from 'vue-router';
	Vue.use(VueRouter);
16). Create new file 'routes.js' in 'resources/js/' and add code: export const routes = []; (add routes for view, create and edit)
	and then add following code in 'app.js':
	const router = new VueRouter({
		mode: 'history',
		routes: routes
	});
	const app = new Vue({
		el: '#app',
		router: router
	});
17). Create templates in 'resources/js/components/{index/create/edit}.vue'
18). npm run watch