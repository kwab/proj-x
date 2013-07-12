`user_id` integer auto_increment primary key not null,
`userName` varchar(255) unique not null,
`userName-AD` varchar(255) unique not null,
`user_fName` varchar(255) not null,
`user_lName` varchar(255) not null,
`level` integer not null default 0,
`created_at` integer not null,
`last_login` integer not null