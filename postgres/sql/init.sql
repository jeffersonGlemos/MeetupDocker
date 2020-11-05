
CREATE TABLE posts
(
    id uuid default gen_random_uuid () PRIMARY KEY,
    descricao varchar
);

insert into posts default values;