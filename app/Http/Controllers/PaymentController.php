<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function MobileLegendsDiamonds()
    {
        return view('diamond.molen');
    }

    public function getSnapToken(Request $request)
    {
        $rule_validate = [
            'id_game' => 'required|string',
            'server' => 'required|string',
            'harga' => 'required|numeric',
            'total_diamond' => 'required|numeric',
            'diskon' => 'required|string, nullable',
        ];

        $message_validate = [
            'id_game.required' => 'ID Game is required',
            'server.required' => 'Server is required',
            'harga.required' => 'Harga is required',
            'harga.numeric' => 'Harga must be a number',
            'total_diamond.required' => 'Total Diamond is required',
            'total_diamond.numeric' => 'Total Diamond must be a number',
        ];

        $request->validate($rule_validate, $message_validate);

        $orderID = 'ORD-' . time();

        $payment = Payment::create([
            'id_game' => $request->id_game,
            'server' => $request->server,
            'harga' => $request->harga,
            'total_diamond' => $request->total_diamond,
            'diskon' => $request->diskon,
            'order_id' => $orderID, // Assuming snap_token is the order ID for this example
            'status' => 'pending',
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $orderID,
                'gross_amount' => $request->harga,
            ],
            'item_details' => [
                [
                    'id' => $request->id_game,
                    'price' => $request->harga,
                    'quantity' => 1,
                    'name' => 'Top Up Diamonds',
                ],
            ],
            'customer_details' => [
                'first_name' => 'Customer',
            ],
        ];

        // Melakukan try and catch untuk menangani error
        try {

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {

            // Jika terjadi error, log error tersebut dan kembalikan response error (Log error => mencatat error ketika mendapatkan token snap ke dalam file log)
            Log::error('Payment Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
