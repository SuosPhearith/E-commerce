<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\BaseCrudController;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class WishlistController extends BaseCrudController
{
    protected $model = wishlist::class;
    public function getAll(Request $request)
    {
        try {
            $perPage = $request->query('per_page', 10);
            $items = $this->model::paginate($perPage);

            return response()->json($items, Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function getByUser()
    {
        try {
            $userId = auth()->user()->id;

            $items = wishlist::join('products', 'wishlists.product_id', '=', 'products.id')
                ->where('wishlists.user_id', $userId)
                ->select('products.id as product_id', 'products.name', 'products.price', 'wishlists.id as wishlist_id', 'products.image as image')
                ->get();

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
            $request->validate([
                'product_id' => 'required|integer',
            ]);
            // Check if the user has already added the product to the cart
            $existingCartItem = $this->model::where('user_id', auth()->user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($existingCartItem) {
                return response()->json(['message' => 'Product has already been added to the wishlist.'], Response::HTTP_CONFLICT);
            }
            $data = array(
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
            );
            $item = $this->model::create($data);
            return response()->json($item, Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function delete($id)
    {
        try {
            $item = $this->model::find($id);

            if (!$item) {
                return response()->json(['message' => $this->getModelName() . ' not found'], Response::HTTP_NOT_FOUND);
            }

            if ($item->user_id != auth()->user()->id) {
                return response()->json(['message' => $this->getModelName() . ' not found'], Response::HTTP_NOT_FOUND);
            }

            $item->delete();

            return response()->json(['message' => $this->getModelName() . ' deleted successfully'], Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
}
