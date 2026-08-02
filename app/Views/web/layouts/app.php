<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($seoTitle) ?></title>
    <meta name="description" content="<?= esc($description) ?>">
    <meta name="keywords" content="<?= esc($keywords) ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/favicon_io/site.webmanifest">
    <link rel="canonical" href="<?= esc($canonicalUrl) ?>">
    <meta property="og:title" content="<?= esc($seoTitle) ?>">
    <meta property="og:description" content="<?= esc($description) ?>">
    <meta property="og:url" content="<?= esc($canonicalUrl) ?>">
    <meta property="og:type" content="<?= esc($metaType) ?>">
    <meta property="og:image" content="<?= esc($metaImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($seoTitle) ?>">
    <meta name="twitter:description" content="<?= esc($description) ?>">
    <meta name="twitter:image" content="<?= esc($metaImage) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        },
                        dark: {
                            50: '#f6f6f6',
                            100: '#e7e7e7',
                            200: '#d1d1d1',
                            300: '#b0b0b0',
                            400: '#888888',
                            500: '#6d6d6d',
                            600: '#5d5d5d',
                            700: '#4f4f4f',
                            800: '#262626',
                            900: '#121212',
                        },
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        glow: '0 28px 90px rgba(249, 115, 22, 0.22)',
                    },
                },
            },
        };
    </script>
    <style>
        :root {
            --color-paper: #fffbf6;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background:
                radial-gradient(circle at top left, rgba(249, 115, 22, 0.18), transparent 28%),
                radial-gradient(circle at right center, rgba(18, 18, 18, 0.08), transparent 32%),
                linear-gradient(180deg, var(--color-paper), #ffffff);
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: rgba(194, 65, 12, 0.65) rgba(249, 115, 22, 0.14);
        }

        *::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 9999px;
            background: rgba(249, 115, 22, 0.12);
        }

        *::-webkit-scrollbar-thumb {
            border: 2px solid rgba(255, 247, 237, 0.8);
            border-radius: 9999px;
            background: linear-gradient(180deg, #fb923c, #c2410c);
            background-clip: padding-box;
        }

        *::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #f97316, #9a3412);
            background-clip: padding-box;
        }

        *::-webkit-scrollbar-corner {
            background: transparent;
        }

        *::-webkit-scrollbar-button {
            display: none;
            width: 0;
            height: 0;
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(18, 18, 18, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 18, 18, 0.04) 1px, transparent 1px);
            background-size: 28px 28px;
        }
    </style>
</head>
<body class="text-dark-900">
    <div class="min-h-screen">
        <header class="sticky top-0 z-30 border-b border-primary-200/70 bg-white/85 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-8">
                <a href="<?= base_url('/') ?>" class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-2xl">
                        <img src="/assets/logo/no-bg.PNG" class="h-full w-full object-cover" alt="<?= esc($appName) ?>">
                    </div>
                    <div>
                        <p class="text-lg font-bold text-dark-900"><?= esc($appName) ?></p>
                        <p class="mt-[-2px] text-xs tracking-[0.05em] text-primary-700">Bimbingan Private Masa Kini</p>
                    </div>
                </a>

                <div class="flex items-center gap-3">
                    <nav class="hidden items-center gap-2 md:flex">
                        <?php $navItems = [
                            ['label' => 'Beranda', 'href' => base_url('/'), 'key' => 'home'],
                            ['label' => 'Layanan', 'href' => base_url('/service'), 'key' => 'service'],
                            ['label' => 'Tentang Kami', 'href' => base_url('/about'), 'key' => 'about'],
                        ]; ?>
                        <?php foreach ($navItems as $item): ?>
                            <?php $isActive = ($activeNav ?? '') === $item['key']; ?>
                            <a
                                href="<?= esc($item['href']) ?>"
                                class="<?= $isActive
                                    ? 'rounded-full bg-primary-50 px-4 py-2 text-sm font-semibold text-primary-700'
                                    : 'rounded-full px-4 py-2 text-sm font-semibold text-dark-700 transition hover:bg-primary-50 hover:text-primary-700' ?>"
                            >
                                <?= esc($item['label']) ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                    <a
                        href="https://wa.me/6282323606540"
                        target="_blank"
                        rel="noreferrer"
                        class="hidden items-center gap-2 rounded-full bg-dark-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-primary-600 sm:inline-flex"
                    >
                        <i class="bi bi-whatsapp"></i>
                        Hubungi Kami
                    </a>
                    <button
                        type="button"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-primary-100 bg-white text-dark-900 shadow-sm md:hidden"
                        data-mobile-menu-open
                        aria-label="Buka menu navigasi"
                    >
                        <i class="bi bi-three-dots text-lg"></i>
                    </button>
                </div>
            </div>
        </header>

        <?php $navItems = [
            ['label' => 'Beranda', 'href' => base_url('/'), 'key' => 'home', 'icon' => 'bi-house-door'],
            ['label' => 'Layanan', 'href' => base_url('/service'), 'key' => 'service', 'icon' => 'bi-grid'],
            ['label' => 'Tentang Kami', 'href' => base_url('/about'), 'key' => 'about', 'icon' => 'bi-people'],
        ]; ?>
        <div
            class="pointer-events-none fixed inset-0 z-50 bg-dark-900/45 opacity-0 transition duration-200 md:hidden"
            data-mobile-menu-overlay
        ></div>
        <aside
            class="pointer-events-none fixed right-4 top-4 z-[60] w-[min(22rem,calc(100vw-2rem))] translate-y-3 rounded-[2rem] border border-primary-100 bg-white p-5 opacity-0 shadow-[0_30px_90px_rgba(18,18,18,0.18)] transition duration-200 md:hidden"
            data-mobile-menu-panel
            aria-hidden="true"
        >
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-700">Menu</p>
                    <h2 class="mt-2 text-xl font-bold text-dark-900"><?= esc($appName) ?></h2>
                </div>
                <button
                    type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-2xl border border-primary-100 bg-primary-50 text-dark-900"
                    data-mobile-menu-close
                    aria-label="Tutup menu navigasi"
                >
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <nav class="mt-6 space-y-3">
                <?php foreach ($navItems as $item): ?>
                    <?php $isActive = ($activeNav ?? '') === $item['key']; ?>
                    <a
                        href="<?= esc($item['href']) ?>"
                        class="<?= $isActive
                            ? 'flex items-center justify-between rounded-[1.3rem] bg-primary-600 px-4 py-3 text-sm font-semibold text-white'
                            : 'flex items-center justify-between rounded-[1.3rem] border border-primary-100 bg-white px-4 py-3 text-sm font-semibold text-dark-800' ?>"
                    >
                        <span class="flex items-center gap-3">
                            <i class="bi <?= esc($item['icon']) ?>"></i>
                            <?= esc($item['label']) ?>
                        </span>
                        <i class="bi bi-arrow-right-short text-lg"></i>
                    </a>
                <?php endforeach; ?>
            </nav>

            <a
                href="https://wa.me/6282323606540"
                target="_blank"
                rel="noreferrer"
                class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-full bg-dark-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-primary-600"
            >
                <i class="bi bi-whatsapp"></i>
                Hubungi via WhatsApp
            </a>
        </aside>

        <main>
            <?= $this->renderSection('content') ?>
        </main>

        <footer class="border-t border-primary-100 bg-white/90">
            <div class="mx-auto grid max-w-7xl gap-8 px-5 py-10 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">
                <div>
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-2xl border border-primary-100 bg-white shadow-sm">
                            <img src="/assets/logo/no-bg.PNG" class="h-full w-full object-cover" alt="<?= esc($appName) ?>">
                        </div>
                        <div>
                            <p class="text-lg font-bold text-dark-900"><?= esc($appName) ?></p>
                            <p class="text-xs md:text-sm text-dark-500">Bimbingan private dengan pendekatan personal untuk siswa di Klaten dan sekitarnya.</p>
                        </div>
                    </div>
                    <p class="hidden md:block mt-5 max-w-2xl leading-1 md:leading-7 text-xs md:text-sm text-dark-600">
                        Brillian Edu hadir untuk membantu siswa belajar dengan lebih nyaman, terarah, dan fleksibel melalui layanan tutor datang ke rumah.
                    </p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-[0.24em] text-primary-700">Navigasi</p>
                        <div class="mt-4 space-y-2 md:space-y-3 text-xs md:text-sm text-dark-600">
                            <a href="<?= base_url('/') ?>" class="block transition hover:text-primary-700">Beranda</a>
                            <a href="<?= base_url('/about') ?>" class="block transition hover:text-primary-700">Tentang Kami</a>
                            <a href="<?= base_url('/service') ?>" class="block transition hover:text-primary-700">Layanan</a>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm font-semibold uppercase tracking-[0.24em] text-primary-700">Hubungi Kami</p>
                        <div class="mt-4 space-y-2 md:space-y-3 text-dark-600 text-xs md:text-sm">
                            <a href="https://wa.me/6282323606540" target="_blank" rel="noreferrer" class="flex items-center gap-2 transition hover:text-primary-700">
                                <i class="bi bi-whatsapp"></i>
                                0823-2360-6540
                            </a>
                            <a href="https://www.instagram.com/brillianedu.bimbel/" target="_blank" rel="noreferrer" class="flex items-center gap-2 transition hover:text-primary-700">
                                <i class="bi bi-instagram"></i>
                                @brillianedu.bimbel
                            </a>
                            <p class="flex items-center gap-2">
                                <i class="bi bi-geo-alt"></i>
                                Karanganom, Klaten
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-primary-100 bg-primary-50/60">
                <div class="mx-auto flex max-w-7xl justify-center gap-2 px-5 py-4 text-sm text-dark-500 lg:px-8">
                    <p class="text-center text-xs md:text-sm">&copy; <?= date('Y') ?> <?= esc($appName) ?>. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script>
        (() => {
            const openButton = document.querySelector('[data-mobile-menu-open]');
            const closeButton = document.querySelector('[data-mobile-menu-close]');
            const overlay = document.querySelector('[data-mobile-menu-overlay]');
            const panel = document.querySelector('[data-mobile-menu-panel]');

            if (!openButton || !closeButton || !overlay || !panel) {
                return;
            }

            const setMenuState = (isOpen) => {
                overlay.classList.toggle('pointer-events-none', !isOpen);
                overlay.classList.toggle('opacity-0', !isOpen);
                panel.classList.toggle('pointer-events-none', !isOpen);
                panel.classList.toggle('opacity-0', !isOpen);
                panel.classList.toggle('translate-y-3', !isOpen);
                panel.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
                document.body.classList.toggle('overflow-hidden', isOpen);
            };

            openButton.addEventListener('click', () => setMenuState(true));
            closeButton.addEventListener('click', () => setMenuState(false));
            overlay.addEventListener('click', () => setMenuState(false));

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    setMenuState(false);
                }
            });
        })();
    </script>
</body>
</html>
