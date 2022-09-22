CREATE VIEW vwAlunos AS 
    SELECT codAluno, nomeAluno, cpfAluno, imgAluno, tbturma.codTurma, tbturma.nomeTurma FROM tbaluno 
        INNER JOIN tbturma ON tbturma.codTurma = tbaluno.codTurma;