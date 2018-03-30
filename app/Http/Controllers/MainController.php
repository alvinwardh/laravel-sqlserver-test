<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    function index()
    {
      $musics = DB::table('dbo.music')->where('id', "1")->get();
      return view('welcome')->withMusic($musics);
    }
  }
