<?php

use Illuminate\Database\Seeder;
use App\percentilPeso;

class percentilPesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $pesoPercentil = [
        ['year' => 0 ,'meses' => 0 ,'sexo' => 1,'peso' => 2.5, 'percentil' => 3],
        ['year' => 0 ,'meses' => 0 ,'sexo' => 1,'peso' => 2.9, 'percentil' => 15],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 1,'peso' => 3.3, 'percentil' => 50],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 1,'peso' => 3.9, 'percentil' => 85],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 1,'peso' => 4.3, 'percentil' => 97],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 1,'peso' => 3.4, 'percentil' => 3],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 1,'peso' => 3.9, 'percentil' => 15],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 1,'peso' => 4.5, 'percentil' => 50],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 1,'peso' => 5.1, 'percentil' => 85],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 1,'peso' => 5.7, 'percentil' => 97],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 1,'peso' => 4.4, 'percentil' => 3],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 1,'peso' => 4.9, 'percentil' => 15],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 1,'peso' => 5.6, 'percentil' => 50],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 1,'peso' => 6.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 1,'peso' => 7.0, 'percentil' => 97],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 1,'peso' => 5.1, 'percentil' => 3],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 1,'peso' => 5.6, 'percentil' => 15],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 1,'peso' => 6.4, 'percentil' => 50],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 1,'peso' => 7.2, 'percentil' => 85],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 1,'peso' => 7.9, 'percentil' => 97],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 1,'peso' => 5.6, 'percentil' => 3],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 1,'peso' => 6.2, 'percentil' => 15],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 1,'peso' => 7.0, 'percentil' => 50],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 1,'peso' => 7.9, 'percentil' => 85],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 1,'peso' => 8.6, 'percentil' => 97],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 1,'peso' => 6.1, 'percentil' => 3],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 1,'peso' => 6.7, 'percentil' => 15],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 1,'peso' => 7.5, 'percentil' => 50],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 1,'peso' => 8.4, 'percentil' => 85],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 1,'peso' => 9.2, 'percentil' => 97],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 1,'peso' => 6.4, 'percentil' => 3],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 1,'peso' => 7.1, 'percentil' => 15],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 1,'peso' => 7.9, 'percentil' => 50],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 1,'peso' => 8.9, 'percentil' => 85],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 1,'peso' => 9.7, 'percentil' => 97],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 1,'peso' => 6.7, 'percentil' => 3],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 1,'peso' => 7.4, 'percentil' => 15],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 1,'peso' => 8.3, 'percentil' => 50],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 1,'peso' => 9.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 1,'peso' => 10.2, 'percentil' => 97],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 1,'peso' => 7.0, 'percentil' => 3],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 1,'peso' => 7.7, 'percentil' => 15],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 1,'peso' => 8.6, 'percentil' => 50],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 1,'peso' => 9.6, 'percentil' => 85],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 1,'peso' => 10.5, 'percentil' => 97],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 1,'peso' => 7.2, 'percentil' => 3],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 1,'peso' => 7.9, 'percentil' => 15],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 1,'peso' => 8.9, 'percentil' => 50],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 1,'peso' => 10.0, 'percentil' => 85],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 1,'peso' => 10.9, 'percentil' => 97],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 1,'peso' => 7.5, 'percentil' => 3],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 1,'peso' => 8.2, 'percentil' => 15],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 1,'peso' => 9.2, 'percentil' => 50],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 1,'peso' => 10.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 1,'peso' => 11.2, 'percentil' => 97],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 1,'peso' => 7.7, 'percentil' => 3],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 1,'peso' => 8.4, 'percentil' => 15],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 1,'peso' => 9.4, 'percentil' => 50],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 1,'peso' => 10.5, 'percentil' => 85],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 1,'peso' => 11.5, 'percentil' => 97],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 1,'peso' => 7.8, 'percentil' => 3],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 1,'peso' => 8.6, 'percentil' => 15],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 1,'peso' => 9.6, 'percentil' => 50],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 1,'peso' => 10.8, 'percentil' => 85],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 1,'peso' => 11.8, 'percentil' => 97],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 1,'peso' => 8.0, 'percentil' => 3],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 1,'peso' => 8.8, 'percentil' => 15],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 1,'peso' => 9.9, 'percentil' => 50],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 1,'peso' => 11.1, 'percentil' => 85],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 1,'peso' => 12.1, 'percentil' => 97],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 1,'peso' => 8.2, 'percentil' => 3],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 1,'peso' => 9.0, 'percentil' => 15],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 1,'peso' => 10.1, 'percentil' => 50],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 1,'peso' => 11.3, 'percentil' => 85],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 1,'peso' => 12.4, 'percentil' => 97],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 1,'peso' => 8.4, 'percentil' => 3],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 1,'peso' => 9.2, 'percentil' => 15],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 1,'peso' => 10.3, 'percentil' => 50],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 1,'peso' => 11.6, 'percentil' => 85],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 1,'peso' => 12.7, 'percentil' => 97],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 1,'peso' => 8.5, 'percentil' => 3],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 1,'peso' => 9.4, 'percentil' => 15],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 1,'peso' => 10.5, 'percentil' => 50],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 1,'peso' => 11.8, 'percentil' => 85],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 1,'peso' => 12.9, 'percentil' => 97],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 1,'peso' => 8.7, 'percentil' => 3],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 1,'peso' => 9.6, 'percentil' => 15],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 1,'peso' => 10.7, 'percentil' => 50],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 1,'peso' => 12.0, 'percentil' => 85],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 1,'peso' => 13.2, 'percentil' => 97],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 1,'peso' => 8.9, 'percentil' => 3],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 1,'peso' => 9.7, 'percentil' => 15],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 1,'peso' => 10.9, 'percentil' => 50],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 1,'peso' => 12.3, 'percentil' => 85],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 1,'peso' => 13.5, 'percentil' => 97],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 1,'peso' => 9.0, 'percentil' => 3],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 1,'peso' => 9.9, 'percentil' => 15],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 1,'peso' => 11.1, 'percentil' => 50],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 1,'peso' => 12.5, 'percentil' => 85],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 1,'peso' => 13.7, 'percentil' => 97],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 1,'peso' => 9.2, 'percentil' => 3],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 1,'peso' => 10.1, 'percentil' => 15],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 1,'peso' => 11.3, 'percentil' => 50],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 1,'peso' => 12.7, 'percentil' => 85],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 1,'peso' => 14.0, 'percentil' => 97],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 1,'peso' => 9.3, 'percentil' => 3],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 1,'peso' => 10.3, 'percentil' => 15],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 1,'peso' => 11.5, 'percentil' => 50],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 1,'peso' => 13.0, 'percentil' => 85],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 1,'peso' => 14.3, 'percentil' => 97],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 1,'peso' => 9.5, 'percentil' => 3],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 1,'peso' => 10.5, 'percentil' => 15],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 1,'peso' => 11.8, 'percentil' => 50],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 1,'peso' => 13.2, 'percentil' => 85],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 1,'peso' => 14.5, 'percentil' => 97],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 1,'peso' => 9.7, 'percentil' => 3],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 1,'peso' => 10.6, 'percentil' => 15],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 1,'peso' => 12.0, 'percentil' => 50],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 1,'peso' => 13.4, 'percentil' => 85],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 1,'peso' => 14.8, 'percentil' => 97],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 1,'peso' => 9.8, 'percentil' => 3],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 1,'peso' => 10.8, 'percentil' => 15],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 1,'peso' => 12.2, 'percentil' => 50],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 1,'peso' => 13.7, 'percentil' => 85],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 1,'peso' => 15.1, 'percentil' => 97],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 1,'peso' => 10.0, 'percentil' => 3],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 1,'peso' => 11.0, 'percentil' => 15],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 1,'peso' => 12.4, 'percentil' => 50],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 1,'peso' => 13.9, 'percentil' => 85],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 1,'peso' => 15.3, 'percentil' => 97],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 1,'peso' => 10.1, 'percentil' => 3],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 1,'peso' => 11.1, 'percentil' => 15],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 1,'peso' => 12.5, 'percentil' => 50],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 1,'peso' => 14.1, 'percentil' => 85],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 1,'peso' => 15.6, 'percentil' => 97],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 1,'peso' => 10.2, 'percentil' => 3],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 1,'peso' => 11.3, 'percentil' => 15],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 1,'peso' => 12.7, 'percentil' => 50],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 1,'peso' => 14.4, 'percentil' => 85],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 1,'peso' => 15.9, 'percentil' => 97],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 1,'peso' => 10.4, 'percentil' => 3],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 1,'peso' => 11.5, 'percentil' => 15],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 1,'peso' => 12.9, 'percentil' => 50],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 1,'peso' => 14.6, 'percentil' => 85],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 1,'peso' => 16.1, 'percentil' => 97],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 1,'peso' => 10.5, 'percentil' => 3],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 1,'peso' => 11.6, 'percentil' => 15],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 1,'peso' => 13.1, 'percentil' => 50],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 1,'peso' => 14.8, 'percentil' => 85],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 1,'peso' => 16.4, 'percentil' => 97],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 1,'peso' => 10.7, 'percentil' => 3],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 1,'peso' => 11.8, 'percentil' => 15],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 1,'peso' => 13.3, 'percentil' => 50],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 1,'peso' => 15.0, 'percentil' => 85],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 1,'peso' => 16.6, 'percentil' => 97],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 1,'peso' => 10.8, 'percentil' => 3],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 1,'peso' => 11.9, 'percentil' => 15],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 1,'peso' => 13.5, 'percentil' => 50],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 1,'peso' => 15.2, 'percentil' => 85],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 1,'peso' => 16.9, 'percentil' => 97],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 1,'peso' => 10.9, 'percentil' => 3],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 1,'peso' => 12.1, 'percentil' => 15],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 1,'peso' => 13.7, 'percentil' => 50],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 1,'peso' => 15.5, 'percentil' => 85],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 1,'peso' => 17.1, 'percentil' => 97],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 1,'peso' => 11.1, 'percentil' => 3],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 1,'peso' => 12.2, 'percentil' => 15],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 1,'peso' => 13.8, 'percentil' => 50],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 1,'peso' => 15.7, 'percentil' => 85],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 1,'peso' => 17.3, 'percentil' => 97],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 1,'peso' => 11.2, 'percentil' => 3],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 1,'peso' => 12.4, 'percentil' => 15],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 1,'peso' => 14.0, 'percentil' => 50],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 1,'peso' => 15.9, 'percentil' => 85],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 1,'peso' => 17.6, 'percentil' => 97],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 1,'peso' => 11.3, 'percentil' => 3],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 1,'peso' => 12.5, 'percentil' => 15],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 1,'peso' => 14.2, 'percentil' => 50],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 1,'peso' => 16.1, 'percentil' => 85],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 1,'peso' => 17.8, 'percentil' => 97],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 1,'peso' => 11.4, 'percentil' => 3],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 1,'peso' => 12.7, 'percentil' => 15],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 1,'peso' => 14.3, 'percentil' => 50],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 1,'peso' => 16.3, 'percentil' => 85],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 1,'peso' => 18.0, 'percentil' => 97],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 1,'peso' => 11.6, 'percentil' => 3],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 1,'peso' => 12.8, 'percentil' => 15],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 1,'peso' => 14.5, 'percentil' => 50],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 1,'peso' => 16.5, 'percentil' => 85],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 1,'peso' => 18.3, 'percentil' => 97],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 1,'peso' => 11.7, 'percentil' => 3],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 1,'peso' => 12.9, 'percentil' => 15],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 1,'peso' => 14.7, 'percentil' => 50],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 1,'peso' => 16.7, 'percentil' => 85],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 1,'peso' => 18.5, 'percentil' => 97],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 1,'peso' => 11.8, 'percentil' => 3],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 1,'peso' => 13.1, 'percentil' => 15],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 1,'peso' => 14.8, 'percentil' => 50],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 1,'peso' => 16.9, 'percentil' => 85],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 1,'peso' => 18.7, 'percentil' => 97],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 1,'peso' => 11.9, 'percentil' => 3],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 1,'peso' => 13.2, 'percentil' => 15],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 1,'peso' => 15.0, 'percentil' => 50],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 1,'peso' => 17.1, 'percentil' => 85],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 1,'peso' => 19.0, 'percentil' => 97],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 1,'peso' => 12.1, 'percentil' => 3],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 1,'peso' => 13.4, 'percentil' => 15],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 1,'peso' => 15.2, 'percentil' => 50],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 1,'peso' => 17.3, 'percentil' => 85],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 1,'peso' => 19.2, 'percentil' => 97],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 1,'peso' => 12.2, 'percentil' => 3],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 1,'peso' => 13.5, 'percentil' => 15],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 1,'peso' => 15.3, 'percentil' => 50],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 1,'peso' => 17.5, 'percentil' => 85],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 1,'peso' => 19.4, 'percentil' => 97],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 1,'peso' => 12.3, 'percentil' => 3],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 1,'peso' => 13.6, 'percentil' => 15],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 1,'peso' => 15.5, 'percentil' => 50],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 1,'peso' => 17.7, 'percentil' => 85],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 1,'peso' => 19.7, 'percentil' => 97],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 1,'peso' => 12.4, 'percentil' => 3],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 1,'peso' => 13.8, 'percentil' => 15],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 1,'peso' => 15.7, 'percentil' => 50],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 1,'peso' => 17.9, 'percentil' => 85],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 1,'peso' => 19.9, 'percentil' => 97],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 1,'peso' => 12.5, 'percentil' => 3],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 1,'peso' => 13.9, 'percentil' => 15],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 1,'peso' => 15.8, 'percentil' => 50],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 1,'peso' => 18.1, 'percentil' => 85],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 1,'peso' => 20.1, 'percentil' => 97],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 1,'peso' => 12.7, 'percentil' => 3],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 1,'peso' => 14.1, 'percentil' => 15],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 1,'peso' => 16.0, 'percentil' => 50],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 1,'peso' => 18.3, 'percentil' => 85],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 1,'peso' => 20.4, 'percentil' => 97],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 1,'peso' => 12.8, 'percentil' => 3],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 1,'peso' => 14.2, 'percentil' => 15],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 1,'peso' => 16.2, 'percentil' => 50],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 1,'peso' => 18.5, 'percentil' => 85],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 1,'peso' => 20.6, 'percentil' => 97],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 1,'peso' => 12.9, 'percentil' => 3],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 1,'peso' => 14.3, 'percentil' => 15],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 1,'peso' => 16.3, 'percentil' => 50],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 1,'peso' => 18.7, 'percentil' => 85],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 1,'peso' => 20.9, 'percentil' => 97],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 1,'peso' => 13.0, 'percentil' => 3],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 1,'peso' => 14.5, 'percentil' => 15],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 1,'peso' => 16.5, 'percentil' => 50],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 1,'peso' => 18.9, 'percentil' => 85],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 1,'peso' => 21.1, 'percentil' => 97],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 1,'peso' => 13.1, 'percentil' => 3],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 1,'peso' => 14.6, 'percentil' => 15],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 1,'peso' => 16.7, 'percentil' => 50],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 1,'peso' => 19.1, 'percentil' => 85],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 1,'peso' => 21.3, 'percentil' => 97],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 1,'peso' => 13.3, 'percentil' => 3],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 1,'peso' => 14.7, 'percentil' => 15],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 1,'peso' => 16.8, 'percentil' => 50],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 1,'peso' => 19.3, 'percentil' => 85],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 1,'peso' => 21.6, 'percentil' => 97],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 1,'peso' => 13.4, 'percentil' => 3],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 1,'peso' => 14.9, 'percentil' => 15],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 1,'peso' => 17.0, 'percentil' => 50],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 1,'peso' => 19.5, 'percentil' => 85],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 1,'peso' => 21.8, 'percentil' => 97],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 1,'peso' => 13.5, 'percentil' => 3],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 1,'peso' => 15.0, 'percentil' => 15],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 1,'peso' => 17.2, 'percentil' => 50],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 1,'peso' => 19.7, 'percentil' => 85],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 1,'peso' => 22.1, 'percentil' => 97],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 1,'peso' => 13.6, 'percentil' => 3],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 1,'peso' => 15.2, 'percentil' => 15],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 1,'peso' => 17.3, 'percentil' => 50],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 1,'peso' => 19.9, 'percentil' => 85],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 1,'peso' => 22.3, 'percentil' => 97],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 1,'peso' => 13.7, 'percentil' => 3],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 1,'peso' => 15.3, 'percentil' => 15],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 1,'peso' => 17.5, 'percentil' => 50],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 1,'peso' => 20.1, 'percentil' => 85],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 1,'peso' => 22.5, 'percentil' => 97],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 1,'peso' => 13.8, 'percentil' => 3],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 1,'peso' => 15.4, 'percentil' => 15],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 1,'peso' => 17.7, 'percentil' => 50],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 1,'peso' => 20.3, 'percentil' => 85],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 1,'peso' => 22.8, 'percentil' => 97],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 1,'peso' => 13.9, 'percentil' => 3],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 1,'peso' => 15.6, 'percentil' => 15],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 1,'peso' => 17.8, 'percentil' => 50],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 1,'peso' => 20.5, 'percentil' => 85],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 1,'peso' => 23.0, 'percentil' => 97],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 1,'peso' => 14.1, 'percentil' => 3],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 1,'peso' => 15.7, 'percentil' => 15],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 1,'peso' => 18.0, 'percentil' => 50],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 1,'peso' => 20.7, 'percentil' => 85],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 1,'peso' => 23.3, 'percentil' => 97],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 1,'peso' => 14.2, 'percentil' => 3],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 1,'peso' => 15.8, 'percentil' => 15],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 1,'peso' => 18.2, 'percentil' => 50],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 1,'peso' => 20.9, 'percentil' => 85],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 1,'peso' => 23.5, 'percentil' => 97],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 1,'peso' => 14.3, 'percentil' => 3],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 1,'peso' => 16.0, 'percentil' => 15],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 1,'peso' => 18.3, 'percentil' => 50],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 1,'peso' => 21.1, 'percentil' => 85],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 1,'peso' => 23.8, 'percentil' => 97],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 2,'peso' => 2.4, 'percentil' => 3],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 2,'peso' => 2.8, 'percentil' => 15],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 2,'peso' => 3.2, 'percentil' => 50],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 2,'peso' => 3.7, 'percentil' => 85],

        ['year' => 0 ,'meses' => 0 ,'sexo' => 2,'peso' => 4.2, 'percentil' => 97],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 2,'peso' => 3.2, 'percentil' => 3],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 2,'peso' => 3.6, 'percentil' => 15],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 2,'peso' => 4.2, 'percentil' => 50],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 2,'peso' => 4.8, 'percentil' => 85],

        ['year' => 0 ,'meses' => 1 ,'sexo' => 2,'peso' => 5.4, 'percentil' => 97],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 2,'peso' => 4.0, 'percentil' => 3],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 2,'peso' => 4.5, 'percentil' => 15],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 2,'peso' => 5.1, 'percentil' => 50],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 2,'peso' => 5.9, 'percentil' => 85],

        ['year' => 0 ,'meses' => 2 ,'sexo' => 2,'peso' => 6.5, 'percentil' => 97],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 2,'peso' => 4.6, 'percentil' => 3],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 2,'peso' => 5.1, 'percentil' => 15],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 2,'peso' => 5.8, 'percentil' => 50],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 2,'peso' => 6.7, 'percentil' => 85],

        ['year' => 0 ,'meses' => 3 ,'sexo' => 2,'peso' => 7.4, 'percentil' => 97],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 2,'peso' => 5.1, 'percentil' => 3],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 2,'peso' => 5.6, 'percentil' => 15],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 2,'peso' => 6.4, 'percentil' => 50],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 2,'peso' => 7.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 4 ,'sexo' => 2,'peso' => 8.1, 'percentil' => 97],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 2,'peso' => 5.5, 'percentil' => 3],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 2,'peso' => 6.1, 'percentil' => 15],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 2,'peso' => 6.9, 'percentil' => 50],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 2,'peso' => 7.8, 'percentil' => 85],

        ['year' => 0 ,'meses' => 5 ,'sexo' => 2,'peso' => 8.7, 'percentil' => 97],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 2,'peso' => 5.8, 'percentil' => 3],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 2,'peso' => 6.4, 'percentil' => 15],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 2,'peso' => 7.3, 'percentil' => 50],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 2,'peso' => 8.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 6 ,'sexo' => 2,'peso' => 9.2, 'percentil' => 97],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 2,'peso' => 6.1, 'percentil' => 3],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 2,'peso' => 6.7, 'percentil' => 15],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 2,'peso' => 7.6, 'percentil' => 50],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 2,'peso' => 8.7, 'percentil' => 85],

        ['year' => 0 ,'meses' => 7 ,'sexo' => 2,'peso' => 9.6, 'percentil' => 97],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 2,'peso' => 6.3, 'percentil' => 3],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 2,'peso' => 7.0, 'percentil' => 15],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 2,'peso' => 7.9, 'percentil' => 50],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 2,'peso' => 9.0, 'percentil' => 85],

        ['year' => 0 ,'meses' => 8 ,'sexo' => 2,'peso' => 10.0, 'percentil' => 97],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 2,'peso' => 6.6, 'percentil' => 3],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 2,'peso' => 7.3, 'percentil' => 15],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 2,'peso' => 8.2, 'percentil' => 50],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 2,'peso' => 9.3, 'percentil' => 85],

        ['year' => 0 ,'meses' => 9 ,'sexo' => 2,'peso' => 10.4, 'percentil' => 97],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 2,'peso' => 6.8, 'percentil' => 3],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 2,'peso' => 7.5, 'percentil' => 15],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 2,'peso' => 8.5, 'percentil' => 50],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 2,'peso' => 9.6, 'percentil' => 85],

        ['year' => 0 ,'meses' => 10 ,'sexo' => 2,'peso' => 10.7, 'percentil' => 97],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 2,'peso' => 7.0, 'percentil' => 3],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 2,'peso' => 7.7, 'percentil' => 15],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 2,'peso' => 8.7, 'percentil' => 50],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 2,'peso' => 9.9, 'percentil' => 85],

        ['year' => 0 ,'meses' => 11 ,'sexo' => 2,'peso' => 11.0, 'percentil' => 97],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 2,'peso' => 7.1, 'percentil' => 3],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 2,'peso' => 7.9, 'percentil' => 15],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 2,'peso' => 8.9, 'percentil' => 50],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 2,'peso' => 10.2, 'percentil' => 85],

        ['year' => 1 ,'meses' => 0 ,'sexo' => 2,'peso' => 11.3, 'percentil' => 97],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 2,'peso' => 7.3, 'percentil' => 3],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 2,'peso' => 8.1, 'percentil' => 15],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 2,'peso' => 9.2, 'percentil' => 50],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 2,'peso' => 10.4, 'percentil' => 85],

        ['year' => 1 ,'meses' => 1 ,'sexo' => 2,'peso' => 11.6, 'percentil' => 97],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 2,'peso' => 7.5, 'percentil' => 3],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 2,'peso' => 8.3, 'percentil' => 15],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 2,'peso' => 9.4, 'percentil' => 50],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 2,'peso' => 10.7, 'percentil' => 85],

        ['year' => 1 ,'meses' => 2 ,'sexo' => 2,'peso' => 11.9, 'percentil' => 97],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 2,'peso' => 7.7, 'percentil' => 3],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 2,'peso' => 8.5, 'percentil' => 15],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 2,'peso' => 9.6, 'percentil' => 50],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 2,'peso' => 10.9, 'percentil' => 85],

        ['year' => 1 ,'meses' => 3 ,'sexo' => 2,'peso' => 12.2, 'percentil' => 97],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 2,'peso' => 7.8, 'percentil' => 3],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 2,'peso' => 8.7, 'percentil' => 15],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 2,'peso' => 9.8, 'percentil' => 50],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 2,'peso' => 11.2, 'percentil' => 85],

        ['year' => 1 ,'meses' => 4 ,'sexo' => 2,'peso' => 12.5, 'percentil' => 97],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 2,'peso' => 8.0, 'percentil' => 3],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 2,'peso' => 8.8, 'percentil' => 15],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 2,'peso' => 10.0, 'percentil' => 50],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 2,'peso' => 11.4, 'percentil' => 85],

        ['year' => 1 ,'meses' => 5 ,'sexo' => 2,'peso' => 12.7, 'percentil' => 97],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 2,'peso' => 8.2, 'percentil' => 3],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 2,'peso' => 9.0, 'percentil' => 15],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 2,'peso' => 10.2, 'percentil' => 50],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 2,'peso' => 11.6, 'percentil' => 85],

        ['year' => 1 ,'meses' => 6 ,'sexo' => 2,'peso' => 13.0, 'percentil' => 97],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 2,'peso' => 8.3, 'percentil' => 3],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 2,'peso' => 9.2, 'percentil' => 15],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 2,'peso' => 10.4, 'percentil' => 50],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 2,'peso' => 11.9, 'percentil' => 85],

        ['year' => 1 ,'meses' => 7 ,'sexo' => 2,'peso' => 13.3, 'percentil' => 97],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 2,'peso' => 8.5, 'percentil' => 3],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 2,'peso' => 9.4, 'percentil' => 15],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 2,'peso' => 10.6, 'percentil' => 50],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 2,'peso' => 12.1, 'percentil' => 85],

        ['year' => 1 ,'meses' => 8 ,'sexo' => 2,'peso' => 13.5, 'percentil' => 97],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 2,'peso' => 8.7, 'percentil' => 3],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 2,'peso' => 9.6, 'percentil' => 15],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 2,'peso' => 10.9, 'percentil' => 50],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 2,'peso' => 12.4, 'percentil' => 85],

        ['year' => 1 ,'meses' => 9 ,'sexo' => 2,'peso' => 13.8, 'percentil' => 97],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 2,'peso' => 8.8, 'percentil' => 3],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 2,'peso' => 9.8, 'percentil' => 15],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 2,'peso' => 11.1, 'percentil' => 50],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 2,'peso' => 12.6, 'percentil' => 85],

        ['year' => 1 ,'meses' => 10 ,'sexo' => 2,'peso' => 14.1, 'percentil' => 97],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 2,'peso' => 9.0, 'percentil' => 3],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 2,'peso' => 9.9, 'percentil' => 15],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 2,'peso' => 11.3, 'percentil' => 50],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 2,'peso' => 12.8, 'percentil' => 85],

        ['year' => 1 ,'meses' => 11 ,'sexo' => 2,'peso' => 14.3, 'percentil' => 97],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 2,'peso' => 9.2, 'percentil' => 3],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 2,'peso' => 10.1, 'percentil' => 15],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 2,'peso' => 11.5, 'percentil' => 50],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 2,'peso' => 13.1, 'percentil' => 85],

        ['year' => 2 ,'meses' => 0 ,'sexo' => 2,'peso' => 14.6, 'percentil' => 97],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 2,'peso' => 9.3, 'percentil' => 3],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 2,'peso' => 10.3, 'percentil' => 15],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 2,'peso' => 11.7, 'percentil' => 50],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 2,'peso' => 13.3, 'percentil' => 85],

        ['year' => 2 ,'meses' => 1 ,'sexo' => 2,'peso' => 14.9, 'percentil' => 97],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 2,'peso' => 9.5, 'percentil' => 3],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 2,'peso' => 10.5, 'percentil' => 15],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 2,'peso' => 11.9, 'percentil' => 50],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 2,'peso' => 13.6, 'percentil' => 85],

        ['year' => 2 ,'meses' => 2 ,'sexo' => 2,'peso' => 15.2, 'percentil' => 97],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 2,'peso' => 9.6, 'percentil' => 3],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 2,'peso' => 10.7, 'percentil' => 15],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 2,'peso' => 12.1, 'percentil' => 50],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 2,'peso' => 13.8, 'percentil' => 85],

        ['year' => 2 ,'meses' => 3 ,'sexo' => 2,'peso' => 15.4, 'percentil' => 97],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 2,'peso' => 9.8, 'percentil' => 3],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 2,'peso' => 10.8, 'percentil' => 15],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 2,'peso' => 12.3, 'percentil' => 50],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 2,'peso' => 14.0, 'percentil' => 85],

        ['year' => 2 ,'meses' => 4 ,'sexo' => 2,'peso' => 15.7, 'percentil' => 97],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 2,'peso' => 10.0, 'percentil' => 3],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 2,'peso' => 11.0, 'percentil' => 15],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 2,'peso' => 12.5, 'percentil' => 50],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 2,'peso' => 14.3, 'percentil' => 85],

        ['year' => 2 ,'meses' => 5 ,'sexo' => 2,'peso' => 16.0, 'percentil' => 97],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 2,'peso' => 10.1, 'percentil' => 3],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 2,'peso' => 11.2, 'percentil' => 15],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 2,'peso' => 12.7, 'percentil' => 50],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 2,'peso' => 14.5, 'percentil' => 85],

        ['year' => 2 ,'meses' => 6 ,'sexo' => 2,'peso' => 16.2, 'percentil' => 97],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 2,'peso' => 10.3, 'percentil' => 3],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 2,'peso' => 11.3, 'percentil' => 15],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 2,'peso' => 12.9, 'percentil' => 50],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 2,'peso' => 14.7, 'percentil' => 85],

        ['year' => 2 ,'meses' => 7 ,'sexo' => 2,'peso' => 16.5, 'percentil' => 97],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 2,'peso' => 10.4, 'percentil' => 3],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 2,'peso' => 11.5, 'percentil' => 15],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 2,'peso' => 13.1, 'percentil' => 50],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 2,'peso' => 15.0, 'percentil' => 85],

        ['year' => 2 ,'meses' => 8 ,'sexo' => 2,'peso' => 16.8, 'percentil' => 97],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 2,'peso' => 10.5, 'percentil' => 3],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 2,'peso' => 11.7, 'percentil' => 15],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 2,'peso' => 13.3, 'percentil' => 50],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 2,'peso' => 15.2, 'percentil' => 85],

        ['year' => 2 ,'meses' => 9 ,'sexo' => 2,'peso' => 17.0, 'percentil' => 97],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 2,'peso' => 10.7, 'percentil' => 3],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 2,'peso' => 11.8, 'percentil' => 15],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 2,'peso' => 13.5, 'percentil' => 50],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 2,'peso' => 15.4, 'percentil' => 85],

        ['year' => 2 ,'meses' => 10 ,'sexo' => 2,'peso' => 17.3, 'percentil' => 97],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 2,'peso' => 10.8, 'percentil' => 3],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 2,'peso' => 12.0, 'percentil' => 15],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 2,'peso' => 13.7, 'percentil' => 50],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 2,'peso' => 15.7, 'percentil' => 85],

        ['year' => 2 ,'meses' => 11 ,'sexo' => 2,'peso' => 17.6, 'percentil' => 97],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 2,'peso' => 11.0, 'percentil' => 3],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 2,'peso' => 12.1, 'percentil' => 15],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 2,'peso' => 13.9, 'percentil' => 50],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 2,'peso' => 15.9, 'percentil' => 85],

        ['year' => 3 ,'meses' => 0 ,'sexo' => 2,'peso' => 17.8, 'percentil' => 97],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 2,'peso' => 11.1, 'percentil' => 3],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 2,'peso' => 12.3, 'percentil' => 15],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 2,'peso' => 14.0, 'percentil' => 50],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 2,'peso' => 16.1, 'percentil' => 85],

        ['year' => 3 ,'meses' => 1 ,'sexo' => 2,'peso' => 18.1, 'percentil' => 97],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 2,'peso' => 11.2, 'percentil' => 3],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 2,'peso' => 12.5, 'percentil' => 15],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 2,'peso' => 14.2, 'percentil' => 50],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 2,'peso' => 16.3, 'percentil' => 85],

        ['year' => 3 ,'meses' => 2 ,'sexo' => 2,'peso' => 18.4, 'percentil' => 97],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 2,'peso' => 11.4, 'percentil' => 3],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 2,'peso' => 12.6, 'percentil' => 15],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 2,'peso' => 14.4, 'percentil' => 50],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 2,'peso' => 16.6, 'percentil' => 85],

        ['year' => 3 ,'meses' => 3 ,'sexo' => 2,'peso' => 18.6, 'percentil' => 97],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 2,'peso' => 11.5, 'percentil' => 3],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 2,'peso' => 12.8, 'percentil' => 15],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 2,'peso' => 14.6, 'percentil' => 50],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 2,'peso' => 16.8, 'percentil' => 85],

        ['year' => 3 ,'meses' => 4 ,'sexo' => 2,'peso' => 18.9, 'percentil' => 97],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 2,'peso' => 11.6, 'percentil' => 3],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 2,'peso' => 12.9, 'percentil' => 15],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 2,'peso' => 14.8, 'percentil' => 50],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 2,'peso' => 17.0, 'percentil' => 85],

        ['year' => 3 ,'meses' => 5 ,'sexo' => 2,'peso' => 19.2, 'percentil' => 97],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 2,'peso' => 11.8, 'percentil' => 3],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 2,'peso' => 13.1, 'percentil' => 15],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 2,'peso' => 15.0, 'percentil' => 50],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 2,'peso' => 17.3, 'percentil' => 85],

        ['year' => 3 ,'meses' => 6 ,'sexo' => 2,'peso' => 19.5, 'percentil' => 97],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 2,'peso' => 11.9, 'percentil' => 3],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 2,'peso' => 13.2, 'percentil' => 15],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 2,'peso' => 15.2, 'percentil' => 50],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 2,'peso' => 17.5, 'percentil' => 85],

        ['year' => 3 ,'meses' => 7 ,'sexo' => 2,'peso' => 19.7, 'percentil' => 97],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 2,'peso' => 12.0, 'percentil' => 3],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 2,'peso' => 13.4, 'percentil' => 15],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 2,'peso' => 15.3, 'percentil' => 50],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 2,'peso' => 17.7, 'percentil' => 85],

        ['year' => 3 ,'meses' => 8 ,'sexo' => 2,'peso' => 20.0, 'percentil' => 97],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 2,'peso' => 12.1, 'percentil' => 3],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 2,'peso' => 13.5, 'percentil' => 15],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 2,'peso' => 15.5, 'percentil' => 50],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 2,'peso' => 17.9, 'percentil' => 85],

        ['year' => 3 ,'meses' => 9 ,'sexo' => 2,'peso' => 20.3, 'percentil' => 97],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 2,'peso' => 12.3, 'percentil' => 3],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 2,'peso' => 13.7, 'percentil' => 15],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 2,'peso' => 15.7, 'percentil' => 50],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 2,'peso' => 18.2, 'percentil' => 85],

        ['year' => 3 ,'meses' => 10 ,'sexo' => 2,'peso' => 20.6, 'percentil' => 97],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 2,'peso' => 12.4, 'percentil' => 3],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 2,'peso' => 13.8, 'percentil' => 15],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 2,'peso' => 15.9, 'percentil' => 50],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 2,'peso' => 18.4, 'percentil' => 85],

        ['year' => 3 ,'meses' => 11 ,'sexo' => 2,'peso' => 20.8, 'percentil' => 97],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 2,'peso' => 12.5, 'percentil' => 3],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 2,'peso' => 14.0, 'percentil' => 15],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 2,'peso' => 16.1, 'percentil' => 50],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 2,'peso' => 18.6, 'percentil' => 85],

        ['year' => 4 ,'meses' => 0 ,'sexo' => 2,'peso' => 21.1, 'percentil' => 97],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 2,'peso' => 12.6, 'percentil' => 3],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 2,'peso' => 14.1, 'percentil' => 15],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 2,'peso' => 16.3, 'percentil' => 50],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 2,'peso' => 18.9, 'percentil' => 85],

        ['year' => 4 ,'meses' => 1 ,'sexo' => 2,'peso' => 21.4, 'percentil' => 97],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 2,'peso' => 12.8, 'percentil' => 3],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 2,'peso' => 14.3, 'percentil' => 15],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 2,'peso' => 16.4, 'percentil' => 50],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 2,'peso' => 19.1, 'percentil' => 85],

        ['year' => 4 ,'meses' => 2 ,'sexo' => 2,'peso' => 21.7, 'percentil' => 97],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 2,'peso' => 12.9, 'percentil' => 3],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 2,'peso' => 14.4, 'percentil' => 15],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 2,'peso' => 16.6, 'percentil' => 50],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 2,'peso' => 19.3, 'percentil' => 85],

        ['year' => 4 ,'meses' => 3 ,'sexo' => 2,'peso' => 22.0, 'percentil' => 97],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 2,'peso' => 13.0, 'percentil' => 3],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 2,'peso' => 14.5, 'percentil' => 15],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 2,'peso' => 16.8, 'percentil' => 50],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 2,'peso' => 19.5, 'percentil' => 85],

        ['year' => 4 ,'meses' => 4 ,'sexo' => 2,'peso' => 22.2, 'percentil' => 97],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 2,'peso' => 13.1, 'percentil' => 3],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 2,'peso' => 14.7, 'percentil' => 15],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 2,'peso' => 17.0, 'percentil' => 50],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 2,'peso' => 19.8, 'percentil' => 85],

        ['year' => 4 ,'meses' => 5 ,'sexo' => 2,'peso' => 22.5, 'percentil' => 97],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 2,'peso' => 13.2, 'percentil' => 3],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 2,'peso' => 14.8, 'percentil' => 15],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 2,'peso' => 17.2, 'percentil' => 50],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 2,'peso' => 20.0, 'percentil' => 85],

        ['year' => 4 ,'meses' => 6 ,'sexo' => 2,'peso' => 22.8, 'percentil' => 97],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 2,'peso' => 13.4, 'percentil' => 3],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 2,'peso' => 15.0, 'percentil' => 15],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 2,'peso' => 17.3, 'percentil' => 50],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 2,'peso' => 20.2, 'percentil' => 85],

        ['year' => 4 ,'meses' => 7 ,'sexo' => 2,'peso' => 23.1, 'percentil' => 97],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 2,'peso' => 13.5, 'percentil' => 3],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 2,'peso' => 15.1, 'percentil' => 15],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 2,'peso' => 17.5, 'percentil' => 50],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 2,'peso' => 20.4, 'percentil' => 85],

        ['year' => 4 ,'meses' => 8 ,'sexo' => 2,'peso' => 23.3, 'percentil' => 97],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 2,'peso' => 13.6, 'percentil' => 3],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 2,'peso' => 15.3, 'percentil' => 15],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 2,'peso' => 17.7, 'percentil' => 50],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 2,'peso' => 20.7, 'percentil' => 85],

        ['year' => 4 ,'meses' => 9 ,'sexo' => 2,'peso' => 23.6, 'percentil' => 97],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 2,'peso' => 13.7, 'percentil' => 3],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 2,'peso' => 15.4, 'percentil' => 15],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 2,'peso' => 17.9, 'percentil' => 50],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 2,'peso' => 20.9, 'percentil' => 85],

        ['year' => 4 ,'meses' => 10 ,'sexo' => 2,'peso' => 23.9, 'percentil' => 97],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 2,'peso' => 13.8, 'percentil' => 3],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 2,'peso' => 15.5, 'percentil' => 15],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 2,'peso' => 18.0, 'percentil' => 50],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 2,'peso' => 21.1, 'percentil' => 85],

        ['year' => 4 ,'meses' => 11 ,'sexo' => 2,'peso' => 24.2, 'percentil' => 97],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 2,'peso' => 14.0, 'percentil' => 3],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 2,'peso' => 15.7, 'percentil' => 15],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 2,'peso' => 18.2, 'percentil' => 50],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 2,'peso' => 21.3, 'percentil' => 85],

        ['year' => 5 ,'meses' => 0 ,'sexo' => 2,'peso' => 24.4, 'percentil' => 97]
        ];
        foreach($pesoPercentil as $pPercentil){
            percentilPeso::insert($pPercentil);
        }
    }
}
