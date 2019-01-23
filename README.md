# php-moodle-api

small php project access moodle api

## Setup server
start service follow command below

    ./server-run || php -S localhost:8000
    
## Set Authorization
pass user token throw header request 

    { Authorization : token }
    
## Exmaple
request url get user token

    http://localhost:8000/getToken?username={username}&password={password}&service=moodle_mobile_app
    
request url search users (required authorize)

    http://localhost:8000/seachUser?field=username&values[0]=student1&values[1]=student2
    
list of route
    

- get token
- search users by username, email...
    