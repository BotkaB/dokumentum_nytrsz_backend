<?php

namespace Database\Seeders;

use App\Models\Elszamolas;
use App\Models\ElszamolasTipus;
use App\Models\Ugyfel;
use Illuminate\Database\Seeder;

class ElszamolasSeeder extends Seeder
{
    public function run(): void
    {
        $ugyfelek = Ugyfel::all();

        foreach ($ugyfelek as $ugyfel) {
            // 1. Ha az ügyfél típus ID-ja 5 vagy 8, akkor legfeljebb 3 bevonás típusú elszámolást generáljunk
            if (in_array($ugyfel->ugyfel_tipus_id, [5, 8])) {
                // Ellenőrizzük, hány bevonás típusú elszámolás van már az ügyfélnek
                $bevonasElszamolasCount = Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)
                    ->whereHas('elszamolasTipus', function ($query) {
                        $query->where('elnevezes', 'bevonás');
                    })
                    ->count();

                // Véletlenszerűen döntünk a létrehozandó bevonás típusú elszámolások számáról, maximum 3
                $maxBevonasCount = 3;
                $remainingCount = $maxBevonasCount - $bevonasElszamolasCount;
                $bevonasCountToCreate = rand(0, $remainingCount);

                // Ha kell létrehozni új bevonás típusú elszámolásokat
                for ($i = 0; $i < $bevonasCountToCreate; $i++) {
                    // Véletlenszerűen döntünk a bevonás típusú elszámolás állapotáról
                    $bevonasAllapota = rand(0, 1) === 1 ? 'elszámolható' : 'nem elszámolható';

                    // Hozzunk létre egy bevonás típusú elszámolást
                    $bevonasElszamolas = Elszamolas::factory()->create([
                        'ugyfel_id' => $ugyfel->ugyfel_id,
                        'elszamolas_tipus_id' => ElszamolasTipus::where('elnevezes', 'bevonás')->first()->elszamolas_tipus_id,
                        'elszamolhatosag_allapota' => $bevonasAllapota,
                    ]);

                    // Ha a bevonás elszámolható, akkor minden további bevonás típusú elszámolás "korábban elszámolható" legyen
                    if ($bevonasElszamolas->elszamolhatosag_allapota === 'elszámolható') {
                        // Módosítjuk a többi bevonás típusú elszámolás állapotát, ha már van elszámolható
                        Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)
                            ->whereHas('elszamolasTipus', function ($query) {
                                $query->where('elnevezes', 'bevonás');
                            })
                            ->where('elszamolhatosag_allapota', '!=', 'elszámolható')
                            ->update(['elszamolhatosag_allapota' => 'korábban elszámolható']);
                    }
                }
            } else {
                // 2. Ha az ügyfél típusa 1, akkor legfeljebb 6 elszámolás lehet
                if ($ugyfel->ugyfel_tipus_id == 1) {
                    // Ellenőrizzük, hány elszámolás van már az ügyfélnél
                    $elszamolasCount = Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)->count();

                    // Véletlenszerűen döntünk a létrehozandó elszámolások számáról, maximum 6
                    $maxElszamolasCount = 6;
                    $remainingCount = $maxElszamolasCount - $elszamolasCount;
                    $elszamolasCountToCreate = rand(0, $remainingCount);

                    // Ha kell létrehozni új elszámolásokat
                    for ($i = 0; $i < $elszamolasCountToCreate; $i++) {
                        // Véletlenszerűen döntünk az elszámolás típusáról (bevonás vagy más típus)
                        $tipusId = rand(0, 1) === 1 
                            ? ElszamolasTipus::where('elnevezes', 'bevonás')->first()->elszamolas_tipus_id
                            : ElszamolasTipus::where('elnevezes', '!=', 'bevonás')->inRandomOrder()->first()->elszamolas_tipus_id;

                        // Véletlenszerűen döntünk az elszámolás állapotáról
                        $allapot = rand(0, 1) === 1 ? 'elszámolható' : 'nem elszámolható';

                        // Hozzunk létre egy elszámolást a választott típusból és állapotban
                        $elszamolas = Elszamolas::factory()->create([
                            'ugyfel_id' => $ugyfel->ugyfel_id,
                            'elszamolas_tipus_id' => $tipusId,
                            'elszamolhatosag_allapota' => $allapot,
                        ]);

                        // Ha a bevonás elszámolható, akkor minden további bevonás típusú elszámolás "korábban elszámolható" legyen
                        if ($elszamolas->elszamolhatosag_allapota === 'elszámolható' 
                            && $elszamolas->elszamolasTipus->elnevezes === 'bevonás') {
                            // Módosítjuk a többi bevonás típusú elszámolás állapotát, ha már van elszámolható
                            Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)
                                ->whereHas('elszamolasTipus', function ($query) {
                                    $query->where('elnevezes', 'bevonás');
                                })
                                ->where('elszamolhatosag_allapota', '!=', 'elszámolható')
                                ->update(['elszamolhatosag_allapota' => 'korábban elszámolható']);
                        }
                    }
                } else {
                    // Az ügyféltípus ID más esetekben más típusú elszámolásokat is generálhat
                    // Először megnézzük, hogy van-e "bevonás" típusú elszámolás, és annak állapotától függően hozunk létre új típusú elszámolásokat
                    $bevonasElszamolas = Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)
                        ->whereHas('elszamolasTipus', function ($query) {
                            $query->where('elnevezes', 'bevonás');
                        })
                        ->first();

                    // Ha a bevonás elszámolható, akkor más típusú elszámolások is lehetnek elszámolhatóak
                    if ($bevonasElszamolas && $bevonasElszamolas->elszamolhatosag_allapota === 'elszámolható') {
                        // Más típusú elszámolások létrehozása, és ha szükséges, azok állapotát "korábban elszámolható"-ra állítjuk
                        $tipusok = ElszamolasTipus::where('elnevezes', '!=', 'bevonás')->get();
                        foreach ($tipusok as $tipus) {
                            $masElszamolas = Elszamolas::where('ugyfel_id', $ugyfel->ugyfel_id)
                                ->where('elszamolas_tipus_id', $tipus->elszamolas_tipus_id)
                                ->where('elszamolhatosag_allapota', 'elszámolható')
                                ->first();

                            if ($masElszamolas) {
                                // Ha már van elszámolható az adott típusú elszámolásból, akkor az újakat korábban elszámolhatóvá állítjuk
                                Elszamolas::factory()->create([
                                    'ugyfel_id' => $ugyfel->ugyfel_id,
                                    'elszamolas_tipus_id' => $tipus->elszamolas_tipus_id,
                                    'elszamolhatosag_allapota' => 'korábban elszámolható',
                                ]);
                            } else {
                                // Ha nincs, akkor véletlenszerűen döntünk a típus állapotáról
                                $allapot = rand(0, 1) === 1 ? 'elszámolható' : 'nem elszámolható';
                                Elszamolas::factory()->create([
                                    'ugyfel_id' => $ugyfel->ugyfel_id,
                                    'elszamolas_tipus_id' => $tipus->elszamolas_tipus_id,
                                    'elszamolhatosag_allapota' => $allapot,
                                ]);
                            }
                        }
                    }
                }
            }
        }
    }
}
