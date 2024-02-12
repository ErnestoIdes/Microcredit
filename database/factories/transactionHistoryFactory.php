<?php
use app\Models\transactionHistory;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class transactionHistoryFactory extends Factory
{
    protected $model = transactionHistory::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaction_id' => $this->faker->randomDigit(),
            'message' => $this->faker->text(20),
            'status_code' => randomDigit(),
            'airtel_money_id' => randomDigit(),
        ];
    }
}
