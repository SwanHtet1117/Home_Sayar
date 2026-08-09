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
                    <a href="{{ route('parent.dashboard') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                        Parent Dashboard
                    </a>
                </div>
            </div>

            <div class="rounded-2xl border border-gray-100 bg-gradient-to-br from-green-50 to-emerald-50 p-6 shadow-md mb-6">
                <div class="flex items-center gap-3">
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-lg font-semibold text-green-700">AA</div>
                    <div>
                        <h3 class="font-semibold text-slate-900">Aye Aye Win</h3>
                        <p class="text-sm text-slate-600">Parent account</p>
                    </div>
                </div>
                <button type="button" class="mt-4 w-full rounded-lg border border-green-300 bg-white px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Upload Profile Photo</button>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <form class="space-y-6">
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
                                <input type="text" value="Aye Aye Win" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">ဖုန်းနံပါတ်</label>
                                <input type="tel" value="09-123456789" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">အီးမေးလ်</label>
                                <input type="email" value="parent@example.com" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">နေရပ်လိပ်စာ</label>
                                <textarea rows="2" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none">No. 12, Hlaing Township, Yangon</textarea>
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
                                <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">တိုင်း/ဒေသရွေးချယ်ပါ</option>
                                    <option value="yangon" selected>ရန်ကုန်တိုင်း</option>
                                    <option value="mandalay">မန္တလေးတိုင်း</option>
                                    <option value="bago">ပဲခူးတိုင်း</option>
                                    <option value="ayeyarwady">ဧရာဝတီတိုင်း</option>
                                    <option value="sagaing">စစ်ကိုင်းတိုင်း</option>
                                    <option value="tanintharyi">တနင်္သာရီတိုင်း</option>
                                    <option value="kachin">ကချင်ပြည်နယ်</option>
                                    <option value="kayah">ကယားပြည်နယ်</option>
                                    <option value="kayin">ကရင်ပြည်နယ်</option>
                                    <option value="chin">ချင်ပြည်နယ်</option>
                                    <option value="mon">မွန်ပြည်နယ်</option>
                                    <option value="rakhine">ရခိုင်ပြည်နယ်</option>
                                    <option value="shan">ရှမ်းပြည်နယ်</option>
                                    <option value="naypyidaw">နေပြည်တော်</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">မြို့နယ်</label>
                                <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">မြို့နယ်ရွေးချယ်ပါ</option>
                                    <option value="kamaryut">ကမာရွတ်</option>
                                    <option value="hlaing" selected>လှိုင်</option>
                                    <option value="bahan">ဗဟန်း</option>
                                    <option value="yankin">ရန်ကင်း</option>
                                    <option value="mayangone">မရမ်းကုန်း</option>
                                    <option value="thingangyun">သင်္ဃန်းကျွန်း</option>
                                    <option value="lanmadaw">လမ်းမတော်</option>
                                    <option value="latha">လသာ</option>
                                    <option value="pabedan">ပန်းဘဲတန်း</option>
                                    <option value="kyauktada">ကျောက်တံတား</option>
                                    <option value="pazundaung">ပဇွန်တောင်</option>
                                    <option value="dagon">ဒဂုံ</option>
                                    <option value="northdagon">ဒဂုံမြောက်ပိုင်း</option>
                                    <option value="southdagon">ဒဂုံတောင်ပိုင်း</option>
                                    <option value="eastdagon">ဒဂုံအရှေ့ပိုင်း</option>
                                    <option value="seikkan">ဆိပ်ကမ်း</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Latitude (လတ္တီတွဒ်)</label>
                                    <input type="text" id="latitude" value="16.825000" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Longitude (လောင်ဂျီတွဒ်)</label>
                                    <input type="text" id="longitude" value="96.150000" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Google Map Location</label>
                                <div class="flex space-x-2">
                                    <input type="text" id="googleMapLocation" value="https://www.google.com/maps?q=16.825000,96.150000" class="flex-1 px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
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
        let map;
        let marker;

        function initMap() {
            // Initialize map with default center (will be updated with device location if available)
            map = L.map('map').setView([16.850117, 96.231454], 13);

            // Add OpenStreetMap tiles (free, no API key required)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add click listener to map
            map.on('click', function(event) {
                placeMarker(event.latlng);
            });

            // Try to get device location on load
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        map.setView([lat, lng], 15);
                        placeMarker(L.latLng(lat, lng));
                    },
                    function(error) {
                        console.log('Could not get device location, using default');
                    }
                );
            }
        }

        function placeMarker(location) {
            // Remove existing marker if any
            if (marker) {
                map.removeLayer(marker);
            }

            // Create new marker
            marker = L.marker(location).addTo(map);

            // Update form fields
            const lat = location.lat;
            const lng = location.lng;
            
            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);
            document.getElementById('googleMapLocation').value = `https://www.google.com/maps?q=${lat},${lng}`;
        }

        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showCurrentPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

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
