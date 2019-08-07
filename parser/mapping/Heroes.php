<?php

namespace hotsweek\parser\mapping;

include_once __DIR__ . '/../Constants.php';

trait Heroes
{
    protected $heroesMapping = [
        "Zeratul" => HERO_ZERA,
        "ЗЕРАТУЛ" => HERO_ZERA,
        "제라툴" => HERO_ZERA,
        "泽拉图" => HERO_ZERA,
        "澤拉圖" => HERO_ZERA,
        "Valla" => HERO_DEMO,
        "Vala" => HERO_DEMO,
        "Demon Hunter" => HERO_DEMO,
        "Chasseuse De Demons" => HERO_DEMO,
        "Dämonenjägerin" => HERO_DEMO,
        "Cazadora de demonios" => HERO_DEMO,
        "Łowczyni Demonów" => HERO_DEMO,
        "Cacciatrice di Demoni" => HERO_DEMO,
        "Валла" => HERO_DEMO,
        "Tyla" => HERO_DEMO,
        "Caçadora de Demônios" => HERO_DEMO,
        "악마사냥꾼" => HERO_DEMO,
        "발라" => HERO_DEMO,
        "猎魔人" => HERO_DEMO,
        "狩魔獵人" => HERO_DEMO,
        "维拉" => HERO_DEMO,
        "維拉" => HERO_DEMO,
        "Uther" => HERO_UTHE,
        "УТЕР" => HERO_UTHE,
        "우서" => HERO_UTHE,
        "乌瑟尔" => HERO_UTHE,
        "烏瑟" => HERO_UTHE,
        "Tyrande" => HERO_TYRD,
        "ТИРАНДА" => HERO_TYRD,
        "티란데" => HERO_TYRD,
        "泰兰德" => HERO_TYRD,
        "泰蘭妲" => HERO_TYRD,
        "Tyrael" => HERO_TYRL,
        "ТИРАЭЛЬ" => HERO_TYRL,
        "Tyraël" => HERO_TYRL,
        "티리엘" => HERO_TYRL,
        "泰瑞尔" => HERO_TYRL,
        "泰瑞爾" => HERO_TYRL,
        "Tassadar" => HERO_TASS,
        "ТАССАДАР" => HERO_TASS,
        "태사다르" => HERO_TASS,
        "塔萨达尔" => HERO_TASS,
        "塔薩達" => HERO_TASS,
        "Тассадар" => HERO_TASS,
        "Stitches" => HERO_STIT,
        "Kleiner" => HERO_STIT,
        "Puntos" => HERO_STIT,
        "Zszywaniec" => HERO_STIT,
        "Tritacarne" => HERO_STIT,
        "Balafré" => HERO_STIT,
        "СТЕЖОК" => HERO_STIT,
        "Suturino" => HERO_STIT,
        "누더기" => HERO_STIT,
        "缝合怪" => HERO_STIT,
        "縫合怪" => HERO_STIT,
        "Sonya" => HERO_BARB,
        "Sonia" => HERO_BARB,
        "Barbare" => HERO_BARB,
        "Barbarian" => HERO_BARB,
        "Barbarin" => HERO_BARB,
        "Bárbara" => HERO_BARB,
        "Соня" => HERO_BARB,
        "야만용사" => HERO_BARB,
        "野蛮人" => HERO_BARB,
        "소냐" => HERO_BARB,
        "野蠻人" => HERO_BARB,
        "桑娅" => HERO_BARB,
        "桑雅" => HERO_BARB,
        "Sgt. Hammer" => HERO_SGTH,
        "Sgt Marteau" => HERO_SGTH,
        "Sergeant Hammer" => HERO_SGTH,
        "Sgto. Hammer" => HERO_SGTH,
        "Sierżant Petarda" => HERO_SGTH,
        "Sergente Hammer" => HERO_SGTH,
        "Sgto. Martillo" => HERO_SGTH,
        "Сержант Кувалда" => HERO_SGTH,
        "Sargento Maza" => HERO_SGTH,
        "Sgt. Marreta" => HERO_SGTH,
        "해머 상사" => HERO_SGTH,
        "重锤军士" => HERO_SGTH,
        "榔頭中士" => HERO_SGTH,
        "Sierż. Petarda" => HERO_SGTH,
        "Raynor" => HERO_RAYN,
        "РЕЙНОР" => HERO_RAYN,
        "레이너" => HERO_RAYN,
        "雷诺" => HERO_RAYN,
        "雷諾" => HERO_RAYN,
        "Nova" => HERO_NOVA,
        "НОВА" => HERO_NOVA,
        "노바" => HERO_NOVA,
        "诺娃" => HERO_NOVA,
        "諾娃" => HERO_NOVA,
        "Nazeebo" => HERO_WITC,
        "Witch Doctor" => HERO_WITC,
        "Féticheur" => HERO_WITC,
        "Hexendoktor" => HERO_WITC,
        "Medico Brujo" => HERO_WITC,
        "Szaman" => HERO_WITC,
        "Sciamano" => HERO_WITC,
        "Nasibo" => HERO_WITC,
        "Nazebo" => HERO_WITC,
        "Назибо" => HERO_WITC,
        "Nazibo" => HERO_WITC,
        "나지보" => HERO_WITC,
        "纳兹波" => HERO_WITC,
        "納奇班" => HERO_WITC,
        "Muradin" => HERO_MURA,
        "МУРАДИН" => HERO_MURA,
        "무라딘" => HERO_MURA,
        "穆拉丁" => HERO_MURA,
        "Malfurion" => HERO_MALF,
        "МАЛФУРИОН" => HERO_MALF,
        "말퓨리온" => HERO_MALF,
        "玛法里奥" => HERO_MALF,
        "瑪法里恩" => HERO_MALF,
        "Kerrigan" => HERO_KERR,
        "КЕРРИГАН" => HERO_KERR,
        "케리건" => HERO_KERR,
        "凯瑞甘" => HERO_KERR,
        "凱莉根" => HERO_KERR,
        "Illidan" => HERO_ILLI,
        "ИЛЛИДАН" => HERO_ILLI,
        "일리단" => HERO_ILLI,
        "伊利丹" => HERO_ILLI,
        "Gazlowe" => HERO_TINK,
        "Gazleu" => HERO_TINK,
        "Gazol" => HERO_TINK,
        "Sparachiodi" => HERO_TINK,
        "ГАЗЛОУ" => HERO_TINK,
        "Gasganete" => HERO_TINK,
        "가즈로" => HERO_TINK,
        "加兹鲁维" => HERO_TINK,
        "加茲魯維" => HERO_TINK,
        "Falstad" => HERO_FALS,
        "ФАЛСТАД" => HERO_FALS,
        "폴스타트" => HERO_FALS,
        "弗斯塔德" => HERO_FALS,
        "E.T.C." => HERO_L90E,
        "ETC" => HERO_L90E,
        "C.T.E." => HERO_L90E,
        "정예 타우렌 족장" => HERO_L90E,
        "精英牛头人酋长" => HERO_L90E,
        "精英牛頭大佬" => HERO_L90E,
        "Diablo" => HERO_DIAB,
        "ДИАБЛО" => HERO_DIAB,
        "Диабло" => HERO_DIAB,
        "디아블로" => HERO_DIAB,
        "迪亚波罗" => HERO_DIAB,
        "迪亞布羅" => HERO_DIAB,
        "Arthas" => HERO_ARTH,
        "АРТАС" => HERO_ARTH,
        "아서스" => HERO_ARTH,
        "阿尔萨斯" => HERO_ARTH,
        "阿薩斯" => HERO_ARTH,
        "Артас" => HERO_ARTH,
        "Abathur" => HERO_ABAT,
        "Abatur" => HERO_ABAT,
        "АБАТУР" => HERO_ABAT,
        "아바투르" => HERO_ABAT,
        "阿巴瑟" => HERO_ABAT,
        "Tychus" => HERO_TYCH,
        "ТАЙКУС" => HERO_TYCH,
        "타이커스" => HERO_TYCH,
        "泰凯斯" => HERO_TYCH,
        "泰科斯" => HERO_TYCH,
        "Li Li" => HERO_LILI,
        "ЛИ ЛИ" => HERO_LILI,
        "리 리" => HERO_LILI,
        "丽丽" => HERO_LILI,
        "莉莉" => HERO_LILI,
        "Brightwing" => HERO_FAER,
        "Luisaile" => HERO_FAER,
        "Funkelchen" => HERO_FAER,
        "Alafeliz" => HERO_FAER,
        "Jasnoskrzydła" => HERO_FAER,
        "Alachiara" => HERO_FAER,
        "СВЕТИК" => HERO_FAER,
        "Alasol" => HERO_FAER,
        "Asaluz" => HERO_FAER,
        "빛나래" => HERO_FAER,
        "光明之翼" => HERO_FAER,
        "亮翼" => HERO_FAER,
        "Murky" => HERO_MURK,
        "Bourbie" => HERO_MURK,
        "Męcik" => HERO_MURK,
        "Fosky" => HERO_MURK,
        "МУРЧАЛЬ" => HERO_MURK,
        "Murquinho" => HERO_MURK,
        "머키" => HERO_MURK,
        "鱼人" => HERO_MURK,
        "奔波尔霸" => HERO_MURK,
        "莫奇" => HERO_MURK,
        "Zagara" => HERO_ZAGA,
        "ЗАГАРА" => HERO_ZAGA,
        "자가라" => HERO_ZAGA,
        "扎加拉" => HERO_ZAGA,
        "札迦拉" => HERO_ZAGA,
        "Rehgar" => HERO_REHG,
        "РЕГАР" => HERO_REHG,
        "레가르" => HERO_REHG,
        "雷加尔" => HERO_REHG,
        "雷加" => HERO_REHG,
        "Chen" => HERO_CHEN,
        "Чэнь" => HERO_CHEN,
        "Czen" => HERO_CHEN,
        "첸" => HERO_CHEN,
        "老陳" => HERO_CHEN,
        "陈" => HERO_CHEN,
        "Azmodan" => HERO_AZMO,
        "Asmodan" => HERO_AZMO,
        "Азмодан" => HERO_AZMO,
        "Azmodán" => HERO_AZMO,
        "Azmadan" => HERO_AZMO,
        "아즈모단" => HERO_AZMO,
        "阿兹莫丹" => HERO_AZMO,
        "阿茲莫丹" => HERO_AZMO,
        "Anub'arak" => HERO_ANUB,
        "Anub’arak" => HERO_ANUB,
        "Ануб'арак" => HERO_ANUB,
        "아눕아락" => HERO_ANUB,
        "阿努巴拉克" => HERO_ANUB,
        "Jaina" => HERO_JAIN,
        "Джайна" => HERO_JAIN,
        "제이나" => HERO_JAIN,
        "珍娜" => HERO_JAIN,
        "吉安娜" => HERO_JAIN,
        "Thrall" => HERO_THRA,
        "Тралл" => HERO_THRA,
        "萨尔" => HERO_THRA,
        "스랄" => HERO_THRA,
        "索爾" => HERO_THRA,
        "The Lost Vikings" => HERO_LOST,
        "Os Vikings Perdidos" => HERO_LOST,
        "Потерявшиеся викинги" => HERO_LOST,
        "Los Vikingos perdidos" => HERO_LOST,
        "Les Vikings perdus" => HERO_LOST,
        "Vichinghi Sperduti" => HERO_LOST,
        "Zaginieni Wikingowie" => HERO_LOST,
        "Lost Vikings" => HERO_LOST,
        "失落的維京人" => HERO_LOST,
        "失落的维京人" => HERO_LOST,
        "길 잃은 바이킹" => HERO_LOST,
        "Sylvanas" => HERO_SYLV,
        "Sylvana" => HERO_SYLV,
        "希尔瓦娜斯" => HERO_SYLV,
        "希瓦娜斯" => HERO_SYLV,
        "실바나스" => HERO_SYLV,
        "Sylwana" => HERO_SYLV,
        "Сильвана" => HERO_SYLV,
        "Kael'thas" => HERO_KAEL,
        "Kael’thas" => HERO_KAEL,
        "캘타스" => HERO_KAEL,
        "凱爾薩斯" => HERO_KAEL,
        "凯尔萨斯" => HERO_KAEL,
        "Кель'тас" => HERO_KAEL,
        "Johanna" => HERO_CRUS,
        "요한나" => HERO_CRUS,
        "Джоанна" => HERO_CRUS,
        "乔汉娜" => HERO_CRUS,
        "喬安娜" => HERO_CRUS,
        "The Butcher" => HERO_BUTC,
        "El Carnicero" => HERO_BUTC,
        "O Açougueiro" => HERO_BUTC,
        "屠夫" => HERO_BUTC,
        "도살자" => HERO_BUTC,
        "Der Schlächter" => HERO_BUTC,
        "Мясник" => HERO_BUTC,
        "Le Boucher" => HERO_BUTC,
        "Macellaio" => HERO_BUTC,
        "Rzeźnik" => HERO_BUTC,
        "Leoric" => HERO_LEOR,
        "Leoryk" => HERO_LEOR,
        "Леорик" => HERO_LEOR,
        "李奥瑞克" => HERO_LEOR,
        "李奧瑞克" => HERO_LEOR,
        "레오릭" => HERO_LEOR,
        "Léoric" => HERO_LEOR,
        "Kharazim" => HERO_MONK,
        "克拉辛" => HERO_MONK,
        "卡拉辛姆" => HERO_MONK,
        "카라짐" => HERO_MONK,
        "Каразим" => HERO_MONK,
        "Rexxar" => HERO_REXX,
        "Рексар" => HERO_REXX,
        "雷克萨" => HERO_REXX,
        "雷克薩" => HERO_REXX,
        "렉사르" => HERO_REXX,
        "Lt. Morales" => HERO_MEDI,
        "Lt Morales" => HERO_MEDI,
        "Ten. Morales" => HERO_MEDI,
        "Teniente Morales" => HERO_MEDI,
        "Tte. Morales" => HERO_MEDI,
        "莫拉莉斯中尉" => HERO_MEDI,
        "모랄레스 중위" => HERO_MEDI,
        "Лейтенант Моралес" => HERO_MEDI,
        "莫拉萊斯中尉" => HERO_MEDI,
        "Por. Morales" => HERO_MEDI,
        "Artanis" => HERO_ARTS,
        "아르타니스" => HERO_ARTS,
        "亞坦尼斯" => HERO_ARTS,
        "阿塔尼斯" => HERO_ARTS,
        "Артанис" => HERO_ARTS,
        "Cho" => HERO_CCHO,
        "Чо" => HERO_CCHO,
        "초" => HERO_CCHO,
        "古" => HERO_CCHO,
        "Czo" => HERO_CCHO,
        "丘" => HERO_CCHO,
        "Cha" => HERO_CCHO,
        "Che" => HERO_CCHO,
        "Gall" => HERO_GALL,
        "Галл" => HERO_GALL,
        "갈" => HERO_GALL,
        "加尔" => HERO_GALL,
        "Gal" => HERO_GALL,
        "加利" => HERO_GALL,
        "Lunara" => HERO_DRYA,
        "露娜拉" => HERO_DRYA,
        "루나라" => HERO_DRYA,
        "Лунара" => HERO_DRYA,
        "AyHapa" => HERO_DRYA,
        "Greymane" => HERO_GENN,
        "Cringris" => HERO_GENN,
        "Cringrís" => HERO_GENN,
        "Graumähne" => HERO_GENN,
        "Grisetête" => HERO_GENN,
        "Mantogrigio" => HERO_GENN,
        "Szarogrzywy" => HERO_GENN,
        "Седогрив" => HERO_GENN,
        "格雷迈恩" => HERO_GENN,
        "葛雷邁恩" => HERO_GENN,
        "그레이메인" => HERO_GENN,
        "Li-Ming" => HERO_WIZA,
        "李敏" => HERO_WIZA,
        "리밍" => HERO_WIZA,
        "Ли-Мин" => HERO_WIZA,
        "Xul" => HERO_NECR,
        "蘇爾" => HERO_NECR,
        "祖尔" => HERO_NECR,
        "줄" => HERO_NECR,
        "Зул" => HERO_NECR,
        "Dehaka" => HERO_DEHA,
        "Дехака" => HERO_DEHA,
        "데하카" => HERO_DEHA,
        "德哈卡" => HERO_DEHA,
        "Tracer" => HERO_TRA0,
        "Трейсер" => HERO_TRA0,
        "Smuga" => HERO_TRA0,
        "猎空" => HERO_TRA0,
        "트레이서" => HERO_TRA0,
        "閃光" => HERO_TRA0,
        "Chromie" => HERO_CHRO,
        "Crona" => HERO_CHRO,
        "Cromi" => HERO_CHRO,
        "克罗米" => HERO_CHRO,
        "克羅米" => HERO_CHRO,
        "Chronia" => HERO_CHRO,
        "Cromie" => HERO_CHRO,
        "Хроми" => HERO_CHRO,
        "크로미" => HERO_CHRO,
        "Medivh" => HERO_MDVH,
        "麥迪文" => HERO_MDVH,
        "麦迪文" => HERO_MDVH,
        "메디브" => HERO_MDVH,
        "Медив" => HERO_MDVH,
        "Gul'dan" => HERO_GULD,
        "古爾丹" => HERO_GULD,
        "古尔丹" => HERO_GULD,
        "Gul’dan" => HERO_GULD,
        "굴단" => HERO_GULD,
        "Гул'дан" => HERO_GULD,
        "Auriel" => HERO_AURI,
        "Ауриэль" => HERO_AURI,
        "奥莉尔" => HERO_AURI,
        "奧莉爾" => HERO_AURI,
        "아우리엘" => HERO_AURI,
        "Alarak" => HERO_ALAR,
        "亞拉瑞克" => HERO_ALAR,
        "阿拉纳克" => HERO_ALAR,
        "알라라크" => HERO_ALAR,
        "Аларак" => HERO_ALAR,
        "Zarya" => HERO_ZARY,
        "札莉雅" => HERO_ZARY,
        "查莉娅" => HERO_ZARY,
        "자리야" => HERO_ZARY,
        "Zaria" => HERO_ZARY,
        "Заря" => HERO_ZARY,
        "자라야" => HERO_ZARY,
        "Samuro" => HERO_SAMU,
        "萨穆罗" => HERO_SAMU,
        "薩姆羅" => HERO_SAMU,
        "Самуро" => HERO_SAMU,
        "사무로" => HERO_SAMU,
        "Samura" => HERO_SAMU,
        "Varian" => HERO_VARI,
        "瓦里安" => HERO_VARI,
        "바리안" => HERO_VARI,
        "Вариан" => HERO_VARI,
        "바리인" => HERO_VARI,
        "Ragnaros" => HERO_RAGN,
        "拉格納羅斯" => HERO_RAGN,
        "拉格纳罗斯" => HERO_RAGN,
        "라그나로스" => HERO_RAGN,
        "Рагнарос" => HERO_RAGN,
        "Zul'jin" => HERO_ZULJ,
        "Zul’jin" => HERO_ZULJ,
        "祖爾金" => HERO_ZULJ,
        "祖尔金" => HERO_ZULJ,
        "줄진" => HERO_ZULJ,
        "Зул'джин" => HERO_ZULJ,
        "Valeera" => HERO_VALE,
        "Valira" => HERO_VALE,
        "Валира" => HERO_VALE,
        "瓦莉拉" => HERO_VALE,
        "瓦麗拉" => HERO_VALE,
        "발리라" => HERO_VALE,
        "Lúcio" => HERO_LUCI,
        "Lucio" => HERO_LUCI,
        "Лусио" => HERO_LUCI,
        "루시우" => HERO_LUCI,
        "卢西奥" => HERO_LUCI,
        "路西歐" => HERO_LUCI,
        "Probius" => HERO_PROB,
        "Sondius" => HERO_PROB,
        "Пробиус" => HERO_PROB,
        "普罗比斯" => HERO_PROB,
        "普羅比斯" => HERO_PROB,
        "Probiusz" => HERO_PROB,
        "프로비우스" => HERO_PROB,
        "EDN-OS" => HERO_PROB,
        "Cassia" => HERO_AMAZ,
        "Cássia" => HERO_AMAZ,
        "Kasja" => HERO_AMAZ,
        "Кассия" => HERO_AMAZ,
        "카시아" => HERO_AMAZ,
        "卡西娅" => HERO_AMAZ,
        "卡西雅" => HERO_AMAZ,
        "Genji" => HERO_GENJ,
        "Гэндзи" => HERO_GENJ,
        "源氏" => HERO_GENJ,
        "겐지" => HERO_GENJ,
        "D.Va" => HERO_DVA0,
        "D.Va" => HERO_DVA0,
        "D.VA" => HERO_DVA0,
        "Malthael" => HERO_MALT,
        "Maltael" => HERO_MALT,
        "Malthaël" => HERO_MALT,
        "Малтаэль" => HERO_MALT,
        "马萨伊尔" => HERO_MALT,
        "瑪瑟爾" => HERO_MALT,
        "말티엘" => HERO_MALT,
        "Stukov" => HERO_STUK,
        "斯杜科夫" => HERO_STUK,
        "스투코프" => HERO_STUK,
        "Stiukow" => HERO_STUK,
        "Стуков" => HERO_STUK,
        "斯托科夫" => HERO_STUK,
        "Garrosh" => HERO_GARR,
        "加尔鲁什" => HERO_GARR,
        "가로쉬" => HERO_GARR,
        "Гаррош" => HERO_GARR,
        "Garosz" => HERO_GARR,
        "卡爾洛斯" => HERO_GARR,
        "Kel'Thuzad" => HERO_KELT,
        "Kel’Thuzad" => HERO_KELT,
        "克尔苏加德" => HERO_KELT,
        "科爾蘇加德" => HERO_KELT,
        "Кел'Тузад" => HERO_KELT,
        "켈투자드" => HERO_KELT,
        "Ana" => HERO_HANA,
        "安娜" => HERO_HANA,
        "아나" => HERO_HANA,
        "Ана" => HERO_HANA,
        "Junkrat" => HERO_JUNK,
        "炸彈鼠" => HERO_JUNK,
        "狂鼠" => HERO_JUNK,
        "Chacal" => HERO_JUNK,
        "Крысавчик" => HERO_JUNK,
        "정크랫" => HERO_JUNK,
        "Złomiarz" => HERO_JUNK,
        "Alexstrasza" => HERO_ALEX,
        "Alexstraza" => HERO_ALEX,
        "Алекстраза" => HERO_ALEX,
        "阿莱克丝塔萨" => HERO_ALEX,
        "雅立史卓莎" => HERO_ALEX,
        "알렉스트라자" => HERO_ALEX,
        "Hanzo" => HERO_HANZ,
        "半藏" => HERO_HANZ,
        "한조" => HERO_HANZ,
        "Хандзо" => HERO_HANZ,
        "Blaze" => HERO_FIRE,
        "Firebat" => HERO_FIRE,
        "Kramer" => HERO_FIRE,
        "Vulcano" => HERO_FIRE,
        "Блэйз" => HERO_FIRE,
        "블레이즈" => HERO_FIRE,
        "布雷泽" => HERO_FIRE,
        "爆焰" => HERO_FIRE,
        "Pożarsky" => HERO_FIRE,
        "Maiev" => HERO_MAIE,
        "玛维" => HERO_MAIE,
        "瑪翼夫" => HERO_MAIE,
        "마이에브" => HERO_MAIE,
        "Майев" => HERO_MAIE,
        "Fenix" => HERO_FENX,
        "피닉스" => HERO_FENX,
        "菲尼克斯" => HERO_FENX,
        "Феникс" => HERO_FENX,
        "Fénix" => HERO_FENX,
        "Deckard" => HERO_DECK,
        "凱恩" => HERO_DECK,
        "迪卡德" => HERO_DECK,
        "데커드" => HERO_DECK,
        "Декард" => HERO_DECK,
        "Yrel" => HERO_YREL,
        "Ирель" => HERO_YREL,
        "伊瑞尔" => HERO_YREL,
        "이렐" => HERO_YREL,
        "伊芮爾" => HERO_YREL,
        "Cristalba" => HERO_WHIT,
        "Melenablanca" => HERO_WHIT,
        "懷特邁恩" => HERO_WHIT,
        "怀特迈恩" => HERO_WHIT,
        "Blanchetête" => HERO_WHIT,
        "Biancachioma" => HERO_WHIT,
        "Weißsträhne" => HERO_WHIT,
        "Вайтмейн" => HERO_WHIT,
        "Białowłosa" => HERO_WHIT,
        "화이트메인" => HERO_WHIT,
        "Mephisto" => HERO_MEPH,
        "Mefisto" => HERO_MEPH,
        "墨菲斯托" => HERO_MEPH,
        "메피스토" => HERO_MEPH,
        "Méphisto" => HERO_MEPH,
        "Мефисто" => HERO_MEPH,
        "Mal'Ganis" => HERO_MALG,
        "Mal’Ganis" => HERO_MALG,
        "Мал'Ганис" => HERO_MALG,
        "玛尔加尼斯" => HERO_MALG,
        "瑪爾加尼斯" => HERO_MALG,
        "말가니스" => HERO_MALG,
        "Orphea" => HERO_ORPH,
        "orphea" => HERO_ORPH,
        "奥菲娅" => HERO_ORPH,
        "歐菲亞" => HERO_ORPH,
        "orphéa" => HERO_ORPH,
        "Orfea" => HERO_ORPH,
        "Орфея" => HERO_ORPH,
        "오르피아" => HERO_ORPH,
        "Imperius" => HERO_IMPE,
        "英普瑞斯" => HERO_IMPE,
        "임페리우스" => HERO_IMPE,
        "Anduin" => HERO_ANDU,
        "안두인" => HERO_ANDU,
        "安杜因" => HERO_ANDU,
        "安度因" => HERO_ANDU,
        "Андуин" => HERO_ANDU,
        "Qhira" => HERO_QHIR,
        "奇菈" => HERO_QHIR,
        "琪拉" => HERO_QHIR,
    ];
}
