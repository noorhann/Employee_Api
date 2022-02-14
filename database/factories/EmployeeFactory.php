<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{

    public function definition()
    {
        return [

            'name' => $this->faker->name(),
            'birthdate' => $this->faker->dateTimeBetween( '-30 years', '-20 years'),
            'salary' =>$this->faker->numberBetween(5000,20000),
            'postion'=>$this->faker->randomElement(['Backend developer' , 'Frontend developer' , 'Mobile developer' , 'Network engineer']),
            'department' => 'IT department',
            'phone' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->address(),
            'gender'=>$this->faker->randomElement(['male','female']),
            'nationality' => $this->faker->randomElement(['Egyption','American']),
            'image' => $this->faker->imageUrl(640, 480),
            'marital-Status' => $this->faker->randomElement(['single','married' , 'divorced']),
            'religion' => $this->faker->randomElement(['Islam','Christianity']),
            'Bank-name' => $this->faker->randomElement(['HSBC','Banque Misr','Banque du Caire']),
            'Bank_accountNo' => $this->faker->creditCardNumber(),

        ];
    }
}
