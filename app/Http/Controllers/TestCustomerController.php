<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TestCustomer;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class TestCustomerController extends Controller
{
    /**
     * @OA\Get(
     *     path="/test-customer",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */
    public function get(){
        return Customer::all();
    }
}
