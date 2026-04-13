<button onclick="toggleSidebar()" class="fixed top-6 left-6 z-[60] p-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-white hover:bg-green-500 transition-all duration-300 group shadow-lg">
    <i data-lucide="menu" class="w-6 h-6 group-hover:rotate-180 transition-transform duration-500"></i>
</button>

<div id="sidebarOverlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-[70] hidden opacity-0 transition-opacity duration-500"></div>

<aside id="mainSidebar" class="fixed top-0 left-0 h-full w-72 z-[80] bg-slate-900/90 backdrop-blur-2xl border-r border-white/10 -translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.4,0,0.2,1)] shadow-2xl">
    
    <div class="p-8 flex flex-col h-full">
        <div class="flex items-center justify-between mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(34,197,94,0.4)]">
                    <i data-lucide="graduation-cap" class="text-slate-900 w-6 h-6"></i>
                </div>
                <span class="font-bold text-xl text-white tracking-tight">SLBN <span class="text-green-500">BDG</span></span>
            </div>
            <button onclick="toggleSidebar()" class="text-slate-400 hover:text-white transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>

        <nav class="space-y-2 flex-1">
            <p class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-bold mb-4 ml-2">Menu Utama</p>
            
            <?php
            $sideLinks = [
                ['label' => 'Dashboard', 'icon' => 'layout-dashboard', 'link' => '#'],
                ['label' => 'Agenda Sekolah', 'icon' => 'calendar', 'link' => '#'],
                ['label' => 'Data Siswa', 'icon' => 'user-check', 'link' => '#'],
                ['label' => 'E-Library', 'icon' => 'book-open', 'link' => '#'],
            ];
            foreach ($sideLinks as $item): ?>
                <a href="<?= $item['link'] ?>" class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-400 hover:text-white hover:bg-white/5 transition-all duration-300 group border border-transparent hover:border-white/5">
                    <i data-lucide="<?= $item['icon'] ?>" class="w-5 h-5 group-hover:text-green-400 transition-colors"></i>
                    <span class="font-medium"><?= $item['label'] ?></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="mt-auto pt-6 border-t border-white/10">
            <div class="flex items-center gap-4 p-2 bg-white/5 rounded-2xl border border-white/5">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-green-500 to-emerald-700 flex items-center justify-center font-bold text-slate-900">
                    AD
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-bold text-white truncate">Admin SLBN</p>
                    <p class="text-xs text-slate-500 truncate">admin@slbn.sch.id</p>
                </div>
                <button class="ml-auto text-slate-400 hover:text-red-400 transition-colors">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                </button>
            </div>
        </div>
    </div>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('mainSidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        if (sidebar.classList.contains('-translate-x-full')) {
            // Open
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.classList.add('opacity-100'), 10);
        } else {
            // Close
            sidebar.classList.add('-translate-x-full');
            overlay.classList.remove('opacity-100');
            setTimeout(() => overlay.classList.add('hidden'), 500);
        }
    }
</script>