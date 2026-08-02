<?= $this->extend('web/layouts/app') ?>

<?= $this->section('content') ?>
<section class="grid-pattern">
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-24">
        <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
            <div>
                <span class="inline-flex rounded-full border border-primary-200 bg-white px-4 py-2 text-sm font-semibold text-primary-700">Tentang Brillian Edu</span>
                <h1 class="mt-6 max-w-3xl text-3xl font-extrabold leading-tight text-dark-900 sm:text-4xl md:text-5xl">Pendamping belajar yang mengutamakan kedekatan, kenyamanan, dan hasil yang terasa.</h1>
                <p class="mt-5 max-w-2xl text-base leading-7 text-dark-600 sm:text-lg sm:leading-8">Brillian Edu hadir untuk membantu siswa belajar dengan lebih fokus melalui layanan private yang datang ke rumah. Pendekatan kami sederhana: pahami kebutuhan siswa, sesuaikan metode, lalu bangun progres secara konsisten.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="<?= esc($ctaWhatsapp) ?>" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 rounded-full bg-primary-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-primary-700">
                        <i class="bi bi-whatsapp"></i>
                        Konsultasi Gratis
                    </a>
                    <a href="<?= base_url('/service') ?>" class="inline-flex items-center gap-2 rounded-full border border-dark-200 bg-white px-6 py-3 text-sm font-semibold text-dark-900 transition hover:border-primary-300 hover:text-primary-700">
                        Lihat Layanan
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -left-4 top-6 h-32 w-32 rounded-full bg-primary-300/30 blur-3xl"></div>
                <div class="overflow-hidden rounded-[2rem] border border-white/80 bg-white p-3 shadow-[0_30px_90px_rgba(18,18,18,0.12)]">
                    <img src="/assets/dokumentasi/AhaConvert_186a881d-e4c1-4c7b-af7b-5578f20b7873.webp" alt="Siswa belajar bersama Brillian Edu" class="h-[430px] w-full rounded-[1.5rem] object-cover">
                </div>
            </div>
        </div>

        <div class="mt-16 grid gap-5 md:grid-cols-3">
            <?php foreach ($values as $value): ?>
                <article class="rounded-[1.75rem] border border-dark-100 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-100 text-xl text-primary-700">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h2 class="mt-5 text-lg font-bold text-dark-900 sm:text-xl"><?= esc($value['title']) ?></h2>
                    <p class="mt-3 leading-1 md:leading-7 text-sm md:text-base text-dark-600"><?= esc($value['description']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-16 grid gap-8 rounded-[2rem] bg-dark-900 px-6 py-8 text-white lg:grid-cols-[0.95fr_1.05fr] lg:px-10">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-300">Kenapa Dipilih Orang Tua</p>
                <h2 class="mt-4 text-2xl font-bold sm:text-3xl">Nilai utama kami ada pada konsistensi pendampingan.</h2>
            </div>
            <div class="grid gap-4 md:grid-cols-2">
                <?php foreach ($strengths as $strength): ?>
                    <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-7 w-7 items-center justify-center rounded-full bg-primary-500/15 text-primary-300">
                                <i class="bi bi-check2"></i>
                            </span>
                            <p class="flex-1 leading-1 md:leading-7 text-sm md:text-base text-white/85"><?= esc($strength) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[0.95fr_1.05fr]">
            <div class="rounded-[2rem] border border-primary-100 bg-primary-50 p-8">
                <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-700">Pertanyaan Umum</p>
                <h2 class="mt-4 text-2xl font-bold text-dark-900 sm:text-3xl">Beberapa hal yang sering ingin diketahui calon orang tua.</h2>
            </div>
            <div class="space-y-4">
                <?php foreach ($faqs as $faq): ?>
                    <article class="rounded-[1.6rem] border border-dark-100 bg-white p-6 shadow-sm">
                    <h3 class="text-base font-bold text-dark-900 sm:text-lg"><?= esc($faq['question']) ?></h3>
                        <p class="mt-3 leading-1 md:leading-7 text-sm md:text-base text-dark-600"><?= esc($faq['answer']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
