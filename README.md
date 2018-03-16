# FAG Get user profile
Its an API which retrieves the profile of one Facebook user, using the Facebook API Graph

# INSTALL:
Clone project:

```
$ git clone https://github.com/sebasnob/fag-get-profile.git
```

Install dependencies

```
$ cd fag-get-profile
$ composer install
```


# HOW TO USE:
Requests Examples:

Get facebook profile from user '2013':

```
$ curl http://localhost:8080/facebook/users/2013
```

Response:

```
Status: 200 OK

{
    "id": "2013",
    "first_name": "Couper",
    "last_name": "Samuelson"
}
```