<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\Player;

class TeamController extends Controller
{
    public function createTeam(Request $request)
    {
        try {

            $bodyContent = json_decode($request->getContent(), true);
            User::findOrFail($bodyContent['user_id']);

            $validator = \Validator::make($bodyContent, [
                'team_name' => ['required', 'alpha_spaces'],
                'team_player.*.player_name' => ['required', 'alpha_spaces'],
                'team_player.*.player_email' => ['required', 'email']
            ]);

            if ($validator->fails()) {
                $response = ['success' => false, 'message' => $validator->errors()];
                return response()->json($response, 200);
            }
            
            \DB::beginTransaction();
            $team = Team::create([
                'user_id'   => $bodyContent['user_id'],
                'team_name' => $bodyContent['team_name']
            ]);
            
            foreach ($bodyContent['team_player'] as $player) {
                Player::create([
                    'team_id' => $team->id,
                    'player_name' => $player['player_name'],
                    'player_email' => $player['player_email']
                ]);
            }
            \DB::commit();
            $response = ['success' => true, 'message' => 'Team Created', 'data' => ['team_id' => $team->id]];
            return response()->json($response, 201);
        } catch (\Exception $ex) {
            $response = ['success' => false, 'message' => $ex->getMessage()];
            return response()->json($response, 500);
        }
    }

    public function getTeamInfo(Request $request)
    {
        try {
            $bodyContent = json_decode($request->getContent(), true);
            $teams = User::where('id', $bodyContent['user_id'])
                ->with('teams', 'teams.players')
                ->get();
            $response = ['success' => true, 'message' => '', 'data' => $teams];
            return response()->json($response, 200);
        } catch (\Exception $ex) {
            $response = ['success' => false, 'message' => $ex->getMessage()];
            return response()->json($response, 500);
        }
    }
}
