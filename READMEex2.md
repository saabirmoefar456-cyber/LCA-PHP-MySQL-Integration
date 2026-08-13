# TechVibe

TechVibe is building a product catalogue for their online store. This
application lets the marketing team view, add, and remove products through
a simple web interface that connects to an internal API.

## Tech Stack

- **Node.js** — JavaScript runtime for the backend server
- **Express** — web framework for building the REST API
- **Vue 3** — frontend framework for the reactive user interface
- **Vite** — fast build tool and dev server for the Vue app
- **Axios** — HTTP client used to call the API from the frontend

## Prerequisites

- Node.js installed, with npm available in the terminal
- A `.env` file in the `server` folder is required (see Environment Variables below)

## Environment Variables

In `server/.env`:

PORT=3000

## Installation

1. Clone this repository.
2. Install backend dependencies:
   
 cd server
npm install  

4. 3. Create a `.env` file in `server/` based on the Environment Variables section above.
5. Install frontend dependencies:

   cd ../client
   npm install

   ## How to Run

1. Start the backend:

 cd client
npm run dev

3. Open the Vue frontend at `http://localhost:5173/` in a browser.

## API Endpoints

| Method | Endpoint         | Description                          |
|--------|------------------|---------------------------------------|
| GET    | /products        | Returns the full list of products     |
| POST   | /products        | Adds a new product, returns the list  |
| DELETE | /products/:id    | Removes a product, returns the list   |

## Project Structure

week4_ex02_vue_api_integration/
├── server/
│ ├── server.js
│ ├── package.json
│ └── .gitignore
├── client/
│ ├── src/
│ │ └── App.vue
│ ├── package.json
│ └── index.html
└── README.md


## Screenshots

_Add screenshots of the running application here._

## Author

Sabah, Life Choices Academy YouthCode Off-Site, Cohort 2
Scroll down, commit message: Add README
Confirm it says "Commit directly to the week4-vue-api-ex-02 branch"
Click Commit changes

Once that's done, upload the rest of the project (the server and client folders, minus node_modules and .env) the same way as before — Add file → Upload files on that same branch.

Let me know once the README's in, and we'll do the rest of the upload.

## Screenshots

_Add screenshots of the running application here._

## Author

Sabah, Life Choices Academy YouthCode Off-Site, Cohort 2
