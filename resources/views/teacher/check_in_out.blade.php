<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Teacher Check-In/Check-Out</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
    @include('partials.navigation')
    <div class="p-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center mb-6">
                <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">ဆရာ/ဆရာမ Check-In / Check-Out</h2>
            </div>

            <!-- Current Status Card -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mb-6">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">လက်ရှိ အခြေအနေ</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-600 mb-1">အခြေအနေ</p>
                            <p id="status" class="text-lg font-bold text-gray-800">Not Checked In</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-600 mb-1">Check-In အချိန်</p>
                            <p id="checkInTime" class="text-lg font-bold text-gray-800">--:--:--</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-600 mb-1">Check-Out အချိန်</p>
                            <p id="checkOutTime" class="text-lg font-bold text-gray-800">--:--:--</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parent Location Information -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mb-6">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">မိဘ နေရပ်လိပ်စာ အချက်အလက်များ</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">မိဘ အမည်</label>
                            <select id="parentSelect" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                <option value="">မိဘရွေးချယ်ပါ</option>
                                <option value="1">ဒေါ်သီရိမောင်</option>
                                <option value="2">ဦးမောင်မောင်</option>
                                <option value="3">ဒေါ်အေးအေး</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">ကျောင်းသား/သူ အမည်</label>
                            <select id="studentSelect" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                <option value="">ကျောင်းသား/သူရွေးချယ်ပါ</option>
                                <option value="1">မောင်သူရဲ</option>
                                <option value="2">မမြတ်သူ</option>
                                <option value="3">ကိုဇော်ဝင်း</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">မိဘ လတ္တီတွဒ်</label>
                            <input type="text" id="parentLatitude" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">မိဘ လောင်ဂျီတွဒ်</label>
                            <input type="text" id="parentLongitude" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 shadow-sm">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-1">မိဘ နေရပ်လိပ်စာ</label>
                        <textarea id="parentAddress" rows="2" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 shadow-sm resize-none"></textarea>
                    </div>

                    <div class="bg-blue-50 rounded-lg p-4 mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm text-blue-800">လုံခြုံရေး အချက်အလက်: မိဘနေရပ်မှ အကွာအဝေး <span id="distance" class="font-bold">--</span> မီတာ</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Location Verification -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mb-6">
                <div class="bg-gradient-to-r from-purple-500 to-pink-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">လက်ရှိ တည်နေရာ အတည်ပြုချက်</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">သင့် လတ္တီတွဒ်</label>
                            <input type="text" id="currentLatitude" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">သင့် လောင်ဂျီတွဒ်</label>
                            <input type="text" id="currentLongitude" readonly class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 shadow-sm">
                        </div>
                    </div>

                    <div class="mb-4">
                        <button type="button" onclick="getCurrentLocation()" class="w-full px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                            လက်ရှိ တည်နေရာ ရယူရန်
                        </button>
                    </div>

                    <div id="locationStatus" class="hidden bg-green-50 rounded-lg p-4 mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-sm text-green-800">တည်နေရာ အတည်ပြုပြီးပါပြီ</p>
                        </div>
                    </div>

                    <div id="map" class="w-full h-64 rounded-lg border border-green-300 bg-gray-100"></div>
                    <p class="text-xs text-gray-500 mt-1">မြေပုံပေါ်တွင် သင့်တည်နေရာ ပြသပါမည်</p>
                </div>
            </div>

            <!-- Check-In/Check-Out Actions -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mb-6">
                <div class="bg-gradient-to-r from-orange-500 to-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Check-In / Check-Out လုပ်ဆောင်ချက်များ</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <button type="button" id="checkInBtn" onclick="checkIn()" class="w-full px-6 py-4 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Check-In လုပ်ရန်
                        </button>
                        <button type="button" id="checkOutBtn" onclick="checkOut()" disabled class="w-full px-6 py-4 bg-gray-400 text-white font-semibold rounded-lg transition-all duration-200 shadow-md flex items-center justify-center cursor-not-allowed">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Check-Out လုပ်ရန်
                        </button>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-600 mb-1">မှတ်ချက်</label>
                        <textarea id="notes" rows="3" placeholder="သင်ကြားမှု မှတ်ချက်များ ရေးသားပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                    </div>
                </div>
            </div>

            <!-- Safety Verification -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100 mb-6">
                <div class="bg-gradient-to-r from-red-500 to-pink-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">လုံခြုံရေး အတည်ပြုချက်</h3>
                </div>
                <div class="p-6">
                    <div id="safetyStatus" class="bg-yellow-50 rounded-lg p-4 mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            <p class="text-sm text-yellow-800">တည်နေရာ အတည်ပြုချက် လိုအပ်ပါသည်</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                            <input type="checkbox" id="locationVerified" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="text-sm text-slate-700">မိဘနေရပ်နှင့် နီးစပ်ပါသည် (500 မီတာအတွင်း)</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                            <input type="checkbox" id="safeEnvironment" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="text-sm text-slate-700">သင်ကြားရာ နေရာ လုံခြုံပါသည်</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                            <input type="checkbox" id="emergencyContact" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="text-sm text-slate-700">အရေးပေါ် ဆက်သွယ်ရန် နံပါတ် သိပါသည်</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Back to Dashboard -->
            <div class="text-center">
                <a href="{{ route('teacher.dashboard') }}" class="inline-flex items-center px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    ဆရာ/ဆရာမ Dashboard သို့ ပြန်သွားရန်
                </a>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        let map;
        let marker;
        let parentMarker;
        let isCheckedIn = false;
        let currentLat = null;
        let currentLng = null;

        // Sample parent location data (should come from database)
        const parentLocations = {
            '1': { lat: 16.825000, lng: 96.150000, address: 'No. 12, Hlaing Township, Yangon' },
            '2': { lat: 16.866100, lng: 96.195100, address: 'No. 45, Bahan Township, Yangon' },
            '3': { lat: 16.850117, lng: 96.231454, address: 'No. 78, Kamaryut Township, Yangon' }
        };

        function initMap() {
            map = L.map('map').setView([16.850117, 96.231454], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add click listener to map for manual location selection
            map.on('click', function(event) {
                placeMarker(event.latlng);
            });
        }

        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showCurrentPosition, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showCurrentPosition(position) {
            currentLat = position.coords.latitude;
            currentLng = position.coords.longitude;

            document.getElementById('currentLatitude').value = currentLat.toFixed(6);
            document.getElementById('currentLongitude').value = currentLng.toFixed(6);

            document.getElementById('locationStatus').classList.remove('hidden');
            document.getElementById('locationStatus').classList.add('bg-green-50');

            map.setView([currentLat, currentLng], 15);
            placeMarker(L.latLng(currentLat, currentLng));

            // Calculate distance from parent location
            calculateDistance();
        }

        function placeMarker(location) {
            // Remove existing marker if any
            if (marker) {
                map.removeLayer(marker);
            }

            // Create new marker
            marker = L.marker(location).addTo(map);

            // Update current location fields
            currentLat = location.lat;
            currentLng = location.lng;
            
            document.getElementById('currentLatitude').value = currentLat.toFixed(6);
            document.getElementById('currentLongitude').value = currentLng.toFixed(6);
            
            document.getElementById('locationStatus').classList.remove('hidden');
            document.getElementById('locationStatus').classList.add('bg-green-50');

            // Calculate distance from parent location
            calculateDistance();
        }

        function calculateDistance() {
            const parentId = document.getElementById('parentSelect').value;
            if (parentId && parentLocations[parentId] && currentLat && currentLng) {
                const parentLat = parentLocations[parentId].lat;
                const parentLng = parentLocations[parentId].lng;
                
                const distance = getDistanceFromLatLonInMeters(currentLat, currentLng, parentLat, parentLng);
                document.getElementById('distance').textContent = distance.toFixed(0);

                // Update safety verification
                if (distance <= 500) {
                    document.getElementById('locationVerified').checked = true;
                    updateSafetyStatus();
                }
            }
        }

        function getDistanceFromLatLonInMeters(lat1, lon1, lat2, lon2) {
            const R = 6371e3; // Earth's radius in meters
            const φ1 = lat1 * Math.PI / 180;
            const φ2 = lat2 * Math.PI / 180;
            const Δφ = (lat2 - lat1) * Math.PI / 180;
            const Δλ = (lon2 - lon1) * Math.PI / 180;

            const a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
                      Math.cos(φ1) * Math.cos(φ2) *
                      Math.sin(Δλ/2) * Math.sin(Δλ/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

            return R * c;
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

        function checkIn() {
            if (!currentLat || !currentLng) {
                alert("ဦးစွာ သင့်တည်နေရာကို ရယူပါ");
                return;
            }

            if (!document.getElementById('parentSelect').value) {
                alert("မိဘရွေးချယ်ပါ");
                return;
            }

            if (!document.getElementById('locationVerified').checked) {
                alert("မိဘနေရပ်နှင့် နီးစပ်မှုကို အတည်ပြုပါ");
                return;
            }

            const now = new Date();
            document.getElementById('checkInTime').textContent = now.toLocaleTimeString();
            document.getElementById('status').textContent = 'Checked In';
            document.getElementById('status').classList.add('text-green-600');
            
            document.getElementById('checkInBtn').disabled = true;
            document.getElementById('checkInBtn').classList.add('bg-gray-400', 'cursor-not-allowed');
            document.getElementById('checkInBtn').classList.remove('bg-green-600', 'hover:bg-green-700');
            
            document.getElementById('checkOutBtn').disabled = false;
            document.getElementById('checkOutBtn').classList.remove('bg-gray-400', 'cursor-not-allowed');
            document.getElementById('checkOutBtn').classList.add('bg-red-600', 'hover:bg-red-700');

            isCheckedIn = true;
            alert("Check-In အောင်မြင်ပါသည်!");
        }

        function checkOut() {
            const now = new Date();
            document.getElementById('checkOutTime').textContent = now.toLocaleTimeString();
            document.getElementById('status').textContent = 'Checked Out';
            document.getElementById('status').classList.remove('text-green-600');
            document.getElementById('status').classList.add('text-red-600');
            
            document.getElementById('checkOutBtn').disabled = true;
            document.getElementById('checkOutBtn').classList.add('bg-gray-400', 'cursor-not-allowed');
            document.getElementById('checkOutBtn').classList.remove('bg-red-600', 'hover:bg-red-700');

            isCheckedIn = false;
            alert("Check-Out အောင်မြင်ပါသည်!");
        }

        function updateSafetyStatus() {
            const locationVerified = document.getElementById('locationVerified').checked;
            const safeEnvironment = document.getElementById('safeEnvironment').checked;
            const emergencyContact = document.getElementById('emergencyContact').checked;

            const safetyStatus = document.getElementById('safetyStatus');
            
            if (locationVerified && safeEnvironment && emergencyContact) {
                safetyStatus.classList.remove('bg-yellow-50');
                safetyStatus.classList.add('bg-green-50');
                safetyStatus.innerHTML = `
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <p class="text-sm text-green-800">လုံခြုံရေး �核查အောင်မြင်ပါသည်</p>
                    </div>
                `;
            } else {
                safetyStatus.classList.remove('bg-green-50');
                safetyStatus.classList.add('bg-yellow-50');
                safetyStatus.innerHTML = `
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <p class="text-sm text-yellow-800">လုံခြုံရေး အတည်ပြုချက် လိုအပ်ပါသည်</p>
                    </div>
                `;
            }
        }

        // Parent selection change handler
        document.getElementById('parentSelect').addEventListener('change', function() {
            const parentId = this.value;
            if (parentLocations[parentId]) {
                document.getElementById('parentLatitude').value = parentLocations[parentId].lat.toFixed(6);
                document.getElementById('parentLongitude').value = parentLocations[parentId].lng.toFixed(6);
                document.getElementById('parentAddress').value = parentLocations[parentId].address;
                
                // Add parent marker to map
                if (parentMarker) {
                    map.removeLayer(parentMarker);
                }
                parentMarker = L.marker([parentLocations[parentId].lat, parentLocations[parentId].lng], {
                    icon: L.divIcon({
                        className: 'custom-div-icon',
                        html: "<div style='background-color: #3B82F6; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;'></div>",
                        iconSize: [12, 12]
                    })
                }).addTo(map);
                
                calculateDistance();
            }
        });

        // Safety checkbox handlers
        document.getElementById('locationVerified').addEventListener('change', updateSafetyStatus);
        document.getElementById('safeEnvironment').addEventListener('change', updateSafetyStatus);
        document.getElementById('emergencyContact').addEventListener('change', updateSafetyStatus);

        // Initialize map when page loads
        window.onload = initMap;
    </script>
</body>
</html>
