<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'family' => 'Иванов',
                'name' => 'Иван',
                'patronymic' => 'Иванович',
                'email' => 'ivanov@mail.ru',
                'login' => 'admin',
                'password' => Hash::make('admin'),
                'role_id' => '0',
            ],
            [
                'family' => 'Иванов',
                'name' => 'Александр',
                'patronymic' => 'Сергеевич',
                'email' => 'alexander_ivanov@yandex.ru',
                'login' => 'ivan_alex',
                'password' => Hash::make('AlexS_Iva1213'),
                'role_id' => '1',
                ],
                [
                'family' => 'Смирнова',
                'name' => 'Елена',
                'patronymic' => 'Владимировна',
                'email' => 'elenasmirnova2005@mail.ru',
                'login' => 'elenasmirnova',
                'password' => Hash::make('ES11_Smirnova'),
                'role_id' => '1',
                ],
                [
                'family' => 'Васильев',
                'name' => 'Константин',
                'patronymic' => 'Николаевич',
                'email' => 'konstantin_vasiliev@mail.ru',
                'login' => 'vasil_konst',
                'password' => Hash::make('KonVasiliev32'),
                'role_id' => '1',
                ],
                [
                'family' => 'Белова',
                'name' => 'Мария',
                'patronymic' => 'Сергеевна',
                'email' => 'maria_belova@gmail.com',
                'login' => 'mbelova',
                'password' => Hash::make('MBelova_07'),
                'role_id' => '1',
                ],
                [
                'family' => 'Морозов',
                'name' => 'Сергей',
                'patronymic' => 'Иванович',
                'email' => 'si_morozov@gmail.com',
                'login' => 'moroz_si',
                'password' => Hash::make('Morozov_IS'),
                'role_id' => '1',
                ],
                [
                'family' => 'Громова',
                'name' => 'Анна',
                'patronymic' => 'Ивановна',
                'email' => 'gromova_anna@yandex.ru',
                'login' => 'annagromova',
                'password' => Hash::make('AGromova_19'),
                'role_id' => '1',
                ],
                [
                'family' => 'Орлова',
                'name' => 'Татьяна',
                'patronymic' => 'Викторовна',
                'email' => 'tatyana_orlova@gmail.com',
                'login' => 'tatiana_orlova',
                'password' => Hash::make('TOrlova_63'),
                'role_id' => '1',
                ],
                [
                'family' => 'Яковлев',
                'name' => 'Борис',
                'patronymic' => 'Сергеевич',
                'email' => 'boris_yakovlev@mail.ru',
                'login' => 'boryak',
                'password' => Hash::make('BYakovlev'),
                'role_id' => '1',
                ],
                [
                'family' => 'Кузнецов',
                'name' => 'Николай',
                'patronymic' => 'Петрович',
                'email' => 'nikolai_kuznetsov@yandex.ru',
                'login' => 'nkuznetsov',
                'password' => Hash::make('NKuznetsov_95'),
                'role_id' => '1',
                ],
                [
                'family' => 'Полякова',
                'name' => 'Александра',
                'patronymic' => 'Евгеньевна',
                'email' => 'aleksandra_polyakova@gmail.com',
                'login' => 'poly_a',
                'password' => Hash::make('APolya_16'),
                'role_id' => '1',
                ],
                [
                'family' => 'Алексеев',
                'name' => 'Роман',
                'patronymic' => 'Геннадьевич',
                'email' => 'roman_alekseev@company.com',
                'login' => 'ralekseev',
                'password' => Hash::make('RAlekseev_68'),
                'role_id' => '1',
                ],
                [
                'family' => 'Борисова',
                'name' => 'Ольга',
                'patronymic' => 'Викторовна',
                'email' => 'borisova_olga@gmail.com',
                'login' => 'oborisova',
                'password' => Hash::make('OBorisova_23'),
                'role_id' => '1',
                ],
                [
                'family' => 'Попов',
                'name' => 'Игорь',
                'patronymic' => 'Сергеевич',
                'email' => 'igor_popov@gmail.com',
                'login' => 'igorp',
                'password' => Hash::make('IPopov_94'),
                'role_id' => '1',
                ],
                [
                'family' => 'Киселёва',
                'name' => 'Екатерина',
                'patronymic' => 'Владимировна',
                'email' => 'ekaterina_kiseleva@mail.ru',
                'login' => 'katya_kiss',
                'password' => Hash::make('EKissKiseleva_01'),
                'role_id' => '1',
                ],
                [
                'family' => 'Егоров',
                'name' => 'Семён',
                'patronymic' => 'Александрович',
                'email' => 'sa_egorov@mail.ru',
                'login' => 'semeg_orov',
                'password' => Hash::make('SAEgorov_56'),
                'role_id' => '1',
                ],
                
        ]);        
    }
}
