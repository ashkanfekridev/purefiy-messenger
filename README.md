# purefiy-messenger

this is a pure messenger with php

## Database tables

### users

| name     | type         | null | extra                   |
|----------|--------------|------|-------------------------|
| id       | integer      | no   | auto-increment, primary |
| uuid     | varchar(36)  | no   | primary                 |
| password | varchar(100) | no   |                         |


### chats

| name          | type        | null | extra                   |
|---------------|-------------|------|-------------------------|
| id            | integer     | no   | auto-increment, primary |
| uuid          | varchar(36) | no   |                         |
| user_uuid     | varchar(36) | no   |                         |
| expiration_at | timestamp   | yes  |                         |

### messages

| name          | type        | null | extra                   |
|---------------|-------------|------|-------------------------|
| id            | integer     | no   | auto-increment, primary |
| uuid          | varchar(36) | no   |                         |
| user_uuid     | varchar(36) | no   |                         |
| text          | text        | no   |                         |
| expiration_at | timestamp   | yes  |                         |


