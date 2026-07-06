function getAddress() {
    const btnLokasi = document.getElementById("btnLokasi");
    const latitudeInput = document.getElementById("latitude");
    const longitudeInput = document.getElementById("longitude");
    const desaInput = document.getElementById("desa");
    const kabupatenInput = document.getElementById("kabupaten");
    const provinsiInput = document.getElementById("provinsi");
    const alamatInput = document.getElementById("alamat");
    const jarakInput = document.getElementById("jarak");

    // KOORDINAT TARGET
    const TARGET_LAT = -3.72798827569691;
    const TARGET_LNG = 119.73481455373071;

    btnLokasi.addEventListener("click", function () {
        // Cek apakah browser mendukung Geolocation API
        if (!navigator.geolocation) {
            alert("Browser Anda tidak mendukung fitur geolokasi!");
            return;
        }

        // Tampilkan loading
        // loadingText.style.display = "inline";
        btnLokasi.disabled = true;

        // Minta izin lokasi
        navigator.geolocation.getCurrentPosition(
            // Success callback
            function (position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;

                // Isi input koordinat
                latitudeInput.value = lat;
                longitudeInput.value = lng;

                // HITUNG JARAK KE TARGET
                const jarak = hitungJarak(lat, lng, TARGET_LAT, TARGET_LNG);
                jarakInput.value = jarak;

                // Panggil fungsi reverse geocoding untuk dapatkan alamat
                getAddressFromCoordinates(lat, lng);

                // Sembunyikan loading
                // loadingText.style.display = "none";
                btnLokasi.disabled = false;
            },
            // Error callback
            function (error) {
                let pesanError = "";
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        pesanError =
                            "Izin lokasi ditolak. Silakan izinkan akses lokasi di browser Anda.";
                        break;
                    case error.POSITION_UNAVAILABLE:
                        pesanError = "Informasi lokasi tidak tersedia.";
                        break;
                    case error.TIMEOUT:
                        pesanError = "Waktu permintaan lokasi habis.";
                        break;
                    default:
                        pesanError = "Terjadi kesalahan saat mengambil lokasi.";
                }
                alert(pesanError);
                // loadingText.style.display = "none";
                btnLokasi.disabled = false;
            },
            // Options
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0,
            },
        );
    });

    // Fungsi reverse geocoding menggunakan Nominatim (OpenStreetMap)
    function getAddressFromCoordinates(lat, lng) {
        // URL API Nominatim
        const url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json&addressdetails=1&accept-language=id`;

        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                if (data && data.address) {
                    const address = data.address;

                    // AMBIL DESA/KELURAHAN
                    let desa =
                        address.village || // Desa
                        address.neighbourhood || // Lingkungan
                        address.suburb || // Kelurahan
                        address.city_district || // Kecamatan
                        address.town || // Kota kecil
                        "Tidak ditemukan";

                    // Ambil kabupaten/kota
                    let kabupaten =
                        address.city ||
                        address.town ||
                        address.county ||
                        address.state_district ||
                        "Tidak ditemukan";

                    // Ambil provinsi
                    let provinsi =
                        address.state ||
                        address.province ||
                        address.region ||
                        "Tidak ditemukan";

                    // Ambil alamat lengkap
                    let alamatLengkap = data.display_name || "";

                    // ISI INPUT DESA
                    desaInput.value = desa;

                    // Isi input lainnya
                    kabupatenInput.value = kabupaten;
                    provinsiInput.value = provinsi;
                    alamatInput.value = alamatLengkap;

                    console.log("Data lokasi berhasil diambil:", {
                        desa,
                        kabupaten,
                        provinsi,
                        alamatLengkap,
                    });
                } else {
                    alert("Gagal mengambil data alamat. Silakan coba lagi.");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert(
                    "Gagal menghubungi server geocoding. Periksa koneksi internet Anda.",
                );
            });
    }

    // FUNGSI MENGHITUNG JARAK (Haversine Formula)
    function hitungJarak(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radius Bumi dalam kilometer

        // Konversi derajat ke radian
        const dLat = ((lat2 - lat1) * Math.PI) / 180;
        const dLon = ((lon2 - lon1) * Math.PI) / 180;

        const a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos((lat1 * Math.PI) / 180) *
                Math.cos((lat2 * Math.PI) / 180) *
                Math.sin(dLon / 2) *
                Math.sin(dLon / 2);

        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

        const jarakKm = R * c; // Jarak dalam kilometer

        // Format hasil
        if (jarakKm < 1) {
            // Jika kurang dari 1 km, tampilkan dalam meter
            const jarakMeter = Math.round(jarakKm * 1000);
            return `${jarakMeter} meter`;
        } else if (jarakKm < 10) {
            // Jika kurang dari 10 km, tampilkan 1 desimal
            return `${jarakKm.toFixed(1)} km`;
        } else {
            // Jika lebih dari 10 km, tampilkan tanpa desimal
            return `${Math.round(jarakKm)} km`;
        }
    }
}
