-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Úte 02. lis 2021, 17:44
-- Verze serveru: 10.5.12-MariaDB-1:10.5.12+maria~focal
-- Verze PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `offline_zabava02`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_url` char(30) NOT NULL,
  `category_title` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`category_id`, `category_url`, `category_title`) VALUES
(1, 'priroda', 'Hry do přírody'),
(2, 'mesto', 'Hry do města'),
(3, 'hriste', 'Hry na hřiště');

-- --------------------------------------------------------

--
-- Struktura tabulky `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_title` char(30) NOT NULL,
  `game_url` char(30) NOT NULL,
  `game_text` text NOT NULL,
  `game_description` char(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `games`
--

INSERT INTO `games` (`game_id`, `game_title`, `game_url`, `game_text`, `game_description`, `category_id`) VALUES
(10, 'Na Zlodějské doupě', 'naZlodejskeDoupe', 'Před začátkem hry vyberte nějaký průchod nebo vchod do domu. Vybraný vchod bude „zlodějské doupě“. Poté si vyberte nebo vylosujte jednoho hráče a ten bude dělat policistu. Na začátku se všichni, kromě policisty, shromáždí u zlodějského doupěte. Policista se půjde schovat někam do blízkého okolí. Minutu po odchodu policisty vyjdou zloději ze svého doupěte a začnou ho hledat. Ten, kdo objeví schovaného policistu, začne volat na poplach: „Pozor, zpátky do doupěte!“. Policista vyběhne z úkrytu a pokusí se chytit zloděje. Zloděj, který je chycen policistou před tím, než stihne doběhnout do doupěte, je policistovo pomocník. Pak se policista a jeho pomocníci znovu schovají.  Když zloděj objeví policistova pomocníka, tak platí to samé jako pro policistu – začne volat na poplach. Chytají i policistovi pomocníci. Hra se takto opakuje a skončí, až když jsou pochytání všichni zloději.', '6-11 let, 5-10 hráčů, kluci, holky', 2),
(11, 'Tinki tinki', 'tinkiTinki', 'Než začne hra, nakreslete na zem křídou nebo kouskem cihly výrazný bod. Hráči si vezmou dohodnutý počet kuliček a každý z několikametrové vzdálenosti hází kuličky k nakreslenému bodu. Ten, komu se zastaví kulička nejblíže k vyznačenému bodu, začíná druhou fázi hry. Vybere si jakoukoli kuličku a cvrnkne do ní tak, aby „tinkla“ do jiné kuličky. Když se mu podaří „tinknout“, pokračuje s jinou dvojicí kuliček. Když cíl mine, pokračuje ten, kdo je po něm na řadě. Hráči mají postupně tinknout, tedy ťuknout po dvojicích, všechny kuličky. Komu se povede tinknout poslední dvojici, bere všechny kuličky.', '6-14 let, 2-4 hráči, kluci, holky', 2),
(14, 'Pronikni za soupeřovu čáru!', 'pronikniZaSouperovuCaru', 'Před zahájením hry vyznačte na zem dvě rovnoběžné čáry. Čáry by měly být dlouhé 3 metry a vzdálené od sebe 6 metrů. Hráči se postaví na čáry, čelem proti sobě. Jeden útočí, druhý brání. Na pokyn hráči vběhnou na území mezi čarami. Při hře hráči nesmí opustit vyznačené území. Ten, kdo brání, musí útočníkovi zabránit, aby se dostal za jeho čáru. Pokud se útočník nedostane za soupeřovu čáru do 30 sekund od začátku hry, tak prohrál. Obránce získává bod. Když obránce svoji čáru neubrání a útočník se dostane za čáru celým svým tělem, útočník vyhrál. Poté se mění role. Hraje se do tří nebo pěti bodů.', '9-15+, kluci, 2 hráči', 1),
(15, 'Ťukaná', 'tukana', 'jsou 2 body. Za nepřímý zásah je 1 bod (hozený kámen se nejdříve dotkne země a pak ťukne do většího kamene). Až se všichni hráči vystřídají, kámen před čárou se posune o další metr. Odměna se zvýší o 1 bod. Ten, kdo zasáhne přímo, má 3 body, a kdo nepřímo, má 2 body. Takhle se každé kolo oddaluje kámen o metr a zvyšuje se odměna o bod. To znamená, že      v 6. kole získáte za přímý zásah 7 bodů a za nepřímý 6 bodů. Ten, kdo má nejvíce bodů, vyhrává.', '9-15+, kluci, 2 hráči', 1),
(62, 'Boj o trůn', 'bojOTrun', 'Ještě, než začne hra, položte plochý kámen na zem. Tento kámen bude představovat trůn. Jeden hráč, který bude král, se postaví na trůn. Druhý hráč, který bude útočník, proti němu podnikne nájezd na jedné noze. Může krále vystrčit nebo vytlačit.  Vždy ale musí mít jednu nohu ve vzduchu. Když král opustí trůn oběma nohama, prohrál. Pokud si útočník stoupne na obě nohy, prohrál.', '6-14 let, 2 hráči', 3),
(63, 'Vyvolávaná u zdi', 'vyvolavanaUZdi', 'Hráči se shromáždí na chodníku u zdi bez oken. Jeden z hráčů má míček. Udeří s míčkem do zdi alespoň ve dvoumetrové výšce. Zároveň zavolá jméno jiného hráče. Vyvolaný hráč musí míček chytit dřív, než dopadne na zem. Když hráč míček nechytí a dopadne na zem, ostatní hráči se rozutečou a hráč po nich musí míček hodit, ale z místa, kam míček dopadl. Když se mu podaří trefit nějakého hráče, tak trefený hráč dostává trestný bod. Když se Hráč netrefí, dostává trestný bod on. Ten, kdo má nejméně trestných bodů, vyhrává.', '11-14 let, 5-10 hráčů, kluci, holky', 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_czech_ci NOT NULL,
  `role` enum('member','admin') COLLATE utf8_czech_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@localhost.cz', '$2y$10$h8vmMU0yHJ4jFOpfxrZO0eIW3qgnRFXsdi4G9DKzXaHuo9OLPuPJu', 'admin'),
(2, 'test', 'test@localhost.cz', '$2y$10$Re6SSHFjyr25eaddRBQHP.tvQ0nUr0EqUK05y12bGhgM.MzeHa5c6', 'member'),
(3, 'baf', 'baf@baf.com', '$2y$10$CGQq0t3Sz0U2BtQK8ZLuKudveOfakDFPlOFfrKs9ETqFbgggEqHUS', 'member'),
(5, 'jan', 'exam@exam.com', '$2y$10$/qJ0CCPxxFiDsGy50yBxOeNlJRHLdZc4mwSKuGGwT7TtKlR06qEOS', 'member');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Klíče pro tabulku `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Klíče pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pro tabulku `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
