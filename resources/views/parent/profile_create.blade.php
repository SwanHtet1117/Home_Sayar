<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Create Parent Profile</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="relative z-0">
    @include('partials.navigation')
    <div class="relative z-10 p-6 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center mb-6">
                <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">မိဘ ပရိုဖိုင်း ဖန်တီးရန်</h2>
            </div>

            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">ပရိုဖိုင်း အချက်အလက်များ ဖြည့်ပါ</h3>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('parent.profile.store') }}" class="space-y-6">
                        @csrf
                        <!-- Personal Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">ကိုယ်ရေးကိုယ်တာ အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Name အမည်</label>
                                    <input name="name" type="text" value="{{ old('name', auth()->user()->name ?? '') }}" placeholder="အမည်ဖြည့်ပါ" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Phone ဖုန်းနံပါတ်</label>
                                    <input name="phone" type="tel" value="{{ old('phone') }}" placeholder="09-xxxxxxxxx" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">အီးမေးလ်</label>
                                    <input name="email" type="email" value="{{ old('email', auth()->user()->email ?? '') }}" readonly class="w-full bg-gray-100 px-4 py-3 rounded-lg border border-green-300 text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Address နေရပ်လိပ်စာ</label>
                                    <textarea name="address" rows="2" placeholder="နေရပ်လိပ်စာဖြည့်ပါ" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none">{{ old('address') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">နေရာ အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">City တိုင်း/ပြည်နယ်</label>
                                    <select id="city" name="region" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->name }}" data-city-id="{{ $city->id }}" {{ old('region') == $city->name ? 'selected' : '' }}>{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Towhship မြို့နယ်</label>
                                    <select id="township" name="township" required class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">Select Township</option>
                                        @foreach ($townships as $township)
                                            <option value="{{ $township->name }}" data-city-id="{{ $township->city_id }}" {{ old('township') == $township->name ? 'selected' : '' }}>{{ $township->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1">Latitude (လတ္တီတွဒ်)</label>
                                        <input name="latitude" type="text" id="latitude" value="{{ old('latitude') }}" placeholder="Click Get Location to auto-fill" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-600 mb-1">Longitude (လောင်ဂျီတွဒ်)</label>
                                        <input name="longitude" type="text" id="longitude" value="{{ old('longitude') }}" placeholder="Click Get Location to auto-fill" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Google Map Location</label>
                                    <div class="flex space-x-2">
                                        <input name="google_map_location" type="text" id="googleMapLocation" value="{{ old('google_map_location') }}" placeholder="Click on map to pick location or paste Google Maps link" class="flex-1 px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <button type="button" onclick="getCurrentLocation()" class="px-4 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                                            Use Current Location
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Pick Your Location on Map</label>
                                    <div id="map" class="relative z-0 w-full h-64 rounded-lg border border-green-300 bg-gray-100"></div>
                                    <p class="text-xs text-gray-500 mt-1">Click anywhere on the map to select your location</p>
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">အကောင့် အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Password စကားဝှက်</label>
                                    <input id="password" type="password" placeholder="စကားဝှက်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <p id="passwordError" class="mt-1 hidden text-sm text-red-600">Password does not match the current account password.</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Confirm Password စကားဝှက် အတည်ပြုပါ</label>
                                    <input id="confirmPassword" type="password" placeholder="စကားဝှက်ပြန်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <p id="confirmPasswordError" class="mt-1 hidden text-sm text-red-600">Passwords do not match the current account password.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="flex items-start">
                            <input name="terms_agreed" type="checkbox" id="terms" value="1" class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer mt-0.5">
                            <label for="terms" class="ml-3 text-sm text-gray-700 cursor-pointer">
                                ကျွန်ုပ်သည် <a href="#" class="text-green-600 hover:text-green-800 underline">အသုံးပြုသူစည်းမျဉ်း</a> နှင့် <a href="#" class="text-green-600 hover:text-green-800 underline">ကိုယ်ရေးကိုယ်တာမူဝါဒ</a> တို့ကို လက်ခံသည်
                            </label>
                        </div>
                        <p id="termsError" class="hidden text-sm text-red-600">Please accept the Terms and Conditions before continuing.</p>

                        <!-- Submit Button -->
                        <div class="flex justify-end space-x-4">
                            <button type="button" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                                ပယ်ဖျက်ရန်
                            </button>
                            <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                ပရိုဖိုင်း ဖန်တီးမည်
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    အကောင့်ရှိပြီးသားလား? 
                    <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 font-semibold underline">အကောင့်ဝင်ရန်</a>
                </p>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        .leaflet-pane,
        .leaflet-control,
        .leaflet-top,
        .leaflet-bottom {
            z-index: 0 !important;
        }
        .leaflet-container {
            z-index: 0 !important;
            position: relative;
        }
    </style>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        let map;
        let marker;

        const citySelect = document.getElementById('city');
        const townshipSelect = document.getElementById('township');
        const form = document.querySelector('form');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        const termsCheckbox = document.getElementById('terms');
        const termsError = document.getElementById('termsError');

        function setFieldError(element, errorElement, message) {
            if (element) {
                element.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                element.classList.remove('border-green-300');
            }
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.classList.remove('hidden');
            }
        }

        function clearFieldError(element, errorElement) {
            if (element) {
                element.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                element.classList.add('border-green-300');
            }
            if (errorElement) {
                errorElement.classList.add('hidden');
                errorElement.textContent = '';
            }
        }

        function validateForm() {
            let isValid = true;

            clearFieldError(passwordInput, passwordError);
            clearFieldError(confirmPasswordInput, confirmPasswordError);
            termsError.classList.add('hidden');

            if (passwordInput.value.trim() && confirmPasswordInput.value.trim() && passwordInput.value !== confirmPasswordInput.value) {
                setFieldError(passwordInput, passwordError, 'Password does not match the current account password.');
                setFieldError(confirmPasswordInput, confirmPasswordError, 'Passwords do not match the current account password.');
                isValid = false;
            }

            if (!termsCheckbox.checked) {
                termsError.classList.remove('hidden');
                isValid = false;
            }

            return isValid;
        }

        form.addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        [passwordInput, confirmPasswordInput].forEach(function(input) {
            input.addEventListener('input', function() {
                if (passwordInput.value && confirmPasswordInput.value && passwordInput.value === confirmPasswordInput.value) {
                    clearFieldError(passwordInput, passwordError);
                    clearFieldError(confirmPasswordInput, confirmPasswordError);
                }
            });
        });

        termsCheckbox.addEventListener('change', function() {
            if (termsCheckbox.checked) {
                termsError.classList.add('hidden');
            }
        });

        function filterTownships() {
            const cityId = citySelect.options[citySelect.selectedIndex]?.dataset.cityId;

            Array.from(townshipSelect.options).forEach(function(option) {
                if (!option.value) {
                    option.hidden = false;
                    return;
                }

                const isVisible = option.dataset.cityId === cityId;
                option.hidden = !isVisible;
            });

            if (cityId === undefined || cityId === '') {
                townshipSelect.value = '';
                townshipSelect.disabled = true;
                return;
            }

            townshipSelect.disabled = false;

            if (!Array.from(townshipSelect.options).some(option => option.value && option.dataset.cityId === cityId && option.value === townshipSelect.value)) {
                townshipSelect.value = '';
            }
        }

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

        citySelect.addEventListener('change', filterTownships);
        townshipSelect.disabled = true;
        filterTownships();

        // Initialize map when page loads
        window.onload = initMap;
    </script>
</body>
</html>