<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\en_NG\Person;
use Faker\Generator as Faker;
use Faker\Provider\en_NG\Person as NigerianPersonProvider;
use Faker\Provider\en_NG\PhoneNumber as NigerianPhoneNumberProvider;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CitizenDetails>
 */
class CitizenDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new NigerianPersonProvider($faker));
        $faker->addProvider(new NigerianPhoneNumberProvider($faker));


        $firstName = $faker->firstName;
        $middleName = $faker->firstName;
        $surname = $faker->lastName;

        $gender = $faker->randomElement(['male', 'female']);
        $height = $faker->randomFloat(2, 1.50, 2.00);
        $dateOfBirth = $faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d');
        $phoneNumber = $faker->unique()->e164PhoneNumber; // Nigerian phone number
        // Array of Nigerian states
        $nigerianStates = [
            'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno',
            'Cross River', 'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa',
            'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger',
            'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau', 'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara',
        ];

        $state = $faker->randomElement($nigerianStates);
//        $passportNumber = $faker->bothify('????????????'); // 12 characters of random letters and numbers
        $prefix = $faker->randomLetter . $faker->randomLetter; // Two random letters
        $digits = $faker->numerify('########'); // Eight random digits

        $combinedValue = $prefix . $digits;




        return [
            'nin' => $faker->numberBetween(1000000000, 9999999999),
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'surname' => $surname,
            'full_name' => "$firstName $middleName $surname",
            'gender' => $gender,
            'height' => $height,
            'date_of_birth' => $dateOfBirth,
            'email_address' => $faker->email(),
            'phone_number' => $phoneNumber,
            'address' => $faker->streetAddress,
            'state_of_origin' => $state,
//            'pvc_id' => $faker->numberBetween(1000000000, 9999999999),
            'pvc_id' => '',
            'int_passport_no' => $combinedValue,
            'driver_license_id' => $faker->numberBetween(1000000000, 9999999999),
            'driver_license_id_exp' => $faker->date(),
            'int_passport_no_exp' => $faker->date(),
            'pvc_id_exp' => '',
//            'pvc_id_exp' => $faker->date(),
        ];
    }
}
