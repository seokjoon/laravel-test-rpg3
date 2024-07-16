<?php

namespace App\Http\Controllers\v1\pub\Player;

use App\Http\Controllers\Controller;
use App\Models\Player\Player;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayersController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $outs = $player->delete();

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outs = Player::all();

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return response()->json($player, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $outs = Player::create($request->toArray());

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $outs = $player->update($request->toArray());

        return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
    }
}
