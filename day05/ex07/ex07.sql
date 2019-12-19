SELECT `title`, `summary`
FROM `film`
WHERE lower(`summary`) LIKE lower('%42%') OR lower(`title`) LIKE lower('%42%') 
ORDER BY `duration` ASC;