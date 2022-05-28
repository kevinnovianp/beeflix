<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'genre_id' => 1,
            'title' => 'Now, We are Breaking Up',
            'photo' => 'https://asianwiki.com/images/1/10/Now_We_Are_Breaking_Up-tp02.jpg',
            'description' => 'The series is story of love and break ups in the romantic world. It illustrates the present scenario in the context of fashion industry. Ha Yeong-eun (Song Hye-kyo) is a beautiful, trendy team leader of design department of a fashion company called \'The One\'. Yoon Jae-gook (Jang Ki-yong) is a successful freelance photographer.',
            'rating' => 7.2
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'Lovers of the Red Sky',
            'photo' => 'https://asianwiki.com/images/d/de/Red_Sky_Korean_Drama-p1.jpg',
            'description' => 'Set during the Dan dynasty era when ghosts, demons and gods are involved in human life, the story recounts the fateful relationship of a female painter (Kim Yoo-jung) and a blind astrologer (Ahn Hyo-seop).',
            'rating' => 9.1
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'Doom at Your Service',
            'photo' => 'https://asianwiki.com/images/7/74/Doom_at_Your_Service-P1.jpg',
            'description' => 'Tak Dong-Kyung (Park Bo-Young) is an editor for a web novel company. Myul-Mang (Seo In-Guk), suddenly appears in her ordinary life. She makes a 100 day contract with Myul-Mang, risking her life and her love. Myul-Mang is the existence of a middle manager between God and humans. He makes a contract with Tak Dong-Kyung.',
            'rating' => 8.9
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'River Where the Moon Rises',
            'photo' => 'https://asianwiki.com/images/b/bd/River_Where_The_Moon_Rises-tp01.jpeg',
            'description' => 'A love story between Pyong Gang and On Dal. Pyong Gang (Kim So-Hyun) is princess of Goguryeo. She was raised as a soldier for Goguryeo as soon as she was born. She is ambitious enough to dream of becoming the King of Goguryeo. She meets a man named On Dal (Ji Soo).',
            'rating' => 9.0
        ]); //20 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'Penthouse',
            'photo' => 'https://asianwiki.com/images/4/48/Penthouse-Korean_Drama-P1.jpg',
            'description' => 'Penthouse tells the story of wealthy families living in Hera Palace and their children at Cheong-ah Arts School. Shim Su-ryeon (Lee Ji-ah) is an elegant, wealthy woman who has a tragic past. Her husband is Joo Dan-tae (Uhm Ki-joon), a successful businessman. She later learns that he is hiding a secret from her.',
            'rating' => 8.8
        ]); //21 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'Goblin',
            'photo' => 'https://asianwiki.com/images/b/b2/Goblin-p04.jpg',
            'description' => 'Goblin is a fantasy romance about a modern day goblin (Gong Yoo) who seeks to end his cursed immortal life and needs a human bride (Kim Go Eun) to do so.  His life then becomes intertwined with a grim reaper (Lee Dong Wook) who is unable to remember his past. But when the goblin finally finds his bride, he suddenly realizes he wants to live and be with her.',
            'rating' => 9.1
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'Mr. Queen',
            'photo' => 'https://asianwiki.com/images/6/61/Mr._Queen-P1.jpg',
            'description' => 'The story begins with a modern age chef Jang Bong-Hwan (Choi Jin Hyuk) who works in the Blue House (South Korean Presidential residence). He meets with an accident and his soul time travels in the past in a historical period during Joseon era and then gets trapped in the body of Queen Cheorin (Shin Hye-sun).',
            'rating' => 9.2
        ]); //20 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'The K2',
            'photo' => 'https://asianwiki.com/images/f/ff/The_K2-p1.jpg',
            'description' => 'Kim Je-Ha (Ji Chang-Wook) is former solider for hire. He is also called K2. He is hired as a bodyguard by Choi Yoo-Jin (Song Yoon-A). Choi Yoo-Jin is the wife of a presidential candidate (Cho Seong-Ha) and the daughter from a chaebol family. Meanwhile, Ko An-Na (Lim Yoon-A) is the secret daughter of the presidential hopeful. She is also a recluse.',
            'rating' => 8.8
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'True Beauty',
            'photo' => 'https://asianwiki.com/images/e/ee/True_Beauty-P1.jpg',
            'description' => 'Im Ju-Kyung (Mun Ka-Young) is a high school student. Since she was little, she has had a complex about her appearance. To hide her bare face, Im Ju-Kyung always wears make-up. Her excellent make-up skills makes her pretty and she hides her bare face in front others. She gets involved with 2 men; Lee Soo-Ho (Cha Eun-Woo) and Han Seo-Joon (Hwang In-Yeop).',
            'rating' => 8.5
        ]); //16 episodes
        Movie::create([
            'genre_id' => 1,
            'title' => 'The Heirs',
            'photo' => 'https://asianwiki.com/images/4/48/The_Heirs_-_Korean_Drama-p1.jpg',
            'description' => 'The series follows a group of wealthy, privileged high school students as they are about to take over their families\' business empires, overcoming difficulties and growing every step of the way. Kim Tan (Lee Min-ho) is a wealthy heir to a large Korean conglomerate called Jeguk Group.',
            'rating' => 9.0
        ]); //20 episodes

        Movie::create([
            'genre_id' => 2,
            'title' => 'BoBoiBoy',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BNmFjYTcyMTktNmIzMC00MTA4LWJmYTEtN2U0ZTdhNWRlYWM4XkEyXkFqcGdeQXVyNjc5MjE5Nzg@._V1_.jpg',
            'description' => 'A kid name boboiboy found out there was an alien that try to invade their planet.a robot name ochobot give boboiboy and his friend a power to save their planet',
            'rating' => 5.9
        ]); //39 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'Tom & Jerry',
            'photo' => 'https://image.tmdb.org/t/p/original/t8Wi0KdSDfVsWOMvFtJg34gkhL4.jpg',
            'description' => 'Tom and Jerry is an American cartoon series about a hapless cat\'s never-ending pursuit of a clever mouse. Tom is the scheming cat, and Jerry is the spunky mouse. The series was driven entirely by action and visual humour although the characters almost never spoke.',
            'rating' => 7.8
        ]); //24 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'Garfield and Friends',
            'photo' => 'https://image.tmdb.org/t/p/original/pE6l6I1ICKOu4pDUXxkl87TTLZx.jpg',
            'description' => 'Stories about Garfield the cat, Odie the dog, their owner Jon and the trouble they get into, and Orson the Pig and his adventures on a farm with fellow farm animals.',
            'rating' => 7.2
        ]); //20 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'Phineas and Ferb',
            'photo' => 'https://image.tmdb.org/t/p/original/5M1KD34oDBjnmVQhdvoVNYgMugc.jpg',
            'description' => 'An animated comedy about two stepbrothers, Phineas and Ferb, who find inventive things to do on each day of their summer vacation, such as building a roller coaster out of materials you would find in your everyday home like Popsicle sticks, indoor plumbing, et cetera.',
            'rating' => 8.0
        ]); //25 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'Courage the Cowardly Dog',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMTU4MGEyNTItNzg5ZS00ZGU0LTk4NmEtODM0Y2UxYTY2YTUyXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg',
            'description' => 'The offbeat adventures of Courage, a cowardly dog who must overcome his own fears to heroically defend his unknowing farmer owners from all kinds of dangers, paranormal events and menaces that appear around their land.',
            'rating' => 8.3
        ]); //30 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'The Powerpuff Girls',
            'photo' => 'https://picfiles.alphacoders.com/410/410329.jpg',
            'description' => 'Fed up with the criminals, Professor Utonium, decides to help the people by creating a perfect little girl (composed of sugar, spice and everything nice). But in an instant dose of Chemical X, what he gets is three little girls whom he names Blossom, Bubbles and Buttercup.',
            'rating' => 7.3
        ]); //24 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'The Flintstones',
            'photo' => 'https://picfiles.alphacoders.com/365/365084.jpg',
            'description' => 'Residing in Bedrock, Fred Flintstone worked an unsatisfying quarry job, but returned home to lovely wife Wilma and eventually daughter Pebbles. Fred, a big fan of golf and bowling, also enjoyed bullying neighbor Barney Rubble, while Barney\'s saucy wife Betty was best friends with Wilma.',
            'rating' => 7.5
        ]); //25 episodes
        Movie::create([
            'genre_id' => 2,
            'title' => 'Scooby Doo, Where Are You!',
            'photo' => 'https://images.justwatch.com/poster/253146654/s718/scooby-doo-where-are-you.%7Bformat%7D',
            'description' => 'A group of teenage friends and their Great Dane (Scooby-Doo) travel in a bright green van solving strange and hilarious mysteries, while returning from or going to a regular teenage function.',
            'rating' => 7.9
        ]); //33 episodes

        Movie::create([
            'genre_id' => 3,
            'title' => 'Running Man',
            'photo' => 'https://i.pinimg.com/564x/c1/09/85/c10985bc30715f42d872605fbcedf2b9.jpg',
            'description' => 'Running Man is a reality-variety show where the cast must complete missions at various places to win the race. Running Man is a reality-variety show where the cast must complete missions at various places to win the race.',
            'rating' => 9.2
        ]); //45 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'My Little Old Boy',
            'photo' => 'https://img.betaseries.com/YfF6N4EbHTJJrjC67B-y6zTASYk=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2F620cf14cf6a751609fa27fcbc8bc01ec.jpg',
            'description' => 'This reality program focuses on the mothers of South Korean celebrities. Unlike the generic reality program which focuses solely on the celebrity, My Little Old Boy features commentary from the celebrities\' mothers as they watch the footage of their sons and or daughters\' daily activities.',
            'rating' => 8.2
        ]); //30 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Infinite Challenge',
            'photo' => 'https://image.tmdb.org/t/p/w500/3ZIPTvMnzI5ThmdGeEYQFxJV5Sg.jpg',
            'description' => 'Infinite Challenge is a show that stars Yu Jae Seok, Park Myeong Soo, Jung Jun Ha, Haha, Yang Se Hyeong, and Cho Sae Ho. Together, they complete various missions that are deemed difficult or impossible. Each week is filled with laughter and fun due to the on-screen chemistry of these six men.',
            'rating' => 8.1
        ]); //35 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Do or Die',
            'photo' => 'https://www.tvguide.com/a/img/catalog/provider/1/1/1-1495651783.jpg',
            'description' => 'When the choices you make mean the difference between life and death, would you know how to stay alive? Do or Die features stories of real people in desperate situations and reveals the shocking science behind their choices that might just save your life.',
            'rating' => 8.6
        ]); //20 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Men On a Mission',
            'photo' => 'https://image.tmdb.org/t/p/original/a1rnHdqAvEm5NUWJ2SRzBY4Hkt5.jpg',
            'description' => 'Men On a Mission current fixed cast includes Kang Ho-dong, Lee Soo-geun, Kim Young-chul, Seo Jang-hoon, Kim Heechul, Min Kyunghoon, Lee Sangmin, and Lee Jin-ho; Hwang Chi-yeul and Kim Se-hwang were initial cast members in the program\'s first few episodes. Jang Sung-kyu and Shindong have appeared as recurring special guests by hosting the show\'s game segments. The show received several accolades during its run.',
            'rating' => 8.7
        ]); // 45 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'The Law of Jungle',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BZGRhNTU2NDgtNjRlMS00MjIyLWI3MjctODFkZmVkZWU2NTVhL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjIzNjIxNzc@._V1_.jpg',
            'description' => 'Law of the Jungle is a hybrid reality show combining elements of drama and documentary. The show is hosted by comedian Kim Byung Man, and each episode invites various celebrities from the various field. So far, many of idol stars and famous actors have appeared on the show. The show introduces viewers to exotic locations around the world where celebrities must work together in order to complete missions and survive.',
            'rating' => 9.2
        ]); // 45 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Hangout with Yoo',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BNGUzMjcyN2QtYTUxYS00NTE3LTliODktOGZlMDlkYjc1MjIxXkEyXkFqcGdeQXVyMTI1OTY3MzM3._V1_.jpg',
            'description' => 'This is a show that was started in order to find out what Yoo Jae-suk would be doing during his days off. Subsequently, the show showcases Yoo taking on various projects, with him taking on various secondary roles.',
            'rating' => 8.9
        ]); // 36 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Live Below Zero°',
            'photo' => 'https://flxt.tmsimg.com/assets/p18740985_b_v10_aa.jpg',
            'description' => 'The show follows people living in the remote areas of Alaska, surviving off the land, making money through various ventures, as well as dealing with the many different challenges that come with living so remotely in such an unforgiving environment.',
            'rating' => 9.2
        ]); // 84 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Brain Games',
            'photo' => 'https://cdn1.edgedatg.com/aws/v2/natgeo/BrainGames/showimages/3a3ddf0eac16ffae363c86088a2150ef/588x783-Q80_3a3ddf0eac16ffae363c86088a2150ef.jpg',
            'description' => 'Brain Games returns featuring high-stakes stunts, celebrity brain gamers, and jam packed interactive games. Episode themes include: Battle of the Sexes, Music, Optical Delusions, Performance, Power/Persuasion, Laws of Attraction, Movie Magic, and Kids vs. Adults',
            'rating' => 9.2
        ]); // 67 episodes
        Movie::create([
            'genre_id' => 3,
            'title' => 'Genius',
            'photo' => 'https://flxt.tmsimg.com/assets/p13876734_b_v8_aa.jpg',
            'description' => 'Genius is a show that explores the turbulent journey of the physicist who would grow to become the icon: Albert Einstein. Consequently, this series will change the way we view Einstein. From their days as young adults to their final years we see their discoveries, loves, relationships, causes, flaws and genius.',
            'rating' => 8.9
        ]); // 28 episodes
    }
}
