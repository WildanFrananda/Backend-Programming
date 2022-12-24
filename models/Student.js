// Import Database
const db = require("../config/database")

// Create class Student
class Student {
    // Create method all
    static all() {
        // return promise
        return new Promise((resolve, reject) => {
            // Create query
            const sql = "SELECT * FROM students"

            // Run query
            db.query(sql, (err, results) => {
                if(err) {
                    reject(err)
                }
                else {
                    resolve(results)
                }
            })
        })
    }

    // Create method create
    static create(data) {
        // return promise
        return new Promise((resolve, reject) => {
            // Create query
            const sql = "INSERT INTO students SET ?"

            // Run query
            db.query(sql, data, (err, results) => {
                if(err) {
                    reject(err)
                }
                else {
                    resolve(results)
                }
            })
        })
    }
}

// Export class Student
module.exports = Student