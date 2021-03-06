<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transaction
 *
 * @property int $id
 * @property int $ticket_id
 * @property int $user_id
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $owner
 * @property-read \App\Ticket $ticket
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereDeletedAt($value)
 * @property int $event_id
 * @property int $total_price
 * @property int $service_charge
 * @property int $gst_charge
 * @property int $gateway_charge
 * @property string $razorpay_order_id
 * @property string $razorpay_payment_id
 * @property string $razorpay_signature
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereGatewayCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereGstCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereRazorpayOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereRazorpayPaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereRazorpaySignature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereServiceCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaction whereTotalPrice($value)
 */
class Transaction extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
