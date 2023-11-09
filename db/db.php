<?php 

$cars = [
  new Car('id', ['INT', 'AUTO INCREMENT', 'NOT NULL', 'PRIMARY KEY'], 1),
  new Car('brand', ['VARCHAR(30)', 'NOT NULL'], 'MERCEDES-BENZ'),
  new Car('model', ['VARCHAR(30)', 'NOT NULL'], 'CLA 180'),
  new Car('matriculation_month', ['VARCHAR(9)', 'NOT NULL'], 'Novembre'),
  new Car('matriculation_year', ['YEAR', 'NOT NULL'], 2018),
  new Car('kilometres', ['MEDIUMINT UNSIGNED', 'NOT NULL'], 70595),
  new Car('power_KW', ['TINYINT', 'NULL'], 80),
  new Car('power_CV', ['TINYINT', 'NULL'], 108),
  new Car('Transmission', ['VARCHAR(14)', 'NULL'], 'Semi-automatic')
]

?>