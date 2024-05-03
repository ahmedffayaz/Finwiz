<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'i_e_text' => '(e.g., saving for a vacation, paying off debt)',
                'question' => "What are some things you're looking to achieve in the next 1-2 years? ",
                'options' => [
                    'Save for a vacation',
                    'Pay off credit card debt',
                    'Build an emergency Fund',
                    'Other',
                ],
                'type' => 'multiple_choice',
            ],

            [
                'i_e_text' => '(e.g., buying a home, retirement planning)',
                'question' => 'Do you have any long-term goals for 5 or more years?',
                'options' => [
                    'Buy a home',
                    'Save for children Education',
                    'Retirement Planning',
                    'Other',
                ],
                'type' => 'multiple_choice',
            ],

            [
                // 'i_e_text' => ' ',
                'question' => 'How comfortable do you feel about handling debts and repayment?',
                'options' => [
                    'Very Comfortable',
                    'Comfortable',
                    'Neutral',
                    'Uncomfortable',
                    'Very Uncomfortable',
                ],
                'type' => 'multiple_choice',
            ],

            [
                // 'i_e_text' => ' ',
                'question' => 'Have you tried using budgeting apps before? If yes, how helpful did you find them?',
                'options' => [
                    'Yes, and I found them helpful',
                    "Yes, but I didn't find them helpful",
                    "No",
                ],
                'type' => 'multiple_choice',
            ],
            [
                'i_e_text' => 'do you prefer being strict, flexible, or somewhere in between ?',
                'question' => 'When it comes to budgeting, what do you prefer?',
                'options' => [
                    'Strict',
                    'Balanced',
                    'Flexible',
                ],
                'type' => 'multiple_choice',
            ],

            [
                'i_e_text' => 'like children or elderly family members, that you financially support?',
                'question' => 'Are there any dependents in your life?',
                'options' => [
                    'None',
                    '1',
                    '2',
                    'More than 2',
                ],
                'type' => 'multiple_choice',
            ],
            [
                // 'i_e_text' => ' ',
                'question' => 'Have you thought about when you might retire? ',
                'options' => [
                    'Early (before 60)',
                    'Standard (60-65)',
                    'Late (after 65)',
                ],
                'type' => 'multiple_choice',
            ],

            [
                // 'i_e_text' => ' ',
                'question' => 'What kind of retirement lifestyle are you aiming for?',
                'options' => [
                    'Frugal',
                    'Moderate',
                    'Comfortable',
                ],
                'type' => 'multiple_choice',
            ],
            [
                'i_e_text' => '(e.g., sustainability, social responsibility)',
                'question' => 'Are there any specific values or principles that guide your financial decisions?',
                'options' => [
                    'Environmental sustainability',
                    'Social responsibility',
                    'Long-term financial stability',
                    'Other',
                ],
                'type' => 'multiple_choice',
            ],
            [
                'i_e_text' => 'i-e Monthly, weekly',
                'question' => 'What type of budget, you would like to set',
                'options' => [
                    'Monthly',
                    'Weekly',
                    'Long-term financial stability',
                    'Bi Weekly',
                ],
                'type' => 'multiple_choice',
            ],
            // [
            //     'id'=>'5',
            // 'i_e_text' =>' ',
            //     'question' => 'Do you own a property',
            //     'options' => [
            //         'Yes',
            //         'No',
            //     ],
            //     'type' => 'multiple_choice',
            // ],
            // [
            //     'id'=>'6',
            // 'i_e_text' =>' ',
            //     'question' => 'What’s the mortgage amount on property you own?',
            //     'options' => [
            //         'amount',
            //     ],
            //     'type' => 'float',
            // ],
            // Add more questions as needed
        ];
        Question::query()->delete();
        // Insert the sample data into the questions table
        foreach ($questions as $questionData) {
            Question::create([
                'i_e_text' => isset($questionData['i_e_text'])? $questionData['i_e_text']: null,
                'question' => $questionData['question'],
                'options' => json_encode($questionData['options']),
                'type' => $questionData['type'],
            ]);
        }
    }
}
