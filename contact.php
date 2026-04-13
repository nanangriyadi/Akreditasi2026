<?php
$pageTitle = 'Kontak & Diskusi';
include 'header.php';

// Data Kontak (dipindah ke atas agar rapi)
$contacts = [
    ['label' => 'Nomor Telepon', 'value' => '010-020-0340', 'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'],
    ['label' => 'Alamat Email', 'value' => 'slbnbadeganponorogo.sch.id', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
    ['label' => 'Alamat Sekolah', 'value' => 'Badegan, Ponorogo, Jawa Timur', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z'],
    ['label' => 'Website', 'value' => 'slbnbadeganponorogo.sch.id', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9'],
];
?>

<section class="relative min-h-screen py-16 px-[5%] bg-cover bg-center bg-fixed" style="background-image: url('assets/img/contact-bg.jpg')">
    
    <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-sm pointer-events-none"></div>

    <div class="relative z-10 max-w-4xl mx-auto flex flex-col gap-8">
        
        <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-2xl overflow-hidden border border-white/20 animate__animated animate__fadeInDown">
            <div class="p-8 border-b border-slate-100 dark:border-slate-800">
                <h3 class="text-3xl font-bold text-slate-800 dark:text-white flex items-center gap-3">
                    <span class="w-2 h-8 bg-blue-600 rounded-full"></span>
                    Umpan Balik
                </h3>
                <p class="text-slate-500 dark:text-slate-400 mt-2">Sinergi dan masukan Anda adalah instrumen penting bagi kami dalam mewujudkan transparansi dan objektivitas penilaian.</p>
            </div>
            
            <div class="p-8">
                <div id="disqus_thread" class="min-h-[400px]">
                    <div class="flex flex-col items-center justify-center py-20 text-slate-400">
                        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-blue-600 mb-4"></div>
                        <p>Memuat kolom komentar...</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#a12c2f] rounded-3xl shadow-2xl p-10 text-white animate__animated animate__fadeInUp">
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-bold mb-2">Hubungi Kami Secara Langsung</h2>
                <div class="w-20 h-1 bg-white/30 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach($contacts as $c): ?>
                <div class="flex items-center gap-5 p-4 rounded-2xl bg-white/10 hover:bg-white/20 transition-all duration-300 border border-white/5">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white text-[#a12c2f] flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $c['icon'] ?>"></path>
                        </svg>
                    </div>
                    <div>
                        <h6 class="text-xs uppercase tracking-wider text-white/70 font-bold"><?= $c['label'] ?></h6>
                        <p class="text-lg font-medium"><?= htmlspecialchars($c['value']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<script>
    var disqus_config = function () {
        this.page.url = window.location.href;  
        this.page.identifier = window.location.pathname; 
    };

    (function() { 
        var d = document, s = d.createElement('script');
        s.src = 'https://http-pkks24-kel1-test.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>

<noscript>
    <div class="max-w-4xl mx-auto mt-4 p-4 bg-red-100 text-red-700 rounded-xl text-center shadow-lg">
        Harap aktifkan JavaScript untuk melihat diskusi.
    </div>
</noscript>

<?php include 'footer.php'; ?>