<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }


    // criminal and law route

    public function criminalCivil()
    {
        return view('Home.criminal_civil');
    }


    // family and child route

    public function familyChild()
    {
        return view('Home.family_child');
    }

    // commercial and rera route

    public function commercialRera()
    {
        return view('Home.commercial');
    }

    // finance and property

    public function financeProperty()
    {
        return view('Home.finance');
    }

    // corporate and More

    public function corporateMore()
    {
        return view('Home.corporate');
    }

    // enquiry for  submission
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'        => 'required|string|max:100',
            'phone'            => 'required|string|max:20',
            'city'             => 'required|string|max:100',
            'practice_area'    => 'nullable|string|max:100',
            'case_description' => 'required|string|max:2000',
        ]);

        try {
            Mail::to(config('mail.admin_email'))->send(new EnquiryMail($validated));

            return response()->json([
                'success' => true,
                'message' => 'Your enquiry has been submitted. We will contact you shortly.'
            ]);
        } catch (\Exception $e) {
            // ← This will show the REAL error in browser
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
