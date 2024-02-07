<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\BaseCrudController;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ReviewController extends BaseCrudController
{
    public function getByProductId($id)
    {
        try {
            // Find the product by its ID
            $item = Product::find($id);

            // Check if the product exists
            if (!$item) {
                return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
            }

            // Retrieve reviews for the product with eager loading of users
            $reviews = Review::where('product_id', $item->id)
                ->with('user') // Eager load the user associated with each review
                ->paginate(9);

            // Return the product along with its reviews
            return response()->json(['reviews' => $reviews], Response::HTTP_OK);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
    public function create(Request $request)
    {
        try {
            // return $request->all();
            $data = $request->validate([
                'product_id' => 'exists:products,id',
                'rating' => 'required',
                'description' => 'nullable|string',
            ]);
            $userId = auth()->user()->id;
            $data['user_id'] = $userId;
            // Check if a review exists for the user and product combination
            $isReview = Review::where('user_id', $userId)
                ->where('product_id', $data['product_id'])
                ->exists();

            if (!$isReview) {
                Review::create($data);
            } else {
                // Update the existing review
                Review::where('user_id', $userId)
                    ->where('product_id', $data['product_id'])
                    ->update($data);
            }

            // Calculate and update average rating for the product
            $averageRating = Review::where('product_id', $data['product_id'])->avg('rating');
            $productUpdated = Product::find($data['product_id']);
            $productUpdated->update(['average_review' => $averageRating]);

            return response()->json(['message' => "Created successfully!"], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            return $this->handleValidationException($e);
        } catch (\Exception $e) {
            return $this->handleUnexpectedException($e);
        }
    }
}
