// Import mysql
const mysql = require("mysql")

// Import config database
require("dotenv").config()

// destructuring object process.env
const {DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE} = process.env

// Create connection
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USERNAME,
    password: DB_PASSWORD,
    database: DB_DATABASE
})

// Connect to database
db.connect((err) => {
    if(err) {
        console.log("Error connecting " + err.stack)
    }
    else {
        console.log("Database connected")
    }
})

// Export connection
module.exports = db