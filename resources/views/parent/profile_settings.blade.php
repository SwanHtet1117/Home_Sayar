<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Parent Profile Settings</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-slate-800">
    @include('partials.navigation')
    <div class="min-h-screen px-4 py-8 md:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="mb-8 rounded-2xl border border-gray-100 bg-white p-8 shadow-lg">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <h3 class="mb-2 flex items-center text-xl font-bold text-gray-800">
                            <svg class="mr-2 h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            မိဘပရိုဖိုင်းဆက်တင်
                        </h3>
                        <p class="text-sm text-slate-600">Update your details, manage communication preferences, and keep your child information current.</p>                                
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-800" role="status">
                    {{ session('success') }}
                </div>
            @endif
                                    
            <div class="rounded-2xl border border-gray-100 bg-gradient-to-br from-green-50 to-emerald-50 p-6 shadow-md mb-6">
                <div class="flex items-center gap-3">
                    <label for="profile_photo" class="group relative block h-14 w-14 cursor-pointer rounded-full focus-within:ring-2 focus-within:ring-green-500 focus-within:ring-offset-2" title="Update profile photo">
                        <span id="profile-photo-preview" class="block h-14 w-14 overflow-hidden rounded-full">
                            @if ($profile?->profile_photo)
                                <img src="{{ asset('storage/' . ltrim($profile->profile_photo, '/')) }}" alt="Profile photo" class="h-full w-full object-cover">
                            @else
                                <span class="flex h-full w-full items-center justify-center bg-green-100 text-lg font-semibold text-green-700">{{ Str::upper(Str::substr(auth()->user()->name, 0, 2)) }}</span>
                            @endif
                        </span>
                        <span class="absolute -bottom-1 -right-1 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green-600 text-white shadow-md transition group-hover:bg-green-700 group-focus-within:bg-green-700" aria-hidden="true">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h3l2-3h8l2 3h3v11H3V8z"></path>
                                <circle cx="12" cy="13" r="3"></circle>
                            </svg>
                        </span>
                    </label>
                    <div>
                        <h3 class="font-semibold text-slate-900">{{ auth()->user()->name }}</h3>
                        <p class="text-sm text-slate-600">Parent account</p>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <form method="POST" action="{{ route('parent.profile.update') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <input type="file" id="profile_photo" name="profile_photo" accept="image/*" class="hidden">
                    @if ($errors->any())
                        <div class="rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                            Please correct the highlighted profile information and try again.
                        </div>
                    @endif
                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-slate-900">ကိုယ်ရေးကိုယ်တာ အချက်အလက်များ</h2>
                                <p class="text-sm text-slate-500">This information helps teachers and staff reach you quickly.</p>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Required</span>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">အမည်</label>
                                <input type="text" name="name" value="{{ old('name', $profile?->name ?? auth()->user()->name) }}" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">ဖုန်းနံပါတ်</label>
                                <input type="tel" name="phone" value="{{ old('phone', $profile?->phone) }}" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">အီးမေးလ်</label>
                                <input type="email" name="email" value="{{ old('email', $profile?->email ?? auth()->user()->email) }}" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">နေရပ်လိပ်စာ</label>
                                <textarea name="address" rows="2" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none">{{ old('address', $profile?->address) }}</textarea>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold text-slate-900">နေရာ အချက်အလက်များ</h2>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">တိုင်း/ဒေသ</label>
                                <select name="region" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">တိုင်း/ဒေသရွေးချယ်ပါ</option>
                                    @php($selectedRegion = old('region', $profile?->region ?? ''))
                                    <option value="yangon" @selected($selectedRegion === 'yangon')>ရန်ကုန်တိုင်း</option>
                                    <option value="mandalay" @selected($selectedRegion === 'mandalay')>မန္တလေးတိုင်း</option>
                                    <option value="bago" @selected($selectedRegion === 'bago')>ပဲခူးတိုင်း</option>
                                    <option value="ayeyarwady" @selected($selectedRegion === 'ayeyarwady')>ဧရာဝတီတိုင်း</option>
                                    <option value="sagaing" @selected($selectedRegion === 'sagaing')>စစ်ကိုင်းတိုင်း</option>
                                    <option value="tanintharyi" @selected($selectedRegion === 'tanintharyi')>တနင်္သာရီတိုင်း</option>
                                    <option value="kachin" @selected($selectedRegion === 'kachin')>ကချင်ပြည်နယ်</option>
                                    <option value="kayah" @selected($selectedRegion === 'kayah')>ကယားပြည်နယ်</option>
                                    <option value="kayin" @selected($selectedRegion === 'kayin')>ကရင်ပြည်နယ်</option>
                                    <option value="chin" @selected($selectedRegion === 'chin')>ချင်ပြည်နယ်</option>
                                    <option value="mon" @selected($selectedRegion === 'mon')>မွန်ပြည်နယ်</option>
                                    <option value="rakhine" @selected($selectedRegion === 'rakhine')>ရခိုင်ပြည်နယ်</option>
                                    <option value="shan" @selected($selectedRegion === 'shan')>ရှမ်းပြည်နယ်</option>
                                    <option value="naypyidaw" @selected($selectedRegion === 'naypyidaw')>နေပြည်တော်</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">မြို့နယ်</label>
                                <select name="township" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">မြို့နယ်ရွေးချယ်ပါ</option>
                                    @php($selectedTownship = old('township', $profile?->township ?? ''))
                                    <option value="kamaryut" @selected($selectedTownship === 'kamaryut')>ကမာရွတ်</option>
                                    <option value="hlaing" @selected($selectedTownship === 'hlaing')>လှိုင်</option>
                                    <option value="bahan" @selected($selectedTownship === 'bahan')>ဗဟန်း</option>
                                    <option value="yankin" @selected($selectedTownship === 'yankin')>ရန်ကင်း</option>
                                    <option value="mayangone" @selected($selectedTownship === 'mayangone')>မရမ်းကုန်း</option>
                                    <option value="thingangyun" @selected($selectedTownship === 'thingangyun')>သင်္ဃန်းကျွန်း</option>
                                    <option value="lanmadaw" @selected($selectedTownship === 'lanmadaw')>လမ်းမတော်</option>
                                    <option value="latha" @selected($selectedTownship === 'latha')>လသာ</option>
                                    <option value="pabedan" @selected($selectedTownship === 'pabedan')>ပန်းဘဲတန်း</option>
                                    <option value="kyauktada" @selected($selectedTownship === 'kyauktada')>ကျောက်တံတား</option>
                                    <option value="pazundaung" @selected($selectedTownship === 'pazundaung')>ပဇွန်တောင်</option>
                                    <option value="dagon" @selected($selectedTownship === 'dagon')>ဒဂုံ</option>
                                    <option value="northdagon" @selected($selectedTownship === 'northdagon')>ဒဂုံမြောက်ပိုင်း</option>
                                    <option value="southdagon" @selected($selectedTownship === 'southdagon')>ဒဂုံတောင်ပိုင်း</option>
                                    <option value="eastdagon" @selected($selectedTownship === 'eastdagon')>ဒဂုံအရှေ့ပိုင်း</option>
                                    <option value="seikkan" @selected($selectedTownship === 'seikkan')>ဆိပ်ကမ်း</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Latitude (လတ္တီတွဒ်)</label>
                                    <input type="text" name="latitude" id="latitude" value="{{ old('latitude', $profile?->latitude ?? '16.825000') }}" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Longitude (လောင်ဂျီတွဒ်)</label>
                                    <input type="text" name="longitude" id="longitude" value="{{ old('longitude', $profile?->longitude ?? '96.150000') }}" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Google Map Location</label>
                                <div class="flex space-x-2">
                                    <input type="url" name="google_map_location" id="googleMapLocation" value="{{ old('google_map_location', $profile?->google_map_location ?? 'https://www.google.com/maps?q=16.825000,96.150000') }}" class="flex-1 px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <button type="button" onclick="getCurrentLocation()" class="px-4 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                                        Use Current Location
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Pick Your Location on Map</label>
                                <div id="map" class="w-full h-64 rounded-lg border border-green-300 bg-gray-100"></div>
                                <p class="text-xs text-gray-500 mt-1">Click anywhere on the map to select your location</p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold text-slate-900">အကောင့် အချက်အလက်များ</h2>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">စကားဝှက်</label>
                                <input type="password" placeholder="စကားဝှက်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">စကားဝှက် အတည်ပြုပါ</label>
                                <input type="password" placeholder="စကားဝှက်ပြန်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </section>

                    <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
                        <button type="button" class="rounded-lg border border-slate-300 bg-slate-50 px-5 py-3 font-semibold text-slate-700 transition hover:bg-slate-100">Cancel</button>
                        <button type="submit" class="rounded-lg bg-green-600 px-5 py-3 font-semibold text-white shadow-md transition-all duration-200 hover:bg-green-700 hover:shadow-lg">Save Changes</button>
                    </div>
                </form>

                <aside class="space-y-6"> 
                    <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <h3 class="font-semibold text-slate-900">Quick Tips</h3>
                        <ul class="mt-3 space-y-2 text-sm text-slate-600">
                            <li>• Keep your phone number updated for urgent notifications.</li>
                            <li>• Add child details to improve lesson coordination.</li>
                            <li>• Review communication preferences regularly.</li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </div>
    @include('partials.footer')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.getElementById('profile_photo').addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (!file) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function(loadEvent) {
                document.getElementById('profile-photo-preview').innerHTML = `<img src="${loadEvent.target.result}" alt="Profile photo preview" class="h-full w-full object-cover">`;
            };
            reader.readAsDataURL(file);
        });

        let map;
        let marker;
        // Initialize the map and set up event listeners
        function initMap() {
            const savedLatitude = Number.parseFloat(document.getElementById('latitude').value);
            const savedLongitude = Number.parseFloat(document.getElementById('longitude').value);
            const latitude = Number.isFinite(savedLatitude) ? savedLatitude : 16.850117;
            const longitude = Number.isFinite(savedLongitude) ? savedLongitude : 96.231454;

            map = L.map('map').setView([latitude, longitude], 15);

            // Add OpenStreetMap tiles (free, no API key required)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add click listener to map
            map.on('click', function(event) {
                placeMarker(event.latlng);
            });

            placeMarker(L.latLng(latitude, longitude), false);
        }
        // Function to place a marker on the map and update form fields
        function placeMarker(location, updateFields = true) {
            // Remove existing marker if any
            if (marker) {
                map.removeLayer(marker);
            }

            // Create new marker
            marker = L.marker(location).addTo(map);

            if (updateFields) {
                const lat = location.lat;
                const lng = location.lng;

                document.getElementById('latitude').value = lat.toFixed(6);
                document.getElementById('longitude').value = lng.toFixed(6);
                document.getElementById('googleMapLocation').value = `https://www.google.com/maps?q=${lat},${lng}`;
            }
        }
        // Function to get current location and update map and form fields
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showCurrentPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
        // Function to handle successful retrieval of current position
        function showCurrentPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            
            // Update form fields
            document.getElementById('latitude').value = latitude.toFixed(6);
            document.getElementById('longitude').value = longitude.toFixed(6);
            document.getElementById('googleMapLocation').value = `https://www.google.com/maps?q=${latitude},${longitude}`;
            
            // Update map with current location
            map.setView([latitude, longitude], 15);
            placeMarker(L.latLng(latitude, longitude));
        }
        // Function to handle errors in retrieving current position
        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                default:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        // Initialize map when page loads
        window.onload = initMap;
    </script>
</body>
</html>
