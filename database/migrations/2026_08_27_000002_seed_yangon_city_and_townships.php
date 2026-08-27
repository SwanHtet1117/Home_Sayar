<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $now = now();

        DB::table('cities')->insertOrIgnore([
            'name' => 'ရန်ကုန်',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $cityId = DB::table('cities')->where('name', 'ရန်ကုန်')->value('id');

        $townships = [
            'လသာ',
            'လမ်းမတော်',
            'ပန်းဘဲတန်း',
            'ကျောက်တံတား',
            'ဗိုလ်တထောင်',
            'ပုဇွန်တောင်',
            'ဗဟန်း',
            'ဒဂုံ',
            'စမ်းချောင်း',
            'အလုံ',
            'ကြည့်မြင်တိုင်',
            'ကမာရွတ်',
            'လှိုင်',
            'မရမ်းကုန်း',
            'အင်းစိန်',
            'မင်္ဂလာဒုံ',
            'ရွှေပြည်သာ',
            'လှိုင်သာယာ',
            'သင်္ဃန်းကျွန်း',
            'ရန်ကင်း',
            'တာမွေ',
            'မင်္ဂလာတောင်ညွန့်',
            'သာကေတ',
            'ဒေါပုံ',
            'တောင်ဥက္ကလာပ',
            'မြောက်ဥက္ကလာပ',
            'မြောက်ဒဂုံ',
            'တောင်ဒဂုံ',
            'အရှေ့ဒဂုံ',
            'ဒဂုံဆိပ်ကမ်း',
            'ဒလ',
            'ဆိပ်ကြီးခနောင်တို',
            'သန်လျင်',
            'ကျောက်တန်း',
            'သုံးခွ',
            'ခရမ်း',
            'တွံတေး',
            'ကော့မှူး',
            'ကွမ်းခြံကုန်း',
        ];

        DB::table('townships')->insertOrIgnore(array_map(
            fn (string $name): array => [
                'city_id' => $cityId,
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            $townships,
        ));
    }

    public function down(): void
    {
        $cityId = DB::table('cities')->where('name', 'ရန်ကုန်')->value('id');

        if ($cityId) {
            DB::table('townships')->where('city_id', $cityId)->delete();
            DB::table('cities')->where('id', $cityId)->delete();
        }
    }
};