`passenger_id` integer auto_increment primary key not null,
`tm_id` varchar(255) unique,
`tm_name` varchar(255),
`first_name` varchar(255) not null,
`last_name` varchar(255) not null,
`email` varchar(255) not null,
`phone_primary` varchar(255) not null,
`addr_street_1` varchar(255) not null,
`addr_street_2` varchar(255),
`addr_state` varchar(255) not null,
`addr_zip` varchar(255) not null

