-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 04, 2023 alle 23:49
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_progetto_finale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `affituario`
--

CREATE TABLE `affituario` (
  `Cod_Fiscale` varchar(16) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `Cognome` varchar(45) DEFAULT NULL,
  `Data_nascita` date DEFAULT NULL,
  `Id_Prenotazione` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `affituario`
--

INSERT INTO `affituario` (`Cod_Fiscale`, `Nome`, `Cognome`, `Data_nascita`, `Id_Prenotazione`, `Email`, `Telefono`, `Pass`) VALUES
('BRRFRC04R22D612G', ' Federico', 'Borrometi', '2004-10-03', 39, 'federico22giulia@gmail.com', '3201932041', 'federicoborrometi'),
('VSQGMF22MPO612O', ' Giacomo', 'vasquez', '2003-08-22', 49, ' giacomo@gmail.com', '23445634534', 'giacomo');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `idprenotazione` int(11) NOT NULL,
  `ChekIn` date DEFAULT NULL,
  `ChekOut` date DEFAULT NULL,
  `Adulti` int(11) NOT NULL,
  `Bamini` int(11) DEFAULT NULL,
  `Animali_Domestici` int(11) DEFAULT NULL,
  `IdStruttura` int(11) DEFAULT NULL,
  `NumTelefono` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`idprenotazione`, `ChekIn`, `ChekOut`, `Adulti`, `Bamini`, `Animali_Domestici`, `IdStruttura`, `NumTelefono`) VALUES
(39, '2023-05-03', '2023-05-05', 2, 0, 0, 1, '3201932041'),
(42, '2023-05-03', '2023-05-05', 2, 0, 0, 4, ''),
(43, '2023-05-04', '2023-05-05', 2, 1, 0, 4, '3201932041'),
(51, '2023-05-03', '2023-05-05', 3, 0, 0, 1, ''),
(53, '2023-05-02', '2023-05-05', 1, 0, 0, 4, ''),
(74, '2023-05-03', '2023-05-05', 2, 0, 0, 4, ''),
(95, '2023-05-02', '2023-05-04', 3, 0, 0, 4, '3201932041');

-- --------------------------------------------------------

--
-- Struttura della tabella `struttura`
--

CREATE TABLE `struttura` (
  `idStruttura` int(11) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  `Locazione` varchar(45) DEFAULT NULL,
  `Stanze` int(11) DEFAULT NULL,
  `Bagni` int(11) DEFAULT NULL,
  `PrezzoStruttura` decimal(3,0) DEFAULT NULL,
  `imgPrincipale` varchar(255) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `struttura`
--

INSERT INTO `struttura` (`idStruttura`, `Nome`, `Locazione`, `Stanze`, `Bagni`, `PrezzoStruttura`, `imgPrincipale`, `info`) VALUES
(1, 'Moreto', 'Toscana', 8, 4, '210', 'https://a0.muscache.com/im/pictures/65661250/4a9f40ff_original.jpg?im_w=1200', 'Siete un gruppo di amici, volete passare una vacanza indimenticabile, a 10 minuti dal mare, in collina con parco di un ettaro e una villa da 400mq, vi diamo tutte le possibili soluzioni, la struttura è suddivisibile in 4 appartamenti comunicanti.'),
(2, 'Villa San Giorgio', 'Toscana', 7, 2, '140', 'https://a0.muscache.com/im/pictures/miso/Hosting-9101107/original/0c581261-c3f4-416c-a73b-f39f8954b042.jpeg?im_w=1200', 'La Villa, proprietà dell’Agriturismo S. Giorgio, è una tipica casa in pietra, restaurata a regola d’arte pur mantenendo i suoi tratti caratteristici toscani. La località è quella di Montemurlo, in provincia di Prato, piccolo paese ad appena 10 minuti dalla casa. La vista è a dir poco spettacolare. Ogni stanza della casa da’ sul panorama, che consiste nel piccolo giardino proprio di fronte la casa, l’oliveto sottostante, le colline in lontananza e infine il cielo aperto.'),
(3, 'Locanda La Rotonda', 'Toscana', 3, 1, '120', 'https://a0.muscache.com/im/pictures/baacaf43-5926-4da0-b094-d4d604c36b75.jpg?im_w=1200', 'La Locanda di Casalmustia è situata nel cuore della Toscana nel piccolo borgo medievale di Castelmuzio, ricco di storia e tradizioni e circondato dalle bellezze naturali e artistiche del luogo. La Locanda dispone di sette camere e un ristorante.'),
(4, 'I Vivai', 'Lazio', 4, 2, '200', 'https://a0.muscache.com/im/pictures/9fb5f1b0-4ad7-4d25-9536-9f8303a3bb8f.jpg?im_w=1200', 'Benvenuti al cottage \" Les Ganades\", situato a Jollain-Merlin. Una dependance rinnovata e moderna all\'interno dei vivai di Lesdain vi permetterà di avere un momento di tranquillità godendo delle diverse attività della regione del Brunehaut.'),
(5, 'Occidental Aran Park', 'Lazio', 2, 1, '140', 'https://a0.muscache.com/im/pictures/73c09c0a-2871-4196-990f-c5063c6f2dff.jpg?im_w=1200', 'Da un complesso agricolo originario di fine ‘800, circondato da alberi di ulivo secolari, nasce il Residence Sant’Alessandro.'),
(6, 'Residence Sant\'Alessandro', 'Lazio', 12, 6, '111', 'https://a0.muscache.com/im/pictures/miso/Hosting-771518085627603442/original/91009acf-0201-42cd-8e58-bef6cbd362ab.jpeg?im_w=1200', 'Avrete a disposizione un monolocale di circa 25mq con un letto matrimoniale, un divano letto, angolo cottura e bagno con doccia. Si trova all\'interno del nostro giardino. Ci troviamo a 30 minuti in macchina da Roma e 15 minuti dal mare (Fregene, Maccarese). A 2 minuti a piedi si trova il supermercato Conad.'),
(18, 'Le Cabanon Guest House.', 'Sicilia', 4, 1, '60', 'https://a0.muscache.com/im/pictures/74007ced-1580-4fd3-9250-13253d8bcab8.jpg?im_w=1440', 'Le Cabanon, immerso nelle campagne della Valle dell#Anapo tra agrumeti e uliveti, è la dependance della Villa padronale, può ospitare fino a quattro persone.'),
(19, 'Il Lazio', 'Lazio', 4, 2, '110', 'https://www.prefabbricatisulweb.it/immagini/aziende/nicoli-legnami/4043.jpg', 'dfsdffsdfsadfsdf'),
(20, 'Federico', 'Sicilia', 4, 2, '110', 'https://a0.muscache.com/im/pictures/74007ced-1580-4fd3-9250-13253d8bcab8.jpg?im_w=1440', 'asdsadasd'),
(21, 'Federico', 'Sicilia', 4, 2, '110', 'https://a0.muscache.com/im/pictures/74007ced-1580-4fd3-9250-13253d8bcab8.jpg?im_w=1440', 'asdsadasd'),
(22, 'Federico', 'Sicilia', 4, 2, '110', 'https://a0.muscache.com/im/pictures/74007ced-1580-4fd3-9250-13253d8bcab8.jpg?im_w=1440', 'asdsadasd');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `affituario`
--
ALTER TABLE `affituario`
  ADD PRIMARY KEY (`Cod_Fiscale`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`idprenotazione`);

--
-- Indici per le tabelle `struttura`
--
ALTER TABLE `struttura`
  ADD PRIMARY KEY (`idStruttura`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `idprenotazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT per la tabella `struttura`
--
ALTER TABLE `struttura`
  MODIFY `idStruttura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
