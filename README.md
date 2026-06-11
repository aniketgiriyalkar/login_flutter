# Flutter Login  / Register MYSQl
This is a small Flutter login/register prototype backed by PHP and MySQL. It is
best understood as an early mobile app learning project rather than a production
auth system.

## Quick start

1. Place the project under your local PHP web root.
2. Import `login_flutter.sql` into MySQL.
3. Update `api.dart` with your machine’s IP address.
4. Run the Flutter app and verify the login and register flows.

## If you modernize it later

The cleanest upgrade path is `Flutter + Supabase` or `Flutter + Firebase Auth`.
If you want to keep your own API, a `FastAPI` backend with proper auth tokens is
a much better long-term fit than ad hoc PHP endpoints.

A new Flutter project.

## Getting Started

1. copy folder `flutter_login` to `xampp/htdocs`
2. open `phpmyadmin` in your browser and import database `login_flutter.sql`
3. Check your IPADDRESS, open `cmd` write `ipconfig` and press `enter`
4. change code in file `api.dart` to <br>
``class Api {
  static String url = "http://IPADDRESS/flutter_login/check.php";
  static String regis = "http://IPADDRESS/flutter_login/register.php";
}``
5. Ok, great, happy hacking
