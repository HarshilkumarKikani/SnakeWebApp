ALTER TABLE Users ADD COLUMN points int default 0;




/* USED LATER IN QUERY

UPDATE Users set points = (SELECT
IFNULL(SUM(change), 0) FROM points_history
WHERE user_id = :uid) WHERE id = :uid
)
*/