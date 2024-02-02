-- Base de datos: `Calendario_Bd`
--
CREATE DATABASE calendario_bd;
USE calendario_bd;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `user`
--
create table user(
    id          int auto_increment not null,
    name        varchar(25) not null,
    password    text not null,
    constraint pk_user primary key(id),
    constraint uq_name unique(name)
) engine = InnoDB;
--
-- Volcado de datos para la tabla `user`
--
INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Ezequiel', '20.Eze.01');
COMMIT;

--
-- Estructura de tabla para la tabla `cabin`
--
create table cabin(
    id          int auto_increment not null,
    name        varchar(50) not null,
    color       varchar(10) not null,
    constraint pk_cabin primary key(id),
    constraint uq_name unique(name)
) engine = InnoDB;

--
-- Volcado de datos para la tabla `cabin`
--
INSERT INTO `cabin` (`id`, `name`, `color`) VALUES
(1, 'El Refigio', '#40E0D0'),
(2, 'El Paraiso', '#FF0000'),
(3, 'El Ceibo', '#0071c5');
COMMIT;
--
-- Estructura de tabla para la tabla `product`
--
create table events(
    id              int auto_increment not null,
    user_id         int not null,
    cabin_id        int not null,
    description     varchar(255) not null,
    color           varchar(10) not null,
    start           datetime not null,
    until           datetime not null,
    constraint pk_events primary key(id),
    constraint fk_events_user foreign key(user_id) references user(id),
    constraint fk_events_cabin foreign key(cabin_id) references cabin(id)
) engine = InnoDB;