<?php

namespace App\Controllers;

class WebController extends BaseController
{
    public function home()
    {
        return view('web/home', $this->buildPageData([
            'activeNav' => 'home',
            'description' => 'Bimbel private di Klaten dengan tutor datang ke rumah, jadwal fleksibel, dan pembelajaran personal untuk TK, SD, SMP, SMA, hingga umum.',
            'pageTitle' => 'Bimbel private yang datang ke rumah dan fokus pada perkembangan anak.',
            'pageSubtitle' => 'Brillian Edu membantu siswa belajar lebih nyaman, lebih terarah, dan lebih percaya diri bersama tutor yang menyesuaikan kebutuhan tiap anak.',
            'seoTitle' => 'Brillian Edu | Bimbel & Les Private Klaten',
            'ctaWhatsapp' => $this->whatsappUrl(),
            'contactPhone' => '082323606540',
            'contactDisplay' => '0823-2360-6540',
            'contactLocation' => 'Karanganom, Klaten',
            'services' => $this->services(),
            'strengths' => $this->strengths(),
            'gallery' => $this->gallery(),
            'coverage' => $this->coverage(),
            'stats' => $this->stats(),
            'faqs' => $this->faqs(),
            'reasons' => $this->reasons(),
        ]));
    }

    public function about()
    {
        return view('web/about', $this->buildPageData([
            'activeNav' => 'about',
            'description' => 'Mengenal Brillian Edu, bimbingan private di Klaten yang mengutamakan pendekatan personal, tutor datang ke rumah, dan pembelajaran fleksibel.',
            'seoTitle' => 'Tentang Brillian Edu | Bimbel Private Klaten',
            'ctaWhatsapp' => $this->whatsappUrl(),
            'contactDisplay' => '0823-2360-6540',
            'contactLocation' => 'Karanganom, Klaten',
            'strengths' => $this->strengths(),
            'gallery' => $this->gallery(),
            'faqs' => $this->faqs(),
            'values' => [
                [
                    'title' => 'Belajar Lebih Personal',
                    'description' => 'Pendampingan disesuaikan dengan karakter, ritme belajar, dan target masing-masing siswa.',
                ],
                [
                    'title' => 'Tutor Datang ke Rumah',
                    'description' => 'Orang tua tidak perlu repot mengantar jemput, sehingga proses belajar lebih nyaman dan efisien.',
                ],
                [
                    'title' => 'Fokus pada Perkembangan',
                    'description' => 'Kami mendorong siswa agar bukan hanya mengerjakan tugas, tetapi juga memahami materi dengan baik.',
                ],
            ],
        ]));
    }

    public function service()
    {
        return view('web/service', $this->buildPageData([
            'activeNav' => 'service',
            'description' => 'Layanan Brillian Edu meliputi calistung, les private TK sampai SMA, persiapan TOEFL dasar, mengaji, dan pendampingan belajar fleksibel di Klaten.',
            'seoTitle' => 'Layanan Brillian Edu | Les Private Klaten',
            'ctaWhatsapp' => $this->whatsappUrl(),
            'contactDisplay' => '0823-2360-6540',
            'contactLocation' => 'Karanganom, Klaten',
            'services' => $this->services(),
            'coverage' => $this->coverage(),
            'faqs' => $this->faqs(),
            'process' => [
                'Konsultasi kebutuhan belajar siswa dan area domisili.',
                'Penentuan tutor, mapel, target, dan jadwal yang paling cocok.',
                'Pelaksanaan les private secara rutin dengan pendekatan personal.',
                'Evaluasi perkembangan agar orang tua bisa memantau hasil belajar.',
            ],
        ]));
    }

    private function buildPageData(array $data): array
    {
        $appName = getenv('app.name') ?: 'Brilliant Education';
        $path = '/' . ltrim((string) $this->request->getPath(), '/');
        $currentPath = $path === '//' ? '/' : $path;
        $baseUrl = rtrim(base_url(), '/');
        $canonicalUrl = $currentPath === '/' ? $baseUrl . '/' : $baseUrl . $currentPath;

        return array_merge([
            'activeNav' => '',
            'appName' => $appName,
            'canonicalUrl' => $canonicalUrl,
            'currentPath' => $currentPath,
            'description' => $appName,
            'metaImage' => $baseUrl . '/assets/logo/bgwhite.png',
            'metaType' => 'website',
            'seoTitle' => $appName,
        ], $data);
    }

    private function whatsappUrl(): string
    {
        return 'https://wa.me/6282323606540';
    }

    private function services(): array
    {
        return [
            [
                'level' => 'TK',
                'title' => 'Calistung dan fondasi belajar awal',
                'description' => 'Pendampingan baca, tulis, hitung, dan pembiasaan belajar yang menyenangkan untuk anak usia dini.',
            ],
            [
                'level' => 'SD',
                'title' => 'Penguatan konsep dasar semua mapel',
                'description' => 'Cocok untuk siswa yang butuh pengulangan materi, bantuan PR, dan pembiasaan belajar terstruktur.',
            ],
            [
                'level' => 'SMP',
                'title' => 'Pendalaman materi sekolah dan persiapan ujian',
                'description' => 'Fokus pada pemahaman konsep, latihan soal, dan membangun rasa percaya diri saat belajar.',
            ],
            [
                'level' => 'SMA/Umum',
                'title' => 'Pendampingan akademik, TOEFL dasar, dan mengaji',
                'description' => 'Layanan fleksibel untuk kebutuhan sekolah, penguatan bahasa Inggris dasar, hingga belajar mengaji.',
            ],
        ];
    }

    private function strengths(): array
    {
        return [
            'Tutor datang ke rumah siswa.',
            'Biaya lebih terjangkau dan jadwal fleksibel.',
            'Metode belajar menyesuaikan kebutuhan siswa.',
            'Tutor sabar, komunikatif, dan mudah diajak koordinasi.',
            'Bisa request materi sesuai kebutuhan sekolah atau target pribadi.',
        ];
    }

    private function gallery(): array
    {
        return [
            [
                'image' => '/assets/dokumentasi/IMG_4130.webp',
                'title' => 'Suasana belajar aktif',
            ],
            [
                'image' => '/assets/dokumentasi/IMG_4182.webp',
                'title' => 'Pendampingan individual',
            ],
            [
                'image' => '/assets/dokumentasi/AhaConvert_cb985837-c235-4fe4-9e8f-74f8ab39355f.webp',
                'title' => 'Dokumentasi kegiatan les',
            ],
        ];
    }

    private function coverage(): array
    {
        return [
            'Karanganom',
            'Klaten Kota',
            'Jatinom',
            'Prambanan',
            'dan area sekitar Klaten',
        ];
    }

    private function stats(): array
    {
        return [
            [
                'value' => 'Private',
                'label' => 'Tutor datang ke rumah siswa',
            ],
            [
                'value' => 'Fleksibel',
                'label' => 'Penyesuaian jadwal belajar',
            ],
            [
                'value' => 'TK - Umum',
                'label' => 'Jenjang yang bisa didampingi',
            ],
        ];
    }

    private function reasons(): array
    {
        return [
            [
                'title' => 'Lebih fokus karena belajar 1-on-1',
                'description' => 'Siswa mendapatkan perhatian lebih, sehingga tutor bisa cepat melihat kesulitan yang muncul saat belajar.',
            ],
            [
                'title' => 'Orang tua lebih mudah memantau',
                'description' => 'Karena belajar dilakukan di rumah, proses pendampingan terasa lebih transparan dan mudah dikomunikasikan.',
            ],
            [
                'title' => 'Materi bisa disesuaikan',
                'description' => 'Bisa untuk penguatan materi sekolah, bantuan PR, persiapan ujian, atau target keterampilan tertentu.',
            ],
        ];
    }

    private function faqs(): array
    {
        return [
            [
                'question' => 'Apakah tutor datang ke rumah?',
                'answer' => 'Ya, Brillian Edu melayani les private dengan tutor datang langsung ke rumah siswa untuk area Klaten dan sekitarnya.',
            ],
            [
                'question' => 'Jenjang apa saja yang bisa dibimbing?',
                'answer' => 'Saat ini layanan mencakup TK, SD, SMP, SMA, hingga kebutuhan umum seperti TOEFL dasar dan mengaji.',
            ],
            [
                'question' => 'Apakah jadwal les bisa menyesuaikan?',
                'answer' => 'Bisa. Jadwal bersifat fleksibel dan dibicarakan di awal agar sesuai dengan waktu luang siswa maupun orang tua.',
            ],
            [
                'question' => 'Apakah materi bisa request?',
                'answer' => 'Bisa. Materi dapat menyesuaikan kebutuhan siswa, baik untuk tugas sekolah, penguatan konsep, maupun target khusus.',
            ],
        ];
    }
}
