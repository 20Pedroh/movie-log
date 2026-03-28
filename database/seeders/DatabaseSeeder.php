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

        $game4 = Game::create([
            'title' => 'Monster Hunter: World',
            'description' => 'Caça épica de monstros com cooperação e estratégia',
            'cover_image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/582010/header.jpg',
            'release_date' => '2018-01-26',
        ]);

        $game5 = Game::create([
            'title' => 'Red Dead Redemption 2',
            'description' => 'Uma narrativa profunda no velho oeste',
            'cover_image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1174180/header.jpg',
            'release_date' => '2018-10-26',
        ]);

        $game6 = Game::create([
            'title' => 'Hollow Knight',
            'description' => 'Metroidvania desafiador com arte incrível',
            'cover_image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/367520/header.jpg',
            'release_date' => '2017-02-24',
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

        Review::create([
            'user_id' => $user->id,
            'game_id' => $game4->id,
            'title' => 'Simplesmente perfeito',
            'content' => 'Combate profundo, monstros incríveis e coop muito divertido. Um dos melhores jogos que já joguei.',
            'score' => 10,
        ]);

        Review::create([
            'user_id' => $user->id,
            'game_id' => $game5->id,
            'title' => 'Experiência cinematográfica',
            'content' => 'História emocionante e atenção absurda aos detalhes. Um jogo que marca.',
            'score' => 10,
        ]);

        Review::create([
            'user_id' => $user->id,
            'game_id' => $game6->id,
            'title' => 'Indie surpreendente',
            'content' => 'Desafiador, bonito e com trilha sonora incrível. Vale cada minuto.',
            'score' => 9,
        ]);
    }
}