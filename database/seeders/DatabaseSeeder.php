<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // USER
        $user = User::updateOrCreate(
            ['email' => 'pedro@email.com'],
            [
                'name' => 'Pedro',
                'password' => Hash::make('123456'),
            ]
        );

        // GAMES
        $game1 = Game::create([
            'title' => 'The Witcher 3',
            'description' => 'Um RPG incrível com história profunda',
            'cover_image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202108/1210/8l1h0x.jpg',
            'release_date' => '2015-05-19',
        ]);

        $game2 = Game::create([
            'title' => 'Cyberpunk 2077',
            'description' => 'Jogo futurista em mundo aberto',
            'cover_image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg',
            'release_date' => '2020-12-10',
        ]);

        $game3 = Game::create([
            'title' => 'Elden Ring',
            'description' => 'Desafio e exploração em mundo aberto',
            'cover_image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1245620/header.jpg',
            'release_date' => '2022-02-25',
        ]);

        // REVIEWS
        Review::create([
            'user_id' => $user->id,
            'game_id' => $game1->id,
            'title' => 'Obra-prima',
            'content' => 'História incrível, personagens marcantes e mundo vivo.',
            'score' => 10,
        ]);

        Review::create([
            'user_id' => $user->id,
            'game_id' => $game2->id,
            'title' => 'Gráficos incríveis',
            'content' => 'Após atualizações, o jogo melhorou muito.',
            'score' => 8,
        ]);

        Review::create([
            'user_id' => $user->id,
            'game_id' => $game3->id,
            'title' => 'Desafiador',
            'content' => 'Muito difícil, mas extremamente recompensador.',
            'score' => 9,
        ]);
    }
}