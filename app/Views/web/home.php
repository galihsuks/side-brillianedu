<?= $this->extend('web/layouts/app') ?>

<?= $this->section('content') ?>
<section class="grid-pattern overflow-hidden">
    <div class="mx-auto max-w-7xl px-5 pb-16 pt-10 lg:px-8 lg:pb-24 lg:pt-16">
        <div class="grid gap-12 lg:grid-cols-[1.08fr_0.92fr] lg:items-center">
            <div>
                <span class="inline-flex rounded-full border border-primary-200 bg-white px-4 py-2 text-sm font-semibold text-primary-700 shadow-sm">Bimbel & Les Private Klaten</span>
                <h1 class="mt-6 max-w-4xl text-4xl font-extrabold leading-tight text-dark-900 md:text-6xl"><?= esc($pageTitle) ?></h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-dark-600"><?= esc($pageSubtitle) ?></p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?= esc($ctaWhatsapp) ?>" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-full bg-primary-600 px-6 py-3 text-sm font-semibold text-white shadow-glow transition hover:bg-primary-700">
                        <i class="bi bi-whatsapp"></i>
                        Daftar / Konsultasi
                    </a>
                    <a href="<?= base_url('/service') ?>" class="inline-flex items-center gap-2 rounded-full border border-dark-200 bg-white px-6 py-3 text-sm font-semibold text-dark-900 transition hover:border-primary-300 hover:text-primary-700">
                        Lihat Program
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-[1.5rem] border border-primary-100 bg-white p-5 shadow-sm">
                        <p class="text-sm text-dark-500">Sistem belajar</p>
                        <p class="mt-2 text-xl font-bold text-dark-900">Private ke rumah</p>
                    </div>
                    <div class="rounded-[1.5rem] border border-primary-100 bg-white p-5 shadow-sm">
                        <p class="text-sm text-dark-500">Jenjang</p>
                        <p class="mt-2 text-xl font-bold text-dark-900">TK sampai umum</p>
                    </div>
                    <div class="rounded-[1.5rem] border border-primary-100 bg-white p-5 shadow-sm">
                        <p class="text-sm text-dark-500">Jadwal</p>
                        <p class="mt-2 text-xl font-bold text-dark-900">Fleksibel & personal</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -right-16 top-0 h-40 w-40 rounded-full bg-primary-300/35 blur-3xl"></div>
                <div class="absolute -left-10 bottom-10 h-32 w-32 rounded-full bg-dark-900/10 blur-3xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/80 bg-white p-4 shadow-[0_30px_90px_rgba(18,18,18,0.14)]">
                    <div class="mb-4 flex items-center justify-between rounded-[1.25rem] bg-dark-900 px-5 py-4 text-white">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-2xl bg-white">
                                <img src="/assets/logo/no-bg.PNG" alt="Logo Brillian Edu" class="h-full w-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold">Brillian Edu</p>
                                <p class="text-sm text-white/70">Bimbingan Private Masa Kini</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-primary-500/20 px-3 py-1 text-xs font-semibold text-primary-200">Open Pendaftaran</span>
                    </div>
                    <img src="/assets/dokumentasi/IMG_4182.webp" alt="Siswa belajar bersama Brillian Edu" class="h-[420px] w-full rounded-[1.5rem] object-cover">
                </div>
            </div>
        </div>

        <div class="mt-16 grid gap-8 rounded-[2rem] bg-dark-900 px-6 py-8 text-white lg:grid-cols-[1fr_1.2fr] lg:px-10">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-300">Keunggulan</p>
                <h2 class="mt-4 text-3xl font-bold">Kenapa Brillian Edu cocok untuk kebutuhan belajar anak?</h2>
                <p class="mt-4 max-w-xl leading-7 text-white/75">Fokus kami adalah membuat belajar terasa lebih dekat, lebih fleksibel, dan lebih relevan dengan kebutuhan siswa di rumah maupun target sekolah.</p>
            </div>
            <div class="grid gap-4 md:grid-cols-2">
                <?php foreach ($strengths as $strength): ?>
                    <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-7 w-7 items-center justify-center rounded-full bg-primary-500/15 text-primary-300">
                                <i class="bi bi-check2"></i>
                            </span>
                            <p class="leading-7 text-white/85"><?= esc($strength) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 grid gap-5 md:grid-cols-3">
            <?php foreach ($stats as $stat): ?>
                <article class="rounded-[1.75rem] border border-primary-100 bg-white p-6 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.24em] text-primary-700"><?= esc($stat['label']) ?></p>
                    <h2 class="mt-3 text-3xl font-extrabold text-dark-900"><?= esc($stat['value']) ?></h2>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-16">
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div class="max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">Program Utama</p>
                    <h2 class="mt-3 text-3xl font-bold text-dark-900">Layanan les private yang bisa menyesuaikan jenjang dan tujuan belajar siswa.</h2>
                </div>
                <a href="<?= base_url('/service') ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-primary-700 transition hover:text-primary-800">
                    Lihat semua layanan
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($services as $service): ?>
                    <article class="rounded-[1.8rem] border border-dark-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                        <span class="inline-flex rounded-full bg-primary-100 px-4 py-2 text-xs font-bold uppercase tracking-[0.24em] text-primary-700"><?= esc($service['level']) ?></span>
                        <h3 class="mt-5 text-xl font-bold text-dark-900"><?= esc($service['title']) ?></h3>
                        <p class="mt-3 leading-7 text-dark-600"><?= esc($service['description']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">Dokumentasi</p>
                <h2 class="mt-4 text-3xl font-bold text-dark-900">Aktivitas belajar yang dekat, hangat, dan fokus.</h2>
                <p class="mt-4 max-w-xl leading-7 text-dark-600">Dokumentasi ini membantu calon orang tua melihat bahwa sesi belajar benar-benar berjalan secara personal, bukan sekadar formalitas kelas.</p>
                <div class="mt-8 rounded-[1.75rem] border border-primary-100 bg-primary-50 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-700">Kontak Cepat</p>
                    <p class="mt-3 text-3xl font-extrabold text-dark-900"><?= esc($contactDisplay) ?></p>
                    <p class="mt-2 text-dark-600"><?= esc($contactLocation) ?></p>
                    <a href="<?= esc($ctaWhatsapp) ?>" target="_blank" rel="noreferrer" class="mt-6 inline-flex items-center gap-2 rounded-full bg-dark-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-primary-600">
                        <i class="bi bi-whatsapp"></i>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                <?php foreach ($gallery as $index => $item): ?>
                    <article class="<?= $index === 0 ? 'sm:col-span-2' : '' ?> overflow-hidden rounded-[1.8rem] border border-white/80 bg-white p-3 shadow-sm">
                        <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['title']) ?>" class="<?= $index === 0 ? 'h-72' : 'h-60' ?> w-full rounded-[1.3rem] object-cover">
                        <p class="px-2 pb-2 pt-4 text-sm font-semibold text-dark-700"><?= esc($item['title']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 grid gap-5 md:grid-cols-3">
            <?php foreach ($reasons as $reason): ?>
                <article class="rounded-[1.8rem] border border-dark-100 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-100 text-primary-700">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h2 class="mt-5 text-xl font-bold text-dark-900"><?= esc($reason['title']) ?></h2>
                    <p class="mt-3 leading-7 text-dark-600"><?= esc($reason['description']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[0.95fr_1.05fr]">
            <div class="rounded-[2rem] border border-primary-100 bg-primary-50 p-8">
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">Pertanyaan Umum</p>
                <h2 class="mt-4 text-3xl font-bold text-dark-900">Jawaban singkat untuk hal yang biasanya ditanyakan orang tua.</h2>
                <p class="mt-4 leading-7 text-dark-600">Section ini bisa bantu customer lebih cepat paham sebelum chat, jadi peluang closing biasanya ikut naik.</p>
            </div>
            <div class="space-y-4">
                <?php foreach ($faqs as $faq): ?>
                    <article class="rounded-[1.6rem] border border-dark-100 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-bold text-dark-900"><?= esc($faq['question']) ?></h3>
                        <p class="mt-3 leading-7 text-dark-600"><?= esc($faq['answer']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 rounded-[2rem] bg-[linear-gradient(135deg,#121212_0%,#2b2b2b_100%)] px-6 py-10 text-white lg:px-10">
            <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-300">Siap Daftar</p>
                    <h2 class="mt-4 text-3xl font-bold">Bantu calon orang tua lebih cepat yakin dengan konsultasi yang ramah dan jelas.</h2>
                    <p class="mt-4 max-w-2xl leading-7 text-white/75">Brillian Edu cocok untuk orang tua yang ingin pendampingan belajar yang lebih dekat, terjadwal, dan bisa mengikuti kebutuhan anak.</p>
                </div>
                <div class="flex flex-wrap gap-4 lg:justify-end">
                    <a href="<?= esc($ctaWhatsapp) ?>" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-full bg-primary-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-primary-400">
                        <i class="bi bi-whatsapp"></i>
                        Tanya Jadwal & Biaya
                    </a>
                    <a href="<?= base_url('/about') ?>" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:border-primary-300 hover:text-primary-200">
                        Kenali Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
