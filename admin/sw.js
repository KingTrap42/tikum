const cacheName = "v1";
const preCache = [
    "/",
    "/index.php",
    "../assets/css/sb-admin-2.min.css",
    "../assets/vendor/fontawesome-free/css/all.min.css",
    "../assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "../assets/vendor/jquery/jquery.min.js"
];

self.addEventListener("install", (e) => {
    console.log("Service worker installed");

    e.waitUntil(
        (async () => {
            const cache = await caches.open(cacheName);
            await cache.addAll(preCache);
        })()
    );
});

self.addEventListener("activate", event => {
    console.log("Service worker ready");
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.filter(cacheName => cacheName !== 'v1').map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

self.addEventListener("fetch", (e) => {
    e.respondWith(
        (async () => {
            const cache = await caches.open(cacheName);
            const resCache = await cache.match(e.request);

            if (resCache) {
                return resCache;
            }

            try {
                const res = await fetch(e.request);

                if (res && res.ok) {
                    const clonedRes = res.clone();
                    cache.put(e.request, clonedRes);
                }

                return res;
            } catch (error) {
                console.log(error);
            }
        })()
    );
});
