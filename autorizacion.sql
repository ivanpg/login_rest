--
-- Base de datos: `autorizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fRegistro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `fRegistro`) VALUES
(1, 'prueba1', 'prueba1@ejemplo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2013-05-20 21:09:58'),
(2, 'prueba2', 'prueba2@ejemplo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2013-05-20 23:41:41');


