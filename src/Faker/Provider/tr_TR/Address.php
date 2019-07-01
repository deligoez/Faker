<?php

namespace Faker\Provider\tr_TR;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#');

    protected static $apartmentNumber = array('##', '#');

    protected static $streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii'
    );

    protected static $postcode = array('#####');

    /**
     * @var array Countries in Turkish
     * @link https://tr.wikipedia.org/wiki/%C3%9Clkeler_listesi
     */
    protected static $country = array(
        'Afganistan', 'Åland Adaları', 'Almanya', 'Amerikan Samoası', 'Amerikan Virgin Adaları', 'Andorra', 'Angola', 'Anguila', 'Antarktika', 'Antigua-Barbuda', 'Arjantin', 'Arnavutluk', 'Aruba', 'Avustralya', 'Avusturya', 'Azerbaycan',
        'Bahamalar', 'Bahreyn', 'Bangladeş', 'Barbados', 'Batı Sahra', 'Belçika', 'Belize', 'Benin', 'Bermuda', 'Beyaz Rusya', 'Birleşik Arap Emirlikleri', 'Birleşik Devletler', 'Birleşik Krallık', 'Bolivya Çokuluslu Devleti', 'Bonaire, Sint Eustatius ve Saba', 'Bosna-Hersek', 'Botsvana', 'Bouvet Adası', 'Brezilya', 'Britanya Hint Okyanusu Toprakları', 'Brunei Krallığı', 'Bulgaristan', 'Burkina Faso', 'Burundi', 'Butan',
        'Cabo Verde', 'Cebelitarık', 'Cezayir', 'Christmas Adası', 'Cibuti', 'Cocos (Keeling) Adaları', 'Cook Adaları', 'Curaçao',
        'Çekya', 'Çad', 'Çin',
        'Danimarka', 'Dominik', 'Dominik Cumhuriyeti',
        'Ekvator', 'Ekvatoral Gine', 'El Salvador', 'Endonezya', 'Eritre', 'Ermenistan', 'Estonya', 'Etiyopya',
        'Falkland Adaları (Malvinas)', 'Faroe Adaları', 'Fas', 'Fiji', 'Fildişi Sahili', 'Filipinler', 'Filistin Devleti', 'Finlandiya', 'Fransa', 'Fransız Guyanası', 'Fransız Güney Bölgeleri', 'Fransız Polinezyası',
        'Gabon', 'Gambiya', 'Gana', 'Gine', 'Gine-Bissau', 'Granada', 'Grönland', 'Guadalup', 'Guam', 'Guatemala', 'Guernsey', 'Guyana', 'Güney Afrika', 'Güney Gürcistan ve Güney Sandöviç Adası', 'Güney Sudan', 'Gürcistan',
        'Haiti', 'Heard Adası ve McDonald Adaları', 'Hırvatistan', 'Hindistan', 'Hollanda', 'Honduras', 'Hong Kong',
        'Irak',
        'İngiliz Virgin Adaları', 'İran İslâm Cumhuriyeti', 'İrlanda', 'İspanya', 'İsrail', 'İsveç', 'İsviçre', 'İtalya', 'İzlanda',
        'Jamaika', 'Japonya', 'Jersey',
        'Kamboçya', 'Kamerun', 'Kanada', 'Karadağ', 'Katar', 'Kazakistan', 'Kenya', 'Kıbrıs', 'Kırgızistan', 'Kiribati', 'Kolombiya', 'Komorlar', 'Kongo', 'Kongo Demokratik Cumhuriyeti', 'Kore Cumhuriyeti', 'Kore Demokratik Halk Cumhuriyeti', 'Kosta Rika', 'Kuveyt', 'Kuzey Meryem Adaları', 'Küba',
        'Lao Demokratik Halk Cumhuriyeti', 'Latviya', 'Lesoto', 'Liberya', 'Libya', 'Lihtenştayn', 'Litvanya', 'Lübnan', 'Lüksemburg',
        'Macaristan', 'Madagaskar', 'Makao', 'Makedonya Cumhuriyeti', 'Malavi', 'Maldivler', 'Malezya', 'Mali', 'Malta', 'Man Adası', 'Marşal Adaları', 'Martinik', 'Mauritius', 'Mayotte', 'Meksika', 'Mısır', 'Mikronezya Federe Devletleri', 'Minor Outlying Adaları Birleşik Devletleri', 'Miyanmar', 'Moğolistan', 'Moldova Cumhuriyeti', 'Monako', 'Monserat', 'Moritanya', 'Mozambik',
        'Namibya', 'Nauru', 'Nepal', 'Nie', 'Nijer', 'Nijerya', 'Nikaragua', 'Norfolk Adası', 'Norveç',
        'Orta Afrika Cumhuriyeti',
        'Özbekistan',
        'Pakistan', 'Palau', 'Panama', 'Papua Yeni Gine', 'Paraguay', 'Peru', 'Pitcairn', 'Polonya', 'Portekiz', 'Porto Riko',
        'Réunion', 'Romanya', 'Ruanda', 'Rusya Federasyonu',
        'Samoa', 'San Marino', 'Sao Tome ve Principe', 'Sen Barthélemy', 'Sen Helen, Ascension and Tristan da Cunha', 'Sen Kitts ve Nevis', 'Sen Lucia', 'Sen Martin (Fransız Kısmı)', 'Sen Martin (Hollanda Kısmı)', 'Sen Piyer ve Miquelon', 'Sen Vinsınt ve Granadalar', 'Senegal', 'Seyman Adaları', 'Seyşeller', 'Sırbistan', 'Sierra Leone', 'Singapur', 'Slovakya', 'Slovenya', 'Solomon Adaları', 'Somali', 'Sri Lanka', 'Sudan', 'Surinam', 'Suriye Arap Cumhuriyeti', 'Suudi Arabistan', 'Svalbard ve Jan Mayen Adaları', 'Svaziland',
        'Şili',
        'Tacikistan', 'Tanzanya Birleşik Cumhuriyeti', 'Tayland', 'Tayvan, Çin Eyaleti', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad ve Tobago', 'Tunus', 'Tuvalu', 'Türk ve Kaykos Adaları', 'Türkiye', 'Türkmenistan',
        'Uganda', 'Ukrayna', 'Umman', 'Uruguay',
        'Ürdün',
        'Vanuatu', 'Vatikan', 'Venezuella Bolivya Cumhuriyeti', 'Vietnam', 'Wallis ve Futuna',
        'Yemen', 'Yeni Kaledonya', 'Yeni Zelanda', 'Yunanistan',
        'Zambiya', 'Zimbabve'
    );

    /**
    * @var array Cities of Turkey, for future updates please use @link https://tr.wikipedia.org/wiki/T%C3%BCrkiye'nin_illeri
    */
    protected static $cityNames = array(
        'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydın',
        'Balıkesir','Bartın','Batman','Bayburt','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa',
        'Çanakkale','Çankırı','Çorum',
        'Denizli','Diyarbakır','Düzce',
        'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir',
        'Gaziantep','Giresun','Gümüşhane',
        'Hakkari','Hatay',
        'Iğdır','Isparta','İstanbul','İzmir',
        'Kahramanmaraş','Karabük','Karaman','Kars','Kastamonu','Kayseri','Kilis',
        'Kırıkkale','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya',
        'Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
        'Nevşehir','Niğde',
        'Ordu','Osmaniye',
        'Rize',
        'Sakarya','Samsun','Şanlıurfa','Siirt','Sinop','Şırnak','Sivas',
        'Tekirdağ','Tokat','Trabzon','Tunceli',
        'Uşak',
        'Van',
        'Yalova','Yozgat',
        'Zonguldak'
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} No: {{buildingNumber}}',
        '{{streetName}} No: {{buildingNumber}}',
        '{{streetName}} No: {{buildingNumber}} Daire: {{apartmentNumber}}',
        '{{streetName}} No: {{buildingNumber}}/{{apartmentNumber}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );
}
