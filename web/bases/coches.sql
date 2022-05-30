-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2022 a las 22:47:37
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `ID` int(11) NOT NULL,
  `Marca` varchar(20) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Foto` mediumtext NOT NULL,
  `Descripción` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`ID`, `Marca`, `Modelo`, `Foto`, `Descripcion`) VALUES
(1, 'Ferrari', 'SP48', 'https://periodismodelmotor.com/wp-content/uploads/2022/05/Ferrari-SP48-Unica.jpg', 'El potentísimo Ferrari SP48 es famoso por batir dos récords mundiales. El primero, el de mayor velocidad en una zona densamente poblada. El segundo, el de más hospitalizaciones en un intento de batir un récord mundial. Un vehículo de altos vuelos en todos los sentidos.'),
(2, 'Ferrari', 'LaFerrari', 'https://cdn.motor1.com/images/mgl/Y6NJq/s1/ferrari-laferrari.jpg', 'El Ferrari LaFerrari no es el clásico sedán de lujo. Cuenta con esa combinación explosiva de elegancia, tecnología y gran potencia.'),
(3, 'Ferrari', 'F8 Spider', 'https://www.autonocion.com/wp-content/uploads/2022/03/Ferrari-F8-Spider-de-Mansory-2.jpg', 'No es solo un coche rápido. Es un vehículo con una reputación que ni toda la publicidad dirigida del mundo puede comprar. Hay gente que, cuando ve un Ferrari F8 Spider, pide un deseo. Otros salen corriendo y gritan en busca de protección, anunciando desastres, destrucción y terribles gastos médicos. Sea como sea, has causado impresión.'),
(4, 'Mercedes', 'Clase A 2022', 'https://grupoconcesur.es/wp-content/uploads/2022/02/mercedes-clase-a-2022.jpg', 'El Mercedes Clase A 2022 es el último coche deportivo totalmente eléctrico en el mercado de alemán. Tiene una vida de batería más corta que su teléfono iPhone, de modo que todavía puede llamar a un taxi a casa cuando se mueva a un alto en medio de la nada.'),
(5, 'Mercedes', 'GLE Coupé', 'https://www.mercedes-benz.es/passengercars/mercedes-benz-cars/models/gle/coupe-c167/explore/highlights/_jcr_content/contentgallerycontainer/par/contentgallery/par/contentgallerytile_58586423/image.MQ6.8.20211117130951.jpeg', 'Este coche de lujo es para principiantes: comerciales, pringados de marketing, empleados de empresas tecnológicas que quieren sentirse como triunfadores, aunque nunca lo serán... Demuestra a la gente el tipo de persona que quieres ser.'),
(6, 'Mercedes', 'Vision AVTR', 'https://soymotor.com/sites/default/files/imagenes/noticia/mercedes-benz-vision-avtr-principal-soymotor.jpg', 'El futuro está aquí, y tiene puertas de ala de gaviota. Nunca más tendrás que volver a escoger entre el dramatismo de la carretera y la majestuosidad del cielo. Nunca más sentirás esa sacudida de pánico mientras caes accidentalmente por un precipicio. Con solo presionar un botón, pasarás por encima de árboles, montañas, tiburones, vecinos boquiabiertos y cualquier cosa que elijas.'),
(7, 'McLaren', '540C', 'https://cdn.motor1.com/images/mgl/2Y3bK/s1/mclaren-570s-coupe.jpg', 'Cuando te sientes en este coche, no querrás conducir ningún otro. Es genial en la nieve. Bueno, en realidad, si acercas esta bestia sobredimensionada a cualquier sitio húmedo, probablemente mueras. Por suerte, vives en Murcia.'),
(8, 'McLaren', '600LT', 'https://cdn.media.kaavan.es/blobs/web/78f9ddf4-a41f-4257-abd7-5c995848af60/images/wp-content/uploads/2018/09/McLaren-600LT-GlobalTestDrive-040-copia.jpg', 'El McLaren 600LT es un sedán deportivo de lujo híbrido eléctrico. No te rías. No es un oxímoron completo. Esta belleza se maneja tan bien que nunca sabrías que estás usando un enchufe. Bienvenido al futuro (siempre que tengas acceso a una estación de carga especializada).'),
(9, 'McLaren', '720S', 'https://cdn.motor1.com/images/mgl/xe22G/s1/mclaren-720s-track-pack.webp', 'Combinando el rendimiento y el diseño moderno con el clásico estilo de lujo de un coche señorial, el McLaren 720S es elegante, sexy y maneja tan bien que voy a olvidar que usted está conduciendo en él. Lo que podría ser un problema en 240km/h.'),
(10, 'Alfa Romeo', 'Giulia GTA', 'https://www.km77.com/images/medium/8/1/1/7/alfa-romeo-giulia-gta-m.348117.jpg', 'Puede que un deportivo híbrido italiano con el frente diseñado para parecer un ceño fruncido sea demasiado para algunos pero, con un motor V6 de 4 litros, 420 hp y una velocidad máxima de 290 km/h, el Alfa Romeo Giulia GTA no es cualquier tontería.'),
(11, 'Alfa Romeo', '4C', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Festival_automobile_international_2014_-_Alfa_Romeo_4C_-_033.jpg/1200px-Festival_automobile_international_2014_-_Alfa_Romeo_4C_-_033.jpg', 'Sofisticado, superior, obsesionado con la clase y con bastante agresividad bajo el capó, este clásico de Alfa Romeo no puede ser más italiano.'),
(12, 'Alfa Romeo', 'Tonale 2022', 'https://www.diariomotor.com/imagenes/2021/05/alfa-romeo-tonale-could-premiere-in-september-2021.jpg', 'Gracias a este supercoche chillón y vulgar de Alfa Romeo, podrás asegurarte de que el 99% restante se entere de que vas en un vehículo que no pueden comprar. Terriblemente rápido y con un interior de alta tecnología, es lo más parecido a un jet sobre ruedas. Lo único mas elevado que su velocidad máxima es la cuota del seguro.\r\n\r\n'),
(13, 'Renault', 'Arkana 2022', 'https://i.ytimg.com/vi/v2M8ximYxHU/maxresdefault.jpg', 'El Renault Arkana 2022 combina el estilo y calidad del clásico vehículo de lujo francés, con las funcionalidades de una SUV de alta gama. Puede que sea el único ejemplo de fusión francés americano que funciona.'),
(14, 'Renault', 'Captur 2022', 'https://static.motor.es/fotos-noticias/2022/03/renault-captur-2022-202285442-1646654718_1.jpg', 'Desde Francia a Nowhere, EEUU, este coche de aspecto clásico pero renovado, potencia, gallardía y exclusividad hará que las cabezas giren en tu dirección. Es tan ostentoso como su consumo indica, aunque no es que eso te importe. En realidad sí que te tiene que importar, o no estarías pensando en comprártelo.'),
(15, 'Renault', 'Mégane E-TECH 2022', 'https://www.autofacil.es/wp-content/uploads/2021/11/renault_megane_e-tech_electric.jpeg', 'Los conductores del Renault Mégane E-TECH 2022 presumen de tener la esperanza de vida más corta de entre todos los consumidores de Europa. Viven (brevemente) en un mundo de riquezas de otro tiempo e ingeniería hipermoderna. Los 0.3 segundos entre que salen de la agencia y llegan a la primera esquina son los instantes más borrosos y emocionantes de sus cortísimas vidas. Solo los absurdamente ricos deben apuntarse a la lista de espera.'),
(16, 'Aston Martin', 'Victor', 'https://cdn.motor1.com/images/mgl/eJYEN/s1/aston-martin-victor-front-3-4.jpg', 'Dile a tus vecinos liberales que compren el Aston Martin Victor por su eficiencia de combustible y la reducción de las emisiones de carbono, cuando realmente lo consiguió porque se enganchan en un motor eléctrico con un motor V8 de doble turbo sólo para darle jugo extra. Como un tostador en una bañera, se trata de una síntesis peligrosa de viejas y nuevas tecnologías. Sé progresa en el único sentido real de la palabra.'),
(17, 'Aston Martin', 'Valhalla', 'https://img.remediosdigitales.com/968af4/aston_martin_valhalla02-2-/1366_2000.jpeg', 'Estadísticamente, no hay ninguna otra actividad conocida por la ciencia que tenga más probabilidad de causar hemorragias cerebrales que pisar el acelerador de un Aston Martin Valhalla. Los pilotos de las fuerzas aéreas tienen que entrenarse durante años antes de someterse a esta cantidad de fuerza G, pero afortunadamente para ti, los únicos requisitos que tienes que cumplir para ponerte tras el volante son una buena calificación de crédito y un cordial desprecio hacia los pobres. Los posavasos con acabados de diamante y el mayordomo vienen de serie.'),
(18, 'Aston Martin', 'DB11', 'https://cdn.motor1.com/images/mgl/kp6LP/s1/2022-aston-martin-db11.webp', 'Esto es lo que consigues cuando intentas empezar de cero de verdad. Toma todos tus prejuicios sobre el diseño de hipercoches, cada perla de sabiduría recibida, cada suposición asentada, cada fórmula demostrada... Júntalo todo y cúbrelo con una caliente y humeante montaña de sucia ingenuidad. El Aston Martin DB11 es un mensaje del futuro: llegáis tarde.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coches`
--
ALTER TABLE `coches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
