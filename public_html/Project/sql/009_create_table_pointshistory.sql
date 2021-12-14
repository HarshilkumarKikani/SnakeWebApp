CREATE TABLE IF NOT EXISTS points_history (
    id int AUTO_INCREMENT PRIMARY KEY ,
    user_id int,
    point_change int,
    reason varchar(30),
    created int,

    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    constraint ZeroTransferNotAllowed CHECK(diff != 0)

)