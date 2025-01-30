# HNG API - Stage 0 Backend Task

This is a simple public API for retrieving basic information as part of the **HNG Internship Stage 0 Backend Task**.

##  API Endpoint

### Base URL:
https://hng-api-one.vercel.app/

### Example Response:
```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
🚀 Features
✅ Returns your registered email (used for HNG Slack).
✅ Returns the current datetime in UTC (ISO 8601 format).
✅ Provides a GitHub URL of the project’s repository.
✅ Handles CORS to allow frontend applications to consume the API.

🛠️ Tech Stack
PHP - Backend language
Vercel - Deployment platform
Setup & Deployment Procedure

Install PHP and Composer
Clone this repository:
git clone https://github.com/yourusername/hng_api.git
cd hng_api
Start a local PHP server:
php -S localhost:8000 -t api/
Open in browser
http://localhost:8000/index.php




