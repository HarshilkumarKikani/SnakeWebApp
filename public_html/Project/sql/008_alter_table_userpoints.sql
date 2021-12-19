ALTER TABLE Users ADD COLUMN points int
not null default (0)
COMMENT 'Points field defaults to 0';