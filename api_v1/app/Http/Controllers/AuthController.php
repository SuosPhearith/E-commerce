<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Services\FileUploadController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        # By default we are using here auth:api middleware
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    // ===> Register user
    public function register(Request $request)
    {
        try {
            $registerUserData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|min:8',
                'c_password' => 'required|same:password'
            ]);
            $user = User::create([
                'name' => $registerUserData['name'],
                'email' => $registerUserData['email'],
                'password' => Hash::make($registerUserData['password']),
            ]);
            return response()->json([
                'message' => 'User Created',
            ], Response::HTTP_CREATED);
        } catch (ValidationException $e) {
            // Validation error
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $e->errors(),
            ], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            // ===> Unexpected error
            return response()->json([
                'message' => 'Server Error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    // ===> Login
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|min:8'
            ]);

            if (!$token = auth()->attempt($credentials)) {
                return response()->json([
                    'message' => 'Invalid Credentials'
                ], Response::HTTP_UNAUTHORIZED);
            }
            return response()->json([
                'message' => 'Success',
                'access_token' => $token,
            ], Response::HTTP_OK);
        } catch (ValidationException $e) {
            // Validation error
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $e->errors(),
            ], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            // ===> Unexpected error
            return response()->json([
                'message' => 'Server Error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        # Here we just get information about current user
        try {
            return response()->json(auth()->user());
        } catch (\Exception $e) {
            // ===> Unexpected error
            return response()->json([
                'message' => 'Server Error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        try {
            auth()->logout();
            return response()->json(['message' => 'Successfully logged out']);
        } catch (\Exception $e) {
            // ===> Unexpected error
            return response()->json([
                'message' => 'Server Error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * update user (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateMe(Request $request)
    {
        try {
            // return dd($request->file('image'));
            $item = User::find(auth()->user()->id);
            if (!$item) {
                return response()->json(['message' => 'Not found'], Response::HTTP_NOT_FOUND);
            }

            $data = $request->validate([
                'name' => 'nullable|string',
                'password' => 'nullable|min:8',
                'new_password' => 'nullable|min:8',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $image = FileUploadController::storeImage($request->file('image'), 'uploads/users');
                $data['image'] = $image;
            } else {
                $data['image'] = $item->image;
            }

            if ($data['new_password'] && $data['password']) {
                $isPassword = auth()->attempt(['email' => $item->email, 'password' => $data['password']]);
                if (!$isPassword) {
                    return response()->json(['message' => 'Old password incorrect!'], Response::HTTP_BAD_REQUEST);
                } else {
                    $data['password'] = Hash::make($data['new_password']);
                }
            }

            $item->update($data);
            return response()->json(['message' => 'Successfully updated']);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Server Error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        # When access token will be expired, we are going to generate a new one wit this function 
        # and return it here in response
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        # This function is used to make JSON response with new
        # access token of current user
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
