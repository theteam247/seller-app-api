<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function submitApplication(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'shop_category' => ['required', 'string'],
            'portfolio_link' => ['required', 'url','unique:applications'],
            'has_online_shop' => ['required', 'boolean'],
            'online_shop_url' => ['string', 'url','nullable'],
            'question_1_answer' => ['required', 'string'],
            'question_2_answer' => ['required', 'string'],
            'question_3_answer' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    "errors" => $validator->messages(),
                    "success" => false
                ]
            );
        }
        $application = Application::create($validator->validated());
        $data = [
            "application" => $application,
            "success" => true
        ];
        return response()->json($data);
    }
}
