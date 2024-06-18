<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserRepository;
use App\Http\Resources\UserCollection;

class RegisterController extends Controller
{
    protected $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    public function users()
    {
        return $this->repository->all();
        // return User::all();
        // return DB::table('users')->get();
        // return DB::table('users')->where('name', 'rusiru')->get();
        // return User::where('name', 'rusiru')->get();
        // return DB::table('users')->count();
        // return DB::select("select * FROM users");
    }
}
