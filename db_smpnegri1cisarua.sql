-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2020 pada 22.35
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smpnegri1cisarua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_administration`
--

CREATE TABLE `tb_administration` (
  `id_administration` varchar(255) NOT NULL,
  `name_administration` varchar(255) NOT NULL,
  `image_administration` varchar(255) NOT NULL,
  `nip_administration` varchar(255) NOT NULL,
  `nuptk_administration` varchar(255) NOT NULL,
  `ttl_administration` varchar(255) NOT NULL,
  `education_administration` varchar(255) NOT NULL,
  `status_administration` varchar(255) NOT NULL,
  `address_administration` varchar(255) NOT NULL,
  `time_administration` varchar(255) NOT NULL,
  `slug_administration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_administration`
--

INSERT INTO `tb_administration` (`id_administration`, `name_administration`, `image_administration`, `nip_administration`, `nuptk_administration`, `ttl_administration`, `education_administration`, `status_administration`, `address_administration`, `time_administration`, `slug_administration`) VALUES
('5edb3275eea57', 'Empong, S.E', '1591423605100_2873_resize.jpg', '-', '-', '-', '-', '-', '-', '13:06, 06 Jun 2020', 'empong-se'),
('5edb328662aab', ' Nani, S.Pd', '1591423622100_2872_resize.jpg', '-', '-', '-', '-', '-', '-', '13:07, 06 Jun 2020', 'nani-spd'),
('5edb329d99516', 'Nani, S.Pd', '1591423645caryati.jpg', '-', '-', '-', '-', '-', '-', '13:07, 06 Jun 2020', 'nani-spd'),
('5edb32c0f40f8', 'Eutik Siti Fatonah', '1591423680Etik.jpg', '-', '-', '-', '-', '-', '-', '13:08, 06 Jun 2020', 'eutik-siti-fatonah'),
('5edb32d97c763', 'Rosadi', '1591423705rosadi.jpg', '-', '-', '-', '-', '-', '-', '13:08, 06 Jun 2020', 'rosadi'),
('5edb32ed86ff0', 'Unus', '1591423725Unus.jpg', '-', '-', '-', '-', '-', '-', '13:08, 06 Jun 2020', 'unus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_articel`
--

CREATE TABLE `tb_articel` (
  `id_post` varchar(255) NOT NULL,
  `post_time` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_main` varchar(10000) NOT NULL,
  `post_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_articel`
--

INSERT INTO `tb_articel` (`id_post`, `post_time`, `post_image`, `post_title`, `post_main`, `post_slug`) VALUES
('5edb71c81afb5', '17:36, 06 Jun 2020', '1591439816DSC_3123f.jpg', 'BANGKIT KEMBALI.......SETELAH SEKIAN LAMA ', '<p> Assalamu&#39;alaikum warrahmatullahiwabarrakatuh....!</p>\r\n\r\n<p>Wilujeng tepang deui sareng pangasuh Blogna SMPN 1 Cisarua Sumedang...... Langkung tipayun Simkuring neda sihampunten wirehna tos tamelar .....lurjen ......ngantep rohangan ieu, manawiteh bade aya nu nyuluran eh...da panginten pada-pada sibuk, dugi kapopohokeun. </p>\r\n\r\n<p>Sakali deui Simkuring sareng rengrengan nyuhunkeun dihapunten tina sagala kalepatan sareng kaluluputan nu tos dipilampah kusimkuring sadaya. </p>\r\n\r\n<p> </p>\r\n\r\n<p>      Warga SMPN 1 Cisarua, hayu....ah urang nguniang deui.....tos lawas geuning urang teh ngadon.....ngadedempes.....teu aya nu di beritakeun....naon..-naon. Sok ah urang.... tiayeuna urang babarengan deui ngainformasikeun deui kegiatan nuaya di SMPN 1 Cisarua mudah-mudahan bae aya manfaat sareng paedahna kaurang sadaya. Amiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiin........!</p>\r\n\r\n<p> </p>\r\n\r\n<p>Tah ieu salahsahiji kegiatan nu aya di SMP Necis teh....: </p>\r\n\r\n<p>Lepas Sambut Pupuhu dina taun ajaran 2015/2016</p>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Simbolik serah terima kalungguhan\" src=\"/smpnegri/assets/plugin/kcfinder/upload/files/DSC_3123f.jpg\" xss=removed></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n', 'bangkit-kembalisetelah-sekian-lama'),
('5edb72038e171', '17:37, 06 Jun 2020', '1591439943P1010179.JPG', 'PENSI SISWA SMPN 1 CISARUA', '<p>  Kegiatan yang ditunggu-tunggu sekaligus bikin dagdigdug aja......!!!. </p>\r\n\r\n<p>Kata siapa.....gitu......? Kata yang merasakan aja........bukan begitu.....Bro! Tau deh ......yang jelas bisa macem-macem  gimana yang merasakan aja kaliiiii....hehe...hehehe.!</p>\r\n\r\n<p>       YUK......Kita cari tahu bagaimana serunya yang tampil diajang......unjuk kebolehan dalam berkreasi seni.....? Sobat-sobat sesama ANAK INDONESIA, apakah sobat tahu apa sih efek samping dari kegiatan PENSI ini? Jawab : ..........., ..........., ............( Jawab yang jujur). Nah kalau positifnya apa ? Jawab  : .............. ,................., .................., ........................... (Jawab yang jujur banget). Trimakasih sobat telah menjawab dengan sejujurnya, semoga jawaban tersebut menjadi pertimbangan untuk masa yang akan datang dengan  bijaksana dan lebih baik  lagi.</p>\r\n\r\n<p>       Mungkin perlu disampaikan disini sebagai bahan renungan Sobat......:</p>\r\n\r\n<p>- Dengan kegiatan PENSI siswa memiliki pengalaman pentas seni yang sesungguhnya bukan hanya teori  <br>\r\n    saja.</p>\r\n\r\n<p>- Dengan kegiatan PENSI pada diri siswa akan tumbuh sikap percaya diri dalam berkesenian, sebagai<br>\r\n    modal dasar untuk pengembangan minat dan bakat dalam berkarier untuk menjadi seorang pekerja seni.</p>\r\n\r\n<p>- Dengan kegiatan PENSI diharapkan menumbuhkan sikap menghargai karya orang lain, mencintai budaya</p>\r\n\r\n<p>    sendiri, dll.</p>\r\n\r\n<p>- Selain itu semua siswa yang tampil pada kegiatan tersebut....adalah siswa-siswa yang mempunyai nilai ++ </p>\r\n\r\n<p>    +, siswa yang berusaha ingin menjadi kembanggaan Ortu, sekolah, keluarga dan masyarakat sekitar.</p>\r\n\r\n<p>- Terakhir........tentu saja ........mendapat nilai PENTAS SENI.dari guru Seni Budaya, yang tentu aja Tidak </p>\r\n\r\n<p>    akan bisa didapatkan oleh siswa yang tidak mengikuti PENSI tersebut. </p>\r\n\r\n<p> </p>\r\n\r\n<p>     Nah itu ...diantaranya yang harus dicamkan dibenak-benakmu.... Bukan gitu Bro......!</p>\r\n\r\n<p> </p>\r\n\r\n<p>Supaya kagak tegang inilah hasil jepretan yang bisa di muat  disini:<br>\r\n </p>\r\n\r\n<p><a href=\"http://4.bp.blogspot.com/-DuewrQhRp08/VXHgYe5MumI/AAAAAAAAA64/ttdpVS580LE/s1600/P1010179.JPG\"><img src=\"http://4.bp.blogspot.com/-DuewrQhRp08/VXHgYe5MumI/AAAAAAAAA64/ttdpVS580LE/s320/P1010179.JPG\"></a></p>\r\n\r\n<p><br>\r\n<br>\r\n<a href=\"http://3.bp.blogspot.com/-FdnxVnAeF5c/VXHeUdEibCI/AAAAAAAAA6s/CM3RDGkb2iw/s1600/P1010160.JPG\"><img src=\"http://3.bp.blogspot.com/-FdnxVnAeF5c/VXHeUdEibCI/AAAAAAAAA6s/CM3RDGkb2iw/s320/P1010160.JPG\"></a><br>\r\n<br>\r\n<br>\r\n </p>\r\n\r\n<p><a href=\"http://1.bp.blogspot.com/-hcQUAaQobDc/VXHhujYcWLI/AAAAAAAAA7I/CqxhX-AWSK8/s1600/P1010188.JPG\"><img src=\"http://1.bp.blogspot.com/-hcQUAaQobDc/VXHhujYcWLI/AAAAAAAAA7I/CqxhX-AWSK8/s320/P1010188.JPG\"></a><a href=\"http://2.bp.blogspot.com/-Yj61hUVhlug/VXHgse6sibI/AAAAAAAAA7A/yiK_OHfnY10/s1600/P1010181.JPG\"><img src=\"http://2.bp.blogspot.com/-Yj61hUVhlug/VXHgse6sibI/AAAAAAAAA7A/yiK_OHfnY10/s320/P1010181.JPG\"></a></p>\r\n\r\n<p> </p>\r\n\r\n<p><a href=\"http://4.bp.blogspot.com/-sBPLndaPfTw/VXHh52X4nQI/AAAAAAAAA7Q/xgFcvTTjfRE/s1600/P1010197.JPG\"><img src=\"http://4.bp.blogspot.com/-sBPLndaPfTw/VXHh52X4nQI/AAAAAAAAA7Q/xgFcvTTjfRE/s320/P1010197.JPG\"></a></p>\r\n\r\n<p><br>\r\n<br>\r\n<br>\r\n<br>\r\n<a href=\"http://3.bp.blogspot.com/-w965YzxSkiI/VXH1WtNQ3KI/AAAAAAAAA7k/6yGlj3ovGxQ/s1600/P1010102.JPG\"><img src=\"http://3.bp.blogspot.com/-w965YzxSkiI/VXH1WtNQ3KI/AAAAAAAAA7k/6yGlj3ovGxQ/s320/P1010102.JPG\"></a><br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n <br>\r\n<br>\r\nDi ambil dari dokumen pengasuh Blog.<br>\r\nKegiatan PENSI 2015 pada hari Sabtu, Tgl 23 Mei 2015 tempat dipanggung terbuka SMPN1 Cisarua Sumedang. Semoga sukses selalu ...amiin ( dari Pengasuh )<br>\r\n<br>\r\n </p>\r\n\r\n<p>Si Iyan bawa cendrawasih, Buah moka dibagi empat.</p>\r\n\r\n<p> Sekian dan Trimakasih, semoga bermanfaat.</p>\r\n', 'pensi-siswa-smpn-1-cisarua'),
('5edb72a5874b8', '17:40, 06 Jun 2020', '159144003720160408_102352.jpg', 'PENSI SMP NECIS 2015/16', '<p>ASSLAMU&#39;ALAIKUM WRBB.</p>\r\n\r\n<p>SAMPURASUN......!</p>\r\n\r\n<p> </p>\r\n\r\n<p>      Warga SMPN 1 Cisarua......PENSI teh kapanjangan tina Pentas Seni.... nungaranna pentas meren sagala rupana oge, diantarana disegi materi, ekspresi, rejeng properti meren kudu diperhatikeun pisan... Jadi singketnamah meren teu bisa ngamomoreken salah sahiji eta nutilu poko. Mun katilu poko eta kasubadanan mereun insaAlloh ..... pentas seni eta moal nguciwakeun. Memang dina empronamah katilu poko etateh mereun bisa disubadanan mun aya biayaya nu nyukupan sapuratina.</p>\r\n\r\n<p>       Ari PENSI disakolamah nudi kaharepkeunteh dina segi pendidikanana..... seni lain saukur seni murni komo jeng nepi ka nyiptakeun senimanmah .....naha kitu da ari SMP mah mereun sakola umum, nu tangtuna oge siswanateh aya anu berminat aya oge nu teu minat kana seni....Jadi dumasar kana ieu tangtu bae pihak guru mata palajaran teu bisa maksakeun kasiswana. Paling oge nepi ka siswa boga pangalaman berkesenian, lian ti eta siswa nu berminatmah meren tangtu hiji dasar keur ngembangkeun potensina keur kahareupna.</p>\r\n\r\n<p>       Sakituwenya............soal PENSImah......Warga sakumna nu luha-loho kaieu rohangan pasti panasaran.... mana meureun kagiatanana.</p>\r\n\r\n<p>Sok .....atuh der......................! Geura apresiasi......!<br>\r\n </p>\r\n\r\n<p> Cape geuning tos Pensi teh, babakunamah panas kacida......</p>\r\n\r\n<p>Ngaso heula ah sareng Bapa Kepsek, bari ningal nusanes giliran pentas.</p>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-g2yk7IQM6rU/V2C7qVeSNdI/AAAAAAAAA-w/T6ydfVAwxLk2L2joj6QfTRo1VMznn-j5QCLcB/s1600/20160408_090057.jpg\"><img src=\"https://3.bp.blogspot.com/-g2yk7IQM6rU/V2C7qVeSNdI/AAAAAAAAA-w/T6ydfVAwxLk2L2joj6QfTRo1VMznn-j5QCLcB/s320/20160408_090057.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> Nu giliran Pentas....</p>\r\n\r\n<p><a href=\"https://2.bp.blogspot.com/-jgfFAfZzQZo/V2C77wSTh0I/AAAAAAAAA-4/-r6I94OvOh4WJM-bbA_Usac-GIj0NFcnACLcB/s1600/20160408_095916.jpg\"><img src=\"https://2.bp.blogspot.com/-jgfFAfZzQZo/V2C77wSTh0I/AAAAAAAAA-4/-r6I94OvOh4WJM-bbA_Usac-GIj0NFcnACLcB/s320/20160408_095916.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Nuju dipoto heula....</p>\r\n\r\n<p><a href=\"https://4.bp.blogspot.com/-k3OW1a8S0yc/V2C8URQv6xI/AAAAAAAAA_A/GhxFsRa5HR8pcH9Lh0--pFngkROH88UWwCLcB/s1600/20160408_104705.jpg\"><img src=\"https://4.bp.blogspot.com/-k3OW1a8S0yc/V2C8URQv6xI/AAAAAAAAA_A/GhxFsRa5HR8pcH9Lh0--pFngkROH88UWwCLcB/s320/20160408_104705.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p><a href=\"https://2.bp.blogspot.com/-1OF8m82Jt-w/V2C_j3ReWsI/AAAAAAAAA_U/iJcUuEIZaRAYhycWxyXfkrtvn_den1S9ACLcB/s1600/20160408_104737.jpg\"><img src=\"https://2.bp.blogspot.com/-1OF8m82Jt-w/V2C_j3ReWsI/AAAAAAAAA_U/iJcUuEIZaRAYhycWxyXfkrtvn_den1S9ACLcB/s320/20160408_104737.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Nu Pentas deui...</p>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-bQqyRF7ONes/V2DADEymCwI/AAAAAAAAA_k/9fwI4D1JLMEUjuajfWwbegmIkJNVY2vfQCLcB/s1600/20160408_101904.jpg\"><img src=\"https://3.bp.blogspot.com/-bQqyRF7ONes/V2DADEymCwI/AAAAAAAAA_k/9fwI4D1JLMEUjuajfWwbegmIkJNVY2vfQCLcB/s320/20160408_101904.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-HGTcJYG5gOs/V2DAFT4HMKI/AAAAAAAAA_s/ciFpl74gUVME2nCXK9OD_pXHxiYOtOfbgCLcB/s1600/20160408_103154.jpg\"><img src=\"https://3.bp.blogspot.com/-HGTcJYG5gOs/V2DAFT4HMKI/AAAAAAAAA_s/ciFpl74gUVME2nCXK9OD_pXHxiYOtOfbgCLcB/s320/20160408_103154.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Diselang heula nuhoyong di poto deui</p>\r\n\r\n<p>.</p>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-K-FjYErNS-0/V2DACPayI0I/AAAAAAAAA_c/4kdE2iJlxAUiRKuUQzGvD1nkzKijKNYLwCLcB/s1600/20160408_104554.jpg\"><img src=\"https://3.bp.blogspot.com/-K-FjYErNS-0/V2DACPayI0I/AAAAAAAAA_c/4kdE2iJlxAUiRKuUQzGvD1nkzKijKNYLwCLcB/s320/20160408_104554.jpg\" xss=removed></a></p>\r\n\r\n<p><a href=\"https://3.bp.blogspot.com/-1ZExhb5fqgc/V2DA04VgGfI/AAAAAAAAA_4/Vzo6CV7deGIPeEe7jkZn0hLhdWVbjEokACLcB/s1600/20160408_092245.jpg\"><img src=\"https://3.bp.blogspot.com/-1ZExhb5fqgc/V2DA04VgGfI/AAAAAAAAA_4/Vzo6CV7deGIPeEe7jkZn0hLhdWVbjEokACLcB/s320/20160408_092245.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Nu  uji nyali jeun oray....</p>\r\n\r\n<p><a href=\"https://4.bp.blogspot.com/-CzjLIf7gP6c/V2DEFkS82UI/AAAAAAAABAE/bseixquvlsQd6xPsnE1RP2Sgn4lVg7C0gCLcB/s1600/20160514_092031.jpg\"><img src=\"https://4.bp.blogspot.com/-CzjLIf7gP6c/V2DEFkS82UI/AAAAAAAABAE/bseixquvlsQd6xPsnE1RP2Sgn4lVg7C0gCLcB/s320/20160514_092031.jpg\" xss=removed> </a></p>\r\n\r\n<p><a href=\"https://2.bp.blogspot.com/-Mj3eWRWvjwo/V2DcnQ5kV_I/AAAAAAAABAg/X1AbXc2ZXP0VjsOuGS7LtArNvf1jNqQNgCLcB/s1600/20160408_084237.jpg\"><img src=\"https://2.bp.blogspot.com/-Mj3eWRWvjwo/V2DcnQ5kV_I/AAAAAAAABAg/X1AbXc2ZXP0VjsOuGS7LtArNvf1jNqQNgCLcB/s320/20160408_084237.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Nepangkeun sareng  wanoja...nu janten gitaris</p>\r\n\r\n<p><a href=\"https://4.bp.blogspot.com/-G8dPtQyuTJY/V2DH95A60SI/AAAAAAAABAQ/IqHkZBbDvgUEGhsWE0__jTV10BuxQ_JewCLcB/s1600/20160408_102352.jpg\"><img src=\"https://4.bp.blogspot.com/-G8dPtQyuTJY/V2DH95A60SI/AAAAAAAABAQ/IqHkZBbDvgUEGhsWE0__jTV10BuxQ_JewCLcB/s320/20160408_102352.jpg\" xss=removed></a></p>\r\n\r\n<p> </p>\r\n\r\n<p>Toss....heula  .dicekapkeun  dugi kadieu .....</p>\r\n', 'pensi-smp-necis-201516'),
('5ee335a6ec63d', '14:58, 12 Jun 2020', '1591948710wu70zhmgxjb11.png', 'asdasd', '<p>adsawdadwadawdadawd</p>\r\n', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` varchar(255) NOT NULL,
  `description_gallery` varchar(5000) NOT NULL,
  `time_gallery` varchar(255) NOT NULL,
  `image_gallery` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `description_gallery`, `time_gallery`, `image_gallery`) VALUES
('5ed8875f8a503', '1', '12:32, 04 Jun 2020', '1591248735DSC04125_resize.JPG'),
('5ed8876399717', '2', '12:32, 04 Jun 2020', '1591248739DSC04057_resize.JPG'),
('5ed8876905d8d', '3', '12:32, 04 Jun 2020', '1591248745DSC04065_resize.JPG'),
('5ed8876dc2443', '4', '12:32, 04 Jun 2020', '1591248749DSC04151_resize.JPG'),
('5ed8877216020', '5', '12:32, 04 Jun 2020', '1591248754DSC04146_resize.JPG'),
('5ed88776323a9', '6', '12:32, 04 Jun 2020', '1591248758DSC04059_resize.JPG'),
('5ed8877e12d0c', '7', '12:32, 04 Jun 2020', '1591248766DSC04126_resize.JPG'),
('5ed887855fa35', '8', '12:32, 04 Jun 2020', '1591248773DSC04057_resize.JPG'),
('5ed88790f39e4', '9', '12:33, 04 Jun 2020', '1591248784DSC04121_resize.JPG'),
('5ed887979a95a', '10', '12:33, 04 Jun 2020', '1591248791DSC04122_resize.JPG'),
('5ed8879d6b590', '11', '12:33, 04 Jun 2020', '1591248797DSC04059_resize.JPG'),
('5ed887a71fc79', '12', '12:33, 04 Jun 2020', '1591248807DSC04056_resize.JPG'),
('5ed887ae6e0b1', '13', '12:33, 04 Jun 2020', '1591248814DSC04053_resize.JPG'),
('5ed887b85ad9a', '14', '12:33, 04 Jun 2020', '1591248824DSC04060_resize.JPG'),
('5ed887e51bb24', '13', '12:34, 04 Jun 2020', '1591248869101_1622_resize.jpg'),
('5ed887eb1fd26', '15', '12:34, 04 Jun 2020', '1591248875Foto1198_resize.jpg'),
('5ed887f5e5fad', '16', '12:34, 04 Jun 2020', '1591248885DSC04140_resize.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `name`, `email`, `password`, `date_created`) VALUES
(6, 'dede heri', 'dede@dede.com', '$2y$10$80l4XZhr0hOhWNW8EUTdpeShbdxHaOGLFyiOQFxi0IWrcMqRnyYJO', '6'),
(7, 'dede', 'heri@heri.com', '$2y$10$YNmOYYpxFeL1Ga2ySkHEWeRPJ9FzuOh4uL.8scjIy0DFQnWRFSq3y', '06:25, Apr 20 2020'),
(8, 'dede heri', 'dedeherii60@gmail.com', '$2y$10$LnHVq/Trjo/9bhNNgQB3C.jROBJ10dVp0l010GRLzqQ8ATrXWhV.G', 'May 04 2020'),
(9, 'dede', 'dedeherii@heri.com', '$2y$10$q2ffJrL0bp0Zp3bmZOcYd.0CrPB.pcIOhY84kynQPCsbRpZbCiwA.', 'Jun 07 2020'),
(10, 'daslim', 'daslim@daslim.com', '$2y$10$s.tWGGc8y7X5gxGg.661Wesc52kmy.rTvWqUcjQkIGylTI3dTIlXi', 'Jun 11 2020'),
(12, 'dede heri', 'topi@topi.com', '$2y$10$kmEkj9mxlMTm1TQlqrXAF.g025N/pim.RJ5foWxauR386bfOvlW7a', 'Jun 11 2020'),
(13, 'jerami', 'jerami@jerami.com', '$2y$10$eIyR6TUQ00L/MhgUiEBRc.TJJmyAchyAjKhXlxTIaezSmUj7K703K', 'Jun 12 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_massage`
--

CREATE TABLE `tb_massage` (
  `id_massage` varchar(255) NOT NULL,
  `name_massage` varchar(255) NOT NULL,
  `email_massage` varchar(255) NOT NULL,
  `content_massage` varchar(5000) NOT NULL,
  `time_massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_massage`
--

INSERT INTO `tb_massage` (`id_massage`, `name_massage`, `email_massage`, `content_massage`, `time_massage`) VALUES
('5edb7f4b93d90', 'dede heri', 'dedeheri@gmail.com', 'Sekolah yang bagus.', '18:34, Jun 06 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organization`
--

CREATE TABLE `tb_organization` (
  `id_organization` varchar(255) NOT NULL,
  `time_organization` varchar(255) NOT NULL,
  `image_organization` varchar(255) NOT NULL,
  `description_organization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_organization`
--

INSERT INTO `tb_organization` (`id_organization`, `time_organization`, `image_organization`, `description_organization`) VALUES
('5ed9e28219d20', '13:13, 05 Jun 2020', '1591337602struktur.jpg', 'Struktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_teacher`
--

CREATE TABLE `tb_teacher` (
  `id_teacher` varchar(255) NOT NULL,
  `name_teacher` varchar(255) NOT NULL,
  `image_teacher` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `subject_teacher` varchar(255) NOT NULL,
  `nip_teacher` varchar(255) NOT NULL,
  `nuptk_teacher` varchar(255) NOT NULL,
  `ttl_teacher` varchar(255) NOT NULL,
  `education_teacher` varchar(255) NOT NULL,
  `status_teacher` varchar(255) NOT NULL,
  `address_teacher` varchar(255) NOT NULL,
  `time_teacher` varchar(255) NOT NULL,
  `slug_teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_teacher`
--

INSERT INTO `tb_teacher` (`id_teacher`, `name_teacher`, `image_teacher`, `subject_teacher`, `nip_teacher`, `nuptk_teacher`, `ttl_teacher`, `education_teacher`, `status_teacher`, `address_teacher`, `time_teacher`, `slug_teacher`) VALUES
('5ed9e3e0e6c16', 'Sri Novitasanti, S.Pd', '1591338272SriNovi.jpg', 'Matematika ', '-', '-', '-', '-', '-', '-', '13:19, 05 Jun 2020', 'sri-novitasanti-spd'),
('5ed9e6a2d9f80', 'Nurhidayat,S.Pd', '1591338658Nurhidayat.jpg', '-', '-', '-', '-', '-', '-', '-', '13:30, 05 Jun 2020', 'nurhidayatspd'),
('5ed9f42c0032f', 'Bayu Sukma,S.Pd', '1591342123BayuSukma.jpg', 'TIK', '-', '-', '-', '-', '-', '-', '14:28, 05 Jun 2020', 'bayu-sukmaspd'),
('5ed9f45d524c3', 'Iis Dahlia,S.Pdi', '1591342173iis.jpg', 'PAI', '-', '-', '-', '-', '-', '-', '14:29, 05 Jun 2020', 'iis-dahliaspdi'),
('5ed9f4785f388', 'Laela R,S.Pd', '1591342200Leala.jpg', 'Matematika', '-', '-', '-', '-', '-', '-', '14:30, 05 Jun 2020', 'laela-rspd'),
('5ed9f4969def0', ' Sumpena, S.Pd', '1591342230100_2858_resize.jpg', 'Matematika', '-', '-', '-', '-', '-', '-', '14:30, 05 Jun 2020', 'sumpena-spd'),
('5ed9f4ad126cc', ' Drs. H. Ateng Somali', '1591342253100_2860_resize.jpg', 'Matematika', '-', '-', '-', '-', '-', '-', '14:30, 05 Jun 2020', 'drs-h-ateng-somali'),
('5ed9f4c51750c', 'Yana Karyana, S.Pd', '1591342277100_2878_resize.jpg', 'Bahasa Indonesia', '-', '-', '-', '-', '-', '-', '14:31, 05 Jun 2020', 'yana-karyana-spd'),
('5ed9f4de11823', 'Drs. Kosmara / Wakasek Sapras', '1591342302100_2888_resize.jpg', 'Penjas', '-', '-', '-', '-', '-', '-', '14:31, 05 Jun 2020', 'drs-kosmara-wakasek-sapras');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_administration`
--
ALTER TABLE `tb_administration`
  ADD PRIMARY KEY (`id_administration`);

--
-- Indeks untuk tabel `tb_articel`
--
ALTER TABLE `tb_articel`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_massage`
--
ALTER TABLE `tb_massage`
  ADD PRIMARY KEY (`id_massage`);

--
-- Indeks untuk tabel `tb_organization`
--
ALTER TABLE `tb_organization`
  ADD PRIMARY KEY (`id_organization`);

--
-- Indeks untuk tabel `tb_teacher`
--
ALTER TABLE `tb_teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
