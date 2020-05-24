<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
**/
    public function getCheckout()
    {
        return view('cart.checkout');
    }


    public function placeOrder(Request $request)
    {

        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  \Cart::getSubTotal(),
            'item_count'        =>  \Cart::getTotalQuantity(),
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $request['first_name'],
            'last_name'         =>  $request['last_name'],
            'address'           =>  $request['address'],
            'city'              =>  $request['city'],
            'country'           =>  $request['country'],
            'post_code'         =>  $request['post_code'],
            'phone_number'      =>  $request['phone_number'],
            'notes'             =>  $request['notes']
        ]);

        if ($order) {

            $items = \Cart::getContent();

            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('name', $item->name)->first();

                $orderItem = new OrderItem([
                    'product_id'    =>  $product->id,
                    'quantity'      =>  $item->quantity,
                    'price'         =>  $item->getPriceSum()
                ]);

                $order->items()->save($orderItem);
            }
        }

        return redirect()->route('home')->with('success_msg', 'Ваша Оплата Принята');
    }

}
