-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 03:48 AM
-- Server version: 5.7.8-rc
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazaliste`
--

-- --------------------------------------------------------

--
-- Table structure for table `Predstava`
--

CREATE TABLE `Predstava` (
  `id` int(11) NOT NULL,
  `naslov` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `postava` text COLLATE utf8_croatian_ci NOT NULL,
  `sadrzaj` text COLLATE utf8_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `Predstava`
--

INSERT INTO `Predstava` (`id`, `naslov`, `postava`, `sadrzaj`, `slika`) VALUES
(0, 'Bljesak srebrnog zuba', 'Mate Matišić: BLJESAK SREBRNOG ZUBA, gastarbajterska kronika\r\n\r\nRedatelj: Zoran Mužić\r\nScenograf: Darko Bakliža\r\nKostimografkinja: Elvira Ulip\r\nGlazba: Šimun Matišić i Mate Matišić\r\nJezični savjetnik: Damir Lončar\r\nAsistentica scenografa: Marijana Gradečak\r\n\r\nOSOBE:\r\nStipe, gastarbajter: Damir Lončar\r\nTrusa, njegova žena: Nina Kaić Madić\r\nZlata, njihova kći: Vanda Winter\r\nAnte, gastarbajter: Davor Svedružić\r\nJoka, njegova žena: Nada Abrus\r\nMijo, gastarbajter: Ronald Žlabur\r\nMara, njegova žena: Nera Stipičević\r\nIko, njihov sin: Jan Juričić\r\nNine, Mijin otac: Vinko Kraljević\r\nMarin, gastarbajter: Saša Buneta\r\nKarlo, gostioničar: Ivica Zadro\r\nSveto, njegov sin: Filip Juričić\r\nUčitelj: Igor Mešin\r\nDoktor: Ljubo Zečević\r\nUdvarač (Zlatnozubi): Goran Malus\r\nBaba I: Vanja Ćirić\r\nBaba II: Jasna Palić Picukarić\r\nBaba III: Marija Borić\r\nGazdarica Hilda: Nada Abrus', 'Na repertoar Kazališta Aktus ovaj mjesec dolazi nam „Bljesak srebrnog zuba“,  gastarbajterska kronika Mate Matišića. Riječ je o jednom od najboljih kazališnih komada u novijoj hrvatskoj dramskoj književnosti. Ova mentalitetna komedija smještena je u mjesto Ričice pokraj Imotskog, čije stanovnike očekuju velike zajedničke i osobne promjene. Težak im je život u selu, mukotrpan je muškarcima rad u Njemačkoj, ali oni sve nedaće lome  životnom borbom i optimizmom, oporim humorom i neuništivim duhom. Sjajno napisani karakteri i prepoznatljive životne situacije sa tvrdog kamenjara zabavit će vas, ali i postaviti pred pitanje: koliko snage imamo da postanemo stvarni, autentični ljudi? Jer stanovnici ovog komada istinski izgaraju za ljubav, za domovinu, za obitelj, za prave velike vrijednosti. Samo ih život u tome stalno onemogućava. Smijeh kojim ćete ih ispratiti, sakrit će suzu za velikim vrijednostima.', 'bljesakSrebrnogZuba.jpg'),
(1, 'Mala čajana', 'Carlo Goldoni – Damir Lončar: MALA KAVANA, komedija\r\nRedatelj: Damir Lončar\r\nScenograf: Ivo Knezović\r\nKostimografkinja: Danica Dedijer\r\nAutor glazbe: Dinko Appelt\r\n\r\nOSOBE:\r\nMile Šesto, vlasnik male kavane  Damir Lončar\r\nGenček, zagrebački gospon  Željko Duvnjak\r\nStanko, trgovac suknom  Davor Svedružić\r\nKarlo, tobožnji dubrovački konte  Filip Juričić\r\nJasmina, Karlova žena  Vanja Ćirić\r\nMirna, Stankova žena  Jasna Palić Picukarić\r\nLili, plesna umjetnica  Nina Kaić Madić\r\nAlojz, vlasnik kartašnice  Vid Balog\r\nTonček, konobar kod Mileta  Ivan Magud / Robert Budak\r\nRedarstvenik, u civilu  Goran Malus', 'Nakon Pantaloneove smrti, Eugenio nasljeđuje njegovo bogatstvo i poslove, zanemaruje svoju mladu suprugu te svoju baštinu postupno gubi u Pandolfovoj kartašnici. Ridolfo, vlasnik susjedne kavane, bio je nekoć sluga njegova oca. Kao pošten čovjek, hvalevrijedne odanosti obitelji kojoj je služio, žali zbog mladićevih loših navika te ga opominje; posuđuje mu novac kojemu Eugenio ne zna podrijetlo, te “što savjetima, što prijekorima, što molbama, što uslugama” otvara oči izrođenu sinu svoga negdanjeg gazde, učinivši ga “drugim čovjekom”.\r\n\r\nTo je jednostavna fabula Kavane (La bottega del caffè), komedije građanske Venecije, napisane na toskanskom, kao i brojne druge Goldonijeve komedije; međutim, prikaz sredine nije manje dubok no što je to slučaj u onima napisanim na materinskom dijalektu. Riječ je o živahnoj slici života koji se odvijao na malim trgovima, koje su u gradu na laguni zvali campielli, gdje se susreću dvije ili tri uske uličice. Ondje se iz dućana u dućan, s prozora na prozor dobacuju i međusobno križaju dijalozi koji su se Barettiju činili barbarskima, ali koji su zapravo toliko prirodni i spontani te je dovoljno prošetati venecijanskim ulicama da bi se čulo slične. Uz Eugeniovu priču odvija se i sekundarni zaplet: žena, preodjevena u hodočasnicu, u potrazi je za svojim mužem, također poročnim kartašem i prijateljem balerine Lisaure. Mjestimice neki dijelovi slabašna zapleta podsjećaju na artificijelnu maniru Marivauxa i na profinjeni Voltaireov sarkazam.', 'malaCajana.jpg'),
(2, 'Nepolitičko vjenčanje', 'Redatelj: Borna Baletić\r\nDramaturginja: Dora Delbianco\r\nKostimografkinja: Irena Sušac\r\nScenografkinja: Tanja Lacko\r\nOblikovanje i izrada rekvizita: Miljenko Sekulić\r\nIzbor glazbe: Borna Baletić\r\nOblikovanje svjetla: Željka Fabijanić Šaravanja i Vesna Kolarec\r\nAsistentica redatelja: Lea Anastazija Fleger\r\n\r\nLica:\r\nKiki, mladić – Filip Detelić\r\nVera, djevojka – Mia Anočić-Valentić\r\nKrajšek – Ozren Grabarić\r\nGđa Krajšek – Nina Erak-Svrtan\r\nJanjić – Željko Königsknecht\r\nGđa Janjić – Elizabeta Kukić', '„Političko vjenčanje“ komedija je koja u prvi plan postavlja priču o mladom paru koji se želi vjenčati i započeti zajednički život. Preduvjet za to jest pristanak njihovih roditelja. Dogovara se večera i kreće potpuno razotkrivanje. Kroz susret i sukob te dvije obitelji dijametralno suprotnih svjetonazora gradi se zaplet ove punokrvne komedije karaktera koja ismijava svako atrofično mjesto naših brakova, obitelji i društveno-političke zajednice.', 'nepolitickoVjencanje.jpg'),
(3, 'Škrtac', 'Marin Držić: SKUP\r\nRežija i dramaturška obrada: Nina Kleflin\r\nScenograf i oblikovatelj svjetla: Osman Arslanagić\r\nKostimografkinja: Marija Šarić Ban\r\nAutor glazbe: Tomislav Babić\r\nScenski pokret: Damir Klemenić\r\nJezična savjetnica i asistentica redateljice: Srđana Šimunović\r\n\r\nOSOBE:\r\nSatir (u prologu): Goran Malus\r\nSkup, starac: Damir Lončar\r\nAndrijana, njegova kći: Vanda Winter\r\nVariva, godišnjica stara Skupova: Vanja Ćirić\r\nGruba, godišnjica mlada Dživova: Ana Magud / Srđana Šimunović (od rujna 2015.)\r\nKamilo: Ivan Čuić\r\nDobre, Kamilova mati: Sanja Marin / Mila Elegović (od studenog 2015.)\r\nZlati Kum, njen brat: Davor Svedružić\r\nDživo, prijatelj Dobrin: Goran Malus\r\nMunuo, djetić Kamilov: Slaven Španović\r\nPasimaha (Kotoranin), djetić Zlatoga Kuma: Ivan Magud\r\nDrijemalo, djetić Zlatoga Kuma: Adam Končić\r\nPuhalo: Dejan Jakovljević\r\nOmakalo: Emil Kuzminski', 'Iako je ovaj majstorski portret škrca nastao u davnom šesnaestom stoljeću, prije Shakespearea ili Molierea, on nam progovara lijepim dubrovačkim jezikom o temama koje se nisu nimalo izmijenile do današnjih dana. Držić izruguje lakomost, gramzivost i želju za stjecanjem, on raskrinkava mračnu moć novca koji kvari ljude i potiče u njima njihove najgore osobine.\r\n\r\nAli ova komedija nije mračna. U njoj ostaje mjesta za vedrinu, za radost igre. I ne samo zato jer naš mudri Dum Marin prepusti jednom dosjetljivom mladom sluzi da nadmudri škrtog starca, već i zato što je svojoj komediji sačinio završetak koji slavi ljubav i radost života. Ljubav mladih pobjeđuje sebičnost starih, optimizam budućnosti poražava prošlost, a vjera i poštenje odnose trijumf nad ispraznim bogatstvom.\r\n\r\nBar je tako na našoj pozornici, u novoj predstavi Skup koja je tu da vas inspirira i pozove: odbacite i ono malo novca što imate i budite sretni!', 'skrtac.jpg'),
(4, 'Sprinteri trče počasni krug', 'Redateljica: Iva MIlošević\r\nDramaturginja i prijevod teksta: Dora Delbianco\r\nScenograf o oblikovatelj svjetla: Gorčin Stojanović\r\nKostimograf: Leo Kulaš\r\nAsistentica kostimografa: Anamarija Filipović Srhoj\r\nSuradnica za ples: Larisa Navojec\r\nIzbor glazbe: Iva Milošević\r\n\r\nUloge:\r\nMaksimilijan Topalović (126) - Vilim Matula\r\nAksentije Topalović (102) - Elizabeta Kukić\r\nMilutin Topalović (79) - Nikša Butijer\r\nLaki Topalović (44) - Hrvoje Kečkeš\r\nMirko Topalović (24) - Luka Petrušić\r\nKristina - Maja Posavec\r\nĐenka Đavo - Tarik Filipović\r\nBili Piton - Filip Detelić\r\nOlja - Mia Anočić - Valentić\r\nPregažen čovjek - Ivo Đuričić', 'Već pri samom spomenu naslova kultne komedije javljaju se brojne asocijacije i u sjećanje nam naviru slike, glumci i citati iz jednog od najgledanijih filmova ovih prostora. Topalovići, pogrebno poduzeće, likovi stari 150 godina, čitanje oporuke i mnogi slični motivi pronašli su svoje mjesto u općoj kulturnoj svijesti našeg vremena.\r\n\r\nMožda je manje poznata činjenica da je filmu prethodila drama koju je Kovačević napisao na trećoj godini studija dramaturgije (\'72.). Ona se uskoro zatim postavlja u Ateljeu 212 u režiji Ljubomira Draškića, a nepunih deset godina kasnije Slobodan Šijan prema njoj režira legendarni film. Sve ostalo je povijest.\r\n\r\nGodine prolaze, a popularnost \'Maratonaca\' ne opada pa ovu priča kontinuirano stječe nove obožavatelje. Izvrsni dijalozi, fantastični likovi i svakako začudan zaplet u kojem se ismijava smrt i lažni moral. Priča je to o \'najstarijoj balkanskoj obitelji\', toliko staroj da joj ni smrt ne može ništa - po riječima samog autora.', 'sprinteriTrcePocasniKrug.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Predstava_en`
--

CREATE TABLE `Predstava_en` (
  `id` int(11) NOT NULL,
  `naslov` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `postava` text COLLATE utf8_croatian_ci NOT NULL,
  `sadrzaj` text COLLATE utf8_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `Predstava_en`
--

INSERT INTO `Predstava_en` (`id`, `naslov`, `postava`, `sadrzaj`, `slika`) VALUES
(0, 'Flash of silver tooth', 'Mate Matišić: Flash of silver tooth, Chronicle\r\nZoran Mužić\r\nSet designer: Darko Bakliža\r\nCostume: Elvira Ulip\r\nMusic: Simon Matišić and Mate Matišić\r\nLanguage advisor: Damir Loncar\r\nAssistant set designer Marijana Gradečak\r\n\r\nPEOPLE:\r\nStipe, a guest worker Damir Loncar\r\nTrusa, his wife Nina Kaić Madić\r\nGold, their daughter Vanda Winter\r\nAnthony, a guest worker Davor Svedružić\r\nCrying, his wife Nada Abrus\r\nMijo, a guest worker Ronald Zlabur\r\nMara, his wife Nera Stipicevic\r\nIko, their son: Jan Juricic\r\nNina, Mia\'s father: Vinko Prince\r\nMarin, a guest worker Sasa Buneta\r\nCharles, innkeeper: Ivica Zadro\r\nHoly, his son Philip Juricic\r\nTeacher: Igor Mešin\r\nDoctor: Ljubo Zecevic\r\nSuitor (gold-): Goran Malus\r\nBaba I Vanja Ciric\r\nBaba II: Jasna Palic Picukarić\r\nBaba III: Marija Boric\r\nMistress Hilda: Nada Abrus', 'From the Aktus Theatre this month comes the "Flash of silver teeth", Chronicle of Mate Matišić. This is one of the best plays in the recent Croatian dramatic literature. This comedy takes place in place Ričice near Imotski, whose residents are expecting large common and personal changes. Hard life in the village, the men painstaking work in Germany, but they all go through life with optimism, humor and indestructible spirit. Great written characters and recognizable life situations will entertain you, but also set up the question of how much power we have to become a real, authentic people? Residents of this place truly burn for love, for their country, for family, for real great value. Only life is constantly disabling them. Laughter, which will follow them, will hide a tear for large values.', 'bljesakSrebrnogZuba.jpg'),
(1, 'Small teahouse', 'Carlo Goldoni - Damir Loncar : SMALL CAFE , comedy\r\nDirector: Damir Loncar\r\nSet Design : Ivo Knezovic\r\nCostumes: Danica Dedijer\r\nMusic: Dinko Appelt\r\n\r\nPEOPLE :\r\nSix Mile , owner of a small cafe Damir Loncar\r\nGenček , Zagreb mister Zeljko Duvnjak\r\nStanko , trader cloth Davor Svedružić\r\nCharles , seeming Dubrovnik accounts Philip Juricic\r\nJasmina , Charles \'s wife Vanja Ciric\r\nQuiet , Stankova wife Jasna Palic Picukarić\r\nLili , dance artist Nina Kaić Madić\r\nAlojz , owner kartašnice Vid Balog\r\nTonček , a waiter at Mile Ivan Magud / Robert Budak\r\nOfficer , plainclothes Goran Malus', 'It\'s a simple plot Cafe (La Bottega del caffè), comedy bourgeois Venice, written in Tuscan, as well as numerous other Goldoni comedy; however, see the middle of no less profound than is the case in those written in their native dialect. It is a lively picture of life that took place in the small squares that are in the lagoon called Campiello, where they meet two or three narrow streets. There, from the store to shop, the window to the window and call out to each other intersect dialogues that were Baretto seem barbaric, but who are actually so natural and spontaneous and it is enough to walk the streets of Venice to hear similar. With Eugeniovu story takes place in a secondary plot: a woman, dressed as a pilgrim, looking for her husband, also a wedding card player and friend ballerinas Lisaura. Here and there some parts of the weak plot reminiscent of the artificial manner Marivaux and the sophisticated Voltaire\'s sarcasm.\r\n', 'malaCajana.jpg'),
(2, 'Nonpolitical wedding', 'Director: Borna Baletić\r\nDramaturgy : Dora Delbianco\r\nCostumes: Irena Susac\r\nSet Design : Tanja Lacko\r\nDesigning and manufacturing of equipment : Miljenko Sekulic\r\nMusic: Borna Baletić\r\nLighting design : Zeljko Fabijanić Šaravanja and Vesna Kolarec\r\nAssistant Director : Lea Anastasia Flefer\r\n\r\ncheeks :\r\nKiki , a young man - Philip Detelić\r\nVera , the girl - Mia Anočić - Valentic\r\nKrajšek - Ozren Grabarić\r\nMs. Krajšek - Nina Erak - Svrtan\r\nJanjic - Zeljko Königsknecht\r\nMs. Janjic - Elizabeta Kukic', '"Political marriage " is a comedy that to the fore a story about a young couple who wants to get married and start a life together . The prerequisite for this is the consent of their parents . Arranged dinner and moving full disclosure . Through the encounter and clash of these two families diametrically opposed world views is built plot of thoroughbred character comedy that pokes fun at each place atrophic our marriages , families and socio- political community .', 'nepolitickoVjencanje.jpg'),
(3, 'Miser', 'Marin Držić : SKUP\r\nDirected and dramatic treatment: Nina Kleflin\r\nSet and light design : Osman Arslanagić\r\nCostume designer : Marija Šarić Ban\r\nMusic: Tomislav Babic\r\nStage movement : Damir Klemenić\r\nLanguage Advisor and assistant director : Srdjan Simunovic\r\n\r\nPEOPLE :\r\nSatir ( in the prologue ) : Goran Malus\r\nExpensive , old man : Damir Loncar\r\nAndrijana , his daughter Vanda Winter\r\nStews , anniversaries old Meeting: Vanja Ciric\r\nRough , anniversary young SIPO Ana Magud / Srdjan Simunovic ( since September 2015 )\r\nKamilo : John Čuić\r\nGood , Kamil\'s mother Sanja Marin / Mila Elegović ( from November 2015 )\r\nGolden Godfather , her brother Davor Svedružić\r\nDživo , a friend of Dobrin : Goran Malus\r\nMoon, boy to Kamilov : Slaven Spanovic\r\nPasimaha ( Kotoranin ) boy to Zlatoga Kuma : John Magud\r\nDrijemalo , boy to Zlatoga Kuma : Adam Končić\r\nBlower : Dejan Jakovljevic\r\nOmakau Emil Kuzminski', 'Although this masterful portrait of a miser originated in ancient sixteenth century before Shakespeare or Moliere , he speaks our language beautiful Dubrovnik on topics that are not at all changed to the present day . Držić mocks greed , greed and the desire to acquire , he exposes the dark power of money that corrupts people and encourages them to their worst traits .\r\n\r\nBut this comedy is not grim . It remains a place of serenity , for the joy of the game . And not just because our wise Father Marin leaving one ingenious young servant to outwit avaricious old man , but also because its comedy made ​​by the end of celebrating the love and joy of life . Love overcomes selfishness young age , optimistic future defeats the past , and faith and integrity related triumph of vain riches .\r\n\r\nThe bar is also on our stage , the new play set that is there to inspire and invite : discard, and what little money you have and be happy !', 'skrtac.jpg'),
(4, 'Sprinters run lap of honor', 'Dusan Kovacevic : The Marathon\r\nDirected by Iva Milosevic\r\nDramaturg and translate text : Dora Delbianco\r\nSet designer of lighting designer: Gorcin Stojanovic\r\nCostumes: Leo Kulas\r\nAssistant costume designer : Anamaria Filipovic Srhoj\r\nAssociate dancing Larissa Navojec\r\nMusic: Iva Milosevic\r\n\r\nCast :\r\nMaximilian Topalovic ( 126 ) - William Matula\r\nAksentije Topalovic ( 102 ) - Elizabeth Kukic\r\nMilutin Topalovic ( 79 ) - Niksa Butijer\r\nLaki Topalovic ( 44 ) - Hrvoje Keckes\r\nMirko Topalovic ( 24 ) - Luka Petrusic\r\nKristina - Maja Posavec\r\nDenka Devil - Tarik Filipovic\r\nThey Piton - Filip Detelić\r\nOils - Mia Anočić - Valentic\r\nTrampled man - Ivo Djuricic', 'Already at the very mention of the title of the cult comedy abound associations and memories of us coming up pictures, actors and quotes from one of the most popular films of the region. Topalovići, funeral home, the figures 150 years old, read the will and many similar motifs have found their place in the general cultural consciousness of our time.\r\n\r\nPerhaps less well-known fact that the film drama that preceded Kovacevic wrote in the third year of dramaturgy (\'72.). It was soon followed by sets in Studio 212 by Ljubomir Draškić, and less than ten years later, Slobodan Sijan directed towards her legendary movie. The rest is history.\r\n\r\nYears pass, and the popularity of \'marathon runner\' is not declining but this story continuously acquire new fans. Excellent dialogues, fantastic characters and certainly wondrous plot in which mocks death and false morality. It is a story about the \'oldest Balkan family\', so old that even death can not do anything - in the words of the author.', 'sprinteriTrcePocasniKrug.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Predstava`
--
ALTER TABLE `Predstava`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Predstava_en`
--
ALTER TABLE `Predstava_en`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Predstava`
--
ALTER TABLE `Predstava`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Predstava_en`
--
ALTER TABLE `Predstava_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
