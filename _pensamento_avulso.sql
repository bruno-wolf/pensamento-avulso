-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2020 at 09:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etic_pensamento_avulso`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pt_text` text NOT NULL,
  `en_text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `pt_text`, `en_text`, `image`, `slug`, `publish`, `date_added`) VALUES
(1, 'Marco da Silva Ferreira', '<p>Nascido em 1986, de Santa Maria da Feira. Int&eacute;rprete profissional desde 2008 tendo trabalhado com Andr&eacute; Mesquita, Hofesh Shechter, Tiago Guedes, Victor Hugo Pontes, Paulo Ribeiro, entre outros. Como core&oacute;grafo destaca HU(R)MANO (2014) e BROTHER (2017). Assistente coreogr&aacute;fico da pe&ccedil;a Hamlet (2014) da Mala Voadora e em Veraneantes (2017) de Nuno Cardoso; de Victor Hugo Pontes nas cria&ccedil;&otilde;es Se alguma vez precisares da minha vida, vem e toma-a e Carnaval (ambas de 2016).</p>', '<p>Born in 1986, from Santa Maria da Feira. Professional interpreter since 2008 having worked with Andr&eacute; Mesquita, Hofesh Shechter, Tiago Guedes, Victor Hugo Pontes, Paulo Ribeiro, among others. As a choreographer, he highlights HU (R) MANO (2014) and BROTHER (2017). Choreographic assistant in the play Hamlet (2014) of Mala Voadora and in Holidaymakers (2017) by Nuno Cardoso; by Victor Hugo Pontes in the creations If you ever need my life, come and take it and Carnaval (both from 2016).</p>', 'marco-ferreira.jpg', 'Marco-da-Silva-Ferreira', 1, '2020-04-13 21:34:51'),
(2, 'Mara Andrade', '<p>Mara Andrade nasceu em 1987. Entre Medicina e Dan&ccedil;a, inspira-se na fisicalidade de estados emocionais e como se transformam uns nos outros. Criou &ldquo;Uma Pequena Morte e Psican&aacute;lise&rdquo; em 2012. Em 2013, com &ldquo;Oxitocina&rdquo;, representou Portugal na VI Bienal de Jovens Criadores em Salvador da Bahia e cocriou &ldquo;Por minha Culpa minha t&atilde;o grande culpa&rdquo; com Marco da Silva Ferreira. Entre 2014 e 2015 criou o solo \"Um Triste Ensaio sobre a Beleza\" que estreou a 4 de Outubro de 2015 no Teatro Campo Alegre, Porto.</p>', '<p>Mara Andrade was born in 1987. Between Medicine and Dance, she is inspired by the physicality of emotional states and how they transform into each other. He created &ldquo;A Little Death and Psychoanalysis&rdquo; in 2012. In 2013, with &ldquo;Oxytocin&rdquo;, he represented Portugal at the 6th Biennial of Young Creators in Salvador da Bahia and co-created &ldquo;Por minha Culpa my so great fault&rdquo; with Marco da Silva Ferreira. Between 2014 and 2015 he created the solo \"Um Triste Ensaio sobre a Beleza\", which premiered on October 4, 2015 at Teatro Campo Alegre, Porto.</p>', 'mara-andrade.jpg', 'Mara-Andrade', 1, '2020-04-13 21:35:52'),
(4, 'Um Bruno', '<p>Bem, o jeito que eles fazem shows &eacute;, eles fazem um show. Esse programa &eacute; chamado de piloto. Em seguida, eles mostram esse show para as pessoas que fazem shows, e com a for&ccedil;a desse show, eles decidem se v&atilde;o fazer mais shows. Alguns pilotos s&atilde;o escolhidos e se tornam programas de televis&atilde;o. Alguns n&atilde;o se tornam nada. Ela estrelou uma daquelas que se tornaram nada.</p>', '<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>', 'fura-3.jpg', 'Um-Bruno', 1, '2020-04-26 00:00:00'),
(5, 'Uma Maria', '<p>O caminho do homem justo &eacute; percorrido por todos os lados pelas iniq&uuml;idades dos ego&iacute;stas e pela tirania dos homens maus. Bem-aventurado aquele que, em nome da caridade e da boa vontade, conduz os fracos atrav&eacute;s do vale das trevas, pois ele &eacute; verdadeiramente o guardador de seu irm&atilde;o e o descobridor de filhos perdidos. E golpearei sobre ti com grande vingan&ccedil;a e raiva furiosa aqueles que tentariam envenenar e destruir Meus irm&atilde;os. E voc&ecirc; saber&aacute; que Meu nome &eacute; o Senhor quando eu lan&ccedil;ar a minha vingan&ccedil;a sobre ti.</p>', '<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother\'s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>', 'sigur.jpg', 'Uma-Maria', 1, '2020-04-26 00:00:00'),
(6, 'Um Nuno', '<p><span style=\"font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\">Voc&ecirc; v&ecirc; algum Teletubbies aqui? Voc&ecirc; v&ecirc; uma etiqueta de pl&aacute;stico delgada presa na minha camisa com o meu nome impresso? Voc&ecirc; v&ecirc; uma crian&ccedil;a asi&aacute;tica com uma express&atilde;o vazia no rosto, sentada do lado de fora de um helic&oacute;ptero mec&acirc;nico que treme quando voc&ecirc; coloca quartos nele? N&atilde;o? Bem, &eacute; o que voc&ecirc; v&ecirc; em uma loja de brinquedos. E voc&ecirc; deve pensar que est&aacute; em uma loja de brinquedos, porque est&aacute; aqui comprando uma crian&ccedil;a chamada Jeb.</span></p>', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.</p>', 'gira-2.jpg', 'Um-Nuno', 0, '2020-04-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `creations`
--

CREATE TABLE `creations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist_id` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `pt_summary` varchar(255) NOT NULL,
  `en_summary` varchar(255) NOT NULL,
  `pt_text` text NOT NULL,
  `en_text` text NOT NULL,
  `pt_credits` text NOT NULL,
  `en_credits` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL,
  `date added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `creations`
--

INSERT INTO `creations` (`id`, `title`, `artist_id`, `date_start`, `date_end`, `pt_summary`, `en_summary`, `pt_text`, `en_text`, `pt_credits`, `en_credits`, `image`, `slug`, `publish`, `date added`) VALUES
(1, 'H(u)rmano', '1', '2020-04-04', '2020-04-18', '<p>Em Hu(r)mano, os int&eacute;rpretes elevam-se a uma atmosfera paralela ao real, numa reflex&atilde;o imagin&aacute;ria em torno do &ldquo;movimento humano urbano&rdquo; e da sua condi&ccedil;&atilde;o vital.</p>', '<p>In Hu(r)mano, the interpreters rise to an atmosphere parallel to the real, in an imaginary reflection around the &ldquo;urban human movement&rdquo; and its vital condition.</p>', '<p>Em Hu(r)mano, os int&eacute;rpretes elevam-se a uma atmosfera paralela ao real, numa reflex&atilde;o imagin&aacute;ria em torno do &ldquo;movimento humano urbano&rdquo; e da sua condi&ccedil;&atilde;o vital. Esta &eacute; uma busca constante do significado da da Nestes seres que se transumanizam existe uma imin&ecirc;ncia que os move. Um g&eacute;nero de manifesto que se conflui com os estares destes performers e com o que ficou contido neles.</p>', '<p>In Hu(r)mano, the interpreters rise to an atmosphere parallel to the real, in an imaginary reflection around the &ldquo;urban human movement&rdquo; and its vital condition. This is a constant search for the meaning of In these beings that are transhumanized there is an imminence that moves them. A kind of manifesto that converges with the lives of these performers and with what was contained in them.</p>', '<p><strong>direc&ccedil;&atilde;o e coreografia</strong> Marco da Silva Ferreira</p>\r\n<p><strong>assist&ecirc;ncia de direc&ccedil;&atilde;o</strong> Mara Andrade</p>\r\n<p><strong>interpreta&ccedil;&atilde;o </strong>Ana&iacute;sa Lopes, Duarte Valadares, Marco da Silva Ferreira, V&iacute;tor Fontes; (Andr&eacute; Cabral e Gon&ccedil;alo Cabral)</p>\r\n<p><strong>direc&ccedil;&atilde;o t&eacute;cnica e desenho de luz </strong>Wilma Moutinho</p>\r\n<p><strong>m&uacute;sica </strong>Rui Lima e S&eacute;rgio Martins</p>\r\n<p><strong>produ&ccedil;&atilde;o executiva </strong>C&eacute;lia Machado</p>\r\n<p><strong>produ&ccedil;&atilde;o </strong>Pensamento avulso, associa&ccedil;&atilde;o de artes performativas coprodu&ccedil;&atilde;o Teatro Municipal do Porto-Rivoli e Campo Alegre; Materiais</p>\r\n<p><strong>Diversos parceiros </strong>Jazzy Dance Studio; Feira Viva; o espa&ccedil;o do tempo, Teatro Virg&iacute;nia e Quinta do Rio</p>\r\n<p><strong>financiado por </strong>Governo de Portugal/ Secret&aacute;rio de Estado da Cultura/ DGArtesDire&ccedil;&atilde;o Geral</p>\r\n<p><strong>apoio </strong>Aerowaves Priority Companies 2015</p>', '<p><strong>direction and choreography </strong>Marco da Silva Ferreira</p>\r\n<p><strong>management assistance </strong>Mara Andrade</p>\r\n<p><strong>performance</strong> Ana&iacute;sa Lopes, Duarte Valadares, Marco da Silva Ferreira, V&iacute;tor Fontes; (Andr&eacute; Cabral and Gon&ccedil;alo Cabral)</p>\r\n<p><strong>technical </strong>direction and lighting design Wilma Moutinho</p>\r\n<p><strong>music</strong> Rui Lima and S&eacute;rgio Martins</p>\r\n<p><strong>executive production </strong>C&eacute;lia Machado</p>\r\n<p><strong>production </strong>Pensamento avulso, performing arts association coproduction Teatro Municipal do Porto-Rivoli and Campo Alegre;</p>\r\n<p><strong>Miscellaneous materials </strong>Jazzy Dance Studio partners; <span style=\"font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\">Living fair; the space of time, Virg&iacute;nia Theater and Quinta do Rio</span></p>\r\n<p><strong>financed by</strong> the Government of Portugal / Secretary of State for Culture / DGArtes General Directorate for priority aircraft companies 2015</p>', 'hurmano.jpg', 'Hurmano', 1, '2020-04-13 21:29:34'),
(2, 'Lonely dinner', '2', '2020-08-08', '2020-08-21', '<p>Esta &eacute; uma busca constante do significado da dan&ccedil;a enquanto produto abstrato, mut&aacute;vel e ef&eacute;mero, que se gera intuitivamente nos universos contempor&acirc;neos.</p>', '<p>This is a constant search for the meaning of dance as an abstract, changeable and ephemeral product, which is intuitively generated in contemporary universes.</p>', '<p>A alimenta&ccedil;&atilde;o, o t&eacute;dio, a sobreviv&ecirc;ncia. Sento-me &agrave; mesa. Fico hidratada e nutrida. Carrego-me de vitalidade: &ldquo;- Une courgette, une danse.&rdquo; Proponho-me a uma tarefa simples, aprendida e independente para que o meu corpo se torne reativo e se exiba. Penso na simplicidade da a&ccedil;&atilde;o e do contexto como potenciadores de uma figura que vir&aacute; e tomar&aacute; este corpo que ser&aacute; performativo. Poderia ser qualquer outra tarefa mas escolhi o jantar, pelo tempo que me toma, pelas cores, pelos sabores, pelas texturas, pela comunh&atilde;o. Esta ser&aacute; a primeira experi&ecirc;ncia de uma s&eacute;rie de estudos onde pretendo explorar e documentar a utilidade performativa do meu corpo. &ndash; Mara Andrade</p>', '<p>Food, boredom, survival. I sit down at the table. I stay hydrated and nourished. I am charged with vitality: &ldquo;- Une courgette, une danse.&rdquo; I propose myself a simple, learned and independent task so that my body becomes reactive and shows off. I think of the simplicity of the action and the context as enhancers of a figure that will come and take this body that will be performative. It could be any other task, but I chose dinner, for the time it takes me, for the colors, the flavors, the textures, the communion. This will be the first experience in a series of studies where I intend to explore and document my body\'s performative utility. - Mara Andrade</p>', '<p><strong>Dire&ccedil;&atilde;o, coreografia e interpreta&ccedil;&atilde;o </strong>Mara Andrade</p>\r\n<p><strong> Assist&ecirc;ncia de dire&ccedil;&atilde;o </strong>Marco da Silva Ferreira</p>\r\n<p><strong>Sonoplastia</strong> Marco da Silva Ferreira</p>\r\n<p><strong>Dire&ccedil;&atilde;o t&eacute;cnica e desenho de luz </strong>Marco da Silva da Ferreira</p>\r\n<p><strong>Fotografia </strong>Marco da Silva Ferreira e Mara Andrade</p>\r\n<p><strong>Produ&ccedil;&atilde;o </strong>Pensamento Avulso &ndash; associa&ccedil;&atilde;o de artes performativas Apoios Companhia Inst&aacute;vel, Teatro Municipal do Porto</p>', '<p><strong>Direction, choreography and interpretation </strong>Mara Andrade</p>\r\n<p><strong>Direction assistance </strong>Marco da Silva Ferreira</p>\r\n<p><strong>Sonoplasty </strong>Marco da Silva Ferreira</p>\r\n<p><strong>Technical direction and light design</strong> Marco da Silva da Ferreira</p>\r\n<p><strong>Photography </strong>Marco da Silva Ferreira and Mara Andrade</p>\r\n<p><strong>Production</strong> Pensamento Avulso - Performing Arts Association Supports Companhia Inst&aacute;vel, Municipal Theater of Porto</p>', 'lonely-dinner.jpg', 'Lonely-dinner', 1, '2020-04-13 21:36:48'),
(4, 'Oxicotina 100mg', '2', '2020-02-20', '2020-03-20', '<p>Esta &eacute; uma busca constante do significado da dan&ccedil;a enquanto produto abstrato, mut&aacute;vel e ef&eacute;mero, que se gera intuitivamente nos universos contempor&acirc;neos.</p>', '<p>This is a constant search for the meaning of dance as an abstract, changeable and ephemeral product, which is intuitively generated in contemporary universes.</p>', '<p>A \"Oxitocina\" de Mara Andrade &eacute; uma \"performance\" sobre a mulher e o seu corpo enquanto fonte e instrumento de prazeres ef&eacute;meros que n&atilde;o disfar&ccedil;am o sofrimento. De seguida, a artista junta-se a Marco da Silva Ferreira na interpreta&ccedil;&atilde;o de \"Por Minha Culpa, Minha T&atilde;o Grande Culpa\", uma pe&ccedil;a sobre um tipo de felicidade, porventura s&aacute;dica, que s&oacute; nasce da observa&ccedil;&atilde;o da infelicidade alheia.</p>', '<p>Mara Andrade\'s \"Oxytocin\" is a \"performance\" about women and their bodies as a source and instrument of ephemeral pleasures that do not disguise suffering. Then, the artist joins Marco da Silva Ferreira in the interpretation of \"Por Minha Culpa, Minha T&atilde;o Grande Culpa\", a play about a type of happiness, perhaps sadistic, that is only born from the observation of others\' unhappiness.</p>', '<p><strong>Interpreta&ccedil;&atilde;o: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Coreografia:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Direc&ccedil;&atilde;o art&iacute;stica: </strong>Mara Andrade, Marco da Silva Ferreira</p>', '<p><strong>Interpretation: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Choreography: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Artistic direction: </strong>Mara Andrade, Marco da Silva Ferreira</p>', 'oxitona.jpg', 'Oxicotina-100mg', 1, '2020-04-13 21:42:51'),
(5, 'Estúdio 222', '4', '2020-04-15', '2020-04-25', '<p>Agora que sabemos quem você é, eu sei quem eu sou. Eu não sou um erro! Tudo faz sentido! Em uma história em quadrinhos, você sabe como saber quem será o arqui-vilão?</p>', '<p>Now that we know who you are, I know who I am. I\'m not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain\'s going to be?</p>', '<p>Agora que sabemos quem você é, eu sei quem eu sou. Eu não sou um erro! Tudo faz sentido! Em uma história em quadrinhos, você sabe como saber quem será o arqui-vilão?</p>', '<p>Now that we know who you are, I know who I am. I\'m not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain\'s going to be?</p>', '<p><strong>Interpretação: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Coreografia: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Direcção artística: </strong>Mara Andrade, Marco da Silva Ferreira</p>', '<p><strong>Interpretation:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Choreography: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Artistic direction: </strong>Mara Andrade, Marco da Silva Ferreira</p>', 'fura-4.jpg', 'Estudio-222', 1, '0000-00-00 00:00:00'),
(6, 'A Dança De Um Mentecapto', '4', '2020-05-09', '2020-05-23', '<p>Normalmente, seus dois estariam mortos como frango frito, mas voc&ecirc; faz essa merda enquanto estou em um per&iacute;odo de transi&ccedil;&atilde;o, ent&atilde;o eu n&atilde;o quero te matar, eu quero te ajudar.</p>', '<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I\'m in a transitional period so I don\'t wanna kill you, I wanna help you.</p>', '<p>Normalmente, seus dois estariam mortos como frango frito, mas voc&ecirc; faz essa merda enquanto estou em um per&iacute;odo de transi&ccedil;&atilde;o, ent&atilde;o eu n&atilde;o quero te matar, eu quero te ajudar.</p>', '<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I\'m in a transitional period so I don\'t wanna kill you, I wanna help you.</p>', '<p><strong>Interpreta&ccedil;&atilde;o:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Coreografia:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Direc&ccedil;&atilde;o art&iacute;stica:</strong> Mara Andrade, Marco da Silva Ferreira</p>', '<p><strong>Interpretation:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Choreography: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Artistic direction: </strong>Mara Andrade, Marco da Silva Ferreira</p>', 'fura-2.jpg', 'A-Danca-De-Um-Mentecapto', 1, '0000-00-00 00:00:00'),
(7, 'echo$', '5', '2020-04-26', '2020-04-30', '<p>Agora que existe o Tec-9, uma pistola de baixa qualidade do sul de Miami. Esta arma &eacute; anunciada como a arma mais popular no crime americano. Voc&ecirc; acredita nessa merda? Na verdade, diz que no livrinho que vem com ele: a arma mais popular da', '<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American&', '<p>Agora que existe o Tec-9, uma pistola de baixa qualidade do sul de Miami. Esta arma &eacute; anunciada como a arma mais popular no crime americano. Voc&ecirc; acredita nessa merda? Na verdade, diz que no livrinho que vem com ele: a arma mais popular da Am&eacute;rica</p>', '<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American</p>', '<p><strong>Interpreta&ccedil;&atilde;o:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Coreografia: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Direc&ccedil;&atilde;o art&iacute;stica: </strong>Mara Andrade, Marco da Silva Ferreira</p>', '<p><strong>Interpretation: </strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Choreography:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Artistic direction:</strong> Mara Andrade, Marco da Silva Ferreira</p>', 'gira-1.jpg', 'echo', 1, '0000-00-00 00:00:00'),
(9, 'live for each ', '6', '2020-06-26', '2020-08-27', '<p>Voc&ecirc; v&ecirc; algum Teletubbies aqui? Voc&ecirc; v&ecirc; uma etiqueta de pl&aacute;stico delgada presa na minha camisa com o meu nome impresso? Voc&ecirc; v&ecirc; uma crian&ccedil;a asi&aacute;tica com uma express&atilde;o vazia no rosto, senta', '<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put', '<p>Voc&ecirc; acha que a &aacute;gua se move rapidamente? Voc&ecirc; deveria ver gelo. Ele se move como se tivesse uma mente. Como se soubesse que matou o mundo uma vez e tem gosto por assassinato. Ap&oacute;s a avalanche, levamos uma semana para subir. Agora, n&atilde;o sei exatamente quando nos vimos, mas sei que sete de n&oacute;s sobrevivemos ao slide ... e apenas cinco conseguiram sair. Agora fizemos um juramento, que estou quebrando agora. Dissemos que dir&iacute;amos que foi a neve que matou os outros dois, mas n&atilde;o foi. A natureza &eacute; letal, mas n&atilde;o segura uma vela para o homem.</p>', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don\'t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I\'m breaking now. We said we\'d say it was the snow that killed the other two, but it wasn\'t. Nature is lethal but it doesn\'t hold a candle to man.</p>', '<p>av</p>', '<p>av</p>', 'fura-5.jpg', 'live-for-each', 0, '0000-00-00 00:00:00'),
(10, 'if/else', '6', '2020-04-23', '2020-04-24', '<p>Voc&ecirc; acha que a &aacute;gua se move rapidamente? Voc&ecirc; deveria ver gelo. Ele se move como se tivesse uma mente. Como se soubesse que matou o mundo uma vez e tem gosto por assassinato. Ap&oacute;s a avalanche, levamos uma semana para subir. A', '<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don\'t know exactly when we turned on each other,', '<p>Seus ossos n&atilde;o quebram, os meus. Est&aacute; claro. Suas c&eacute;lulas reagem a bact&eacute;rias e v&iacute;rus de maneira diferente da minha. Voc&ecirc; n&atilde;o fica doente, eu tamb&eacute;m. Isso tamb&eacute;m est&aacute; claro. Mas, por alguma raz&atilde;o, voc&ecirc; e eu reagimos exatamente da mesma maneira que a &aacute;gua. N&oacute;s engolimos r&aacute;pido demais, engasgamos. Temos um pouco nos pulm&otilde;es, nos afogamos. Por mais irreal que possa parecer, estamos conectados, voc&ecirc; e eu. Estamos na mesma curva, apenas em extremos opostos.</p>', '<p>Your bones don\'t break, mine do. That\'s clear. Your cells react to bacteria and viruses differently than mine. You don\'t get sick, I do. That\'s also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We\'re on the same curve, just on opposite ends.</p>', '<p><strong>Interpreta&ccedil;&atilde;o:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Coreografia:</strong> Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Direc&ccedil;&atilde;o art&iacute;stica: </strong>Mara Andrade, Marco da Silva Ferreira</p>', '<p><strong>Interpretation:</strong>&nbsp;Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Choreography:&nbsp;</strong>Mara Andrade, Marco da Silva Ferreira</p>\r\n<p><strong>Artistic direction:&nbsp;</strong>Mara Andrade, Marco da Silva Ferreira</p>', 'fura-6.jpg', 'ifelse', 1, '0000-00-00 00:00:00'),
(12, 'variable ending', '1', '2020-05-01', '2020-05-30', '<p>Bem, o jeito que eles fazem shows &eacute;, eles fazem um show. Esse programa &eacute; chamado de piloto. Em seguida, eles mostram esse show para as pessoas que fazem shows, e com a for&ccedil;a desse show, eles decidem se v&atilde;o fazer mais shows. ', '<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and be', '<p>Bem, o jeito que eles fazem shows &eacute;, eles fazem um show. Esse programa &eacute; chamado de piloto. Em seguida, eles mostram esse show para as pessoas que fazem shows, e com a for&ccedil;a desse show, eles decidem se v&atilde;o fazer mais shows. Alguns pilotos s&atilde;o escolhidos e se tornam programas de televis&atilde;o. Alguns n&atilde;o se tornam nada. Ela estrelou uma daquelas que se tornaram nada.</p>', '<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>', '<p>Bem, o jeito que eles fazem shows &eacute;, eles fazem um show. Esse programa &eacute; chamado de piloto. Em seguida, eles mostram esse show para as pessoas que fazem shows, e com a for&ccedil;a desse show, eles decidem se v&atilde;o fazer mais shows. Alguns pilotos s&atilde;o escolhidos e se tornam programas de televis&atilde;o. Alguns n&atilde;o se tornam nada. Ela estrelou uma daquelas que se tornaram nada.</p>', '<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.</p>', 'gira-21.jpg', 'variable-ending', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `publish`, `date_added`) VALUES
(1, 'admin@wolf.com', '$2y$10$dr0MVCP1hQuLnUkutkJNuu1///LFO4e0NcNuinNryLFKBLyMlbxW.', 1, '2020-04-19'),
(2, 'sortemakaka@wolf.com', '$2y$10$jkCQ8CChTYWQAtfXLgAW4OGWi9/vjnD9OQofc736Q84nyq9v1GU86', 1, '2020-04-21'),
(3, 'maria@wolf.com', '$2y$10$YFzjdZNVottnz6mWD/CFJ.9ZoQLKY1DH8RUsbOsEm4FDNpoYk1dCa', 1, '2020-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creations`
--
ALTER TABLE `creations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `creations`
--
ALTER TABLE `creations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
