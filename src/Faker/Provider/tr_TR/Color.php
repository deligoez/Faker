<?php

namespace Faker\Provider\tr_TR;

class Color extends \Faker\Provider\Color
{
    /**
     * @link http://tr.wikipedia.org/wiki/Renkler_listesi
     */
    protected static $safeColorNames = array(
        'siyah', 'kırmızı', 'sarı', 'mavi', 'turuncu',
        'yeşil', 'mor', 'gümüş', 'gri', 'pembe',
    );

    protected static $allColorNames = array(
        'Açık Galibarda', 'Açık Limon', 'Açık Mavi', 'Açık Mor', 'Açık Turkuaz',
        'Açık Yeşil', 'Açık Yeşil Sarı', 'Akuamarin Rengi', 'Alev Kırmızısı',
        'Alev Turuncusu', 'Alice Mavisi', 'Alizarin Rengi', 'Altınımsı',
        'Altunî', 'Ametist Rengi', 'Armut Rengi', 'Asker Yeşili', 'Aşı Boyası',
        'Ayrık Sarı', 'Bakır Rengi', 'Barut Rengi', 'Bataklık Yeşili',
        'Bebek Mavisi', 'Bej', 'Berrak Mavi', 'Beyaz', 'Bondi Mavisi', 'Bordo',
        'Bronz Rengi', 'Buğday Rengi', 'Burgonya', 'Camgöbeği',
        'Camgöbeği Mavisi', 'Celadon', 'Çam Yeşili', 'Çay Yeşili',
        'Çelik Mavisi', 'Çikolata Rengi', 'Çivit Rengi', 'Dağ Pembesi',
        'Deniz Kabuğu', 'Deniz Mavisi', 'Deniz Yeşili', 'Devedikeni Rengi',
        'Donuk Turuncu', 'Eğrelti Yeşili', 'Elektrik Çivit Rengi',
        'Elektrik Lime Rengi', 'Elektrik Mavisi', 'Elektrik Mor Rengi',
        'Elektrik Yeşili', 'Enternasyonal Turuncu', 'Eski Altın', 'Eski Gül',
        'Eski İplik', 'Eski Lavanta', 'Falu Kırmızısı', 'Fildişi Rengi',
        'Fransız Gül Rengi', 'Galibarda (Parlak Mor)', 'Gece Mavisi',
        'Gök Mavisi', 'Gri', 'Gri-Kuşkonmaz', 'Gül Rengi', 'Gümüşi', 'Haki',
        'Ham Toprak', 'Hardal Rengi', 'Havuç Rengi', 'Hile Mavisi',
        'Holywood Kırmızısı', 'Horozibiği Rengi', 'İlkbahar Yeşili',
        'İslam Yeşili', 'Kabak Rengi', 'Kahverengi', 'Kahverengimsi Gri',
        'Kamuflaj Yeşili', 'Karanfil Pembesi', 'Karanfil Rengi', 'Kardinal',
        'Kardinal Rengi', 'Karolina Mavisi', 'Kayısı Rengi', 'Kehribar Rengi',
        'Kestane Rengi', 'Keten Rengi', 'Kıpkırmızı', 'Kırmızı',
        'Kırmızı Şarap', 'Kırmızı-Menekşe', 'Kırmızımsı Kahverengi',
        'Kızıl Yumurta Mavisi', 'Kiraz Kırmızısı', 'Kobalt Mavisi',
        'Kobalt Rengi', 'Koyu Galibarda', 'Koyu Haki', 'Koyu Kahverengi',
        'Koyu Kestane', 'Koyu Kırmızı', 'Koyu Kızıl Kahverengi', 'Koyu Leylak',
        'Koyu Magenta', 'Koyu Mandalina', 'Koyu Mavi', 'Koyu Menekşe',
        'Koyu Mercan', 'Koyu Mor', 'Koyu Pastel Yeşil', 'Koyu Pembe',
        'Koyu Şeftali', 'Koyu Toz Mavi', 'Koyu Turkuaz', 'Koyu Yeşil',
        'Kösele Rengi', 'Kraliyet Mavisi', 'Kremrengi', 'Kum Kahverengisi',
        'Kuşkonmaz Rengi', 'Küçük Kara', 'Lacivert', 'Lavanta Galibarda',
        'Lavanta Grisi', 'Lavanta Gül Rengi', 'Lavanta Mavisi', 'Lavanta Mor',
        'Lavanta Pembesi', 'Lavanta Rengi', 'Leylak Rengi', 'Lime Rengi',
        'Limoni', 'Malakit Rengi', 'Mandalina Rengi', 'Mavi', 'Menekşe Rengi',
        'Menekşe-Patlıcan Rengi', 'Mercan', 'Mercan Kırmızısı', 'Mısır Rengi',
        'Mor', 'Morsalkım Rengi', 'Nane Yeşili', 'Nar Rengi', 'Navajo Beyazı',
        'Okul Otobüsü Sarısı', 'Orkide Rengi', 'Orman Yeşili', 'Orta Mor',
        'Orta Şarap', 'Papaya', 'Parlak Mor (Galibarda)', 'Pas Rengi',
        'Pastel Pembe', 'Pastel Yeşili', 'Patlıcan Rengi', 'Pembe',
        'Pembe-Turuncu', 'Periwinkle', 'Pers Gülü', 'Pers Kırmızısı',
        'Pers Lacivert', 'Pers Mavisi', 'Pers Pembesi', 'Pers Yeşili',
        'Peygamber Çiçeği Rengi', 'Prusya Mavisi', 'Safir Rengi',
        'Safran Rengi', 'Salamura Grisi', 'Sarı', 'Sarımsı Kahverengi',
        'Sarımsı Pembe', 'Sıcak Magenta', 'Sıcak Pembe', 'Siğil Otu', 'Siyah',
        'Siyahımsı Koyu Kahverengi', 'Soluk Sarı', 'Soytarı', 'Şarap Rengi',
        'Şeftali Rengi', 'Şeftali-Sarı', 'Şeftali-Turuncu', 'Tarçın Rengi',
        'Teal', 'Tenné (Tawny)', 'Toz Mavi', 'Turkuaz', 'Turuncu',
        'Turuncumsu Sarı', 'Uluslararası Klein Mavisi', 'Viridian',
        'Vurgun Pembe', 'Yanık Toprak Rengi', 'Yanık Turuncu', 'Yeşil',
        'Yeşil-Sarı', 'Yeşim', 'Yonca Yeşili', 'Yosun Yeşili',
        'Zeytin Kahverengisi', 'Zeytuni', 'Zinnwaldite', 'Zümrüt Yeşili'
    );
}
