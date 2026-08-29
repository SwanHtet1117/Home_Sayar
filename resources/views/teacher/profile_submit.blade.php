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

            <form action="{{ route('teacher.profile.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <!-- Personal/Contact Information -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3">ကိုယ်‌ရေးအချက်အလက်များ</label>                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Name အမည်</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="အမည်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Gender ဆရာ/ဆရာမ</label>
                            <div class="flex space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="male" {{ old('gender') === 'male' ? 'checked' : '' }} class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာ (Male)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="female" {{ old('gender') === 'female' ? 'checked' : '' }} class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာမ (Female)</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Date of Birth မွေးသက္ကရာဇ်</label>
                            <input type="date" name="dob" value="{{ old('dob') }}" placeholder="" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Nationality နိုင်ငံသား</label>
                            <input type="text" name="nationality" value="{{ old('nationality') }}" placeholder="E.g: Myanmar" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">NRC/Passport No.</label>
                            <input type="text" name="nrc" value="{{ old('nrc') }}" placeholder="7/PaTaNa(N)777777" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                    
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone ဖုန်းနံပါတ်</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="09-xxxxxxxxx" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                    
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email အီးမေးလ်</label>
                            <input type="email" name="email" value="{{ old('email', auth()->user()->email ?? '') }}" readonly class="w-full px-4 py-3 rounded-lg border border-green-300 bg-gray-100 text-gray-700 cursor-not-allowed focus:outline-none shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Social Media Link</label>
                            <input type="url" name="social_media_link" value="{{ old('social_media_link') }}" placeholder="https://www.facebook.com/example" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                  
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Current Address လက်ရှိနေရပ်လိပ်စာ</label>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">City တိုင်း/ပြည်နယ်</label>
                                <select name="city" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Township မြို့နယ်</label>
                                <select name="township" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">Select Township</option>
                                    @foreach ($townships as $township)
                                        <option value="{{ $township->id }}" data-city-id="{{ $township->city_id }}" {{ old('township') == $township->id ? 'selected' : '' }}>{{ $township->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Detail Address အသေးစိတ်</label>
                                <input type="text" name="detail_add" value="{{ old('detail_add') }}" placeholder="အမှတ်(၁၁၆)၊ မြရတနာလမ်း၊ ၂၄ ရပ်ကွက်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
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
                            <input type="text" name="degree" value="{{ old('degree') }}" placeholder="Master of English" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Graduated Year ရရှိခဲ့သည့်ခုနှစ်</label>
                            <input type="date" name="graduated_year" value="{{ old('graduated_year') }}" placeholder="" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">University/School တက္ကသိုလ်၊ကျောင်း အမည်</label>
                            <input type="text" name="university_school" value="{{ old('university_school') }}" placeholder="University/School Name" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>  
                    </div>
                </div>

                <!-- Teaching Experience -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3"> သင်ကြားမှု အတွေ့အကြုံ </label>                
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Career Level</label>
                            <input type="text" name="career_level" value="{{ old('career_level') }}" placeholder="Full Time Teacher" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Experience Year</label>
                            <input type="text" name="experience_year" value="{{ old('experience_year') }}" placeholder="5 Years" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Teaching Subjects</label>
                            <input type="text" name="teaching_subject" value="{{ old('teaching_subject') }}" placeholder="Mathematics" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">သင်ကြားမှု နည်းလမ်းများ</label>
                            <p class="text-xs text-gray-500 mb-3">* သင်ကြားခဲ့သည့် အတွေ့အကြုံများနှင့် ကျောင်းသားများအား ကူညီနိုင်မည့် နည်းလမ်းများ ဖော်ပြပါ</p>
                            <textarea name="experience" rows="4" placeholder="ဥပမာ - ရူပဗေဒနှင့် သင်္ချာဘာသာရပ်များကို ဆယ်တန်းအဆင့်တွင် ၅ နှစ်တာ သင်ကြားခဲ့ပါသည်။ ကျောင်းသားများအား နားလည်လွယ်ကူစေရန် ဥပမာများနှင့် ရှင်းပြသင်ကြားပေးပါသည်။" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none">{{ old('experience') }}</textarea>
                        </div> 
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Teaching Video သင်ကြားမှု ဗီဒီယို</label>
                            <p class="text-xs text-gray-500 mb-2">* youtube ပေါ်ရှိသင်ကြားမှု ဗီဒီယိုတစ်ခုကို တင်ပါ (MP4, MOV, AVI - အများဆုံး 50MB)</p>
                            <input type="text" name="teaching_video" value="{{ old('teaching_video') }}" placeholder="https://www.youtube.com/watch?v=example" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            @error('teaching_video') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror                           
                        </div> 
                    </div>
                </div>

                <!-- Teaching Type Selection -->
                <div class="bg-gray-50 rounded-xl p-4 border border-3">
                    <label class="block text-lg font-semibold text-gray-700 mb-3"> သင်ကြားပေးနိုင်မည့်အချက်များ</label> 
                    <div class="bg-green-50 p-4">                 
                        <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားမည့် ပုံစံ</label>                
                        <div class="flex space-x-6">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="modes[]" value="onsite" {{ in_array('onsite', (array) old('modes', []), true) ? 'checked' : '' }} class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အိမ်တိုင်ရာရောက် (On-site)</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="modes[]" value="online" {{ in_array('online', (array) old('modes', []), true) ? 'checked' : '' }} class="h-5 w-4 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အွန်လိုင်း (Online Class)</span>
                            </label>
                        </div>                                 
                    </div>

                    <div class="p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားနိုင်သည့် အတန်းများ</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            @foreach ($classes as $class)
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" name="selectedClasses[]" value="{{ $class->id }}" {{ in_array((string) $class->id, (array) old('selectedClasses', []), true) ? 'checked' : '' }} class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">{{ $class->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားနိုင်သည့် မြို့နယ်များ</label>
                        <p class="text-xs text-gray-500 mb-3">* အိမ်တိုင်ရာရောက်သင်လျှင် သွားလာနိုင်မည့် မြို့နယ်များကို ရွေးပါ</p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            @foreach ($townships as $township)
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" name="selectedTownships[]" value="{{ $township->id }}" {{ in_array((string) $township->id, (array) old('selectedTownships', []), true) ? 'checked' : '' }} class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">{{ $township->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-green-50 p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">အဓိကသင်မည့် ဘာသာရပ်များ</label>
                        <p class="text-xs text-gray-500 mb-3">* သင်ကြားနိုင်သည့် ဘာသာရပ်များကို ရွေးပါ</p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                            @foreach ($subjects as $subject)
                                <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                                    <input type="checkbox" name="selectedSubjects[]" value="{{ $subject->id }}" {{ in_array((string) $subject->id, (array) old('selectedSubjects', []), true) ? 'checked' : '' }} class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">{{ $subject->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <!-- Expected Salary -->
                    <div class="p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">မျှော်မှန်းသင်တန်းကြေး (လစာ / နှုန်းထား)</label>
                        <input type="text" name="fees" value="{{ old('fees') }}" placeholder="ဥပမာ - ၁ လ ၁၅၀,၀၀၀ ကျပ်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
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
                            <input type="file" name="nrc_file" accept="image/*,.pdf" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-1">ဖော်မတ်များ: JPG, PNG, PDF (အများဆုံး 5MB)</p>
                        </div>

                        <!-- Degree Upload -->
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">ဘွဲ့လက်မှတ်များ (Degree Certificates)</label>
                            <input type="file" name="degree_file" accept="image/*,.pdf" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-1">ဖော်မတ်များ: JPG, PNG, PDF (အများဆုံး 5MB တစ်ခုချင်း)</p>
                        </div>

                        <!-- Other Documents Upload -->
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">အခြားသက်သေခံစာရွက်များ (Other Documents)</label>
                            <input type="file" name="other_files[]" accept="image/*,.pdf" multiple class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
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