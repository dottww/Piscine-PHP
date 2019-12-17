SELECT `title`, `summary`
FROM `film`
WHERE lower(`summary`) LIKE lower('%Vincent%')
ORDER BY `id_film` ASC;