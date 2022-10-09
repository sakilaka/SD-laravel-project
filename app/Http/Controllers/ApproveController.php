<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApproveController extends Controller
{
  public function approve($id)
  {
    DB::table('users')
      ->where('id', '=', $id)
      ->update([
        'is_approved'  => 1
      ]);
    return redirect('userinfo');
  }
}
