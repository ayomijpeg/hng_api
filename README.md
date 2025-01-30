# HNG API - Stage 0 Backend Task

This is a simple public API for retrieving basic information as part of the **HNG Internship Stage 0 Backend Task**.

## 🚀 Features

*   ✅ Returns your registered email (used for HNG Slack).
*   ✅ Returns the current datetime in UTC (ISO 8601 format).
*   ✅ Provides a GitHub URL of the project’s repository.
*   ✅ Handles CORS to allow frontend applications to consume the API.
## 🔗 Additional Resources  
If you're looking to hire expert PHP developers, check out [Hire PHP Developers](https://hng.tech/hire/php-developers).


## 🛠️ Tech Stack

*   PHP - Backend language
*   Vercel - Deployment platform

## API Endpoint

## How to Run the Project Locally

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/hng_api.git
    cd hng_api
    ```

2.  **Install dependencies:**

    ```bash
    composer install
    ```

3.  **Start the PHP server:**

    ```bash
    php -S localhost:8000 -t api/
    ```

4.  **Access the API:**

    You can access the API by opening your browser to `http://localhost:8000/index.php` or by using `curl`.

### Base URL:

`https://hng-api-one.vercel.app/`

### Example Response:

```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
