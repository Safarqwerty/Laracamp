<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
use App\Mail\Checkout\Paid;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();

        // kirim email ke user
        Mail::to($checkout->User->email)->send(new Paid($checkout));


        $request->session()->flash('success', "Checkout ID {$checkout->id} berhasil diubah");
        return redirect(route('admin.dashboard'));
    }
}
