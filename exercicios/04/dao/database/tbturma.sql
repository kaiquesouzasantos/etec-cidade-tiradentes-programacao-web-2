
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbturma` (
  `codTurma` int(11) NOT NULL,
  `nomeTurma` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tbturma`
  ADD PRIMARY KEY (`codTurma`);

ALTER TABLE `tbturma`
  MODIFY `codTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
