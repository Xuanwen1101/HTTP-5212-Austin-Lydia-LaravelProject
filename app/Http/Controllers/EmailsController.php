<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Email;

class EmailsController extends Controller
{
    public function list()
    {
        return view('emails.list', [
            'emails' => Email::all()
        ]);
    }

    public function delete(Email $email)
    {
        $email->delete();
        
        return redirect('/console/emails/list')
            ->with('message', 'Email has been deleted!');        
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $email = new Email();
        $email->name = $attributes['name'];
        $email->email = $attributes['email'];
        $email->message = $attributes['message'];
        $email->save();

        return redirect('/console/emails/list')
            ->with('message', 'New Email has been added!');
    }
}
