<?php

namespace App\Http\Controllers\Pub\Currency\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pub\Currency\ExchangeRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CurrencyService extends Controller
{
    public function exchange(ExchangeRequest $request): string | bool
    {
        $client = new Client();
        $data = [
            'apikey' => env('CURRENCY_API_KEY'),
            'currencies' => $request->input('to_currency'),
            'base_currency' => $request->input('from_currency'),
        ];
        $amount = $request->input('amount');

        try {
            $response = $client->
            get("https://api.currencyapi.com/v3/latest?apikey=" . $data['apikey'] . "&currencies=" . $data['currencies'] . "&base_currency=" . $data['base_currency']);
        } catch (GuzzleException) {
            return false;
        }
        $receive = json_decode($response->getBody(), true);

        $value_x1 = $receive['data'][$data['currencies']]['value'];

        $total = $value_x1 * $amount;
        return number_format($total, 2, '.', ''); // Rounding to two digits after the point
    }
}
