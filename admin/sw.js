// Nama cache yang digunakan untuk menyimpan file
const cacheName = "v2"; // Ganti versi cache saat ada perubahan besar

// Daftar file yang akan disimpan dalam cache saat pertama kali diinstall
const preCache = [
    "/", // Halaman utama
    "/index.php", // Halaman utama PHP (fallback jika offline)
    "/assets/css/sb-admin-2.min.css", // CSS utama
    "/assets/vendor/fontawesome-free/css/all.min.css", // Font Awesome
    "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", // Bootstrap JS
    "/assets/vendor/jquery/jquery.min.js" // jQuery
];

// Event install: Menyimpan file dalam cache saat pertama kali service worker diinstall
self.addEventListener("install", (event) => {
    console.log("Service Worker: Installing...");
    
    event.waitUntil(
        (async () => {
            const cache = await caches.open(cacheName);
            try {
                await cache.addAll(preCache); // Menyimpan daftar file ke cache
                console.log("Pre-cache sukses!");
            } catch (error) {
                console.error("Pre-cache gagal:", error);
            }
        })()
    );
});

// Event activate: Menghapus cache lama saat ada update
self.addEventListener("activate", (event) => {
    console.log("Service Worker: Activated");
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.filter(name => name !== cacheName).map(name => caches.delete(name)) // Hapus cache lama
            );
        })
    );
    self.clients.claim(); // Memastikan SW langsung mengontrol halaman tanpa reload
});

// Event fetch: Mengambil data dari cache atau jaringan
self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.open(cacheName).then(cache => {
            return cache.match(event.request).then(cachedResponse => {
                // Ambil data terbaru dari server jika tersedia
                const fetchPromise = fetch(event.request)
                    .then(networkResponse => {
                        if (networkResponse && networkResponse.ok) {
                            cache.put(event.request, networkResponse.clone()); // Simpan versi terbaru ke cache
                        }
                        return networkResponse;
                    })
                    .catch(() => cachedResponse || caches.match("/index.php")); // Jika offline, gunakan cache terakhir

                return cachedResponse || fetchPromise;
            });
        })
    );
});
