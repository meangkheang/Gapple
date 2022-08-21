<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'username' => $this->faker->userName(),
            'title' => function(){
                $titles = array('Junior Laravel Developer','Senior C# Dev','PHP Developer','HTML,CSS,JS','ASP.Net with SQL Dev','React Dev','Junior Flutter');

                $randValue = rand(0,count($titles)-1);

                return $titles[$randValue];
            },
            'email' =>$this->faker->email(),
            'location' =>$this->faker->city(),
            'company' => $this->faker->company(),
            'website' => $this->faker->url(),
            'description' =>$this->faker->paragraph(3),
            'hero' => $this->faker->imageUrl()
        ];
    }


}
