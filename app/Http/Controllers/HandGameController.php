<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HandGame;
use App\Users;

class HandGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index'); 
    }

    private function word(int $choose)
    {
        if ($choose == 1) {
            return 'Kamien';
        }
        
        if ($choose == 2)
        { 
            return 'Nozyce';
        }
        
        if ($choose == 3)
        {
            return 'Papier';
        }
    }


    public function winner(int $losowanie, int $choose)
    {
        if ($losowanie == $choose)
    {
        return 'Remis';
    }
    else if (($losowanie == 1 and $choose == 2) or ($losowanie == 2 and $choose == 3)  or ($losowanie == 3 and $choose == 1) )
    {
        return 'Komputer wygral';
    }

    else if (($losowanie == 2 and $choose == 1) or ($losowanie == 3 and $choose == 2)  or ($losowanie == 1 and $choose == 3) )
    {
        return 'Użytkownik wygral';
    }
    }


    public function login(Request $req)
    {
     $username = $req->input('username');
     $password = $req->input('password');

     $checkLogin = DB::table('users')->select('username', 'password')->get();

     if(count($checkLogin)  >0)
     {
      echo "Login SuccessFull<br/>";;
     }
     else
     {
      echo "Login Faield Wrong Data Passed";
     }
     return view('index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */
    // public function store(Request $request)
    // {
    //     if ($request['login'] = "Register")
    //     {
    //     $New_user = new Users;
    //     $login = $request['username'];
    //     $login = $request['email'];
    //     $login = $request['password'];  
    //     $handGame->save();          
    //     }
    //     if ($request['login'] = "Login")
    //     $checkLogin = DB::table('users')->select('username', 'password')->get();
    //     return view('index');
    // }

    public function store(Request $request)
    {
        $handGame = new HandGame();
        $losowanie = rand(1, 3);
        $wybor = $request['choose'];
        $comp = static::word($losowanie);
        $play = static::word($wybor);
        $win = static::winner($losowanie,$wybor);

        $handGame['player'] = $play;
        $handGame['computer'] = $comp;
        $handGame['result'] = $win;
        $handGame->save();
        $AllTable = HandGame::all();//('users')->where('name');
        return view('Sprawdz',compact('handGame','AllTable'));
    }

    // public function check(Request $request, HandGame $handGame) {
    //     $handGame->
    // }

    	/**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function resizeImage()

    {

    	return view('resizeImage');

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('img/Kamien');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
