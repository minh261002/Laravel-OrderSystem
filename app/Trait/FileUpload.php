<?php

namespace App\Trait;

use Illuminate\Http\Request;

trait FileUpload
{
    public function updateImg(Request $request, $inputName, $path = "/uploads")
    {
        if ($request->hasFile($inputName)) {
            $image = $request->file($inputName);
            $ext = $image->getClientOriginalExtension();
            $imageName = uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }

        return null;
    }
}