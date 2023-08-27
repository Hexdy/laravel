<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I', 'B']); //Faker es un jugador de lol pero ademas de eso es un generador de datos para dummies
        $name = $type == 'I' ? $this->faker->name() : $this->faker->company(); //Si type es I dara un resultado sino otro, sencillo
        $states = [
            'Alabama' => 'Sweet Home Alabama',
            'Alaska' => 'North to Alaska',
            'Arizona' => 'By the Time I Get to Phoenix',
            'Arkansas' => 'Arkansas Traveler',
            'California' => "California Dreamin'",
            'Colorado' => 'Rocky Mountain High',
            'Connecticut' => 'My Little Connecticut',
            'Delaware' => 'Delaware Slide',
            'Florida' => 'Margaritaville',
            'Georgia' => 'Georgia on My Mind',
            'Hawaii' => 'Blue Hawaii',
            'Idaho' => 'Take Me Back to Idaho',
            'Illinois' => 'Sweet Illinois',
            'Indiana' => 'Back Home Again in Indiana',
            'Iowa' => 'Iowa Stubborn',
            'Kansas' => 'Dust in the Wind',
            'Kentucky' => 'Blue Moon of Kentucky',
            'Louisiana' => 'Louisiana Saturday Night',
            'Maine' => 'The Maine Song',
            'Maryland' => 'Maryland, My Maryland',
            'Massachusetts' => 'Road Runner',
            'Michigan' => 'Detroit Rock City',
            'Minnesota' => 'Jingle Bells (the one by The Singing Dogs)',
            'Mississippi' => 'Mississippi Queen',
            'Missouri' => 'Missouri Waltz',
            'Montana' => 'Meet Me in Montana',
            'Nebraska' => 'Omaha',
            'Nevada' => 'Viva Las Vegas',
            'New Hampshire' => 'New Hampshire Naturally',
            'New Jersey' => 'Born to Run',
            'New Mexico' => 'New Mexico Song',
            'New York' => 'New York, New York',
            'North Carolina' => 'Carolina in the Morning',
            'North Dakota' => 'North Dakota Moon',
            'Ohio' => 'Beautiful Ohio',
            'Oklahoma' => 'Oklahoma Hills',
            'Oregon' => 'Pacific Northwest Blues',
            'Pennsylvania' => 'Pennsylvania Polka',
            'Rhode Island' => 'Rhode Island Is Famous for You',
            'South Carolina' => 'Carolina Girls',
            'South Dakota' => "I've Got a Gal in Kalamazoo',
            'Tennessee' => 'Tennessee Whiskey",
            'Texas' => "All My Ex\'s Live in Texas",
            'Utah' => 'Salt Lake City',
            'Vermont' => 'Moonlight in Vermont',
            'Virginia' => 'Carry Me Back to Old Virginny',
            'Washington' => 'Washington Square',
            'West Virginia' => 'Take Me Home, Country Roads',
            'Wisconsin' => 'On Wisconsin',
            'Wyoming' => 'Wyoming Cowboy'
        ];

        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->randomElement(array_values($states)),
            'postal' => $this->faker->postCode()
        ];
    }
}
