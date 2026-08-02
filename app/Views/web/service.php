<?= $this->extend('web/layouts/app') ?>

<?= $this->section('content') ?>
<section class="grid-pattern">
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-24">
        <div class="max-w-3xl">
            <span class="inline-flex rounded-full border border-primary-200 bg-white px-4 py-2 text-sm font-semibold text-primary-700">Layanan Belajar</span>
            <h1 class="mt-6 text-4xl font-extrabold leading-tight text-dark-900 md:text-5xl">Program private fleksibel untuk mendampingi siswa dari tahap dasar sampai target akademik yang lebih tinggi.</h1>
            <p class="mt-5 text-lg leading-8 text-dark-600">Semua layanan dirancang agar siswa bisa belajar lebih nyaman di rumah, dengan tutor yang menyesuaikan materi, ritme, dan kebutuhan masing-masing.</p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2">
            <?php foreach ($services as $service): ?>
                <article class="rounded-[1.9rem] border border-dark-100 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex items-center justify-between gap-4">
                        <span class="inline-flex rounded-full bg-primary-100 px-4 py-2 text-sm font-bold uppercase tracking-[0.24em] text-primary-700"><?= esc($service['level']) ?></span>
                        <span class="text-primary-600"><i class="bi bi-arrow-up-right-circle text-2xl"></i></span>
                    </div>
                    <h2 class="mt-6 text-2xl font-bold text-dark-900"><?= esc($service['title']) ?></h2>
                    <p class="mt-3 leading-7 text-dark-600"><?= esc($service['description']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="rounded-[2rem] border border-primary-100 bg-white p-8 shadow-sm">
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">Alur Pendaftaran</p>
                <h2 class="mt-4 text-3xl font-bold text-dark-900">Prosesnya sederhana dan mudah dikoordinasikan.</h2>
                <div class="mt-8 space-y-4">
                    <?php foreach ($process as $index => $item): ?>
                        <div class="flex gap-4 rounded-[1.5rem] border border-dark-100 p-5">
                            <span class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-dark-900 text-base font-bold text-white"><?= $index + 1 ?></span>
                            <p class="pt-2 leading-7 text-dark-600"><?= esc($item) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="overflow-hidden rounded-[2rem] bg-dark-900 text-white shadow-[0_28px_90px_rgba(18,18,18,0.18)]">
                <div class="p-8">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-300">Area Layanan</p>
                    <h2 class="mt-4 text-3xl font-bold">Siap menjangkau siswa di Klaten dan sekitarnya.</h2>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <?php foreach ($coverage as $area): ?>
                            <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-white/85"><?= esc($area) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-8 rounded-[1.5rem] border border-primary-400/25 bg-primary-500/10 p-6">
                        <p class="text-sm uppercase tracking-[0.24em] text-primary-200">Kontak Cepat</p>
                        <p class="mt-3 text-2xl font-bold"><?= esc($contactDisplay) ?></p>
                        <p class="mt-2 text-white/70"><?= esc($contactLocation) ?></p>
                        <a href="<?= esc($ctaWhatsapp) ?>" target="_blank" rel="noreferrer" class="mt-6 inline-flex items-center gap-2 rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-primary-400">
                            <i class="bi bi-whatsapp"></i>
                            Tanyakan Jadwal & Biaya
                        </a>
                    </div>
                </div>
                <img src="/assets/dokumentasi/IMG_4130.webp" alt="Dokumentasi belajar Brillian Edu" class="h-72 w-full object-cover">
            </div>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[0.95fr_1.05fr]">
            <div class="rounded-[2rem] border border-primary-100 bg-primary-50 p-8">
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">FAQ Layanan</p>
                <h2 class="mt-4 text-3xl font-bold text-dark-900">Biar calon customer tidak perlu menebak-nebak sebelum bertanya.</h2>
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
    </div>
</section>
<?= $this->endSection() ?>
