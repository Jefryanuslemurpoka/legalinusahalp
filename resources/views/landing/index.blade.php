<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegalinUsaha — Legalitas Usaha Cepat & Terpercaya</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/logolu.jpeg') }}">
    <meta name="description" content="Urus legalitas usaha Anda dengan mudah. NIB, NPWP, Pendirian PT, CV, Yayasan, Firma — semua di satu tempat.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="nav-logo">
                <img src="{{ asset('assets/images/logolu.jpeg') }}" alt="LegalinUsaha" style="height:44px; width:auto;">
            </a>
            <ul class="nav-links">
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#proses">Proses</a></li>
                <li><a href="#keunggulan">Keunggulan</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <a href="#kontak" class="nav-cta">Konsultasi Gratis</a>
            <button class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-overlay"></div>
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600&q=80&auto=format&fit=crop" alt="Office" class="hero-img">
        </div>
        <div class="hero-content">
            <div class="hero-badge">✦ Terpercaya & Berpengalaman</div>
            <h1 class="hero-title">
                Legalitas Usaha<br>
                <em>Mudah, Cepat,</em><br>
                Terjamin
            </h1>
            <p class="hero-desc">
                Dari NIB hingga Pendirian PT — kami urus semua dokumen legal bisnis Anda
                dengan profesional, transparan, dan harga terjangkau.
            </p>
            <div class="hero-actions">
                <a href="#kontak" class="btn-primary">Mulai Sekarang</a>
                <a href="#layanan" class="btn-outline">Lihat Layanan</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-num">2.500+</span>
                    <span class="stat-label">Klien Puas</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <span class="stat-num">7 Hari</span>
                    <span class="stat-label">Proses Selesai</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <span class="stat-num">100%</span>
                    <span class="stat-label">Legal & Resmi</span>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- ===== LAYANAN ===== -->
    <section class="layanan" id="layanan">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Layanan Kami</div>
                <h2 class="section-title">Semua Kebutuhan Legal<br>Bisnis Anda</h2>
                <p class="section-desc">Kami menyediakan layanan legalitas usaha yang lengkap untuk memastikan bisnis Anda berjalan dengan aman dan sah secara hukum.</p>
            </div>

            <div class="layanan-grid">

                <!-- NIB UMK -->
                <div class="layanan-card" data-aos>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="NIB UMK">
                    </div>
                    <div class="card-tag">NIB</div>
                    <h3>Pendaftaran NIB UMK</h3>
                    <p>Nomor Induk Berusaha untuk Usaha Mikro & Kecil. Legalitas dasar agar usaha Anda diakui negara.</p>
                    <ul class="card-features">
                        <li>✓ Proses cepat 1–3 hari</li>
                        <li>✓ Berlaku seumur hidup</li>
                        <li>✓ Terkoneksi OSS RBA</li>
                    </ul>
                    <a href="#kontak" class="card-link">Daftar Sekarang →</a>
                </div>

                <!-- NIB Non UMK -->
                <div class="layanan-card" data-aos>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/2621/2621244.png" alt="NIB Non UMK">
                    </div>
                    <div class="card-tag">NIB</div>
                    <h3>Pendaftaran NIB Non UMK</h3>
                    <p>Untuk usaha Menengah & Besar. Izin berusaha resmi yang membuka akses lebih luas ke pasar.</p>
                    <ul class="card-features">
                        <li>✓ Skala menengah & besar</li>
                        <li>✓ Akses perizinan lebih lanjut</li>
                        <li>✓ Pendampingan penuh</li>
                    </ul>
                    <a href="#kontak" class="card-link">Daftar Sekarang →</a>
                </div>

                <!-- Perubahan NIB -->
                <div class="layanan-card" data-aos>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png" alt="Perubahan NIB">
                    </div>
                    <div class="card-tag">NIB</div>
                    <h3>Perubahan NIB UMK & Non UMK</h3>
                    <p>Perubahan data NIB akibat pindah alamat, tambah KBLI, atau perubahan usaha lainnya.</p>
                    <ul class="card-features">
                        <li>✓ Update data cepat</li>
                        <li>✓ Tambah/kurangi KBLI</li>
                        <li>✓ Konsultasi terlebih dahulu</li>
                    </ul>
                    <a href="#kontak" class="card-link">Ubah Sekarang →</a>
                </div>

                <!-- NPWP -->
                <div class="layanan-card featured" data-aos>
                    <div class="card-badge">Populer</div>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/2784/2784461.png" alt="NPWP">
                    </div>
                    <div class="card-tag">Pajak</div>
                    <h3>Pendaftaran NPWP</h3>
                    <p>Nomor Pokok Wajib Pajak untuk perorangan maupun badan usaha. Wajib dimiliki setiap pelaku bisnis.</p>
                    <ul class="card-features">
                        <li>✓ NPWP pribadi & badan</li>
                        <li>✓ Proses via DJP Online</li>
                        <li>✓ Bebas denda keterlambatan</li>
                    </ul>
                    <a href="#kontak" class="card-link">Daftar Sekarang →</a>
                </div>

                <!-- Pendirian PT/CV/Yayasan/Firma -->
                <div class="layanan-card" data-aos>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="Pendirian Badan Usaha">
                    </div>
                    <div class="card-tag">Badan Usaha</div>
                    <h3>Pendirian PT, CV, Yayasan & Firma</h3>
                    <p>Dirikan badan usaha impian Anda dengan benar dan sah secara hukum sejak hari pertama.</p>
                    <ul class="card-features">
                        <li>✓ PT Perorangan & PT Biasa</li>
                        <li>✓ CV, Yayasan, Firma</li>
                        <li>✓ Akta notaris included</li>
                    </ul>
                    <a href="#kontak" class="card-link">Dirikan Sekarang →</a>
                </div>

                <!-- Perubahan PT/CV/Yayasan/Firma -->
                <div class="layanan-card" data-aos>
                    <div class="card-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/1356/1356479.png" alt="Perubahan Badan Usaha">
                    </div>
                    <div class="card-tag">Badan Usaha</div>
                    <h3>Perubahan PT, CV, Yayasan & Firma</h3>
                    <p>Perubahan anggaran dasar, pergantian direksi, perubahan modal, atau perubahan data lainnya.</p>
                    <ul class="card-features">
                        <li>✓ Perubahan akta notaris</li>
                        <li>✓ Update Kemenkumham</li>
                        <li>✓ Pendampingan notaris</li>
                    </ul>
                    <a href="#kontak" class="card-link">Ubah Sekarang →</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== PROSES ===== -->
    <section class="proses" id="proses">
        <div class="container">
            <div class="section-header light">
                <div class="section-tag">Cara Kerja</div>
                <h2 class="section-title">Proses Mudah<br>4 Langkah</h2>
            </div>
            <div class="proses-steps">
                <div class="step">
                    <div class="step-num">01</div>
                    <div class="step-icon">💬</div>
                    <h3>Konsultasi</h3>
                    <p>Hubungi kami via WhatsApp atau form. Ceritakan kebutuhan legalitas bisnis Anda.</p>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-num">02</div>
                    <div class="step-icon">📋</div>
                    <h3>Lengkapi Dokumen</h3>
                    <p>Kami panduan dokumen apa saja yang diperlukan. Kirim dokumen secara digital.</p>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-num">03</div>
                    <div class="step-icon">⚙️</div>
                    <h3>Proses Kami</h3>
                    <p>Tim kami memproses pengajuan ke instansi terkait. Update progress secara berkala.</p>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-num">04</div>
                    <div class="step-icon">✅</div>
                    <h3>Dokumen Jadi</h3>
                    <p>Dokumen legal Anda selesai dan dikirimkan. Bisnis siap beroperasi secara resmi!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== KEUNGGULAN ===== -->
    <section class="keunggulan" id="keunggulan">
        <div class="container keunggulan-inner">
            <div class="keunggulan-img">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=700&q=80&auto=format&fit=crop" alt="Tim profesional LegalinUsaha">
                <div class="img-badge">
                    <span class="badge-num">5★</span>
                    <span class="badge-text">Rating Klien</span>
                </div>
            </div>
            <div class="keunggulan-content">
                <div class="section-tag">Mengapa Kami</div>
                <h2 class="section-title">Kenapa Pilih<br>LegalinUsaha?</h2>
                <p>Kami bukan sekadar jasa pengurusan dokumen. Kami adalah mitra legal terpercaya yang hadir dari awal hingga bisnis Anda berdiri kokoh.</p>
                <div class="keunggulan-list">
                    <div class="keunggulan-item">
                        <div class="item-icon">🚀</div>
                        <div>
                            <h4>Proses Super Cepat</h4>
                            <p>Kebanyakan layanan kami selesai dalam 3–7 hari kerja.</p>
                        </div>
                    </div>
                    <div class="keunggulan-item">
                        <div class="item-icon">🔒</div>
                        <div>
                            <h4>Aman & Terpercaya</h4>
                            <p>Semua proses resmi melalui sistem pemerintah yang terverifikasi.</p>
                        </div>
                    </div>
                    <div class="keunggulan-item">
                        <div class="item-icon">💰</div>
                        <div>
                            <h4>Harga Transparan</h4>
                            <p>Tidak ada biaya tersembunyi. Semua biaya diinformasikan di awal.</p>
                        </div>
                    </div>
                    <div class="keunggulan-item">
                        <div class="item-icon">🤝</div>
                        <div>
                            <h4>Pendampingan Penuh</h4>
                            <p>Tim kami siap membantu dari konsultasi hingga dokumen di tangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONI ===== -->
    <section class="testimoni">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Testimoni</div>
                <h2 class="section-title">Apa Kata Klien Kami</h2>
            </div>
            <div class="testi-grid">
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p>"NIB usaha kuliner saya selesai dalam 2 hari! Prosesnya mudah, tim nya responsif banget di WhatsApp. Highly recommended!"</p>
                    <div class="testi-author">
                        <img src="https://ui-avatars.com/api/?name=Rina+Sari&background=1a3c5e&color=fff&size=48" alt="Rina Sari">
                        <div>
                            <strong>Rina Sari</strong>
                            <span>Pemilik Usaha Katering, Jakarta</span>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p>"Pendirian PT saya dibantu dari A sampai Z. Dokumen lengkap, notaris sudah disediakan. Biaya jelas dari awal, tidak ada kejutan."</p>
                    <div class="testi-author">
                        <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=c9a227&color=fff&size=48" alt="Budi Santoso">
                        <div>
                            <strong>Budi Santoso</strong>
                            <span>Direktur PT Maju Bersama, Surabaya</span>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p>"NPWP badan usaha saya diurus dengan cepat dan benar. Sekarang laporan pajak lebih mudah. Terima kasih LegalinUsaha!"</p>
                    <div class="testi-author">
                        <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=2d6a4f&color=fff&size=48" alt="Dewi Lestari">
                        <div>
                            <strong>Dewi Lestari</strong>
                            <span>Pengusaha Fashion, Bandung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="cta-section">
        <div class="cta-bg">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1600&q=80&auto=format&fit=crop" alt="CTA Background">
            <div class="cta-overlay"></div>
        </div>
        <div class="cta-content">
            <h2>Siap Legalkan Usaha Anda?</h2>
            <p>Konsultasi pertama GRATIS. Kami siap membantu mewujudkan bisnis yang legal dan terpercaya.</p>
            <a href="#kontak" class="btn-primary large">Hubungi Kami Sekarang</a>
        </div>
    </section>

    <!-- ===== KONTAK ===== -->
    <section class="kontak" id="kontak">
        <div class="container kontak-inner">
            <div class="kontak-info">
                <div class="section-tag">Hubungi Kami</div>
                <h2>Mulai Konsultasi<br>Hari Ini</h2>
                <p>Tim kami siap membantu Anda menemukan solusi legalitas yang tepat untuk bisnis Anda.</p>
                <div class="kontak-details">
                    <div class="kontak-item">
                        <span class="kontak-icon">📱</span>
                        <div>
                            <strong>WhatsApp</strong>
                            <a href="https://wa.me/6288245341601" target="_blank">+6288245341601</a>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <span class="kontak-icon">📧</span>
                        <div>
                            <strong>Email</strong>
                            <a href="mailto:info@legalinusaha.com">info@legalinusaha.com</a>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <span class="kontak-icon">🕐</span>
                        <div>
                            <strong>Jam Operasional</strong>
                            <span>Senin – Sabtu, 08.00 – 17.00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kontak-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">No. WhatsApp</label>
                            <input type="tel" id="phone" placeholder="08xxxxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="email@domain.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="layanan">Layanan yang Dibutuhkan</label>
                        <select id="layanan" required>
                            <option value="">-- Pilih Layanan --</option>
                            <option>Pendaftaran NIB UMK</option>
                            <option>Pendaftaran NIB Non UMK</option>
                            <option>Perubahan NIB UMK</option>
                            <option>Perubahan NIB Non UMK</option>
                            <option>Pendaftaran NPWP</option>
                            <option>Pendirian PT</option>
                            <option>Pendirian CV</option>
                            <option>Pendirian Yayasan</option>
                            <option>Pendirian Firma</option>
                            <option>Perubahan PT/CV/Yayasan/Firma</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan (Opsional)</label>
                        <textarea id="pesan" rows="4" placeholder="Ceritakan kebutuhan legalitas Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary full">Kirim Pesan</button>
                </form>
                <div id="formSuccess" class="form-success" style="display:none;">
                    <span>✅</span>
                    <p>Pesan Anda terkirim! Tim kami akan segera menghubungi Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <a href="#" class="nav-logo">
                    <img src="{{ asset('assets/images/logolu.jpeg') }}" alt="LegalinUsaha" style="height:44px; width:auto;">
                </a>
                <p>Mitra legalitas usaha terpercaya Anda. Kami hadir untuk memastikan bisnis Anda berjalan aman dan sah secara hukum.</p>
            </div>
            <div class="footer-links">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="#layanan">Pendaftaran NIB</a></li>
                    <li><a href="#layanan">Perubahan NIB</a></li>
                    <li><a href="#layanan">Pendaftaran NPWP</a></li>
                    <li><a href="#layanan">Pendirian PT/CV</a></li>
                    <li><a href="#layanan">Pendirian Yayasan/Firma</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Perusahaan</h4>
                <ul>
                    <li><a href="#keunggulan">Tentang Kami</a></li>
                    <li><a href="#proses">Cara Kerja</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 LegalinUsaha. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6288245341601" class="wa-float" target="_blank" title="Chat WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="28" height="28">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.532 5.858L.054 23.447a.5.5 0 0 0 .499.553h.048l5.726-1.503A11.938 11.938 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.882a9.866 9.866 0 0 1-5.031-1.378l-.361-.214-3.741.981.998-3.648-.235-.374A9.882 9.882 0 0 1 2.118 12C2.118 6.533 6.533 2.118 12 2.118c5.467 0 9.882 4.415 9.882 9.882 0 5.467-4.415 9.882-9.882 9.882z"/>
        </svg>
    </a>

    <script src="{{ asset('assets/js/landing.js') }}"></script>
</body>
</html>