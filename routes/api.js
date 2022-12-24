// Import StudentController
const StudentController = require("../controllers/StudentController")

// Import express
const express = require("express")

// Create object router
const router = express.Router()

// Routing students
router.get("/students", StudentController.index)
router.post("/students", StudentController.store)
router.put("/students/:id", StudentController.update)
router.delete("/students/:id", StudentController.destroy)

// Export router
module.exports = router