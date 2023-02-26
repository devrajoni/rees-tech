<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::get();

        return view('frontend.contact.contact', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'subject' => [
                'required',
            ],
            'comment' => [
                'required',
            ],
        ]);

        Contact::create($data);

        try {
            Notification::route('mail', setting('company_email'))->notify(
                new NewContact($request->all())
            );
        } catch (\Exception $e) {
            // dd($e->getMessage());

            

            return;
        }
        return redirect()->route('contact')->flashify('Message sent successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
