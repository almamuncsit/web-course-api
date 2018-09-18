# Web Course API

A very small Laravel package for providing api for web course vue client. This package provide a list of all courses, details of course with sections and lessons, details of a lesson, registration and login. I used passport for api authentication, puhser for broadcasting database and email notifications, redis for queue.

## Laravel packages need to use this package

* "laravel/passport": For API Authentication
* "predis/predis": For using Redis
* "pusher/pusher-php-server": For using pusher with broadcasing
* "barryvdh/laravel-cors": For API call without CSRF token

## API for frontend development

### All courses

```
course/api/all-courses
```

This api provide al list of courses. This API don't need authentication

### Single course

```
course/api/course/{id}
```

This api provide a course details with all sections and lessons of the course.This api need authentication.

### Single Lesson

```
course/api/lesson/{id}
```

This api provide a lesson details. This API need authentication.

### Registration

```
course/api/register
```

This API is for registraion. It accept POST request with name, email, password, and password_confirmation properties. Each field is required.

### Login

```
oauth/token
```

This is a api of passport package. It accept POST request with client_id, client_secret, grant_type, username (email), password
