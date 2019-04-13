
CREATE TABLE IF NOT EXISTS `phonebook` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `email` varchar(255) NOT NULL,

  `mobile` varchar(255) NOT NULL,


  PRIMARY KEY (`id`)

) ENGINE=InnoDB;

INSERT INTO `phonebook` (`id`, `name`, `email`, `mobile`) VALUES

(1, 'Zeus' , ' zeus@wp.pl', '123456789'),

(2, 'Anthena' , 'Athena@gmail.com', '987654321'),

(3, 'Jupiter' , 'juju@o2.pl', '999999999'),

(4, 'Venus' , 'v@v.pl', '111111111');
