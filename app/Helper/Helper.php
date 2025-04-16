<?php

namespace App\Helper;

use App\Models\Question;
use Session;
use App\Models\Setting;
use App\Models\Sitemap;
use Illuminate\Http\Request;

class Helper
{

    public static function successMsg($type, $msg)
    {
        if ($type == 'insert') {
            session()->flash('message', $msg . ' Inserted Successfully.');
        } else if ($type == 'update') {
            session()->flash('message', $msg . ' Updated Successfully.');
        } else if ($type == 'delete') {
            session()->flash('message', $msg . ' Deleted Successfully.');
        } else if ($type == 'active') {
            session()->flash('message', $msg . ' Active Successfully.');
        } else if ($type == 'inactive') {
            session()->flash('message', $msg . ' Deactive Successfully.');
        } else if ($type == 'custom') {
            session()->flash('message', $msg);
        }
    }


    public static function settings()
    {
        return Setting::first();
    }


    public static function fileUpload(Request $request, string $inputName, string $folder): ?string
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);

            // Create unique filename
            $filename = time() . '_' . \Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Store in storage/app/public/{folder}
            $path = $file->storeAs("public/{$folder}", $filename);

            // Return only the filename
            return $filename;
        }

        return null;
    }
}
