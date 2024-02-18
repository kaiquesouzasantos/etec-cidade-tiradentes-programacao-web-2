
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbaluno` (
  `codAluno` int(11) NOT NULL,
  `codTurma` int(11) NOT NULL,
  `nomeAluno` varchar(70) NOT NULL,
  `cpfAluno` varchar(15) NOT NULL,
  `imgAluno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`codAluno`);

ALTER TABLE `tbaluno`
  MODIFY `codAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

