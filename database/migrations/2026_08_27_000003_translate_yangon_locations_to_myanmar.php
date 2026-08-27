<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $cityId = DB::table('cities')->where('name', 'Yangon')->value('id');

        if (! $cityId) {
            return;
        }

        DB::table('cities')->where('id', $cityId)->update(['name' => 'ရန်ကုန်']);

        $townships = [
            'Latha' => 'လသာ',
            'Lanmadaw' => 'လမ်းမတော်',
            'Pabedan' => 'ပန်းဘဲတန်း',
            'Kyauktada' => 'ကျောက်တံတား',
            'Botahtaung' => 'ဗိုလ်တထောင်',
            'Pazundaung' => 'ပုဇွန်တောင်',
            'Bahan' => 'ဗဟန်း',
            'Dagon' => 'ဒဂုံ',
            'Sanchaung' => 'စမ်းချောင်း',
            'Ahlone' => 'အလုံ',
            'Kyimyindaing' => 'ကြည့်မြင်တိုင်',
            'Kamaryut' => 'ကမာရွတ်',
            'Hlaing' => 'လှိုင်',
            'Mayangone' => 'မရမ်းကုန်း',
            'Insein' => 'အင်းစိန်',
            'Mingaladon' => 'မင်္ဂလာဒုံ',
            'Shwepyitha' => 'ရွှေပြည်သာ',
            'Hlaingtharya' => 'လှိုင်သာယာ',
            'Thingangyun' => 'သင်္ဃန်းကျွန်း',
            'Yankin' => 'ရန်ကင်း',
            'Tamwe' => 'တာမွေ',
            'Mingalataungnyunt' => 'မင်္ဂလာတောင်ညွန့်',
            'Tharkayta' => 'သာကေတ',
            'Dawbon' => 'ဒေါပုံ',
            'South Okkalapa' => 'တောင်ဥက္ကလာပ',
            'North Okkalapa' => 'မြောက်ဥက္ကလာပ',
            'North Dagon' => 'မြောက်ဒဂုံ',
            'South Dagon' => 'တောင်ဒဂုံ',
            'East Dagon' => 'အရှေ့ဒဂုံ',
            'Dagon Seikkan' => 'ဒဂုံဆိပ်ကမ်း',
            'Dala' => 'ဒလ',
            'Seikkyi Kanaungto' => 'ဆိပ်ကြီးခနောင်တို',
            'Thanlyin' => 'သန်လျင်',
            'Kyauktan' => 'ကျောက်တန်း',
            'Thongwa' => 'သုံးခွ',
            'Kayan' => 'ခရမ်း',
            'Twante' => 'တွံတေး',
            'Kawhmu' => 'ကော့မှူး',
            'Kungyangon' => 'ကွမ်းခြံကုန်း',
        ];

        foreach ($townships as $englishName => $myanmarName) {
            DB::table('townships')
                ->where('city_id', $cityId)
                ->where('name', $englishName)
                ->update(['name' => $myanmarName]);
        }
    }

    public function down(): void
    {
        // The original English names are retained only in the prior migration's source data.
    }
};