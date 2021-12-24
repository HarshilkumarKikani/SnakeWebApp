CREATE TABLE IF NOT EXISTS payout_options_table (
    id int AUTO_INCREMENT PRIMARY KEY,
    first_place_per int default 70,
    second_place_per int default 20,
    third_place_per int default 10,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (first_place_per + second_place_per + third_place_per = 100)
)