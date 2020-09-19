CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `browser` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
)