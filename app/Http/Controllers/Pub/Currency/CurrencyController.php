<?php

namespace App\Http\Controllers\Pub\Currency;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pub\Currency\Services\CurrencyService;
use App\Http\Requests\Pub\Currency\ExchangeRequest;
use App\Models\Currency;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CurrencyController extends Controller
{

    private CurrencyService $service;

    public function __construct(CurrencyService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $currencies = Currency::all();

        return view('Pub.Currency.currency', compact('currencies'));
    }

    public function exchange(ExchangeRequest $request): RedirectResponse
    {
        $request->validated();
        try {
            $amount = $request->input('amount');
            $fromCurrency = $request->input('from_currency');
            $toCurrency = $request->input('to_currency');
            $value = $this->service->exchange($request);
            return response()->redirectToRoute('currency.index', [
                'from' => $fromCurrency,
                'to' => $toCurrency,
                'amount' => $amount,
                'value' => $value,
            ]);
        } catch (Exception) {
            return redirect()->back();
        }

    }

}
