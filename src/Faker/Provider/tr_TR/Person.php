<?php

namespace Faker\Provider\tr_TR;

use Faker\Calculator\TCNo;

class Person extends \Faker\Provider\Person
{
    /**
     * @var array Turkish person male name formats.
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    /**
     * @var array Turkish person female name formats.
     */
    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * TOP 500 Turkish Male First Names
     *
     * @var array Turkish male first names.
     */
    protected static $firstNameMale = array(
        'Abbas', 'Abdullah', 'Abdulvahap', 'Abdurrahman', 'Abdülaziz', 'Abdülbaki', 'Abdülhamit', 'Abdülkadir', 'Abdülkerim', 'Abdürrahim', 'Abidin', 'Abuzer', 'Adem', 'Adil', 'Adnan', 'Ahmet', 'Akın', 'Akif', 'Alaaddin', 'Alaattin', 'Alaettin', 'Ali', 'Ali Haydar', 'Ali İhsan', 'Ali Kemal', 'Ali Osman', 'Ali Rıza', 'Alican', 'Alim', 'Alpaslan', 'Alper', 'Altan', 'Anıl', 'Arif', 'Arslan', 'Asım', 'Aslan', 'Aşkın', 'Atakan', 'Atila', 'Atilla', 'Avni', 'Aydın', 'Ayhan', 'Aykut', 'Aytaç', 'Aytekin', 'Aziz',
        'Bahadır', 'Bahattin', 'Bahri', 'Bahtiyar', 'Baki', 'Barış', 'Basri', 'Battal', 'Bayram', 'Bayram Ali', 'Bedrettin', 'Bedri', 'Behçet', 'Bekir', 'Bektaş', 'Beşir', 'Beytullah', 'Bilal', 'Birol', 'Burak', 'Burhan', 'Burhanettin', 'Bülent', 'Bünyamin',
        'Cafer', 'Cahit', 'Can', 'Caner', 'Cavit', 'Cebrail', 'Celal', 'Celalettin', 'Celil', 'Cem', 'Cemal', 'Cemalettin', 'Cemil', 'Cengiz', 'Cenk', 'Cevat', 'Cevdet', 'Ceyhun', 'Cihan', 'Cihat', 'Coşkun', 'Cuma', 'Cumali', 'Cumhur', 'Cüneyt',
        'Çağlar', 'Çetin',
        'Davut', 'Deniz', 'Derviş', 'Dilaver', 'Dinçer', 'Doğan', 'Duran', 'Durdu', 'Durmuş', 'Durmuş Ali', 'Dursun',
        'Ebubekir', 'Edip', 'Ekrem', 'Emin', 'Emir', 'Emrah', 'Emre', 'Emrullah', 'Ender', 'Enes', 'Engin', 'Enis', 'Enver', 'Eray', 'Ercan', 'Erdal', 'Erdem', 'Erdinç', 'Erdoğan', 'Eren', 'Ergin', 'Ergün', 'Erhan', 'Erkan', 'Erman', 'Erol', 'Ersan', 'Ersin', 'Ertan', 'Ertuğrul', 'Esat', 'Eşref', 'Etem', 'Ethem', 'Evren', 'Eyüp', 'Eyyüp',
        'Fahrettin', 'Fahri', 'Faik', 'Faruk', 'Fatih', 'Fazlı', 'Fehmi', 'Ferdi', 'Ferhat', 'Feridun', 'Ferit', 'Fesih', 'Fethi', 'Fevzi', 'Feyzi', 'Feyzullah', 'Fırat', 'Fikret', 'Fikri', 'Fuat',
        'Galip', 'Gazi', 'Gökhan', 'Gökmen', 'Göksel', 'Gültekin', 'Günay', 'Güngör', 'Gürbüz', 'Gürcan', 'Gürkan', 'Gürsel', 'Güven',
        'Habib', 'Habip', 'Hacı', 'Hacı Ali', 'Hacı Mehmet', 'Hakan', 'Hakkı', 'Halil', 'Halil İbrahim', 'Halim', 'Halis', 'Halit', 'Haluk', 'Hamdi', 'Hamdullah', 'Hamit', 'Hamza', 'Hanifi', 'Harun', 'Hasan', 'Hasan Ali', 'Hasan Hüseyin', 'Haşim', 'Hayati', 'Haydar', 'Hayrettin', 'Hayri', 'Hayrullah', 'Hıdır', 'Hidayet', 'Hikmet', 'Hilmi', 'Himmet', 'Hulusi', 'Hüsamettin', 'Hüseyin', 'Hüsnü',
        'İbrahim', 'İbrahim Halil', 'İdris', 'İhsan', 'İlhami', 'İlhan', 'İlkay', 'İlker', 'İlyas', 'İmdat', 'İrfan', 'İsa', 'İshak', 'İskender', 'İslam', 'İsmail', 'İsmail Hakki', 'İsmet', 'İzzet', 'İzzettin',
        'Kaan', 'Kadir', 'Kadri', 'Kahraman', 'Kamil', 'Kamuran', 'Kasım', 'Kaya', 'Kazım', 'Kemal', 'Kenan', 'Kerem', 'Kerim', 'Koray', 'Köksal', 'Kudret',
        'Latif',  'Levent', 'Lokman', 'Lütfi', 'Lütfü',
        'Mahir', 'Mahmut', 'Mecit', 'Medeni', 'Mehmet', 'Mehmet Akif', 'Mehmet Ali', 'Mehmet Can', 'Mehmet Emin', 'Mehmet Fatih', 'Mehmet Nuri', 'Mehmet Sait', 'Mehmet Salih', 'Mehmet Selim', 'Mehmet Şerif', 'Mehmet Şirin', 'Mehmet Zeki', 'Melih', 'Memduh', 'Memet', 'Memiş', 'Menderes', 'Mert', 'Mesut', 'Mete', 'Metin', 'Mevlüt', 'Mikail', 'Mithat', 'Muammer', 'Muhammed', 'Muhammet', 'Muharrem', 'Muhittin', 'Muhlis', 'Muhsin', 'Murat', 'Musa', 'Mustafa', 'Mustafa Kemal', 'Mutlu', 'Muzaffer', 'Mücahit', 'Mümin', 'Mürsel', 'Müslüm',
        'Naci', 'Nadir', 'Nail', 'Naim', 'Namık', 'Nazif', 'Nazim', 'Nazmi', 'Nebi', 'Necat', 'Necati', 'Necdet', 'Necip', 'Necmettin', 'Necmi', 'Nedim', 'Nejdet', 'Neşet', 'Nevzat', 'Nezir', 'Nihat', 'Niyazi', 'Nizamettin', 'Nuh', 'Numan', 'Nurettin', 'Nuri', 'Nurullah', 'Nusret',
        'Oğuz', 'Oğuzhan', 'Okan', 'Oktay', 'Olcay', 'Onur', 'Orhan', 'Osman', 'Osman Nuri', 'Ozan',
        'Ökkeş', 'Ömer', 'Ömer Faruk', 'Ömür', 'Önder', 'Öner', 'Özcan', 'Özer', 'Özgür', 'Özkan',
        'Rafet', 'Rahim', 'Rahmi', 'Raif', 'Ramazan', 'Rasim', 'Raşit', 'Recai', 'Recep', 'Refik', 'Remzi', 'Resul', 'Reşat', 'Reşit', 'Rıdvan', 'Rıfat', 'Rıza', 'Ruhi', 'Rüstem', 'Rüştü',
        'Sabahattin', 'Sabit', 'Sabri', 'Sadettin', 'Sadık', 'Sadullah', 'Saffet', 'Saim', 'Sait', 'Salahattin', 'Salih', 'Salim', 'Samet', 'Sami', 'Satılmış', 'Savaş', 'Sebahattin', 'Seçkin', 'Sedat', 'Sefa', 'Sefer', 'Selahattin', 'Selami', 'Selçuk', 'Selim', 'Selman', 'Semih', 'Sercan', 'Serdal', 'Serdar', 'Serhat', 'Serkan', 'Servet', 'Seyfettin', 'Seyfi', 'Seyfullah', 'Seyit', 'Sezai', 'Sezer', 'Sezgin', 'Sıddık', 'Sıtkı', 'Sinan', 'Soner', 'Suat', 'Suphi', 'Süleyman',
        'Şaban', 'Şadi', 'Şafak', 'Şahin', 'Şakir', 'Şefik', 'Şehmus', 'Şemsettin', 'Şenel', 'Şener', 'Şenol', 'Şerafettin', 'Şeref', 'Şerif', 'Şevket', 'Şevki', 'Şeyhmus', 'Şinasi', 'Şuayip', 'Şükrü',
        'Tacettin', 'Tahir', 'Tahsin', 'Talat', 'Talip', 'Tamer', 'Taner', 'Tanju', 'Tarık', 'Tayfun', 'Tekin', 'Temel', 'Tevfik', 'Tolga', 'Tufan', 'Tuğrul', 'Tuncay', 'Tuncer', 'Turan', 'Turgay', 'Turgut', 'Turhan',
        'Ufuk', 'Uğur', 'Umut',
        'Ümit', 'Ünal', 'Üzeyir',
        'Vahap', 'Vahit', 'Vedat', 'Vehbi', 'Veli', 'Veysel', 'Veysi', 'Volkan', 'Vural',
        'Yahya', 'Yakup', 'Yalçın', 'Yasin', 'Yaşar', 'Yavuz', 'Yener', 'Yıldıray', 'Yıldırım', 'Yılmaz', 'Yunis', 'Yunus', 'Yunus Emre', 'Yusuf', 'Yücel', 'Yüksel',
        'Zafer', 'Zekai', 'Zekeriya', 'Zeki', 'Zeynel', 'Ziya', 'Zülküf'
    );

    /**
     * TOP 500 Turkish Female First Names
     *
     * @var array Turkish female first names.
     */
    protected static $firstNameFemale = array(
        'Adalet', 'Adile', 'Alev', 'Alime', 'Aliye', 'Altun', 'Arife', 'Arzu', 'Asiye', 'Aslı', 'Aslıhan', 'Asuman', 'Asya', 'Atike', 'Atiye', 'Aycan', 'Ayfer', 'Aygül', 'Ayhan', 'Ayişe', 'Ayla', 'Aylin', 'Aynur', 'Aysel', 'Ayser', 'Aysun', 'Ayşe', 'Ayşe Gül', 'Ayşegül', 'Ayşen', 'Ayşenur', 'Ayten', 'Azime', 'Azize',
        'Bahar', 'Bahriye', 'Banu', 'Başak', 'Bedia', 'Bediha', 'Bedriye', 'Behice', 'Behiye', 'Belgin', 'Berna', 'Berrin', 'Betül', 'Beyaz', 'Beyhan', 'Bilge', 'Binnaz', 'Bircan', 'Birgül', 'Birsel', 'Birsen', 'Buket', 'Burcu', 'Burçin', 'Büşra',
        'Cahide', 'Canan', 'Cansu', 'Cemile', 'Cennet', 'Ceren', 'Cevahir', 'Cevriye', 'Ceyda', 'Ceylan',
        'Çiçek', 'Çiğdem',
        'Damla', 'Demet', 'Deniz', 'Derya', 'Didem', 'Dilber', 'Dilek', 'Döndü', 'Döne', 'Dudu', 'Durdu', 'Durkadın', 'Dursun', 'Duygu', 'Dürdane', 'Düriye',
        'Ebru', 'Eda', 'Edibe', 'Elif', 'Elife', 'Elmas', 'Elvan', 'Emel', 'Emine', 'Emriye', 'Ergül', 'Esen', 'Esengül', 'Esin', 'Esma', 'Esme', 'Esmer', 'Esra', 'Eşe', 'Eylem', 'Ezgi',
        'Fadile', 'Fadimana', 'Fadime', 'Fahriye', 'Fatıma', 'Fatime', 'Fatma', 'Fatmana', 'Fatoş', 'Fazilet', 'Fehime', 'Ferda', 'Ferdane', 'Feride', 'Feriha', 'Fethiye', 'Fevziye', 'Fidan', 'Figen', 'Fikriye', 'Filiz', 'Firdes', 'Firdevs', 'Fulya', 'Funda',
        'Gamze', 'Ganime', 'Gazal', 'Gizem', 'Gonca', 'Gökçe', 'Gönül', 'Gözde', 'Gurbet', 'Gül', 'Gülay', 'Gülbahar', 'Gülbeyaz', 'Gülcan', 'Gülçin', 'Güldane', 'Gülden', 'Gülderen', 'Güler', 'Güleser', 'Gülfer', 'Gülfidan', 'Gülhan', 'Gülhanım', 'Gülistan', 'Gülizar', 'Güllü', 'Güllüzar', 'Gülnaz', 'Gülnur', 'Gülperi', 'Gülser', 'Gülseren', 'Gülsüm', 'Gülsün', 'Gülşah', 'Gülşen', 'Gülten', 'Gülümser', 'Gülüstan', 'Gülüzar', 'Günay', 'Güner', 'Güneş', 'Güzel',
        'Habibe', 'Hacer', 'Hacire', 'Hadice', 'Hafize', 'Hakime', 'Halide', 'Halime', 'Halise', 'Hamdiye', 'Hamide', 'Hamiyet', 'Handan', 'Hande', 'Hanım', 'Hanife', 'Hasibe', 'Hasret', 'Hatice', 'Hatun', 'Hava', 'Havva', 'Hayriye', 'Hazal', 'Hediye', 'Hicran', 'Hidayet', 'Hikmet', 'Hilal', 'Huri', 'Huriye', 'Hülya', 'Hürü', 'Hüsna', 'Hüsne', 'Hüsniye',
        'Işıl',
        'İkbal', 'İlkay', 'İlknur', 'İmran', 'İnci', 'İpek', 'İslim', 'İsmet', 'İsmihan',
        'Jale',
        'Kader', 'Kadriye', 'Kamile', 'Kerime', 'Kevser', 'Kezban', 'Keziban', 'Kıymet', 'Kibar', 'Kiraz', 'Kudret', 'Kübra',
        'Lale', 'Latife', 'Leman', 'Leyla', 'Lütfiye',
        'Makbule', 'Mecbure', 'Mediha', 'Medine', 'Mehtap', 'Melahat', 'Melek', 'Meliha', 'Melike', 'Meltem', 'Memnune', 'Menekşe', 'Mensure', 'Meral', 'Mercan', 'Merve', 'Meryem', 'Mesude', 'Mevlüde', 'Mihriban', 'Mine', 'Miyase', 'Mualla', 'Muazzez', 'Muhsine', 'Mukadder', 'Mukaddes', 'Muradiye', 'Müge', 'Müjgan', 'Mükerrem', 'Mülkiye', 'Mümine', 'Münevver', 'Münire', 'Mürüvet', 'Mürüvvet', 'Mürvet', 'Müşerref', 'Müyesser', 'Müzeyyen',
        'Naciye', 'Nadide', 'Nadire', 'Nadiye', 'Nafiye', 'Nagihan', 'Nahide', 'Naile', 'Naime', 'Nalan', 'Narin', 'Nazan', 'Nazife', 'Nazik', 'Nazile', 'Nazime', 'Nazire', 'Nazlı', 'Nazmiye', 'Nebahat', 'Nebiye', 'Necibe', 'Necla', 'Necmiye', 'Nedime', 'Nefise', 'Nejla', 'Nergiz', 'Neriman', 'Nermin', 'Nesibe', 'Neslihan', 'Nesrin', 'Neşe', 'Nevim', 'Nevin', 'Nevriye', 'Nezahat', 'Nezaket', 'Neziha', 'Nezihe', 'Nigar', 'Nihal', 'Nilay', 'Nilgün', 'Nilüfer', 'Nimet', 'Nur', 'Nuran', 'Nuray', 'Nurcan', 'Nurdan', 'Nurgül', 'Nurhan', 'Nurhayat', 'Nuriye', 'Nursel', 'Nurşen', 'Nurten',
        'Oya',
        'Özden', 'Özge', 'Özgül', 'Özlem', 'Öznur',
        'Pakize', 'Pelin', 'Penbe', 'Perihan', 'Pervin', 'Pınar',
        'Rabia', 'Rabiye', 'Rahime', 'Raziye', 'Refika', 'Refiye', 'Remziye', 'Resmiye', 'Reyhan', 'Rukiye',
        'Saadet', 'Sabahat', 'Sabiha', 'Sabire', 'Sabriye', 'Sacide', 'Sadet', 'Sadiye', 'Safinaz', 'Safiye', 'Saide', 'Saime', 'Sakine', 'Saliha', 'Salihe', 'Samiye', 'Saniye', 'Sare', 'Sariye', 'Sati', 'Satiye', 'Sebahat', 'Sebiha', 'Sebile', 'Seçil', 'Seda', 'Sedef', 'Seher', 'Selda', 'Selime', 'Selin', 'Selma', 'Selver', 'Selvi', 'Sema', 'Semiha', 'Semra', 'Senel', 'Senem', 'Seniha', 'Serap', 'Serpil', 'Servet', 'Sevcan', 'Sevda', 'Sevdiye', 'Sevgi', 'Sevgül', 'Sevil', 'Sevilay', 'Sevim', 'Sevinç', 'Seyhan', 'Seyran', 'Sezen', 'Sıddıka', 'Sıdıka', 'Sibel', 'Sinem', 'Solmaz', 'Songül', 'Sultan', 'Suna', 'Sunay', 'Suzan', 'Süheyla', 'Sümeyra', 'Sümeyye', 'Sündüs', 'Süreyya',
        'Şaziye', 'Şebnem', 'Şefika', 'Şehri', 'Şehriban', 'Şemsi', 'Şenay', 'Şengül', 'Şennur', 'Şerife', 'Şermin', 'Şeval', 'Şeyda', 'Şeyma', 'Şifa', 'Şirin', 'Şule', 'Şükran', 'Şükriye', 'Şükrüye',
        'Tenzile', 'Teslime', 'Tuba', 'Tuğba', 'Tuğçe', 'Tülay', 'Tülin', 'Türkan',
        'Ulviye',
        'Ülker', 'Ülkü', 'Ümmahan', 'Ümmü', 'Ümmügülsum', 'Ümmühan', 'Ümran', 'Ünzile',
        'Vahide', 'Vasfiye', 'Vesile', 'Vildan', 'Yadigar', 'Yağmur', 'Yasemin', 'Yaşar', 'Yeliz', 'Yeşim', 'Yeter', 'Yıldız', 'Yurdagül', 'Yüksel',
        'Zahide', 'Zarife', 'Zehra', 'Zekiye', 'Zeliha', 'Zennure', 'Zerrin', 'Zeynep', 'Zinnet', 'Zöhre', 'Zuhal', 'Zübeyde', 'Zühre', 'Züleyha', 'Zülfiye'
    );

    /**
     * TOP 500 Turkish Last Names
     *
     * @var array Turkish last names.
     */
    protected static $lastName = array(
        'Acar', 'Açıkgöz', 'Adıgüzel', 'Ak', 'Akan', 'Akar', 'Akay', 'Akbaba', 'Akbaş', 'Akbulut', 'Akcan', 'Akça', 'Akçay', 'Akdağ', 'Akdemir', 'Akdeniz', 'Akdoğan', 'Akgül', 'Akgün', 'Akın', 'Akıncı', 'Akkaya', 'Akkurt', 'Akkuş', 'Akman', 'Akpınar', 'Aksoy', 'Aksu', 'Aktaş', 'Aktürk', 'Akyıldız', 'Akyol', 'Akyüz', 'Alan', 'Albayrak', 'Aldemir', 'Alkan', 'Alp', 'Altan', 'Altay', 'Altın', 'Altıntaş', 'Altun', 'Altuntaş', 'Apaydın', 'Aras', 'Arı', 'Arıcı', 'Arık', 'Arıkan', 'Arslan', 'Aslan', 'Aşık', 'Ata', 'Atak', 'Atalay', 'Atasoy', 'Ataş', 'Atay', 'Ateş', 'Atıcı', 'Atik', 'Atlı', 'Atmaca', 'Avcı', 'Avşar', 'Ay', 'Ayan', 'Ayaz', 'Aydemir', 'Aydın', 'Aydoğan', 'Aydoğdu', 'Aygün', 'Ayhan', 'Aytekin', 'Ayyıldız',
        'Bağcı', 'Bakır', 'Bal', 'Balaban', 'Balcı', 'Balta', 'Baran', 'Barut', 'Baş', 'Başar', 'Başaran', 'Başer', 'Bayar', 'Bayır', 'Bayrak', 'Bayraktar', 'Bayram', 'Baysal', 'Bektaş', 'Berber', 'Biçer', 'Bilen', 'Bilgiç', 'Bilgin', 'Bilir', 'Bingöl', 'Bodur', 'Bolat', 'Bostancı', 'Boz', 'Bozdağ', 'Bozkurt', 'Budak', 'Bulut', 'Bülbül',
        'Can', 'Candan', 'Cebeci', 'Cengiz', 'Cesur', 'Ceyhan', 'Ceylan', 'Coşkun',
        'Çağlar', 'Çağlayan', 'Çakar', 'Çakıcı', 'Çakır', 'Çakmak', 'Çalık', 'Çalışkan', 'Çam', 'Çankaya', 'Çavdar', 'Çavuş', 'Çay', 'Çelebi', 'Çelik', 'Çetin', 'Çetiner', 'Çetinkaya', 'Çevik', 'Çınar', 'Çiçek', 'Çifçi', 'Çiftçi', 'Çil', 'Çimen', 'Çoban', 'Çolak',
        'Dağ', 'Dağdelen', 'Dağlı', 'Dal', 'Dede', 'Değirmenci', 'Demir', 'Demirbaş', 'Demircan', 'Demirci', 'Demirel', 'Demirhan', 'Demirkol', 'Demirtaş', 'Deniz', 'Deveci', 'Dikmen', 'Dilek', 'Dinç', 'Dinçer', 'Doğan', 'Doğru', 'Dönmez', 'Duman', 'Durak', 'Duran', 'Durmaz', 'Durmuş', 'Dursun', 'Dündar', 'Düzgün',
        'Efe', 'Eker', 'Ekici', 'Ekinci', 'Elmas', 'Engin', 'Er', 'Ercan', 'Erdal', 'Erdem', 'Erden', 'Erdoğan', 'Eren', 'Ergen', 'Ergin', 'Ergül', 'Ergün', 'Erkan', 'Eroğlu', 'Erol', 'Ersoy', 'Ertaş', 'Ertürk', 'Eryılmaz', 'Esen', 'Eser',
        'Fırat', 'Fidan', 'Filiz',
        'Gedik', 'Gencer', 'Genç', 'Gezer', 'Girgin', 'Göçer', 'Gök', 'Gökçe', 'Gökdemir', 'Gökmen', 'Göksu', 'Göktaş', 'Güçlü', 'Gül', 'Güleç', 'Güler', 'Gülmez', 'Gültekin', 'Gümüş', 'Gün', 'Günay', 'Günaydın', 'Gündoğan', 'Gündoğdu', 'Gündüz', 'Güner', 'Güneş', 'Güney', 'Güngör', 'Gür', 'Gürbüz', 'Gürel', 'Gürsoy', 'Güven', 'Güzel',
        'Irmak', 'Işık',
        'İlhan', 'İnal', 'İnan', 'İnce', 'İnci', 'İpek', 'İşler',
        'Kaçar', 'Kaçmaz', 'Kahraman', 'Kahveci', 'Kalaycı', 'Kalkan', 'Kanat', 'Kandemir', 'Kaplan', 'Kara', 'Karaaslan', 'Karabacak', 'Karabulut', 'Karaca', 'Karadağ', 'Karadaş', 'Karademir', 'Karadeniz', 'Karaduman', 'Karagöz', 'Karahan', 'Karakaş', 'Karakaya', 'Karakoç', 'Karakurt', 'Karakuş', 'Karaman', 'Karaoğlu', 'Karasu', 'Karataş', 'Kartal', 'Kavak', 'Kaya', 'Kaymak', 'Kaymaz', 'Kaynak', 'Keleş', 'Keser', 'Keskin', 'Kılıç', 'Kılınç', 'Kır', 'Kıran', 'Kızıl', 'Kızılkaya', 'Koca', 'Kocabaş', 'Kocaman', 'Koç', 'Koçak', 'Koçer', 'Koçyiğit', 'Korkmaz', 'Korkut', 'Koyuncu', 'Kök', 'Köksal', 'Köroğlu', 'Köse', 'Köseoğlu', 'Kul', 'Kurnaz', 'Kurt', 'Kurtuluş', 'Kuru', 'Kuş', 'Kutlu', 'Kuzu', 'Küçük', 'Memiş', 'Meral', 'Mercan', 'Mert', 'Mete', 'Metin', 'Mutlu',
        'Ocak', 'Oğuz', 'Ok', 'Oktay', 'Okumuş', 'Okur', 'Olgun', 'Oral', 'Orhan', 'Oruç',
        'Öcal', 'Öksüz', 'Ölmez', 'Önal', 'Önder', 'Öner', 'Öz', 'Özalp', 'Özbay', 'Özbek', 'Özcan', 'Özçelik', 'Özdemir', 'Özden', 'Özdoğan', 'Özel', 'Özen', 'Özer', 'Özgül', 'Özgür', 'Özkan', 'Özkaya', 'Özmen', 'Özsoy', 'Öztaş', 'Öztürk', 'Özyurt',
        'Pala', 'Parlak', 'Pehlivan', 'Peker', 'Pınar', 'Polat', 'Poyraz',
        'Sağır', 'Sağlam', 'Sakar', 'Salman', 'Saraç', 'Sarı', 'Sarıkaya', 'Sarıoğlu', 'Savaş', 'Sayın', 'Selçuk', 'Serin', 'Sert', 'Seven', 'Sever', 'Sevim', 'Sevinç', 'Sezer', 'Sezgin', 'Solak', 'Solmaz', 'Soylu', 'Soysal', 'Sönmez', 'Söylemez', 'Subaşı', 'Sümer',
        'Şahan', 'Şahin', 'Şanlı', 'Şeker', 'Şen', 'Şenel', 'Şener', 'Şengül', 'Şenol', 'Şentürk', 'Şimşek', 'Şirin',
        'Tan', 'Tanrıverdi', 'Tarhan', 'Taş', 'Taşçı', 'Taşdemir', 'Taşkın', 'Taşkıran', 'Taştan', 'Tatar', 'Tatlı', 'Teke', 'Tekin', 'Temel', 'Temiz', 'Tepe', 'Terzi', 'Tetik', 'Tezcan', 'Tiryaki', 'Tok', 'Top', 'Topal', 'Topaloğlu', 'Topçu', 'Toprak', 'Topuz', 'Torun', 'Tosun', 'Tufan', 'Tuna', 'Tuncel', 'Tuncer', 'Tunç', 'Turan', 'Turgut', 'Turhan', 'Türk', 'Türker', 'Türkmen', 'Türkoğlu',
        'Uçar', 'Uğur', 'Uğurlu', 'Ulu', 'Uludağ', 'Ulusoy', 'Uslu', 'Usta', 'Uyanık', 'Uyar', 'Uygun', 'Uysal', 'Uzun',
        'Ülker', 'Ünal', 'Ünlü', 'Ünsal', 'Ünver', 'Üstün',
        'Varol', 'Vatansever', 'Vural',
        'Yağcı', 'Yakut', 'Yalçın', 'Yalçınkaya', 'Yaman', 'Yanık', 'Yaşar', 'Yavaş', 'Yavuz', 'Yayla', 'Yazıcı', 'Yener', 'Yeşil', 'Yeşilyurt', 'Yıldırım', 'Yıldız', 'Yılmaz', 'Yiğit', 'Yolcu', 'Yoruk', 'Yorulmaz', 'Yüce', 'Yücel', 'Yüksel',
        'Zengin', 'Zeybek', 'Zorlu'
    );

    protected static $title = array(
        'Öğr. Gör.',
        'Öğr. Gör. Dr.',
        'Arş. Gör.',
        'Arş. Gör. Dr.',
        'Dr. Öğr. Ü.',
        'Doç. Dr.',
        'Prof. Dr.'
    );

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * National Personal Identity Number (TC Kimlik No)
     * @link https://en.wikipedia.org/wiki/Turkish_Identification_Number
     * @return string on format XXXXXXXXXXX
     */
    public function tcNo()
    {
        $randomDigits = static::regexify('/^[1-9]{1}[0-9]{8}$/');

        $checksum = TCNo::checksum($randomDigits);

        return $randomDigits . $checksum;
    }
}
