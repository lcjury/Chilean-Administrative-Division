# Administrative: Political Administrative Division 

This package provide a command to create the neccesary to work with political administrative division on your database.

The `make:administrative` command will provide you with Region, Province and Commune models, the migrations for those models and seeders for some countries


# Installation

To get the last version of Administrative use

```
composer require lcjury/administrative
```

or add to your `composer.json` file

```
"require": {
  "lcjury/administrative": "^0.0.0"                                                                      
},
```

once installed you should add the `AdministrativeServiceProvider` to your `config/app.php` file

```
'providers' => [
  Lcjury\Administrative\AdministrativeServiceProvider::class
];
```

#Usage

Just run `artisan make:administrative` and then add `$this->call(PoliticalTablesSeeder::class);` to the `DatabaseSeeder` file and run `artisan db:seed`

#Supported Countries

* **Chile** (Regions, Provinces and Communes using the data from [subdere.gov](http://www.subdere.gov.cl/documentacion/regiones-provincias-y-comunas-de-chile) with the update from 13/09/2011)
