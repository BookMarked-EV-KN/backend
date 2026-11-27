<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'A kis herceg',
                'author' => 'Antoine de Saint-Exupéry',
                'genre' => 'Mese',
                'description' => 'Egy különleges kis herceg bolygóról bolygóra utazva fedezi fel a barátság, a szeretet és az élet valódi értékeit.',
                'publication_year' => 1943,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780156012195-L.jpg',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'genre' => 'Disztópia',
                'description' => 'Egy elnyomó társadalomban Winston Smith megpróbál szembeszállni a mindent ellenőrző hatalommal.',
                'publication_year' => 1949,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780451524935-L.jpg',
            ],
            [
                'title' => 'Dűne',
                'author' => 'Frank Herbert',
                'genre' => 'Sci-fi',
                'description' => 'Paul Atreides egy veszélyes sivatagi bolygón találja magát, ahol családja sorsa és a birodalom jövője forog kockán.',
                'publication_year' => 1965,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg',
            ],
            [
                'title' => 'Büszkeség és balítélet',
                'author' => 'Jane Austen',
                'genre' => 'Romantikus',
                'description' => 'Elizabeth Bennet és Mr. Darcy története a szerelemről, az előítéletekről és a társadalmi különbségekről.',
                'publication_year' => 1813,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439518-L.jpg',
            ],
            [
                'title' => 'A hobbit',
                'author' => 'J. R. R. Tolkien',
                'genre' => 'Fantasy',
                'description' => 'Bilbó egy váratlan kalandra indul törpök társaságában, hogy visszaszerezzék elveszett királyságukat és kincseiket.',
                'publication_year' => 1937,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780547928227-L.jpg',
            ],
            [
                'title' => 'A nagy Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'genre' => 'Szépirodalom',
                'description' => 'Egy titokzatos milliomos megpróbálja visszaszerezni régi szerelmét az 1920-as évek fényűző Amerikájában.',
                'publication_year' => 1925,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780743273565-L.jpg',
            ],
            [
                'title' => 'Üvöltő szelek',
                'author' => 'Emily Brontë',
                'genre' => 'Romantikus',
                'description' => 'Heathcliff és Catherine szenvedélyes, tragikus kapcsolata generációkon át meghatározza két család életét.',
                'publication_year' => 1847,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439556-L.jpg',
            ],
            [
                'title' => 'Jane Eyre',
                'author' => 'Charlotte Brontë',
                'genre' => 'Romantikus',
                'description' => 'Egy árva lány nehéz gyermekkora után nevelőnőként kezd új életet, ahol szerelemre és sötét titkokra talál.',
                'publication_year' => 1847,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141441146-L.jpg',
            ],
            [
                'title' => 'Bűn és bűnhődés',
                'author' => 'Fjodor Dosztojevszkij',
                'genre' => 'Pszichológiai regény',
                'description' => 'Egy elszegényedett egyetemista súlyos bűnt követ el, majd saját lelkiismeretével és döntéseinek következményeivel küzd.',
                'publication_year' => 1866,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780140449136-L.jpg',
            ],
            [
                'title' => 'A Karamazov testvérek',
                'author' => 'Fjodor Dosztojevszkij',
                'genre' => 'Pszichológiai regény',
                'description' => 'Három testvér története, amely a hit, az erkölcs, a családi konfliktusok és az emberi felelősség kérdéseit vizsgálja.',
                'publication_year' => 1880,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780140449266-L.jpg',
            ],
            [
                'title' => 'Állatfarm',
                'author' => 'George Orwell',
                'genre' => 'Disztópia',
                'description' => 'Egy farm állatai fellázadnak gazdájuk ellen, ám az általuk létrehozott rendszer fokozatosan újabb elnyomássá válik.',
                'publication_year' => 1945,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141180144-L.jpg',
            ],
            [
                'title' => 'Harry Potter és a bölcsek köve',
                'author' => 'J. K. Rowling',
                'genre' => 'Fantasy',
                'description' => 'Egy árva fiú megtudja, hogy varázsló, és a Roxfortban barátokra, kalandokra és veszélyes titkokra talál.',
                'publication_year' => 1997,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780590353427-L.jpg',
            ],
            [
                'title' => 'A Gyűrűk Ura',
                'author' => 'J. R. R. Tolkien',
                'genre' => 'Fantasy',
                'description' => 'Egy hobbit és társai veszélyes útra indulnak, hogy elpusztítsanak egy gyűrűt, amely egész Középfölde sorsát meghatározza.',
                'publication_year' => 1954,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780544003415-L.jpg',
            ],
            [
                'title' => 'Az éhezők viadala',
                'author' => 'Suzanne Collins',
                'genre' => 'Disztópia',
                'description' => 'Katniss Everdeen önként vállalja húga helyét egy kegyetlen viadalon, amelyet az ország lakói élőben követnek.',
                'publication_year' => 2008,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780439023481-L.jpg',
            ],
            [
                'title' => 'Az alkimista',
                'author' => 'Paulo Coelho',
                'genre' => 'Filozófiai regény',
                'description' => 'Egy fiatal pásztor kincset keresve hosszú utazásra indul, amely során saját álmainak és életútjának jelentőségét ismeri fel.',
                'publication_year' => 1988,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780061122415-L.jpg',
            ],
            [
                'title' => 'Száz év magány',
                'author' => 'Gabriel García Márquez',
                'genre' => 'Mágikus realizmus',
                'description' => 'A Buendía család több generációjának története egy különös településen, ahol a valóság és a mágia összefonódik.',
                'publication_year' => 1967,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780060883287-L.jpg',
            ],
            [
                'title' => 'A Mester és Margarita',
                'author' => 'Mihail Bulgakov',
                'genre' => 'Mágikus realizmus',
                'description' => 'A sátán különös kíséretével Moszkvába érkezik, miközben egy író és szerelme története bontakozik ki.',
                'publication_year' => 1967,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141182551-L.jpg',
            ],
            [
                'title' => 'Értelem és érzelem',
                'author' => 'Jane Austen',
                'genre' => 'Romantikus',
                'description' => 'Két nővér eltérő személyiséggel és világszemlélettel próbál boldogságot találni a szerelemben.',
                'publication_year' => 1811,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439662-L.jpg',
            ],
            [
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'genre' => 'Horror',
                'description' => 'Egy becsvágyó tudós mesterséges életet teremt, ám teremtménye és saját döntései tragikus következményekhez vezetnek.',
                'publication_year' => 1818,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439471-L.jpg',
            ],
            [
                'title' => 'Drakula',
                'author' => 'Bram Stoker',
                'genre' => 'Horror',
                'description' => 'Egy fiatal ügyvéd titokzatos erdélyi kastélyba érkezik, ahol egy természetfeletti lény veszélyes terveivel szembesül.',
                'publication_year' => 1897,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439846-L.jpg',
            ],
            [
                'title' => 'Dorian Gray arcképe',
                'author' => 'Oscar Wilde',
                'genre' => 'Szépirodalom',
                'description' => 'Egy gyönyörű fiatalember örök fiatalságra vágyik, miközben arcképe magán viseli erkölcsi hanyatlásának nyomait.',
                'publication_year' => 1890,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780141439570-L.jpg',
            ],
            [
                'title' => 'És már senki sem',
                'author' => 'Agatha Christie',
                'genre' => 'Krimi',
                'description' => 'Tíz idegen egy elszigetelt szigetre érkezik, ahol rejtélyes körülmények között sorra életüket vesztik.',
                'publication_year' => 1939,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780062073488-L.jpg',
            ],
            [
                'title' => 'Gyilkosság az Orient expresszen',
                'author' => 'Agatha Christie',
                'genre' => 'Krimi',
                'description' => 'Hercule Poirot egy hóban rekedt luxusvonaton próbál megfejteni egy különösen bonyolult gyilkossági ügyet.',
                'publication_year' => 1934,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780062073501-L.jpg',
            ],
            [
                'title' => 'A Da Vinci-kód',
                'author' => 'Dan Brown',
                'genre' => 'Thriller',
                'description' => 'Egy múzeumban történt gyilkosság nyomán egy szimbólumkutató ősi titkok és veszélyes összeesküvések nyomába ered.',
                'publication_year' => 2003,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780307277671-L.jpg',
            ],
            [
                'title' => 'Kisasszonyok',
                'author' => 'Louisa May Alcott',
                'genre' => 'Szépirodalom',
                'description' => 'Négy nővér felnőtté válásának története, amelyben a család, a szerelem, az álmok és az önállóság kapnak főszerepet.',
                'publication_year' => 1868,
                'cover_url' => 'https://covers.openlibrary.org/b/isbn/9780140390698-L.jpg',
            ],
        ];

        foreach ($books as $book) {
            Book::updateOrCreate(
                [
                    'title' => $book['title'],
                    'author' => $book['author'],
                ],
                $book
            );
        }
    }
}