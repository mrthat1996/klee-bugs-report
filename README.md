# Klee Bugs Report

## Install

1. Install the package

```shell
composer require mrthat1996/klee-bugs-report
```

2. Add ServiceProvider to `config/app.php`

```shell
Mrthat1996\KleeBugsReport\Providers\KleeBugsReportServiceProvider::class
```

3. Public configuration (Optional)

```shell
php artisan vendor:publish --provider="Mrthat1996\KleeBugsReport\Providers\ServiceProvider"
```

4. Config ENV

* Which error levels should be report

```shell
KLEE_LOG_LEVEL=error
```

* Which environments should be report

```shell
KLEE_LOG_ENV=development,staging
```

* Klee authentication token (Ask Alice for token)

```shell
KLEE_AUTH_TOKEN=TOKEN
```

5. Facades
* Add alias to `config/app.php`
```shell
'Klee' => Mrthat1996\KleeBugsReport\Facades\KleeFacade::class,
```

* To log a custom message
```php
\Klee::log(string, array);
```