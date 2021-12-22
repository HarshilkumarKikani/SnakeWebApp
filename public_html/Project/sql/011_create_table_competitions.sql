CREATE TABLE IF NOT EXISTS Competitions (
    id int AUTO_INCREMENT PRIMARY KEY,
    names varchar(35),
    min_participants int DEFAULT 3,
    current_participants int default 0,
    join_fee int default 1,
    payout_option int;
    starting_reward int DEFAULT 1,
    current_reward int DEFAULT (starting_reward),
    paid_out tinyint(1) DEFAULT 0,
    duration int default 3,
    min_score int DEFAULT 1,
    first_place_per int,
    second_place_per int,
    third_place_per int,
    cost_to_create int DEFAULT 2,
    expires TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (first_place_per + second_place_per + third_place_per = 100)
    check (min_score >= 1),
    check (starting_reward >= 1),
    check (current_reward >= starting_reward),
    check (min_participants >= 3),
    check (current_participants >= 0),
    check (join_fee >= 0),
    check (cost_to_create >= 2)
)