<?php

namespace App\Http\Controllers;
use App\Models\OpenSource;
use Illuminate\Http\Request;

class OpensourceController extends Controller
{
    
    public function tempStore(Request $request) {

            if($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = $file->getClientName();
                
                // we are going to generate a unique identifier for the thumbnail

                $uuid = uniqid(). '-'.now()->timestamp;
                $file->storeAs('thumbnails/'.$uuid, $filename);

                    return $uuid;
            }

            return '';
    }
}
