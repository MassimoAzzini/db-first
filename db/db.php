<?php 

$car_info = [
  new CarInfo('id', ['INT', 'AUTO INCREMENT', 'NOT NULL', 'PRIMARY KEY'], 1),
  new CarInfo('id_car', ['INT', 'NOT NULL', 'PRIMARY KEY'], 12),
  new CarInfo('brand', ['VARCHAR(30)', 'NOT NULL'], 'MERCEDES-BENZ'),
  new CarInfo('model', ['VARCHAR(30)', 'NOT NULL'], 'CLA 180'),
  new CarInfo('type', ['VARCHAR(4)', 'NOT NULL'], 'Km-0'),
  new CarInfo('first_registration_month', ['VARCHAR(9)', 'NOT NULL'], 'Novembre'),
  new CarInfo('first_registration_year', ['YEAR', 'NOT NULL'], 2018),
  new CarInfo('mileage', ['MEDIUMINT UNSIGNED', 'NOT NULL'], 70595),
  new CarInfo('power_KW', ['TINYINT UNSIGNED', 'NULL'], 80),
  new CarInfo('power_CV', ['TINYINT UNSIGNED', 'NULL'], 108),
  new CarInfo('engine_size', ['SMALLINT UNSIGNED', 'NOT NULL'], 1461),
  new CarInfo('exterior_colour', ['VARCHAR(30)', 'NULL'], 'Blue'),
  new CarInfo('interior_colour', ['VARCHAR(30)', 'NULL'], 'Black'),
  new CarInfo('interior_type', ['VARCHAR(30)', 'NULL'], 'Full leather'),

  // invece del varchar devo mettere qualcosa che mi fa scegliere tra 3 valori?
  new CarInfo('transmission', ['VARCHAR(20)', 'NOT NULL'], 'Automatic'),
  new CarInfo('gears', ['CHAR(1)', 'NOT NULL'], '7'),
  
  // invece del varchar devo mettere qualcosa che mi fa scegliere tra 6 valori?
  new CarInfo('fuel_type', ['VARCHAR(14)', 'NOT NULL'], 'full electric'),

  new CarInfo('drivetrain', ['VARCHAR(20)', 'NULL'], 'Anteriore'),
  new CarInfo('targa', ['VARCHAR(10)', 'NULL'], 'AA111AA'),
  new CarInfo('n_telaio', ['VARCHAR(17)', 'NULL'], 'WDD1179121N670698'),
  new CarInfo('seats', ['VARCHAR(2)', 'NOT NULL'], 5),
  new CarInfo('emission_class', ['CHAR(6)', 'NOT NULL'], 'Euro 6'),
  new CarInfo('CO2_emissions', ['SMALLINT UNSIGNED', 'NULL'], '179'),
  new CarInfo('Fuel_consumption_city', ['DOUBLE(3,1)', 'NULL'], 4.7),
  new CarInfo('Fuel_consumption_country', ['DOUBLE(3,1)', 'NULL'], 3.4),
  new CarInfo('Fuel_consumption_comb', ['DOUBLE(3,1)', 'NULL'], 3.9),

  new CarInfo('equipment_comfort', ['VARCHAR(500)', 'NULL'], 'Automatic climate control, 2 zones, Cruise control, ecc'),
  new CarInfo('equipment_entertainment', ['VARCHAR(500)', 'NULL'], 'Bluetooth, MP3, ecc'),
  new CarInfo('equipment_safety', ['VARCHAR(500)', 'NULL'], 'ABS, Alarm system, ecc'),
  new CarInfo('equipment_extra', ['VARCHAR(500)', 'NULL'], 'Emergency tyre repair kit, Sport package, ecc'),
  new CarInfo('description_car', ['TEXT', 'NULL'], 'Versione sport con carrozzeria bianca pastello ed interni neri in pelle e tessuto...'),


  new CarInfo('price', ['INT', 'NOT NULL'], 24900),


]

?>