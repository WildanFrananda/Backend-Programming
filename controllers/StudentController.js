// Import model student
const Student = require("../models/Student")

// Create class StudentController
class StudentController {
    // Create method index
    async index(req, res) {
        // Get all data students
        const students = await Student.all()

        // Show all data students
        const data = {
            message: "Show all students data",
            data: students
        }

        res.json(data)
    }

    // Create store method
    async store(req, res) {
        // Store data students
        const students = await Student.create(req.body)

        // Student stored status
        const data = {
            message: "Create data students",
            data: students
        }

        res.json(data)
    }


    // Membuat method update
    update(req, res) {
        const {id} = req.params
        const {nama} = req.body

        const data = {
            message: `Mengedit data students dengan id ${id}, nama ${nama}`,
            data: []
        }
        
        res.json(data)
    }

    // Membuat method destroy
    destroy(req, res) {
        const {id} = req.params

        const data = {
            message: `Menghapus data students dengan id ${id}`,
            data: []
        }
        
        res.json(data)
    }
}

// Membuat object dari class StudentController
const object = new StudentController()

// Export object
module.exports = object

/*  
    Nama: Wildan Frananda
    NIM: 0110221345
    Rombel: 3TI15
*/