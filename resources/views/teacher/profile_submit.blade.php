<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Profile Admission</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8 border border-gray-100 mb-5">
            <div class="flex items-center mb-6">
                <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <h2 class="text-xl font-bold text-gray-800">ဆရာအဖြစ်လျှောက်ထားသူ၏ အချက်အလက်များ ဖြည့်သွင်းရန်</h2>
            </div>

            <form wire:submit.prevent="saveProfile" class="space-y-6">
                <!-- Personal/Contact Information -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3">ကိုယ်‌ရေးအချက်အလက်များ</label>                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Name အမည်</label>
                            <input type="text" wire:model="name" placeholder="အမည်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Gender ဆရာ/ဆရာမ</label>
                            <div class="flex space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" wire:model="gender" value="male" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာ (Male)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" wire:model="gender" value="female" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာမ (Female)</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Date of Birth မွေးသက္ကရာဇ်</label>
                            <input type="date" wire:model="dob" placeholder="" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Nationality နိုင်ငံသား</label>
                            <input type="text" wire:model="citizen" placeholder="E.g: Myanmar" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">NRC/Passport No.</label>
                            <input type="text" wire:model="nrc" placeholder="7/PaTaNa(N)777777" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                    
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone ဖုန်းနံပါတ်</label>
                            <input type="tel" wire:model="phone" placeholder="09-xxxxxxxxx" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                    
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email အီးမေးလ်</label>
                            <input type="email" wire:model="email" placeholder="example@gmail.com" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>  
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Social Media Link</label>
                            <input type="url" wire:model="social_media_link" placeholder="https://www.facebook.com/example" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                  
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Current Address လက်ရှိနေရပ်လိပ်စာ</label>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">City တိုင်း/ပြည်နယ်</label>
                                <select wire:model="city" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">Select City</option>
                                    <option value="Yangon">Yangon</option>
                                    <option value="Mandalay">Mandalay</option>
                                    <option value="Naypyidaw">Naypyidaw</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Township မြို့နယ်</label>
                                <select wire:model="township" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">Select Township</option>
                                    <option value="Mingalardon">Mingalardon</option>
                                    <option value="Dagon">Dagon</option>
                                    <option value="Kamayut">Kamayut</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Detail Address အသေးစိတ်</label>
                                <input type="text" wire:model="detail_add" placeholder="အမှတ်(၁၁၆)၊ မြရတနာလမ်း၊ ၂၄ ရပ်ကွက်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education Background -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3">ပညာရေးဆိုင်ရာ အချက်အလက်များ</label>                
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Degree အမြင့်ဆုံး ရရှိခဲ့သည့်ဘွဲ့/လက်မှတ်</label>
                            <input type="text" wire:model="degree" placeholder="Master of English" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Graduated Year ရရှိခဲ့သည့်ခုနှစ်</label>
                            <input type="date" wire:model="graduated_year" placeholder="" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">University/School တက္ကသိုလ်၊ကျောင်း အမည်</label>
                            <input type="text" wire:model="university_school" placeholder="University/School Name" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>  
                    </div>
                </div>

                <!-- Teaching Experience -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3"> သင်ကြားမှု အတွေ့အကြုံ </label>                
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Career Level</label>
                            <input type="text" wire:model="career_level" placeholder="Full Time Teacher" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Experience Year</label>
                            <input type="text" wire:model="experience_year" placeholder="5 Years" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Teaching Subjects</label>
                            <input type="text" wire:model="teaching_subject" placeholder="Mathematics" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">သင်ကြားမှု နည်းလမ်းများ</label>
                            <p class="text-xs text-gray-500 mb-3">* သင်ကြားခဲ့သည့် အတွေ့အကြုံများနှင့် ကျောင်းသားများအား ကူညီနိုင်မည့် နည်းလမ်းများ ဖော်ပြပါ</p>
                            <textarea wire:model="experience" rows="4" placeholder="ဥပမာ - ရူပဗေဒနှင့် သင်္ချာဘာသာရပ်များကို ဆယ်တန်းအဆင့်တွင် ၅ နှစ်တာ သင်ကြားခဲ့ပါသည်။ ကျောင်းသားများအား နားလည်လွယ်ကူစေရန် ဥပမာများနှင့် ရှင်းပြသင်ကြားပေးပါသည်။" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                        </div> 
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Teaching Video သင်ကြားမှု ဗီဒီယို</label>
                            <p class="text-xs text-gray-500 mb-2">* youtube ပေါ်ရှိသင်ကြားမှု ဗီဒီယိုတစ်ခုကို တင်ပါ (MP4, MOV, AVI - အများဆုံး 50MB)</p>
                            <input type="text" wire:model="teaching_video" placeholder="https://www.youtube.com/watch?v=example" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            @error('teaching_video') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror                           
                        </div> 
                    </div>
                </div>

                <!-- Teaching Type Selection -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3"> သင်ကြားပေးနိုင်မည့်အချက်များ</label> 
                    <!-- TODO: Add teaching type selection -->
                    <div class="bg-green-50 p-4">                 
                        <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားမည့် ပုံစံ</label>                
                        <div class="flex space-x-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="modes" value="onsite" class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အိမ်တိုင်ရာရောက် (On-site)</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="modes" value="online" class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အွန်လိုင်း (Online Class)</span>
                            </label>
                        </div>                                
                    </div> 
                    <!-- Teacher's Preferred Townships -->
                    <div class="p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားနိုင်သည့် မြို့နယ်များ</label>
                        <p class="text-xs text-gray-500 mb-3">* အိမ်တိုင်ရာရောက်သင်လျှင် သွားလာနိုင်မည့် မြို့နယ်များကို ရွေးပါ</p>
                    
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            <!-- Central and Downtown -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-2 mb-1 border-b border-green-200 pb-1">ဗဟိုပိုင်းနှင့် မြို့လယ်ခေါင်</div>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="latha" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">လသာ (Latha)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="lanmadaw" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">လမ်းမတော် (Lanmadaw)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="pabedan" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ပန်းဘဲတန်း (Pabedan)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kyauktada" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကျောက်တံတား (Kyauktada)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="botahtaung" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဗိုလ်တထောင် (Botahtaung)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="pazundaung" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ပုဇွန်တောင် (Pazundaung)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="bahan" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဗဟန်း (Bahan)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="dagon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒဂုံ (Dagon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="sanchaung" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">စမ်းချောင်း (Sanchaung)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="ahlone" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">အလုံ (Ahlone)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kyimyindaing" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကြည့်မြင်တိုင် (Kyimyindaing)</span>
                                </label>
                            
                            <!-- Northern District -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">မြောက်ပိုင်းခရိုင်</div>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kamaryut" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကမာရွတ် (Kamaryut)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="hlaing" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">လှိုင် (Hlaing)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="mayangone" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">မရမ်းကုန်း (Mayangone)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="insein" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">အင်းစိန် (Insein)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="mingaladon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">မင်္ဂလာဒုံ (Mingaladon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="shwepyitha" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ရွှေပြည်သာ (Shwepyitha)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="hlaingtharya" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">လှိုင်သာယာ (Hlaingtharya)</span>
                                </label>
                            
                            <!-- Eastern District -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">အရှေ့ပိုင်းခရိုင်</div>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="thingangyun" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">သင်္ဃန်းကျွန်း (Thingangyun)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="yankin" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ရန်ကင်း (Yankin)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="tamwe" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">တာမွေ (Tamwe)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="mingalataungnyunt" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">မင်္ဂလာတောင်ညွန့် (Mingala Taungnyunt)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="tharkayta" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">သာကေတ (Thaketa)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="dawbon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒေါပုံ (Dawbon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="south_okkalapa" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">တောင်ဥက္ကလာပ (South Okkalapa)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="north_okkalapa" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">မြောက်ဥက္ကလာပ (North Okkalapa)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="north_dagon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒဂုံမြို့သစ်မြောက်ပိုင်း (North Dagon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="south_dagon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒဂုံမြို့သစ်တောင်ပိုင်း (South Dagon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="east_dagon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒဂုံမြို့သစ်အရှေ့ပိုင်း (East Dagon)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="seikkan_dagon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒဂုံမြို့သစ်ဆိပ်ကမ်း (Dagon Seikkan)</span>
                                </label>
                            
                            <!-- Southern District -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">တောင်ပိုင်းခရိုင်</div>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="dallah" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဒလ (Dala)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="seikkyikanaungto" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ဆိပ်ကြီးခနောင်တို (Seikkyi Kanaungto)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="thanlyin" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">သန်လျင် (Thanlyin)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kyauktan" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကျောက်တန်း (Kyauktan)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="thongwa" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">သုံးခွ (Thongwa)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kayan" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ခရမ်း (Kayan)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="twante" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">တွံတေး (Twante)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kawhmu" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကော့မှူး (Kawhmu)</span>
                                </label>
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" wire:model="selectedTownships" value="kungyangon" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">ကွမ်းခြံကုန်း (Kungyangon)</span>
                                </label>
                            
                        </div>
                    </div> 
                    <!-- Subject Selection -->
                    <div class="bg-green-50 p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">အဓိကသင်မည့် ဘာသာရပ်များ</label>
                        <p class="text-xs text-gray-500 mb-3">* သင်ကြားနိုင်သည့် ဘာသာရပ်များကို ရွေးပါ</p>
                    
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            <!-- Basic Education -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-2 mb-1 border-b border-green-200 pb-1">အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)</div>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="myanmar" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">မြန်မာစာ (Myanmar)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="english" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">အင်္ဂလိပ်စာ (English)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="mathematics" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">သင်္ချာ (Mathematics)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="chemistry" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဓာတုဗေဒ (Chemistry)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="physics" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ရူပဗေဒ (Physics)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="biology" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဇီဝဗေဒ (Biology)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="economics" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဘောဂဗေဒ (Economics)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="geography" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ပထဝီဝင် (Geography)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="history" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">သမိုင်း (History)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="general_science" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">အထွေထွေသိပ္ပံ (General Science)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="social_studies" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">လူမှုရေးသိပ္ပံ (Social Studies)</span>
                            </label>

                            <!-- Primary Level -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">မူလတန်းအဆင့် (Grade 1 - 5)</div>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="primary_all" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဘာသာစုံ (All Subjects)</span>
                            </label>

                            <!-- International Curriculum -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">International Curriculum</div>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="igcse" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">IGCSE</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="ged" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">GED</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="sat" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">SAT</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="ielts" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">IELTS Preparation</span>
                            </label>

                            <!-- Languages -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">ဘာသာစကား (Languages)</div>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="lang_english" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">General English / 4 Skills</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="lang_japanese" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဂျပန်စာ (Japanese - N5 to N1)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="lang_chinese" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">တရုတ်စာ (Chinese - HSK)</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="lang_korean" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ကိုရီးယားစာ (Korean)</span>
                            </label>

                            <!-- Technology -->
                            <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">နည်းပညာနှင့် ကွန်ပျူတာ</div>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="comp_basic" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Computer Basic & Office Use</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="comp_programming" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Coding & Web Development</span>
                            </label>
                            <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" wire:model="selectedSubjects" value="comp_design" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Graphic Design & Photo Editing</span>
                            </label>
                        </div>
                    </div>            
                    <!-- Expected Salary -->
                    <div class="p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">မျှော်မှန်းသင်တန်းကြေး (လစာ / နှုန်းထား)</label>
                        <input type="text" wire:model="fees" placeholder="ဥပမာ - ၁ လ ၁၅၀,၀၀၀ ကျပ်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                    </div>
                </div>

                <!-- Document Uploads -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3"> အထောက်အထားစာရွက်စာတမ်းများ</label>
                    <p class="text-xs text-gray-500 mb-3">* NRC ကတ်ပြား၊ ဘွဲ့လက်မှတ်နှင့် အခြားသက်သေခံစာရွက်များ တင်ပေးပါ</p>
                    
                    <div class="space-y-4">
                        <!-- NRC Upload -->
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">NRC ကတ်ပြား (နိုင်ငံသားစီစစ်ကတ်ပြား)</label>
                            <input type="file" wire:model="nrc_file" accept="image/*,.pdf" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-1">ဖော်မတ်များ: JPG, PNG, PDF (အများဆုံး 5MB)</p>
                        </div>

                        <!-- Degree Upload -->
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">ဘွဲ့လက်မှတ်များ (Degree Certificates)</label>
                            <input type="file" wire:model="degree_file" accept="image/*,.pdf" multiple class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-1">ဖော်မတ်များ: JPG, PNG, PDF (အများဆုံး 5MB တစ်ခုချင်း)</p>
                        </div>

                        <!-- Other Documents Upload -->
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">အခြားသက်သေခံစာရွက်များ (Other Documents)</label>
                            <input type="file" wire:model="other_files" accept="image/*,.pdf" multiple class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-1">ဥပမာ - သင်တန်းလက်မှတ်များ၊ အတွေ့အကြုံလက်မှတ်များ (ဖော်မတ်များ: JPG, PNG, PDF)</p>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6 border-t border-gray-200 flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                        Profile သိမ်းဆည်းမည်
                    </button>
                </div>
            </form>
        </div>
    </div>    
    @include('partials.footer')
</body>
</html>