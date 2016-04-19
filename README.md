# Chilean-Administrative-Division
This repository includes a Chile.php file who have a Hash with the administrative division of Chile in the form of Regions, Provinces and Communes using the data from [subdere.gov](http://www.subdere.gov.cl/documentacion/regiones-provincias-y-comunas-de-chile) with the update from 13/09/2011.

The hash structure is the following:
```
[
'Region_name_1' => [
  'Province_name_1' => ['commune_1', 'commune_2', ..., 'commmune_n'],
  'Province_name_2' => ['commune_1', 'commune_2', ..., 'commmune_n'],
  ...,
  'Province_name_n' => ['commune_1', 'commune_2', ..., 'commmune_n'],
  ],
'Region_name_2' => [...],
'Region_name_n' => [...],
];
```
