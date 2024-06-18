<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        // return $this->user::all();
        //  return DB::table('users')->get();

        // return DB::select("select * FROM users");

        // $users = User::select(["name"])->get();
        // return $users;

        // return DB::table('users')->where('name', 'rusiru')->where('id', '1')->select(['id', 'email', 'password'])->first();

        // return DB::table('users')->where('name', 'rusiru')->value('email');

        // return DB::table('users')->pluck('name','id');

        // DB::table('users')->orderBy('id')->chunk(100, function ($users) {
        //     foreach ($users as $user) {

        //     }
        // });

        //   return  DB::table('users')->where('name', 'rusiru')
        //         ->chunkById(100, function ($users) {
        //             foreach ($users as $user) {
        //                 DB::table('users')
        //                     ->where('id', $user->id)
        //                     ->update(['id' => '1']);
        //             }
        //         });

        // return DB::table('users')
        //     ->select('name', 'email as vendor_email')
        //     ->get();

        // return DB::table('users')->distinct()->get();

        // return DB::table('users')
        //     ->select(DB::raw('count(*) as user_count, id'))
        //     ->where('id', '<>', 1000)
        //     ->groupBy('name')
        //     ->get();

        return Storage::disk('local')->put('example.txt', 'Contents');
    }
}
