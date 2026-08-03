<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Parent Search Teacher</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="p-4 md:p-8 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 mb-8">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    ဆရာအမြန်ရှာဖွေရန်
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <select wire:model.live="filterSubject" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                        <option value="">ဘာသာရပ်အားလုံး</option>

                        <optgroup label="အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)">
                            <option value="myanmar">မြန်မာစာ (Myanmar)</option>
                            <option value="english">အင်္ဂလိပ်စာ (English)</option>
                            <option value="mathematics">သင်္ချာ (Mathematics)</option>
                            <option value="chemistry">ဓာတုဗေဒ (Chemistry)</option>
                            <option value="physics">ရူပဗေဒ (Physics)</option>
                            <option value="biology">ဇီဝဗေဒ (Biology)</option>
                            <option value="economics">ဘောဂဗေဒ (Economics)</option>
                            <option value="geography">ပထဝီဝင် (Geography)</option>
                            <option value="history">သမိုင်း (History)</option>
                            <option value="general_science">အထွေထွေသိပ္ပံ (General Science)</option>
                            <option value="social_studies">လူမှုရေးသိပ္ပံ (Social Studies)</option>
                        </optgroup>

                        <optgroup label="မူလတန်းအဆင့် (Grade 1 - 5)">
                            <option value="primary_all">ဘာသာစုံ (All Subjects)</option>
                        </optgroup>

                        <optgroup label="International Curriculum">
                            <option value="igcse">IGCSE</option>
                            <option value="ged">GED</option>
                            <option value="sat">SAT</option>
                            <option value="ielts">IELTS Preparation</option>
                        </optgroup>

                        <optgroup label="ဘာသာစကား (Languages)">
                            <option value="lang_english">General English / 4 Skills</option>
                            <option value="lang_japanese">ဂျပန်စာ (Japanese - N5 to N1)</option>
                            <option value="lang_chinese">တရုတ်စာ (Chinese - HSK)</option>
                            <option value="lang_korean">ကိုရီးယားစာ (Korean)</option>
                        </optgroup>

                        <optgroup label="နည်းပညာနှင့် ကွန်ပျူတာ">
                            <option value="comp_basic">Computer Basic & Office Use</option>
                            <option value="comp_programming">Coding & Web Development</option>
                            <option value="comp_design">Graphic Design & Photo Editing</option>
                        </optgroup>
                    </select>
                    
                    <select wire:model.live="filterTownship" class="w-full px-4 py-1 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                        <option value="">မြို့နယ်အားလုံး (ရန်ကုန်)</option>

                        <optgroup label="ဗဟိုပိုင်းနှင့် မြို့လယ်ခေါင်">
                            <option value="latha">လသာ (Latha)</option>
                            <option value="lanmadaw">လမ်းမတော် (Lanmadaw)</option>
                            <option value="pabedan">ပန်းဘဲတန်း (Pabedan)</option>
                            <option value="kyauktada">ကျောက်တံတား (Kyauktada)</option>
                            <option value="botahtaung">ဗိုလ်တထောင် (Botahtaung)</option>
                            <option value="pazundaung">ပုဇွန်တောင် (Pazundaung)</option>
                            <option value="bahan">ဗဟန်း (Bahan)</option>
                            <option value="dagon">ဒဂုံ (Dagon)</option>
                            <option value="sanchaung">စမ်းချောင်း (Sanchaung)</option>
                            <option value="ahlone">အလုံ (Ahlone)</option>
                            <option value="kyimyindaing">ကြည့်မြင်တိုင် (Kyimyindaing)</option>
                        </optgroup>

                        <optgroup label="မြောက်ပိုင်းခရိုင်">
                            <option value="kamaryut">ကမာရွတ် (Kamaryut)</option>
                            <option value="hlaing">လှိုင် (Hlaing)</option>
                            <option value="mayangone">မရမ်းကုန်း (Mayangone)</option>
                            <option value="insein">အင်းစိန် (Insein)</option>
                            <option value="mingaladon">မင်္ဂလာဒုံ (Mingaladon)</option>
                            <option value="shwepyitha">ရွှေပြည်သာ (Shwepyitha)</option>
                            <option value="hlaingtharya">လှိုင်သာယာ (Hlaingtharya)</option>
                        </optgroup>

                        <optgroup label="အရှေ့ပိုင်းခရိုင်">
                            <option value="thingangyun">သင်္ဃန်းကျွန်း (Thingangyun)</option>
                            <option value="yankin">ရန်ကင်း (Yankin)</option>
                            <option value="tamwe">တာမွေ (Tamwe)</option>
                            <option value="mingalataungnyunt">မင်္ဂလာတောင်ညွန့် (Mingala Taungnyunt)</option>
                            <option value="tharkayta">သာကေတ (Thaketa)</option>
                            <option value="dawbon">ဒေါပုံ (Dawbon)</option>
                            <option value="south_okkalapa">တောင်ဥက္ကလာပ (South Okkalapa)</option>
                            <option value="north_okkalapa">မြောက်ဥက္ကလာပ (North Okkalapa)</option>
                            <option value="north_dagon">ဒဂုံမြို့သစ်မြောက်ပိုင်း (North Dagon)</option>
                            <option value="south_dagon">ဒဂုံမြို့သစ်တောင်ပိုင်း (South Dagon)</option>
                            <option value="east_dagon">ဒဂုံမြို့သစ်အရှေ့ပိုင်း (East Dagon)</option>
                            <option value="seikkan_dagon">ဒဂုံမြို့သစ်ဆိပ်ကမ်း (Dagon Seikkan)</option>
                        </optgroup>

                        <optgroup label="တောင်ပိုင်းခရိုင်">
                            <option value="dallah">ဒလ (Dala)</option>
                            <option value="seikkyikanaungto">ဆိပ်ကြီးခနောင်တို (Seikkyi Kanaungto)</option>
                            <option value="thanlyin">သန်လျင် (Thanlyin)</option>
                            <option value="kyauktan">ကျောက်တန်း (Kyauktan)</option>
                            <option value="thongwa">သုံးခွ (Thongwa)</option>
                            <option value="kayan">ခရမ်း (Kayan)</option>
                            <option value="twante">တွံတေး (Twante)</option>
                            <option value="kawhmu">ကော့မှူး (Kawhmu)</option>
                            <option value="kungyangon">ကွမ်းခြံကုန်း (Kungyangon)</option>
                        </optgroup>
                    </select>

                    <select wire:model.live="filterMode" class="w-full px-4 py-1 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                        <option value="">သင်ကြားမှုပုံစံ အားလုံး</option>
                        <option value="onsite">အိမ်တိုင်ရာရောက်</option>
                        <option value="online">Online Class</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                    <div>
                        <div class="flex justify-between items-start">
                            <div class="flex items-center space-x-3">
                                <div class="h-14 w-14 rounded-full bg-green-100 flex items-center justify-center font-bold text-green-700 text-lg shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 flex items-center mb-2">
                                        ဒေါ်သီရိမောင်
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            ✓ Verified Tutor
                                        </span>
                                    </h4>
                                    <p class="text-xs text-gray-500">ရန်ကုန်တက္ကသိုလ် (M.Sc Physics)</p>
                                    <p class="text-xs text-gray-500">ဆရာမ (Female)</p>
                                    <div class="flex items-center mt-2 space-x-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <span class="text-sm font-semibold text-gray-700 ml-1">4.5</span>
                                        <span class="text-xs text-gray-500">(အကဲဖြတ်အမှတ် ၁၅ မှတ်)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 space-y-2">
                            <p class="text-sm text-gray-700"><span class="font-semibold">သင်ကြားခွင့်:</span> Grade 10, 11 (Physics)</p>
                            <p class="text-sm text-gray-700"><span class="font-semibold">နယ်မြေ:</span> လှိုင်၊ ကမာရွတ် (အိမ်တိုင်ရာရောက်)</p>
                            <p class="text-sm text-green-600 font-semibold">၁ လ - ၁၂၀,၀၀၀ ကျပ် (ညှိနှိုင်း)</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <button wire:click="requestTutor(1)" class="w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-md hover:shadow-lg text-sm">
                            ယခုဆရာမနှင့် ဆက်သွယ်ရန် တောင်းဆိုမည်
                        </button>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                    <div>
                        <div class="flex justify-between items-start">
                            <div class="flex items-center space-x-3">
                                <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center font-bold text-blue-700 text-lg shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 flex items-center mb-2">
                                        ဦးကျော်ဇော်
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            ✓ Verified Tutor
                                        </span>
                                    </h4>
                                    <p class="text-xs text-gray-500">ရန်ကုန်နည်းပညာတက္ကသိုလ် (B.Sc Mathematics)</p>
                                    <p class="text-xs text-gray-500">ဆရာ (Male)</p>
                                    <div class="flex items-center mt-2 space-x-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <span class="text-sm font-semibold text-gray-700 ml-1">5.0</span>
                                        <span class="text-xs text-gray-500">(အကဲဖြတ်အမှတ် ၂၀ မှတ်)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 space-y-2">
                            <p class="text-sm text-gray-700"><span class="font-semibold">သင်ကြားခွင့်:</span> Grade 9, 10, 11 (Mathematics)</p>
                            <p class="text-sm text-gray-700"><span class="font-semibold">နယ်မြေ:</span> ဗဟန်း၊ ဒဂုံ (Online)</p>
                            <p class="text-sm text-green-600 font-semibold">၁ လ - ၁၀၀,၀၀၀ ကျပ် (ညှိနှိုင်း)</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <button wire:click="requestTutor(2)" class="w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-md hover:shadow-lg text-sm">
                            ယခုဆရာနှင့် ဆက်သွယ်ရန် တောင်းဆိုမည်
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>