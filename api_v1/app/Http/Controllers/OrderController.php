<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{

    public function getAll(Request $request)
    {
        try {
            $perPage = $request->query('per_page', 10);
            $items = Order::paginate($perPage);

            return response()->json($items, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function create(Request $request)
    {
        try {
            $item = $request->validate([
                'address' => 'required|min:3',
                'city' => 'required|min:3',
                'country' => 'required|min:3',
                'postal_code' => 'required|min:3',
                'phone' => 'required|min:8',
                'email' => 'required|email',
                'product' => 'required|array',
                'product.*' => 'exists:products,id'

            ]);

            $item['user_id'] = auth()->user()->id;

            $order = Order::create($item);
            foreach ($request->product as $product) {
                $productPrice = Product::find($product['product_id'])->price;
                $orderDetail = new OrderDetail([
                    'order_id' => $order->id,
                    'product_id' => $product['product_id'],
                    'price' => $productPrice,
                ]);
                $orderDetail->save();
            }
            Cart::where('user_id', auth()->user()->id)->delete();
            return response()->json(["message" => "Order successsfully."], Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function getProductOrder()
    {
        try {

            // Retrieve the IDs of orders associated with the authenticated user
            $orderIds = Order::where('user_id', auth()->user()->id)->pluck('id');

            // Count the occurrences of each product in the OrderDetail table
            $productCounts = OrderDetail::whereIn('order_id', $orderIds)
                ->select('product_id', DB::raw('COUNT(*) as count'))
                ->groupBy('product_id')
                ->get();

            // Join the Product table to retrieve product information
            $products = Product::whereIn('id', $productCounts->pluck('product_id')->all())->get();

            // Add the count information to the products
            $productsWithCounts = $products->map(function ($product) use ($productCounts) {
                $count = $productCounts->where('product_id', $product->id)->first()->count ?? 0;
                $product->count = $count;
                return $product;
            });

            return response()->json($productsWithCounts, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function getByUser()
    {
        try {

            $userOrders = Order::where('user_id', auth()->user()->id)->exists();

            if (!$userOrders) {
                return response()->json(['message' => 'No orders found for the user.'], Response::HTTP_NOT_FOUND);
            }

            $orders = Order::where('user_id', auth()->user()->id)->with('orderDetails')->get();

            return response()->json($orders, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function update(Request $request, string $id)
    {
        try {

            $order = Order::find($id);
            if (!$order) {
                return response()->json(['message' => 'Order not found!'], Response::HTTP_NOT_FOUND);
            }
            if ($order->status == 'pending') {
                $order->update(['status' => 'done']);
            } else {
                $order->update(['status' => 'pending']);
            }

            return response()->json($order, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }

    //::::::::::::::::>> Start helper
    protected function handleValidationException(ValidationException $e)
    {
        return response()->json([
            'message' => 'Validation Error',
            'errors' => $e->errors(),
        ], Response::HTTP_BAD_REQUEST);
    }

    protected function handleUnexpectedException(\Exception $e)
    {
        return response()->json([
            'message' => 'Server Error',
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
    //::::::::::::::::>> Start helper
}
